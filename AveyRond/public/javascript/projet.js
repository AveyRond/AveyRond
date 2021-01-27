var affichage_propos = document.getElementById("propos");
var affichage_mentions = document.getElementById("mentions");
var affichage_formulaire = document.getElementById("formulaire");
var affichage_liens = document.getElementById("liens");

function load() {
    affichage_propos.style.display = "none";
    affichage_mentions.style.display = "none";
    affichage_formulaire.style.display = "none";
    affichage_liens.style.display = "none";
}
function a_propos() {
    affichage_propos.style.display = "block";
    affichage_mentions.style.display = "none";
    affichage_formulaire.style.display = "none";
    affichage_liens.style.display = "none";
}
function mention_legales() {
    affichage_propos.style.display = "none";
    affichage_mentions.style.display = "block";
    affichage_formulaire.style.display = "none";
    affichage_liens.style.display = "none";
}
function formulaire() {
    affichage_propos.style.display = "none";
    affichage_mentions.style.display = "none";
    affichage_formulaire.style.display = "block";
    affichage_liens.style.display = "none";
}
function liens() {
    affichage_propos.style.display = "none";
    affichage_mentions.style.display = "none";
    affichage_formulaire.style.display = "none";
    affichage_liens.style.display = "block";
}