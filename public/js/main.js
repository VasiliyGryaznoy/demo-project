$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        items: 1,
        autoplay:true,
        center:true,
        autoplayTimeout:5000,
        navigation : false,
    });
});

function initMap() {
    var mapDiv = document.getElementById('map');
    var point = {lat: 44.540, lng: -78.546};
    var map = new google.maps.Map(mapDiv, {
        center: point,
        zoom: 8
    });
    
    var marker = new google.maps.Marker({
        position: point,
        map: map,
        title: 'Demo!'
    });
}
