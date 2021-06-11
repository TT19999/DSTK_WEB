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
                <li >
                    <a href="/Business/AddParking">Thêm mới bãi xe</a>
                </li>
                <li class="active">
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
                            <h2>Quản lí  : </h2>
                        </li>
                        <li >

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
    @if(!empty($cars))
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên bãi xe</th>
                <th scope="col">tọa độ</th>
                <th scope="col">Địa điểm</th>
                <th scope="col">Hành động</th>
            </tr>
            </thead>
            @foreach($cars as $index => $car )
                <tbody>
                <tr>
                    <th scope="row">{{$index+1}}</th>
                    <td>{{$car->title}}</td>
                    <td>{{$car->lat_map . ' , ' . $car->lng_map}}</td>
                    <td>{{$car->description}}</td>
                    <td>
                        <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#editCarParking"> Sửa </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModalCenter"> Xóa </button>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
    @endif
    @if(empty($cars))
        <h4>Bạn chưa có bãi xe nào</h4>
    @endif
    <br/>
</div>
</div>

<script src="{{asset("assets/js/Admin/jquery.min.js")}}"></script>
<script src="{{asset("assets/js/Admin/popper.js")}}"></script>
<script src="{{asset("assets/js/Admin/bootstrap.min.js")}}"></script>
<script src="{{asset("assets/js/Admin/main.js")}}"></script>
</body>
</html>