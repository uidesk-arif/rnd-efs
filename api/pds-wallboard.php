<?php 
# CONFIG
$url_campaign_detail = "https://demo-1.c-icare.cc/index.php?menu=campaign_monitoring&rawmode=yes&action=getCampaignDetail&campaigntype=outgoing&campaignid=180";
$url_sse = "https://demo-1.c-icare.cc/index.php?menu=campaign_monitoring&rawmode=yes&action=checkStatus&clientstatehash=b8294b40ba5666cd836fedb842f8ded1&serverevents=true";
$issabel_session = "iqhk7ruhokov3jfink07co40i3";

# CODE
$campaign_detail = curl_get($url_campaign_detail, [], ['Cookie: issabelSession='.$issabel_session]);
$campaign_detail_response = (isset($campaign_detail['response']))? $campaign_detail['response'] : "";
$campaign_detail_response = json_decode($campaign_detail_response, true);

// echo "<pre>";
// print_r($campaign_detail_response);
// echo "</pre>";
?>  

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/favicon.ico">

    <title>Dashboard  Outbound Call </title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/main-dark/css/vendors_css.css">

    <!-- Style-->
    <link rel="stylesheet" href="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/main-dark/css/style.css">
    <link rel="stylesheet" href="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/main-dark/css/skin_color.css">

    <script src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/main-dark/Chart.bundle.js"></script>
    <script src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/main-dark/chartjs-gauge.js"></script>
    <script src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/main-dark/js/dashboard.js"></script>
    <style>
        .containerXXX {
            position: relative;
            overflow: hidden;
            width: 100%;
            padding-top: 56.25%; /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
        }

        /* Then style the iframe to fit in the container div with full height and width */
        .responsive-iframe {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body onload="getData()" class="hold-transition dark-skin theme-primary sidebar-collapse">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <div class="d-flex align-items-center logo-box pl-10">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <!-- Logo Test -->
                <a href="index.html" class="logo">
                    <!-- logo-->
                    <div class="logo-lg">
                        <span class="light-logo"><img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/3.png" alt="logo" width="250"></span>
                        <span class="dark-logo"><img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/3.png" alt="logo" width="250"></span>
                    </div>
                </a>
            </div>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top pl-10">
                <!-- Sidebar toggle button-->
                <div class="app-menu">
                    <br>
                    Welcome To Dashboard Data Outbound Call <a style="color: red;" id="userName"></a>
                </div>

                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">

                        <!-- <li class="btn-group d-md-inline-flex d-none">
                            <div class="app-menu">
                                <div class="search-bx mx-5">

                                    <br>
                                    <a style="color: goldenrod;" id="tgl_kanan_pojok">12 Januari 2022 | Rabu | 13:38 WIB</a>

                                    </form>
                                </div>
                            </div>
                        </li> -->

                        <!-- Control Sidebar Toggle Button
                        <li>
                          <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link rounded full-screen" title="Full Screen">
                              <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/svg-icon/fullscreen.svg" class="img-fluid svg-icon" alt="">
                          </a>
                        </li>-->
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light">
                                <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/svg-icon/settings.svg" class="img-fluid svg-icon" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar-->
            <section class="sidebar">
                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">

                    <li class="treeview">
                        <a href="#">
                            <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/svg-icon/sidebar-menu/dashboard.svg" class="svg-icon" alt="">
                            <span>Dashboard</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="index.html"><i class="ti-more"></i>Dashboard 1</a></li>
                            <li><a href="index2.html"><i class="ti-more"></i>Dashboard 2</a></li>
                            <li><a href="index3.html"><i class="ti-more"></i>Dashboard 3</a></li>
                            <li><a href="index4.html"><i class="ti-more"></i>Dashboard 4</a></li>
                            <li><a href="index5.html"><i class="ti-more"></i>Dashboard 5</a></li>
                        </ul>
                    </li>

                    <li class="header">Apps & UI</li>

                    <li class="treeview">
                        <a href="#">
                            <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/svg-icon/sidebar-menu/mailbox.svg" class="svg-icon" alt="">
                            <span>Mailbox</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="mailbox_inbox.html"><i class="ti-more"></i>Inbox</a></li>
                            <li><a href="mailbox_compose.html"><i class="ti-more"></i>Compose</a></li>
                            <li><a href="mailbox_read_mail.html"><i class="ti-more"></i>Read</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/svg-icon/sidebar-menu/apps.svg" class="svg-icon" alt="">
                            <span>Apps</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="extra_taskboard.html"><i class="ti-more"></i>Todo</a></li>
                            <li><a href="extra_calendar.html"><i class="ti-more"></i>Calendar</a></li>
                            <li><a href="extra_app_ticket.html"><i class="ti-more"></i>Support Ticket</a></li>
                            <li><a href="contact_app.html"><i class="ti-more"></i>Contact / Employee</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/svg-icon/sidebar-menu/uielements.svg" class="svg-icon" alt="">
                            <span>UI Elements</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="ui_typography.html"><i class="ti-more"></i>Typography</a></li>
                            <li><a href="ui_grid.html"><i class="ti-more"></i>Grid</a></li>
                            <li><a href="ui_tab.html"><i class="ti-more"></i>Tabs</a></li>
                            <li><a href="ui_timeline.html"><i class="ti-more"></i>Timeline</a></li>
                            <li><a href="ui_timeline_horizontal.html"><i class="ti-more"></i>Horizontal Timeline</a></li>
                            <li><a href="box_cards.html"><i class="ti-more"></i>User Card</a></li>
                            <li><a href="box_advanced.html"><i class="ti-more"></i>Advanced Card</a></li>
                            <li><a href="box_basic.html"><i class="ti-more"></i>Basic Card</a></li>
                            <li><a href="box_color.html"><i class="ti-more"></i>Card Color</a></li>
                            <li><a href="box_group.html"><i class="ti-more"></i>Card Group</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/svg-icon/sidebar-menu/advancedui.svg" class="svg-icon" alt="">
                            <span>Advanced UI</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="ui_badges.html"><i class="ti-more"></i>Badges</a></li>
                            <li><a href="ui_border_utilities.html"><i class="ti-more"></i>Border</a></li>
                            <li><a href="ui_buttons.html"><i class="ti-more"></i>Buttons</a></li>
                            <li><a href="ui_dropdown.html"><i class="ti-more"></i>Dropdown</a></li>
                            <li><a href="ui_dropdown_grid.html"><i class="ti-more"></i>Dropdown Grid</a></li>
                            <li><a href="ui_progress_bars.html"><i class="ti-more"></i>Progress Bars</a></li>
                            <li><a href="ui_ribbons.html"><i class="ti-more"></i>Ribbons</a></li>
                            <li><a href="ui_sliders.html"><i class="ti-more"></i>Sliders</a></li>
                            <li><a href="component_bootstrap_switch.html"><i class="ti-more"></i>Bootstrap Switch</a></li>
                            <li><a href="component_date_paginator.html"><i class="ti-more"></i>Date Paginator</a></li>
                            <li><a href="component_media_advanced.html"><i class="ti-more"></i>Advanced Medias</a></li>
                            <li><a href="component_modals.html"><i class="ti-more"></i>Modals</a></li>
                            <li><a href="component_rangeslider.html"><i class="ti-more"></i>Range Slider</a></li>
                            <li><a href="component_rating.html"><i class="ti-more"></i>Ratings</a></li>
                            <li><a href="component_animations.html"><i class="ti-more"></i>Animations</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="ui_color_utilities.html">
                            <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/svg-icon/sidebar-menu/color.svg" class="svg-icon" alt="">
                            <span>Color</span>
                        </a>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/svg-icon/sidebar-menu/icons.svg" class="svg-icon" alt="">
                            <span>Icons</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="icons_fontawesome.html"><i class="ti-more"></i>Font Awesome</a></li>
                            <li><a href="icons_glyphicons.html"><i class="ti-more"></i>Glyphicons</a></li>
                            <li><a href="icons_material.html"><i class="ti-more"></i>Material Icons</a></li>
                            <li><a href="icons_themify.html"><i class="ti-more"></i>Themify Icons</a></li>
                            <li><a href="icons_simpleline.html"><i class="ti-more"></i>Simple Line Icons</a></li>
                            <li><a href="icons_cryptocoins.html"><i class="ti-more"></i>Cryptocoins Icons</a></li>
                            <li><a href="icons_flag.html"><i class="ti-more"></i>Flag Icons</a></li>
                            <li><a href="icons_weather.html"><i class="ti-more"></i>Weather Icons</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/svg-icon/sidebar-menu/cards.svg" class="svg-icon" alt="">
                            <span>Widgets</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="widgets_blog.html"><i class="ti-more"></i>Blog</a></li>
                            <li><a href="widgets_chart.html"><i class="ti-more"></i>Chart</a></li>
                            <li><a href="widgets_list.html"><i class="ti-more"></i>List</a></li>
                            <li><a href="widgets_social.html"><i class="ti-more"></i>Social</a></li>
                            <li><a href="widgets_statistic.html"><i class="ti-more"></i>Statistic</a></li>
                            <li><a href="widgets_weather.html"><i class="ti-more"></i>Weather</a></li>
                            <li><a href="widgets.html"><i class="ti-more"></i>Widgets</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/svg-icon/sidebar-menu/extensions.svg" class="svg-icon" alt="">
                            <span>Extensions</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="component_sweatalert.html"><i class="ti-more"></i>Sweet Alert</a></li>
                            <li><a href="component_notification.html"><i class="ti-more"></i>Toastr</a></li>
                            <li><a href="extension_fullscreen.html"><i class="ti-more"></i>Fullscreen</a></li>
                            <li><a href="extension_pace.html"><i class="ti-more"></i>Pace</a></li>
                            <li><a href="component_nestable.html"><i class="ti-more"></i>Nestable</a></li>
                            <li><a href="component_portlet_draggable.html"><i class="ti-more"></i>Draggable Portlets</a></li>
                        </ul>
                    </li>

                    <li class="header">Forms & Tables</li>

                    <li class="treeview">
                        <a href="#">
                            <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/svg-icon/sidebar-menu/forms1.svg" class="svg-icon" alt="">
                            <span>Forms & Elements</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="forms_advanced.html"><i class="ti-more"></i>Form Elements</a></li>
                            <li><a href="forms_general.html"><i class="ti-more"></i>Form Layout</a></li>
                            <li><a href="forms_wizard.html"><i class="ti-more"></i>Form Wizard</a></li>
                            <li><a href="forms_validation.html"><i class="ti-more"></i>Form Validation</a></li>
                            <li><a href="forms_mask.html"><i class="ti-more"></i>Formatter</a></li>
                            <li><a href="forms_xeditable.html"><i class="ti-more"></i>Xeditable Editor</a></li>
                            <li><a href="forms_dropzone.html"><i class="ti-more"></i>Dropzone</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/svg-icon/tables.svg" class="svg-icon" alt="">
                            <span>Tables</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="tables_simple.html"><i class="ti-more"></i>Simple tables</a></li>
                            <li><a href="tables_data.html"><i class="ti-more"></i>Data tables</a></li>
                            <li><a href="tables_editable.html"><i class="ti-more"></i>Editable Tables</a></li>
                            <li><a href="tables_color.html"><i class="ti-more"></i>Table Color</a></li>
                        </ul>
                    </li>


                    <li class="header">Pages</li>

                    <li class="treeview">
                        <a href="#">
                            <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/svg-icon/sidebar-menu/pages.svg" class="svg-icon" alt="">
                            <span>User Pages</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="contact_userlist_grid.html"><i class="ti-more"></i>Userlist Grid</a></li>
                            <li><a href="contact_userlist.html"><i class="ti-more"></i>Userlist</a></li>
                            <li><a href="sample_faq.html"><i class="ti-more"></i>FAQ</a></li>
                            <li><a href="extra_profile.html"><i class="ti-more"></i>User Profile</a></li>
                            <li><a href="contact_userlist.html"><i class="ti-more"></i>Userlist</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/svg-icon/sidebar-menu/authentication.svg" class="svg-icon" alt="">
                            <span>Authentication</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="auth_login.html"><i class="ti-more"></i>Login</a></li>
                            <li><a href="auth_register.html"><i class="ti-more"></i>Register</a></li>
                            <li><a href="auth_lockscreen.html"><i class="ti-more"></i>Lockscreen</a></li>
                            <li><a href="auth_user_pass.html"><i class="ti-more"></i>Recover password</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/svg-icon/sidebar-menu/miscellaneous.svg" class="svg-icon" alt="">
                            <span>Miscellaneous</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="error_404.html"><i class="ti-more"></i>Error 404</a></li>
                            <li><a href="error_500.html"><i class="ti-more"></i>Error 500</a></li>
                            <li><a href="error_maintenance.html"><i class="ti-more"></i>Maintenance</a></li>
                        </ul>
                    </li>

                    <li class="header">Charts & Maps</li>

                    <li class="treeview">
                        <a href="#">
                            <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/svg-icon/sidebar-menu/charts.svg" class="svg-icon" alt="">
                            <span>Charts</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="charts_chartjs.html"><i class="ti-more"></i>ChartJS</a></li>
                            <li><a href="charts_flot.html"><i class="ti-more"></i>Flot</a></li>
                            <li><a href="charts_inline.html"><i class="ti-more"></i>Inline charts</a></li>
                            <li><a href="charts_morris.html"><i class="ti-more"></i>Morris</a></li>
                            <li><a href="charts_peity.html"><i class="ti-more"></i>Peity</a></li>
                            <li><a href="charts_chartist.html"><i class="ti-more"></i>Chartist</a></li>
                            <li><a href="charts_c3_axis.html"><i class="ti-more"></i>C3 Axis Chart</a></li>
                            <li><a href="charts_c3_bar.html"><i class="ti-more"></i>C3 Bar Chart</a></li>
                            <li><a href="charts_c3_data.html"><i class="ti-more"></i>C3 Data Chart</a></li>
                            <li><a href="charts_c3_line.html"><i class="ti-more"></i>C3 Line Chart</a></li>
                            <li><a href="charts_echarts_basic.html"><i class="ti-more"></i>Basic Echarts</a></li>
                            <li><a href="charts_echarts_bar.html"><i class="ti-more"></i>Bar Echarts</a></li>
                            <li><a href="charts_echarts_pie_doughnut.html"><i class="ti-more"></i>Pie & Doughnut Echarts</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/svg-icon/sidebar-menu/maps.svg" class="svg-icon" alt="">
                            <span>Maps</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="map_google.html"><i class="ti-more"></i>Google Map</a></li>
                            <li><a href="map_vector.html"><i class="ti-more"></i>Vector Map</a></li>
                        </ul>
                    </li>

                    <li class="header">Other Pages</li>

                    <li>
                        <a href="email_index.html">
                            <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/svg-icon/sidebar-menu/emails.svg" class="svg-icon" alt="">
                            <span>Emails</span>
                        </a>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/svg-icon/pages.svg" class="svg-icon" alt="">
                            <span>Sample Pages</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="sample_blank.html"><i class="ti-more"></i>Blank</a></li>
                            <li><a href="sample_coming_soon.html"><i class="ti-more"></i>Coming Soon</a></li>
                            <li><a href="sample_custom_scroll.html"><i class="ti-more"></i>Custom Scrolls</a></li>
                            <li><a href="sample_gallery.html"><i class="ti-more"></i>Gallery</a></li>
                            <li><a href="sample_lightbox.html"><i class="ti-more"></i>Lightbox Popup</a></li>
                            <li><a href="sample_pricing.html"><i class="ti-more"></i>Pricing</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/svg-icon/sidebar-menu/multilevel.svg" class="svg-icon" alt="">
                            <span>Multilevel</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#">Level One</a></li>
                            <li class="treeview">
                                <a href="#">
                                    Level One
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#">Level Two</a></li>
                                    <li class="treeview">
                                        <a href="#">
                                            Level Two
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="#">Level Three</a></li>
                                            <li><a href="#">Level Three</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Level One</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="auth_login.html">
                            <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/svg-icon/sidebar-menu/logout.svg" class="svg-icon" alt="">
                            <span>Log Out</span>
                        </a>
                    </li>
                </ul>
            </section>
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Content Header (Page header) -->
                <!--<div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="w-p100 d-md-flex align-items-center justify-content-between">
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">

                                        <li class="breadcrumb-item" aria-current="page">
                                            <a style="color: goldenrod;">Welcome And Good Morning</a> <br> Welcome To Dashboard Digital Channel
                                        </li>

                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- Main content -->
                <section class="content">
                    <!-- <div class="row">
                        <div class="col-12">
                            <form action="" method="get">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="start_date">Start Date</label>
                                            <input type="date" name="start_date" id="start_date" class="form-control" style="width:100%;height:41px;">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="end_date">End Date</label>
                                            <input type="date" name="end_date" id="end_date" class="form-control" style="width:100%;height:41px;">
                                        </div>
                                    </div>
                                    <div class="col-md-3" style="margin-top:8px">
                                        <br />
                                        <button type="submit" class="btn btn-icon btn-default">
                                            <div class="fa fa-search">&nbsp;Submit</div>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr> -->
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-3">
                                    <center>
                                        <div class="box">
                                            <div class="box-body">
                                                <h4 class="box-title text-primary">Total Call</h4>
                                                <h1 class="text-primary" id="DistibuteDataCalls"><?= $campaign_detail_response['statuscount']['update']['total'] ?? 0 ?></h1>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                                <div class="col-3">
                                    <center>
                                        <div class="box">
                                            <div class="box-body">
                                                <h4 class="box-title text-success">Failed Calls</h4>
                                                <h1 class="text-success" id="DataCalls"><?= $campaign_detail_response['statuscount']['update']['failure'] ?? 0 ?></h1>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                                <div class="col-3">
                                    <center>
                                        <div class="box">

                                            <div class="box-body">
                                                <h4 class="box-title text-danger">Abandoned Calls</h4>
                                                <h1 class="text-danger" id="DataNotCalls"><?= $campaign_detail_response['statuscount']['update']['abandoned'] ?? 0 ?></h1>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                                <div class="col-3">
                                    <center>
                                        <div class="box">
                                            <div class="box-body">
                                                <h5 class="box-title text-warning">Average Call Duration</h5>
                                                <h1 class="text-warning" id="DataCompleteCall"><?= date("H:i:s", floor($campaign_detail_response['stats']['update']['total_sec']/ $campaign_detail_response['statuscount']['update']['finished'])) ?></h1>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                                <div class="col-3">
                                    <center>
                                        <div class="box">
                                            <div class="box-body">
                                                <h5 class="box-title text-info">Pending Call</h5>
                                                <h1 class="text-info" id="DataNotCompleteCalls"><?= $campaign_detail_response['statuscount']['update']['pending'] ?? 0 ?></h1>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                                <div class="col-3">
                                    <center>
                                        <div class="box">
                                            <div class="box-body">
                                                <h5 class="box-title text-light">Connected Call</h5>
                                                <h1 class="text-light" id="TodayAgentNotLogin"><?= $campaign_detail_response['statuscount']['update']['success'] ?? 0 ?></h1>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                                <div class="col-3">
                                    <center>
                                        <div class="box">
                                            <div class="box-body">
                                                <h5 class="box-title text-light">Agent Free</h5>
                                                <?php
                                                    $count_free = 0;
                                                    foreach ($campaign_detail_response['agents']['add'] as $key => $agent) {
                                                        if($agent['status'] == "Free") $count_free += 1;
                                                    }
                                                ?>
                                                <h1 class="text-light" id="TodayAgentLogin"><?= $count_free ?? 0 ?></h1>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                                <div class="col-3">
                                    <center>
                                        <div class="box">
                                            <div class="box-body">
                                                <h5 class="box-title text-light">Maximum Call Duration</h5>
                                                <h1 class="text-light" id="TodayAgentAUX"><?= date("H:i:s", $campaign_detail_response['stats']['update']['max_duration'] ?? 0) ?></h1>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div data-overlay="5">
                                        &nbsp;&nbsp;&nbsp;<h4 class="box-title"><strong><a class="text-light" style="margin-left:20px;">Data Call Summary Agent</a></strong></h4>
                                        <!--<h3 class="widget-user-username text-white">SOEKARNO HATTA</h3>
                                        <h6 class="widget-user-desc text-white">Calls Average</h6><div class="badge badge-pill badge-success font-size-16" data-toggle="tooltip" data-placement="top" title="" data-original-title="3 more">10</div>-->
                                        <!-- </div>								 -->
                                        </br>
                                        <div class="box-body no-padding">
                                            <div class="table-responsive" style="border:none;">
                                                <table class="table" style="border:none;" id="table-summary">
                                                    <thead>
                                                        <tr>
                                                            <td width="30" style="font-weight:bold;">Call Id</td>
                                                            <td width="200" style="font-weight:bold;">Call Number</td>
                                                            <td width="50" style="font-weight:bold;text-align:center;">Call Status</td>
                                                            <td width="50" style="font-weight:bold;text-align:center;">Message</td>
                                                            <td width="50" style="font-weight:bold;text-align:center;">Agent</td>
                                                            <td width="50" style="font-weight:bold;text-align:center;">Status Agent</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                                <div id="containerxx">
                                                    <div id="div1">
                                                        <table class="table table-hover no-border">
                                                        </table>
                                                    </div>
                                                </div>
                                                <hr />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="row">
                            <div class="col-md-3 col-12">
                                <div class="box box-inverse">
                                    <div class="box-header">
                                        <center><h4 class="box-title"><strong>Total CSAT</strong></h4></center>

                                    </div>

                                    <div class="box-body">
                                        <center>-->
                            <!--<img src="stopwatch.png" width="54"><br>-->
                            <!--<i class=" ti-arrow-circle-down fa-4x text-light text-warning"></i><br />
                                            <h3 class="box-title"><strong><a class="text-warning"> 220</a></strong></h3>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="box box-inverse">
                                    <div class="box-header">
                                        <center><h4 class="box-title"><strong>GOOD</strong></h4></center>
                                    </div>
                                    <div class="box-body">
                                        <center>-->
                            <!--<img src="stopwatch.png" width="54"><br>-->
                            <!--<i class="ti-face-smile fa-4x text-light text-success"></i><br />
                                            <h3 class="box-title"><strong><a class="text-success"> 100</a></strong></h3>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="box box-inverse">
                                    <div class="box-header">
                                        <center><h4 class="box-title"><strong>AVERAGE</strong></h4></center>
                                    </div>
                                    <div class="box-body">
                                        <center>-->
                            <!--<img src="stopwatch.png" width="54"><br>-->
                            <!--<i class="ti-comments-smiley fa-4x text-light text-primary"></i><br />
                                            <h3 class="box-title"><strong><a class="text-primary"> 100</a></strong></h3>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="box box-inverse">
                                    <div class="box-header">
                                        <center><h4 class="box-title"><strong>BAD</strong></h4></center>
                                    </div>
                                    <div class="box-body">
                                        <center>-->
                            <!--<img src="stopwatch.png" width="54"><br>-->
                            <!--<i class="ti-face-sad  fa-4x text-light text-danger"></i><br />
                                                <h3 class="box-title"><strong><a class="text-danger"> 20</a></strong></h3>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>-->

                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="pull-right d-none d-sm-inline-block">
                &copy; 2022 <a href="https://www.uidesk.id/">UIDESK</a>. All Rights Reserved.

            </div>
            <!--&copy; 2022 <a href="https://www.uidesk.id/">UIDESK</a>. All Rights Reserved.-->
        </footer>
        <!-- Control Sidebar -->
        <aside class="control-sidebar">

            <div class="rpanel-title">
                <span class="pull-right btn btn-circle p-10">
                    <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/svg-icon/close.svg" data-toggle="control-sidebar" class="img-fluid svg-icon" alt="">
                </span>
            </div>  <!-- Create the tabs -->
            <ul class="nav nav-tabs control-sidebar-tabs">
                <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab"><img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/svg-icon/apps.svg" class="img-fluid svg-icon" alt=""></a></li>
                <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/svg-icon/advanced.svg" class="img-fluid svg-icon" alt=""></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">
                    <div class="flexbox">
                        <a href="javascript:void(0)" class="text-grey">
                            <i class="ti-more"></i>
                        </a>
                        <p>Users</p>
                        <a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
                    </div>
                    <div class="lookup lookup-sm lookup-right d-none d-lg-block">
                        <input type="text" name="s" placeholder="Search" class="w-p100">
                    </div>
                    <div class="media-list media-list-hover mt-20">
                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-success" href="#">
                                <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/avatar/1.jpg" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="#"><strong>Tyler</strong></a>
                                </p>
                                <p>Praesent tristique diam...</p>
                                <span>Just now</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-danger" href="#">
                                <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/avatar/2.jpg" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="#"><strong>Luke</strong></a>
                                </p>
                                <p>Cras tempor diam ...</p>
                                <span>33 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-warning" href="#">
                                <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/avatar/3.jpg" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="#"><strong>Evan</strong></a>
                                </p>
                                <p>In posuere tortor vel...</p>
                                <span>42 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-primary" href="#">
                                <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/avatar/4.jpg" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="#"><strong>Evan</strong></a>
                                </p>
                                <p>In posuere tortor vel...</p>
                                <span>42 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-success" href="#">
                                <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/avatar/1.jpg" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="#"><strong>Tyler</strong></a>
                                </p>
                                <p>Praesent tristique diam...</p>
                                <span>Just now</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-danger" href="#">
                                <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/avatar/2.jpg" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="#"><strong>Luke</strong></a>
                                </p>
                                <p>Cras tempor diam ...</p>
                                <span>33 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-warning" href="#">
                                <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/avatar/3.jpg" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="#"><strong>Evan</strong></a>
                                </p>
                                <p>In posuere tortor vel...</p>
                                <span>42 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-primary" href="#">
                                <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/avatar/4.jpg" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="#"><strong>Evan</strong></a>
                                </p>
                                <p>In posuere tortor vel...</p>
                                <span>42 min ago</span>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <div class="flexbox">
                        <a href="javascript:void(0)" class="text-grey">
                            <i class="ti-more"></i>
                        </a>
                        <p>Todo List</p>
                        <a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
                    </div>
                    <ul class="todo-list mt-20">
                        <li class="py-15 px-5 by-1">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_1" class="filled-in">
                            <label for="basic_checkbox_1" class="mb-0 h-15"></label>
                            <!-- todo text -->
                            <span class="text-line">Nulla vitae purus</span>
                            <!-- Emphasis label -->
                            <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                            <!-- General tools such as edit or delete-->
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_2" class="filled-in">
                            <label for="basic_checkbox_2" class="mb-0 h-15"></label>
                            <span class="text-line">Phasellus interdum</span>
                            <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5 by-1">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_3" class="filled-in">
                            <label for="basic_checkbox_3" class="mb-0 h-15"></label>
                            <span class="text-line">Quisque sodales</span>
                            <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_4" class="filled-in">
                            <label for="basic_checkbox_4" class="mb-0 h-15"></label>
                            <span class="text-line">Proin nec mi porta</span>
                            <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5 by-1">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_5" class="filled-in">
                            <label for="basic_checkbox_5" class="mb-0 h-15"></label>
                            <span class="text-line">Maecenas scelerisque</span>
                            <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_6" class="filled-in">
                            <label for="basic_checkbox_6" class="mb-0 h-15"></label>
                            <span class="text-line">Vivamus nec orci</span>
                            <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5 by-1">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_7" class="filled-in">
                            <label for="basic_checkbox_7" class="mb-0 h-15"></label>
                            <!-- todo text -->
                            <span class="text-line">Nulla vitae purus</span>
                            <!-- Emphasis label -->
                            <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                            <!-- General tools such as edit or delete-->
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_8" class="filled-in">
                            <label for="basic_checkbox_8" class="mb-0 h-15"></label>
                            <span class="text-line">Phasellus interdum</span>
                            <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5 by-1">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_9" class="filled-in">
                            <label for="basic_checkbox_9" class="mb-0 h-15"></label>
                            <span class="text-line">Quisque sodales</span>
                            <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_10" class="filled-in">
                            <label for="basic_checkbox_10" class="mb-0 h-15"></label>
                            <span class="text-line">Proin nec mi porta</span>
                            <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <div id="chat-box-body">
        <!--<div id="chat-circle" class="waves-effect waves-circle btn btn-circle btn-lg btn-warning l-h-70">
            <div id="chat-overlay"></div>
            <span class="font-size-24 ti-comments"></span>
        </div>-->

        <div class="chat-box">
            <div class="chat-box-header p-15 d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button class="waves-effect waves-circle btn btn-circle btn-primary h-40 w-40 rounded-circle l-h-40" type="button" data-toggle="dropdown">
                        <span class="font-size-18 mdi mdi-account-plus"></span>
                    </button>
                    <div class="dropdown-menu min-w-200">
                        <a class="dropdown-item font-size-16" href="#">
                            <span class="mr-15 mdi mdi-group"></span>
                            New Group
                        </a>
                        <a class="dropdown-item font-size-16" href="#">
                            <span class="mr-15 mdi mdi-contacts"></span>
                            Contacts
                        </a>
                        <a class="dropdown-item font-size-16" href="#">
                            <span class="mr-15 mdi mdi-account-multiple"></span>
                            Groups
                        </a>
                        <a class="dropdown-item font-size-16" href="#">
                            <span class="mr-15 mdi mdi-call-made"></span>
                            Calls
                        </a>
                        <a class="dropdown-item font-size-16" href="#">
                            <span class="mr-15 mdi mdi-settings"></span>
                            Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item font-size-16" href="#">
                            <span class="mr-15 mdi mdi-help"></span>
                            Help
                        </a>
                        <a class="dropdown-item font-size-16" href="#">
                            <span class="mr-15 mdi mdi-notification-clear-all"></span>
                            Privacy
                        </a>
                    </div>
                </div>
                <div class="text-center flex-grow-1">
                    <div class="text-dark font-size-18">Mayra Sibley</div>
                    <div>
                        <span class="badge badge-sm badge-dot badge-primary"></span>
                        <span class="text-muted font-size-12">Active</span>
                    </div>
                </div>
                <div class="chat-box-toggle">
                    <button id="chat-box-toggle" class="waves-effect waves-circle btn btn-circle btn-danger h-40 w-40 rounded-circle l-h-40" type="button">
                        <span class="font-size-18 mdi mdi-close"></span>
                    </button>
                </div>
            </div>
            <div class="chat-box-body">
                <div class="chat-box-overlay">
                </div>
                <div class="chat-logs">
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/avatar/2.jpg" class="avatar avatar-lg">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary font-weight-bold">Mayra Sibley</a>
                                <p class="text-muted font-size-12 mb-0">2 Hours</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Hi there, I'm Jesse and you?
                        </div>
                    </div>
                    <div class="chat-msg self">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary font-weight-bold">You</a>
                                <p class="text-muted font-size-12 mb-0">3 minutes</p>
                            </div>
                            <span class="msg-avatar">
                                <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/avatar/3.jpg" class="avatar avatar-lg">
                            </span>
                        </div>
                        <div class="cm-msg-text">
                            My name is Anne Clarc.
                        </div>
                    </div>
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/images/avatar/2.jpg" class="avatar avatar-lg">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary font-weight-bold">Mayra Sibley</a>
                                <p class="text-muted font-size-12 mb-0">40 seconds</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Nice to meet you Anne.<br>How can i help you?
                        </div>
                    </div>
                </div><!--chat-log -->
            </div>
            <div class="chat-input">
                <form>
                    <input type="text" id="chat-input" placeholder="Send a message..." />
                    <button type="submit" class="chat-submit" id="chat-submit">
                        <span class="font-size-22 mdi mdi-send"></span>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Vendor JS -->
    <script src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/main-dark/js/vendors.min.js"></script>
    <script src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/main-dark/js/pages/chat-popup.js"></script>
    <script src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/assets/vendor_components/chartist-js-develop/chartist.js"></script>
    <script src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/assets/vendor_components/chart.js-master/Chart.min.js"></script>
    <script src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/assets/vendor_components/c3/d3.min.js"></script>
    <script src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/assets/vendor_components/c3/c3.min.js"></script>
    <script src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/assets/vendor_components/echarts/dist/echarts-en.min.js"></script>
    <script src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/assets/vendor_components/raphael/raphael.min.js"></script>
    <script src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/assets/vendor_components/morris.js/morris.min.js"></script>

    <!-- Chat Bot Admin App -->
    <!--<script src="js/pages/gauge.js"></script>-->

    <script src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/main-dark/js/template.js"></script>
    <script src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/main-dark/js/demo.js"></script>
    <script src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/main-dark/js/pages/widget-chartist.js"></script>

    <script src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/main-dark/js/pages/widget-charts2.js"></script>
    <script src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/main-dark/js/pages/c3-data.js"></script>
    <script src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/main-dark/js/pages/c3-bar-pie.js"></script>

    <script src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/main-dark/js/pages/echart-pie-doghnut.js"></script>
    <script src="https://asterisk.uidesk.id/rnd/Demo%20Wallboard/main-dark/js/pages/widget-morris-charts.js"></script>

    <!-- <script>
        var url = "<?= $url_sse ?>"

        const evtSource = new EventSource(url);
        console.log(evtSource.withCredentials);
        console.log(evtSource.readyState);
        console.log(evtSource.url);

        evtSource.onopen = function() {
            console.log("Connection to server opened.");
        };

        evtSource.onmessage = function(e) {
            console.log(e);

            var obj = JSON.parse(e.data);
            let pds_status = pds_call_status(obj.statuscount.update)
            
            if(pds_status == "placing") pds_table_row(obj.activecalls.update[0].callid, obj.activecalls.update[0].callnumber, obj.activecalls.update[0].callstatus, obj.log[0].mensaje)
            if(pds_status == "ringing") pds_table_row(obj.activecalls.update[0].callid, obj.activecalls.update[0].callnumber, obj.activecalls.update[0].callstatus, obj.log[0].mensaje)
            if(pds_status == "queue") pds_table_row(obj.activecalls.update[0].callid, obj.activecalls.update[0].callnumber, obj.activecalls.update[0].callstatus, obj.log[0].mensaje)
            if(pds_status == "success") pds_table_row(obj.activecalls.remove[0].callid, '', pds_status, obj.log[0].mensaje, obj.agents.update[0].agent, obj.agents.update[0].status, obj.statuscount.update.success)
            if(pds_status == "finished") pds_table_row(obj.statuscount.update.finished, '', pds_status, obj.log[0].mensaje, obj.agents.update[0].agent, obj.agents.update[0].status)

        };

        evtSource.onerror = function() {
            console.log("EventSource failed.");
        };

        function pds_table_row(call_id, call_number='', call_status='', message='', agent='', status_agent='', new_call_id='') {
            if($('#'+call_id).length) {
                // if(status_call != '') $('#'+call_id+' #status_call').text(status_call);
                if(call_number != '') $('#'+call_id+' #call_number').text(call_number);
                if(call_status != '') $('#'+call_id+' #call_status').text(call_status);
                if(message != '') $('#'+call_id+' #message').text(message);
                if(agent != '') $('#'+call_id+' #agent').text(agent);
                if(status_agent != '') $('#'+call_id+' #status_agent').text(status_agent);

                if(call_status == "success") $('#'+call_id).attr('id', new_call_id)
            } else {
                $('#table-pds tbody').append(`
                    <tr id="${call_id}">
                        <td>${call_id}</td>
                        <td id="call_number">${call_number}</td>
                        <td id="call_status">${call_status}</td>
                        <td id="message">${message}</td>
                        <td id="agent">${agent}</td>
                        <td id="status_agent">${status_agent}</td>
                    </tr>
                `)
            }
        }

        function pds_call_status(update) {
            if(update.placing.length && update.placing == 1) return "placing";
            if(update.placing.length && update.placing == 0 && update.ringing.length && update.ringing == 1) return "ringing";
            if(update.ringing.length && update.ringing == 0 && update.onqueue.length && update.onqueue == 1) return "queue";
            if(update.onqueue.length && update.onqueue == 0 && update.success.length) return "success";
            if(update.finished.length) return "finished";

            return '0';
        }

        // button.onclick = function() {
        //     console.log('Connection closed');
        //     evtSource.close();
        // };
    </script> -->
</body>
</html>

<?php die(); ?>