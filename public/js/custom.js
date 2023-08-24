function toggleMode() {
    // Add your logic here
    var body = document.querySelector("body");
    body.classList.toggle("dark-mode");
}


document.addEventListener("DOMContentLoaded", function () {
    var captureButton = document.getElementById("capture-geolocation");

    if (captureButton) {
        captureButton.addEventListener("click", function () {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var latitude = position.coords.latitude;
                    var longitude = position.coords.longitude;
                    var geolocationInput =
                        document.getElementById("geolocation");
                    if (geolocationInput) {
                        geolocationInput.value = latitude + "," + longitude;
                    }
                });
            } else {
                console.log("Geolocation is not supported by this browser.");
            }
        });
    }
});
