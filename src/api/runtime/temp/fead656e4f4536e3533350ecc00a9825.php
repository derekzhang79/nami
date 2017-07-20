<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"D:\wamp64\www\nami\src\api\public/../application/admin\view\personal\index.html";i:1499299569;s:78:"D:\wamp64\www\nami\src\api\public/../application/admin\view\public\header.html";i:1499313462;s:78:"D:\wamp64\www\nami\src\api\public/../application/admin\view\public\footer.html";i:1499477121;}*/ ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"><!--<![endif]--><!-- BEGIN HEAD --><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>纳米商城后台管理系统</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="Preview page of Metronic Admin Theme #1 for bootstrap inputs, input groups, custom checkboxes and radio controls and more" name="description">
        <meta content="" name="author">
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="__PUBLIC__/static/admin/css.css" rel="stylesheet" type="text/css">
        <link href="__PUBLIC__/static/library/fontasome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="__PUBLIC__/static/admin/simple-line-icons.css" rel="stylesheet" type="text/css">
        <link href="__PUBLIC__/static/admin/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="__PUBLIC__/static/admin/bootstrap-switch.css" rel="stylesheet" type="text/css">
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->

        <link href="__PUBLIC__/static/admin/components.css" rel="stylesheet" id="style_components" type="text/css">
        <link href="__PUBLIC__/static/admin/plugins.css" rel="stylesheet" type="text/css">
        
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
   

        <link href="__PUBLIC__/static/admin/theme2/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="__PUBLIC__/static/admin/theme2/blue.min.css" rel="stylesheet" type="text/css" id="style_color" />


        <script src="__PUBLIC__/static/admin/jquery_002.js" type="text/javascript"></script>


        
        <!-- END THEME LAYOUT STYLES -->
       <style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */
.en-markup-crop-options {
    top: 18px !important;
    left: 50% !important;
    margin-left: -100px !important;
    width: 200px !important;
    border: 2px rgba(255,255,255,.38) solid !important;
    border-radius: 4px !important;
}

.en-markup-crop-options div div:first-of-type {
    margin-left: 0px !important;
}
</style></head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid" cz-shortcut-listen="true">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
               <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.html">
                        <img src="__PUBLIC__/static/admin/logo-default.png" alt="logo" class="logo-default"> </a>
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
                <div class="page-actions">
                    <div class="btn-group">
                        <button type="button" class="btn btn-circle btn-outline red dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-plus"></i>&nbsp;
                            <span class="hidden-sm hidden-xs">New&nbsp;</span>&nbsp;
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-docs"></i> New Post </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-tag"></i> New Comment </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-share"></i> Share </a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-flag"></i> Comments
                                    <span class="badge badge-success">4</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-users"></i> Feedbacks
                                    <span class="badge badge-danger">2</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END PAGE ACTIONS -->
                <!-- BEGIN PAGE TOP -->
                <div class="page-top">
                    <!-- BEGIN HEADER SEARCH BOX -->
                    <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
                    <form class="search-form search-form-expanded" action="page_general_search_3.html" method="GET">
                        <div class="input-group">
                            <input class="form-control" placeholder="Search..." name="query" type="text">
                            <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
                        </div>
                    </form>
                    <!-- END HEADER SEARCH BOX -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class below "dropdown-extended" to change the dropdown styte -->
                            <!-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                            <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                            <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-bell"></i>
                                    <span class="badge badge-default"> 7 </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3>
                                            <span class="bold">12 pending</span> notifications</h3>
                                        <a href="page_user_profile_1.html">view all</a>
                                    </li>
                                    <li>
                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><ul class="dropdown-menu-list scroller" style="height: 250px; overflow: hidden; width: auto;" data-handle-color="#637283" data-initialized="1">
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">just now</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-success">
                                                            <i class="fa fa-plus"></i>
                                                        </span> New user registered. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">3 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Server #12 overloaded. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">10 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span> Server #2 not responding. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">14 hrs</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span> Application error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">2 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Database overloaded 68%. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">3 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> A user IP blocked. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">4 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span> Storage Server #4 not responding dfdfdfd. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">5 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span> System Error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">9 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Storage server failed. </span>
                                                </a>
                                            </li>
                                        </ul><div class="slimScrollBar" style="background: rgb(99, 114, 131) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                    </li>
                                </ul>
                            </li>
                            <!-- END NOTIFICATION DROPDOWN -->
                            <!-- BEGIN INBOX DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            
                            <!-- END INBOX DROPDOWN -->
                            <!-- BEGIN TODO DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            
                            <!-- END TODO DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="__PUBLIC__/static/admin/avatar3_small.jpg">
                                    <span class="username username-hide-on-mobile">管理员</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="page_user_profile_1.html">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href="app_calendar.html">
                                            <i class="icon-calendar"></i> My Calendar </a>
                                    </li>
                                    <li>
                                        <a href="app_inbox.html">
                                            <i class="icon-envelope-open"></i> My Inbox
                                            <span class="badge badge-danger"> 3 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="app_todo_2.html">
                                            <i class="icon-rocket"></i> My Tasks
                                            <span class="badge badge-success"> 7 </span>
                                        </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="page_user_lock_1.html">
                                            <i class="icon-lock"></i> Lock Screen </a>
                                    </li>
                                    <li>
                                        <a href="page_user_login_1.html">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-extended quick-sidebar-toggler">
                                <span class="sr-only">Toggle Quick Sidebar</span>
                                <i class="icon-logout"></i>
                            </li>
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
                <div class="page-sidebar-wrapper">
                 
                    <div class="page-sidebar navbar-collapse collapse">
                       
                     <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item start ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start ">
                                    <a href="index.html" class="nav-link ">
                                        <i class="icon-bar-chart"></i>
                                        <span class="title">Dashboard 1</span>
                                    </a>
                                </li>
                                <li class="nav-item start ">
                                    <a href="dashboard_2.html" class="nav-link ">
                                        <i class="icon-bulb"></i>
                                        <span class="title">Dashboard 2</span>
                                        <span class="badge badge-success">1</span>
                                    </a>
                                </li>
                                <li class="nav-item start ">
                                    <a href="dashboard_3.html" class="nav-link ">
                                        <i class="icon-graph"></i>
                                        <span class="title">Dashboard 3</span>
                                        <span class="badge badge-danger">5</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  active open">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">UI Features</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  active open">
                                    <a href="ui_metronic_grid.html" class="nav-link ">
                                        <span class="title">Metronic Grid System</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_colors.html" class="nav-link ">
                                        <span class="title">Color Library</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_general.html" class="nav-link ">
                                        <span class="title">General Components</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_buttons.html" class="nav-link ">
                                        <span class="title">Buttons</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_buttons_spinner.html" class="nav-link ">
                                        <span class="title">Spinner Buttons</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_confirmations.html" class="nav-link ">
                                        <span class="title">Popover Confirmations</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_sweetalert.html" class="nav-link ">
                                        <span class="title">Bootstrap Sweet Alerts</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_icons.html" class="nav-link ">
                                        <span class="title">Font Icons</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_socicons.html" class="nav-link ">
                                        <span class="title">Social Icons</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_typography.html" class="nav-link ">
                                        <span class="title">Typography</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_tabs_accordions_navs.html" class="nav-link ">
                                        <span class="title">Tabs, Accordions &amp; Navs</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_timeline.html" class="nav-link ">
                                        <span class="title">Timeline 1</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_timeline_2.html" class="nav-link ">
                                        <span class="title">Timeline 2</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_timeline_horizontal.html" class="nav-link ">
                                        <span class="title">Horizontal Timeline</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_tree.html" class="nav-link ">
                                        <span class="title">Tree View</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <span class="title">Page Progress Bar</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item ">
                                            <a href="ui_page_progress_style_1.html" class="nav-link "> Flash </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="ui_page_progress_style_2.html" class="nav-link "> Big Counter </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_blockui.html" class="nav-link ">
                                        <span class="title">Block UI</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_bootstrap_growl.html" class="nav-link ">
                                        <span class="title">Bootstrap Growl Notifications</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_notific8.html" class="nav-link ">
                                        <span class="title">Notific8 Notifications</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_toastr.html" class="nav-link ">
                                        <span class="title">Toastr Notifications</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_bootbox.html" class="nav-link ">
                                        <span class="title">Bootbox Dialogs</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_alerts_api.html" class="nav-link ">
                                        <span class="title">Metronic Alerts API</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_session_timeout.html" class="nav-link ">
                                        <span class="title">Session Timeout</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_idle_timeout.html" class="nav-link ">
                                        <span class="title">User Idle Timeout</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_modals.html" class="nav-link ">
                                        <span class="title">Modals</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_extended_modals.html" class="nav-link ">
                                        <span class="title">Extended Modals</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_tiles.html" class="nav-link ">
                                        <span class="title">Tiles</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_datepaginator.html" class="nav-link ">
                                        <span class="title">Date Paginator</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_nestable.html" class="nav-link ">
                                        <span class="title">Nestable List</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-puzzle"></i>
                                <span class="title">Components</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="components_date_time_pickers.html" class="nav-link ">
                                        <span class="title">Date &amp; Time Pickers</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_color_pickers.html" class="nav-link ">
                                        <span class="title">Color Pickers</span>
                                        <span class="badge badge-danger">2</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_select2.html" class="nav-link ">
                                        <span class="title">Select2 Dropdowns</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_bootstrap_select.html" class="nav-link ">
                                        <span class="title">Bootstrap Select</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_multi_select.html" class="nav-link ">
                                        <span class="title">Bootstrap Multiple Select</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_bootstrap_multiselect_dropdown.html" class="nav-link ">
                                        <span class="title">Bootstrap Multiselect Dropdowns</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_bootstrap_select_splitter.html" class="nav-link ">
                                        <span class="title">Select Splitter</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_clipboard.html" class="nav-link ">
                                        <span class="title">Clipboard</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_typeahead.html" class="nav-link ">
                                        <span class="title">Typeahead Autocomplete</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_bootstrap_tagsinput.html" class="nav-link ">
                                        <span class="title">Bootstrap Tagsinput</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_bootstrap_switch.html" class="nav-link ">
                                        <span class="title">Bootstrap Switch</span>
                                        <span class="badge badge-success">6</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_bootstrap_maxlength.html" class="nav-link ">
                                        <span class="title">Bootstrap Maxlength</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_bootstrap_fileinput.html" class="nav-link ">
                                        <span class="title">Bootstrap File Input</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_bootstrap_touchspin.html" class="nav-link ">
                                        <span class="title">Bootstrap Touchspin</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_form_tools.html" class="nav-link ">
                                        <span class="title">Form Widgets &amp; Tools</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_context_menu.html" class="nav-link ">
                                        <span class="title">Context Menu</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_editors.html" class="nav-link ">
                                        <span class="title">Markdown &amp; WYSIWYG Editors</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_code_editors.html" class="nav-link ">
                                        <span class="title">Code Editors</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_ion_sliders.html" class="nav-link ">
                                        <span class="title">Ion Range Sliders</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_noui_sliders.html" class="nav-link ">
                                        <span class="title">NoUI Range Sliders</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_knob_dials.html" class="nav-link ">
                                        <span class="title">Knob Circle Dials</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">Form Stuff</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="form_controls.html" class="nav-link ">
                                        <span class="title">Bootstrap Form
                                            <br>Controls</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_controls_md.html" class="nav-link ">
                                        <span class="title">Material Design
                                            <br>Form Controls</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_validation.html" class="nav-link ">
                                        <span class="title">Form Validation</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_validation_states_md.html" class="nav-link ">
                                        <span class="title">Material Design
                                            <br>Form Validation States</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_validation_md.html" class="nav-link ">
                                        <span class="title">Material Design
                                            <br>Form Validation</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_layouts.html" class="nav-link ">
                                        <span class="title">Form Layouts</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_repeater.html" class="nav-link ">
                                        <span class="title">Form Repeater</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_input_mask.html" class="nav-link ">
                                        <span class="title">Form Input Mask</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_editable.html" class="nav-link ">
                                        <span class="title">Form X-editable</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_wizard.html" class="nav-link ">
                                        <span class="title">Form Wizard</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_icheck.html" class="nav-link ">
                                        <span class="title">iCheck Controls</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_image_crop.html" class="nav-link ">
                                        <span class="title">Image Cropping</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_fileupload.html" class="nav-link ">
                                        <span class="title">Multiple File Upload</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_dropzone.html" class="nav-link ">
                                        <span class="title">Dropzone File Upload</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-bulb"></i>
                                <span class="title">Elements</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="elements_steps.html" class="nav-link ">
                                        <span class="title">Steps</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="elements_lists.html" class="nav-link ">
                                        <span class="title">Lists</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="elements_ribbons.html" class="nav-link ">
                                        <span class="title">Ribbons</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="elements_overlay.html" class="nav-link ">
                                        <span class="title">Overlays</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="elements_cards.html" class="nav-link ">
                                        <span class="title">User Cards</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-briefcase"></i>
                                <span class="title">Tables</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="table_static_basic.html" class="nav-link ">
                                        <span class="title">Basic Tables</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="table_static_responsive.html" class="nav-link ">
                                        <span class="title">Responsive Tables</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="table_bootstrap.html" class="nav-link ">
                                        <span class="title">Bootstrap Tables</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <span class="title">Datatables</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item ">
                                            <a href="table_datatables_managed.html" class="nav-link "> Managed Datatables </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="table_datatables_buttons.html" class="nav-link "> Buttons Extension </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="table_datatables_colreorder.html" class="nav-link "> Colreorder Extension </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="table_datatables_rowreorder.html" class="nav-link "> Rowreorder Extension </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="table_datatables_scroller.html" class="nav-link "> Scroller Extension </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="table_datatables_fixedheader.html" class="nav-link "> FixedHeader Extension </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="table_datatables_responsive.html" class="nav-link "> Responsive Extension </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="table_datatables_editable.html" class="nav-link "> Editable Datatables </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="table_datatables_ajax.html" class="nav-link "> Ajax Datatables </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="?p=" class="nav-link nav-toggle">
                                <i class="icon-wallet"></i>
                                <span class="title">Portlets</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="portlet_boxed.html" class="nav-link ">
                                        <span class="title">Boxed Portlets</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="portlet_light.html" class="nav-link ">
                                        <span class="title">Light Portlets</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="portlet_solid.html" class="nav-link ">
                                        <span class="title">Solid Portlets</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="portlet_ajax.html" class="nav-link ">
                                        <span class="title">Ajax Portlets</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="portlet_draggable.html" class="nav-link ">
                                        <span class="title">Draggable Portlets</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-bar-chart"></i>
                                <span class="title">Charts</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="charts_amcharts.html" class="nav-link ">
                                        <span class="title">amChart</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="charts_flotcharts.html" class="nav-link ">
                                        <span class="title">Flot Charts</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="charts_flowchart.html" class="nav-link ">
                                        <span class="title">Flow Charts</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="charts_google.html" class="nav-link ">
                                        <span class="title">Google Charts</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="charts_echarts.html" class="nav-link ">
                                        <span class="title">eCharts</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="charts_morris.html" class="nav-link ">
                                        <span class="title">Morris Charts</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <span class="title">HighCharts</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item ">
                                            <a href="charts_highcharts.html" class="nav-link "> HighCharts </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="charts_highstock.html" class="nav-link "> HighStock </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="charts_highmaps.html" class="nav-link "> HighMaps </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-pointer"></i>
                                <span class="title">Maps</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="maps_google.html" class="nav-link ">
                                        <span class="title">Google Maps</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="maps_vector.html" class="nav-link ">
                                        <span class="title">Vector Maps</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-layers"></i>
                                <span class="title">Page Layouts</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="layout_blank_page.html" class="nav-link ">
                                        <span class="title">Blank Page</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_language_bar.html" class="nav-link ">
                                        <span class="title">Header Language Bar</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_footer_fixed.html" class="nav-link ">
                                        <span class="title">Fixed Footer</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_boxed_page.html" class="nav-link ">
                                        <span class="title">Boxed Page</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-feed"></i>
                                <span class="title">Sidebar Layouts</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="layout_sidebar_menu_accordion.html" class="nav-link ">
                                        <span class="title">Sidebar Accordion Menu</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_sidebar_menu_compact.html" class="nav-link ">
                                        <span class="title">Sidebar Compact Menu</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_sidebar_reversed.html" class="nav-link ">
                                        <span class="title">Reversed Sidebar Page</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_sidebar_fixed.html" class="nav-link ">
                                        <span class="title">Fixed Sidebar Layout</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_sidebar_closed.html" class="nav-link ">
                                        <span class="title">Closed Sidebar Layout</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class=" icon-wrench"></i>
                                <span class="title">Custom Layouts</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="layout_disabled_menu.html" class="nav-link ">
                                        <span class="title">Disabled Menu Links</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_full_height_portlet.html" class="nav-link ">
                                        <span class="title">Full Height Portlet</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_full_height_content.html" class="nav-link ">
                                        <span class="title">Full Height Content</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-basket"></i>
                                <span class="title">eCommerce</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="ecommerce_index.html" class="nav-link ">
                                        <i class="icon-home"></i>
                                        <span class="title">Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ecommerce_orders.html" class="nav-link ">
                                        <i class="icon-basket"></i>
                                        <span class="title">Orders</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ecommerce_orders_view.html" class="nav-link ">
                                        <i class="icon-tag"></i>
                                        <span class="title">Order View</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ecommerce_products.html" class="nav-link ">
                                        <i class="icon-graph"></i>
                                        <span class="title">Products</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ecommerce_products_edit.html" class="nav-link ">
                                        <i class="icon-graph"></i>
                                        <span class="title">Product Edit</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-docs"></i>
                                <span class="title">Apps</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="app_todo.html" class="nav-link ">
                                        <i class="icon-clock"></i>
                                        <span class="title">Todo 1</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="app_todo_2.html" class="nav-link ">
                                        <i class="icon-check"></i>
                                        <span class="title">Todo 2</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="app_inbox.html" class="nav-link ">
                                        <i class="icon-envelope"></i>
                                        <span class="title">Inbox</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="app_calendar.html" class="nav-link ">
                                        <i class="icon-calendar"></i>
                                        <span class="title">Calendar</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="app_ticket.html" class="nav-link ">
                                        <i class="icon-notebook"></i>
                                        <span class="title">Support</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-user"></i>
                                <span class="title">User</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="page_user_profile_1.html" class="nav-link ">
                                        <i class="icon-user"></i>
                                        <span class="title">Profile 1</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_user_profile_1_account.html" class="nav-link ">
                                        <i class="icon-user-female"></i>
                                        <span class="title">Profile 1 Account</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_user_profile_1_help.html" class="nav-link ">
                                        <i class="icon-user-following"></i>
                                        <span class="title">Profile 1 Help</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_user_profile_2.html" class="nav-link ">
                                        <i class="icon-users"></i>
                                        <span class="title">Profile 2</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="icon-notebook"></i>
                                        <span class="title">Login</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item ">
                                            <a href="page_user_login_1.html" class="nav-link " target="_blank"> Login Page 1 </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="page_user_login_2.html" class="nav-link " target="_blank"> Login Page 2 </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="page_user_login_3.html" class="nav-link " target="_blank"> Login Page 3 </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="page_user_login_4.html" class="nav-link " target="_blank"> Login Page 4 </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="page_user_login_5.html" class="nav-link " target="_blank"> Login Page 5 </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="page_user_login_6.html" class="nav-link " target="_blank"> Login Page 6 </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_user_lock_1.html" class="nav-link " target="_blank">
                                        <i class="icon-lock"></i>
                                        <span class="title">Lock Screen 1</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_user_lock_2.html" class="nav-link " target="_blank">
                                        <i class="icon-lock-open"></i>
                                        <span class="title">Lock Screen 2</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-social-dribbble"></i>
                                <span class="title">General</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="page_general_about.html" class="nav-link ">
                                        <i class="icon-info"></i>
                                        <span class="title">About</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_general_contact.html" class="nav-link ">
                                        <i class="icon-call-end"></i>
                                        <span class="title">Contact</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="icon-notebook"></i>
                                        <span class="title">Portfolio</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item ">
                                            <a href="page_general_portfolio_1.html" class="nav-link "> Portfolio 1 </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="page_general_portfolio_2.html" class="nav-link "> Portfolio 2 </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="page_general_portfolio_3.html" class="nav-link "> Portfolio 3 </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="page_general_portfolio_4.html" class="nav-link "> Portfolio 4 </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item  ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="icon-magnifier"></i>
                                        <span class="title">Search</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item ">
                                            <a href="page_general_search.html" class="nav-link "> Search 1 </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="page_general_search_2.html" class="nav-link "> Search 2 </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="page_general_search_3.html" class="nav-link "> Search 3 </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="page_general_search_4.html" class="nav-link "> Search 4 </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="page_general_search_5.html" class="nav-link "> Search 5 </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_general_pricing.html" class="nav-link ">
                                        <i class="icon-tag"></i>
                                        <span class="title">Pricing</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_general_pricing_2.html" class="nav-link ">
                                        <i class="icon-tag"></i>
                                        <span class="title">Pricing 2</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_general_faq.html" class="nav-link ">
                                        <i class="icon-wrench"></i>
                                        <span class="title">FAQ</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_general_blog.html" class="nav-link ">
                                        <i class="icon-pencil"></i>
                                        <span class="title">Blog</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_general_blog_post.html" class="nav-link ">
                                        <i class="icon-note"></i>
                                        <span class="title">Blog Post</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_general_invoice.html" class="nav-link ">
                                        <i class="icon-envelope"></i>
                                        <span class="title">Invoice</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_general_invoice_2.html" class="nav-link ">
                                        <i class="icon-envelope"></i>
                                        <span class="title">Invoice 2</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">System</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="page_cookie_consent_1.html" class="nav-link ">
                                        <span class="title">Cookie Consent 1</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_cookie_consent_2.html" class="nav-link ">
                                        <span class="title">Cookie Consent 2</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_system_coming_soon.html" class="nav-link " target="_blank">
                                        <span class="title">Coming Soon</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_system_404_1.html" class="nav-link ">
                                        <span class="title">404 Page 1</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_system_404_2.html" class="nav-link " target="_blank">
                                        <span class="title">404 Page 2</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_system_404_3.html" class="nav-link " target="_blank">
                                        <span class="title">404 Page 3</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_system_500_1.html" class="nav-link ">
                                        <span class="title">500 Page 1</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_system_500_2.html" class="nav-link " target="_blank">
                                        <span class="title">500 Page 2</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-folder"></i>
                                <span class="title">Multi Level Menu</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="icon-settings"></i> Item 1
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="?p=dashboard-2" target="_blank" class="nav-link">
                                                <i class="icon-user"></i> Arrow Toggle
                                                <span class="arrow nav-toggle"></span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="icon-power"></i> Sample Link 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="icon-paper-plane"></i> Sample Link 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="icon-star"></i> Sample Link 1</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="icon-camera"></i> Sample Link 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="icon-link"></i> Sample Link 2</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="icon-pointer"></i> Sample Link 3</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="?p=dashboard-2" target="_blank" class="nav-link">
                                        <i class="icon-globe"></i> Arrow Toggle
                                        <span class="arrow nav-toggle"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="icon-tag"></i> Sample Link 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="icon-pencil"></i> Sample Link 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="icon-graph"></i> Sample Link 1</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="icon-bar-chart"></i> Item 3 </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content" style="min-height: 1021px;">
                        <!-- BEGIN PAGE HEADER-->
                 
<h1 class="page-title"> 纳米后台管理系统
                            <small>商品管理、订单管理</small>
                        </h1>
 <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="dashboard-stat2 ">
                                    <div class="display">
                                        <div class="number">
                                            <h3 class="font-green-sharp">
                                                <span data-counter="counterup" data-value="7800">7800</span>
                                                <small class="font-green-sharp">$</small>
                                            </h3>
                                            <small>TOTAL PROFIT</small>
                                        </div>
                                        <div class="icon">
                                            <i class="icon-pie-chart"></i>
                                        </div>
                                    </div>
                                    <div class="progress-info">
                                        <div class="progress">
                                            <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                                <span class="sr-only">76% progress</span>
                                            </span>
                                        </div>
                                        <div class="status">
                                            <div class="status-title"> progress </div>
                                            <div class="status-number"> 76% </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="dashboard-stat2 ">
                                    <div class="display">
                                        <div class="number">
                                            <h3 class="font-red-haze">
                                                <span data-counter="counterup" data-value="1349">1349</span>
                                            </h3>
                                            <small>NEW FEEDBACKS</small>
                                        </div>
                                        <div class="icon">
                                            <i class="icon-like"></i>
                                        </div>
                                    </div>
                                    <div class="progress-info">
                                        <div class="progress">
                                            <span style="width: 85%;" class="progress-bar progress-bar-success red-haze">
                                                <span class="sr-only">85% change</span>
                                            </span>
                                        </div>
                                        <div class="status">
                                            <div class="status-title"> change </div>
                                            <div class="status-number"> 85% </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="dashboard-stat2 ">
                                    <div class="display">
                                        <div class="number">
                                            <h3 class="font-blue-sharp">
                                                <span data-counter="counterup" data-value="567">567</span>
                                            </h3>
                                            <small>NEW ORDERS</small>
                                        </div>
                                        <div class="icon">
                                            <i class="icon-basket"></i>
                                        </div>
                                    </div>
                                    <div class="progress-info">
                                        <div class="progress">
                                            <span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
                                                <span class="sr-only">45% grow</span>
                                            </span>
                                        </div>
                                        <div class="status">
                                            <div class="status-title"> grow </div>
                                            <div class="status-number"> 45% </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="dashboard-stat2 ">
                                    <div class="display">
                                        <div class="number">
                                            <h3 class="font-purple-soft">
                                                <span data-counter="counterup" data-value="276">276</span>
                                            </h3>
                                            <small>NEW USERS</small>
                                        </div>
                                        <div class="icon">
                                            <i class="icon-user"></i>
                                        </div>
                                    </div>
                                    <div class="progress-info">
                                        <div class="progress">
                                            <span style="width: 57%;" class="progress-bar progress-bar-success purple-soft">
                                                <span class="sr-only">56% change</span>
                                            </span>
                                        </div>
                                        <div class="status">
                                            <div class="status-title"> change </div>
                                            <div class="status-number"> 57% </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-xs-12 col-sm-12">
                                <div class="portlet light ">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <span class="caption-subject bold uppercase font-dark">Revenue</span>
                                            <span class="caption-helper">distance stats...</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default" href="#">
                                                <i class="icon-cloud-upload"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="#">
                                                <i class="icon-wrench"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="#">
                                                <i class="icon-trash"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#" data-original-title="" title=""> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div id="dashboard_amchart_1" class="CSSAnimationChart" style="overflow: hidden; text-align: left;"><div class="amcharts-main-div" style="position: relative;"><div class="amcharts-chart-div" style="overflow: hidden; position: relative; text-align: left; width: 482px; height: 393px; padding: 0px; cursor: default;"><svg version="1.1" style="position: absolute; width: 482px; height: 393px; top: 0px; left: 0px;"><desc>JavaScript chart by amCharts 3.17.1</desc><g><path cs="100,100" d="M0.5,0.5 L481.5,0.5 L481.5,392.5 L0.5,392.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0" class="amcharts-bg"></path><path cs="100,100" d="M0.5,0.5 L367.5,0.5 L367.5,340.5 L0.5,340.5 L0.5,0.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0" class="amcharts-plot-area" transform="translate(74,20)"></path></g><g><g class="amcharts-category-axis" transform="translate(74,20)"><g><path cs="100,100" d="M0.5,0.5 L0.5,5.5" fill="none" stroke-width="1" stroke-opacity="1" stroke="#555555" transform="translate(0,340)" class="amcharts-axis-tick"></path><path cs="100,100" d="M0.5,340.5 L0.5,340.5 L0.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M33.5,0.5 L33.5,5.5" fill="none" stroke-width="1" stroke-opacity="1" stroke="#555555" transform="translate(0,340)" class="amcharts-axis-tick"></path><path cs="100,100" d="M33.5,340.5 L33.5,340.5 L33.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M67.5,0.5 L67.5,5.5" fill="none" stroke-width="1" stroke-opacity="1" stroke="#555555" transform="translate(0,340)" class="amcharts-axis-tick"></path><path cs="100,100" d="M67.5,340.5 L67.5,340.5 L67.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M100.5,0.5 L100.5,5.5" fill="none" stroke-width="1" stroke-opacity="1" stroke="#555555" transform="translate(0,340)" class="amcharts-axis-tick"></path><path cs="100,100" d="M100.5,340.5 L100.5,340.5 L100.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M133.5,0.5 L133.5,5.5" fill="none" stroke-width="1" stroke-opacity="1" stroke="#555555" transform="translate(0,340)" class="amcharts-axis-tick"></path><path cs="100,100" d="M133.5,340.5 L133.5,340.5 L133.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M167.5,0.5 L167.5,5.5" fill="none" stroke-width="1" stroke-opacity="1" stroke="#555555" transform="translate(0,340)" class="amcharts-axis-tick"></path><path cs="100,100" d="M167.5,340.5 L167.5,340.5 L167.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M200.5,0.5 L200.5,5.5" fill="none" stroke-width="1" stroke-opacity="1" stroke="#555555" transform="translate(0,340)" class="amcharts-axis-tick"></path><path cs="100,100" d="M200.5,340.5 L200.5,340.5 L200.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M234.5,0.5 L234.5,5.5" fill="none" stroke-width="1" stroke-opacity="1" stroke="#555555" transform="translate(0,340)" class="amcharts-axis-tick"></path><path cs="100,100" d="M234.5,340.5 L234.5,340.5 L234.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M267.5,0.5 L267.5,5.5" fill="none" stroke-width="1" stroke-opacity="1" stroke="#555555" transform="translate(0,340)" class="amcharts-axis-tick"></path><path cs="100,100" d="M267.5,340.5 L267.5,340.5 L267.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M300.5,0.5 L300.5,5.5" fill="none" stroke-width="1" stroke-opacity="1" stroke="#555555" transform="translate(0,340)" class="amcharts-axis-tick"></path><path cs="100,100" d="M300.5,340.5 L300.5,340.5 L300.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M334.5,0.5 L334.5,5.5" fill="none" stroke-width="1" stroke-opacity="1" stroke="#555555" transform="translate(0,340)" class="amcharts-axis-tick"></path><path cs="100,100" d="M334.5,340.5 L334.5,340.5 L334.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M367.5,0.5 L367.5,5.5" fill="none" stroke-width="1" stroke-opacity="1" stroke="#555555" transform="translate(0,340)" class="amcharts-axis-tick"></path><path cs="100,100" d="M367.5,340.5 L367.5,340.5 L367.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g></g><g class="amcharts-value-axis value-axis-a1" transform="translate(74,20)" visibility="visible"></g><g class="amcharts-value-axis value-axis-a2" transform="translate(74,20)" visibility="visible"></g><g class="amcharts-value-axis value-axis-a3" transform="translate(74,20)" visibility="visible"></g></g><g></g><g></g><g></g><g><g transform="translate(74,20)"><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(4,340)" visibility="visible"><path cs="100,100" d="M0.5,0.5 L0.5,-211.5 L27.5,-211.5 L27.5,0.5 L0.5,0.5 Z" fill="#08a3cc" stroke="#08a3cc" fill-opacity="0.7" stroke-width="1" stroke-opacity="1" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(37,340)" visibility="visible"><path cs="100,100" d="M0.5,0.5 L0.5,-140.5 L27.5,-140.5 L27.5,0.5 L0.5,0.5 Z" fill="#08a3cc" stroke="#08a3cc" fill-opacity="0.7" stroke-width="1" stroke-opacity="1" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(70,340)" visibility="visible"><path cs="100,100" d="M0.5,0.5 L0.5,-111.5 L27.5,-111.5 L27.5,0.5 L0.5,0.5 Z" fill="#08a3cc" stroke="#08a3cc" fill-opacity="0.7" stroke-width="1" stroke-opacity="1" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(104,340)" visibility="visible"><path cs="100,100" d="M0.5,0.5 L0.5,-28.5 L27.5,-28.5 L27.5,0.5 L0.5,0.5 Z" fill="#08a3cc" stroke="#08a3cc" fill-opacity="0.7" stroke-width="1" stroke-opacity="1" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(137,340)" visibility="visible"><path cs="100,100" d="M0.5,0.5 L0.5,-13.5 L27.5,-13.5 L27.5,0.5 L0.5,0.5 Z" fill="#08a3cc" stroke="#08a3cc" fill-opacity="0.7" stroke-width="1" stroke-opacity="1" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(171,340)" visibility="visible"><path cs="100,100" d="M0.5,0.5 L0.5,-112.5 L27.5,-112.5 L27.5,0.5 L0.5,0.5 Z" fill="#08a3cc" stroke="#08a3cc" fill-opacity="0.7" stroke-width="1" stroke-opacity="1" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(204,340)" visibility="visible"><path cs="100,100" d="M0.5,0.5 L0.5,-303.5 L27.5,-303.5 L27.5,0.5 L0.5,0.5 Z" fill="#08a3cc" stroke="#08a3cc" fill-opacity="0.7" stroke-width="1" stroke-opacity="1" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(237,340)" visibility="visible"><path cs="100,100" d="M0.5,0.5 L0.5,-251.5 L27.5,-251.5 L27.5,0.5 L0.5,0.5 Z" fill="#08a3cc" stroke="#08a3cc" fill-opacity="0.7" stroke-width="1" stroke-opacity="1" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(271,340)" visibility="visible"><path cs="100,100" d="M0.5,0.5 L0.5,-169.5 L27.5,-169.5 L27.5,0.5 L0.5,0.5 Z" fill="#08a3cc" stroke="#08a3cc" fill-opacity="0.4" stroke-width="1" stroke-opacity="1" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g></g></g><g><g transform="translate(74,20)" class="amcharts-graph-column amcharts-graph-g1"><g></g></g><g transform="translate(74,20)" class="amcharts-graph-line amcharts-graph-g2"><g></g><g></g><g clip-path="url(#AmChartsEl-4)"><path cs="100,100" d="M17.5,305.5 L50.5,218.5 L83.5,228.5 L117.5,231.5 L150.5,174.5 L184.5,123.5 L217.5,55.5 L250.5,43.5 L284.5,24.5 L317.5,111.5 M0,0 L0,0" fill="none" stroke-width="1" stroke-opacity="1" stroke="#786c56" class="amcharts-graph-stroke"></path></g><clipPath id="AmChartsEl-4"><rect x="0" y="0" width="369" height="342" rx="0" ry="0" stroke-width="0"></rect></clipPath></g><g transform="translate(74,20)" class="amcharts-graph-line amcharts-graph-g3"><g></g><g></g><g clip-path="url(#AmChartsEl-5)"><path cs="100,100" d="M17.5,194.5 L50.5,222.5 L83.5,240.5 L117.5,287.5 L150.5,298.5 L184.5,202.5 L217.5,5.5 L250.5,44.5 L284.5,112.5 L317.5,209.5 M0,0 L0,0" fill="none" stroke-width="1" stroke-opacity="0.8" stroke="#e26a6a" class="amcharts-graph-stroke"></path></g><clipPath id="AmChartsEl-5"><rect x="0" y="0" width="369" height="342" rx="0" ry="0" stroke-width="0"></rect></clipPath></g></g><g></g><g><g class="amcharts-category-axis"><path cs="100,100" d="M0.5,0.5 L367.5,0.5" fill="none" stroke-width="1" stroke-opacity="1" stroke="#555555" transform="translate(74,360)" class="amcharts-axis-line"></path></g><g class="amcharts-value-axis value-axis-a1"><path cs="100,100" d="M0.5,0.5 L0.5,340.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(74,20)" class="amcharts-axis-line" visibility="visible"></path></g><g class="amcharts-value-axis value-axis-a2"><path cs="100,100" d="M0.5,0.5 L0.5,340.5 L0.5,340.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(441,20)" class="amcharts-axis-line" visibility="visible"></path></g><g class="amcharts-value-axis value-axis-a3"><path cs="100,100" d="M0.5,0.5 L0.5,340.5 L0.5,340.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(441,20)" class="amcharts-axis-line" visibility="visible"></path></g></g><g><g transform="translate(74,20)" visibility="hidden"><path cs="100,100" d="M0.5,0.5 L0.5,0.5 L0.5,340.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#CC0000" class="amcharts-cursor-line" visibility="hidden" style="pointer-events: none;"></path></g></g><g></g><g><g transform="translate(74,20)" class="amcharts-graph-column amcharts-graph-g1"></g><g transform="translate(74,20)" class="amcharts-graph-line amcharts-graph-g2"><circle r="5" cx="0" cy="0" fill="#89c4f4" stroke="#02617a" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(17,305)" class="amcharts-graph-bullet"></circle><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="start" class="amcharts-graph-label" transform="translate(25,303)" style="pointer-events: none;"><tspan y="6" x="0">Miami</tspan></text><circle r="3.5" cx="0" cy="0" fill="#89c4f4" stroke="#02617a" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(50,218)" class="amcharts-graph-bullet"></circle><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="start" class="amcharts-graph-label" transform="translate(57,218)" style="pointer-events: none;"><tspan y="6" x="0"></tspan></text><circle r="5" cx="0" cy="0" fill="#89c4f4" stroke="#02617a" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(83,228)" class="amcharts-graph-bullet"></circle><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="start" class="amcharts-graph-label" transform="translate(91,228)" style="pointer-events: none;"><tspan y="6" x="0"></tspan></text><circle r="8" cx="0" cy="0" fill="#89c4f4" stroke="#02617a" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(117,231)" class="amcharts-graph-bullet"></circle><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="start" class="amcharts-graph-label" transform="translate(128,229)" style="pointer-events: none;"><tspan y="6" x="0">Houston</tspan></text><circle r="8.5" cx="0" cy="0" fill="#89c4f4" stroke="#02617a" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(150,174)" class="amcharts-graph-bullet"></circle><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="start" class="amcharts-graph-label" transform="translate(162,174)" style="pointer-events: none;"><tspan y="6" x="0"></tspan></text><circle r="5.5" cx="0" cy="0" fill="#89c4f4" stroke="#02617a" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(184,123)" class="amcharts-graph-bullet"></circle><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="start" class="amcharts-graph-label" transform="translate(193,123)" style="pointer-events: none;"><tspan y="6" x="0"></tspan></text><circle r="5" cx="0" cy="0" fill="#89c4f4" stroke="#02617a" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(217,55)" class="amcharts-graph-bullet"></circle><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="start" class="amcharts-graph-label" transform="translate(225,55)" style="pointer-events: none;"><tspan y="6" x="0"></tspan></text><circle r="9" cx="0" cy="0" fill="#89c4f4" stroke="#02617a" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(250,43)" class="amcharts-graph-bullet"></circle><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="start" class="amcharts-graph-label" transform="translate(262,41)" style="pointer-events: none;"><tspan y="6" x="0">Denver</tspan></text><circle r="6" cx="0" cy="0" fill="#89c4f4" stroke="#02617a" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(284,24)" class="amcharts-graph-bullet"></circle><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="start" class="amcharts-graph-label" transform="translate(293,24)" style="pointer-events: none;"><tspan y="6" x="0"></tspan></text><circle r="4" cx="0" cy="0" fill="#89c4f4" stroke="#02617a" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(317,111)" class="amcharts-graph-bullet lastBullet"></circle><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="start" class="amcharts-graph-label" transform="translate(324,109)" style="pointer-events: none;"><tspan y="6" x="0">Las Vegas</tspan></text></g><g transform="translate(74,20)" class="amcharts-graph-line amcharts-graph-g3"><path cs="100,100" d="M-3.5,4.5 L4.5,4.5 L4.5,-3.5 L-3.5,-3.5 Z" fill="#e26a6a" stroke="#e26a6a" fill-opacity="1" stroke-width="1" stroke-opacity="0.8" transform="translate(17,194)" class="amcharts-graph-bullet"></path><path cs="100,100" d="M-3.5,4.5 L4.5,4.5 L4.5,-3.5 L-3.5,-3.5 Z" fill="#e26a6a" stroke="#e26a6a" fill-opacity="1" stroke-width="1" stroke-opacity="0.8" transform="translate(50,222)" class="amcharts-graph-bullet"></path><path cs="100,100" d="M-3.5,4.5 L4.5,4.5 L4.5,-3.5 L-3.5,-3.5 Z" fill="#e26a6a" stroke="#e26a6a" fill-opacity="1" stroke-width="1" stroke-opacity="0.8" transform="translate(83,240)" class="amcharts-graph-bullet"></path><path cs="100,100" d="M-3.5,4.5 L4.5,4.5 L4.5,-3.5 L-3.5,-3.5 Z" fill="#e26a6a" stroke="#e26a6a" fill-opacity="1" stroke-width="1" stroke-opacity="0.8" transform="translate(117,287)" class="amcharts-graph-bullet"></path><path cs="100,100" d="M-3.5,4.5 L4.5,4.5 L4.5,-3.5 L-3.5,-3.5 Z" fill="#e26a6a" stroke="#e26a6a" fill-opacity="1" stroke-width="1" stroke-opacity="0.8" transform="translate(150,298)" class="amcharts-graph-bullet"></path><path cs="100,100" d="M-3.5,4.5 L4.5,4.5 L4.5,-3.5 L-3.5,-3.5 Z" fill="#e26a6a" stroke="#e26a6a" fill-opacity="1" stroke-width="1" stroke-opacity="0.8" transform="translate(184,202)" class="amcharts-graph-bullet"></path><path cs="100,100" d="M-3.5,4.5 L4.5,4.5 L4.5,-3.5 L-3.5,-3.5 Z" fill="#e26a6a" stroke="#e26a6a" fill-opacity="1" stroke-width="1" stroke-opacity="0.8" transform="translate(217,5)" class="amcharts-graph-bullet"></path><path cs="100,100" d="M-3.5,4.5 L4.5,4.5 L4.5,-3.5 L-3.5,-3.5 Z" fill="#e26a6a" stroke="#e26a6a" fill-opacity="1" stroke-width="1" stroke-opacity="0.8" transform="translate(250,44)" class="amcharts-graph-bullet"></path><path cs="100,100" d="M-3.5,4.5 L4.5,4.5 L4.5,-3.5 L-3.5,-3.5 Z" fill="#e26a6a" stroke="#e26a6a" fill-opacity="1" stroke-width="1" stroke-opacity="0.8" transform="translate(284,112)" class="amcharts-graph-bullet"></path><path cs="100,100" d="M-3.5,4.5 L4.5,4.5 L4.5,-3.5 L-3.5,-3.5 Z" fill="#e26a6a" stroke="#e26a6a" fill-opacity="1" stroke-width="1" stroke-opacity="0.8" transform="translate(317,209)" class="amcharts-graph-bullet"></path></g></g><g><g class="amcharts-category-axis" transform="translate(74,20)" visibility="visible"><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="middle" transform="translate(16.6818181993706,353)" class="amcharts-axis-label"><tspan y="6" x="0">05</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="middle" transform="translate(49.681818199370596,353)" class="amcharts-axis-label"><tspan y="6" x="0">06</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="middle" transform="translate(83.6818181993706,353)" class="amcharts-axis-label"><tspan y="6" x="0">07</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="middle" transform="translate(116.6818181993706,353)" class="amcharts-axis-label"><tspan y="6" x="0">08</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="middle" transform="translate(149.6818181993706,353)" class="amcharts-axis-label"><tspan y="6" x="0">09</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="middle" transform="translate(183.6818181993706,353)" class="amcharts-axis-label"><tspan y="6" x="0">10</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="middle" transform="translate(216.6818181993706,353)" class="amcharts-axis-label"><tspan y="6" x="0">11</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="middle" transform="translate(250.6818181993706,353)" class="amcharts-axis-label"><tspan y="6" x="0">12</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="middle" transform="translate(283.6818181993706,353)" class="amcharts-axis-label"><tspan y="6" x="0">13</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="middle" transform="translate(316.6818181993706,353)" class="amcharts-axis-label"><tspan y="6" x="0">14</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="middle" transform="translate(350.6818181993706,353)" class="amcharts-axis-label"><tspan y="6" x="0">15</tspan></text></g><g class="amcharts-value-axis value-axis-a1" transform="translate(74,20)" visibility="visible"><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="end" transform="translate(-12,337.5)" class="amcharts-axis-label"><tspan y="6" x="0">200</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="end" transform="translate(-12,299.5)" class="amcharts-axis-label"><tspan y="6" x="0">250</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="end" transform="translate(-12,261.5)" class="amcharts-axis-label"><tspan y="6" x="0">300</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="end" transform="translate(-12,224.5)" class="amcharts-axis-label"><tspan y="6" x="0">350</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="end" transform="translate(-12,186.5)" class="amcharts-axis-label"><tspan y="6" x="0">400</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="end" transform="translate(-12,148.5)" class="amcharts-axis-label"><tspan y="6" x="0">450</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="end" transform="translate(-12,110.5)" class="amcharts-axis-label"><tspan y="6" x="0">500</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="end" transform="translate(-12,73.5)" class="amcharts-axis-label"><tspan y="6" x="0">550</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="end" transform="translate(-12,35.5)" class="amcharts-axis-label"><tspan y="6" x="0">600</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="end" transform="translate(-12,-2.5)" class="amcharts-axis-label"><tspan y="6" x="0">650</tspan></text><text y="7" fill="#6c7b88" font-family="Open Sans" font-size="13px" opacity="1" font-weight="bold" text-anchor="middle" class="amcharts-axis-title" transform="translate(-52,170) rotate(-90)"><tspan y="7" x="0">distance</tspan></text></g><g class="amcharts-value-axis value-axis-a2" transform="translate(74,20)" visibility="visible"></g><g class="amcharts-value-axis value-axis-a3" transform="translate(74,20)" visibility="visible"><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="end" transform="translate(358,330.5)" class="amcharts-axis-label"><tspan y="6" x="0">03h 20min</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="end" transform="translate(358,281.5)" class="amcharts-axis-label"><tspan y="6" x="0">05h 00min</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="end" transform="translate(358,233.5)" class="amcharts-axis-label"><tspan y="6" x="0">06h 40min</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="end" transform="translate(358,184.5)" class="amcharts-axis-label"><tspan y="6" x="0">08h 20min</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="end" transform="translate(358,136.5)" class="amcharts-axis-label"><tspan y="6" x="0">10h 00min</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="end" transform="translate(358,87.5)" class="amcharts-axis-label"><tspan y="6" x="0">11h 40min</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="end" transform="translate(358,39.5)" class="amcharts-axis-label"><tspan y="6" x="0">13h 20min</tspan></text><text y="7" fill="#6c7b88" font-family="Open Sans" font-size="13px" opacity="1" font-weight="bold" text-anchor="middle" class="amcharts-axis-title" transform="translate(384,170) rotate(-90)"><tspan y="7" x="0">duration</tspan></text></g></g><g><g></g></g><g></g><g></g><g></g></svg><a href="http://www.amcharts.com/javascript-charts/" title="JavaScript charts" style="position: absolute; text-decoration: none; color: rgb(108, 123, 136); font-family: &quot;Open Sans&quot;; font-size: 12px; opacity: 0.7; display: block; left: 79px; top: 25px;">JS chart by amCharts</a></div><div class="amChartsLegend amcharts-legend-div" style="overflow: hidden; position: relative; text-align: left; width: 482px; height: 107px; cursor: default;"><svg version="1.1" style="position: absolute; width: 482px; height: 107px;"><desc>JavaScript chart by amCharts 3.17.1</desc><g transform="translate(74,0)"><path cs="100,100" d="M0.5,0.5 L367.5,0.5 L367.5,96.5 L0.5,96.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0" class="amcharts-legend-bg"></path><g transform="translate(0,11)"><g cursor="pointer" class="amcharts-legend-item-g1" transform="translate(0,0)"><path cs="100,100" d="M-15.5,8.5 L16.5,8.5 L16.5,-7.5 L-15.5,-7.5 Z" fill="#08a3cc" stroke="#08a3cc" fill-opacity="0.7" stroke-width="1" stroke-opacity="1" transform="translate(16,8)" class="amcharts-graph-column amcharts-graph-g1 amcharts-legend-marker"></path><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="start" class="amcharts-legend-label" transform="translate(37,7)"><tspan y="6" x="0">distance</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="start" class="amcharts-legend-value" transform="translate(109,7)">total: 3,581 mi</text><rect x="32" y="0" width="213.328125" height="19" rx="0" ry="0" stroke-width="0" stroke="none" fill="#fff" fill-opacity="0.005"></rect></g><g cursor="pointer" class="amcharts-legend-item-g2" transform="translate(0,29)"><g class="amcharts-graph-line amcharts-graph-g2 amcharts-legend-marker"><path cs="100,100" d="M0.5,8.5 L32.5,8.5" fill="none" stroke-width="1" stroke-opacity="1" stroke="#786c56" class="amcharts-graph-stroke"></path><circle r="4" cx="0" cy="0" fill="#89c4f4" stroke="#02617a" fill-opacity="1" stroke-width="2" stroke-opacity="1" class="amcharts-graph-bullet" transform="translate(17,8)"></circle></g><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="start" class="amcharts-legend-label" transform="translate(37,7)"><tspan y="6" x="0">latitude/city</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="start" class="amcharts-legend-value" transform="translate(129,7)"> </text><rect x="32" y="0" width="232.59375" height="19" rx="0" ry="0" stroke-width="0" stroke="none" fill="#fff" fill-opacity="0.005"></rect></g><g cursor="pointer" class="amcharts-legend-item-g3" transform="translate(0,58)"><g class="amcharts-graph-line amcharts-graph-g3 amcharts-legend-marker"><path cs="100,100" d="M0.5,8.5 L32.5,8.5" fill="none" stroke-width="1" stroke-opacity="0.8" stroke="#e26a6a" class="amcharts-graph-stroke"></path><path cs="100,100" d="M-3.5,4.5 L4.5,4.5 L4.5,-3.5 L-3.5,-3.5 Z" fill="#e26a6a" stroke="#e26a6a" fill-opacity="1" stroke-width="1" stroke-opacity="0.8" class="amcharts-graph-bullet" transform="translate(17,8)"></path></g><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="start" class="amcharts-legend-label" transform="translate(37,7)"><tspan y="6" x="0">duration</tspan></text><text y="6" fill="#6c7b88" font-family="Open Sans" font-size="12px" opacity="1" text-anchor="start" class="amcharts-legend-value" transform="translate(111,7)"> </text><rect x="32" y="0" width="214.671875" height="19" rx="0" ry="0" stroke-width="0" stroke="none" fill="#fff" fill-opacity="0.005"></rect></g></g></g></svg></div></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12 col-sm-12">
                                <div class="portlet light ">
                                    <div class="portlet-title">
                                        <div class="caption ">
                                            <span class="caption-subject font-dark bold uppercase">Finance</span>
                                            <span class="caption-helper">distance stats...</span>
                                        </div>
                                        <div class="actions">
                                            <a href="#" class="btn btn-circle green btn-outline btn-sm">
                                                <i class="fa fa-pencil"></i> Export </a>
                                            <a href="#" class="btn btn-circle green btn-outline btn-sm">
                                                <i class="fa fa-print"></i> Print </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div id="dashboard_amchart_3" class="CSSAnimationChart" style="overflow: hidden; text-align: left;"><div class="amcharts-main-div" style="position: relative;"><div class="amcharts-chart-div" style="overflow: hidden; position: relative; text-align: left; width: 482px; height: 500px; padding: 0px;"><svg version="1.1" style="position: absolute; width: 482px; height: 500px; top: 0px; left: 0px;"><desc>JavaScript chart by amCharts 3.17.1</desc><g><path cs="100,100" d="M0.5,0.5 L481.5,0.5 L481.5,499.5 L0.5,499.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0" class="amcharts-bg"></path><path cs="100,100" d="M0.5,0.5 L443.5,0.5 L443.5,463.5 L0.5,463.5 L0.5,0.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0" class="amcharts-plot-area" transform="translate(30,10)"></path></g><g><g class="amcharts-category-axis" transform="translate(30,10)"><g><path cs="100,100" d="M0.5,463.5 L0.5,463.5 L0.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M74.5,463.5 L74.5,463.5 L74.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M148.5,463.5 L148.5,463.5 L148.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M221.5,463.5 L221.5,463.5 L221.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M295.5,463.5 L295.5,463.5 L295.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M369.5,463.5 L369.5,463.5 L369.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M443.5,463.5 L443.5,463.5 L443.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000" class="amcharts-axis-grid"></path></g></g><g class="amcharts-value-axis value-axis-valueAxisAuto0_1497252903468" transform="translate(30,10)" visibility="visible"><g><path cs="100,100" d="M0.5,463.5 L0.5,463.5 L443.5,463.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M0.5,405.5 L0.5,405.5 L443.5,405.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M0.5,347.5 L0.5,347.5 L443.5,347.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M0.5,289.5 L0.5,289.5 L443.5,289.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M0.5,232.5 L0.5,232.5 L443.5,232.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M0.5,174.5 L0.5,174.5 L443.5,174.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M0.5,116.5 L0.5,116.5 L443.5,116.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M0.5,58.5 L0.5,58.5 L443.5,58.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M0.5,0.5 L0.5,0.5 L443.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000" class="amcharts-axis-grid"></path></g></g></g><g></g><g></g><g></g><g><g transform="translate(30,10)"><g class="amcharts-graph-column amcharts-graph-graphAuto0_1497252903469" transform="translate(7,463)" visibility="visible"><path cs="100,100" d="M0.5,0.5 L0.5,-100.5 L59.5,-100.5 L59.5,0.5 L0.5,0.5 Z" fill="#67b7dc" stroke="#67b7dc" fill-opacity="1" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-graphAuto0_1497252903469" transform="translate(81,463)" visibility="visible"><path cs="100,100" d="M0.5,0.5 L0.5,-178.5 L59.5,-178.5 L59.5,0.5 L0.5,0.5 Z" fill="#67b7dc" stroke="#67b7dc" fill-opacity="1" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-graphAuto0_1497252903469" transform="translate(155,463)" visibility="visible"><path cs="100,100" d="M0.5,0.5 L0.5,-291.5 L59.5,-291.5 L59.5,0.5 L0.5,0.5 Z" fill="#67b7dc" stroke="#67b7dc" fill-opacity="1" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-graphAuto0_1497252903469" transform="translate(228,463)" visibility="visible"><path cs="100,100" d="M0.5,0.5 L0.5,-274.5 L59.5,-274.5 L59.5,0.5 L0.5,0.5 Z" fill="#67b7dc" stroke="#67b7dc" fill-opacity="1" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-graphAuto0_1497252903469" transform="translate(302,463)" visibility="visible"><path cs="100,100" d="M0.5,0.5 L0.5,-306.5 L59.5,-306.5 L59.5,0.5 L0.5,0.5 Z" fill="#67b7dc" stroke="#67b7dc" fill-opacity="1" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-graphAuto0_1497252903469" transform="translate(376,463)" visibility="visible"><path cs="100,100" d="M0.5,0.5 L0.5,-407.5 L59.5,-407.5 L59.5,0.5 L0.5,0.5 Z" fill="#67b7dc" stroke="#67b7dc" fill-opacity="0.2" stroke-width="1" stroke-opacity="0.9" stroke-dasharray="5" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g></g></g><g><g transform="translate(30,10)" class="amcharts-graph-column amcharts-graph-graphAuto0_1497252903469"><g></g></g><g transform="translate(30,10)" class="amcharts-graph-line amcharts-graph-graph2" opacity="1" visibility="visible"><g></g><g></g><g clip-path="url(#AmChartsEl-6)"><path cs="100,100" d="M37.5,431.5 L111.5,159.5 L185.5,32.5 L258.5,142.5 L332.5,226.5 L406.5,90.5 M0,0 L0,0" fill="none" stroke-width="3" stroke-opacity="1" stroke="#fdd400" class="amcharts-graph-stroke"></path></g><clipPath id="AmChartsEl-6"><rect x="0" y="0" width="445" height="465" rx="0" ry="0" stroke-width="0"></rect></clipPath></g></g><g></g><g><g class="amcharts-category-axis"><path cs="100,100" d="M0.5,0.5 L443.5,0.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(30,473)" class="amcharts-axis-line"></path></g><g class="amcharts-value-axis value-axis-valueAxisAuto0_1497252903468"><path cs="100,100" d="M0.5,0.5 L0.5,463.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(30,10)" class="amcharts-axis-line" visibility="visible"></path></g></g><g></g><g></g><g><g transform="translate(30,10)" class="amcharts-graph-column amcharts-graph-graphAuto0_1497252903469"></g><g transform="translate(30,10)" class="amcharts-graph-line amcharts-graph-graph2" opacity="1" visibility="visible"><circle r="3.5" cx="0" cy="0" fill="#FFFFFF" stroke="#fdd400" fill-opacity="1" stroke-width="3" stroke-opacity="1" transform="translate(37,431)" class="amcharts-graph-bullet"></circle><circle r="3.5" cx="0" cy="0" fill="#FFFFFF" stroke="#fdd400" fill-opacity="1" stroke-width="3" stroke-opacity="1" transform="translate(111,159)" class="amcharts-graph-bullet"></circle><circle r="3.5" cx="0" cy="0" fill="#FFFFFF" stroke="#fdd400" fill-opacity="1" stroke-width="3" stroke-opacity="1" transform="translate(185,32)" class="amcharts-graph-bullet"></circle><circle r="3.5" cx="0" cy="0" fill="#FFFFFF" stroke="#fdd400" fill-opacity="1" stroke-width="3" stroke-opacity="1" transform="translate(258,142)" class="amcharts-graph-bullet"></circle><circle r="3.5" cx="0" cy="0" fill="#FFFFFF" stroke="#fdd400" fill-opacity="1" stroke-width="3" stroke-opacity="1" transform="translate(332,226)" class="amcharts-graph-bullet"></circle><circle r="3.5" cx="0" cy="0" fill="#FFFFFF" stroke="#fdd400" fill-opacity="1" stroke-width="3" stroke-opacity="1" transform="translate(406,90)" class="amcharts-graph-bullet"></circle></g></g><g><g class="amcharts-category-axis" transform="translate(30,10)" visibility="visible"><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(36.916666666666664,475.5)" class="amcharts-axis-label"><tspan y="6" x="0">2009</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(110.91666666666666,475.5)" class="amcharts-axis-label"><tspan y="6" x="0">2010</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(184.91666666666666,475.5)" class="amcharts-axis-label"><tspan y="6" x="0">2011</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(257.9166666666667,475.5)" class="amcharts-axis-label"><tspan y="6" x="0">2012</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(331.9166666666667,475.5)" class="amcharts-axis-label"><tspan y="6" x="0">2013</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(405.9166666666667,475.5)" class="amcharts-axis-label"><tspan y="6" x="0">2014</tspan></text></g><g class="amcharts-value-axis value-axis-valueAxisAuto0_1497252903468" transform="translate(30,10)" visibility="visible"><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,461)" class="amcharts-axis-label"><tspan y="6" x="0">20</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,403)" class="amcharts-axis-label"><tspan y="6" x="0">22</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,345)" class="amcharts-axis-label"><tspan y="6" x="0">24</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,287)" class="amcharts-axis-label"><tspan y="6" x="0">26</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,230)" class="amcharts-axis-label"><tspan y="6" x="0">28</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,172)" class="amcharts-axis-label"><tspan y="6" x="0">30</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,114)" class="amcharts-axis-label"><tspan y="6" x="0">32</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,56)" class="amcharts-axis-label"><tspan y="6" x="0">34</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,-2)" class="amcharts-axis-label"><tspan y="6" x="0">36</tspan></text></g></g><g><g></g></g><g></g><g></g><g></g></svg><a href="http://www.amcharts.com/javascript-charts/" title="JavaScript charts" style="position: absolute; text-decoration: none; color: rgb(0, 0, 0); font-family: Verdana; font-size: 11px; opacity: 0.7; display: block; left: 35px; top: 15px;">JS chart by amCharts</a></div></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
 <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="page-footer-inner"> 2017 © Metronic Theme By
                    <a target="_blank" href="/">0206class</a> &nbsp;|&nbsp;
                    <a href="/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                </div>
                <div class="scroll-to-top" style="display: none;">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>
        <!-- BEGIN QUICK NAV -->
        <nav class="quick-nav">
            <a class="quick-nav-trigger" href="#0">
                <span aria-hidden="true"></span>
            </a>
            <ul>
                <li>
                    <a href="<?php echo url('index/index'); ?>"  class="active">
                        <span>首页</span>
                        <i class="icon-basket"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('goods/index'); ?>" >
                        <span>商品管理</span>
                        <i class="icon-users"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('category/index'); ?>" >
                        <span>分类管理</span>
                        <i class="icon-user"></i>
                    </a>
                </li>
               
            </ul>
            <span aria-hidden="true" class="quick-nav-bg"></span>
        </nav>
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script async="" src="__PUBLIC__/static/admin/gtm.js"></script><script async="" src="__PUBLIC__/static/admin/analytics.js"></script><script src="__PUBLIC__/static/admin/jquery_002.js" type="text/javascript"></script>
        <script src="__PUBLIC__/static/admin/bootstrap.js" type="text/javascript"></script>
        <script src="__PUBLIC__/static/admin/js.js" type="text/javascript"></script>
        <script src="__PUBLIC__/static/admin/jquery_003.js" type="text/javascript"></script>
        <script src="__PUBLIC__/static/admin/jquery.js" type="text/javascript"></script>
        <script src="__PUBLIC__/static/admin/bootstrap-switch.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="http://keenthemes.com/preview/metronic/theme/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
       <script src="__PUBLIC__/static/admin/theme2/layout.min.js" type="text/javascript"></script>
           
        <script src="__PUBLIC__/static/admin/quick-sidebar.js" type="text/javascript"></script>
        <script src="__PUBLIC__/static/admin/quick-nav.js" type="text/javascript"></script>

        

        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
   



</body></html>