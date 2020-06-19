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
@can('studentCanUpdateForm' , $student))
@include('front.includes.student-data-form')
@endcan



@endsection