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