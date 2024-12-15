@extends('layouts.app')

@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>WARTEG CIPUTAT</h4>
                            <h6>THE BEST EXPERIENCE</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#chefs">See Location</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="{{ asset('template-resto/assets/images/warteg1.jpeg') }}" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="{{ asset('template-resto/assets/images/warteg2.webp') }}" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="{{ asset('template-resto/assets/images/warteg3.jpg') }}" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>We Leave A Delicious Memory For You</h2>
                        </div>
                        <p>Warteg adalah tempat makan favorit banyak orang karena menyajikan makanan enak dengan harga
                            terjangkau. Website ini dibuat untuk memudahkan masyarakat menemukan lokasi warteg di Ciputat
                            dengan cepat dan praktis.
                        </p>
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('template-resto/assets/images/about1.jpg') }}" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('template-resto/assets/images/about2.jpg') }}" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('template-resto/assets/images/about3.JPG') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Beberapa menu yang ada di Warteg</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    <div class="item">
                        <div class='card card1'>
                            <div class='info'>
                                <h1 class='title'>Ikan Tongkol</h1>
                                <p class='description'>Ikan tongkol warteg adalah hidangan ikan dengan bumbu pedas atau
                                    santan, populer di warteg karena rasa gurihnya.</p>
                                <div class="main-text-button">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card2'>
                            <div class='info'>
                                <h1 class='title'>Kentang Goreng</h1>
                                <p class='description'>Kentang goreng adalah potongan kentang yang digoreng hingga renyah
                                    dan gurih.</p>
                                <div class="main-text-button">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class='info'>
                                <h1 class='title'>Tempe Orek</h1>
                                <p class='description'>Tempe orek adalah tempe goreng dengan bumbu kecap manis yang gurih
                                    dan sedikit manis.</p>
                                <div class="main-text-button">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card4'>
                            <div class='info'>
                                <h1 class='title'>Telur Dadar</h1>
                                <p class='description'>Telur dadar adalah telur yang dikocok dengan bumbu dan digoreng
                                    hingga matang, sering disajikan sebagai lauk pendamping nasi.</p>
                                <div class="main-text-button">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card5'>
                            <div class='info'>
                                <h1 class='title'>Tumis Kangkung</h1>
                                <p class='description'>Tumis kangkung adalah hidangan kangkung yang ditumis dengan bumbu
                                    sederhana, gurih, dan segar.</p>
                                <div class="main-text-button">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class='info'>
                                <h1 class='title'>Tempe Orek</h1>
                                <p class='description'>Tempe orek adalah tempe goreng dengan bumbu kecap manis yang gurih
                                    dan sedikit manis.</p>
                                <div class="main-text-button">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Chefs Area Starts ***** -->
    <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="text-center col-lg-4 offset-lg-4">
                    <div class="section-heading">
                        <h2>Warteg Location in Ciputat</h2>
                    </div>
                </div>
            </div>
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
        z-index: 0;
    ">
                </div>
            </div>

            <script>
                var provin = new L.LayerGroup();
                var sungai = new L.LayerGroup();
                var prov = new L.LayerGroup();
                var faskes = new L.LayerGroup();
                var warteg = new L.LayerGroup();

                var map = L.map('map', {
                    center: [-6.3035, 106.7644], // Koordinat Ciputat Timur
                    zoom: 15, // Level zoom cukup dekat untuk menampilkan Ciputat Timur
                    zoomControl: false,
                    layers: []
                });

                var GoogleSatelliteHybrid = L.tileLayer(
                    'https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
                        maxZoom: 22,
                        attribution: 'Latihan Web GIS'
                    }
                ).addTo(map);

                var Esri_NatGeoWorldMap = L.tileLayer(
                    'https://server.arcgisonline.com/ArcGIS/rest/services/NatGeo_World_Map/MapServer/tile/{z}/{y}/{x}', {
                        attribution: 'Tiles &copy; Esri &mdash; National Geographic, Esri, DeLorme, NAVTEQ, UNEP-WCMC, USGS, NASA, ESA, METI, NRCAN, GEBCO, NOAA, iPC',
                        maxZoom: 16
                    }
                );

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

                var groupedOverLayers = {
                    "Peta Dasar": {
                        'Ibu Kota Provinsi': prov,
                        'Jaringan sungai': sungai,
                        'Provinsi': provin,
                        'Warteg': warteg
                    },
                    "Peta Khusus": {
                        'Fasilitas Kesehatan': faskes
                    }
                };

                L.control.groupedLayers(baseLayers, groupedOverLayers).addTo(map);

                var osmUrl = 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}';
                var osmAttrib = 'Map data &copy; OpenStreetMap contributors';

                var osm2 = new L.TileLayer(osmUrl, {
                    minZoom: 0,
                    maxZoom: 13,
                    attribution: osmAttrib
                });

                var miniMap = new L.Control.MiniMap(osm2, {
                    toggleDisplay: true,
                    position: "bottomright",
                    aimingRectOptions: {
                        color: "#ff1100",
                        weight: 3
                    },
                    shadowRectOptions: {
                        color: "#0000AA",
                        weight: 1,
                        opacity: 0,
                        fillOpacity: 0
                    }
                }).addTo(map);

                L.Control.geocoder({
                    position: "topleft",
                    collapsed: true
                }).addTo(map);

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
                };
                north.addTo(map);

                // Menyesuaikan layer GeoJSON yang di-load agar sesuai dengan Ciputat Timur
                $.getJSON("{{ asset('warteg_ciputat.geojson') }}", function(data) {
                    var ratIcon = L.icon({
                        iconUrl: "{{ asset('marker-1.png') }}",
                        iconSize: [15, 30]
                    });

                    L.geoJson(data, {
                        pointToLayer: function(feature, latlng) {
                            var marker = L.marker(latlng, {
                                icon: ratIcon
                            });

                            // Gabungkan nama dan gambar dalam satu konten popup
                            var popupContent = `
                <strong>${feature.properties.Nama_Warteg || 'Nama tidak tersedia'}</strong><br>
                <img src="${feature.properties.image || '{{ asset('default-image.jpg') }}'}" alt="Warteg Image" style="width:150px;height:auto;">
            `;

                            marker.bindPopup(popupContent); // Bind popup dengan konten gabungan
                            return marker;
                        }
                    }).addTo(warteg);
                });
            </script>


        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Here You Can Make A Reservation Or Just walkin to our cafe</h2>
                        </div>
                        <p>Donec pretium est orci, non vulputate arcu hendrerit a. Fusce a eleifend riqsie, namei
                            sollicitudin urna diam, sed commodo purus porta ut.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="#">hello@company.com</a><br><a
                                            href="#">info@company.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4>Table Reservation</h4>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="Your Name*"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                            placeholder="Your Email Address" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <fieldset>
                                        <input name="phone" type="text" id="phone" placeholder="Phone Number*"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <select value="number-guests" name="number-guests" id="number-guests">
                                            <option value="number-guests">Number Of Guests</option>
                                            <option name="1" id="1">1</option>
                                            <option name="2" id="2">2</option>
                                            <option name="3" id="3">3</option>
                                            <option name="4" id="4">4</option>
                                            <option name="5" id="5">5</option>
                                            <option name="6" id="6">6</option>
                                            <option name="7" id="7">7</option>
                                            <option name="8" id="8">8</option>
                                            <option name="9" id="9">9</option>
                                            <option name="10" id="10">10</option>
                                            <option name="11" id="11">11</option>
                                            <option name="12" id="12">12</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <div id="filterDate2">
                                        <div class="input-group date" data-date-format="dd/mm/yyyy">
                                            <input name="date" id="date" type="text" class="form-control"
                                                placeholder="dd/mm/yyyy">
                                            <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <select value="time" name="time" id="time">
                                            <option value="time">Time</option>
                                            <option name="Breakfast" id="Breakfast">Breakfast</option>
                                            <option name="Lunch" id="Lunch">Lunch</option>
                                            <option name="Dinner" id="Dinner">Dinner</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button-icon">Make A
                                            Reservation</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="text-center col-lg-4 offset-lg-4">
                    <div class="section-heading">
                        <h6>Klassy Week</h6>
                        <h2>This Week’s Special Meal Offers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                            <li><a href='#tabs-1'><img
                                                        src="{{ asset('template-resto/assets/images/tab-icon-01.png') }}"
                                                        alt="">Breakfast</a></li>
                                            <li><a href='#tabs-2'><img
                                                        src="{{ asset('template-resto/assets/images/tab-icon-02.png') }}"
                                                        alt="">Lunch</a></li>
                                            <li><a href='#tabs-3'><img
                                                        src="{{ asset('template-resto/assets/images/tab-icon-03.png') }}"
                                                        alt="">Dinner</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('template-resto/assets/images/tab-item-01.png') }}"
                                                                alt="">
                                                            <h4>Fresh Chicken Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$10.50</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('template-resto/assets/images/tab-item-02.png') }}"
                                                                alt="">
                                                            <h4>Orange Juice</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$8.50</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('template-resto/assets/images/tab-item-03.png') }}"
                                                                alt="">
                                                            <h4>Fruit Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$9.90</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('template-resto/assets/images/tab-item-04.png') }}"
                                                                alt="">
                                                            <h4>Eggs Omelette</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$6.50</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('template-resto/assets/images/tab-item-05.png') }}"
                                                                alt="">
                                                            <h4>Dollma Pire</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$5.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('template-resto/assets/images/tab-item-06.png') }}"
                                                                alt="">
                                                            <h4>Omelette & Cheese</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$4.10</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article id='tabs-2'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('template-resto/assets/images/tab-item-04.png') }}"
                                                                alt="">
                                                            <h4>Eggs Omelette</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$14</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('template-resto/assets/images/tab-item-05.png') }}"
                                                                alt="">
                                                            <h4>Dollma Pire</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$18</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('template-resto/assets/images/tab-item-06.png') }}"
                                                                alt="">
                                                            <h4>Omelette & Cheese</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$22</h6>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('template-resto/assets/images/tab-item-01.png') }}"
                                                                alt="">
                                                            <h4>Fresh Chicken Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$10</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('template-resto/assets/images/tab-item-02.png') }}"
                                                                alt="">
                                                            <h4>Orange Juice</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$20</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('template-resto/assets/images/tab-item-03.png') }}"
                                                                alt="">
                                                            <h4>Fruit Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$30</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article id='tabs-3'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('template-resto/assets/images/tab-item-05.png') }}"
                                                                alt="">
                                                            <h4>Eggs Omelette</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$14</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('template-resto/assets/images/tab-item-03.png') }}"
                                                                alt="">
                                                            <h4>Orange Juice</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$18</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('template-resto/assets/images/tab-item-02.png') }}"
                                                                alt="">
                                                            <h4>Fruit Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$10</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('template-resto/assets/images/tab-item-06.png') }}"
                                                                alt="">
                                                            <h4>Fresh Chicken Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$8.50</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('template-resto/assets/images/tab-item-01.png') }}"
                                                                alt="">
                                                            <h4>Dollma Pire</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$9</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('template-resto/assets/images/tab-item-04.png') }}"
                                                                alt="">
                                                            <h4>Omelette & Cheese</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$11</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->
@endsection
