<!DOCTYPE html>
<html>
<head>
    <title>Add Map</title>

    {{--    <link rel="stylesheet" type="text/css" href="./style.css" />--}}
    {{--    <script src="./index.js"></script>--}}
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/admin/style.css') }}">

    <style type="text/css">
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 90%;
            width: 100%;
        }

        /* Optional: Makes the sample page fill the window. */
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        /*.map-marker-label {*/
        /*    position: absolute;*/
        /*    color: red;*/
        /*    font-size: 16px;*/
        /*    font-weight: bold;*/
        /*    !* Use margin to position the text *!*/
        /*    !* top, left position is the place of marker position *!*/
        /*    margin-top: 0px;*/
        /*    margin-left: 20px;*/
        /*}*/
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
            var centerOfMap = new google.maps.LatLng('20.9782483', '105.7938184' );



            //Map options.
            var options = {
                center: centerOfMap, //Set center.
                zoom: 13//The zoom value.
            };

            //Create the map object.
            map = new google.maps.Map(document.getElementById('map'), options);

            // Listen for any clicks on the map.
            google.maps.event.addListener(map, 'click', function(event) {
                var clickedLocation = event.latLng;
                console.log(clickedLocation);
                //If the marker hasn't been added.
                if(marker === false){
                    //Create the marker.
                    marker = new google.maps.Marker({
                        position: clickedLocation,
                        map: map,
                        label: labels[labelIndex++ % labels.length],
                        name: "Google",
                        title: "hello",
                        draggable: true //make it draggable
                    });
                    //Listen for drag events!
                    google.maps.event.addListener(marker, 'dragend', function(event){
                        markerLocation();
                    });
                } else{
                    //Marker has already been added, so just change its location.
                    marker.setPosition(clickedLocation);
                }
                //Get the marker's location.
                markerLocation();
            });
        }

        //This function will get the marker's current location and then add the lat/long
        //values to our textfields so that we can save the location.
        function markerLocation(){
            //Get location.
            var currentLocation = marker.getPosition();
            var lat = marker.getPosition().lat();
            var lng = marker.getPosition().lng();
            console.log(lat);
            $('#Lat').val(lat);
            $('#Lng').val(lng);
            $('#Lat1').val(lat);
            $('#Lng1').val(lng);
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
<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="custom-menu">
        </div>
        <div class="p-4 pt-5">
            <h1><a href="/Business/Dashboard" class="logo">Car Parking Control System</a></h1>
            <ul class="list-unstyled components mb-5">
                <li >
                    <a href="/Business/Dashboard">Dashboard</a>
                </li>
                <li>
                    <a href="/Business/Parking">Quản lí bãi xe</a>
                </li>
                <li class="active">
                    <a href="/Business/AddParking">Thêm mới bãi xe</a>
                </li>
                <li>
                    <a href="/Business/ExportData">Xuất hóa đơn/thống kê</a>
                </li>
                <li>
                    <a href="/Business/Account">Quản lí tài khoản</a>
                </li>
                <li>
                    <a href="/Business/Contact">Contact</a>
                </li>
            </ul>

        </div>
    </nav>


    <div id="content" class="p-4 p-md-5 pt-5">
        <div class="main-wrapper">
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
                                <p>Vui lòng chọn trên map: </p>
                            </li>
                            <li >
                                <form>
                                    <div class="form-row">
                                        <div class="col">
                                            <input id ="Lat" type="text" class="form-control" placeholder="Lat" disabled>
                                        </div>
                                        <div class="col">
                                            <input id ="Lng" type="text" class="form-control" placeholder="Lnt" disabled>
                                        </div>
                                    </div>
                                </form>
                            </li>
                            <li >
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                    Add
                                </button>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav header-navbar-rht">
                        <li class="nav-item contact-item">
                        </li>
                        <li class="nav-item">
                        </li>
                    </ul>
                </nav>
            </header>
        </div>

    <!--The div element for the map -->
        <div id="map"></div>
        <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
        <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9CKlY-57L2SQ6xiB1Zu0hPBfh5qfOSOw&callback=initMap&libraries=&v=weekly"
                async
        ></script>
    </div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Nhập thông tin bãi xe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/Business/AddParkingCar">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input id ="Lat1" type="hidden" class="form-control" placeholder="Lat" name="Lat">
                            <input id ="Lng1" type="hidden" class="form-control" placeholder="Lnt" name="Lnt">
                            <label for="inputEmail4">Tên của bãi xe</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="tên của bãi xe" name="title">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Địa chỉ</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="địa chỉ cơ bản" name="location">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Chi tiết </label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="decription">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Huong Dan</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="subDecription">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control" id="inputCity" name="city">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Loại xe cho đỗ</label>
                            <select id="inputState" class="form-control">
                                <option selected>Tất cả</option>
                                <option>Xe máy</option>
                                <option>Xe dạp</option>
                                <option>Xe oto</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<script src="{{asset("assets/js/Admin/jquery.min.js")}}"></script>
<script src="{{asset("assets/js/Admin/popper.js")}}"></script>
<script src="{{asset("assets/js/Admin/bootstrap.min.js")}}"></script>
<script src="{{asset("assets/js/Admin/main.js")}}"></script>
</body>
</html>