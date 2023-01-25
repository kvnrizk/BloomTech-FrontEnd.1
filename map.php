<!DOCTYPE html>
<html>
<head>
    <title>MapOptitien</title>
    <link rel="stylesheet" href="assets/style-map.css">
</head>
<body>
    
<div id="map"></div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.95410669975!2d2.2769954788823137!3d48.85883363944839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!5e0!3m2!1sen!2sfr!4v1669641635405!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<script>
    function initMap(){
        var  location = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 8,
            center: location
        });
    }
</script>

</body>
</html>