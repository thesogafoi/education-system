@extends('layouts.front-app')
@section('title')
Dashboard
@endsection
@section('content')

<main class="es-main">
    <div class="uk-grid-collapse uk-flex-center uk-text-center" uk-grid>
        <div class="uk-child-width-1-1@">
            <div class="uk-section-muted uk-container">
                <div class="uk-card-default uk-card-small">
                    <div class="uk-card-body">
                        <h3 class="uk-card-title"> بازیابی کلمه ی رمز عبور برای {{$user->firstname}}
                            {{$user->lastname}} </h3>
                    </div> <!-- form tabs -->
                    <div class="uk-card-body uk-text-right">
                        <form class="uk-form-stacked" action="{{route('reset.password' , $user->reset_password_token)}}"
                            method="POST">
                            {{method_field('PUT')}}
                            {{csrf_field()}}
                            <div class="uk-margin">
                                <label class="uk-form-label" for="student-username"> رمز عبور </label>
                                <div class="uk-form-controls uk-inline">
                                    <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                    <input class="uk-input uk-form-width-large" id="student-username" type="text"
                                        name="password">
                                </div>
                            </div> <!-- field1 -->
                            <div class="uk-margin">
                                <label class="uk-form-label" for="student-username"> تکرار رمز عبور </label>
                                <div class="uk-form-controls uk-inline">
                                    <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                    <input class="uk-input uk-form-width-large" id="student-username" type="text"
                                        name="password_confirmation">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="uk-width-expand">
                                    <button type="submit" class="uk-button uk-button-primary uk-width-1-1"> آغاز ثبت
                                        نام
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div> <!-- card body and register form content student -->
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
            </div> <!-- section -->
        </div> <!-- left column -->
    </div> <!-- main grid -->

</main> <!-- Main Content of the Pages goes here -->



@endsection