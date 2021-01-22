var affichage_propos = document.getElementById("propos");
var affichage_mentions = document.getElementById("mentions");

function load() {
    affichage_propos.style.display = "none";
    affichage_mentions.style.display = "none";
}
function a_propos() {
    affichage_propos.style.display = "block";
    affichage_mentions.style.display = "none";
}
function mention_legales() {
    affichage_propos.style.display = "none";
    affichage_mentions.style.display = "block";
}