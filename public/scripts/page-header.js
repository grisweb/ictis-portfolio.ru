$(".Page-header__toggle-nav").on("click", function (event) {
    event.preventDefault();
    $(this).toggleClass("page-header__toggle-nav--active");
    $(".Page-header__site-nav").slideToggle();
})