<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Crypto Dashboard - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin Dashboard</title>
    <link rel="apple-touch-icon" href=<?=base_url("app-assets/images/ico/apple-icon-120.png")?>">
    <link rel="shortcut icon" type="image/x-icon" href=<?=base_url("app-assets/images/ico/favicon.ico")?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href=<?=base_url("app-assets/vendors/css/material-vendors.min.css")?>">
    <link rel="stylesheet" type="text/css" href=<?=base_url("app-assets/vendors/css/tables/datatable/datatables.min.css")?>">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href=<?=base_url("app-assets/css/material.css")?>">
    <link rel="stylesheet" type="text/css" href=<?=base_url("app-assets/css/components.css")?>">
    <link rel="stylesheet" type="text/css" href=<?=base_url("app-assets/css/bootstrap-extended.css")?>">
    <link rel="stylesheet" type="text/css" href=<?=base_url("app-assets/css/material-extended.css")?>">
    <link rel="stylesheet" type="text/css" href=<?=base_url("app-assets/css/material-colors.css")?>">">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href=<?=base_url("app-assets/css/core/menu/menu-types/material-vertical-menu-modern.css")?>">
    <link rel="stylesheet" type="text/css" href=<?=base_url("app-assets/vendors/css/cryptocoins/cryptocoins.css")?>">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href=<?=base_url("assets/css/style.css")?>">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern material-vertical-layout material-layout 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-lg-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="modern admin logo" src="../app-assets/images/logo/logo.png">
                            <h3 class="brand-text">Modern Admin</h3>
                        </a></li>
                    <li class="nav-item d-none d-lg-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
                    <li class="nav-item d-lg-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="material-icons mt-1">more_vert</i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item nav-link-search"><a class="nav-link d-none d-lg-block" href="#"><i class="material-icons search-icon">search</i>
                                <input class="round form-control search-box" type="text" placeholder="Explore Modern Admin"><a class="nav-link dropdown-toggle search-bar-toggle d-lg-none d-m-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">search</i></a>
                                <div class="dropdown-menu arrow"><a class="dropdown-item">
                                        <input class="round form-control" type="text" placeholder="Search Here"></a></div>
                            </a></li>
                        <li class="nav-item d-none d-lg-block d-none"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                        <li class="dropdown nav-item mega-dropdown d-lg-block d-none"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Mega</a>
                            <ul class="mega-dropdown-menu dropdown-menu row">
                                <li class="col-md-2">
                                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="material-icons">list_alt</i> News</h6>
                                    <div id="mega-menu-carousel-example">
                                        <div><img class="rounded img-fluid mb-1" src="../app-assets/images/slider/slider-2.png" alt="First slide"><a class="news-title mb-0 d-block" href="#">Poster Frame PSD</a>
                                            <p class="news-content"><span class="font-small-2">January 26, 2018</span></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <h6 class="dropdown-menu-header text-uppercase"><i class="material-icons">arrow_downward</i> Menu</h6>
                                    <ul>
                                        <li class="menu-list">
                                            <ul>
                                                <li><a class="dropdown-item" href="layout-fixed.html"><i class="material-icons">content_copy</i> Page layouts</a></li>
                                                <li><a class="dropdown-item" href="color-palette-primary.html"><i class="material-icons">colorize</i> Color palette</a></li>
                                                <li><a class="dropdown-item" href="layout-2-columns.html"><i class="material-icons">star_border</i> Starter kit</a></li>
                                                <li><a class="dropdown-item" href="changelog.html"><i class="material-icons">change_history</i> Change log</a></li>
                                                <li><a class="dropdown-item" href="https://pixinvent.ticksy.com/"><i class="material-icons">person_outline</i> Support center</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="col-md-3">
                                    <h6 class="dropdown-menu-header text-uppercase"><i class="material-icons">list</i>Accordion</h6>
                                    <div class="mt-1" id="accordionWrap" role="tablist" aria-multiselectable="true">
                                        <div class="card border-0 box-shadow-0 collapse-icon accordion-icon-rotate">
                                            <div class="card-header p-0 pb-2 border-0" id="headingOne" role="tab"><a data-toggle="collapse" href="#accordionOne" aria-expanded="true" aria-controls="accordionOne">Accordion Item #1</a></div>
                                            <div class="card-collapse collapse show" id="accordionOne" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionWrap" aria-expanded="true">
                                                <div class="card-content">
                                                    <p class="accordion-text text-small-3">Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels chocolate cake liquorice cake wafer jelly beans croissant apple pie.</p>
                                                </div>
                                            </div>
                                            <div class="card-header p-0 pb-2 border-0" id="headingTwo" role="tab"><a class="collapsed" data-toggle="collapse" href="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">Accordion Item #2</a></div>
                                            <div class="card-collapse collapse" id="accordionTwo" role="tabpanel" data-parent="#accordionWrap" aria-labelledby="headingTwo" aria-expanded="false">
                                                <div class="card-content">
                                                    <p class="accordion-text">Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon muffin jelly marshmallow cake. Pastry oat cake chupa chups.</p>
                                                </div>
                                            </div>
                                            <div class="card-header p-0 pb-2 border-0" id="headingThree" role="tab"><a class="collapsed" data-toggle="collapse" href="#accordionThree" aria-expanded="false" aria-controls="accordionThree">Accordion Item #3</a></div>
                                            <div class="card-collapse collapse" id="accordionThree" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordionWrap" aria-expanded="false">
                                                <div class="card-content">
                                                    <p class="accordion-text">Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake dragée jujubes donut chocolate bar chocolate cake cupcake chocolate topping.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="material-icons">mail_outline</i> Contact Us</h6>
                                    <form class="form form-horizontal">
                                        <div class="form-body">
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label" for="inputName1">Name</label>
                                                <div class="col-sm-9">
                                                    <div class="position-relative has-icon-left">
                                                        <input class="form-control" type="text" id="inputName1" placeholder="John Doe">
                                                        <div class="form-control-position pl-1"><i class="material-icons">person_outline</i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label" for="inputEmail1">Email</label>
                                                <div class="col-sm-9">
                                                    <div class="position-relative has-icon-left">
                                                        <input class="form-control" type="email" id="inputEmail1" placeholder="john@example.com">
                                                        <div class="form-control-position pl-1"><i class="material-icons">mail_outline</i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label" for="inputMessage1">Message</label>
                                                <div class="col-sm-9">
                                                    <div class="position-relative has-icon-left">
                                                        <textarea class="form-control" id="inputMessage1" rows="2" placeholder="Simple Textarea"></textarea>
                                                        <div class="form-control-position pl-1"><i class="material-icons simple-textarea">chat_bubble_outline</i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 mb-1">
                                                    <button class="btn btn-info float-right" type="button"><i class="material-icons">send</i> Send </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                      
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="material-icons">notifications_none</i><span class="badge badge-pill badge-danger badge-up badge-glow">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6><span class="notification-tag badge badge-danger float-right m-0">5 New</span>
                                </li>
                                <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="material-icons icon-bg-circle bg-cyan">add_box</i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">You have new order!</h6>
                                                <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="material-icons icon-bg-circle bg-red bg-darken-1">cloud_download</i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading red darken-1">99% Server load</h6>
                                                <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="material-icons icon-bg-circle bg-yellow bg-darken-3">warning</i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                                <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="material-icons icon-bg-circle bg-cyan">check_circle</i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Complete the task</h6><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="material-icons icon-bg-circle bg-teal">insert_drive_file</i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Generate monthly report</h6><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="material-icons">mail_outline </i></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span></h6><span class="notification-tag badge badge-warning float-right m-0">4 New</span>
                                </li>
                                <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Margaret Govan</h6>
                                                <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="../app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Bret Lezama</h6>
                                                <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Tuesday</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Carie Berra</h6>
                                                <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Eric Alsobrook</h6>
                                                <p class="notification-text font-small-3 text-muted">We have project party this saturday.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">last month</time></small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all messages</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700">Raden Baskoro</span><span class="avatar avatar-online"><img src="../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="user-profile.html"><i class="material-icons">person_outline</i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="material-icons">mail_outline</i> My Inbox</a><a class="dropdown-item" href="user-cards.html"><i class="material-icons">content_paste</i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="material-icons">chat_bubble_outline</i> Chats</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="login-with-bg-image.html"><i class="material-icons">power_settings_new</i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->

    <div class="main-menu material-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="user-profile">
            <div class="user-info text-center pb-2"><img class="user-img img-fluid rounded-circle w-25 mt-2" src="../app-assets/images/portrait/medium/avatar-m-1.png" alt="" />
                <div class="name-wrapper d-block dropdown mt-1"><a class="white dropdown-toggle" id="user-account" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="user-name">Raden Baskoro</span></a>
                    <div class="text-light">UX Designer</div>
                    <div class="dropdown-menu arrow" aria-labelledby="dropdownMenuLink"><a class="dropdown-item"><i class="material-icons align-middle mr-1">person</i><span class="align-middle">Profile</span></a><a class="dropdown-item"><i class="material-icons align-middle mr-1">message</i><span class="align-middle">Messages</span></a><a class="dropdown-item"><i class="material-icons align-middle mr-1">attach_money</i><span class="align-middle">Balance</span></a><a class="dropdown-item"><i class="material-icons align-middle mr-1">settings</i><span class="align-middle">Settings</span></a><a class="dropdown-item"><i class="material-icons align-middle mr-1">power_settings_new</i><span class="align-middle">Log Out</span></a></div>
                </div>
            </div>
        </div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="index.html"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span><span class="badge badge badge-info badge-pill float-right mr-2">3</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="dashboard-ecommerce.html"><i class="material-icons"></i><span data-i18n="nav.dash.ecommerce">eCommerce</span></a>
                        </li>
                        <li class="active"><a class="menu-item" href="dashboard-crypto.html"><i class="material-icons"></i><span data-i18n="nav.dash.crypto">Crypto</span></a>
                        </li>
                        <li><a class="menu-item" href="dashboard-sales.html"><i class="material-icons"></i><span data-i18n="nav.dash.sales">Sales</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">tv</i><span class="menu-title" data-i18n="nav.templates.main">Templates</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#"><i class="material-icons"></i><span data-i18n="nav.templates.vert.main">Vertical</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="../material-vertical-menu-template"><i class="material-icons"></i><span data-i18n="nav.templates.vert.classic_menu">Classic Menu</span></a>
                                </li>
                                <li><a class="menu-item" href="../material-vertical-compact-menu-template"><i class="material-icons"></i><span data-i18n="nav.templates.vert.compact_menu">Compact Menu</span></a>
                                </li>
                                <li><a class="menu-item" href="../material-vertical-modern-menu-template"><i class="material-icons"></i><span>Modern Menu</span></a>
                                </li>
                                <li><a class="menu-item" href="../material-vertical-content-menu-template"><i class="material-icons"></i><span data-i18n="nav.templates.vert.content_menu">Content Menu</span></a>
                                </li>
                                <li><a class="menu-item" href="../material-vertical-overlay-menu-template"><i class="material-icons"></i><span data-i18n="nav.templates.vert.overlay_menu">Overlay Menu</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="#"><i class="material-icons"></i><span data-i18n="nav.templates.horz.main">Horizontal</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="../material-horizontal-menu-template"><i class="material-icons"></i><span data-i18n="nav.templates.horz.classic">Classic</span></a>
                                </li>
                                <li><a class="menu-item" href="../material-horizontal-menu-template-nav"><i class="material-icons"></i><span data-i18n="nav.templates.horz.top_icon">Full Width</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="nav.category.admin-panels">Admin Panels</span><i class="material-icons nav-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="Admin Panels">more_horiz</i>
                </li>
                <li class=" nav-item"><a href="../material-ecommerce-menu-template"><i class="material-icons">add_shopping_cart</i><span class="menu-title" data-i18n="">eCommerce</span></a>
                </li>
                <li class=" nav-item"><a href="../material-travel-menu-template"><i class="material-icons">call_merge</i><span class="menu-title" data-i18n="">Travel &amp; Booking</span></a>
                </li>
                <li class=" nav-item"><a href="../material-hospital-menu-template"><i class="material-icons">add_circle_outline</i><span class="menu-title" data-i18n="">Hospital</span></a>
                </li>
                <li class=" nav-item"><a href="../material-crypto-menu-template"><i class="material-icons">attach_money</i><span class="menu-title" data-i18n="">Crypto</span></a>
                </li>
                <li class=" nav-item"><a href="../material-support-menu-template"><i class="material-icons">label_outline</i><span class="menu-title" data-i18n="">Support Ticket</span></a>
                </li>
                <li class=" nav-item"><a href="../material-bank-menu-template"><i class="material-icons">account_balance</i><span class="menu-title" data-i18n="">Bank</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="nav.category.apps">Apps</span><i class="material-icons nav-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="Apps">more_horiz</i>
                </li>
                <li class=" nav-item"><a href="app-todo.html"><i class="material-icons">playlist_add_check</i><span class="menu-title" data-i18n="">ToDo</span></a>
                </li>
                <li class=" nav-item"><a href="app-contacts.html"><i class="material-icons">people_outline</i><span class="menu-title" data-i18n="">Contacts</span></a>
                </li>
                <li class=" nav-item"><a href="app-email.html"><i class="material-icons">mail_outline</i><span class="menu-title" data-i18n="">Email Application</span></a>
                </li>
                <li class=" nav-item"><a href="app-chat.html"><i class="material-icons">chat_bubble_outline</i><span class="menu-title" data-i18n="">Chat Application</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">work_outline</i><span class="menu-title" data-i18n="nav.project.main">Project</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="project-summary.html"><i class="material-icons"></i><span data-i18n="nav.project.project_summary">Project Summary</span></a>
                        </li>
                        <li><a class="menu-item" href="project-tasks.html"><i class="material-icons"></i><span data-i18n="nav.project.project_tasks">Project Task</span></a>
                        </li>
                        <li><a class="menu-item" href="project-bugs.html"><i class="material-icons"></i><span data-i18n="nav.project.project_bugs">Project Bugs</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="scrumboard.html"><i class="material-icons">web</i><span class="menu-title" data-i18n="nav.scrumboard.main">Scrumboard</span><span class="badge badge badge-info float-right">Update</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">event</i><span class="menu-title" data-i18n="nav.event_calendars.main">Calendars</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#"><i class="material-icons"></i><span data-i18n="nav.event_calendars.full_calender.main">Full Calendar</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="full-calender-basic.html"><i class="material-icons"></i><span data-i18n="nav.event_calendars.full_calender.full_calender_basic">Basic</span></a>
                                </li>
                                <li><a class="menu-item" href="full-calender-events.html"><i class="material-icons"></i><span data-i18n="nav.event_calendars.full_calender.full_calender_events">Events</span></a>
                                </li>
                                <li><a class="menu-item" href="full-calender-advance.html"><i class="material-icons"></i><span data-i18n="nav.event_calendars.full_calender.full_calender_advance">Advance</span></a>
                                </li>
                                <li><a class="menu-item" href="full-calender-extra.html"><i class="material-icons"></i><span data-i18n="nav.event_calendars.full_calender.full_calender_extra">Extra</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="calendars-clndr.html"><i class="material-icons"></i><span data-i18n="nav.event_calendars.calendars_clndr">CLNDR</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="nav.category.pages">Pages</span><i class="material-icons nav-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="Pages">more_horiz</i>
                </li>
                <li class=" nav-item"><a href="news-feed.html"><i class="material-icons">list_alt</i><span class="menu-title" data-i18n="">News Feed</span></a>
                </li>
                <li class=" nav-item"><a href="social-feed.html"><i class="material-icons">stay_current_portrait</i><span class="menu-title" data-i18n="">Social Feed</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="nav.invoice.main">Invoice</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="invoice-summary.html"><i class="material-icons"></i><span data-i18n="nav.invoice.invoice_summary">Invoice Summary</span></a>
                        </li>
                        <li><a class="menu-item" href="invoice-template.html"><i class="material-icons"></i><span data-i18n="nav.invoice.invoice_template">Invoice Template</span></a>
                        </li>
                        <li><a class="menu-item" href="invoice-list.html"><i class="material-icons"></i><span data-i18n="nav.invoice.invoice_list">Invoice List</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">timeline</i><span class="menu-title" data-i18n="nav.timelines.main">Timelines</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="timeline-center.html"><i class="material-icons"></i><span data-i18n="nav.timelines.timeline_center">Timelines Center</span></a>
                        </li>
                        <li><a class="menu-item" href="timeline-left.html"><i class="material-icons"></i><span data-i18n="nav.timelines.timeline_left">Timelines Left</span></a>
                        </li>
                        <li><a class="menu-item" href="timeline-right.html"><i class="material-icons"></i><span data-i18n="nav.timelines.timeline_right">Timelines Right</span></a>
                        </li>
                        <li><a class="menu-item" href="timeline-horizontal.html"><i class="material-icons"></i><span data-i18n="nav.timelines.timeline_horizontal">Timelines Horizontal</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="nav.users.main">Users</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="user-profile.html"><i class="material-icons"></i><span data-i18n="nav.users.user_profile">Users Profile</span></a>
                        </li>
                        <li><a class="menu-item" href="user-cards.html"><i class="material-icons"></i><span data-i18n="nav.users.user_cards">Users Cards</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">wallpaper</i><span class="menu-title" data-i18n="nav.gallery_pages.main">Gallery</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="gallery-grid.html"><i class="material-icons"></i><span data-i18n="nav.gallery_pages.gallery_grid">Gallery Grid</span></a>
                        </li>
                        <li><a class="menu-item" href="gallery-grid-with-desc.html"><i class="material-icons"></i><span data-i18n="nav.gallery_pages.gallery_grid_with_desc">Gallery Grid with Desc</span></a>
                        </li>
                        <li><a class="menu-item" href="gallery-masonry.html"><i class="material-icons"></i><span data-i18n="nav.gallery_pages.gallery_masonry">Masonry Gallery</span></a>
                        </li>
                        <li><a class="menu-item" href="gallery-masonry-with-desc.html"><i class="material-icons"></i><span data-i18n="nav.gallery_pages.gallery_masonry_with_desc">Masonry Gallery with Desc</span></a>
                        </li>
                        <li><a class="menu-item" href="gallery-hover-effects.html"><i class="material-icons"></i><span data-i18n="nav.gallery_pages.gallery_hover_effects">Hover Effects</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">search</i><span class="menu-title" data-i18n="nav.search_pages.main">Search</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="search-page.html"><i class="material-icons"></i><span data-i18n="nav.search_pages.search_page">Search Page</span></a>
                        </li>
                        <li><a class="menu-item" href="search-website.html"><i class="material-icons"></i><span data-i18n="nav.search_pages.search_website">Search Website</span></a>
                        </li>
                        <li><a class="menu-item" href="search-images.html"><i class="material-icons"></i><span data-i18n="nav.search_pages.search_images">Search Images</span></a>
                        </li>
                        <li><a class="menu-item" href="search-videos.html"><i class="material-icons"></i><span data-i18n="nav.search_pages.search_videos">Search Videos</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">lock_outline</i><span class="menu-title" data-i18n="nav.login_register_pages.main">Authentication</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="login-simple.html"><i class="material-icons"></i><span data-i18n="nav.login_register_pages.login_simple">Login Simple</span></a>
                        </li>
                        <li><a class="menu-item" href="login-with-bg.html"><i class="material-icons"></i><span data-i18n="nav.login_register_pages.login_with_bg">Login with Bg</span></a>
                        </li>
                        <li><a class="menu-item" href="login-with-bg-image.html"><i class="material-icons"></i><span data-i18n="nav.login_register_pages.login_with_bg_image">Login with Bg Image</span></a>
                        </li>
                        <li><a class="menu-item" href="login-with-navbar.html"><i class="material-icons"></i><span data-i18n="nav.login_register_pages.login_with_navbar">Login with Navbar</span></a>
                        </li>
                        <li><a class="menu-item" href="login-advanced.html"><i class="material-icons"></i><span data-i18n="nav.login_register_pages.login_advanced">Login Advanced</span></a>
                        </li>
                        <li><a class="menu-item" href="register-simple.html"><i class="material-icons"></i><span data-i18n="nav.login_register_pages.register_simple">Register Simple</span></a>
                        </li>
                        <li><a class="menu-item" href="register-with-bg.html"><i class="material-icons"></i><span data-i18n="nav.login_register_pages.register_with_bg">Register with Bg</span></a>
                        </li>
                        <li><a class="menu-item" href="register-with-bg-image.html"><i class="material-icons"></i><span data-i18n="nav.login_register_pages.register_with_bg_image">Register with Bg Image</span></a>
                        </li>
                        <li><a class="menu-item" href="register-with-navbar.html"><i class="material-icons"></i><span data-i18n="nav.login_register_pages.register_with_navbar">Register with Navbar</span></a>
                        </li>
                        <li><a class="menu-item" href="register-advanced.html"><i class="material-icons"></i><span data-i18n="nav.login_register_pages.register_advanced">Register Advanced</span></a>
                        </li>
                        <li><a class="menu-item" href="unlock-user.html"><i class="material-icons"></i><span data-i18n="nav.login_register_pages.unlock_user">Unlock User</span></a>
                        </li>
                        <li><a class="menu-item" href="recover-password.html"><i class="material-icons"></i><span data-i18n="nav.login_register_pages.recover_password">recover-password</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">error_outline</i><span class="menu-title" data-i18n="nav.error_pages.main">Error</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="error-400.html"><i class="material-icons"></i><span data-i18n="nav.error_pages.error_400">Error 400</span></a>
                        </li>
                        <li><a class="menu-item" href="error-400-with-navbar.html"><i class="material-icons"></i><span data-i18n="nav.error_pages.error_400_with_navbar">Error 400 with Navbar</span></a>
                        </li>
                        <li><a class="menu-item" href="error-401.html"><i class="material-icons"></i><span data-i18n="nav.error_pages.error_401">Error 401</span></a>
                        </li>
                        <li><a class="menu-item" href="error-401-with-navbar.html"><i class="material-icons"></i><span data-i18n="nav.error_pages.error_401_with_navbar">Error 401 with Navbar</span></a>
                        </li>
                        <li><a class="menu-item" href="error-403.html"><i class="material-icons"></i><span data-i18n="nav.error_pages.error_403">Error 403</span></a>
                        </li>
                        <li><a class="menu-item" href="error-403-with-navbar.html"><i class="material-icons"></i><span data-i18n="nav.error_pages.error_403_with_navbar">Error 403 with Navbar</span></a>
                        </li>
                        <li><a class="menu-item" href="error-404.html"><i class="material-icons"></i><span data-i18n="nav.error_pages.error_404">Error 404</span></a>
                        </li>
                        <li><a class="menu-item" href="error-404-with-navbar.html"><i class="material-icons"></i><span data-i18n="nav.error_pages.error_404_with_navbar">Error 404 with Navbar</span></a>
                        </li>
                        <li><a class="menu-item" href="error-500.html"><i class="material-icons"></i><span data-i18n="nav.error_pages.error_500">Error 500</span></a>
                        </li>
                        <li><a class="menu-item" href="error-500-with-navbar.html"><i class="material-icons"></i><span data-i18n="nav.error_pages.error_500_with_navbar">Error 500 with Navbar</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">filter_2</i><span class="menu-title" data-i18n="nav.other_pages.main">Others</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#"><i class="material-icons"></i><span data-i18n="nav.other_pages.coming_soon.main">Coming Soon</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="coming-soon-flat.html"><i class="material-icons"></i><span data-i18n="nav.other_pages.coming_soon.coming_soon_flat">Flat</span></a>
                                </li>
                                <li><a class="menu-item" href="coming-soon-bg-image.html"><i class="material-icons"></i><span data-i18n="nav.other_pages.coming_soon.coming_soon_bg_image">Bg image</span></a>
                                </li>
                                <li><a class="menu-item" href="coming-soon-bg-video.html"><i class="material-icons"></i><span data-i18n="nav.other_pages.coming_soon.coming_soon_bg_video">Bg video</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="under-maintenance.html"><i class="material-icons"></i><span data-i18n="nav.other_pages.under_maintenance">Maintenance</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="pricing.html"><i class="material-icons">money</i><span class="menu-title" data-i18n="">Pricing</span></a>
                </li>
                <li class=" nav-item"><a href="checkout-form.html"><i class="material-icons">credit_card</i><span class="menu-title" data-i18n="">Checkout</span></a>
                </li>
                <li class=" nav-item"><a href="faq.html"><i class="material-icons">help_outline</i><span class="menu-title" data-i18n="">FAQ</span></a>
                </li>
                <li class=" nav-item"><a href="knowledge-base.html"><i class="material-icons">info_outline</i><span class="menu-title" data-i18n="">Knowledge Base</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="nav.category.layouts">Layouts</span><i class="material-icons nav-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="Layouts">more_horiz</i>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">grid_on</i><span class="menu-title" data-i18n="nav.page_layouts.main">Page layouts</span><span class="badge badge badge-pill badge-danger float-right mr-2">New</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="layout-1-column.html"><i class="material-icons"></i><span data-i18n="nav.page_layouts.1_column">1 column</span></a>
                        </li>
                        <li><a class="menu-item" href="layout-2-columns.html"><i class="material-icons"></i><span data-i18n="nav.page_layouts.2_columns">2 columns</span></a>
                        </li>
                        <li><a class="menu-item" href="#"><i class="material-icons"></i><span data-i18n="nav.page_layouts.3_columns.main">Content Sidebar</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="layout-content-left-sidebar.html"><i class="material-icons"></i><span data-i18n="nav.page_layouts.3_columns.left_sidebar">Left sidebar</span></a>
                                </li>
                                <li><a class="menu-item" href="layout-content-left-sticky-sidebar.html"><i class="material-icons"></i><span data-i18n="nav.page_layouts.3_columns.left_sticky_sidebar">Left sticky sidebar</span></a>
                                </li>
                                <li><a class="menu-item" href="layout-content-right-sidebar.html"><i class="material-icons"></i><span data-i18n="nav.page_layouts.3_columns.right_sidebar">Right sidebar</span></a>
                                </li>
                                <li><a class="menu-item" href="layout-content-right-sticky-sidebar.html"><i class="material-icons"></i><span data-i18n="nav.page_layouts.3_columns.right_sticky_sidebar">Right sticky sidebar</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="#"><i class="material-icons"></i><span data-i18n="nav.page_layouts.3_columns_detached.main">Content Det. Sidebar</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="layout-content-detached-left-sidebar.html"><i class="material-icons"></i><span data-i18n="nav.page_layouts.3_columns_detached.detached_left_sidebar">Detached left sidebar</span></a>
                                </li>
                                <li><a class="menu-item" href="layout-content-detached-left-sticky-sidebar.html"><i class="material-icons"></i><span data-i18n="nav.page_layouts.3_columns_detached.detached_sticky_left_sidebar">Detached sticky left sidebar</span></a>
                                </li>
                                <li><a class="menu-item" href="layout-content-detached-right-sidebar.html"><i class="material-icons"></i><span data-i18n="nav.page_layouts.3_columns_detached.detached_right_sidebar">Detached right sidebar</span></a>
                                </li>
                                <li><a class="menu-item" href="layout-content-detached-right-sticky-sidebar.html"><i class="material-icons"></i><span data-i18n="nav.page_layouts.3_columns_detached.detached_sticky_right_sidebar">Detached sticky right sidebar</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="navigation-divider"></li>
                        <li><a class="menu-item" href="layout-fixed-navbar.html"><i class="material-icons"></i><span data-i18n="nav.page_layouts.fixed_navbar">Fixed navbar</span></a>
                        </li>
                        <li><a class="menu-item" href="layout-fixed-navigation.html"><i class="material-icons"></i><span data-i18n="nav.page_layouts.fixed_navigation">Fixed navigation</span></a>
                        </li>
                        <li><a class="menu-item" href="layout-fixed-navbar-navigation.html"><i class="material-icons"></i><span data-i18n="nav.page_layouts.fixed_navbar_navigation">Fixed navbar &amp; navigation</span></a>
                        </li>
                        <li><a class="menu-item" href="layout-fixed-navbar-footer.html"><i class="material-icons"></i><span data-i18n="nav.page_layouts.fixed_navbar_footer">Fixed navbar &amp; footer</span></a>
                        </li>
                        <li class="navigation-divider"></li>
                        <li><a class="menu-item" href="layout-fixed.html"><i class="material-icons"></i><span data-i18n="nav.page_layouts.fixed_layout">Fixed layout</span></a>
                        </li>
                        <li><a class="menu-item" href="layout-boxed.html"><i class="material-icons"></i><span data-i18n="nav.page_layouts.boxed_layout">Boxed layout</span></a>
                        </li>
                        <li><a class="menu-item" href="layout-static.html"><i class="material-icons"></i><span data-i18n="nav.page_layouts.static_layout">Static layout</span></a>
                        </li>
                        <li class="navigation-divider"></li>
                        <li><a class="menu-item" href="layout-light.html"><i class="material-icons"></i><span data-i18n="nav.page_layouts.light_layout">Light layout</span></a>
                        </li>
                        <li><a class="menu-item" href="layout-dark.html"><i class="material-icons"></i><span data-i18n="nav.page_layouts.dark_layout">Dark layout</span></a>
                        </li>
                        <li><a class="menu-item" href="layout-semi-dark.html"><i class="material-icons"></i><span data-i18n="nav.page_layouts.semi_dark_layout">Semi dark layout</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">menu</i><span class="menu-title" data-i18n="nav.navbars.main">Navbars</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="navbar-light.html"><i class="material-icons"></i><span data-i18n="nav.navbars.nav_light">Navbar Light</span></a>
                        </li>
                        <li><a class="menu-item" href="navbar-dark.html"><i class="material-icons"></i><span data-i18n="nav.navbars.nav_dark">Navbar Dark</span></a>
                        </li>
                        <li><a class="menu-item" href="navbar-semi-dark.html"><i class="material-icons"></i><span data-i18n="nav.navbars.nav_semi">Navbar Semi Dark</span></a>
                        </li>
                        <li><a class="menu-item" href="navbar-fixed-top.html"><i class="material-icons"></i><span data-i18n="nav.navbars.nav_fixed_top">Fixed Top</span></a>
                        </li>
                        <li><a class="menu-item" href="#"><i class="material-icons"></i><span data-i18n="nav.navbars.nav_hide_on_scroll.main">Hide on Scroll</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="navbar-hide-on-scroll-top.html"><i class="material-icons"></i><span data-i18n="nav.navbars.nav_hide_on_scroll.nav_hide_on_scroll_top">Hide on Scroll Top</span></a>
                                </li>
                                <li><a class="menu-item" href="navbar-hide-on-scroll-bottom.html"><i class="material-icons"></i><span data-i18n="nav.navbars.nav_hide_on_scroll.nav_hide_on_scroll_bottom">Hide on Scroll Bottom</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="navbar-components.html"><i class="material-icons"></i><span data-i18n="nav.navbars.nav_components">Navbar Components</span></a>
                        </li>
                        <li><a class="menu-item" href="navbar-styling.html"><i class="material-icons"></i><span data-i18n="nav.navbars.nav_styling">Navbar Styling</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">arrow_downward</i><span class="menu-title" data-i18n="nav.vertical_nav.main">Vertical Nav</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#"><i class="material-icons"></i><span data-i18n="nav.vertical_nav.vertical_navigation_types.main">Navigation Types</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="../material-vertical-menu-template"><i class="material-icons"></i><span data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_menu">Vertical Menu</span></a>
                                </li>
                                <li><a class="menu-item" href="../material-vertical-modern-menu-template"><i class="material-icons"></i><span data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_modern-menu">Vertical Modern Menu</span></a>
                                </li>
                                <li><a class="menu-item" href="../material-vertical-overlay-menu-template"><i class="material-icons"></i><span data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_overlay">Vertical Overlay</span></a>
                                </li>
                                <li><a class="menu-item" href="../material-vertical-compact-menu-template"><i class="material-icons"></i><span data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_compact">Vertical Compact</span></a>
                                </li>
                                <li><a class="menu-item" href="../material-vertical-content-menu-template"><i class="material-icons"></i><span data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_content">Vertical Content</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="vertical-nav-fixed.html"><i class="material-icons"></i><span data-i18n="nav.vertical_nav.vertical_nav_fixed">Fixed Navigation</span></a>
                        </li>
                        <li><a class="menu-item" href="vertical-nav-static.html"><i class="material-icons"></i><span data-i18n="nav.vertical_nav.vertical_nav_static">Static Navigation</span></a>
                        </li>
                        <li><a class="menu-item" href="vertical-nav-light.html"><i class="material-icons"></i><span data-i18n="nav.vertical_nav.vertical_nav_light">Navigation Light</span></a>
                        </li>
                        <li><a class="menu-item" href="vertical-nav-dark.html"><i class="material-icons"></i><span data-i18n="nav.vertical_nav.vertical_nav_dark">Navigation Dark</span></a>
                        </li>
                        <li><a class="menu-item" href="vertical-nav-accordion.html"><i class="material-icons"></i><span data-i18n="nav.vertical_nav.vertical_nav_accordion">Accordion Navigation</span></a>
                        </li>
                        <li><a class="menu-item" href="vertical-nav-collapsible.html"><i class="material-icons"></i><span data-i18n="nav.vertical_nav.vertical_nav_collapsible">Collapsible Navigation</span></a>
                        </li>
                        <li><a class="menu-item" href="vertical-nav-flipped.html"><i class="material-icons"></i><span data-i18n="nav.vertical_nav.vertical_nav_flipped">Flipped Navigation</span></a>
                        </li>
                        <li><a class="menu-item" href="vertical-nav-native-scroll.html"><i class="material-icons"></i><span data-i18n="nav.vertical_nav.vertical_nav_native_scroll">Native scroll</span></a>
                        </li>
                        <li><a class="menu-item" href="vertical-nav-right-side-icon.html"><i class="material-icons"></i><span data-i18n="nav.vertical_nav.vertical_nav_right_side_icon">Right side icons</span></a>
                        </li>
                        <li><a class="menu-item" href="vertical-nav-bordered.html"><i class="material-icons"></i><span data-i18n="nav.vertical_nav.vertical_nav_bordered">Bordered Navigation</span></a>
                        </li>
                        <li><a class="menu-item" href="vertical-nav-disabled-link.html"><i class="material-icons"></i><span data-i18n="nav.vertical_nav.vertical_nav_disabled_link">Disabled Navigation</span></a>
                        </li>
                        <li><a class="menu-item" href="vertical-nav-styling.html"><i class="material-icons"></i><span data-i18n="nav.vertical_nav.vertical_nav_styling">Navigation Styling</span></a>
                        </li>
                        <li><a class="menu-item" href="vertical-nav-tags-pills.html"><i class="material-icons"></i><span data-i18n="nav.vertical_nav.vertical_nav_tags_pills">Tags &amp; Pills</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">arrow_forward</i><span class="menu-title" data-i18n="nav.horz_nav.main">Horizontal Nav</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#"><i class="material-icons"></i><span data-i18n="nav.horz_nav.horizontal_navigation_types.main">Navigation Types</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="../material-horizontal-menu-template"><i class="material-icons"></i><span data-i18n="nav.horz_nav.horizontal_navigation_types.horizontal_left_icon_navigation">Left Icon Navigation</span></a>
                                </li>
                                <li><a class="menu-item" href="../material-horizontal-menu-template-nav"><i class="material-icons"></i><span data-i18n="nav.horz_nav.horizontal_navigation_types.horizontal_menu_template_nav">Top Icon Navigation</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">local_parking</i><span class="menu-title" data-i18n="nav.page_headers.main">Page Headers</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="headers-breadcrumbs-basic.html"><i class="material-icons"></i><span data-i18n="nav.page_headers.headers_breadcrumbs_basic">Breadcrumbs basic</span></a>
                        </li>
                        <li><a class="menu-item" href="headers-breadcrumbs-top.html"><i class="material-icons"></i><span data-i18n="nav.page_headers.headers_breadcrumbs_top">Breadcrumbs top</span></a>
                        </li>
                        <li><a class="menu-item" href="headers-breadcrumbs-bottom.html"><i class="material-icons"></i><span data-i18n="nav.page_headers.headers_breadcrumbs_bottom">Breadcrumbs bottom</span></a>
                        </li>
                        <li><a class="menu-item" href="headers-breadcrumbs-top-with-description.html"><i class="material-icons"></i><span data-i18n="nav.page_headers.headers_breadcrumbs_top_with_description">Breadcrumbs top with desc</span></a>
                        </li>
                        <li><a class="menu-item" href="headers-breadcrumbs-with-button.html"><i class="material-icons"></i><span data-i18n="nav.page_headers.headers_breadcrumbs_with_button">Breadcrumbs with button</span></a>
                        </li>
                        <li><a class="menu-item" href="headers-breadcrumbs-with-round-button.html"><i class="material-icons"></i><span data-i18n="nav.page_headers.headers_breadcrumbs_with_round_button">Breadcrumbs with button 2</span></a>
                        </li>
                        <li><a class="menu-item" href="headers-breadcrumbs-with-button-group.html"><i class="material-icons"></i><span data-i18n="nav.page_headers.headers_breadcrumbs_with_button_group">Breadcrumbs with buttons</span></a>
                        </li>
                        <li><a class="menu-item" href="headers-breadcrumbs-with-description.html"><i class="material-icons"></i><span data-i18n="nav.page_headers.headers_breadcrumbs_breadcrumbs_with_description">Breadcrumbs with desc</span></a>
                        </li>
                        <li><a class="menu-item" href="headers-breadcrumbs-with-search.html"><i class="material-icons"></i><span data-i18n="nav.page_headers.headers_breadcrumbs_breadcrumbs_with_search">Breadcrumbs with search</span></a>
                        </li>
                        <li><a class="menu-item" href="headers-breadcrumbs-with-stats.html"><i class="material-icons"></i><span data-i18n="nav.page_headers.headers_breadcrumbs_breadcrumbs_with_stats">Breadcrumbs with stats</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">copyright</i><span class="menu-title" data-i18n="nav.footers.main">Footers</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="footer-light.html"><i class="material-icons"></i><span data-i18n="nav.footers.footer_light">Footer Light</span></a>
                        </li>
                        <li><a class="menu-item" href="footer-dark.html"><i class="material-icons"></i><span data-i18n="nav.footers.footer_dark">Footer Dark</span></a>
                        </li>
                        <li><a class="menu-item" href="footer-transparent.html"><i class="material-icons"></i><span data-i18n="nav.footers.footer_transparent">Footer Transparent</span></a>
                        </li>
                        <li><a class="menu-item" href="footer-fixed.html"><i class="material-icons"></i><span data-i18n="nav.footers.footer_fixed">Footer Fixed</span></a>
                        </li>
                        <li><a class="menu-item" href="footer-components.html"><i class="material-icons"></i><span data-i18n="nav.footers.footer_components">Footer Components</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="nav.category.general">General</span><i class="material-icons nav-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="General">more_horiz</i>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">brush</i><span class="menu-title" data-i18n="nav.color_palette.main">Color Palette</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="color-palette-primary.html"><i class="material-icons"></i><span data-i18n="nav.color_palette.color_palette_primary">Primary palette</span></a>
                        </li>
                        <li><a class="menu-item" href="color-palette-danger.html"><i class="material-icons"></i><span data-i18n="nav.color_palette.color_palette_danger">Danger palette</span></a>
                        </li>
                        <li><a class="menu-item" href="color-palette-success.html"><i class="material-icons"></i><span data-i18n="nav.color_palette.color_palette_success">Success palette</span></a>
                        </li>
                        <li><a class="menu-item" href="color-palette-warning.html"><i class="material-icons"></i><span data-i18n="nav.color_palette.color_palette_warning">Warning palette</span></a>
                        </li>
                        <li><a class="menu-item" href="color-palette-info.html"><i class="material-icons"></i><span data-i18n="nav.color_palette.color_palette_info">Info palette</span></a>
                        </li>
                        <li class="navigation-divider"></li>
                        <li><a class="menu-item" href="color-palette-red.html"><i class="material-icons"></i><span data-i18n="nav.color_palette.color_palette_red">Red palette</span></a>
                        </li>
                        <li><a class="menu-item" href="color-palette-pink.html"><i class="material-icons"></i><span data-i18n="nav.color_palette.color_palette_pink">Pink palette</span></a>
                        </li>
                        <li><a class="menu-item" href="color-palette-purple.html"><i class="material-icons"></i><span data-i18n="nav.color_palette.color_palette_purple">Purple palette</span></a>
                        </li>
                        <li><a class="menu-item" href="color-palette-blue.html"><i class="material-icons"></i><span data-i18n="nav.color_palette.color_palette_blue">Blue palette</span></a>
                        </li>
                        <li><a class="menu-item" href="color-palette-cyan.html"><i class="material-icons"></i><span data-i18n="nav.color_palette.color_palette_cyan">Cyan palette</span></a>
                        </li>
                        <li><a class="menu-item" href="color-palette-teal.html"><i class="material-icons"></i><span data-i18n="nav.color_palette.color_palette_teal">Teal palette</span></a>
                        </li>
                        <li><a class="menu-item" href="color-palette-yellow.html"><i class="material-icons"></i><span data-i18n="nav.color_palette.color_palette_yellow">Yellow palette</span></a>
                        </li>
                        <li><a class="menu-item" href="color-palette-amber.html"><i class="material-icons"></i><span data-i18n="nav.color_palette.color_palette_amber">Amber palette</span></a>
                        </li>
                        <li><a class="menu-item" href="color-palette-blue-grey.html"><i class="material-icons"></i><span data-i18n="nav.color_palette.color_palette_blue_grey">Blue Grey palette</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">code</i><span class="menu-title" data-i18n="nav.starter_kit.main">Starter kit</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="../starter-kit/ltr/material-vertical-modern-menu-template/layout-1-column.html"><i class="material-icons"></i><span data-i18n="nav.starter_kit.1_column">1 column</span></a>
                        </li>
                        <li><a class="menu-item" href="../starter-kit/ltr/material-vertical-modern-menu-template/layout-2-columns.html"><i class="material-icons"></i><span data-i18n="nav.starter_kit.2_columns">2 columns</span></a>
                        </li>
                        <li><a class="menu-item" href="#"><i class="material-icons"></i><span data-i18n="nav.starter_kit.3_columns_detached.main">Content Det. Sidebar</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="../starter-kit/ltr/material-vertical-modern-menu-template/layout-content-detached-left-sidebar.html"><i class="material-icons"></i><span data-i18n="nav.starter_kit.3_columns_detached.3_columns_detached_left_sidebar">Detached left sidebar</span></a>
                                </li>
                                <li><a class="menu-item" href="../starter-kit/ltr/material-vertical-modern-menu-template/layout-content-detached-left-sticky-sidebar.html"><i class="material-icons"></i><span data-i18n="nav.starter_kit.3_columns_detached.3_columns_detached_sticky_left_sidebar">Detached sticky left sidebar</span></a>
                                </li>
                                <li><a class="menu-item" href="../starter-kit/ltr/material-vertical-modern-menu-template/layout-content-detached-right-sidebar.html"><i class="material-icons"></i><span data-i18n="nav.starter_kit.3_columns_detached.3_columns_detached_right_sidebar">Detached right sidebar</span></a>
                                </li>
                                <li><a class="menu-item" href="../starter-kit/ltr/material-vertical-modern-menu-template/layout-content-detached-right-sticky-sidebar.html"><i class="material-icons"></i><span data-i18n="nav.starter_kit.3_columns_detached.3_columns_detached_sticky_right_sidebar">Detached sticky right sidebar</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="navigation-divider"></li>
                        <li><a class="menu-item" href="../starter-kit/ltr/material-vertical-modern-menu-template/layout-fixed-navbar.html"><i class="material-icons"></i><span data-i18n="nav.starter_kit.fixed_navbar">Fixed navbar</span></a>
                        </li>
                        <li><a class="menu-item" href="../starter-kit/ltr/material-vertical-modern-menu-template/layout-fixed-navigation.html"><i class="material-icons"></i><span data-i18n="nav.starter_kit.fixed_navigation">Fixed navigation</span></a>
                        </li>
                        <li><a class="menu-item" href="../starter-kit/ltr/material-vertical-modern-menu-template/layout-fixed-navbar-navigation.html"><i class="material-icons"></i><span data-i18n="nav.starter_kit.fixed_navbar_navigation">Fixed navbar &amp; navigation</span></a>
                        </li>
                        <li><a class="menu-item" href="../starter-kit/ltr/material-vertical-modern-menu-template/layout-fixed-navbar-footer.html"><i class="material-icons"></i><span data-i18n="nav.starter_kit.fixed_navbar_footer">Fixed navbar &amp; footer</span></a>
                        </li>
                        <li class="navigation-divider"></li>
                        <li><a class="menu-item" href="../starter-kit/ltr/material-vertical-modern-menu-template/layout-fixed.html"><i class="material-icons"></i><span data-i18n="nav.starter_kit.fixed_layout">Fixed layout</span></a>
                        </li>
                        <li><a class="menu-item" href="../starter-kit/ltr/material-vertical-modern-menu-template/layout-boxed.html"><i class="material-icons"></i><span data-i18n="nav.starter_kit.boxed_layout">Boxed layout</span></a>
                        </li>
                        <li><a class="menu-item" href="../starter-kit/ltr/material-vertical-modern-menu-template/layout-static.html"><i class="material-icons"></i><span data-i18n="nav.starter_kit.static_layout">Static layout</span></a>
                        </li>
                        <li class="navigation-divider"></li>
                        <li><a class="menu-item" href="../starter-kit/ltr/material-vertical-modern-menu-template/layout-light.html"><i class="material-icons"></i><span data-i18n="nav.starter_kit.light_layout">Light layout</span></a>
                        </li>
                        <li><a class="menu-item" href="../starter-kit/ltr/material-vertical-modern-menu-template/layout-dark.html"><i class="material-icons"></i><span data-i18n="nav.starter_kit.dark_layout">Dark layout</span></a>
                        </li>
                        <li><a class="menu-item" href="../starter-kit/ltr/material-vertical-modern-menu-template/layout-semi-dark.html"><i class="material-icons"></i><span data-i18n="nav.starter_kit.semi_dark_layout">Semi dark layout</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="changelog.html"><i class="material-icons">content_copy</i><span class="menu-title" data-i18n="nav.changelog.main">Changelog</span><span class="badge badge badge-pill badge-warning float-right">3.0</span></a>
                </li>
                <li class="disabled nav-item"><a href="#"><i class="material-icons">visibility_off</i><span class="menu-title" data-i18n="nav.disabled_menu.main">Disabled Menu</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">swap_horiz</i><span class="menu-title" data-i18n="nav.menu_levels.main">Menu levels</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#"><i class="material-icons"></i><span data-i18n="nav.menu_levels.second_level">Second level</span></a>
                        </li>
                        <li><a class="menu-item" href="#"><i class="material-icons"></i><span data-i18n="nav.menu_levels.second_level_child.main">Second level child</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="#"><i class="material-icons"></i><span data-i18n="nav.menu_levels.second_level_child.third_level">Third level</span></a>
                                </li>
                                <li><a class="menu-item" href="#"><i class="material-icons"></i><span data-i18n="nav.menu_levels.second_level_child.third_level_child.main">Third level child</span></a>
                                    <ul class="menu-content">
                                        <li><a class="menu-item" href="#"><i class="material-icons"></i><span data-i18n="nav.menu_levels.second_level_child.third_level_child.fourth_level1">Fourth level</span></a>
                                        </li>
                                        <li><a class="menu-item" href="#"><i class="material-icons"></i><span data-i18n="nav.menu_levels.second_level_child.third_level_child.fourth_level2">Fourth level</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="nav.category.ui">User Interface</span><i class="material-icons nav-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="User Interface">more_horiz</i>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">straighten</i><span class="menu-title" data-i18n="nav.material_components.main">Material Components</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="material-component-buttons.html"><i class="material-icons"></i><span data-i18n="nav.material_components.material_buttons">Buttons</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-cards.html"><i class="material-icons"></i><span data-i18n="nav.material_components.material_cards">Cards</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-chips.html"><i class="material-icons"></i><span data-i18n="nav.material_components.material_chips">Chips</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-datatables.html"><i class="material-icons"></i><span data-i18n="nav.material_components.material_datatables">Data tables</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-dialogs.html"><i class="material-icons"></i><span data-i18n="nav.material_components.material_dialogs">Dialogs</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-elevation-shadows.html"><i class="material-icons"></i><span data-i18n="nav.material_components.material_elevation_shadows">Elevation Shadows</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-expansion-panels.html"><i class="material-icons"></i><span data-i18n="nav.material_components.material_expansion_panels">Expansion Panels</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-icons.html"><i class="material-icons"></i><span data-i18n="nav.material_components.material_icons">Icons</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-menu.html"><i class="material-icons"></i><span data-i18n="nav.material_components.material_menu">Menu</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-navigation.html"><i class="material-icons"></i><span data-i18n="nav.material_components.material_navigation">Navigation Drawer</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-pickers.html"><i class="material-icons"></i><span data-i18n="nav.material_components.material_pickers">Pickers</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-progress.html"><i class="material-icons"></i><span data-i18n="nav.material_components.material_progress">Progress</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-selection-controls.html"><i class="material-icons"></i><span data-i18n="nav.material_components.material_selection_controls">Selection Controls</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-snackbars.html"><i class="material-icons"></i><span data-i18n="nav.material_components.material_snackbars">Snackbars</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-steppers.html"><i class="material-icons"></i><span data-i18n="nav.material_components.material_steppers">Steppers</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-tabs.html"><i class="material-icons"></i><span data-i18n="nav.material_components.material_tabs">Tabs</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-textfields.html"><i class="material-icons"> </i><span data-i18n="nav.material_components.material_textfields">Text fields</span></a>
                        </li>
                        <li><a class="menu-item" href="navbar-components.html"><i class="material-icons"> </i><span data-i18n="nav.material_components.material_toolbars">Toolbars</span></a>
                        </li>
                        <li><a class="menu-item" href="component-tooltips.html"><i class="material-icons"> </i><span data-i18n="nav.material_components.material_tooltips">Tooltips</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">crop_landscape</i><span class="menu-title" data-i18n="nav.cards.main">Cards</span><span class="badge badge badge-success float-right mr-2">New</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="card-bootstrap.html"><i class="material-icons"></i><span data-i18n="nav.cards.card_bootstrap">Bootstrap</span></a>
                        </li>
                        <li><a class="menu-item" href="card-headings.html"><i class="material-icons"></i><span data-i18n="nav.cards.card_headings">Headings</span></a>
                        </li>
                        <li><a class="menu-item" href="card-options.html"><i class="material-icons"></i><span data-i18n="nav.cards.card_options">Options</span></a>
                        </li>
                        <li><a class="menu-item" href="card-actions.html"><i class="material-icons"></i><span data-i18n="nav.cards.card_actions">Action</span></a>
                        </li>
                        <li><a class="menu-item" href="card-draggable.html"><i class="material-icons"></i><span data-i18n="nav.cards.card_draggable">Draggable</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">star_border</i><span class="menu-title" data-i18n="nav.advance_cards.main">Advance Cards</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="card-statistics.html"><i class="material-icons"></i><span data-i18n="nav.cards.card_statistics">Statistics</span></a>
                        </li>
                        <li><a class="menu-item" href="card-weather.html"><i class="material-icons"></i><span data-i18n="nav.cards.card_weather">Weather</span></a>
                        </li>
                        <li><a class="menu-item" href="card-charts.html"><i class="material-icons"></i><span data-i18n="nav.cards.card_charts">Charts</span></a>
                        </li>
                        <li><a class="menu-item" href="card-interactive.html"><i class="material-icons"></i><span data-i18n="nav.cards.card_interactive">Interactive</span></a>
                        </li>
                        <li><a class="menu-item" href="card-maps.html"><i class="material-icons"></i><span data-i18n="nav.cards.card_maps">Maps</span></a>
                        </li>
                        <li><a class="menu-item" href="card-social.html"><i class="material-icons"></i><span data-i18n="nav.cards.card_social">Social</span></a>
                        </li>
                        <li><a class="menu-item" href="card-ecommerce.html"><i class="material-icons"></i><span data-i18n="nav.cards.card_ecommerce">E-Commerce</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">details</i><span class="menu-title" data-i18n="nav.content.main">Content</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="content-grid.html"><i class="material-icons"></i><span data-i18n="nav.content.content_grid">Grid</span></a>
                        </li>
                        <li><a class="menu-item" href="content-typography.html"><i class="material-icons"></i><span data-i18n="nav.content.content_typography">Typography</span></a>
                        </li>
                        <li><a class="menu-item" href="content-text-utilities.html"><i class="material-icons"></i><span data-i18n="nav.content.content_text_utilities">Text utilities</span></a>
                        </li>
                        <li><a class="menu-item" href="content-syntax-highlighter.html"><i class="material-icons"></i><span data-i18n="nav.content.content_syntax_highlighter">Syntax highlighter</span></a>
                        </li>
                        <li><a class="menu-item" href="content-helper-classes.html"><i class="material-icons"></i><span data-i18n="nav.content.content_helper_classes">Helper classes</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">dvr</i><span class="menu-title" data-i18n="nav.components.main">Components</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="component-alerts.html"><i class="material-icons"></i><span data-i18n="nav.components.component_alerts">Alerts</span></a>
                        </li>
                        <li><a class="menu-item" href="component-callout.html"><i class="material-icons"></i><span data-i18n="nav.components.component_callout">Callout</span></a>
                        </li>
                        <li><a class="menu-item" href="component-buttons-basic.html"><i class="material-icons"></i><span data-i18n="nav.components.components_buttons.component_buttons_basic">Buttons</span></a>
                        </li>
                        <li><a class="menu-item" href="component-carousel.html"><i class="material-icons"></i><span data-i18n="nav.components.component_carousel">Carousel</span></a>
                        </li>
                        <li><a class="menu-item" href="component-collapse.html"><i class="material-icons"></i><span data-i18n="nav.components.component_collapse">Collapse</span></a>
                        </li>
                        <li><a class="menu-item" href="component-dropdowns.html"><i class="material-icons"></i><span data-i18n="nav.components.component_dropdowns">Dropdowns</span></a>
                        </li>
                        <li><a class="menu-item" href="component-list-group.html"><i class="material-icons"></i><span data-i18n="nav.components.component_list_group">List Group</span></a>
                        </li>
                        <li><a class="menu-item" href="component-modals.html"><i class="material-icons"></i><span data-i18n="nav.components.component_modals">Modals</span></a>
                        </li>
                        <li><a class="menu-item" href="component-pagination.html"><i class="material-icons"></i><span data-i18n="nav.components.component_pagination">Pagination</span></a>
                        </li>
                        <li><a class="menu-item" href="component-navs-component.html"><i class="material-icons"></i><span data-i18n="nav.components.component_navs_component">Navs Component</span></a>
                        </li>
                        <li><a class="menu-item" href="component-tabs-component.html"><i class="material-icons"></i><span data-i18n="nav.components.component_tabs_component">Tabs Component</span></a>
                        </li>
                        <li><a class="menu-item" href="component-pills-component.html"><i class="material-icons"></i><span data-i18n="nav.components.component_pills_component">Pills Component</span></a>
                        </li>
                        <li><a class="menu-item" href="component-tooltips.html"><i class="material-icons"></i><span data-i18n="nav.components.component_tooltips">Tooltips</span></a>
                        </li>
                        <li><a class="menu-item" href="component-popovers.html"><i class="material-icons"></i><span data-i18n="nav.components.component_popovers">Popovers</span></a>
                        </li>
                        <li><a class="menu-item" href="component-badges.html"><i class="material-icons"></i><span data-i18n="nav.components.component_badges">Badges</span></a>
                        </li>
                        <li><a class="menu-item" href="component-pill-badges.html"><i class="material-icons"></i><span>Pill Badges</span></a>
                        </li>
                        <li><a class="menu-item" href="component-progress.html"><i class="material-icons"></i><span data-i18n="nav.components.component_progress">Progress</span></a>
                        </li>
                        <li><a class="menu-item" href="component-media-objects.html"><i class="material-icons"></i><span data-i18n="nav.components.component_media_objects">Media Objects</span></a>
                        </li>
                        <li><a class="menu-item" href="component-scrollable.html"><i class="material-icons"></i><span data-i18n="nav.components.component_scrollable">Scrollable</span></a>
                        </li>
                        <li><a class="menu-item" href="component-spinners.html"><i class="material-icons"></i><span data-i18n="nav.components.component_spinners">Spinners</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">track_changes</i><span class="menu-title" data-i18n="nav.extra_components.main">Extra Components</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="ex-component-sweet-alerts.html"><i class="material-icons"></i><span data-i18n="nav.extra_components.ex_component_sweet_alerts">Sweet Alerts</span></a>
                        </li>
                        <li><a class="menu-item" href="ex-component-tree-views.html"><i class="material-icons"></i><span data-i18n="nav.extra_components.ex_component_tree_views">Tree Views</span></a>
                        </li>
                        <li><a class="menu-item" href="ex-component-toastr.html"><i class="material-icons"></i><span data-i18n="nav.extra_components.ex_component_toastr">Toastr</span></a>
                        </li>
                        <li><a class="menu-item" href="ex-component-ratings.html"><i class="material-icons"></i><span data-i18n="nav.extra_components.ex_component_ratings">Ratings</span></a>
                        </li>
                        <li><a class="menu-item" href="ex-component-noui-slider.html"><i class="material-icons"></i><span data-i18n="nav.extra_components.ex_component_noui_slider">NoUI Slider</span></a>
                        </li>
                        <li><a class="menu-item" href="ex-component-date-time-dropper.html"><i class="material-icons"></i><span data-i18n="nav.extra_components.ex_component_date_time_dropper">Date Time Dropper</span></a>
                        </li>
                        <li><a class="menu-item" href="ex-component-lists.html"><i class="material-icons"></i><span data-i18n="nav.extra_components.ex_component_lists">Lists</span></a>
                        </li>
                        <li><a class="menu-item" href="ex-component-toolbar.html"><i class="material-icons"></i><span data-i18n="nav.extra_components.ex_component_toolbar">Toolbar</span></a>
                        </li>
                        <li><a class="menu-item" href="ex-component-knob.html"><i class="material-icons"></i><span data-i18n="nav.extra_components.ex_component_knob">Knob</span></a>
                        </li>
                        <li><a class="menu-item" href="ex-component-long-press.html"><i class="material-icons"></i><span data-i18n="nav.extra_components.ex_component_long_press">Long Press</span></a>
                        </li>
                        <li><a class="menu-item" href="ex-component-offline.html"><i class="material-icons"></i><span data-i18n="nav.extra_components.ex_component_offline">Offline</span></a>
                        </li>
                        <li><a class="menu-item" href="ex-component-zoom.html"><i class="material-icons"></i><span data-i18n="nav.extra_components.ex_component_zoom">Zoom</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="animation.html"><i class="material-icons">hdr_weak</i><span class="menu-title" data-i18n="nav.animation.main">Animation</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="nav.category.forms">Forms</span><i class="material-icons nav-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="Forms">more_horiz</i>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">format_list_bulleted</i><span class="menu-title" data-i18n="nav.form_elements.main">Form Elements</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="form-inputs.html"><i class="material-icons"></i><span data-i18n="nav.form_elements.form_inputs">Form Inputs</span></a>
                        </li>
                        <li><a class="menu-item" href="form-input-groups.html"><i class="material-icons"></i><span data-i18n="nav.form_elements.form_input_groups">Input Groups</span></a>
                        </li>
                        <li><a class="menu-item" href="form-input-grid.html"><i class="material-icons"></i><span data-i18n="nav.form_elements.form_input_grid">Input Grid</span></a>
                        </li>
                        <li><a class="menu-item" href="form-extended-inputs.html"><i class="material-icons"></i><span data-i18n="nav.form_elements.form_extended_inputs">Extended Inputs</span></a>
                        </li>
                        <li><a class="menu-item" href="form-checkboxes-radios.html"><i class="material-icons"></i><span data-i18n="nav.form_elements.form_checkboxes_radios">Checkboxes &amp; Radios</span></a>
                        </li>
                        <li><a class="menu-item" href="form-switch.html"><i class="material-icons"></i><span data-i18n="nav.form_elements.form_switch">Switch</span></a>
                        </li>
                        <li><a class="menu-item" href="#"><i class="material-icons"></i><span data-i18n="nav.form_elements.form_select.main">Select</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="form-select2.html"><i class="material-icons"></i><span data-i18n="nav.form_elements.form_select.form_select2">Select2</span></a>
                                </li>
                                <li><a class="menu-item" href="form-selectize.html"><i class="material-icons"></i><span data-i18n="nav.form_elements.form_select.form_selectize">Selectize</span></a>
                                </li>
                                <li><a class="menu-item" href="form-selectivity.html"><i class="material-icons"></i><span data-i18n="nav.form_elements.form_select.form_selectivity">Selectivity</span></a>
                                </li>
                                <li><a class="menu-item" href="form-select-box-it.html"><i class="material-icons"></i><span data-i18n="nav.form_elements.form_select.form_select_box_it">Select Box It</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="form-dual-listbox.html"><i class="material-icons"></i><span data-i18n="nav.form_elements.form_dual_listbox">Dual Listbox</span></a>
                        </li>
                        <li><a class="menu-item" href="form-tags-input.html"><i class="material-icons"></i><span data-i18n="nav.form_elements.form_tags_input">Tags Input</span></a>
                        </li>
                        <li><a class="menu-item" href="form-validation.html"><i class="material-icons"></i><span data-i18n="nav.form_elements.form_validation">Validation</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">grid_on</i><span class="menu-title" data-i18n="nav.form_layouts.main">Form Layouts</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="form-layout-basic.html"><i class="material-icons"></i><span data-i18n="nav.form_layouts.form_layout_basic">Basic Forms</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-horizontal.html"><i class="material-icons"></i><span data-i18n="nav.form_layouts.form_layout_horizontal">Horizontal Forms</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-hidden-labels.html"><i class="material-icons"></i><span data-i18n="nav.form_layouts.form_layout_hidden_labels">Hidden Labels</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-form-actions.html"><i class="material-icons"></i><span data-i18n="nav.form_layouts.form_layout_form_actions">Form Actions</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-row-separator.html"><i class="material-icons"></i><span data-i18n="nav.form_layouts.form_layout_row_separator">Row Separator</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-bordered.html"><i class="material-icons"></i><span data-i18n="nav.form_layouts.form_layout_bordered">Bordered</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-striped-rows.html"><i class="material-icons"></i><span data-i18n="nav.form_layouts.form_layout_striped_rows">Striped Rows</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-striped-labels.html"><i class="material-icons"></i><span data-i18n="nav.form_layouts.form_layout_striped_labels">Striped Labels</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">linear_scale</i><span class="menu-title" data-i18n="nav.form_wizard.main">Form Wizard</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="form-wizard-circle-style.html"><i class="material-icons"></i><span data-i18n="nav.form_wizard.form_wizard_circle_style">Circle Style</span></a>
                        </li>
                        <li><a class="menu-item" href="form-wizard-notification-style.html"><i class="material-icons"></i><span data-i18n="nav.form_wizard.form_wizard_notification_style">Notification Style</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="form-repeater.html"><i class="material-icons">repeat</i><span class="menu-title" data-i18n="nav.form_repeater.main">Form Repeater</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="nav.category.tables">Tables</span><i class="material-icons nav-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="Tables">more_horiz</i>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">format_list_numbered</i><span class="menu-title" data-i18n="nav.bootstrap_tables.main">Bootstrap Tables</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="table-basic.html"><i class="material-icons"></i><span data-i18n="nav.bootstrap_tables.table_basic">Basic Tables</span></a>
                        </li>
                        <li><a class="menu-item" href="table-border.html"><i class="material-icons"></i><span data-i18n="nav.bootstrap_tables.table_border">Table Border</span></a>
                        </li>
                        <li><a class="menu-item" href="table-sizing.html"><i class="material-icons"></i><span data-i18n="nav.bootstrap_tables.table_sizing">Table Sizing</span></a>
                        </li>
                        <li><a class="menu-item" href="table-styling.html"><i class="material-icons"></i><span data-i18n="nav.bootstrap_tables.table_styling">Table Styling</span></a>
                        </li>
                        <li><a class="menu-item" href="table-components.html"><i class="material-icons"></i><span data-i18n="nav.bootstrap_tables.table_components">Table Components</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">select_all</i><span class="menu-title" data-i18n="nav.data_tables.main">DataTables</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="dt-basic-initialization.html"><i class="material-icons"></i><span data-i18n="nav.data_tables.dt_basic_initialization">Basic Initialisation</span></a>
                        </li>
                        <li><a class="menu-item" href="dt-advanced-initialization.html"><i class="material-icons"></i><span data-i18n="nav.data_tables.dt_advanced_initialization">Advanced initialisation</span></a>
                        </li>
                        <li><a class="menu-item" href="dt-styling.html"><i class="material-icons"></i><span data-i18n="nav.data_tables.dt_styling">Styling</span></a>
                        </li>
                        <li><a class="menu-item" href="dt-data-sources.html"><i class="material-icons"></i><span data-i18n="nav.data_tables.dt_data_sources">Data Sources</span></a>
                        </li>
                        <li><a class="menu-item" href="dt-api.html"><i class="material-icons"></i><span data-i18n="nav.data_tables.dt_api">API</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">border_all</i><span class="menu-title" data-i18n="nav.datatable_extensions.main">DataTables Ext.</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="dt-extensions-autofill.html"><i class="material-icons"></i><span data-i18n="nav.datatable_extensions.dt_extensions_autofill">AutoFill</span></a>
                        </li>
                        <li><a class="menu-item" href="#"><i class="material-icons"></i><span data-i18n="nav.datatable_extensions.datatable_buttons.main">Buttons</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="dt-extensions-buttons-basic.html"><i class="material-icons"></i><span data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_basic">Basic Buttons</span></a>
                                </li>
                                <li><a class="menu-item" href="dt-extensions-buttons-html-5-data-export.html"><i class="material-icons"></i><span data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_html_5_data_export">HTML 5 Data Export</span></a>
                                </li>
                                <li><a class="menu-item" href="dt-extensions-buttons-flash-data-export.html"><i class="material-icons"></i><span data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_flash_data_export">Flash Data Export</span></a>
                                </li>
                                <li><a class="menu-item" href="dt-extensions-buttons-column-visibility.html"><i class="material-icons"></i><span data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_column_visibility">Column Visibility</span></a>
                                </li>
                                <li><a class="menu-item" href="dt-extensions-buttons-print.html"><i class="material-icons"></i><span data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_print">Print</span></a>
                                </li>
                                <li><a class="menu-item" href="dt-extensions-buttons-api.html"><i class="material-icons"></i><span data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_api">API</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="dt-extensions-column-reorder.html"><i class="material-icons"></i><span data-i18n="nav.datatable_extensions.dt_extensions_column_reorder">Column Reorder</span></a>
                        </li>
                        <li><a class="menu-item" href="dt-extensions-fixed-columns.html"><i class="material-icons"></i><span data-i18n="nav.datatable_extensions.dt_extensions_fixed_columns">Fixed Columns</span></a>
                        </li>
                        <li><a class="menu-item" href="dt-extensions-key-table.html"><i class="material-icons"></i><span data-i18n="nav.datatable_extensions.dt_extensions_key_table">Key Table</span></a>
                        </li>
                        <li><a class="menu-item" href="dt-extensions-row-reorder.html"><i class="material-icons"></i><span data-i18n="nav.datatable_extensions.dt_extensions_row_reorder">Row Reorder</span></a>
                        </li>
                        <li><a class="menu-item" href="dt-extensions-select.html"><i class="material-icons"></i><span data-i18n="nav.datatable_extensions.dt_extensions_select">Select</span></a>
                        </li>
                        <li><a class="menu-item" href="dt-extensions-fix-header.html"><i class="material-icons"></i><span data-i18n="nav.datatable_extensions.dt_extensions_fix_header">Fix Header</span></a>
                        </li>
                        <li><a class="menu-item" href="dt-extensions-responsive.html"><i class="material-icons"></i><span data-i18n="nav.datatable_extensions.dt_extensions_responsive">Responsive</span></a>
                        </li>
                        <li><a class="menu-item" href="dt-extensions-column-visibility.html"><i class="material-icons"></i><span data-i18n="nav.datatable_extensions.dt_extensions_column_visibility">Column Visibility</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">format_list_bulleted</i><span class="menu-title" data-i18n="nav.handson_table.main">Handson Table</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="handson-table-appearance.html"><i class="material-icons"></i><span data-i18n="nav.handson_table.handson_table_appearance">Appearance</span></a>
                        </li>
                        <li><a class="menu-item" href="handson-table-rows-columns.html"><i class="material-icons"></i><span data-i18n="nav.handson_table.handson_table_rows_columns">Rows Columns</span></a>
                        </li>
                        <li><a class="menu-item" href="handson-table-rows-only.html"><i class="material-icons"></i><span data-i18n="nav.handson_table.handson_table_rows_only">Rows Only</span></a>
                        </li>
                        <li><a class="menu-item" href="handson-table-columns-only.html"><i class="material-icons"></i><span data-i18n="nav.handson_table.handson_table_columns_only">Columns Only</span></a>
                        </li>
                        <li><a class="menu-item" href="handson-table-data-operations.html"><i class="material-icons"></i><span data-i18n="nav.handson_table.handson_table_data_operations">Data Operations</span></a>
                        </li>
                        <li><a class="menu-item" href="handson-table-cell-features.html"><i class="material-icons"></i><span data-i18n="nav.handson_table.handson_table_cell_features">Cell Features</span></a>
                        </li>
                        <li><a class="menu-item" href="handson-table-cell-types.html"><i class="material-icons"></i><span data-i18n="nav.handson_table.handson_table_cell_types">Cell Types</span></a>
                        </li>
                        <li><a class="menu-item" href="handson-table-integrations.html"><i class="material-icons"></i><span data-i18n="nav.handson_table.handson_table_integrations">Integrations</span></a>
                        </li>
                        <li><a class="menu-item" href="handson-table-utilities.html"><i class="material-icons"></i><span data-i18n="nav.handson_table.handson_table_utilities">Utilities</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="table-jsgrid.html"><i class="material-icons">grid_on</i><span class="menu-title" data-i18n="nav.table_jsgrid.main">jsGrid</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="nav.category.addons">Add Ons</span><i class="material-icons nav-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="Add Ons">more_horiz</i>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">edit</i><span class="menu-title" data-i18n="nav.editors.main">Editors</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="editor-quill.html"><i class="material-icons"></i><span data-i18n="nav.editors.editor_quill">Quill</span></a>
                        </li>
                        <li><a class="menu-item" href="editor-ckeditor.html"><i class="material-icons"></i><span data-i18n="nav.editors.editor_ckeditor">CKEditor</span></a>
                        </li>
                        <li><a class="menu-item" href="editor-summernote.html"><i class="material-icons"></i><span data-i18n="nav.editors.editor_summernote">Summernote</span></a>
                        </li>
                        <li><a class="menu-item" href="editor-tinymce.html"><i class="material-icons"></i><span data-i18n="nav.editors.editor_tinymce">TinyMCE</span></a>
                        </li>
                        <li><a class="menu-item" href="#"><i class="material-icons"></i><span data-i18n="nav.editors.code_editor_codemirror.main">Code Editor</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="code-editor-codemirror.html"><i class="material-icons"></i><span data-i18n="nav.editors.code_editor_codemirror.code_editor_codemirror">CodeMirror</span></a>
                                </li>
                                <li><a class="menu-item" href="code-editor-ace.html"><i class="material-icons"></i><span data-i18n="nav.editors.code_editor_codemirror.code_editor_ace">Ace</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="pickers-color-picker.html"><i class="material-icons">calendar_today</i><span class="menu-title" data-i18n="nav.pickers.pickers_color_picker">Color Picker</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">code</i><span class="menu-title" data-i18n="nav.jquery_ui.main">jQuery UI</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="jquery-ui-interactions.html"><i class="material-icons"></i><span data-i18n="nav.jquery_ui.jquery_ui_interactions">Interactions</span></a>
                        </li>
                        <li><a class="menu-item" href="jquery-ui-navigations.html"><i class="material-icons"></i><span data-i18n="nav.jquery_ui.jquery_ui_navigations">Navigations</span></a>
                        </li>
                        <li><a class="menu-item" href="jquery-ui-date-pickers.html"><i class="material-icons"></i><span data-i18n="nav.jquery_ui.jquery_ui_date_pickers">Date Pickers</span></a>
                        </li>
                        <li><a class="menu-item" href="jquery-ui-autocomplete.html"><i class="material-icons"></i><span data-i18n="nav.jquery_ui.jquery_ui_autocomplete">Autocomplete</span></a>
                        </li>
                        <li><a class="menu-item" href="jquery-ui-buttons-select.html"><i class="material-icons"></i><span data-i18n="nav.jquery_ui.jquery_ui_buttons_select">Buttons &amp; Select</span></a>
                        </li>
                        <li><a class="menu-item" href="jquery-ui-slider-spinner.html"><i class="material-icons"></i><span data-i18n="nav.jquery_ui.jquery_ui_slider_spinner">Slider &amp; Spinner</span></a>
                        </li>
                        <li><a class="menu-item" href="jquery-ui-dialog-tooltip.html"><i class="material-icons"></i><span data-i18n="nav.jquery_ui.jquery_ui_dialog_tooltip">Dialog &amp; Tooltip</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="add-on-block-ui.html"><i class="material-icons">aspect_ratio</i><span class="menu-title" data-i18n="nav.add_on_block_ui.main">Block UI</span></a>
                </li>
                <li class=" nav-item"><a href="add-on-image-cropper.html"><i class="material-icons">crop</i><span class="menu-title" data-i18n="nav.add_on_image_cropper.main">Image Cropper</span></a>
                </li>
                <li class=" nav-item"><a href="add-on-drag-drop.html"><i class="material-icons">drag_indicator</i><span class="menu-title" data-i18n="nav.add_on_drag_drop.main">Drag &amp; Drop</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">open_in_browser</i><span class="menu-title" data-i18n="nav.file_uploaders.main">File Uploader</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="file-uploader-dropzone.html"><i class="material-icons"></i><span data-i18n="nav.file_uploaders.file_uploader_dropzone">Dropzone</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">language</i><span class="menu-title" data-i18n="nav.internationalization.main">Internationalization</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="i18n-resources.html"><i class="material-icons"></i><span data-i18n="nav.internationalization.i18n_resources">Resources</span></a>
                        </li>
                        <li><a class="menu-item" href="i18n-xhr-backend.html"><i class="material-icons"></i><span data-i18n="nav.internationalization.i18n_xhr_backend">XHR Backend</span></a>
                        </li>
                        <li><a class="menu-item" href="i18n-query-string.html?lng=en"><i class="material-icons"></i><span data-i18n="nav.internationalization.i18n_query_string">Query String</span></a>
                        </li>
                        <li><a class="menu-item" href="i18n-on-init.html"><i class="material-icons"></i><span data-i18n="nav.internationalization.i18n_on_init">On Init</span></a>
                        </li>
                        <li><a class="menu-item" href="i18n-after-init.html"><i class="material-icons"></i><span data-i18n="nav.internationalization.i18n_after_init">After Init</span></a>
                        </li>
                        <li><a class="menu-item" href="i18n-fallback.html"><i class="material-icons"></i><span data-i18n="nav.internationalization.i18n_fallback">Fallback</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="nav.category.charts_maps">Charts &amp; Maps</span><i class="material-icons nav-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="Charts &amp; Maps">more_horiz</i>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">bar_chart</i><span class="menu-title" data-i18n="nav.google_charts.main">Google Charts</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="google-bar-charts.html"><i class="material-icons"></i><span data-i18n="nav.google_charts.google_bar_charts">Bar charts</span></a>
                        </li>
                        <li><a class="menu-item" href="google-line-charts.html"><i class="material-icons"></i><span data-i18n="nav.google_charts.google_line_charts">Line charts</span></a>
                        </li>
                        <li><a class="menu-item" href="google-pie-charts.html"><i class="material-icons"></i><span data-i18n="nav.google_charts.google_pie_charts">Pie charts</span></a>
                        </li>
                        <li><a class="menu-item" href="google-scatter-charts.html"><i class="material-icons"></i><span data-i18n="nav.google_charts.google_scatter_charts">Scatter charts</span></a>
                        </li>
                        <li><a class="menu-item" href="google-bubble-charts.html"><i class="material-icons"></i><span data-i18n="nav.google_charts.google_bubble_charts">Bubble charts</span></a>
                        </li>
                        <li><a class="menu-item" href="google-other-charts.html"><i class="material-icons"></i><span data-i18n="nav.google_charts.google_other_charts">Other charts</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">crop_original</i><span class="menu-title" data-i18n="nav.echarts.main">Echarts</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="echarts-line-area-charts.html"><i class="material-icons"></i><span data-i18n="nav.echarts.echarts_line_area_charts">Line &amp; Area charts</span></a>
                        </li>
                        <li><a class="menu-item" href="echarts-bar-column-charts.html"><i class="material-icons"></i><span data-i18n="nav.echarts.echarts_bar_column_charts">Bar &amp; Column charts</span></a>
                        </li>
                        <li><a class="menu-item" href="echarts-pie-doughnut-charts.html"><i class="material-icons"></i><span data-i18n="nav.echarts.echarts_pie_doughnut_charts">Pie &amp; Doughnut charts</span></a>
                        </li>
                        <li><a class="menu-item" href="echarts-scatter-charts.html"><i class="material-icons"></i><span data-i18n="nav.echarts.echarts_scatter_charts">Scatter charts</span></a>
                        </li>
                        <li><a class="menu-item" href="echarts-radar-chord-charts.html"><i class="material-icons"></i><span data-i18n="nav.echarts.echarts_radar_chord_charts">Radar &amp; Chord charts</span></a>
                        </li>
                        <li><a class="menu-item" href="echarts-funnel-gauges-charts.html"><i class="material-icons"></i><span data-i18n="nav.echarts.echarts_funnel_gauges_charts">Funnel &amp; Gauges charts</span></a>
                        </li>
                        <li><a class="menu-item" href="echarts-combination-charts.html"><i class="material-icons"></i><span data-i18n="nav.echarts.echarts_combination_charts">Combination charts</span></a>
                        </li>
                        <li><a class="menu-item" href="echarts-advance-charts.html"><i class="material-icons"></i><span data-i18n="nav.echarts.echarts_advance_charts">Advance charts</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">show_chart</i><span class="menu-title" data-i18n="nav.chartjs.main">Chartjs</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="chartjs-line-charts.html"><i class="material-icons"></i><span data-i18n="nav.chartjs.chartjs_line_charts">Line charts</span></a>
                        </li>
                        <li><a class="menu-item" href="chartjs-bar-charts.html"><i class="material-icons"></i><span data-i18n="nav.chartjs.chartjs_bar_charts">Bar charts</span></a>
                        </li>
                        <li><a class="menu-item" href="chartjs-pie-doughnut-charts.html"><i class="material-icons"></i><span data-i18n="nav.chartjs.chartjs_pie_doughnut_charts">Pie &amp; Doughnut charts</span></a>
                        </li>
                        <li><a class="menu-item" href="chartjs-scatter-charts.html"><i class="material-icons"></i><span data-i18n="nav.chartjs.chartjs_scatter_charts">Scatter charts</span></a>
                        </li>
                        <li><a class="menu-item" href="chartjs-polar-radar-charts.html"><i class="material-icons"></i><span data-i18n="nav.chartjs.chartjs_polar_radar_charts">Polar &amp; Radar charts</span></a>
                        </li>
                        <li><a class="menu-item" href="chartjs-advance-charts.html"><i class="material-icons"></i><span data-i18n="nav.chartjs.chartjs_advance_charts">Advance charts</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">multiline_chart</i><span class="menu-title" data-i18n="nav.d3_charts.main">D3 Charts</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="d3-line-chart.html"><i class="material-icons"></i><span data-i18n="nav.d3_charts.d3_line_chart">Line Chart</span></a>
                        </li>
                        <li><a class="menu-item" href="d3-bar-chart.html"><i class="material-icons"></i><span data-i18n="nav.d3_charts.d3_bar_chart">Bar Chart</span></a>
                        </li>
                        <li><a class="menu-item" href="d3-pie-chart.html"><i class="material-icons"></i><span data-i18n="nav.d3_charts.d3_pie_chart">Pie Chart</span></a>
                        </li>
                        <li><a class="menu-item" href="d3-circle-diagrams.html"><i class="material-icons"></i><span data-i18n="nav.d3_charts.d3_circle_diagrams">Circle Diagrams</span></a>
                        </li>
                        <li><a class="menu-item" href="d3-tree-chart.html"><i class="material-icons"></i><span data-i18n="nav.d3_charts.d3_tree_chart">Tree Chart</span></a>
                        </li>
                        <li><a class="menu-item" href="d3-other-charts.html"><i class="material-icons"></i><span data-i18n="nav.d3_charts.d3_other_charts">Other Charts</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">trending_up</i><span class="menu-title" data-i18n="nav.c3_charts.main">C3 Charts</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="c3-line-chart.html"><i class="material-icons"></i><span data-i18n="nav.c3_charts.c3_line_chart">Line Chart</span></a>
                        </li>
                        <li><a class="menu-item" href="c3-bar-pie-chart.html"><i class="material-icons"></i><span data-i18n="nav.c3_charts.c3_bar_pie_chart">Bar &amp; Pie Chart</span></a>
                        </li>
                        <li><a class="menu-item" href="c3-axis-chart.html"><i class="material-icons"></i><span data-i18n="nav.c3_charts.c3_axis_chart">Axis Chart</span></a>
                        </li>
                        <li><a class="menu-item" href="c3-data-chart.html"><i class="material-icons"></i><span data-i18n="nav.c3_charts.c3_data_chart">Data Chart</span></a>
                        </li>
                        <li><a class="menu-item" href="c3-grid-chart.html"><i class="material-icons"></i><span data-i18n="nav.c3_charts.c3_grid_chart">Grid Chart</span></a>
                        </li>
                        <li><a class="menu-item" href="c3-transform-chart.html"><i class="material-icons"></i><span data-i18n="nav.c3_charts.c3_transform_chart">Transform Chart</span></a>
                        </li>
                        <li><a class="menu-item" href="c3-other-charts.html"><i class="material-icons"></i><span data-i18n="nav.c3_charts.c3_other_charts">Other Charts</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">pie_chart_outlined</i><span class="menu-title" data-i18n="nav.chartist.main">Chartist</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="chartist-line-charts.html"><i class="material-icons"></i><span data-i18n="nav.chartist.chartist_line_charts">Line charts</span></a>
                        </li>
                        <li><a class="menu-item" href="chartist-bar-charts.html"><i class="material-icons"></i><span data-i18n="nav.chartist.chartist_bar_charts">Bar charts</span></a>
                        </li>
                        <li><a class="menu-item" href="chartist-pie-charts.html"><i class="material-icons"></i><span data-i18n="nav.chartist.chartist_pie_charts">Pie charts</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="morris-charts.html"><i class="material-icons">timeline</i><span class="menu-title" data-i18n="nav.morris_charts.main">Morris Charts</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">trending_down</i><span class="menu-title" data-i18n="nav.flot_charts.main">Flot Charts</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="flot-line-charts.html"><i class="material-icons"></i><span data-i18n="nav.flot_charts.flot_line_charts">Line charts</span></a>
                        </li>
                        <li><a class="menu-item" href="flot-bar-charts.html"><i class="material-icons"></i><span data-i18n="nav.flot_charts.flot_bar_charts">Bar charts</span></a>
                        </li>
                        <li><a class="menu-item" href="flot-pie-charts.html"><i class="material-icons"></i><span data-i18n="nav.flot_charts.flot_pie_charts">Pie charts</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="rickshaw-charts.html"><i class="material-icons">track_changes</i><span class="menu-title" data-i18n="nav.rickshaw_charts.main">Rickshaw Charts</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">center_focus_weak</i><span class="menu-title" data-i18n="nav.maps.main">Maps</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#"><i class="material-icons"></i><span data-i18n="nav.maps.google_maps.main">Google Maps</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="gmaps-basic-maps.html"><i class="material-icons"></i><span data-i18n="nav.maps.google_maps.gmaps_basic_maps">Maps</span></a>
                                </li>
                                <li><a class="menu-item" href="gmaps-services.html"><i class="material-icons"></i><span data-i18n="nav.maps.google_maps.gmaps_services">Services</span></a>
                                </li>
                                <li><a class="menu-item" href="gmaps-overlays.html"><i class="material-icons"></i><span data-i18n="nav.maps.google_maps.gmaps_overlays">Overlays</span></a>
                                </li>
                                <li><a class="menu-item" href="gmaps-routes.html"><i class="material-icons"></i><span data-i18n="nav.maps.google_maps.gmaps_routes">Routes</span></a>
                                </li>
                                <li><a class="menu-item" href="gmaps-utils.html"><i class="material-icons"></i><span data-i18n="nav.maps.google_maps.gmaps_utils">Utils</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="#"><i class="material-icons"></i><span data-i18n="nav.maps.vector_maps.main">Vector Maps</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="#"><i class="material-icons"></i><span data-i18n="nav.maps.vector_maps.jquery_mapael.main">jQuery Mapael</span></a>
                                    <ul class="menu-content">
                                        <li><a class="menu-item" href="vector-maps-mapael-basic.html"><i class="material-icons"></i><span data-i18n="nav.maps.vector_maps.jquery_mapael.vector_maps_mapael_basic">Basic Maps</span></a>
                                        </li>
                                        <li><a class="menu-item" href="vector-maps-mapael-advance.html"><i class="material-icons"></i><span data-i18n="nav.maps.vector_maps.jquery_mapael.vector_maps_mapael_advance">Advance Maps</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="menu-item" href="vector-maps-jvector.html"><i class="material-icons"></i><span data-i18n="nav.maps.vector_maps.jvector_maps">jVector Map</span></a>
                                </li>
                                <li><a class="menu-item" href="vector-maps-jvq.html"><i class="material-icons"></i><span data-i18n="nav.maps.vector_maps.vector_maps_jvq">JQV Map</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="nav.category.support">Support</span><i class="material-icons nav-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="Support">more_horiz</i>
                </li>
                <li class=" nav-item"><a href="http://support.pixinvent.com/"><i class="material-icons">local_offer</i><span class="menu-title" data-i18n="nav.support_raise_support.main">Raise Support</span></a>
                </li>
                <li class=" nav-item"><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/documentation"><i class="material-icons">format_size</i><span class="menu-title" data-i18n="nav.support_documentation.main">Documentation</span></a>
                </li>
            </ul>
        </div>
    </div>

    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-header row">
        </div>
        <div class="content-wrapper">
            <div class="content-body">
                
                <!-- Candlestick Multi Level Control Chart -->
                <div id="crypto-stats-3" class="row">
                    <div class="col-xl-4 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <i class="cc BTC warning font-large-2" title="BTC"></i>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4>BTC</h4>
                                            <h6 class="text-muted">Bitcoin</h6>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h4>$9,980</h4>
                                            <h6 class="success darken-4">31% <i class="la la-arrow-up"></i></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12"><canvas id="btc-chartjs" class="height-75"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <i class="cc ETH blue-grey lighten-1 font-large-2" title="ETH"></i>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4>ETH</h4>
                                            <h6 class="text-muted">Ethereum</h6>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h4>$944</h4>
                                            <h6 class="success darken-4">12% <i class="la la-arrow-up"></i></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12"><canvas id="eth-chartjs" class="height-75"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <i class="cc XRP info font-large-2" title="XRP"></i>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4>XRP</h4>
                                            <h6 class="text-muted">Balance</h6>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h4>$1.2</h4>
                                            <h6 class="danger">20% <i class="la la-arrow-down"></i></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12"><canvas id="xrp-chartjs" class="height-75"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Candlestick Multi Level Control Chart -->

                <!-- Material Data Tables -->
                <section id="material-datatables">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-0">
                                <div class="card-header">
                                    <h4 class="card-title">Datatables within Cards</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <table class="table material-table">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>
                                                <tr>
                                                    <td>Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Jena Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>2008/12/19</td>
                                                    <td>$90,560</td>
                                                </tr>
                                                <tr>
                                                    <td>Quinn Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Charde Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>2008/10/16</td>
                                                    <td>$470,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Haley Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>2012/12/18</td>
                                                    <td>$313,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Tatyana Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gloria Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>New York</td>
                                                    <td>59</td>
                                                    <td>2009/04/10</td>
                                                    <td>$237,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Dai Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>35</td>
                                                    <td>2012/09/26</td>
                                                    <td>$217,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenette Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>New York</td>
                                                    <td>30</td>
                                                    <td>2011/09/03</td>
                                                    <td>$345,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Yuri Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                </tr>
                                                <tr>
                                                    <td>Doris Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Sidney</td>
                                                    <td>23</td>
                                                    <td>2010/09/20</td>
                                                    <td>$85,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Angelica Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Joyce</td>
                                                    <td>Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>42</td>
                                                    <td>2010/12/22</td>
                                                    <td>$92,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Chang</td>
                                                    <td>Regional Director</td>
                                                    <td>Singapore</td>
                                                    <td>28</td>
                                                    <td>2010/11/14</td>
                                                    <td>$357,650</td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                </tr>
                                                <tr>
                                                    <td>Fiona Green</td>
                                                    <td>Chief Operating Officer (COO)</td>
                                                    <td>San Francisco</td>
                                                    <td>48</td>
                                                    <td>2010/03/11</td>
                                                    <td>$850,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Shou Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>Tokyo</td>
                                                    <td>20</td>
                                                    <td>2011/08/14</td>
                                                    <td>$163,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Michelle House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Sidney</td>
                                                    <td>37</td>
                                                    <td>2011/06/02</td>
                                                    <td>$95,400</td>
                                                </tr>
                                                <tr>
                                                    <td>Suki Burks</td>
                                                    <td>Developer</td>
                                                    <td>London</td>
                                                    <td>53</td>
                                                    <td>2009/10/22</td>
                                                    <td>$114,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Prescott Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>London</td>
                                                    <td>27</td>
                                                    <td>2011/05/07</td>
                                                    <td>$145,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>San Francisco</td>
                                                    <td>22</td>
                                                    <td>2008/10/26</td>
                                                    <td>$235,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Martena Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>Edinburgh</td>
                                                    <td>46</td>
                                                    <td>2011/03/09</td>
                                                    <td>$324,050</td>
                                                </tr>
                                                <tr>
                                                    <td>Unity Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/12/09</td>
                                                    <td>$85,675</td>
                                                </tr>
                                                <tr>
                                                    <td>Howard Hatfield</td>
                                                    <td>Office Manager</td>
                                                    <td>San Francisco</td>
                                                    <td>51</td>
                                                    <td>2008/12/16</td>
                                                    <td>$164,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Hope Fuentes</td>
                                                    <td>Secretary</td>
                                                    <td>San Francisco</td>
                                                    <td>41</td>
                                                    <td>2010/02/12</td>
                                                    <td>$109,850</td>
                                                </tr>
                                                <tr>
                                                    <td>Vivian Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>San Francisco</td>
                                                    <td>62</td>
                                                    <td>2009/02/14</td>
                                                    <td>$452,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>37</td>
                                                    <td>2008/12/11</td>
                                                    <td>$136,200</td>
                                                </tr>
                                                <tr>
                                                    <td>Jackson Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>New York</td>
                                                    <td>65</td>
                                                    <td>2008/09/26</td>
                                                    <td>$645,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2011/02/03</td>
                                                    <td>$234,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sakura Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>Tokyo</td>
                                                    <td>37</td>
                                                    <td>2009/08/19</td>
                                                    <td>$139,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Thor Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2013/08/11</td>
                                                    <td>$98,540</td>
                                                </tr>
                                                <tr>
                                                    <td>Finn Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/07/07</td>
                                                    <td>$87,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Serge Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2012/04/09</td>
                                                    <td>$138,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Zenaida Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>New York</td>
                                                    <td>63</td>
                                                    <td>2010/01/04</td>
                                                    <td>$125,250</td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>56</td>
                                                    <td>2012/06/01</td>
                                                    <td>$115,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>43</td>
                                                    <td>2013/02/01</td>
                                                    <td>$75,650</td>
                                                </tr>
                                                <tr>
                                                    <td>Cara Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Hermione Butler</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2011/03/21</td>
                                                    <td>$356,250</td>
                                                </tr>
                                                <tr>
                                                    <td>Lael Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>$86,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Shad Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Donna Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Material Data Tables -->
             
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
       <link rel="stylesheet" type="text/css" href=<?=base_url("app-assets/css/material.css")?>">
    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT</a></span><span class="float-md-right d-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i><span id="scroll-top"></span></span></p>
    </footer>
    <!-- END: Footer-->

    <link rel="stylesheet" type="text/css" href=<?=base_url("app-assets/css/material.css")?>">
    <!-- BEGIN: Vendor JS-->
    <script src="<?=base_url("app-assets/vendors/js/material-vendors.min.js")?>"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?=base_url("app-assets/vendors/js/charts/chart.min.js")?>"></script>
    <script src="<?=base_url("app-assets/vendors/js/charts/echarts/echarts.js")?>"></script>
    <script src="<?=base_url("app-assets/vendors/js/tables/datatable/datatables.min.js")?>"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?=base_url("app-assets/js/core/app-menu.js")?>"></script>
    <script src="<?=base_url("app-assets/js/core/app.js")?>"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?=base_url("app-assets/js/scripts/pages/material-app.js")?>"></script>
    <script src="<?=base_url("app-assets/js/scripts/pages/dashboard-crypto.js")?>"></script>
    <script src="<?=base_url("app-assets/js/scripts/tables/material-datatable.js")?>"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>