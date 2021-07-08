// const filter_btns = document.querySelectorAll(".filter-btn");
var $hamburger_menu = $('.hamburger-menu');
var $navbar = $('header nav');
var $links = $('.links a');
var $container = $(".grid");
var loadpage = 1;

/*
filter_btns.forEach( btn => btn.addEventListener("click", () => {
    filter_btns.forEach(button => button.classList.remove("active"));
    btn.classList.add("active");

    filter_btns.forEach(button => $(button.dataset.filter).css('display', 'none'));

    let filterValue = btn.dataset.filter;
    $(filterValue).css('display', 'block');
}));
*/

$hamburger_menu.on('click', function() {
    if(!$navbar.hasClass("open")){
        $navbar.addClass("open");
        $('body').addClass("stop-scrolling");
    } else {
        closeMenu();
    }
});

$links.each(function() {
    $(this).on('click', function(){
        closeMenu();
    });
});

function closeMenu() {
    $navbar.removeClass("open");
    $('body').removeClass("stop-scrolling");
}

$container.imagesLoaded( function() {
    $container.isotope({
        itemSelector: ".grid-item",
        layoutMode: "fitRows"
    });
});

$('.loadmore').on('click', function(){
    $.ajax({
        url: "portrait_images.php?page=" + loadpage,
        type: "get",
        datatype: "image/png",
        success: function(data){
            var $imgs = $(data); // I don't understand why this is needed but otherwise layout is fucked up
            if ($imgs.length < 11){
                $('.loadmore').css("display", "none");
            }
            $container.append($imgs);
            $container.imagesLoaded(function(){
                $container.isotope('appended', $imgs);
            })
        },
        error: function() { alert ("Loading Failed")}
    });
    loadpage++;
});