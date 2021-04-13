$(document).ready(function() {
    $('select').niceSelect();
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
})
