<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"D:\wamp64\www\webPrj\xiaomi\src\api\public/../application/admin\view\goods\add.html";i:1499477218;s:87:"D:\wamp64\www\webPrj\xiaomi\src\api\public/../application/admin\view\public\header.html";i:1499313462;s:87:"D:\wamp64\www\webPrj\xiaomi\src\api\public/../application/admin\view\public\footer.html";i:1499477121;}*/ ?>
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
                 
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=SYF6kWV4w0ZC7kA3jaZoIvwPAg1kL15H"></script>

<style type="text/css">
	.dropify-wrapper{width:30% !important;float: left;margin-right: 10px;}
	.attr_li li{list-style: none;margin-bottom: 10px;}
	.attr_li li input{width: 50%}
</style>

<script src="https://cdn.bootcss.com/vue/2.3.0/vue.min.js"></script>
<h2>添加商品表单</h2>
<!-- 选项卡菜单：nav   nav-tabs -->
<div>
	<a href="<?php echo url('index'); ?>" class="btn btn-success">返回商品列表</a>
</div>
<br/>
<ul class="nav nav-tabs">
	<li class="active">
		<a href="#baseInfo" data-toggle="tab">基本信息</a>
	</li>
	<li>
		<a href="#attr"  data-toggle="tab">商品属性</a>
	</li>
</ul>
<form action="<?php echo url('save'); ?>" enctype="multipart/form-data" method="post">
	<div class="tab-content">
		<!-- 基本信息选项卡的切换内容一 -->
		<div class="tab-pane active" id="baseInfo">

			<div class="form-group">
				<label for="">商品名称</label>
				<input type="text" class="form-control" name="goods_name"></div>
			<div class="form-group">
				<label for="">商品价格</label>
				<input type="text" class="form-control" name="goods_price"></div>
			<div class="form-group">
				<label for="">所属分类</label>
				<select name="cate_id" >
					<option value="">请选择</option>
					<?php foreach($category_list as $item): ?>
					<option value="<?php echo $item['id']; ?>">
			         <?php echo $item['cate_name']; ?>
					</option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<div>
					<label for="">商品预览</label>
				</div>
				<input type="file"  name="goods_image" class="thumb">
				<input type="file"  name="pic_1" class="thumb">
				<input type="file"  name="pic_2" class="thumb">
				<input type="file"  name="pic_3" class="thumb">
			</div>
			<!-- <div class="form-group" style="clear:both">
				<label for="">门票地图</label>
				<input type="text" placeholder="请输入地址关键词" id="map_kwd">
				<input onclick="search()" value="搜索" type="button" class="btn btn-info">
				经度：
				<input type="text" name="lng">
				纬度：
				<input type="text" name="lat">
				<br>
				<div id="allmap" style="width:100%;height:280px;"></div>

				<script type="text/javascript">
			// 百度地图API功能
			var map = new BMap.Map("allmap");  //盒子的ID        
			 
				map.addControl(new BMap.NavigationControl());    
				var point = new BMap.Point(113.243113,23.126342);

				// 添加覆盖物
	map.centerAndZoom(point, 12);
	 

		function showInfo(e){
				$("input[name='lng']").val(e.point.lng);
			$("input[name='lat']").val(e.point.lat);
	}
	map.addEventListener("click", showInfo);

			// 搜索要用的
			var local = new BMap.LocalSearch(map, {
				renderOptions:{map: map}
			});
			function search () {
			 	local.search($("#map_kwd").val());
			}
		</script>
			</div> -->

			<div class="form-group">
				<label for="">商品简介</label>
				<textarea name="goods_deta" id="description"  style="width: 100%; height: 190px;"></textarea>
			</div>

		</div>
		<!-- 选项卡内容二 -->
		<div  class="tab-pane admin-view row" id="attr">
			<div id="damai_attr">
				<div class="col-lg-6">
					<div class="form-group">
						<label >版本</label>
						<ul class="attr_li">
							<li v-for="(version,index) in version_input">
								<input class="form-control" type="text" name="goods_info[]" v-model="goods_info[index]"></li>
						</ul>
						<a @click="addTimeInput()">+添加版本</a>
					</div>
					<div class="form-group">
						<label >颜色</label>
						<ul class="attr_li">
							<li v-for="(color,index) in color_input">
								<input class="form-control" type="text" name="goods_color[]" v-model="goods_color[index]"></li>
						</ul>

						<a @click="addPriceInput()">+添加颜色</a>
					</div>
				</div>
				<div class="col-lg-6">

					<div class="form-group">
						<label >库存</label>
						<ul>
							<li v-for="(version,t_index) in goods_info">
								{{ version }}
								<input type="text" placeholder="请输入价格" :name="'price['+t_index+']'">
								<ul>
									<li v-for="(color,p_index) in goods_color">
										{{ color }}
										<input type="text" placeholder="请输入库存" :name="'sku['+t_index+']['+p_index+']'"></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="form-group">
		<input type="submit" class="btn-success btn" value="保存"></div>

</form>

<link rel="stylesheet" type="text/css" href="__PUBLIC__/static/library/dropify/dropify.min.css">
<script type="text/javascript" src="__PUBLIC__/static/library/dropify/dropify.min.js"></script>

<script type="text/javascript" src="__PUBLIC__/static/library/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/library/ueditor/ueditor.all.min.js"></script>

<script type="text/javascript">
$(function  () {
	new Vue({
		el:".admin-view",
		data:{
			goods_info:[],//产品版本的数组
			version_input:[0],//有多少个时间输入框
			goods_color:[],//产品颜色的数组
			color_input:[0,1]//有多少个颜色输入框
		},
		methods:{
			addTimeInput(){
				this.version_input.push(1)
			},
			addPriceInput(){
				this.color_input.push(1)
			}
		}
	})
})
    $('input[name="goods_image"]').dropify({
    	 messages: {
	        'default': '主图',
	    }
    });
    $('input[name="pic_1"]').dropify({
    	 messages: {
	        'default': '副图一',
	    }
    });
    $('input[name="pic_2"]').dropify({
    	 messages: {
	        'default': '副图二',
	    }
    });
    $('input[name="pic_3"]').dropify({
    	 messages: {
	        'default': '副图三',
	    }
    });
    // var ue = UE.getEditor('description');
</script>
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