<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title><?php echo $page_title; ?></title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url();?>assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url();?>assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="<?php echo base_url();?>dashboard">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav">
                    <a class="nav-link collapsed" data-toggle="collapse" href="#formsExamples" aria-expanded="false">
                    <i class="pe-7s-network"></i>
                        <p>
                        Layanan VPN
                        <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="formsExamples" style="">
                        <ul class="nav">
                            <li>
                                <a href="<?php echo base_url();?>layanan/LayananVPN">                           
                                <span class="sidebar-normal">Layanan VPN Saya</span>
                                </a>
                            </li>
                            <li class="nav ">
                                <a class="nav-link" href="<?php echo base_url();?>layanan/create_vpn"> 
                                <span class="sidebar-normal">Order Layanan VPN</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>   
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url();?>#">Table List</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="<?php echo base_url();?>#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="<?php echo base_url();?>#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
                                    <p class="hidden-lg hidden-md">
                                        5 Notifications
                                        <b class="caret"></b>
                                    </p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url();?>#">Notification 1</a></li>
                                <li><a href="<?php echo base_url();?>#">Notification 2</a></li>
                                <li><a href="<?php echo base_url();?>#">Notification 3</a></li>
                                <li><a href="<?php echo base_url();?>#">Notification 4</a></li>
                                <li><a href="<?php echo base_url();?>#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="<?php echo base_url();?>">
                                <i class="fa fa-search"></i>
                                <p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="<?php echo base_url();?>#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        Dropdown
                                        <b class="caret"></b>
                                    </p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url();?>#">Action</a></li>
                                <li><a href="<?php echo base_url();?>#">Another action</a></li>
                                <li><a href="<?php echo base_url();?>#">Something</a></li>
                                <li><a href="<?php echo base_url();?>#">Another action</a></li>
                                <li><a href="<?php echo base_url();?>#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url();?>#">Separated link</a></li>
                              </ul>
                        </li>                     
                        <li class="dropdown">
                              <a href="<?php echo base_url();?>#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        Akun <?php echo $user_name; ?>
                                        <b class="caret"></b>
                                    </p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url();?>#">Pengatuan Profil</a></li>
                                <li><a href="<?php echo base_url();?>#">Ganti Password</a></li>
                                <li><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>                            
                              </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">



