
// Scroll egiterakoan, headerraren logoa txikiagoa egiten da
document.addEventListener('scroll', () => {
    const logo = document.querySelector('.logo_wrap img')
    if (window.scrollY > 0) {
        logo.classList.add('logo-sm')
    } else {
        logo.classList.remove('logo-sm')
    }
})
document.addEventListener('scroll', () => {
    const logo = document.querySelector('.logo_wrap h1')
    if (window.scrollY > 0) {
        logo.classList.add('titulo-sm')
    } else {
        logo.classList.remove('titulo-sm')
    }
})

// Menuaren irekitzeko botoian klik egiterakoan, opzioak agertuko dira
document.getElementById('hamburger_menu').addEventListener('click', () => {
    document.getElementById('hamburger_menu').classList.toggle('menu_open')
    document.querySelector('header nav ul').classList.toggle('menu_open')
})
try {
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
} catch (error) {
    console.log("Error en el carousel");
}
try {
    //Orga
let cartCount = 0;

function updateCartCount() {
    document.getElementById('cartCount').innerText = cartCount;
}


function addToCart() {
    cartCount++;
    updateCartCount();
    console.log(cartCount);
}


function loadCartCount() {
    const storedCount = localStorage.getItem('cartCount');
    if (storedCount) {
        cartCount = parseInt(storedCount, 10);
        updateCartCount();
    }
}

loadCartCount();

document.getElementById('addToCartBtn').addEventListener('click', function() {
    addToCart(); 
    localStorage.setItem('cartCount', cartCount);
});
} catch (error) {
    console.log("Error en el carrito");
}


