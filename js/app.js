const filter_btns = document.querySelectorAll(".filter-btn");
const hamburger_menu = document.querySelector(".hamburger-menu");
const navbar = document.querySelector("header nav");
const links = document.querySelectorAll(".links a");

filter_btns.forEach( btn => btn.addEventListener("click", () => {
    filter_btns.forEach(button => button.classList.remove("active"));
    btn.classList.add("active");

    filter_btns.forEach(button => $(button.dataset.filter).css('display', 'none'));

    let filterValue = btn.dataset.filter;
    $(filterValue).css('display', 'block');
}));

hamburger_menu.addEventListener("click", () => {
    if(!navbar.classList.contains("open")){
        navbar.classList.add("open");
        document.body.classList.add("stop-scrolling");
    } else {
        closeMenu();
    }
});

function closeMenu() {
    navbar.classList.remove("open");
    document.body.classList.remove("stop-scrolling");
}

links.forEach( link => link.addEventListener("click", () => closeMenu()));

var $container = $('.grid');
$container.imagesLoaded( function() {
    $container.isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });
});