@extends('layouts.app')

@section('content')
    <div class="content"
        style="
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f4f4f9;
    padding: 20px;
">
        <div id="map"
            style="
        height: 750px;
        width: 100%;
        max-width: 1200px;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        overflow: hidden;
    ">
        </div>
    </div>

    <script>
        var map = L.map('map', {
            center: [-1.7912604466772375, 116.42311966554416],
            zoom: 5,
            zoomControl: false,
            layers: []
        });
        var GoogleSatelliteHybrid = L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
            maxZoom: 22,
            attribution: 'Latihan Web GIS'
        }).addTo(map);

        var Esri_NatGeoWorldMap = L.tileLayer(
            'https://server.arcgisonline.com/ArcGIS/rest/services/NatGeo_World_Map/MapServer/tile/{z}/{y}/{x}', {
                attribution: 'Tiles &copy; Esri &mdash; National Geographic, Esri, DeLorme, NAVTEQ, UNEP-WCMC, USGS, NASA, ESA, METI, NRCAN, GEBCO, NOAA, iPC',
                maxZoom: 16
            });

        var GoogleMaps = new L.TileLayer(
            'https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
                opacity: 1.0,
                attribution: 'Latihan Web GIS'
            }
        );

        var GoogleRoads = new L.TileLayer(
            'https://mt1.google.com/vt/lyrs=h&x={x}&y={y}&z={z}', {
                opacity: 1.0,
                attribution: 'Latihan Web GIS'
            }
        );

        var baseLayers = {
            'Google Satellite Hybrid': GoogleSatelliteHybrid,
            'Esri NatGeo World Map': Esri_NatGeoWorldMap,
            'Google Maps': GoogleMaps,
            'Google Roads': GoogleRoads
        };



        var overlayLayers = {}
        L.control.layers(baseLayers, overlayLayers, {
            collapsed: true
        }).addTo(map);


        var osmUrl = 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}';
        var osmAttrib = 'Map data &copy; OpenStreetMap contributors';

        // Layer tile untuk peta mini
        var osm2 = new L.TileLayer(osmUrl, {
            minZoom: 0,
            maxZoom: 13,
            attribution: osmAttrib
        });

        // Opsi tampilan untuk rect dalam MiniMap
        var rect1 = {
            color: "#ff1100",
            weight: 3
        };
        var rect2 = {
            color: "#0000AA",
            weight: 1,
            opacity: 0,
            fillOpacity: 0
        };

        // Inisialisasi MiniMap dengan opsi yang sudah ditentukan
        var miniMap = new L.Control.MiniMap(osm2, {
            toggleDisplay: true,
            position: "bottomright",
            aimingRectOptions: rect1,
            shadowRectOptions: rect2
        }).addTo(map);

        L.Control.geocoder({
            position: "topleft",
            collapsed: true
        }).addTo(map);

        //menambahkan koordinat
        var locateControl = L.control.locate({
            position: "topleft",
            drawCircle: true,
            follow: true,
            setView: true,
            keepCurrentZoomLevel: true,
            markerStyle: {
                weight: 1,
                opacity: 0.8,
                fillOpacity: 0.8
            },
            circleStyle: {
                weight: 1,
                clickable: false
            },
            icon: "fa fa-location-arrow",
            metric: false,
            strings: {
                title: "My location",
                popup: "You are within {distance} {unit} from this point",
                outsideMapBoundsMsg: "You seem located outside the boundaries of the map"
            },
            locateOptions: {
                maxZoom: 18,
                watch: true,
                enableHighAccuracy: true,
                maximumAge: 10000,
                timeout: 10000
            }
        }).addTo(map);

        var zoom_bar = new L.Control.ZoomBar({
            position: 'topleft'
        }).addTo(map);

        L.control.coordinates({
            position: "bottomleft",
            decimals: 2,
            decimalSeperator: ",",
            labelTemplateLat: "Latitude: {y}",
            labelTemplateLng: "Longitude: {x}"
        }).addTo(map);
        /* scala */
        L.control.scale({
            metric: true,
            position: "bottomleft"
        }).addTo(map);

        var north = L.control({
            position: "bottomleft"
        });
        north.onAdd = function(map) {
            var div = L.DomUtil.create("div", "info legend");
            div.innerHTML = '<img src="{{ asset('cardinal-direction.png') }}" style="width:200px;">';
            return div;
        }
        north.addTo(map)

        var north = L.control({
            position: "bottomleft"
        });

        Esri_NatGeoWorldMap.addTo(map);
    </script>
@endsection
