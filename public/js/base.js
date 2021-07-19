
/**
 *
 * @param {HTMLElement} mod
 */
function afficherModal(mod){
    mod.style.display = "block";
    setHeight(mod);
}

/**
 *
 * @param {HTMLElement} mod
 */
function cacherModal(mod){
    mod.style.display = "none";
}

/**
 *
 * @param {HTMLElement} mod
 */
function setHeight(mod){
    mod.firstElementChild.children.item(1).height = (window.screen.height - 300) + "px";
    mod.firstElementChild.children.item(1).width = "100%"
    mod.firstElementChild.children.item(1).style.border = "none";
}


const modal_cookies = document.getElementById("myModal_cookies");

window.addEventListener("load", function(){
    verificationCookie();
})

document.getElementById("accepter_cookie").addEventListener("click", function (){
    creerCookie("accepte-cookie", "true");
    verificationCookie();
});

document.getElementById("refuser_cookie").addEventListener("click", function (){
    creerCookie("accepte-cookie", "false");
    verificationCookie();
});

function verificationCookie(){

    const recupCookie = getCookie("accepte-cookie");

    if (recupCookie === null || recupCookie === undefined){
        modal_cookies.style.display="flex";
    }else {
        modal_cookies.style.display="none";
    }
}

/**
 *
 * @param {String} name
 * @return String
 */
function getCookie(name){
    const cookies = document.cookie.split("; ");

    if(cookies.length === 0) return null;
    if(document.cookie.indexOf(name) < 0) return null;

    name = name + "=";

    for (let i = 0; i < cookies.length; i++) {
        if(cookies[i].includes(name)){
            return cookies[i].replace(name, "");
        }
    }
}

/**
 *
 * @param {String} nom
 * @param {String} valeur
 */
function creerCookie(nom, valeur){
    let date = new Date(Date.now() + 24 * 3600 * 1000); //86400000ms = 1 jour
    date = date.toUTCString();

    document.cookie = nom + "=" + valeur + "; path=/; secure; samesite=lax; expires=" + date;
}


/* Animation */

/**
 *
 * @param {HTMLElement} element
 * @param dividend
 * @return {boolean}
 */
function elementInView (element, dividend = 1){
    return (element.getBoundingClientRect().top <= (window.innerHeight || document.documentElement.clientHeight) / dividend);
}

/**
 *
 * @param {HTMLElement}element
 * @return {boolean}
 */
function elementOutofView(element){
    return (element.getBoundingClientRect().top > (window.innerHeight || document.documentElement.clientHeight));
}

/**
 *
 * @param {HTMLElement}element
 */
function displayScrollElement(element){
    if(!element.classList.contains("scrolled")){
        element.classList.add("scrolled");
    }
}

/**
 *
 * @param {HTMLElement} element
 */
function hideScrollElement(element){
    element.classList.remove("scrolled");
}

function handleScrollAnimation(){

    const scrollElements = document.getElementsByClassName("js-scroll");

    console.log("1")

    for (let i = 0; i < scrollElements.length; i++) {
        if (elementInView(scrollElements[i], 1.1)) {
            displayScrollElement(scrollElements[i]);
        } else if (elementOutofView(scrollElements[i])) {
            hideScrollElement(scrollElements[i])
        }
    }
}

document.onscroll = function (){
    console.log("oui");
}

window.addEventListener("scroll", function () {
    handleScrollAnimation();
    console.log("1");
});

window.onscroll = function (){
    console.log("2");
}

window.addEventListener("load", function () {
    handleScrollAnimation();
});



/* editeur de texte */

let range = null;
let selectedL = null;

window.addEventListener('keydown', myFunction);

function myFunction(){

    if(event.keyCode === 18){
        document.getElementById("test").innerHTML += "<ul><li></li></ul>"
    }
}

document.getElementById("test").addEventListener("mouseleave", function(){
    selectedL = window.getSelection().toString().length;
    if(selectedL > 0){
        range = window.getSelection().getRangeAt(0);
    }
});

function addListe(typeListe){
    let element = document.createElement(typeListe);
    element.append(document.createElement('li'));
    document.getElementById("test").appendChild(element);
}

function getDiv(){
    console.log(document.querySelector("iframe").contentDocument.body.innerHTML);
    document.getElementById('texteEcrit').value = document.querySelector("iframe").contentDocument.body.innerHTML;
}