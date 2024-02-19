<div class="bg-black hidden absolute top-[7rem] left-[7rem] h-[30rem] w-[85vw]" id="map-viwer">
    <!-- <div class="container  pb-[5rem] px-5 xl:px-[6rem] mx-auto"> -->
    <div class="cursor-pointer text-white absolute top-[1rem] left-[1rem] z-[100]" onclick="mapClose()"><h1>X</h1></div>
        <div id="map"></div>
    <!-- </div> -->
</div>
<style>
    #map {
        height: 100%;
        /* position: absolute; */
    }
</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVAeJWH2t4an_Rpfva6mXc77YzcNGkLgY&callback=initMap" async></script>
<script>
    
    let map;
    let markersArray = []; 
    let infoWindow;
    const myLatLng = { lat: 27.7172, lng: 85.3240 };

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 13,
            mapTypeId: google.maps.MapTypeId.ROADMAP
            // mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        infoWindow = new google.maps.InfoWindow();
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;
                console.log(latitude,longitude);
                var geolocpoint = new google.maps.LatLng(latitude, longitude);
                map.setCenter(geolocpoint );
                console.log(map.setCenter(geolocpoint ))
                var mapOptions = {
                    zoom: 19,
                    center: geolocpoint,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                // Place a marker
                var geolocation = new google.maps.Marker({
                    position: geolocpoint,
                    map: map,
                    title: 'Your geolocation',
                    icon: 'http://labs.google.com/ridefinder/images/mm_20_green.png'
                });
    
            });
        }
    }

    // function get_location(){
    //     if (navigator.geolocation) {
    //         navigator.geolocation.getCurrentPosition(function(position) {
    //             var latitude = position.coords.latitude;
    //             var longitude = position.coords.longitude;
    //             var geolocpoint = new google.maps.LatLng(latitude, longitude);
    //             map.setCenter(geolocpoint );
    //             var mapOptions = {
    //                 zoom: 19,
    //                 center: geolocpoint,
    //                 mapTypeId: google.maps.MapTypeId.HYBRID
    //             }
    //             // Place a marker
    //             var geolocation = new google.maps.Marker({
    //                 position: geolocpoint,
    //                 map: map,
    //                 title: 'Your geolocation',
    //                 icon: 'http://labs.google.com/ridefinder/images/mm_20_green.png'
    //             });
    
    //         });
    //     }
    //     // if (navigator.geolocation) {
    //     //     // navigator.geolocation.getCurrentPosition(
    //     //         navigator.geolocation.getCurrentPosition(function(position) {
    //     //             // const pos = {
    //     //                 var latitude = position.coords.latitude;
    //     //                 var longitude = position.coords.longitude;
    //     //             // };
    //     //             var geolocpoint = new google.maps.LatLng(latitude, longitude);
    //     //             map.setCenter(geolocpoint );
    //     //             console.log(geolocpoint);
    //     //             infoWindow.setPosition(pos);
    //     //             infoWindow.setContent("Your Location.");
    //     //             addMarker(pos);
    //     //             // addMarkerRandom(position.coords.latitude, position.coords.longitude);
    //     //             infoWindow.open(map);
    //     //             map.setZoom(19);
    //     //             map.setCenter(position);
    //     //         }
    //     //     );
    //     // }
   
    // }

    function addMarker(latLng) {
        let marker = new google.maps.Marker({
            map: map,
            position: latLng,
            icon: {
                url: "http://maps.google.com/mapfiles/ms/icons/blue.png",
            },
            draggable: false
        });
        markersArray.push(marker);
    }

    // function addMarkerRandom(latitude, longitude) {
        
    //         marker = new google.maps.Marker({
    //             position: new google.maps.LatLng(locations, locations),
    //             map: map,
    //             icon: {
    //                     url: "http://maps.google.com/mapfiles/ms/icons/green.png",
    //                 },

    //         });
    //         google.maps.event.addListener(marker, 'click', (function(marker, i) {

    //         return function() {

    //             infowindow.setContent(locations);

    //             infowindow.open(map, marker);

    //         }
    //         })(marker));
    // }
    // marker = new google.maps.Marker({
    //     position: new google.maps.LatLng(locations[i][0], locations[i][1]),
    //     map: map,
    //     icon: {
    //             url: "http://maps.google.com/mapfiles/ms/icons/green.png",
    //         },

    // });
    // function markerClicked(marker, index) {
    //         console.log(map);
    //     console.log(marker.position.lat());
    //     console.log(marker.position.lng());
    // }
    window.initMap = initMap;
</script>

<!-- <script>
            let map, activeInfoWindow, markers = [];

            /* ----------------------------- Initialize Map ----------------------------- */
            function initMap() {
                map = new google.maps.Map(document.getElementById("map"), {
                    center: {
                        lat: 28.626137,
                        lng: 79.821603,
                    },
                    zoom: 15
                });

                map.addListener("click", function(event) {
                    mapClicked(event);
                });

                initMarkers();
            }

            /* --------------------------- Initialize Markers --------------------------- */
            // 

            /* ------------------------- Handle Map Click Event ------------------------- */
            function mapClicked(event) {
                console.log(map);
                console.log(event.latLng.lat(), event.latLng.lng());
            }

            /* ------------------------ Handle Marker Click Event ----------------------- */
            function markerClicked(marker, index) {
                console.log(map);
                console.log(marker.position.lat());
                console.log(marker.position.lng());
            }

            /* ----------------------- Handle Marker DragEnd Event ---------------------- */
            function markerDragEnd(event, index) {
                console.log(map);
                console.log(event.latLng.lat());
                console.log(event.latLng.lng());
            }
        </script> -->