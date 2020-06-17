@extends('layouts.front-app')
@section('title')
Login
@endsection
@section('content')
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
                                <form class="uk-form-stacked" action="{{route('register.student')}}" method="POST">
                                    {{csrf_field()}}
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="student-username"> نام کاربری </label>
                                        <div class="uk-form-controls uk-inline">
                                            <span class="uk-form-icon" uk-icon="icon: user"></span>
                                            <input class="uk-input uk-form-width-large" id="student-username"
                                                type="text" name="username" value="{{old('username')}}">
                                        </div>
                                    </div> <!-- field1 -->
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="student-username"> رمز عبور </label>
                                        <div class="uk-form-controls uk-inline">
                                            <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                            <input class="uk-input uk-form-width-large" id="student-username"
                                                type="text" name="password">
                                        </div>
                                    </div> <!-- field2 -->
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="student-username"> تکرار رمز عبور </label>
                                        <div class="uk-form-controls uk-inline">
                                            <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                            <input class="uk-input uk-form-width-large" id="student-username"
                                                type="text" name="password_confirmation">
                                        </div>
                                    </div> <!-- field3 -->
                                    <div uk-grid>
                                        <div class="uk-width-1-2">
                                            <label><input class="uk-checkbox" type="checkbox" name="remember"> دائم </label>
                                        </div>
                                        <div class="uk-width-expand">
                                            <button type="submit" class="uk-button uk-button-primary uk-width-1-1"> آغاز ثبت نام
                                            </button>
                                        </div>
                                    </div> <!-- form options -->
                                </form>
                            </div> <!-- card body and register form content student -->
                            <div v-if=" userType == 'student' && formType == 'login' " class="uk-card-body uk-text-right">
                                <form class="uk-form-stacked" action="/login/student" method="POST">
                                    {{csrf_field()}}
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="student-username"> نام کاربری </label>
                                        <div class="uk-form-controls uk-inline">
                                            <span class="uk-form-icon" uk-icon="icon: user"></span>
                                            <input class="uk-input uk-form-width-large" id="student-username"
                                                type="text" name="username" value="{{old('username')}}">
                                        </div>
                                    </div> <!-- field1 -->
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="student-username"> رمز عبور </label>
                                        <div class="uk-form-controls uk-inline">
                                            <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                            <input class="uk-input uk-form-width-large" id="student-username"
                                                type="text" name="password">
                                        </div>
                                    </div> <!-- field2 -->
                                    <div uk-grid>
                                        <div class="uk-width-1-2">
                                            <a href="{{route('reset.password.student.form')}}"> فراموش؟ </a>
                                        </div>
                                        <div class="uk-width-1-2">
                                            <label><input class="uk-checkbox" type="checkbox" name="remember"> دائم </label>
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
                                <form class="uk-form-stacked" action="login/teacher" method="POST">
                                    {{csrf_field()}}
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="student-username"> نام کاربری </label>
                                        <div class="uk-form-controls uk-inline">
                                            <span class="uk-form-icon" uk-icon="icon: user"></span>
                                            <input class="uk-input uk-form-width-large" id="student-username"
                                                type="text" name="username" value="{{old('username')}}">
                                        </div>
                                    </div> <!-- field1 -->
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="student-username"> رمز عبور </label>
                                        <div class="uk-form-controls uk-inline">
                                            <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                            <input class="uk-input uk-form-width-large" id="student-username"
                                                type="text" name="password">
                                        </div>
                                    </div> <!-- field2 -->
                                    <div uk-grid>
                                        <div class="uk-width-1-2">
                                            <a href="{{route('reset.password.staff.form')}}"> فراموش؟ </a>
                                        </div>
                                        <div class="uk-width-1-2">
                                            <label><input class="uk-checkbox" type="checkbox" name="remember"> دائم </label>
                                        </div>
                                        <div class="uk-width-expand">
                                            <button class="uk-button uk-button-primary uk-width-1-1"> 
                                                ورود
                                            </button>
                                        </div>
                                    </div> <!-- form options -->
                                </form>
                            </div> <!-- card body and form content teacher -->
                            @if($errors->any())
                            <div class="es-form-feedback">
                                <div class="uk-alert-danger" uk-alert>
                                    <ul class="es-feedback-errors">
                                        @foreach($errors->all() as $error)
                                        <li class="es-feedback-error"> {{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div> <!-- danger alert -->
                            </div> <!-- es-form-feedback -->
                            @endif
                        </div> <!-- card -->

                    </div> <!-- container small -->
                </div> <!-- section -->
            </div> <!-- left column -->
        </div> <!-- main grid -->
    </login>

    </main> <!-- Main Content of the Pages goes here -->
    
@endsection