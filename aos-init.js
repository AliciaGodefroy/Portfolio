document.addEventListener('DOMContentLoaded', function () {
    AOS.init({
        duration: 800, // Durée de l'animation en millisecondes
        offset: 120, // Décalage (en pixels) depuis le bord de la fenêtre pour déclencher l'animation
        easing: 'ease-in-out', // Type d'animation
        once: true, // Animation ne se produit qu'une seule fois par élément
    });
});