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
    <script>
        function handleClickButtonEmploy () {

        }
    </script>
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
                <li class="active">
                    <a href="/Business/Account">Quản lí tài khoản</a>
                </li>
                <li >
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
                                <h2> Quản lí tài khoản nhân viên : </h2>
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
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Mã số nhân viên</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Ngày Sinh</th>
                    <th scope="col">Hành động</th>
                </tr>
                </thead>
                @if(!empty($emplyess))
                @foreach($employees as $index => $employee )
                    <tbody>
                    <tr>
                        <th scope="row">{{$index+1}}</th>
                        <td>aa</td>
                        <td>bbb</td>
                        <td>ccc</td>
                        <td>
                            <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#EditEmployee"> Sửa </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModalCenter"> Xóa </button>
                        </td>
                    </tr>
                    </tbody>
                @endforeach
                    @endif
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>007</td>
                    <td>Phùng Nhật Tùng</td>
                    <td>1999-10-01</td>
                    <td>
                        <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#EditEmployee"> Sửa </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModalCenter"> Xóa </button>
                    </td>
                </tr>
                </tbody>
                <tbody>
                <tr>
                    <th scope="row">2</th>
                    <td>700</td>
                    <td>Nguyễn Thị Minh Tâm</td>
                    <td>1999-06-18</td>
                    <td>
                        <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#EditEmployee"> Sửa </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModalCenter"> Xóa </button>
                    </td>
                </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#addNewEmployee">
                Them nhan vien
            </button>
        </div>
        <br/>

        <div class="modal fade" id="addNewEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Chỉnh sửa nhân viên</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="/Business/AddNewEmployee">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input id ="Lat1" type="hidden" class="form-control" placeholder="Lat" name="Lat">
                                    <input id ="Lng1" type="hidden" class="form-control" placeholder="Lnt" name="Lnt">
                                    <label for="inputEmail4">Tên Nhân Viên</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="tên của bãi xe" name="title">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Ngày Sinh</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder="địa chỉ cơ bản" name="location">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Giới thiệu </label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="Sơ qua cá nhân" name="decription">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Vị trí</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="Vị trí trong công ty" name="subDecription">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Chứng minh nhân dân</label>
                                    <input type="text" class="form-control" id="inputCity" name="Chứng minh thư nhân dân/căn cước công dân">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Mã nhân viên</label>
                                    <input type="text" class="form-control" id="inputState" name="Mã Nhân Viên">
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
        <div class="modal fade" id="EditEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Chỉnh sửa bãi xe</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="/Business/AddNewEmployee">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input id ="Lat1" type="hidden" class="form-control" placeholder="Lat" name="Lat">
                                    <input id ="Lng1" type="hidden" class="form-control" placeholder="Lnt" name="Lnt">
                                    <label for="inputEmail4">Tên Nhân Viên</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="tên của bãi xe" name="title" value="Phùng Nhật Tùng">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Ngày Sinh</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder="địa chỉ cơ bản" name="location" value="1999-10-01">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Giới thiệu </label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="Sơ qua cá nhân" name="decription" value="nhân viên công ty b">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Vị trí</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="Vị trí trong công ty" name="subDecription" value="intern">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Chứng minh nhân dân</label>
                                    <input type="text" class="form-control" id="inputCity" name="Chứng minh thư nhân dân/căn cước công dân" value="000199001428">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Mã nhân viên</label>
                                    <input type="text" class="form-control" id="inputState" name="Mã Nhân Viên" value="007">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="deleteModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Xóa nhân viên</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="DELETE" action="/Business/DeleteParkingCar">
                            @csrf
                            <div class="form-group">
                                <label for="inputAddress">Bạn có chắc chắn muốn xóa nhân viên này không hay không</label>
                            </div>
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
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
