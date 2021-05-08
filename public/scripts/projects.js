$('select').niceSelect();

$(document).ready(function() {
    $(document).on('click','.option', function () {
        let data = this.getAttribute('data-value');

        let sortURL = location.pathname + location.search.replace(/sort=(.+?)(&|$)/g, '');
        sortURL = sortURL.replace('&&', '&');
        sortURL = sortURL.replace('?&', '?');

        $.ajax({
            url: sortURL,
            data: {sort: data},
            type: 'GET',
            beforeSend: function () {
                $('#fon').css({'display': 'block'});
            },
            success: function (res) {
                $('#fon').css({'display': 'none'});
                $('.projects-list').html(res).fadeIn();

                $('select').niceSelect();

                let URL = location.search.replace(/sort=(.+?)(&|$)/g, '');
                let newURL = location.pathname + URL + (location.search ? "&" : "?") + "sort=" + data;

                newURL = newURL.replace('&&', '&');
                newURL = newURL.replace('?&', '?');

                history.pushState({}, '', newURL);
            },
        });
    });

    $(document).on('click', '.projects-list__view-btn',function () {
        let data;
        if ($(this).hasClass('view-list')) {
            data = 'list';
        } else {
            data = 'grid';
        }

        let viewURL = location.pathname + location.search.replace(/view=(.+?)(&|$)/g, '');

        viewURL = viewURL.replace('&&', '&');
        viewURL = viewURL.replace('?&', '?');

        $.ajax({
            url: viewURL,
            data: {view: data},
            type: 'GET',
            beforeSend: function () {
                $('#fon').css({'display': 'block'});
            },
            success: function (res) {
                $('#fon').css({'display': 'none'});
                $('.projects-list').html(res).fadeIn();

                $('select').niceSelect();

                let URL = location.search.replace(/view=(.+?)(&|$)/g, '');
                let newURL = location.pathname + URL + (location.search ? "&" : "?") + "view=" + data;

                newURL = newURL.replace('&&', '&');
                newURL = newURL.replace('?&', '?');

                history.pushState({}, '', newURL);
            },
        });
    });

    $(document).on('click', '.pagination .nav-link',function (e) {
        e.preventDefault();

        $.ajax({
            url: this.href,
            type: 'GET',
            beforeSend: function () {
                $('#fon').css({'display': 'block'});
            },
            success: function (res) {
                $('#fon').css({'display': 'none'});
                $('.projects-list').html(res).fadeIn();
                $('select').niceSelect();
                window.scrollTo(0,0);

                let URL = this.url;

                URL = URL.replace('&&', '&');
                URL = URL.replace('?&', '?');

                history.pushState({}, '', URL);
            },
        });
    });

    $('body').on('change', '.sidebar .check__input', function () {
        let checked = $('.check__input:checked');
        let data = '';

        checked.each(function () {
            data += this.value + ',';
        });

        let pageURL = location.pathname + location.search.replace(/page=(.+?)(&|$)/g, '');
        pageURL = pageURL.replace('&&', '&');
        pageURL = pageURL.replace('?&', '?');

        if (data) {
            $.ajax({
                url: pageURL,
                data: {filter: data},
                type: 'GET',
                beforeSend: function () {
                    $('#fon').css({'display': 'block'});
                },
                success: function (res) {
                    $('#fon').css({'display': 'none'});
                    $('.projects-list').html(res).fadeIn();
                    $('select').niceSelect();

                    data = data.slice(0, -1);

                    let URL = location.search.replace(/filter=(.+?)(&|$)/g, '');
                    let newURL = location.pathname + URL + (location.search ? "&" : "?") + 'filter=' + data;

                    newURL = newURL.replace('&&', '&');
                    newURL = newURL.replace('?&', '?');

                    newURL = newURL.replace(/page=(.+?)(&|$)/g, '');

                    newURL = newURL.replace('&&', '&');
                    newURL = newURL.replace('?&', '?');

                    history.pushState({}, '', newURL);
                    window.scrollTo(0,0);
                }
            });
        } else {
            pageURL = location.pathname + location.search.replace(/filter=(.+?)(&|$)/g, '');
            pageURL = pageURL.replace('&&', '&');
            pageURL = pageURL.replace('?&', '?');
            $.ajax({
                url: pageURL,
                type: 'GET',
                beforeSend: function () {
                    $('#fon').css({'display': 'block'});
                },
                success: function (res) {
                    $('#fon').css({'display': 'none'});
                    $('.projects-list').html(res).fadeIn();
                    $('select').niceSelect();

                    let URL = location.search.replace(/filter=(.+?)(&|$)/g, '');
                    let newURL = location.pathname + URL;

                    newURL = newURL.replace('&&', '&');
                    newURL = newURL.replace('?&', '?');

                    newURL = newURL.replace(/page=(.+?)(&|$)/g, '');
                    newURL = newURL.replace('&&', '&');
                    newURL = newURL.replace('?&', '?');

                    if(newURL.slice(-1)==='?' || newURL.slice(-1) === '&')
                    {
                        newURL = newURL.slice(0,-1);
                    }

                    history.pushState({}, '', newURL);
                    window.scrollTo(0,0);
                },
            });
        }
    });

    $('.sidebar__toggle').on('click', function () {
        $(this).toggleClass('sidebar__toggle--active');
        $('.sidebar__list').slideToggle();
    });
});




