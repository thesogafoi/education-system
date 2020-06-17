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
        <nav class="uk-navbar-container" uk-navbar>
            <div class="uk-navbar-right">
                <a class="uk-navbar-toggle uk-hidden@s" uk-navbar-toggle-icon href="#offCanvasMenu"
                    uk-toggle="target: #offCanvasMenu"></a>
                <ul class="uk-navbar-nav uk-visible@s">
                    <li class="uk-active"><a href="">خانه</a></li>

                    <li><a href=""> بلاگ </a></li>
                </ul>
            </div><!-- uk-navbar-right -->
            <div class="uk-navbar-left">
                <a href="" class="uk-navbar-item uk-logo">LOGO</a>
            </div><!-- uk-navbar-left -->

        </nav> <!-- MAIN MENU -->
        <div id="offCanvasMenu" uk-offcanvas="overlay: true">
            <div class="uk-offcanvas-bar uk-flex uk-flex-column">

                <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
                    <li class="uk-active"><a href="#">Active</a></li>
                    <li class="uk-parent">
                        <a href="#">Parent</a>
                        <ul class="uk-nav-sub">
                            <li><a href="#">Sub item</a></li>
                            <li><a href="#">Sub item</a></li>
                        </ul>
                    </li>
                    <li class="uk-nav-header">Header</li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: table"></span> Item</a></li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span> Item</a></li>
                    <li class="uk-nav-divider"></li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: trash"></span> Item</a></li>
                </ul>

            </div> <!-- off canvas menu content -->
        </div> <!-- off canvas menu for mobile only  -->
    </header>
    <!-- menus and header related parts -->   
<div id="app">
@yield('content')
</div>
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
@yield('script')
<script src="{{asset('js/front/app.js')}}"></script>
<script src="{{asset('js/uikit.min.js')}}"></script>
<script src="{{asset('js/uikit-icons.min.js')}}"></script>
</body>
</html>