<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="refresh" content="5">
    <link rel="icon" href="../images/favicon.ico">

    <title>Chat Bot Admin - Dashboard  Box color </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">	
    <link rel="stylesheet" href="styleTable.css">
	<script src="Chart.bundle.js"></script>
	<script src="chartjs-gauge.js"></script>
    
	<style>
		.containerXXXXXXXX {
			position: relative;
			overflow: hidden;
			width: 100%;
			padding-top: 56.25%; /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
		  }
		  
		  /* Then style the iframe to fit in the container div with full height and width */
		  .responsive-iframeXXXXX {
			position: absolute;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
			width: 100%;
			height: 100%;
		  }
	</style>
    <style type="text/css">

        #containerxx {
             position:absolute;
             left:20px;
             top:50px;
             height:322px;
             width:100%;
             overflow:hidden;
           
            
         }
        #div1 {
             position:absolute;
             left:0;
             top:0;
             height:656px;
             width:85%;
         }
        #div2 {
             position:absolute;
             top:656px;
             left:0;
             height:656px;
             width:85%;
         }
         #div7 {
            position:absolute;
            left:0;
            top:0;
            height:656px;
            width:85%;
        }
       #div8 {
            position:absolute;
            top:656px;
            left:0;
            height:656px;
            width:85%;
        }
        
        </style>
        
        <script type="text/javascript">
        
          var scroll;
          var m=0;
          var n=656;    /* this value must be the same as that for #div1 and #div2 */
          var speed=40; /* this value controls scroll speed, larger values are slower */
        
        function scrollPics() {
             document.getElementById('div1').style.top=m+'px';
             document.getElementById('div2').style.top=n+'px';
             document.getElementById('div7').style.top=m+'px';
             document.getElementById('div8').style.top=n+'px';
           m--;
           n--;
        if(m==-656) {
           m=656;
         }
        if(n==-656) {
           n=656;
         }
        scroll=setTimeout('scrollPics()',speed);
         } 
        window.onload=function() {
           scrollPics();
        document.getElementById('container').onmouseover=function() {
           clearTimeout(scroll); 
          }
        document.getElementById('container').onmouseout=function() {
           scrollPics();
          }
         }
        
        </script>
</head>
<body class="hold-transition sidebar-collapse">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header" style="background-color: #00482f;">
	<div class="d-flex align-items-center logo-box pl-10">		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<!-- Logo Test -->
		<a href="index.html" class="logo">
		  <!-- logo-->
		  <div class="logo-lg">
			  <span class="light-logo"><img src="https://www.uidesk.id/wp-content/uploads/2022/07/Logo-Datakelola-2.png" alt="logo" width="360"></span>
			  <span class="dark-logo"><img src="https://www.uidesk.id/wp-content/uploads/2022/07/Logo-Datakelola-2.png" alt="logo" width="360"></span>
		  </div>
		</a>
	</div>  
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top pl-10">
      <!-- Sidebar toggle button-->
      <div class="app-menu">
        PDS EPIC <br>
              Demo BTPN  <a style="color: red;">EFS Collection</a>
        </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">	
			
			<li class="btn-group d-md-inline-flex d-none">
				<div class="app-menu">
					<div class="search-bx mx-5">
						
								<br>
								<a style="color: goldenrod;">12 Januari 2022 | Rabu | 13:38 WIB</a>
							
						</form>
					</div>
				</div>
			</li>
		 
          <!-- Control Sidebar Toggle Button 
          <li>
			<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link rounded full-screen" title="Full Screen">
				<img src="../images/svg-icon/fullscreen.svg" class="img-fluid svg-icon" alt="">
			</a>
          </li>-->
		  <!-- Control Sidebar Toggle Button -->
          <li>
			<a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light">
				<img src="../images/svg-icon/settings.svg" class="img-fluid svg-icon" alt="">
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
			<img src="../images/svg-icon/sidebar-menu/dashboard.svg" class="svg-icon" alt="">
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
            <img src="../images/svg-icon/sidebar-menu/mailbox.svg" class="svg-icon" alt="">
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
            <img src="../images/svg-icon/sidebar-menu/apps.svg" class="svg-icon" alt="">
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
            <img src="../images/svg-icon/sidebar-menu/uielements.svg" class="svg-icon" alt="">
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
            <img src="../images/svg-icon/sidebar-menu/advancedui.svg" class="svg-icon" alt="">
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
            <img src="../images/svg-icon/sidebar-menu/color.svg" class="svg-icon" alt="">
			<span>Color</span>
          </a>
        </li>        
		
		<li class="treeview">
          <a href="#">
            <img src="../images/svg-icon/sidebar-menu/icons.svg" class="svg-icon" alt="">
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
            <img src="../images/svg-icon/sidebar-menu/cards.svg" class="svg-icon" alt="">
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
            <img src="../images/svg-icon/sidebar-menu/extensions.svg" class="svg-icon" alt="">
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
            <img src="../images/svg-icon/sidebar-menu/forms1.svg" class="svg-icon" alt="">
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
            <img src="../images/svg-icon/tables.svg" class="svg-icon" alt="">
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
            <img src="../images/svg-icon/sidebar-menu/pages.svg" class="svg-icon" alt="">
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
            <img src="../images/svg-icon/sidebar-menu/authentication.svg" class="svg-icon" alt="">
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
            <img src="../images/svg-icon/sidebar-menu/miscellaneous.svg" class="svg-icon" alt="">
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
            <img src="../images/svg-icon/sidebar-menu/charts.svg" class="svg-icon" alt="">
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
            <img src="../images/svg-icon/sidebar-menu/maps.svg" class="svg-icon" alt="">
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
            <img src="../images/svg-icon/sidebar-menu/emails.svg" class="svg-icon" alt="">
			<span>Emails</span>
          </a>
        </li>  	   
		  
		<li class="treeview">
          <a href="#">
            <img src="../images/svg-icon/pages.svg" class="svg-icon" alt="">
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
            <img src="../images/svg-icon/sidebar-menu/multilevel.svg" class="svg-icon" alt="">
			<span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Level One</a></li>
            <li class="treeview">
              <a href="#">Level One
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#">Level Two</a></li>
                <li class="treeview">
                  <a href="#">Level Two
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
            <img src="../images/svg-icon/sidebar-menu/logout.svg" class="svg-icon" alt="">
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
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="w-p100 d-md-flex align-items-center justify-content-between">
				
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								
								<li class="breadcrumb-item" aria-current="page">
									<h3><a style="color: goldenrod;">Calls Per Agent</a></h3>
								</li>
								
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

			<div class="row">
              
                <div class="col-lg-6 col-6">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user">
                      <!-- Add the bg color to the header using any of the bg-* classes -->
                      <div class="widget-user-header bg-img" style="background: url('../images/photo1.png') center center;" data-overlay="5">
                        <h3 class="widget-user-username text-white">CTI Dialer Test</h3>
                        <h6 class="widget-user-desc text-white">Calls Average</h6><div class="badge badge-pill badge-success font-size-16" data-toggle="tooltip" data-placement="top" title="" data-original-title="3 more">10</div>
                      </div>
                      <div class="widget-user-image">
                        <img class="no-border" src="logo.png" alt="User Avatar">
                      </div>
                      <div class="box-footer">
                        <div class="row">
                            <div class="col-12">
                                
                                 <!-- /.box-header -->
                                 <div class="box-body no-padding">
                                    <div class="table-responsive">
                                        <table class="table">
                                        <tr>
                                            <td width="25%">Agents</td>
                                            <td width="25%">Status</td>
                                            <td width="25%">Talk With</td>
                                            <td width="25%">Duration</td>
                                            </tr>
                                          <?php
                                                 $servername = "localhost";
                                                $username = "u1495171_rnd";
                                                $password = "s8O*qJpw0EvF";
                                                $dbname = "u1495171_rnd";
                                                
                                                // Create connection
                                                $conn = new mysqli($servername, $username, $password, $dbname);
                                                // Check connection
                                                if ($conn->connect_error) {
                                                  die("Connection failed: " . $conn->connect_error);
                                                }
                                                
                                                $sql = "SELECT AgentName, StatusAgent, CustName,CallDuration FROM EFSDataAGentNew";
                                                $result = $conn->query($sql);
                                                
                                                if ($result->num_rows > 0) {
                                                  // output data of each row
                                                  while($row = $result->fetch_assoc()) {
                                                      echo'<tr>
                                                
                                                    <td width="25%">'. $row["AgentName"]. '</td>
                                                    <td width="25%"><span class="badge badge-pill badge-light">' . $row["StatusAgent"]. '</span></td>
                                                    <td width="25%">'. $row["CustName"]. '</td>
                                                    <td width="25%">'. $row["CallDuration"]. '</td>
                                                    </tr>';
                                                    //echo "id:  - Name:  " . $row["CustName"]. " " . $row["CallDuration"]. "<br>";
                                                  }
                                                } else {
                                                  echo "0 results";
                                                }
                                                $conn->close();
                                                ?>
                                            
                                        </table>
                                        
                                    </div>
                                </div>
                                <!-- /.box-body -->
                             
                              <!-- /.box -->
                            </div>
                        </div>
                        <!-- /.row -->
                      </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <div class="col-lg-6 col-6">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user">
                      <!-- Add the bg color to the header using any of the bg-* classes -->
                      <div class="widget-user-header bg-img" style="background: url('../images/photo1.png') center center;" data-overlay="5">
                        <h3 class="widget-user-username text-white">CTI Dialer Assignment Test</h3>
                        <h6 class="widget-user-desc text-white">Calls Average</h6><div class="badge badge-pill badge-success font-size-16" data-toggle="tooltip" data-placement="top" title="" data-original-title="3 more">10</div>
                      </div>
                      <div class="widget-user-image">
                        <img class="no-border" src="logo.png" alt="User Avatar">
                      </div>
                      <div class="box-footer">
                        <div class="row">
                            <div class="col-12">
                                
                                 <!-- /.box-header -->
                                 <div class="box-body no-padding">
                                    <div class="table-responsive">
                                        <table class="table">
                                        <tr>
                                           <td width="25%">Agents</td>
                                            <td width="25%">Status</td>
                                            <td width="25%">Talk With</td>
                                            <td width="25%">Duration</td>
                                            
                                            </tr>
                                            <?php
                                                 $servername = "localhost";
                                                $username = "u1495171_rnd";
                                                $password = "s8O*qJpw0EvF";
                                                $dbname = "u1495171_rnd";
                                                
                                                // Create connection
                                                $conn = new mysqli($servername, $username, $password, $dbname);
                                                // Check connection
                                                if ($conn->connect_error) {
                                                  die("Connection failed: " . $conn->connect_error);
                                                }
                                                
                                                $sql = "SELECT AgentName, StatusAgent, CustName,CallDuration FROM EFSDataAGentNew";
                                                $result = $conn->query($sql);
                                                
                                                if ($result->num_rows > 0) {
                                                  // output data of each row
                                                  while($row = $result->fetch_assoc()) {
                                                      echo'<tr>
                                                
                                                    <td width="25%">'. $row["AgentName"]. '</td>
                                                    <td width="25%"><span class="badge badge-pill badge-light">' . $row["StatusAgent"]. '</span></td>
                                                    <td width="25%">'. $row["CustName"]. '</td>
                                                    <td width="25%">'. $row["CallDuration"]. '</td>
                                                    </tr>';
                                                    //echo "id:  - Name:  " . $row["CustName"]. " " . $row["CallDuration"]. "<br>";
                                                  }
                                                } else {
                                                  echo "0 results";
                                                }
                                                $conn->close();
                                                ?>
                                            
                                        </table>
                                        
                                    </div>
                                </div>
                                <!-- /.box-body -->
                             
                              <!-- /.box -->
                            </div>
                        </div>
                        <!-- /.row -->
                      </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                
			</div>
			
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
 
   <footer class="main-footer">
   
	  &copy; 2023 <a href="#">Uidesk Themes</a>. All Rights Reserved.
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar">
	  
	<div class="rpanel-title">
		<span class="pull-right btn btn-circle p-10">
			<img src="../images/svg-icon/close.svg" data-toggle="control-sidebar" class="img-fluid svg-icon" alt="">
		</span> 
	</div>  <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab"><img src="../images/svg-icon/apps.svg" class="img-fluid svg-icon" alt=""></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><img src="../images/svg-icon/advanced.svg" class="img-fluid svg-icon" alt=""></a></li>
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
				<img src="../images/avatar/1.jpg" alt="...">
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
				<img src="../images/avatar/2.jpg" alt="...">
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
				<img src="../images/avatar/3.jpg" alt="...">
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
				<img src="../images/avatar/4.jpg" alt="...">
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
				<img src="../images/avatar/1.jpg" alt="...">
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
				<img src="../images/avatar/2.jpg" alt="...">
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
				<img src="../images/avatar/3.jpg" alt="...">
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
				<img src="../images/avatar/4.jpg" alt="...">
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
	
	
	<!-- Vendor JS -->
	<script  src="scriptTable.js"></script>
	
</body>
</html>
