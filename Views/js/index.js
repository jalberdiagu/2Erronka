// Scroll egiterakoan, headerraren logoa txikiagoa egiten da
document.addEventListener('scroll', () => {
    const logo = document.querySelector('.logo_wrap img')
    if (window.scrollY > 0) {
        logo.classList.add('logo-sm')
    } else {
        logo.classList.remove('logo-sm')
    }
})

// Menuaren irekitzeko botoian klik egiterakoan, opzioak agertuko dira
document.getElementById('hamburger_menu').addEventListener('click', () => {
    document.getElementById('hamburger_menu').classList.toggle('menu_open')
    document.querySelector('header nav ul').classList.toggle('menu_open')
})

//Carousel
const multipleItemCarousel = document.querySelector('.carousel')

const carousel = new bootstrap.Carousel(multipleItemCarousel, {
  interval: false
})
if(window.matchMedia("(min-width:576px)").matches){
    var carouselWidth = $('.carousel-inner')[0].scrollWidth;
var cardWidth = $('.carousel-item').width();

var scrollPosition = 0;

$('.carousel-control-next').on('click', function () {
    if (scrollPosition < (carouselWidth - (cardWidth * 4))) {
        scrollPosition = scrollPosition + cardWidth;
        $('.carousel-inner').animate({
            scrollLeft: scrollPosition
        }, 600);
    }

});

$('.carousel-control-prev').on('click', function () {
    if (scrollPosition > 0) {
        scrollPosition = scrollPosition - cardWidth;
        $('.carousel-inner').animate({
            scrollLeft: scrollPosition
        }, 600);
    }

});
}else{
    $(multipleItemCarousel).addClass('slide');
}

