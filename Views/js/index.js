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
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 30,
    dots: true,
    nav: false,
    responsiveClass: true,
    responsive: {
        0: {
            items: 2,
            margin: 10,
            stagePadding: 20,
        },
        600: {
            items: 3,
            margin: 20,
            stagePadding: 50,
        },
        1000: {
            items: 4
        }
    }
});