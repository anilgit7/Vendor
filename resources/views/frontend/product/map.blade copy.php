<div class="bg-black hidden absolute top-[7rem] left-[7rem] h-[30rem] w-[85vw]" id="map-viewer">
    <div class="cursor-pointer text-white absolute top-[1rem] left-[1rem] z-[100]" onclick="mapClose()">
        <h1>X</h1>
    </div>
        <div id="map"></div>
</div>
<style>
    #map {
        height: 100%;
    }
</style>
<script>
    let map;
    var mapShower = document.getElementById('map-shower');
    var mapViwer = document.getElementById('map-viewer');
    function mapClose(){
        mapViwer.classList.add('hidden');
    }
    let markersArray = []; 
    let infoWindow;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        infoWindow = new google.maps.InfoWindow();
    }

    function mapFunction(){
        mapViwer.classList.remove("hidden");
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var userLatLng = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                console.log(userLatLng);
                map.setCenter(userLatLng);
                map.setZoom(19);
                var userMarker = new google.maps.Marker({
                    map: map,
                    position: userLatLng,
                    title: 'Your geolocation',
                    icon: 'http://labs.google.com/ridefinder/images/mm_20_green.png'
                });
            },function(error) {
                console.error("Error getting geolocation:", error);
            }, {
                enableHighAccuracy: true // Enable high accuracy mode
            });
        }
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" async defer></script>