<div class="hidden absolute top-[2rem] left-[7rem] h-[30rem] w-[85vw] z-[100000]" id="map-viewer">
    <div class="cursor-pointer text-white w-max px-[.8rem] ml-auto py-[.5rem] z-[100] bg-black" onclick="mapClose()">
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
    function initMap(pathCoordinates) {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: {lat: parseFloat(pathCoordinates[0].lat), lng: parseFloat(pathCoordinates[0].lng)} // Set the initial center of the map
        });
        
        // Place markers for each coordinate
        pathCoordinates.forEach(function(coordinate, index) {
            var title = (index === 0 )? 'Admin' : (index === pathCoordinates.length - 1 ? 'User' : ''); // Set different titles for start and end points
            var color = (index === 0 )? 'blue' : (index === pathCoordinates.length - 1 ? 'red' : ''); // Set different colors for start and end points
            placeMarker(coordinate, title, color);
        });
        function placeMarker(location, title, color) {
            var marker = new google.maps.Marker({
                position: {lat: parseFloat(location.lat), lng: parseFloat(location.lng)},
                map: map,
                title: title,
                icon: 'http://maps.google.com/mapfiles/ms/icons/'+color+'-dot.png'
            });
        }

        // Draw path on map
        var pathCo = [];
        for (var i = 0; i < pathCoordinates.length; i++) {
            pathCo.push(new google.maps.LatLng(pathCoordinates[i].lat, pathCoordinates[i].lng));
        }

        var path = new google.maps.Polyline({
            path: pathCo,
            geodesic: true,
            strokeColor: '#000',
            strokeOpacity: 1.0,
            strokeWeight: 2
        });

        path.setMap(map);

        document.getElementById('map-viewer').classList.remove('hidden');
    }
    function mapClose(){
        document.getElementById('map-viewer').classList.add('hidden');
        // mapViwer.classList.add('hidden');
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" async defer></script>