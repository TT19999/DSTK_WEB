<!DOCTYPE html>
<html>
<head>
    <title>Add Map</title>

    {{--    <link rel="stylesheet" type="text/css" href="./style.css" />--}}
    {{--    <script src="./index.js"></script>--}}
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <style type="text/css">
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 90%;
        }

        /* Optional: Makes the sample page fill the window. */
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
    <script>
        var map; //Will contain map object.
        var marker = false; ////Has the user plotted their location marker?
        const labels = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        var data = "Hello World!";
        let labelIndex = 0;
        const contentString =
            '<div id="content">' +
            '<div id="siteNotice">' +
            "</div>" +
            '<h1 id="firstHeading" class="firstHeading">Uluru</h1>' +
            '<div id="bodyContent">' +
            "<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large " +
            "sandstone rock formation in the southern part of the " +
            "Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) " +
            "south west of the nearest large town, Alice Springs; 450&#160;km " +
            "(280&#160;mi) by road. Kata Tjuta and Uluru are the two major " +
            "features of the Uluru - Kata Tjuta National Park. Uluru is " +
            "sacred to the Pitjantjatjara and Yankunytjatjara, the " +
            "Aboriginal people of the area. It has many springs, waterholes, " +
            "rock caves and ancient paintings. Uluru is listed as a World " +
            "Heritage Site.</p>" +
            '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">' +
            "https://en.wikipedia.org/w/index.php?title=Uluru</a> " +
            "(last visited June 22, 2009).</p>" +
            "</div>" +
            "</div>";

        function initMap() {
            //The center location of our map.
            var centerOfMap = new google.maps.LatLng(20.9782483, 105.7938184 );



            //Map options.
            var options = {
                center: centerOfMap, //Set center.
                zoom: 15 //The zoom value.
            };

            //Create the map object.
            map = new google.maps.Map(document.getElementById('map'), options);

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });


            const localMarker = new google.maps.Marker({
                position: centerOfMap,
                title:"Hello World!",
                map : map
            });

            localMarker.addListener("click", function(event) {
                infowindow.open(map, localMarker);
            });


            //Listen for any clicks on the map.
            // google.maps.event.addListener(map, 'click', function(event) {
            //     var clickedLocation = event.latLng;
            //     console.log(clickedLocation);
            //     //If the marker hasn't been added.
            //     if(marker === false){
            //         //Create the marker.
            //         marker = new google.maps.Marker({
            //             position: clickedLocation,
            //             map: map,
            //             label: labels[labelIndex++ % labels.length],
            //             name: "Google",
            //             title: "hello",
            //             draggable: true //make it draggable
            //         });
            //         //Listen for drag events!
            //         google.maps.event.addListener(marker, 'dragend', function(event){
            //             markerLocation();
            //         });
            //     } else{
            //         //Marker has already been added, so just change its location.
            //         marker.setPosition(clickedLocation);
            //     }
            //     //Get the marker's location.
            //     markerLocation();
            // });
        }

        //This function will get the marker's current location and then add the lat/long
        //values to our textfields so that we can save the location.
        function markerLocation(){
            //Get location.
            var currentLocation = marker.getPosition();
            console.log(currentLocation);
            //Add lat and lng values to a field that we can save.
        }


        //Load the map when the page has finished loading.
        google.maps.event.addDomListener(window, 'load', initMap);
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>HealthCare - @yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images_global/logo.jpg') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('customer/assets/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('customer/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/assets/plugins/fontawesome/css/all.min.css') }}">


    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="{{ asset('customer/assets/plugins/fancybox/jquery.fancybox.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('customer/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/assets/css/custom.css') }}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="main-wrapper">

    <!-- Header -->
    <header class="header">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
                </a>
                <a href="{{ route('customer.index') }}" class="navbar-brand logo">
                    <img src="{{ asset('images_global/healthcare-full.jpg') }}" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="{{ route('customer.index') }}" class="menu-logo">
                        <img src="{{ asset('images_global/healthcare-full.jpg') }}" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <ul class="main-nav">
                    <li class="">
                        <a href="{{ route('customer.index') }}">Trang chủ</a>
                    </li>
                    <li class="active">
                        <a href="/customer/map">Map</a>
                    </li>
{{--                    <li>--}}
{{--                        <a href="admin/index.html" target="_blank">Admin</a>--}}
{{--                    </li>--}}
                    <li class="login-link">
                        <a href="login.html">Login / Signup</a>
                    </li>
                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                <li class="nav-item contact-item">
                    <div class="header-contact-img">
                        <i class="far fa-hospital"></i>
                    </div>
                    <div class="header-contact-detail">
                        <p class="contact-header">Contact</p>
                        <p class="contact-info-header"> +1 315 369 5943</p>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link header-login" href="login.html">login / Signup </a>
                </li>
            </ul>
        </nav>
    </header>
</div>
<!--The div element for the map -->
<div id="map"></div>
<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
{{--<script--}}
{{--        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9CKlY-57L2SQ6xiB1Zu0hPBfh5qfOSOw&callback=initMap&libraries=&v=weekly"--}}
{{--        async--}}
{{--></script>--}}
</body>
<footer class="footer">

    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6">

                    <!-- Footer Widget -->
                    <div class="footer-widget footer-about">
                        <div class="footer-logo">
                            <img src="assets/img/footer-logo.png" alt="logo">
                        </div>
                        <div class="footer-about-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <div class="social-icon">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Footer Widget -->

                </div>

                <div class="col-lg-3 col-md-6">

                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">For Patients</h2>
                        <ul>
                            <li><a href="search.html"><i class="fas fa-angle-double-right"></i> Map</a></li>
                            <li><a href="chat.html"><i class="fas fa-angle-double-right"></i> Chat</a></li>
                            <li><a href="login.html"><i class="fas fa-angle-double-right"></i> Login</a></li>
                            <li><a href="register.html"><i class="fas fa-angle-double-right"></i> Register</a></li>
                            <li><a href="booking.html"><i class="fas fa-angle-double-right"></i> Booking</a></li>
                            <li><a href="patient-dashboard.html"><i class="fas fa-angle-double-right"></i> Patient Dashboard</a></li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->

                </div>

                <div class="col-lg-3 col-md-6">

                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">For Business</h2>
                        <ul>
                            <li><a href="appointments.html"><i class="fas fa-angle-double-right"></i> Map</a></li>
                            <li><a href="login.html"><i class="fas fa-angle-double-right"></i> Login </a></li>
                            <li><a href="/Business/Dashboard"><i class="fas fa-angle-double-right"></i> Business Dashboard </a></li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->

                </div>

                <div class="col-lg-3 col-md-6">

                    <!-- Footer Widget -->
                    <div class="footer-widget footer-contact">
                        <h2 class="footer-title">Contact Us</h2>
                        <div class="footer-contact-info">
                            <div class="footer-address">
                                <span><i class="fas fa-map-marker-alt"></i></span>
                                <p> 3556  Beech Street, San Francisco,<br> California, CA 94108 </p>
                            </div>
                            <p>
                                <i class="fas fa-phone-alt"></i>
                                +1 315 369 5943
                            </p>
                            <p class="mb-0">
                                <i class="fas fa-envelope"></i>
                                doccure@example.com
                            </p>
                        </div>
                    </div>
                    <!-- /Footer Widget -->

                </div>

            </div>
        </div>
    </div>
    <!-- /Footer Top -->

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container-fluid">

            <!-- Copyright -->
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="copyright-text">
                            <p class="mb-0"><a href="templateshub.net">Templates Hub</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">

                        <!-- Copyright Menu -->
                        <div class="copyright-menu">
                            <ul class="policy-menu">
                                <li><a href="term-condition.html">Terms and Conditions</a></li>
                                <li><a href="privacy-policy.html">Policy</a></li>
                            </ul>
                        </div>
                        <!-- /Copyright Menu -->

                    </div>
                </div>
            </div>
            <!-- /Copyright -->

        </div>
    </div>
    <!-- /Footer Bottom -->

</footer>
<!-- /Footer -->
</html>