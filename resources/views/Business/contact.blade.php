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
                <li >
                    <a href="/Business/ExportData">Xuất hóa đơn/thống kê</a>
                </li>
                <li>
                    <a href="/Business/Account">Quản lí tài khoản</a>
                </li>
                <li class="active">
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
                                <img src="{{ asset('images_global/img_1.png') }}" class="img-fluid" alt="Logo">
                            </a>
                            <a id="menu_close" class="menu-close" href="javascript:void(0);">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                        <ul class="main-nav">
                            <li class="">
                                <h2> Liên hệ/ Gửi yêu cầu : </h2>
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
        <div id="content" class="p-4 p-md-5 pt-5">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Tên</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Tên">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Địa chỉ</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Địa chỉ">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>Về bãi xe</option>
                            <option>Về tài khoản nhân viên</option>
                            <option>Vể việc thanh toán</option>
                            <option>Khác</option>
                        </select>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Nội dung</span>
                    </div>
                    <textarea class="form-control" ></textarea>
                </div>
                <p></p>
                <button type="submit" class="btn btn-primary">Gửi</button>
            </form>
        </div>
        <br/>
    </div>
</div>

<script src="{{asset("assets/js/Admin/jquery.min.js")}}"></script>
<script src="{{asset("assets/js/Admin/popper.js")}}"></script>
<script src="{{asset("assets/js/Admin/bootstrap.min.js")}}"></script>
<script src="{{asset("assets/js/Admin/main.js")}}"></script>
</body>
</html>
