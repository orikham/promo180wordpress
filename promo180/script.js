// script pour le header
const divLogo = document.getElementById("divlogo");
const menu = document.getElementById("menu");
const prez = document.getElementById("prez");

divLogo.addEventListener("click", () => {
    menu.classList.toggle("affiche");
    prez.classList.toggle("retourPrez");
});

// script fond sonore stagiaires
const backgroundSound = document.getElementById("backgroundSound");
 backgroundSound.loop = true;
backgroundSound.volume = 0.08;

document.addEventListener("DOMContentLoaded", () => {
    backgroundSound.play();
});

// Liste des thèmes sonores pour les étudiants
const studentThemeList = [
    "./media/song/hamid.mp3",
    "./media/song/fredericprez.mp3",
    "./media/song/jirkaprez.mp3",
    "./media/song/angelineprez.mp3",
    "./media/song/dimitri.mp3",
    "./media/song/najiaprez.mp3",
    "./media/song/elisaprez.mp3",
    "./media/song/karim.mp3",
    "./media/song/alexprez.mp3",
    "./media/song/walesca.mp3",
];

// Créer des objets Audio pour chaque effet sonore
const effetSonore = studentThemeList.map(path => new Audio(path));

// Sélectionnez toutes les cartes d'étudiant
const studentCards = document.querySelectorAll(".studentCard");


studentCards.forEach((card, index) => {



    // Associer chaque carte à un effet sonore spécifique au survol
    card.addEventListener("mouseenter", () => {
        card.classList.add("hovered");
        effetSonore[index].currentTime = 0;
        effetSonore[index].play();

    });

    //fin des effet sonore au survol
    card.addEventListener("mouseleave", () => {
        card.classList.remove("hovered");
        effetSonore[index].pause();
        effetSonore[index].currentTime = 0;
    });

    //apparition de la fiche élève au clic de la div studentcard correspondante 
    card.addEventListener("click", () => {
        const detailStudents = document.querySelectorAll(".detailstudent");
        const plaquettes = document.getElementById('plaquettes');

        plaquettes.style.display = "block";

        detailStudents.forEach(function (detailstudent) {
            detailstudent.style.display = "none";
        });

        detailStudents[index].style.display = "flex";

        // const clickSound = document.getElementById("listen");

        const clickSound = new Audio("./media/song/ficheEleve.mp3");
        clickSound.play();



    });


});

//disparition de la fiche élève au clic de l'image contenus dedans (provisoirey)

const closeCard = document.querySelectorAll(".infoGauche img");

closeCard.forEach((img) => {
    img.addEventListener("click", () => {
        const detailStudents = document.querySelectorAll("#plaquettes");
        detailStudents.forEach(function (detailstudent) {
            detailstudent.style.display = "none";
        });






    });


});


//animation clignotement des div article
function lancementAnimation(element) {
    var couleurs = ['#ff0000', '#00ff00'];
    var currentColorIndex = 0;

    function toggleColor() {
        element.style.backgroundColor = couleurs[currentColorIndex];
        currentColorIndex = 1 - currentColorIndex; // Alterner entre les couleurs
    }

    var blinkInterval = setInterval(toggleColor, 2000); // Changer toutes les 2000 ms

    // // Arrêter l'animation lorsque le survol se termine
    element.addEventListener('mouseout', function () {
        clearInterval(blinkInterval);
        element.style.backgroundColor = ''; // Réinitialiser la couleur
    });

    document.addEventListener('DOMContentLoaded', function () {
        const articles = document.querySelectorAll(".article")
        // Ajouter un écouteur d'événement pour démarrer l'animation au survol
        articles.forEach(function (article) {
            article.addEventListener('mouseover', function () {
                lancementAnimation(article);
            });
        });
    });

}

