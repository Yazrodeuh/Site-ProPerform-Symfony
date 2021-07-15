
document.querySelector('.header_navbar_burger').addEventListener("click", function(){
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