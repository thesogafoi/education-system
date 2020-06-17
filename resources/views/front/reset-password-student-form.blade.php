@extends('layouts.front-app')
@section('title')
Dashboard
@endsection
@section('content')
<main  class="es-main">


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
                    <div class="uk-card-header">
                        <h4 class="uk-card-title"> بازیابی رمز عبور برای دانش آموزان </h4>
                    </div> <!-- form tabs -->
                    <div class="uk-card-body uk-text-right">
                        <form class="uk-form-stacked" action="/reset/password/student" method="POST">
                            {{csrf_field()}}
                            <div class="uk-margin">
                                <label class="uk-form-label" for="user-email"> ایمیل </label>
                                <div class="uk-form-controls uk-inline">
                                    <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                    <input class="uk-input uk-form-width-large" id="student-username"
                                        type="email" name="email" value="{{old('email')}}">
                                </div>
                            </div> <!-- field1 -->
                            <div class="uk-width-expand">
                                <button class="uk-button uk-button-primary uk-width-1-1"> بازیابی
                                </button>
                            </div> <!-- submit button -->
                        </form>
                        @if(request()->session()->has('seccessSendEmail'))
                        <div class="uk-alert-success" uk-alert>
                            <p> لینک شناسایی به ایمیل شما با موفقیت ارسال شد </p>
                            <a class="uk-alert-close" uk-close></a>
                        </div> <!-- succes alert -->
                        @endif
                        
                        @if($errors->has('email'))
                            <div class="uk-alert-danger" uk-alert>
                                <p> {{$errors->get('email')[0]}}</p>
                                <a class="uk-alert-close" uk-close></a>
                            </div> <!-- danger alert -->
                        @endif
                    </div> <!-- card body and form content -->
                </div> <!-- card -->

            </div> <!-- container small -->
        </div> <!-- section -->
    </div> <!-- left column -->
</div> <!-- main grid -->


</main> <!-- Main Content of the Pages goes here -->
@endsection