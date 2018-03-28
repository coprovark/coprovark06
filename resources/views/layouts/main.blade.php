<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>webapp</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('asset/css/bootstrap/css/bootstrap.min.css') }}">

    <!-- MetisMenu CSS -->
    <link rel="stylesheet" href="{{ URL::asset('asset/css/metisMenu/metisMenu.min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('asset/css/sb-admin-2.css') }}">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{ URL::asset('asset/css/font-awesome/css/font-awesome.min.css') }}">


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="container-fluid" style="background:linear-gradient(white,#e6e6e6);">
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
                </div>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> ข้อมูลพื้นฐาน<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/form_user"><span class="glyphicon glyphicon-use"></span>กำหนดผู้ใช้งาน</a>
                                </li>
                                <li>
                                    <a href="/form_title">คำนำหน้าชื่อ</a>
                                </li>
                                <li>
                                    <a href="/form_type">ประเภท</a>
                                </li>
                                <li>
                                    <a href="/form_gender">เพศ</a>
                                </li>
                                <li>
                                    <a href="/form_faculty">คณะ</a>
                                </li>
                                <li>
                                    <a href="/form_personal">personal</a>
                                </li>
                                <li>
                                    <a href="/slide_pic">อัลบั้ม</a>
                                </li>
                                <li>
                                    <a href="/list_user_edit">list_user_edit</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="/form_reg"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Sign<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/form_login2"><span class="glyphicon glyphicon-use"></span>เข้าสู่ระบบ</a>
                                </li>
                                <li>
                                    <a href="/form_reg">สมัครสามชิก</a>
                                </li>
                                <li>
                                    <a href="/test_form">ทดสอบตรวจค่า...</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/profile"><i class="fa fa-dashboard fa-fw"></i> Prefile</a>
                        </li>
                        <li>
                            <a href="/page05"><i class="fa fa-dashboard fa-fw"></i> Basic Calculator</a>
                        </li>
                        <li>
                            <a href="/form_check_login"><i class="fa fa-bar-chart-o fa-fw"></i> Check login</a>
                        </li>
                        <li>
                            <a href="/list_users"><i class="fa fa-bar-chart-o fa-fw"></i> รายชื่อสมาชิก</a>
                        </li>
                        <li>
                            <a href="/upload"><i class="fa fa-bar-chart-o fa-fw"></i>File upload</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="container-fluid" style="background:linear-gradient(#ebebe0,white);">
                        <h3 class="page-header"><font size="18" color="black" face="TH SarabunPSK"><b><center>Show Content</center></b></font></h3>
                    </div>
                    <br>
                        @yield('content')

                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="css/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
