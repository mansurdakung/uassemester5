<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peta Nusa Tenggara Barat</title>

    <!-- load css leaflet -->
    <link rel="stylesheet" href="src/leaflet.css">
    <!-- load js leaflet -->
    <script src="src/leaflet.js"></script>
    <script src="geojson/dakung1.js" type="text/javascript"></script>
    <style>
        body,html{
            padding: 0px;
            margin: 0px;
            height: 100%;
        }
        #ntbmap{
            height: 100%;
        }
    </style>
</head>
<body>
    <div id="ntbmap"></div>


    <script>
    var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' + 
                 ' &copy; <a href="https://www.jihadul4kbar.github.io/">Jihadul Akbar</a>',
        mbUrl = 'https://tile.openstreetmap.org/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiamloYWR1bDRrYmFyIiwiYSI6ImNqZ3lzOXpmaDA0bGQzMnJveGh5eW5lZjgifQ.IrFoCdc8VtGPQEzUFPqG_A';

    var streets  = L.tileLayer(mbUrl, {id: 'mapbox.streets',   attribution: mbAttr}),
        grayscale   = L.tileLayer(mbUrl, {id: 'mapbox.light', attribution: mbAttr});
        traffic = L.tileLayer(mbUrl, {id:'mapbox.mapbox-terrain-v2', attribution:mbAttr});
        jalanv8 = L.tileLayer(mbUrl, {id:'mapbox.mapbox-streets-v8', attribution:mbAttr});
        satellite = L.tileLayer(mbUrl, {id:'mapbox.satellite', attribution:mbAttr});

// mapbox.streets
// mapbox.light
// mapbox.dark
// mapbox.satellite
// mapbox.streets-satellite
// mapbox.wheatpaste
// mapbox.streets-basic
// mapbox.comic
// mapbox.outdoors
// mapbox.run-bike-hike
// mapbox.pencil
// mapbox.pirates
// mapbox.emerald
// mapbox.high-contrast

    var map = L.map('ntbmap', {
        center: [-8.6873968, 116.2817962],
        zoom: 14,
        layers: [ streets]
    });
var mapIcon = L.Icon.extend({
        options: {
            iconSize:     [33, 38],
            iconAnchor:   [22, 94],
            popupAnchor:  [-5, -90] 
        }
        });
    var masjidIcon = new mapIcon({iconUrl: 'icon/mosquee.png'}),
        pasarIcon = new mapIcon({iconUrl: 'icon/market.png'}),
        sekolahIcon = new mapIcon({iconUrl: 'icon/school.png'});
        kantorIcon = new mapIcon({iconUrl: 'icon/house.png'});
         waterIcon = new mapIcon({iconUrl: 'icon/water.png'});

    L.marker([-8.71269,116.33882],{icon: waterIcon}).addTo(map)
    .bindPopup('Embung Dakung.<br> Lombok Tengah.');

    L.marker([-8.71920,116.33661],{icon:sekolahIcon}).addTo(map)
    .bindPopup('Smp 3 Praya Tengah');

     L.marker([-8.72254,116.33207],{icon:sekolahIcon}).addTo(map)
    .bindPopup('Posyiandu Montong Waru');

    L.marker([-8.72000,116.33722],{icon: kantorIcon}).addTo(map)
    .bindPopup('Kantor Desa Dakung .<br> Lombok Tengah.');

     L.marker([-8.71797,116.33572],{icon: pasarIcon}).addTo(map)
    .bindPopup('Paud Desa Dakung .<br> Lombok Tengah.');

    var mj1 = L.marker([-8.71261,116.33809],{icon: masjidIcon}).addTo(map).bindPopup('Masjid Montong Sebie .<br> Lombok Tengah.');

    var mj2 = L.marker([-8.71604,116.33281],{icon: masjidIcon}).addTo(map).bindPopup('Masjid Batu Tepong.<br> Lombok Tengah.');

    var mj2 = L.marker([-8.72167,116.33908],{icon: masjidIcon}).addTo(map).bindPopup('Masjid Nunggal.<br> Lombok Tengah.');

    var mj2 = L.marker([-8.72275,116.33702],{icon: masjidIcon}).addTo(map).bindPopup('Masjid Nunggal Lauk.<br> Lombok Tengah.');

     var mj2 = L.marker([-8.71641,116.34728],{icon: masjidIcon}).addTo(map).bindPopup('Masjid Petanggak.<br> Lombok Tengah.');

      var mj2 = L.marker([-8.72269,116.33240],{icon: masjidIcon}).addTo(map).bindPopup('Masjid Montong Waru.<br> Lombok Tengah.');

     
    var masjid = L.layerGroup([mj1, mj2]);
    var baseLayers = {
        "Jalan": streets,
        "Hitam Putih": grayscale,
        "Trapik": traffic,
        "Jalanv8": jalanv8,
        "Satellite": satellite,
        
    };
    var overlays = {
        "Masjid": masjid
    };

    L.control.layers(baseLayers).addTo(map);

    

    L.geoJSON([dakung], {
		style: function (feature) {
			return feature.properties && feature.properties.style;
		}
	}).addTo(map);
    </script>
</body>
</html>