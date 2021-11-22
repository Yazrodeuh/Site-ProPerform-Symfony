
/*document.querySelector('.header_navbar_burger').addEventListener("click", function(){
    document.querySelector('#header_navigation').classList.toggle('is-open');
})


window.onscroll = function (){
    headerScroll();
}

const header = document.getElementById("nav_fixed_on_scroll");
const bandeau = document.getElementById("bandeau_top");

function headerScroll(){
    window.pageYOffset > bandeau.offsetHeight ? header.classList.add("sticky") : header.classList.remove("sticky");
}
*/
/*document.getElementById("main").style.marginTop = document.getElementById("header").offsetHeight + "px";

console.log(document.getElementById("header").offsetHeight);*/
document.addEventListener("DOMContentLoaded", function(){
    window.addEventListener('scroll', function() {
        let navbar_height;
        if (window.scrollY > document.getElementById("headerInfo").offsetHeight) {
            document.getElementById('navbar_top').classList.add('fixed-top');
            // add padding top to show content behind navbar
            navbar_height = document.querySelector('.navbar').offsetHeight;
            document.body.style.paddingTop = navbar_height + 'px';
        } else {
            document.getElementById('navbar_top').classList.remove('fixed-top');
            // remove padding top from body
            document.body.style.paddingTop = '0';
        }
    });
});
