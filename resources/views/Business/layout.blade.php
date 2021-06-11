<!doctype html>
<html lang="en">
<head>
    <title>Car Parking Control System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{--    <link rel="stylesheet" href="css/style.css">--}}
    <link rel="stylesheet" href="{{ asset('assets/css/admin/style.css') }}">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

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

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
</head>
<body>

<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="custom-menu">
        </div>
        <div class="p-4 pt-5">
            <h1><a href="/Business/Dashboard" class="logo">Car Parking Control System</a></h1>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="/Business/Dashboard">Dashboard</a>
                </li>
                <li>
                    <a href="/Business/Parking">Quản lí bãi xe</a>
                </li>
                <li>
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
        @yield('body')
    </div>
</div>

<script src="{{asset("assets/js/Admin/jquery.min.js")}}"></script>
<script src="{{asset("assets/js/Admin/popper.js")}}"></script>
<script src="{{asset("assets/js/Admin/bootstrap.min.js")}}"></script>
<script src="{{asset("assets/js/Admin/main.js")}}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
