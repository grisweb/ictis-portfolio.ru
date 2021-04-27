$(document).ready(function() {
    $('select').niceSelect();

    $('.nice-select .option').on('click', function () {
        if (!$(this).hasClass('selected')) {
            $('#fon').css({'display':'block'});
            //$.ajax();
        }
    });

    $('body').on('change', '.sidebar .check__input', function () {
        let checked = $('.check__input:checked');
        let data = '';

        checked.each(function () {
            data += this.value + ',';
        });

        if(data) {
            $.ajax({
                url: location.href,
                data: {filter: data},
                type: 'GET',
                beforeSend: function () {
                    $('#fon').css({'display':'block'});
                },
                success: function (res) {
                    $('#fon').css({'display':'none'});
                    $('.projects-list__list').html(res).fadeIn();
                    let URL = location.search.replace(/filter(.+?)(&|$)/g, '');
                    let newURL = location.pathname + URL + (location.search ? "&" : "?") + "filter=" + data;

                    newURL = newURL.replace('&&', '&');
                    newURL = newURL.replace('?&', '?');
                    history.pushState({},'', newURL);
                },
                error: function () {

                }
            });
        } else {
            window.location = location.pathname;
        }

    });


    $('.projects-list__view-btn').on('click', function () {
        if (!$(this).hasClass('projects-list__view-btn--active')) {
            $('.projects-list__view-btn--active').removeClass('projects-list__view-btn--active');
            $(this).addClass('projects-list__view-btn--active');
        }

        if ($(this).hasClass("view-list")) {
            $('.project-block').removeClass('project-block--mobile').addClass('project-block--projects');
        }
        else {
            $('.project-block').addClass('project-block--mobile').removeClass('project-block--projects');
        }
    });

    $('.sidebar__toggle').on('click', function () {
        $(this).toggleClass('sidebar__toggle--active');
        $('.sidebar__list').slideToggle();
    });
});




