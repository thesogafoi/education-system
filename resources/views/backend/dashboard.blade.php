@extends('layouts.backend-app')
@section('title')
Dashboard
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

        @media screen and (min-width: 1200px) {
            .es-sidebar-nav+.es-admindash-main {
                padding-left: 40px;
            }
        }

        @media screen and (min-width: 1400px) {
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
   
        <div class="uk-section uk-section-default">
            <div class="uk-container uk-container-small uk-position-relative">
                <div class="es-dashboard-header">
                    <div class="es-dashboard-title">
                        <h3 class="es-welcome"> خانم <span class="es-user-lastname"> عزیزی </span> خوش آمدید </h3>
                        <ul class="uk-breadcrumb">
                            <li><a href="#"> خانه </a></li>
                        </ul> <!-- breadcrumb nav -->
                    </div> <!-- header content -->
                </div> <!-- dashboard header info -->
                <div class="es-dashboard-content">
                    <div  class="uk-grid-match" uk-grid>
                        <div class="uk-width-1-2@s">
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                    <div class="uk-width-auto">
                                        <span class="uk-margin-small-left" uk-icon="icon: user"></span> <!-- can be replace by image, check card section in uikit doc -->
                                    </div>
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom es-normal-fontsize"> کل دانش آموزان </h3>
                                        <p class="uk-text-meta uk-margin-remove-top"> 1616 </p>
                                    </div>
                                </div> <!-- card content -->
                            </div> <!-- card -->
                        </div>  <!-- row1 item -->
                        <div class="uk-width-1-2@s">
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                    <div class="uk-width-auto">
                                        <span class="uk-margin-small-left" uk-icon="icon: user"></span> <!-- can be replace by image, check card section in uikit doc -->
                                    </div>
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom es-normal-fontsize"> در انتظار تأیید </h3>
                                        <p class="uk-text-meta uk-margin-remove-top"> 48 </p>
                                    </div>
                                </div> <!-- card content -->
                            </div> <!-- card -->
                        </div> <!-- row1 item -->
                    </div> <!-- grid - row1 -->
                    <div class="uk-grid-match" uk-grid>
                        <div class="uk-width-1-3@s">
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                    <div class="uk-width-auto">
                                        <span class="uk-margin-small-left" uk-icon="icon: user"></span> <!-- can be replace by image, check card section in uikit doc -->
                                    </div>
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom es-normal-fontsize"> کل اعضا  </h3>
                                        <p class="uk-text-meta uk-margin-remove-top"> 24 </p>
                                    </div>
                                </div>  <!-- card content -->
                            </div>  <!-- card -->
                        </div> <!-- row2 item -->
                        <div class="uk-width-1-3@s">
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                    <div class="uk-width-auto">
                                        <span class="uk-margin-small-left" uk-icon="icon: user"></span> <!-- can be replace by image, check card section in uikit doc -->
                                    </div>
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom es-normal-fontsize"> تعداد معلمین </h3>
                                        <p class="uk-text-meta uk-margin-remove-top"> 5 </p>
                                    </div>
                                </div>  <!-- card content -->
                            </div>  <!-- card -->
                        </div> <!-- row2 item -->
                        <div class="uk-width-1-3@s">
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                    <div class="uk-width-auto">
                                        <span class="uk-margin-small-left" uk-icon="icon: user"></span> <!-- can be replace by image, check card section in uikit doc -->
                                    </div>
                                    <div class="uk-width-expand">
                                        <h3 class="uk-card-title uk-margin-remove-bottom es-normal-fontsize"> معلمین فاقد کلاس </h3>
                                        <p class="uk-text-meta uk-margin-remove-top"> 1 </p>
                                    </div>
                                </div> <!-- card content -->
                            </div> <!-- card -->
                        </div> <!-- row2 item -->
                    </div> <!-- grid - row2 -->

                        <!-- more items add here -->

                </div> <!-- es-dashboard-content -->
            </div> <!-- uk-container -->
        </div> <!-- section -->

        
@endsection