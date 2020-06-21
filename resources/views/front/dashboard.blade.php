@extends('layouts.front-dashboard')
@section('title')
داشبورد دانش آموزان
@endsection
@section('style')
<style>
        .es-sidebar-nav {
            position: fixed;
            top: 80px;
            bottom: 0;
            box-sizing: border-box;
            width: 240px !important;
            padding: 40px 40px 60px 40px;
            border-left: 1px #e5e5e5 solid;
            overflow: auto;
        }
        @media screen and (min-width: 960px) {
            .es-sidebar-nav+.es-admindash-main {
                padding-right: 240px;
            }
        }
        @media screen and  (min-width: 1200px) {
            .es-sidebar-nav+.es-admindash-main {
                padding-left: 40px;
            }
        }
        @media screen and  (min-width: 1400px) {
            .es-sidebar-nav+.es-admindash-main {
                padding-left: 40px;
            }
        }
        .es-welcome {
            font-size: 18px;
        }
        .es-normal-fontsize {
            font-size: 14px;
        }
    </style>
@endsection
@section('content')
<br>
@if(!$student->close_alert)
<div class="es-dashboard-alertbox">
    @if($student->status == 2)
        <div class="uk-alert-success" uk-alert>
            <p> ثبت نام شما در سیستم مدرسه با موفقیت به پایان رسید، در صورت نیاز با شما تماس گرفته خواهد
                شد </p>
            <a class="uk-alert-close" uk-close></a>
        </div> <!-- succes alert -->
    @endif
    @if($student->status == 0)
        <div class="uk-alert-danger" uk-alert>
            <p> دانش آموز عزیز ، برای تکمیل روند ثبت نام نیاز است فرم زیر را تکمیل نمایید </p>
            <a class="uk-alert-close" uk-close></a>
        </div> <!-- danger alert -->
    @endif
    @if($student->status == 1)
        <div class="uk-alert-danger" uk-alert>
            <p> دانش آموز عزیز ، فرم ثبت نام شما در انتظار تأیید مدیریت می باشد </p>
        </div> <!-- danger alert -->
    @endif
</div> <!-- alertbox -->
@endif

@if($student->can('update' , $studentsData))
@include('front.includes.student-data-form')
@endif



@endsection