
let idRubrique = -1;

window.addEventListener("load", function (){
    optionSelected("tout");
    idRubrique = -1;
    numeroPage = 1;

    actualiserPage();
});

document.getElementById("tout").addEventListener("click", function (){
    optionSelected("tout");
    idRubrique = -1;
    numeroPage = 1;

    actualiserPage();
});

document.getElementById("formations").addEventListener("click", function (){
    optionSelected("formations");
    idRubrique = 4;
    numeroPage = 1;

    actualiserPage();
});

document.getElementById("immo").addEventListener("click", function (){
    optionSelected("immo");
    idRubrique = 1;
    numeroPage = 1;

    actualiserPage();
});

document.getElementById("pe").addEventListener("click", function (){
    optionSelected("pe");
    idRubrique = 2;
    numeroPage = 1;

    actualiserPage();
});

document.getElementById("me").addEventListener("click", function (){
    optionSelected("me");
    idRubrique = 3;
    numeroPage = 1;

    actualiserPage();
})

/**
 *
 * @param {String} select
 */
function optionSelected(select){

    let options = document.getElementsByClassName("choixoption");

    for (let i = 0; i < options.length; i++) {
        if (options[i].id === select){
            options[i].classList.add("selected");
        }else if(options[i].classList.contains("selected")){
            options[i].classList.remove("selected");
        }
    }

}


// page


let numeroPage = 1;
const nombreActuParPage = 6;

const buttonRight = document.getElementById("right");
const buttonLeft = document.getElementById("left");
const numPageAffiche = document.getElementById("numPageBot");

const divActu = document.getElementById("actualites");


buttonRight.addEventListener("click", function (){
    if(numeroPage >= 1){
        numeroPage++;
        actualiserPage();
    }
});

buttonLeft.addEventListener("click", function (){
    if(numeroPage > 1){
        numeroPage--;
        actualiserPage();
    }
});



function actualiserPage(){

    requeteAjax("actu/requeteActualite.php?id=" + idRubrique + "&limit=" + ((nombreActuParPage * numeroPage) - nombreActuParPage) + "&offset=" + nombreActuParPage, callbackAjaxAffichageActu);
    requeteAjax("actu/requeteButton.php?id=" + idRubrique, updateValeurTailleRequetActu);

}

/**
 *
 * @param {XMLHttpRequest} requete
 */
function callbackAjaxAffichageActu(requete){

    //console.log(requete.responseText);

    /**
     *
     * @type {Object[]}
     */
    let xhrJSON = JSON.parse(requete.responseText);

    afficherActu(xhrJSON);

}

/**
 *
 * @param xhrJSON
 */
function afficherActu(xhrJSON){
    let mois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];

    //console.log(xhrJSON);

    divActu.innerHTML = "";

    for (let i = 0; i < xhrJSON.length; i++) {

        let date = xhrJSON[i].dateActualite.split("-");
        let dateAffiche = date[2] + " " + mois[date[1] - 1] + " " + date[0];

        let actu = document.createElement("div");
        actu.classList.add("actualite", xhrJSON[i].aliasNomRubrique);

        let  lien = document.createElement("a");
        lien.href = "/actualite/n°" + xhrJSON[i].idActualite;



        let element = document.createElement("div");
        element.classList.add("img_actu");

        let elementBis = document.createElement("img");
        elementBis.srcset = xhrJSON[i].imageActualite + " 1x, " + xhrJSON[i].imageActualite + " 2x";
        elementBis.src = xhrJSON[i].imageActualite;
        elementBis.alt = "Image de l'actualite numero : " + xhrJSON[i].idActualite;

        element.appendChild(elementBis);
        lien.appendChild(element);

        element = document.createElement("div");
        element.classList.add("actu_titre");
        element.innerText = xhrJSON[i].titreActualite + "";

        lien.appendChild(element);

        element = document.createElement("div");
        element.classList.add("publication");
        element.innerText = "Publié le " + dateAffiche + " - Actualité " + xhrJSON[i].aliasNomRubrique;

        lien.appendChild(element);

        element = document.createElement("div");
        element.classList.add("actu_desc");
        element.innerText = xhrJSON[i].descriptionActualite + "";

        lien.appendChild(element);
        actu.appendChild(lien);
        divActu.appendChild(actu);
    }
}

/**
 *
 * @param {XMLHttpRequest} requete
 */
function updateValeurTailleRequetActu(requete){
    /**
     *
     * @type {Object[]}
     */
    let xhrJSON = JSON.parse(requete.responseText);

    document.getElementById("nbActuTotal").innerText = xhrJSON.length + "";

    afficherButton();
}


function afficherButton(){

    if(numeroPage === 1){
        buttonLeft.style.color = "transparent";
        buttonLeft.style.cursor = "default";
    }else {
        buttonLeft.style.color = "black";
        buttonLeft.style.cursor = "pointer";
    }

    numPageAffiche.innerText = "Page " + numeroPage;

    if(numeroPage * nombreActuParPage >= Number(document.getElementById("nbActuTotal").innerText)){
        buttonRight.style.color = "transparent";
        buttonRight.style.cursor = "default";
    }else {
        buttonRight.style.color = "black";
        buttonRight.style.cursor = "pointer"
    }
}
