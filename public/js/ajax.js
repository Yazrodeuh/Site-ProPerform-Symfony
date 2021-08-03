
/**
 *
 * @param {String} nomRequete
 * @param {function} callback
 */
function requeteAjax(nomRequete, callback){

    let requete = new XMLHttpRequest();

    requete.open("GET", "/ajax/" + nomRequete, true);

    requete.addEventListener("load", function (){
        callback(requete)
    })
    requete.send(null);
}

