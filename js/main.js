/* menu */

var navLinks = document.getElementById('navLinks')
function showMenu()
{
    navLinks.style.right = "0"
}

function hideMenu()
{
    navLinks.style.right = "-200px"
}

$('.scroll-to').on('click', function(e) {
    e.preventDefault();

    const thisTarget = $(this).attr('href');
    const targetOffset = $(thisTarget).offset().top;

    $('html, body').animate({
        scrollTop: targetOffset
    }, 600);
});

/* cookies */
var banner = document.getElementById('gala-banner')

$(banner).click(function() {
    $(".gala-banner").fadeOut();
})

var gala = document.getElementById('gala')

$(gala).mousedown(function (e) {
    if(e.button == 2) { // right click
        return false; // do nothing!
    }
})

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
