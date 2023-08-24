$(document).ready(function () {
    $("#market-access").change(function () {
        if ($(this).val() === "Others") {
            $("#other-market-access").show();
        } else {
            $("#other-market-access").hide();
        }
    });
});


function previewImage(event) {
    var input = event.target;
    var reader = new FileReader();
    reader.onload = function () {
        var imgElement = document.getElementById("preview");
        imgElement.src = reader.result;
    };
    reader.readAsDataURL(input.files[0]);
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
