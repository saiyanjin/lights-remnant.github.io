document.addEventListener("DOMContentLoaded", function() {
    const beaconImage = document.getElementById('beaconImage');
    let isHoldingBeacon = false;

    beaconImage.addEventListener('mousedown', function (event) {
        event.preventDefault();

        isHoldingBeacon = true;
        beaconImage.style.visibility = 'hidden';
        document.body.style.cursor = 'url(../images/beacon_on.png) 20 17, auto';
    });

    document.addEventListener('click', function (event) {
        if (isHoldingBeacon && event.target !== beaconImage) {
            beaconImage.style.visibility = 'visible';
            document.body.style.cursor = 'auto';
            isHoldingBeacon = false;
        }
    });
});

// DÉBUT BALISE

document.addEventListener('DOMContentLoaded', function () {
    const balises = document.querySelectorAll('.balise');
    
    balises.forEach(balise => {
        balise.addEventListener('click', () => {
            balises.forEach(b => b.classList.remove('selected'));
            balise.classList.add('selected');
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const balises = document.querySelectorAll('.balise');
    const displayImage = document.getElementById('balise-display-image');
    const titleElement = document.getElementById('balise-title');
    const descriptionElement = document.getElementById('balise-description');
    
    const baliseData = {
        'balise-off': {
            image: 'images/beacon_off.png',
            title: 'BALISE ÉTEINTE',
            description: 'Lorsque vous voyez une balise éteinte, essayez de l\'atteindre afin de gagner du temps lors de votre prochaine mort.'
        },
        'balise-on': {
            image: 'images/beacon_on.png',
            title: 'BALISE ALLUMÉE',
            description: 'Lorsque vous avez allumé la balise, votre point de réapparition est redéfini sur cette même balise. Essayez de jouer de façon plus risquée !'
        }
    };

    balises.forEach(balise => {
        balise.addEventListener('click', () => {
            // Supprimer la classe "selected" de toutes les balises
            balises.forEach(b => b.classList.remove('selected'));
            
            // Ajouter la classe "selected" à la balise cliquée
            balise.classList.add('selected');
            
            // Identifier la classe (balise-off ou balise-on) pour changer le contenu
            const baliseType = balise.classList.contains('balise-off') ? 'balise-off' : 'balise-on';
            const data = baliseData[baliseType];
            
            // Mettre à jour l'image, le titre et la description
            displayImage.src = data.image;
            titleElement.textContent = data.title;
            descriptionElement.textContent = data.description;
        });
    });
});



// FIN BALISE