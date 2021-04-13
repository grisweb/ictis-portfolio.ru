$(document).ready(function () {
    $(".slider-news").slick({
        prevArrow: '<button class="slide-button slide-button--prev">\n' +
            '    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
            '        <path d="M1 1L5 5L9 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n' +
            '    </svg>\n' +
            '</button>',
        nextArrow: '<button class="slide-button slide-button--next">\n' +
            '    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
            '        <path d="M1 1L5 5L9 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n' +
            '    </svg>\n' +
            '</button>',
        autoplay:true,
        autoplaySpeed: 5000
    });
});

$(document).ready(function () {
    $(".slider-mentors").slick({
        slidesToShow: 3,
        speed: 300,
        responsive:[
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2
                }
            },{
                breakpoint: 750,
                settings: {
                    slidesToShow: 1
                }
            }
        ],
        infinite: false,
        //centerMode: true,
        prevArrow: '<button class="slide-button slide-button--prev slide-button--gray">\n' +
            '    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
            '        <path d="M1 1L5 5L9 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n' +
            '    </svg>\n' +
            '</button>',
        nextArrow: '<button class="slide-button slide-button--next slide-button--gray">\n' +
            '    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
            '        <path d="M1 1L5 5L9 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n' +
            '    </svg>\n' +
            '</button>'
    });
})