<!DOCTYPE html>
<?php
$s = session('activity_id'); 

$adm_modules = array();
$adm_modules = DB::table('admin_module_permission')
			 ->select('mid')
			 ->where('uid',$s)
			->get();

$marray = array();

foreach($adm_modules as $k2=>$v2)
{

$marray[] = $v2->mid;

}

?>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>CapActix Portal</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #4 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset('assets/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('assets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{ asset('assets/layouts/layout4/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/layouts/layout4/css/themes/default.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{ asset('assets/layouts/layout4/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/bootstrap-sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
         <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}">

         </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="javascript:void(0)" onClick="window.location.reload()">
                       <!-- <img src="{{$header_logo_url}}" alt="" style="height: 64px;width: 199px;margin: 0px 0px 0px !important; " class="logo-default" /> </a> -->
			<img src="{{$header_logo_url}}" alt="" style="height: 70px;width: 199px;margin: 0px 0px 0px !important; " class="logo-default" /> </a> 
                    <!-- <h2 style="color: #fff;">CapActix</h2> -->
                    <div class="menu-toggler sidebar-toggler">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN PAGE ACTIONS -->
                <!-- DOC: Remove "hide" class to enable the page header actions -->
                
                <div class="page-top">
                    
                    <!-- END HEADER SEARCH BOX -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            
                            <!-- BEGIN TODO DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                             <?php 
                                if(session('login_type') == 'client'){
                                    $logout_url = "client/logout";
                                    $username = session('client_user_name');
                                    $profile = url('client/profile');
                                    $change_password = url('client/change_password');
                                    $system_config = '';
                                    $email_template = '';
                                }elseif(session('login_type') == 'sub_client'){
                                    $logout_url = "client/logout";
                                    $username = session('sub_client_user_name');
                                    $profile = url('client/profile');
                                    $change_password = url('client/change_password');
                                    $system_config = '';
                                    $email_template = '';
                                }elseif(session('login_type') == 'employee'){
                                    $logout_url = "employee/logout";
                                    $username = session('emp_user_name');
                                    $profile = url('employee/profile');
                                    $change_password = url('employee/change_password');
                                    $system_config = '';
                                    $email_template = '';
                                }else{
                                    $logout_url = "logout";
                                    $username = session('user_name');
                                    $profile = "";
                                    $change_password = url('change_password');
                                    $system_config = 'system_config';
                                    $email_template = 'email_templates';
                                }
                            ?>
                            <li class="dropdown dropdown-user dropdown-dark">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <span class="username">  <i class="icon-user"></i> <?php echo ucfirst($username); ?> </span>
                                    <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    @if( !empty($profile) )
                                    <li>
                                        <a href="{{ url($profile) }}">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    @endif
                                    @if( !empty($change_password) )
                                    <li>
                                        <a href="{{ url($change_password) }}">
                                            <i class="icon-rocket"></i> Change Password
                                        </a>
                                    </li>
                                    @endif

                                    @if( !empty($email_template) )
				<?php if (in_array("email_template", $marray) || session('activity_id') == 1)  { ?>
                                        <li>
                                            <a href="{{ url($email_template) }}">
                                                <i class="icon-rocket"></i> Email Templates
                                            </a>
                                        </li>
				<?php
                                        }
                                    ?>
                                    @endif

                                    @if( !empty($system_config) )
				<?php if (in_array("system_config", $marray) || session('activity_id') == 1)  { ?>
                                        <li>
                                            <a href="{{ url($system_config) }}">
                                                <i class="icon-rocket"></i> System Config
                                            </a>
                                        </li>
				 <?php
                                        }
                                    ?>
				
                                    @endif

			<?php if (in_array("full_backup", $marray) || session('activity_id') == 1)  { ?>

                                    <?php // if(session('login_type') == 'admin'){ ?>
                                            <li>
                                                <a href="{{ url('full_backup') }}">
                                                    <i class="icon-user"></i> Backup </a>
                                            </li>
                                    <?php
                                        }
                                    ?>
                                    <li>
                                        <a href="{{ url($logout_url) }}">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->

            <!-- login type : admin, employee, client_login, sub_client -->
            @php
                $login_type = session('login_type');
            @endphp


            @if($login_type=='admin')
                @include('layouts.sidebar')
            @elseif($login_type=='employee')
                @include('layouts.sidebar_emp')
            @elseif($login_type=='client')
                @include('layouts.sidebar_client')
            @elseif($login_type=='sub_client')
                @include('layouts.sidebar_client')
            @endif    
            
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                @yield('content')
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            {{-- @include('layouts.quick_sidebar') --}}
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        @include('layouts.footer')
        <!-- END FOOTER -->
        <!-- BEGIN QUICK NAV -->
        {{--  @include('layouts.quick_nav') --}}
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        @include('layouts.footer_script')
        @stack('scripts')
    </body>

</html>
