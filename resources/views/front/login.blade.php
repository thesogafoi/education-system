@extends('layouts.front-app')
@section('title')
Login
@endsection
@section('content')
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

    <main  class="es-main">


    <login inline-template>
        <div class="uk-grid-match uk-grid-collapse uk-child-width-expands@s uk-text-center" uk-grid>
            <div class="uk-width-1-2@s">
                <div class="uk-padding-large">
                    <div class="uk-text-right">
                        <ul class="uk-list uk-list-large uk-list-hyphen">
                            <li> نکته 1 </li>
                            <li> نکته 2 </li>
                            <li> نکته 3 </li>
                        </ul>
                    </div>
                </div>
            </div> <!-- right column -->
            <div class="uk-width-1-2@s">
                <div class="uk-section-muted uk-padding-large">
                    <div class="uk-container-small">
                        <div class="uk-card-default uk-card-small">
                            <div class="uk-card-body">
                                <h3 class="uk-card-title"> خوش آمدید </h3>
                                <ul class="uk-child-width-expand" uk-tab>
                                    <li class="uk-active"><a href="" @click="toggleUserType('student')"> دانش آموزان </a></li>
                                    <li><a href="" @click="toggleUserType('teacher')"> اعضا </a></li>
                                </ul>
                                <ul v-if=" userType != 'teacher'" class="uk-child-width-expand" uk-tab>
                                    <li class="uk-active"><a href="" @click="toggleFormType('login')"> ورود </a></li>
                                    <li><a href="" @click="toggleFormType('register')"> ثبت نام </a></li>
                                </ul>
                            </div> <!-- form tabs -->
                            <div v-if=" userType == 'student' && formType == 'register' " class="uk-card-body uk-text-right">
                                <form class="uk-form-stacked" action="">
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="student-username"> نام کاربری </label>
                                        <div class="uk-form-controls uk-inline">
                                            <span class="uk-form-icon" uk-icon="icon: user"></span>
                                            <input class="uk-input uk-form-width-large" id="student-username"
                                                type="text">
                                        </div>
                                    </div> <!-- field1 -->
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="student-username"> رمز عبور </label>
                                        <div class="uk-form-controls uk-inline">
                                            <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                            <input class="uk-input uk-form-width-large" id="student-username"
                                                type="text">
                                        </div>
                                    </div> <!-- field2 -->
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="student-username"> تکرار رمز عبور </label>
                                        <div class="uk-form-controls uk-inline">
                                            <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                            <input class="uk-input uk-form-width-large" id="student-username"
                                                type="text">
                                        </div>
                                    </div> <!-- field3 -->
                                    <div uk-grid>
                                        <div class="uk-width-1-2">
                                            <label><input class="uk-checkbox" type="checkbox"> دائم </label>
                                        </div>
                                        <div class="uk-width-expand">
                                            <button class="uk-button uk-button-primary uk-width-1-1"> آغاز ثبت نام
                                            </button>
                                        </div>
                                    </div> <!-- form options -->
                                </form>
                            </div> <!-- card body and register form content student -->
                            <div v-if=" userType == 'student' && formType == 'login' " class="uk-card-body uk-text-right">
                                <form class="uk-form-stacked" action="">
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="student-username"> نام کاربری </label>
                                        <div class="uk-form-controls uk-inline">
                                            <span class="uk-form-icon" uk-icon="icon: user"></span>
                                            <input class="uk-input uk-form-width-large" id="student-username"
                                                type="text">
                                        </div>
                                    </div> <!-- field1 -->
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="student-username"> رمز عبور </label>
                                        <div class="uk-form-controls uk-inline">
                                            <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                            <input class="uk-input uk-form-width-large" id="student-username"
                                                type="text">
                                        </div>
                                    </div> <!-- field2 -->
                                    <div uk-grid>
                                        <div class="uk-width-1-2">
                                            <a href=""> فراموش؟ </a>
                                        </div>
                                        <div class="uk-width-1-2">
                                            <label><input class="uk-checkbox" type="checkbox"> دائم </label>
                                        </div>
                                        <div class="uk-width-expand">
                                            <button class="uk-button uk-button-primary uk-width-1-1"> 
                                                ورود
                                            </button>
                                        </div>
                                    </div> <!-- form options -->
                                </form>
                            </div> <!-- card body and login form content student -->

                            <div v-if=" userType == 'teacher'" class="uk-card-body uk-text-right">
                                <form class="uk-form-stacked" action="">
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="student-username"> نام کاربری </label>
                                        <div class="uk-form-controls uk-inline">
                                            <span class="uk-form-icon" uk-icon="icon: user"></span>
                                            <input class="uk-input uk-form-width-large" id="student-username"
                                                type="text">
                                        </div>
                                    </div> <!-- field1 -->
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="student-username"> رمز عبور </label>
                                        <div class="uk-form-controls uk-inline">
                                            <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                            <input class="uk-input uk-form-width-large" id="student-username"
                                                type="text">
                                        </div>
                                    </div> <!-- field2 -->
                                    <div uk-grid>
                                        <div class="uk-width-1-2">
                                            <a href=""> فراموش؟ </a>
                                        </div>
                                        <div class="uk-width-1-2">
                                            <label><input class="uk-checkbox" type="checkbox"> دائم </label>
                                        </div>
                                        <div class="uk-width-expand">
                                            <button class="uk-button uk-button-primary uk-width-1-1"> 
                                                ورود
                                            </button>
                                        </div>
                                    </div> <!-- form options -->
                                </form>
                            </div> <!-- card body and form content teacher -->    
                        </div> <!-- card -->

                    </div> <!-- container small -->
                </div> <!-- section -->
            </div> <!-- left column -->
        </div> <!-- main grid -->
    </login>

    </main> <!-- Main Content of the Pages goes here -->
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
something
@endsection