<!DOCTYPE html>
<html>
<head>
    <style>
        /* Set the size of the div element that contains the map */
        #map {
            height: 1000px;  /* The height is 400 pixels */
            width: 100%;  /* The width is the width of the web page */
        }
    </style>
</head>
<body>
<h3>Ubicacion Multa</h3>
<!--The div element for the map -->
<div id="map"></div>
<script>

    var marker;

    function initMap() {

        var lat = parseFloat('{{request()->get("lat")}}');
        var lng = parseFloat('{{request()->get("lng")}}');


        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: {lat: lat, lng: lng}
        });

        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: {lat: lat, lng: lng}
        });
        marker.addListener('click', toggleBounce);
    }

    function toggleBounce() {
        if (marker.getAnimation() !== null) {
            marker.setAnimation(null);
        } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }


</script>
<!--Load the API from the specified URL
* The async attribute allows the browser to render the page while the API loads
* The key parameter will contain your own API key (which is not needed for this tutorial)
* The callback parameter executes the initMap() function
-->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdJeH0kq3GZDk5GVZz3jWyyX2jLCs5kLo&callback=initMap">
</script>
</body>
</html>