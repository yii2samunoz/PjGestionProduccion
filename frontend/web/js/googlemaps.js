function myMap() {
    var myLatLng = {lat: 4.616400, lng: -74.091875};
    var map = new google.maps.Map(document.getElementById('googleMap'), {
        zoom: 17,
        center: myLatLng,
        scrollwheel: false,
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Hello World!'
    });
    var infowindow = new google.maps.InfoWindow({
        maxWidth: 500
    });
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
    });
    //Resize Function
    google.maps.event.addDomListener(window, "resize", function() {
        var center = map.getCenter();
        google.maps.event.trigger(map, "resize");
        map.setCenter(center);
    });

}
