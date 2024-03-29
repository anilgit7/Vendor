<div class="hidden bg-[#000000dd] absolute top-0 left-0 px-[3rem] pt-[2rem] pb-[4rem] h-full w-full z-[100000]" id="map-viewer">
    <div class="cursor-pointer text-white w-max px-[1rem] ml-auto py-[.4rem] z-[100] transition delay-150 ease-in-out bg-[#F28C28] hover:bg-[#D4751C]" onclick="mapClose()">
        <h1>X</h1>
    </div>
    <div id="map"></div>
</div>
<style>
    #map {
        height: 100%;
        width: 100%;
    }
</style>
<script>
    var map;
    var marker;
    // var markerPositionDiv = document.getElementById('markerPosition');
    var addressDiv = document.getElementById('address');
    var mapShower = document.getElementById('map-shower');
    var mapViwer = document.getElementById('map-viewer');

    function initMap() {
            // Initialize the map with user's current location
            mapFunction(function(currentLocation) {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: currentLocation,
                    zoom: 19 // Set initial zoom level to 19
                });

                // Initialize the marker at the current location
                marker = new google.maps.Marker({
                    position: currentLocation,
                    map: map,
                    title: 'Your Current Location',
                    draggable: true // Make the marker draggable
                });

                // Display marker position when it's moved
                marker.addListener('dragend', function(event) {
                    updateMarkerPosition(event.latLng);
                    getAddress(event.latLng);
                });

                // Display marker position initially
                updateMarkerPosition(marker.getPosition());
                getAddress(marker.getPosition());

                // Add event listener for click event on the map
                map.addListener('click', function(event) {
                    placeMarker(event.latLng);
                    getAddress(event.latLng);
                });
            });
        }

        function updateMarkerPosition(latLng) {
            // Update the content of the marker position div
            document.getElementById('latitude').value = latLng.lat();
            document.getElementById('longitude').value = latLng.lng();
        }

        function placeMarker(location) {
            // Remove existing marker if present
            if (marker) {
                marker.setMap(null);
            }

            // Place a new marker at the clicked location
            marker = new google.maps.Marker({
                position: location,
                map: map,
                title: 'New Location'
            });

            // Update marker position display
            updateMarkerPosition(location);
        }

        function getAddress(latLng) {
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'location': latLng }, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        // Update the content of the address input field
                        document.getElementById('address').value = results[0].formatted_address;
                    } else {
                        document.getElementById('address').value = 'No results found';
                    }
                } else {
                    document.getElementById('address').value = 'Geocoder failed due to: ' + status;
                }
            });
        }

        function mapFunction(callback) {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var currentLocation = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    callback(currentLocation);
                }, function() {
                    // Handle errors here if user denies geolocation permission or if geolocation fails
                    alert('Error: The Geolocation service failed.');
                });
            } else {
                // Browser doesn't support Geolocation
                alert('Error: Your browser does not support geolocation.');
            }
        }
    function mapShow(){
        mapViwer.classList.remove("hidden");
        window.scrollTo(0, 0);
        document.body.style.overflow = "hidden";
        mapFunction();
    }
    function mapClose(){
        mapViwer.classList.add('hidden');
        document.body.style.overflow = "auto";
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" async defer></script>