// Scroll Events
window.onscroll = function() { scrollFunction(); };
let nav = document.getElementById("navindex");
let navCollapse = document.getElementById("navbarSupportedContent");

function scrollFunction() {
    if (document.documentElement.scrollTop > 10) {
        nav.setAttribute("style", "height: 15vh; background: #6F584B !important");
        navCollapse.setAttribute("style", "background: #6F584B !important");


    } else {
        nav.setAttribute("style", "height: 20vh; background: transparent !important");
        navCollapse.setAttribute("style", "background: transparent !important");
    }
}