const emplacement_modal = document.getElementById("info_equipe");

const anthony = document.getElementById("anthony");
const lea = document.getElementById("lea");
const jonathan = document.getElementById("jonathan");


/**
 *
 * @param {String} id
 */
function cacher_equipe_top(id){
    document.getElementById(id).style.display = "none";
}

/**
 *
 * @param {String} id
 */
function afficher_equipe_top(id){
    document.getElementById(id).style.display = "flex";
    document.getElementById(id).style.animationName = "animate_top_equipe";
    document.getElementById(id).style.animationDuration = "0.6s";
}

/**
 *
 * @type {string[][]}
 */
let tab_Personne = [
    ["Anthony JULIA", "Docteur en chirurgie dentaire", "Ingénieur Ecole Centrale Marseille", "Master CAAE IAE Montpellier", "Fondateur de Sup'Perform", "18 ans d'expérience dans l'enseignement supérieur",],
    ["Léa BRUET","Titulaire d’un Master II en droit de l’Université de Montpellier en 2015", "Titulaire du D.U Certificat d’Études Judiciaires", "Juriste formatrice au profit de différentes CCI et organismes de formation"],
    ["Jonathan GARCIA", "Docteur en droit de l’Université de Montpellier  en 2015", "Enseignant en Licence et Master \n à la Faculté de droit de Montpellier (2010-2017)", "Juriste formateur pour les collectivités territoriales", "10 ans d'expérience dans l’enseignement"]];

function eventModal(){

    anthony.addEventListener("mouseover", function (){
        creer_info_personne(0);
        afficher_equipe_top("info_equipe");
    })

    anthony.addEventListener("mouseout", function (){
        cacher_equipe_top("info_equipe");
    })

    lea.addEventListener("mouseover", function (){
        creer_info_personne(1);
        afficher_equipe_top("info_equipe");
    })

    lea.addEventListener("mouseout", function (){
        cacher_equipe_top("info_equipe");
    })

    jonathan.addEventListener("mouseover", function (){
        creer_info_personne(2);
        afficher_equipe_top("info_equipe");
    })

    jonathan.addEventListener("mouseout", function (){
        cacher_equipe_top("info_equipe");
    })

}

/**
 *
 * @param {Number} numeroPersonne
 */
function creer_info_personne(numeroPersonne){

    emplacement_modal.firstElementChild.innerHTML = "";

    let nom = document.createElement("div");
    nom.innerText = tab_Personne[numeroPersonne][0];
    nom.classList.add("nom")

    emplacement_modal.firstElementChild.appendChild(nom);

    for (let i = 1; i < tab_Personne[numeroPersonne].length; i++) {

        let element = document.createElement("div");
        element.innerText = tab_Personne[numeroPersonne][i];

        emplacement_modal.firstElementChild.appendChild(element);

        element = document.createElement("div");
        element.innerText = "•";
        element.style.color = "red";
        element.classList.add("info_personne");

        emplacement_modal.firstElementChild.appendChild(element);
    }

    emplacement_modal.firstElementChild.removeChild(emplacement_modal.firstElementChild.lastElementChild);

}

window.addEventListener("load", eventModal);
