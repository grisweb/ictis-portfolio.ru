$(".page-header__toggle-nav").on("click", function (event) {
    event.preventDefault();
    $(this).toggleClass("page-header__toggle-nav--active");
    $(".page-header__site-nav").slideToggle();
})

$('.page-header__log-in').on('click',function (event) {
    event.preventDefault();
    $('.login').toggleClass('login--active');
});

$('.login__button-close').on('click',function (event) {
    event.preventDefault();
    $('.login').toggleClass('login--active');
});

