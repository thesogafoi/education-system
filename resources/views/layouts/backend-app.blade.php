<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
    <title>@yield('title')</title>
    @yield('style')
</head>
<body>
<header class="es-header">
        <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
            <nav class="uk-navbar-container" uk-navbar="mode: click">
                <div class="uk-navbar-right">
                    <a class="uk-navbar-toggle uk-hidden@m" uk-navbar-toggle-icon href="#offCanvasSidebar"
                        uk-toggle="target: #offCanvasSidebar"></a>
                    <ul class="uk-navbar-nav uk-iconnav">
                        <li>
                            <a href="" uk-icon="icon: user" type="button"> </a> <!-- will change to avatar picture later -->
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li>  <a href="#" >  <span uk-icon="icon: cog" class="uk-margin-small-left"></span> تنظیمات </a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li>  <a href="#" >  <span uk-icon="icon: sign-out" class="uk-margin-small-left"></span> خروج </a></li>
                                    <!-- more items will add here -->
                                </ul>
                            </div>
                        </li> <!-- user quick-access panel -->

                        <li>
                            <a href="" uk-icon="icon: bell" type="button"> </a> <!-- will change to avatar picture later -->
                            <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li>  <a href="#" >  <i class="es-notif-x-counter"> یک </i> دانش آموز در انتظار تأیید   <span uk-icon="icon: triangle-right" class="uk-margin-small-right"></span> </a> </li>
                                        <!-- replace x in 'es-notif-x-counter' with modifier name e.g es-notif-student-counter -->
                                    <li class="uk-nav-divider"></li>
                                    <li>  <a href="#" > موعد چک نزدیک است <span uk-icon="icon: triangle-right" class="uk-margin-small-right"></span> </a> </li>
                                    <li class="uk-nav-divider"></li>
                                    <li>  <a href="#" >  <i class="es-notif-x-counter"> سه </i> پیام جدید دارید <span uk-icon="icon: triangle-right" class="uk-margin-small-right"></span> </a> </li>
                                    <!-- replace x in 'es-notif-x-counter' with modifier name e.g es-notif-student-counter -->
                                    <!-- more items will add here -->
                                    <li class="uk-nav-divider"></li>
                                    <a class="uk-button uk-button-default" href=""> پاک کردن اعلان ها </a>
                                </ul>
                            </div>
                        </li>  <!-- notification panel -->

                    </ul> <!-- main navigarion with icons -->
                </div><!-- uk-navbar-right -->
                <div class="uk-navbar-left">
                    <a href="" class="uk-navbar-item uk-logo">LOGO</a>
                </div><!-- uk-navbar-left -->

            </nav> <!-- MAIN MENU -->
        </div> <!-- sticky nav -->
    </header>
    <!-- menus and header related parts -->

    <div id="offCanvasSidebar" uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar uk-flex uk-flex-column">
            <h5> سیستم آموزشی سام </h5>
            <ul class="uk-nav uk-nav-default uk-nav-right uk-margin-auto-vertical">
                <li class=" uk-active uk-parent">
                    <a href="#"><span class="uk-margin-small-left" uk-icon="icon: home"></span>  خانه </a>
                    <ul class="uk-nav-sub">
                        <li><a href="#"> به روز رسانی </a></li>
                        <li><a href="#"> آمار ها </a></li>
                    </ul>
                </li>
                <li class="uk-nav-divider"></li>
                <li class=" uk-active uk-parent">
                    <a href="#"> <span class="uk-margin-small-left" uk-icon="icon: database"></span> دانش آموزان </a>
                    <ul class="uk-nav-sub">
                        <li><a href="#"> کل دانش آموزان </a></li>
                        <li><a href="#"> در انتظار تأیید <span class="uk-badge">1</span></a></li>
                        <li><a href="#"> برتر ها </a></li>
                    </ul>
                </li>
                <li class="uk-nav-divider"></li>
                <li class=" uk-active uk-parent">
                    <a href="#"> <span class="uk-margin-small-left" uk-icon="icon: user"></span> مدیریت اعضا </a>
                    <ul class="uk-nav-sub">
                        <li><a href="#"> کاربر جدید </a></li>
                        <li><a href="#"> ویرایش کاربران </a></li>
                        <li><a href="#"> کل کاربران </a></li>
                    </ul>
                </li>
                <!-- more items will add here -->
                <!--<li class=" uk-active uk-parent"> a ul li </li>  -->
            </ul>

        </div> <!-- off canvas menu content -->
    </div> <!-- off canvas sidebar navigation under 960px -->


    <aside class="es-sidebar-nav uk-visible@m">
        <h5> سیستم آموزشی سام </h5>
            <ul class="uk-nav uk-nav-default uk-nav-right uk-margin-auto-vertical">
                <li class=" uk-active uk-parent">
                    <a href="#"><span class="uk-margin-small-left" uk-icon="icon: home"></span>  خانه </a>
                    <ul class="uk-nav-sub">
                        <li><a href="#"> به روز رسانی </a></li>
                        <li><a href="#"> آمار ها </a></li>
                    </ul>
                </li>
                <li class="uk-nav-divider"></li>
                <li class=" uk-active uk-parent">
                    <a href="#"> <span class="uk-margin-small-left" uk-icon="icon: database"></span> دانش آموزان </a>
                    <ul class="uk-nav-sub">
                        <li><a href="#"> کل دانش آموزان </a></li>
                        <li><a href="#"> در انتظار تأیید <span class="uk-badge">1</span></a></li>
                        <li><a href="#"> برتر ها </a></li>
                    </ul>
                </li>
                <li class="uk-nav-divider"></li>
                <li class=" uk-active uk-parent">
                    <a href="#"> <span class="uk-margin-small-left" uk-icon="icon: user"></span> مدیریت اعضا </a>
                    <ul class="uk-nav-sub">
                        <li><a href="#"> کاربر جدید </a></li>
                        <li><a href="#"> ویرایش کاربران </a></li>
                        <li><a href="#"> کل کاربران </a></li>
                    </ul>
                </li>
                <!-- more items will add here -->
                <!--<li class=" uk-active uk-parent"> a ul li </li>  -->
            </ul>
    </aside> <!-- sidebar when above 960px -->

    <main  class="es-admindash-main">
<div id="app">
@yield('content')
</div>

@yield('script')


<footer  class="es-footer">
            <div>
                <div class="uk-container">
                    <div class="uk-padding-large">
                        فوتر
                    </div>
                </div>
    </div>
</footer>
        <!--All the footer content-->
</main> <!-- Main Content of the Pages goes here -->
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/uikit.min.js')}}"></script>
<script src="{{asset('js/uikit-icons.min.js')}}"></script>
</body>
</html>