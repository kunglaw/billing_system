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
    <link rel="apple-touch-icon" href="<?=base_url("assets/template/app-assets/images/ico/apple-icon-120.png")?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url("assets/template/app-assets/images/ico/favicon.ico")?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url("assets/template/app-assets/vendors/css/vendors.min.css")?>">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url("assets/template/app-assets/css/bootstrap.css")?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url("assets/template/app-assets/css/bootstrap-extended.css")?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url("assets/template/app-assets/css/colors.css")?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url("assets/template/app-assets/css/components.css")?>">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url("assets/template/app-assets/css/core/menu/menu-types/vertical-menu-modern.css")?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url("assets/template/app-assets/css/core/colors/palette-gradient.css")?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url("assets/template/app-assets/vendors/css/cryptocoins/cryptocoins.css")?>">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url("assets/template/assets/css/style.css")?>" >
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-lg-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="modern admin logo" src="<?=base_url("assets/template/app-assets/images/logo/logo.png")?>">
                            <h3 class="brand-text">Modern Admin</h3>
                        </a></li>
                    <li class="nav-item d-none d-lg-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
                    <li class="nav-item d-lg-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                        <li class="dropdown nav-item mega-dropdown d-none d-lg-block"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Mega</a>
                            <ul class="mega-dropdown-menu dropdown-menu row">
                                <li class="col-md-2">
                                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="la la-newspaper-o"></i> News</h6>
                                    <div id="mega-menu-carousel-example">
                                        <div><img class="rounded img-fluid mb-1" src="../app-assets/images/slider/slider-2.png" alt="First slide"><a class="news-title mb-0 d-block" href="#">Poster Frame PSD</a>
                                            <p class="news-content"><span class="font-small-2">January 26, 2018</span></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <h6 class="dropdown-menu-header text-uppercase"><i class="la la-random"></i> Menu</h6>
                                    <ul>
                                        <li class="menu-list">
                                            <ul>
                                                <li><a class="dropdown-item" href="layout-fixed.html"><i class="ft-file"></i> Page layouts</a></li>
                                                <li><a class="dropdown-item" href="color-palette-primary.html"><i class="ft-camera"></i> Color palette</a></li>
                                                <li><a class="dropdown-item" href="layout-2-columns.html"><i class="ft-edit"></i> Starter kit</a></li>
                                                <li><a class="dropdown-item" href="changelog.html"><i class="ft-minimize-2"></i> Change log</a></li>
                                                <li><a class="dropdown-item" href="https://pixinvent.ticksy.com/"><i class="la la-life-ring"></i> Support center</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="col-md-3">
                                    <h6 class="dropdown-menu-header text-uppercase"><i class="la la-list-ul"></i> Accordion</h6>
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
                                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="la la-envelope-o"></i> Contact Us</h6>
                                    <form class="form form-horizontal">
                                        <div class="form-body">
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label" for="inputName1">Name</label>
                                                <div class="col-sm-9">
                                                    <div class="position-relative has-icon-left">
                                                        <input class="form-control" type="text" id="inputName1" placeholder="John Doe">
                                                        <div class="form-control-position pl-1"><i class="la la-user"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label" for="inputEmail1">Email</label>
                                                <div class="col-sm-9">
                                                    <div class="position-relative has-icon-left">
                                                        <input class="form-control" type="email" id="inputEmail1" placeholder="john@example.com">
                                                        <div class="form-control-position pl-1"><i class="la la-envelope-o"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label" for="inputMessage1">Message</label>
                                                <div class="col-sm-9">
                                                    <div class="position-relative has-icon-left">
                                                        <textarea class="form-control" id="inputMessage1" rows="2" placeholder="Simple Textarea"></textarea>
                                                        <div class="form-control-position pl-1"><i class="la la-commenting-o"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 mb-1">
                                                    <button class="btn btn-info float-right" type="button"><i class="la la-paper-plane-o"></i> Send </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                            <div class="search-input">
                                <input class="input" type="text" placeholder="Explore Modern...">
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-gb"></i><span class="selected-language"></span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-gb"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a></div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i><span class="badge badge-pill badge-danger badge-up badge-glow">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6><span class="notification-tag badge badge-danger float-right m-0">5 New</span>
                                </li>
                                <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">You have new order!</h6>
                                                <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading red darken-1">99% Server load</h6>
                                                <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                                <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Complete the task</h6><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Generate monthly report</h6><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail"> </i></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span></h6><span class="notification-tag badge badge-warning float-right m-0">4 New</span>
                                </li>
                                <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Margaret Govan</h6>
                                                <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Bret Lezama</h6>
                                                <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Tuesday</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Carie Berra</h6>
                                                <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
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
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700">John Doe</span><span class="avatar avatar-online"><img src="../../../app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="user-cards.html"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="ft-message-square"></i> Chats</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="login-with-bg-image.html"><i class="ft-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->

    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="active"><a href="index.html"><i class="la la-home"></i><span class="menu-title" data-i18n="">Crypto Dashboard</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="nav.category.crypto">Crypto</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Crypto"></i>
                </li>
                <li class=" nav-item"><a href="crypto-transactions.html"><i class="la la-list"></i><span class="menu-title" data-i18n="">Transactions</span></a>
                </li>
                <li class=" nav-item"><a href="crypto-currency-exchange.html"><i class="la la-money"></i><span class="menu-title" data-i18n="">Currency Exchange</span></a>
                </li>
                <li class=" nav-item"><a href="crypto-trading.html"><i class="la la-dollar"></i><span class="menu-title" data-i18n="">Trading</span></a>
                </li>
                <li class=" nav-item"><a href="crypto-wallet.html"><i class="la la-credit-card"></i><span class="menu-title" data-i18n="">Wallet</span></a>
                </li>
                <li class=" nav-item"><a href="crypto-history.html"><i class="la la-check-circle-o"></i><span class="menu-title" data-i18n="">History</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="nav.category.ui">User Interface</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="User Interface"></i>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-server"></i><span class="menu-title" data-i18n="nav.components.main">Components</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="component-alerts.html"><i></i><span data-i18n="nav.components.component_alerts">Alerts</span></a>
                        </li>
                        <li><a class="menu-item" href="component-callout.html"><i></i><span data-i18n="nav.components.component_callout">Callout</span></a>
                        </li>
                        <li><a class="menu-item" href="#"><i></i><span data-i18n="nav.components.components_buttons.main">Buttons</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="component-buttons-basic.html"><i></i><span data-i18n="nav.components.components_buttons.component_buttons_basic">Basic Buttons</span></a>
                                </li>
                                <li><a class="menu-item" href="component-buttons-extended.html"><i></i><span data-i18n="nav.components.components_buttons.component_buttons_extended">Extended Buttons</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="component-carousel.html"><i></i><span data-i18n="nav.components.component_carousel">Carousel</span></a>
                        </li>
                        <li><a class="menu-item" href="component-collapse.html"><i></i><span data-i18n="nav.components.component_collapse">Collapse</span></a>
                        </li>
                        <li><a class="menu-item" href="component-dropdowns.html"><i></i><span data-i18n="nav.components.component_dropdowns">Dropdowns</span></a>
                        </li>
                        <li><a class="menu-item" href="component-list-group.html"><i></i><span data-i18n="nav.components.component_list_group">List Group</span></a>
                        </li>
                        <li><a class="menu-item" href="component-modals.html"><i></i><span data-i18n="nav.components.component_modals">Modals</span></a>
                        </li>
                        <li><a class="menu-item" href="component-pagination.html"><i></i><span data-i18n="nav.components.component_pagination">Pagination</span></a>
                        </li>
                        <li><a class="menu-item" href="component-navs-component.html"><i></i><span data-i18n="nav.components.component_navs_component">Navs Component</span></a>
                        </li>
                        <li><a class="menu-item" href="component-tabs-component.html"><i></i><span data-i18n="nav.components.component_tabs_component">Tabs Component</span></a>
                        </li>
                        <li><a class="menu-item" href="component-pills-component.html"><i></i><span data-i18n="nav.components.component_pills_component">Pills Component</span></a>
                        </li>
                        <li><a class="menu-item" href="component-tooltips.html"><i></i><span data-i18n="nav.components.component_tooltips">Tooltips</span></a>
                        </li>
                        <li><a class="menu-item" href="component-popovers.html"><i></i><span data-i18n="nav.components.component_popovers">Popovers</span></a>
                        </li>
                        <li><a class="menu-item" href="component-badges.html"><i></i><span data-i18n="nav.components.component_badges">Badges</span></a>
                        </li>
                        <li><a class="menu-item" href="component-pill-badges.html"><i></i><span>Pill Badges</span></a>
                        </li>
                        <li><a class="menu-item" href="component-progress.html"><i></i><span data-i18n="nav.components.component_progress">Progress</span></a>
                        </li>
                        <li><a class="menu-item" href="component-media-objects.html"><i></i><span data-i18n="nav.components.component_media_objects">Media Objects</span></a>
                        </li>
                        <li><a class="menu-item" href="component-scrollable.html"><i></i><span data-i18n="nav.components.component_scrollable">Scrollable</span></a>
                        </li>
                        <li><a class="menu-item" href="component-spinners.html"><i></i><span data-i18n="nav.components.component_spinners">Spinners</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-unlock"></i><span class="menu-title" data-i18n="nav.pages.main">Authentication</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="login-with-bg-image.html"><i></i><span>Login</span></a>
                        </li>
                        <li><a class="menu-item" href="register-with-bg-image.html"><i></i><span>SignIn</span></a>
                        </li>
                        <li><a class="menu-item" href="recover-password.html"><i></i><span>Forgot Password</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-file-text"></i><span class="menu-title" data-i18n="nav.form_layouts.main">Form Layouts</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="form-layout-basic.html"><i></i><span data-i18n="nav.form_layouts.form_layout_basic">Basic Forms</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-horizontal.html"><i></i><span data-i18n="nav.form_layouts.form_layout_horizontal">Horizontal Forms</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-hidden-labels.html"><i></i><span data-i18n="nav.form_layouts.form_layout_hidden_labels">Hidden Labels</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-form-actions.html"><i></i><span data-i18n="nav.form_layouts.form_layout_form_actions">Form Actions</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-row-separator.html"><i></i><span data-i18n="nav.form_layouts.form_layout_row_separator">Row Separator</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-bordered.html"><i></i><span data-i18n="nav.form_layouts.form_layout_bordered">Bordered</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-striped-rows.html"><i></i><span data-i18n="nav.form_layouts.form_layout_striped_rows">Striped Rows</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-striped-labels.html"><i></i><span data-i18n="nav.form_layouts.form_layout_striped_labels">Striped Labels</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-paste"></i><span class="menu-title" data-i18n="nav.form_wizard.main">Form Wizard</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="form-wizard-circle-style.html"><i></i><span data-i18n="nav.form_wizard.form_wizard_circle_style">Circle Style</span></a>
                        </li>
                        <li><a class="menu-item" href="form-wizard-notification-style.html"><i></i><span data-i18n="nav.form_wizard.form_wizard_notification_style">Notification Style</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-table"></i><span class="menu-title" data-i18n="nav.bootstrap_tables.main">Bootstrap Tables</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="table-basic.html"><i></i><span data-i18n="nav.bootstrap_tables.table_basic">Basic Tables</span></a>
                        </li>
                        <li><a class="menu-item" href="table-border.html"><i></i><span data-i18n="nav.bootstrap_tables.table_border">Table Border</span></a>
                        </li>
                        <li><a class="menu-item" href="table-sizing.html"><i></i><span data-i18n="nav.bootstrap_tables.table_sizing">Table Sizing</span></a>
                        </li>
                        <li><a class="menu-item" href="table-styling.html"><i></i><span data-i18n="nav.bootstrap_tables.table_styling">Table Styling</span></a>
                        </li>
                        <li><a class="menu-item" href="table-components.html"><i></i><span data-i18n="nav.bootstrap_tables.table_components">Table Components</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-area-chart"></i><span class="menu-title" data-i18n="nav.chartjs.main">Chartjs</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="chartjs-line-charts.html"><i></i><span data-i18n="nav.chartjs.chartjs_line_charts">Line charts</span></a>
                        </li>
                        <li><a class="menu-item" href="chartjs-bar-charts.html"><i></i><span data-i18n="nav.chartjs.chartjs_bar_charts">Bar charts</span></a>
                        </li>
                        <li><a class="menu-item" href="chartjs-pie-doughnut-charts.html"><i></i><span data-i18n="nav.chartjs.chartjs_pie_doughnut_charts">Pie &amp; Doughnut charts</span></a>
                        </li>
                        <li><a class="menu-item" href="chartjs-scatter-charts.html"><i></i><span data-i18n="nav.chartjs.chartjs_scatter_charts">Scatter charts</span></a>
                        </li>
                        <li><a class="menu-item" href="chartjs-polar-radar-charts.html"><i></i><span data-i18n="nav.chartjs.chartjs_polar_radar_charts">Polar &amp; Radar charts</span></a>
                        </li>
                        <li><a class="menu-item" href="chartjs-advance-charts.html"><i></i><span data-i18n="nav.chartjs.chartjs_advance_charts">Advance charts</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
            </div>
            <div class="content-body">
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

                <!-- Slaes & Purchase Order -->
                <div class="row">
                    <div class="col-12 col-xl-4">
                        <div id="accordionCrypto" role="tablist" aria-multiselectable="true">
                            <div class="card collapse-icon accordion-icon-rotate">

                                <div id="heading31" class="card-header bg-info p-1 bg-lighten-1">
                                    <a data-toggle="collapse" data-parent="#accordionCrypto" href="#accordionBTC" aria-expanded="true" aria-controls="accordionBTC" class="card-title lead white">BTC</a>
                                </div>
                                <div id="accordionBTC" role="tabpanel" aria-labelledby="heading31" class="card-collapse collapse show" aria-expanded="true">
                                    <div class="card-content">
                                        <div class="card-body p-0">
                                            <div class="media-list list-group">
                                                <div class="list-group-item list-group-item-action media p-1">
                                                    <a class="media-link" href="#">
                                                        <div class="media-left">
                                                            <p class="text-bold-600 m-0">BTC/USD</p>
                                                            <p class="font-small-2 text-muted m-0">24h Change</p>
                                                            <p class="font-small-2 text-muted m-0">24h Volume</p>
                                                        </div>
                                                        <div class="media-body text-right">
                                                            <p class="text-bold-600 m-0">11916.9</p>
                                                            <p class="font-small-2 text-muted m-0 success">283.1 USD (+2.33%)</p>
                                                            <p class="font-small-2 text-muted m-0 text-bold-600">1029.1906 BTC</p>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="list-group-item list-group-item-action media p-1 bg-info bg-lighten-5">
                                                    <a class="media-link" href="#">
                                                        <div class="media-left">
                                                            <p class="text-bold-600 m-0">BTC/EUR</p>
                                                            <p class="font-small-2 text-muted m-0">24h Change</p>
                                                            <p class="font-small-2 text-muted m-0">24h Volume</p>
                                                        </div>
                                                        <div class="media-body text-right">
                                                            <p class="text-bold-600 m-0">9213.3</p>
                                                            <p class="font-small-2 text-muted m-0 success">56.1 EUR (+5.52%)</p>
                                                            <p class="font-small-2 text-muted m-0 text-bold-600">560.1906 BTC</p>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="list-group-item list-group-item-action media p-1 border-bottom-0">
                                                    <a class="media-link" href="#">
                                                        <div class="media-left">
                                                            <p class="text-bold-600 m-0">BTC/GBP</p>
                                                            <p class="font-small-2 text-muted m-0">24h Change</p>
                                                            <p class="font-small-2 text-muted m-0">24h Volume</p>
                                                        </div>
                                                        <div class="media-body text-right">
                                                            <p class="text-bold-600 m-0">8015.1</p>
                                                            <p class="font-small-2 text-muted m-0 danger">-183.1 USD (-1.33%)</p>
                                                            <p class="font-small-2 text-muted m-0 text-bold-600">320.1906 BTC</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="heading32" class="card-header bg-info p-1 bg-lighten-1 my-1">
                                    <a data-toggle="collapse" data-parent="#accordionCrypto" href="#accordionETH" aria-expanded="false" aria-controls="accordionETH" class="card-title lead white collapsed">ETH</a>
                                </div>
                                <div id="accordionETH" role="tabpanel" aria-labelledby="heading32" class="card-collapse collapse" aria-expanded="false">
                                    <div class="card-content">
                                        <div class="card-body p-0">
                                            <div class="media-list list-group">
                                                <div class="list-group-item list-group-item-action media p-1">
                                                    <a class="media-link" href="#">
                                                        <div class="media-left">
                                                            <p class="text-bold-600 m-0">ETH/USD</p>
                                                            <p class="font-small-2 text-muted m-0">24h Change</p>
                                                            <p class="font-small-2 text-muted m-0">24h Volume</p>
                                                        </div>
                                                        <div class="media-body text-right">
                                                            <p class="text-bold-600 m-0">11916.9</p>
                                                            <p class="font-small-2 text-muted m-0 success">283.1 USD (+2.33%)</p>
                                                            <p class="font-small-2 text-muted m-0 text-bold-600">1029.1906 ETH</p>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="list-group-item list-group-item-action media p-1">
                                                    <a class="media-link" href="#">
                                                        <div class="media-left">
                                                            <p class="text-bold-600 m-0">ETH/EUR</p>
                                                            <p class="font-small-2 text-muted m-0">24h Change</p>
                                                            <p class="font-small-2 text-muted m-0">24h Volume</p>
                                                        </div>
                                                        <div class="media-body text-right">
                                                            <p class="text-bold-600 m-0">9213.3</p>
                                                            <p class="font-small-2 text-muted m-0 success">56.1 EUR (+5.52%)</p>
                                                            <p class="font-small-2 text-muted m-0 text-bold-600">560.1906 ETH</p>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="list-group-item list-group-item-action media p-1 border-bottom-0">
                                                    <a class="media-link" href="#">
                                                        <div class="media-left">
                                                            <p class="text-bold-600 m-0">ETH/GBP</p>
                                                            <p class="font-small-2 text-muted m-0">24h Change</p>
                                                            <p class="font-small-2 text-muted m-0">24h Volume</p>
                                                        </div>
                                                        <div class="media-body text-right">
                                                            <p class="text-bold-600 m-0">8015.1</p>
                                                            <p class="font-small-2 text-muted m-0 danger">-183.1 USD (-1.33%)</p>
                                                            <p class="font-small-2 text-muted m-0 text-bold-600">320.1906 ETH</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="heading33" class="card-header bg-info p-1 bg-lighten-1">
                                    <a data-toggle="collapse" data-parent="#accordionCrypto" href="#accordionXRP" aria-expanded="false" aria-controls="accordionXRP" class="card-title lead white collapsed">XRP</a>
                                </div>
                                <div id="accordionXRP" role="tabpanel" aria-labelledby="heading33" class="card-collapse collapse" aria-expanded="false">
                                    <div class="card-content">
                                        <div class="card-body p-0">
                                            <div class="media-list list-group">
                                                <div class="list-group-item list-group-item-action media p-1">
                                                    <a class="media-link" href="#">
                                                        <div class="media-left">
                                                            <p class="text-bold-600 m-0">XRP/USD</p>
                                                            <p class="font-small-2 text-muted m-0">24h Change</p>
                                                            <p class="font-small-2 text-muted m-0">24h Volume</p>
                                                        </div>
                                                        <div class="media-body text-right">
                                                            <p class="text-bold-600 m-0">11916.9</p>
                                                            <p class="font-small-2 text-muted m-0 success">283.1 USD (+2.33%)</p>
                                                            <p class="font-small-2 text-muted m-0 text-bold-600">1029.1906 XRP</p>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="list-group-item list-group-item-action media p-1">
                                                    <a class="media-link" href="#">
                                                        <div class="media-left">
                                                            <p class="text-bold-600 m-0">XRP/EUR</p>
                                                            <p class="font-small-2 text-muted m-0">24h Change</p>
                                                            <p class="font-small-2 text-muted m-0">24h Volume</p>
                                                        </div>
                                                        <div class="media-body text-right">
                                                            <p class="text-bold-600 m-0">9213.3</p>
                                                            <p class="font-small-2 text-muted m-0 success">56.1 EUR (+5.52%)</p>
                                                            <p class="font-small-2 text-muted m-0 text-bold-600">560.1906 XRP</p>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="list-group-item list-group-item-action media p-1 border-bottom-0">
                                                    <a class="media-link" href="#">
                                                        <div class="media-left">
                                                            <p class="text-bold-600 m-0">XRP/GBP</p>
                                                            <p class="font-small-2 text-muted m-0">24h Change</p>
                                                            <p class="font-small-2 text-muted m-0">24h Volume</p>
                                                        </div>
                                                        <div class="media-body text-right">
                                                            <p class="text-bold-600 m-0">8015.1</p>
                                                            <p class="font-small-2 text-muted m-0 danger">-183.1 USD (-1.33%)</p>
                                                            <p class="font-small-2 text-muted m-0 text-bold-600">320.1906 XRP</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">BTC/USD</h4>

                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li class="text-center mr-4">
                                            <h6 class="text-muted">Last price</h6>
                                            <p class="text-bold-600 mb-0">$ 11916.9</p>
                                        </li>
                                        <li class="text-center mr-4">
                                            <h6 class="text-muted">Daily change</h6>
                                            <p class="text-bold-600 mb-0">$ 283.1</p>
                                        </li>
                                        <li class="text-center">
                                            <h6 class="text-muted">24h volume</h6>
                                            <p class="text-bold-600 mb-0"><i class="cc BTC-alt" title="BTC"></i> 1029.1906 BTC</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body pt-0">
                                    <div id="btc-candlestick-control" class="height-350 echart-container"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Trade History & Place Order -->
                <div class="row">
                    <div class="col-12 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Trade History</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn round btn-sm btn-outline-info active">
                                            <input type="radio" name="options" id="option1" checked> Market
                                        </label>
                                        <label class="btn round btn-sm btn-outline-info">
                                            <input type="radio" name="options" id="option2"> Yours
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive mt-1">
                                    <table class="table table-xs">
                                        <thead>
                                            <tr>
                                                <th>Price($)</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="success">11900.12</td>
                                                <td><i class="cc BTC-alt"></i> 0.215</td>
                                                <td>11:23:25</td>
                                            </tr>
                                            <tr>
                                                <td class="danger">11903.18</td>
                                                <td><i class="cc BTC-alt"></i> 1.545</td>
                                                <td>11:23:05</td>
                                            </tr>
                                            <tr>
                                                <td class="success">11899.56</td>
                                                <td><i class="cc BTC-alt"></i> 0.541</td>
                                                <td>11:22:50</td>
                                            </tr>
                                            <tr>
                                                <td class="danger">11910.52</td>
                                                <td><i class="cc BTC-alt"></i> 0.321</td>
                                                <td>11:22:15</td>
                                            </tr>
                                            <tr>
                                                <td class="danger">11901.15</td>
                                                <td><i class="cc BTC-alt"></i> 0.548</td>
                                                <td>11:21:25</td>
                                            </tr>
                                            <tr>
                                                <td class="success">11903.45</td>
                                                <td><i class="cc BTC-alt"></i> 0.587</td>
                                                <td>11:21:01</td>
                                            </tr>
                                            <tr>
                                                <td class="danger">11895.50</td>
                                                <td><i class="cc BTC-alt"></i> 5.125</td>
                                                <td>11:20:15</td>
                                            </tr>
                                            <tr>
                                                <td class="danger">11889.56</td>
                                                <td><i class="cc BTC-alt"></i> 0.894</td>
                                                <td>11:20:03</td>
                                            </tr>
                                            <tr>
                                                <td class="success">11885.69</td>
                                                <td><i class="cc BTC-alt"></i> 0.754</td>
                                                <td>11:19:55</td>
                                            </tr>
                                            <tr>
                                                <td class="danger">11891.12</td>
                                                <td><i class="cc BTC-alt"></i> 0.889</td>
                                                <td>11:19:15</td>
                                            </tr>
                                            <tr>
                                                <td class="danger">11889.88</td>
                                                <td><i class="cc BTC-alt"></i> 0.654</td>
                                                <td>11:18:18</td>
                                            </tr>
                                            <tr>
                                                <td class="success">11881.15</td>
                                                <td><i class="cc BTC-alt"></i> 1.254</td>
                                                <td>11:18:01</td>
                                            </tr>
                                            <tr>
                                                <td class="success">11875.75</td>
                                                <td><i class="cc BTC-alt"></i> 0.885</td>
                                                <td>11:17:25</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Place Order</h4>
                                <div class="heading-elements">
                                    <h6 class="danger">Fee: 0.2%</h6>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <ul class="nav nav-tabs nav-underline no-hover-bg">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="base-limit" data-toggle="tab" aria-controls="limit" href="#limit" aria-expanded="true">Limit</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="base-market" data-toggle="tab" aria-controls="market" href="#market" aria-expanded="false">Market</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="base-stop-limit" data-toggle="tab" aria-controls="stop-limit" href="#stop-limit" aria-expanded="false">Stop Limit</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content px-1 pt-1">
                                        <div role="tabpanel" class="tab-pane active" id="limit" aria-expanded="true" aria-labelledby="base-limit">
                                            <div class="row">
                                                <div class="col-12 col-xl-6 border-right-blue-grey border-right-lighten-4 pr-2">
                                                    <div class="row my-2">
                                                        <div class="col-4">
                                                            <h5 class="text-bold-600 mb-0">Buy BTC</h5>
                                                        </div>
                                                        <div class="col-8 text-right">
                                                            <p class="text-muted mb-0">USD Balance: $ 5000.00</p>
                                                        </div>
                                                    </div>
                                                    <form class="form form-horizontal">
                                                        <div class="form-body">
                                                            <div class="form-group row">
                                                                <label class="col-md-3 col-form-label" for="btc-limit-buy-price">Price</label>
                                                                <div class="col-md-9">
                                                                    <input type="number" id="btc-limit-buy-price" class="form-control" placeholder="$ 11916.9" name="btc-limit-buy-price">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-3 col-form-label" for="btc-limit-buy-amount">Amount</label>
                                                                <div class="col-md-9">
                                                                    <input type="number" id="btc-limit-buy-amount" class="form-control" placeholder="0.026547 BTC" name="btc-limit-buy-amount">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-3"></div>
                                                                <div class="col-md-9">
                                                                    <button type="button" class="btn round btn-outline-secondary btn-sm">25%</button>
                                                                    <button type="button" class="btn round btn-outline-secondary btn-sm">50%</button>
                                                                    <button type="button" class="btn round btn-outline-secondary btn-sm">75%</button>
                                                                    <button type="button" class="btn round btn-outline-secondary btn-sm">100%</button>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-3 col-form-label" for="btc-limit-buy-total">Total</label>
                                                                <div class="col-md-9">
                                                                    <input type="number" disabled id="btc-limit-buy-total" class="form-control" placeholder="$ 318.1856" name="btc-limit-buy-total">
                                                                </div>
                                                            </div>
                                                            <div class="form-actions pb-0">
                                                                <button type="submit" class="btn round btn-success btn-block btn-glow">
                                                                    Buy BTC </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-12 col-xl-6 pl-2 p-0">
                                                    <div class="row my-2">
                                                        <div class="col-4">
                                                            <h5 class="text-bold-600 mb-0">Sell BTC</h5>
                                                        </div>
                                                        <div class="col-8 text-right">
                                                            <p class="text-muted mb-0">BTC Balance: 1.2654898</p>
                                                        </div>
                                                    </div>
                                                    <form class="form form-horizontal">
                                                        <div class="form-body">
                                                            <div class="form-group row">
                                                                <label class="col-md-3 col-form-labtc-pricbel" for="btc-price">Price</label>
                                                                <div class="col-md-9">
                                                                    <input type="number" id="btc-price" class="form-control" placeholder="$ 11916.9" name="btc-limit-sell-price">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-3 col-form-label" for="btc-limit-sell-amount">Amount</label>
                                                                <div class="col-md-9">
                                                                    <input type="number" id="btc-limit-sell-amount" class="form-control" placeholder="0.026547 BTC" name="btc-limit-sell-amount">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-3"></div>
                                                                <div class="col-md-9">
                                                                    <button type="button" class="btn round btn-outline-secondary btn-sm">25%</button>
                                                                    <button type="button" class="btn round btn-outline-secondary btn-sm">50%</button>
                                                                    <button type="button" class="btn round btn-outline-secondary btn-sm">75%</button>
                                                                    <button type="button" class="btn round btn-outline-secondary btn-sm">100%</button>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-3 col-form-label" for="btc-limit-sell-total">Total</label>
                                                                <div class="col-md-9">
                                                                    <input type="number" disabled id="btc-limit-sell-total" class="form-control" placeholder="$ 318.1856" name="btc-limit-sell-total">
                                                                </div>
                                                            </div>
                                                            <div class="form-actions pb-0">
                                                                <button type="submit" class="btn round btn-danger btn-block btn-glow">
                                                                    Sell BTC </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="market" aria-labelledby="base-market">
                                            <div class="row">
                                                <div class="col-12 col-xl-6 border-right-blue-grey border-right-lighten-4">
                                                    <div class="row my-2">
                                                        <div class="col-4">
                                                            <h5 class="text-bold-600 mb-0">Buy BTC</h5>
                                                        </div>
                                                        <div class="col-8 text-right">
                                                            <p class="text-muted mb-0">USD Balance: $ 5000.00</p>
                                                        </div>
                                                    </div>
                                                    <form class="form form-horizontal">
                                                        <div class="form-body">
                                                            <div class="form-group row">
                                                                <label class="col-md-3 col-form-label" for="btc-market-buy-price">Price</label>
                                                                <div class="col-md-9">
                                                                    <input type="number" disabled id="btc-market-buy-price" class="form-control" placeholder="Market prise $" name="btc-market-buy-price">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-3 col-form-label" for="btc-market-buy-amount">Amount</label>
                                                                <div class="col-md-9">
                                                                    <input type="number" id="btc-market-buy-amount" class="form-control" placeholder="0.026547 BTC" name="btc-market-buy-amount">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-3"></div>
                                                                <div class="col-md-9">
                                                                    <button type="button" class="btn round btn-outline-secondary btn-sm">25%</button>
                                                                    <button type="button" class="btn round btn-outline-secondary btn-sm">50%</button>
                                                                    <button type="button" class="btn round btn-outline-secondary btn-sm">75%</button>
                                                                    <button type="button" class="btn round btn-outline-secondary btn-sm">100%</button>
                                                                </div>
                                                            </div>
                                                            <div class="form-actions pb-0">
                                                                <button type="submit" class="btn round btn-success btn-block btn-glow">
                                                                    Buy BTC </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-12 col-xl-6 pl-2 p-0">
                                                    <div class="row my-2">
                                                        <div class="col-4">
                                                            <h5 class="text-bold-600 mb-0">Sell BTC</h5>
                                                        </div>
                                                        <div class="col-8 text-right">
                                                            <p class="text-muted mb-0">BTC Balance: 1.2654898</p>
                                                        </div>
                                                    </div>
                                                    <form class="form form-horizontal">
                                                        <div class="form-body">
                                                            <div class="form-group row">
                                                                <label class="col-md-3 col-form-label" for="btc-mrk-price">Price</label>
                                                                <div class="col-md-9">
                                                                    <input type="number" disabled id="btc-mrk-price" class="form-control" placeholder="Market prise $" name="btc-market-sell-price">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-3 col-form-label" for="btc-market-sell-amount">Amount</label>
                                                                <div class="col-md-9">
                                                                    <input type="number" id="btc-market-sell-amount" class="form-control" placeholder="0.026547 BTC" name="btc-market-sell-amount">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-3"></div>
                                                                <div class="col-md-9">
                                                                    <button type="button" class="btn round btn-outline-secondary btn-sm">25%</button>
                                                                    <button type="button" class="btn round btn-outline-secondary btn-sm">50%</button>
                                                                    <button type="button" class="btn round btn-outline-secondary btn-sm">75%</button>
                                                                    <button type="button" class="btn round btn-outline-secondary btn-sm">100%</button>
                                                                </div>
                                                            </div>
                                                            <div class="form-actions pb-0">
                                                                <button type="submit" class="btn round btn-danger btn-block btn-glow">
                                                                    Sell BTC </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="stop-limit" aria-labelledby="base-stop-limit">
                                            <div class="row">
                                                <div class="col-12 col-xl-6 border-right-blue-grey border-right-lighten-4">
                                                    <div class="row my-2">
                                                        <div class="col-4">
                                                            <h5 class="text-bold-600 mb-0">Buy BTC</h5>
                                                        </div>
                                                        <div class="col-8 text-right">
                                                            <p class="text-muted mb-0">USD Balance: $ 5000.00</p>
                                                        </div>
                                                    </div>
                                                    <form class="form form-horizontal">
                                                        <div class="form-body">
                                                            <div class="form-group row">
                                                                <label class="col-md-3 col-form-label" for="btc-stop-buy">Stop</label>
                                                                <div class="col-md-9">
                                                                    <input type="number" id="btc-stop-buy" class="form-control" placeholder="$ 11916.9" name="btc-stop-buy">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-3 col-form-label" for="btc-stop-buy-limit">Limit</label>
                                                                <div class="col-md-9">
                                                                    <input type="number" id="btc-stop-buy-limit" class="form-control" placeholder="$ 12000.0" name="btc-stop-buy-limit">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-3 col-form-label" for="btc-stop-buy-amount">Amount</label>
                                                                <div class="col-md-9">
                                                                    <input type="number" id="btc-stop-buy-amount" class="form-control" placeholder="0.026547 BTC" name="btc-stop-buy-amount">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-3"></div>
                                                                <div class="col-md-9">
                                                                    <button type="button" class="btn round btn-outline-secondary btn-sm">25%</button>
                                                                    <button type="button" class="btn round btn-outline-secondary btn-sm">50%</button>
                                                                    <button type="button" class="btn round btn-outline-secondary btn-sm">75%</button>
                                                                    <button type="button" class="btn round btn-outline-secondary btn-sm">100%</button>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-3 col-form-label" for="btc-stop-buy-total">Total</label>
                                                                <div class="col-md-9">
                                                                    <input type="number" disabled id="btc-stop-buy-total" class="form-control" placeholder="$ 318.1856" name="btc-stop-buy-total">
                                                                </div>
                                                            </div>
                                                            <div class="form-actions pb-0">
                                                                <button type="submit" class="btn round btn-success btn-block btn-glow">
                                                                    Buy BTC </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-12 col-xl-6 pl-2 p-0">
                                                    <div class="row my-2">
                                                        <div class="col-4">
                                                            <h5 class="text-bold-600 mb-0">Sell BTC</h5>
                                                        </div>
                                                        <div class="col-8 text-right">
                                                            <p class="text-muted mb-0">BTC Balance: 1.2654898</p>
                                                        </div>
                                                    </div>
                                                    <form class="form form-horizontal">
                                                        <div class="form-body">
                                                            <div class="form-group row">
                                                                <label class="col-md-3 col-form-label" for="btc-stop-sell">Stop</label>
                                                                <div class="col-md-9">
                                                                    <input type="number" id="btc-stop-sell" class="form-control" placeholder="$ 11916.9" name="btc-stop-sell">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-3 col-form-label" for="btc-stop-sell-limit">Limit</label>
                                                                <div class="col-md-9">
                                                                    <input type="number" id="btc-stop-sell-limit" class="form-control" placeholder="$ 12000.0" name="btc-stop-sell-limit">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-3 col-form-label" for="btc-stop-sell-amount">Amount</label>
                                                                <div class="col-md-9">
                                                                    <input type="number" id="btc-stop-sell-amount" class="form-control" placeholder="0.026547 BTC" name="btc-stop-sell-amount">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-3"></div>
                                                                <div class="col-md-9">
                                                                    <button type="button" class="btn round btn-outline-secondary btn-sm">25%</button>
                                                                    <button type="button" class="btn round btn-outline-secondary btn-sm">50%</button>
                                                                    <button type="button" class="btn round btn-outline-secondary btn-sm">75%</button>
                                                                    <button type="button" class="btn round btn-outline-secondary btn-sm">100%</button>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-3 col-form-label" for="btc-stop-sell-total">Total</label>
                                                                <div class="col-md-9">
                                                                    <input type="number" disabled id="btc-stop-sell-total" class="form-control" placeholder="$ 318.1856" name="btc-stop-sell-total">
                                                                </div>
                                                            </div>
                                                            <div class="form-actions pb-0">
                                                                <button type="submit" class="btn round btn-danger btn-block btn-glow">
                                                                    Sell BTC </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Trade History & Place Order -->


                <!-- Sell Orders & Buy Order -->
                <div class="row match-height">
                    <div class="col-12 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Sell Order</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <p class="text-muted">Total BTC available: 6542.56585</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-de mb-0">
                                        <thead>
                                            <tr>
                                                <th>Price per BTC</th>
                                                <th>BTC Ammount</th>
                                                <th>Total($)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="bg-success bg-lighten-5">
                                                <td>10583.4</td>
                                                <td><i class="cc BTC-alt"></i> 0.45000000</td>
                                                <td>$ 4762.53</td>
                                            </tr>
                                            <tr>
                                                <td>10583.5</td>
                                                <td><i class="cc BTC-alt"></i> 0.04000000</td>
                                                <td>$ 423.34</td>
                                            </tr>
                                            <tr>
                                                <td>10583.7</td>
                                                <td><i class="cc BTC-alt"></i> 0.25100000</td>
                                                <td>$ 2656.51</td>
                                            </tr>
                                            <tr>
                                                <td>10583.8</td>
                                                <td><i class="cc BTC-alt"></i> 0.35000000</td>
                                                <td>$ 3704.33</td>
                                            </tr>
                                            <tr>
                                                <td>10595.7</td>
                                                <td><i class="cc BTC-alt"></i> 0.30000000</td>
                                                <td>$ 3178.71</td>
                                            </tr>
                                            <tr class="bg-danger bg-lighten-5">
                                                <td>10599.5</td>
                                                <td><i class="cc BTC-alt"></i> 0.02000000</td>
                                                <td>$ 211.99</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Buy Order</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <p class="text-muted">Total USD available: 9065930.43</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-de mb-0">
                                        <thead>
                                            <tr>
                                                <th>Price per BTC</th>
                                                <th>BTC Ammount</th>
                                                <th>Total($)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="bg-danger bg-lighten-5">
                                                <td>10599.5</td>
                                                <td><i class="cc BTC-alt"></i> 0.02000000</td>
                                                <td>$ 211.99</td>
                                            </tr>
                                            <tr>
                                                <td>10583.5</td>
                                                <td><i class="cc BTC-alt"></i> 0.04000000</td>
                                                <td>$ 423.34</td>
                                            </tr>
                                            <tr>
                                                <td>10583.8</td>
                                                <td><i class="cc BTC-alt"></i> 0.35000000</td>
                                                <td>$ 3704.33</td>
                                            </tr>
                                            <tr>
                                                <td>10595.7</td>
                                                <td><i class="cc BTC-alt"></i> 0.30000000</td>
                                                <td>$ 3178.71</td>
                                            </tr>
                                            <tr class="bg-danger bg-lighten-5">
                                                <td>10583.7</td>
                                                <td><i class="cc BTC-alt"></i> 0.25100000</td>
                                                <td>$ 2656.51</td>
                                            </tr>
                                            <tr>
                                                <td>10595.8</td>
                                                <td><i class="cc BTC-alt"></i> 0.29697926</td>
                                                <td>$ 3146.74</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Sell Orders & Buy Order -->

                <!-- Active Orders -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Active Order</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <button class="btn btn-sm round btn-danger btn-glow"><i class="la la-close font-medium-1"></i>
                                        Cancel all</button>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-de mb-0">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Type</th>
                                                <th>Amount BTC</th>
                                                <th>BTC Remaining</th>
                                                <th>Price</th>
                                                <th>USD</th>
                                                <th>Fee (%)</th>
                                                <th>Cancel</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2018-01-31 06:51:51</td>
                                                <td class="success">Buy</td>
                                                <td><i class="cc BTC-alt"></i> 0.58647</td>
                                                <td><i class="cc BTC-alt"></i> 0.58647</td>
                                                <td>11900.12</td>
                                                <td>$ 6979.78</td>
                                                <td>0.2</td>
                                                <td><button class="btn btn-sm round btn-outline-danger"> Cancel</button></td>
                                            </tr>
                                            <tr>
                                                <td>2018-01-31 06:50:50</td>
                                                <td class="danger">Sell</td>
                                                <td><i class="cc BTC-alt"></i> 1.38647</td>
                                                <td><i class="cc BTC-alt"></i> 0.38647</td>
                                                <td>11905.09</td>
                                                <td>$ 4600.97</td>
                                                <td>0.2</td>
                                                <td><button class="btn btn-sm round btn-outline-danger"> Cancel</button></td>
                                            </tr>
                                            <tr>
                                                <td>2018-01-31 06:49:51</td>
                                                <td class="success">Buy</td>
                                                <td><i class="cc BTC-alt"></i> 0.45879</td>
                                                <td><i class="cc BTC-alt"></i> 0.45879</td>
                                                <td>11901.85</td>
                                                <td>$ 5460.44</td>
                                                <td>0.2</td>
                                                <td><button class="btn btn-sm round btn-outline-danger"> Cancel</button></td>
                                            </tr>
                                            <tr>
                                                <td>2018-01-31 06:51:51</td>
                                                <td class="success">Buy</td>
                                                <td><i class="cc BTC-alt"></i> 0.89877</td>
                                                <td><i class="cc BTC-alt"></i> 0.89877</td>
                                                <td>11899.25</td>
                                                <td>$ 10694.6</td>
                                                <td>0.2</td>
                                                <td><button class="btn btn-sm round btn-outline-danger"> Cancel</button></td>
                                            </tr>
                                            <tr>
                                                <td>2018-01-31 06:51:51</td>
                                                <td class="danger">Sell</td>
                                                <td><i class="cc BTC-alt"></i> 0.45712</td>
                                                <td><i class="cc BTC-alt"></i> 0.45712</td>
                                                <td>11908.58</td>
                                                <td>$ 5443.65</td>
                                                <td>0.2</td>
                                                <td><button class="btn btn-sm round btn-outline-danger"> Cancel</button></td>
                                            </tr>
                                            <tr>
                                                <td>2018-01-31 06:51:51</td>
                                                <td class="success">Buy</td>
                                                <td><i class="cc BTC-alt"></i> 0.58647</td>
                                                <td><i class="cc BTC-alt"></i> 0.58647</td>
                                                <td>11900.12</td>
                                                <td>$ 6979.78</td>
                                                <td>0.2</td>
                                                <td><button class="btn btn-sm round btn-outline-danger"> Cancel</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Active Orders -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT</a></span><span class="float-md-right d-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i><span id="scroll-top"></span></span></p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?=base_url("assets/template/app-assets/vendors/js/vendors.min.js")?>"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?=base_url("assets/template/app-assets/vendors/js/charts/chart.min.js")?>"></script>
    <script src="<?=base_url("assets/template/app-assets/vendors/js/charts/echarts/echarts.js")?>"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?=base_url("assets/template/app-assets/js/core/app-menu.js")?>"></script>
    <script src="<?=base_url("assets/template/app-assets/js/core/app.js")?>"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?=base_url("assets/template/app-assets/js/scripts/pages/dashboard-crypto.js")?>"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>