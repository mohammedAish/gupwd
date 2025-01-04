<!DOCTYPE html>
    <html lang="ar" direction="rtl" dir="rtl" style="direction: rtl">
    <!-- begin::Head -->
    <head>
        <!--		<base href="">-->
        <base href="{{ env('APP_URL') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8" />
        <title>GUPD</title>
        <meta name="description" content="Updates and statistics">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Fonts -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
        <!--end::Fonts -->
        <!--begin::Page Vendors Styles(used by this page) -->
        <link href="{{ asset('assets/admin/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
            type="text/css" />
        <!--end::Page Vendors Styles -->
        <!--begin::Global Theme Styles(used by all pages) -->
        <link href="{{ asset('assets/admin/plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet"
            type="text/css" />
            <link href="{{ asset('assets/admin/plugins/custom/datatables/datatables.bundle.rtl.css') }}" rel="stylesheet"
                type="text/css" />
        <link href="{{ asset('assets/admin/css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
        <!-- <link rel="stylesheet" href="{{ asset('assets/css/style_ar.css') }}"> -->
        <link href="{{ asset('assets/admin/css/skins/header/base/light.rtl.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/admin/css/skins/header/menu/light.rtl.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/admin/css/skins/brand/dark.rtl.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/admin/css/skins/aside/dark.rtl.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/spectrum-colorpicker2/dist/spectrum.min.css">
        <!--end::Layout Skins -->
        <link href="{{ asset('assets/admin/css/_dropzone.scss') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/introjs-rtl.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('assets/css/tour.min.css') }}" rel="stylesheet"
        type="text/css" />
        <link rel="shortcut icon" href="{{ asset('assets/images/cart_b.svg') }}" />
        <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

        
        <style>
            .ttour-wrapper {
            z-index: 999;
        }
        .ttour-overlay {

        z-index: 99;
        }

        </style>
    </head>

<style>
        .drop1 {
    background: #fff;
    border: 1px solid rgb(223, 220, 220);
    width: 80px;
    font-size: 14px;
    margin-top: 22px;
    height: 25px;
    text-align: center;
}
.drop1 ul{
    position: absolute;
    transform: translate3d(22px, 25px, 0px);
    top: 0px;
    right: 21px;
    will-change: transform;
}
.drop1 ul a{
    color: #000;

}
.drop1 button {
    outline: none;
    background-color: transparent;
    padding: 2px;
    border: 0px;
}
    </style>
    <!-- end::Head -->
    <!-- begin::Body -->
    <body
        class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

        <!-- begin:: Page -->

        <!-- begin:: Header Mobile -->
        <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
            <div class="kt-header-mobile__logo">
                        <img alt="Logo" src="{{ asset('assets/images/logo.jpeg') }}" />

                </a>
            </div>
            <div class="kt-header-mobile__toolbar">
                <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left"
                    id="kt_aside_mobile_toggler"><span></span></button>

                <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
                        class="flaticon-more"></i></button>
            </div>
        </div>

        <!-- end:: Header Mobile -->
        <div class="kt-grid kt-grid--hor kt-grid--root">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

                <!-- begin:: Aside -->

                <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop"
                    id="kt_aside">

                    <!-- begin:: Aside -->
                    <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
                            <div class="kt-aside__brand-logo">
                                <a href="">
                                    <img alt="Logo" src="{{ asset('assets/images/logo.jpeg') }}" width="50px"/>
                                </a>
                            </div>

                            <div class="kt-aside__brand-logo text-center mt-4 pt-5">
                                <a href="javascript:;">
                                   
                                </a>
                            </div>
                        <div class="kt-aside__brand-tools">
                            <button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler">
                                <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                        class="kt-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path
                                                d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                                                fill="#000000" fill-rule="nonzero"
                                                transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) " />
                                            <path
                                                d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) " />
                                        </g>
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                        class="kt-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path
                                                d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                            <path
                                                d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
                                        </g>
                                    </svg></span>
                            </button>

                            <!--
    <button class="kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
    -->
                        </div>
                    </div>

                    <!-- end:: Aside -->

                    <!-- begin:: Aside Menu -->
                    <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
                        <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1"
                            data-ktmenu-dropdown-timeout="500">
                                <ul class="kt-menu__nav ">
                                    <li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true"><a
                                            href="" class="kt-menu__link "><span
                                                class="kt-menu__link-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1"
                                                    class="kt-svg-icon">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <path
                                                            d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                            fill="#000000" fill-rule="nonzero" />
                                                        <path
                                                            d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                            fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg></span><span
                                                class="kt-menu__link-text">لوحة التحكم</span></a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu @if (request()->routeIs('admins.index') || request()->routeIs('admins.edit') || request()->routeIs('admins.create') || request()->routeIs('merchants.index')||request()->routeIs('merchants.create')||request()->routeIs('merchants.edit') || request()->routeIs('users.index')||request()->routeIs('users.create')||request()->routeIs('users.edit')) kt-menu__item--active kt-menu__item--open @endif"
                                        aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                            class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1"
                                                    class="kt-svg-icon">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <rect fill="#000000" x="4" y="4" width="7" height="7"
                                                            rx="1.5" />
                                                        <path
                                                            d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                            fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg></span><span
                                                class="kt-menu__link-text ">ادارة المستخدمين</span><i
                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item  @if (request()->routeIs('admins.index')||request()->routeIs('admins.create')||request()->routeIs('admins.edit')) kt-menu__item--active  @endif"
                                                        aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a
                                                            href="{{ route('users.index')}}"
                                                            class="kt-menu__link kt-menu__toggle"><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">المستخدمين</span><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                    </li>
                                                 
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu @if (request()->routeIs('admins.index') || request()->routeIs('admins.edit') || request()->routeIs('admins.create') || request()->routeIs('merchants.index')||request()->routeIs('merchants.create')||request()->routeIs('merchants.edit') || request()->routeIs('users.index')||request()->routeIs('users.create')||request()->routeIs('users.edit')) kt-menu__item--active kt-menu__item--open @endif"
                                        aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                            class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1"
                                                    class="kt-svg-icon">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <rect fill="#000000" x="4" y="4" width="7" height="7"
                                                            rx="1.5" />
                                                        <path
                                                            d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                            fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg></span><span
                                                class="kt-menu__link-text ">ادارة المشاريع </span><i
                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item  @if (request()->routeIs('admins.index')||request()->routeIs('admins.create')||request()->routeIs('admins.edit')) kt-menu__item--active  @endif"
                                                        aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a
                                                            href="{{ route('projects.index')}}"
                                                            class="kt-menu__link kt-menu__toggle"><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">المشاريع</span><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                    </li>
                                                 
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu @if (request()->routeIs('admins.index') || request()->routeIs('admins.edit') || request()->routeIs('admins.create') || request()->routeIs('merchants.index')||request()->routeIs('merchants.create')||request()->routeIs('merchants.edit') || request()->routeIs('users.index')||request()->routeIs('users.create')||request()->routeIs('users.edit')) kt-menu__item--active kt-menu__item--open @endif"
                                        aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                            class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1"
                                                    class="kt-svg-icon">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <rect fill="#000000" x="4" y="4" width="7" height="7"
                                                            rx="1.5" />
                                                        <path
                                                            d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                            fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg></span><span
                                                class="kt-menu__link-text ">ادارة الانشطة والاخبار </span><i
                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item  @if (request()->routeIs('admins.index')||request()->routeIs('admins.create')||request()->routeIs('admins.edit')) kt-menu__item--active  @endif"
                                                        aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a
                                                            href="{{ route('activities.index')}}"
                                                            class="kt-menu__link kt-menu__toggle"><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">الانشطة</span><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                    </li>
                                                 
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu @if (request()->routeIs('admins.index') || request()->routeIs('admins.edit') || request()->routeIs('admins.create') || request()->routeIs('merchants.index')||request()->routeIs('merchants.create')||request()->routeIs('merchants.edit') || request()->routeIs('users.index')||request()->routeIs('users.create')||request()->routeIs('users.edit')) kt-menu__item--active kt-menu__item--open @endif"
                                        aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                            class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1"
                                                    class="kt-svg-icon">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <rect fill="#000000" x="4" y="4" width="7" height="7"
                                                            rx="1.5" />
                                                        <path
                                                            d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                            fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg></span><span
                                                class="kt-menu__link-text ">ادارة الشركاء </span><i
                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item  @if (request()->routeIs('admins.index')||request()->routeIs('admins.create')||request()->routeIs('admins.edit')) kt-menu__item--active  @endif"
                                                        aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a
                                                            href="{{ route('partners.index')}}"
                                                            class="kt-menu__link kt-menu__toggle"><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">الشركاء</span><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                    </li>
                                                 
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu @if (request()->routeIs('admins.index') || request()->routeIs('admins.edit') || request()->routeIs('admins.create') || request()->routeIs('merchants.index')||request()->routeIs('merchants.create')||request()->routeIs('merchants.edit') || request()->routeIs('users.index')||request()->routeIs('users.create')||request()->routeIs('users.edit')) kt-menu__item--active kt-menu__item--open @endif"
                                        aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                            class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1"
                                                    class="kt-svg-icon">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <rect fill="#000000" x="4" y="4" width="7" height="7"
                                                            rx="1.5" />
                                                        <path
                                                            d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                            fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg></span><span
                                                class="kt-menu__link-text ">ادارة  قصص النجاح </span><i
                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item  @if (request()->routeIs('admins.index')||request()->routeIs('admins.create')||request()->routeIs('admins.edit')) kt-menu__item--active  @endif"
                                                        aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a
                                                            href="{{ route('stories.index')}}"
                                                            class="kt-menu__link kt-menu__toggle"><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text"> قصص النجاح </span><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                    </li>
                                                 
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- <li class="kt-menu__item  kt-menu__item--submenu @if (request()->routeIs('admins.index') || request()->routeIs('admins.edit') || request()->routeIs('admins.create') || request()->routeIs('merchants.index')||request()->routeIs('merchants.create')||request()->routeIs('merchants.edit') || request()->routeIs('users.index')||request()->routeIs('users.create')||request()->routeIs('users.edit')) kt-menu__item--active kt-menu__item--open @endif"
                                        aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                            class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1"
                                                    class="kt-svg-icon">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <rect fill="#000000" x="4" y="4" width="7" height="7"
                                                            rx="1.5" />
                                                        <path
                                                            d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                            fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg></span><span
                                                class="kt-menu__link-text ">ادارة وسائل التواصل </span><i
                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item  @if (request()->routeIs('admins.index')||request()->routeIs('admins.create')||request()->routeIs('admins.edit')) kt-menu__item--active  @endif"
                                                        aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a
                                                            href="{{ route('projects.index')}}"
                                                            class="kt-menu__link kt-menu__toggle"><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">وسائل التواصل </span><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                    </li>
                                                 
                                            </ul>
                                        </div>
                                    </li> -->
                                    <li class="kt-menu__item  kt-menu__item--submenu @if (request()->routeIs('admins.index') || request()->routeIs('admins.edit') || request()->routeIs('admins.create') || request()->routeIs('merchants.index')||request()->routeIs('merchants.create')||request()->routeIs('merchants.edit') || request()->routeIs('users.index')||request()->routeIs('users.create')||request()->routeIs('users.edit')) kt-menu__item--active kt-menu__item--open @endif"
                                        aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                            class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1"
                                                    class="kt-svg-icon">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <rect fill="#000000" x="4" y="4" width="7" height="7"
                                                            rx="1.5" />
                                                        <path
                                                            d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                            fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg></span><span
                                                class="kt-menu__link-text ">ادارة  التقارير </span><i
                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item  @if (request()->routeIs('admins.index')||request()->routeIs('admins.create')||request()->routeIs('admins.edit')) kt-menu__item--active  @endif"
                                                        aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a
                                                            href="{{ route('reports.index')}}"
                                                            class="kt-menu__link kt-menu__toggle"><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text"> التقارير </span><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                    </li>
                                                 
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                          
                        </div>
                    </div>

                    <!-- end:: Aside Menu -->
                </div>

                <!-- end:: Aside -->
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

                    <!-- begin:: Header -->
                    <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

                        <!-- begin:: Header Menu -->

                        <!-- <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">



                            <div class="dropdown drop1 mx-2">
                              
                            </div>
                        </div> -->


                        <!-- end:: Header Menu -->


                        <!-- begin:: Header Topbar -->
                        <div class="kt-header__topbar d-flex ">

                            <!--begin: Language bar -->




                         
                            <!--end: Language bar -->

                            <!--begin: User Bar -->
                            <div class="kt-header__topbar-item kt-header__topbar-item--user">
                                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                                    <div class="kt-header__topbar-user">
                                        <span
                                            class="kt-header__topbar-welcome kt-hidden-mobile"></span>
<!--                                        
                                        <img class="kt-hidden" alt="Pic"
                                           src="{{ asset('assets/admin/media/users/300_25.jpg') }}" /> -->
                                            

                                        <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                        <span
                                            class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">
                                           
                                            <!-- <img src="{{ asset('assets/images/blank-profile.png') }}"> -->
                                        </span>
                                    </div>
                                </div>
                                <div
                                    class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

                                    <!--begin: Head -->

                                    <!--end: Head -->

                                    <!--begin: Navigation -->
                                    <div class="kt-notification">
                                        
                                            <!-- <div class="kt-notification__item-icon">
                                                <i class="flaticon2-calendar-3 kt-font-success"></i>
                                            </div> -->
                                            <!-- <div class="kt-notification__item-details">
                                                <div class="kt-notification__item-title kt-font-bold">
                                                    {{ __('home.my_profile') }}
                                                </div>
                                            </div> -->
                                       
                                        <!-- <a href="" class="kt-notification__item">
                                            <div class="kt-notification__item-icon">
                                                <i class="flaticon2-calendar-3 kt-font-success"></i>
                                            </div>
                                            <div class="kt-notification__item-details">
                                                <div class="kt-notification__item-title kt-font-bold">
                                                    {{ __('home.change_password') }}
                                                </div>
                                            </div>
                                        </a> -->

                                        <div class="kt-notification__custom kt-space-between">
                                            <form action="{{ route('logout') }}" method="post">
                                                @csrf
                                                <button type="submit"
                                                    class="btn btn-label btn-label-brand btn-sm btn-bold">تسجيل خروج</button>
                                            </form>
                                        </div>
                                    </div>

                                    <!--end: Navigation -->
                                </div>
                            </div>
                            <!--end: User Bar -->
                        </div>
                        <!-- end:: Header Topbar -->
                    </div>

                    <!-- end:: Header -->
                    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

                        <!-- begin:: Content Head -->
                        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
                            <div class="kt-container  kt-container--fluid ">
                                <div class="kt-subheader__main">
                                    <h3 class="kt-subheader__title">لوحة التحكم</h3>
                                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                                    <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
                                        <input type="text" class="form-control" placeholder="Search order..."
                                            id="generalSearch">
                                        <span class="kt-input-icon__icon kt-input-icon__icon--right">
                                            <span><i class="flaticon2-search-1"></i></span>
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        {{ $slot }}
                    </div>
                    <!-- begin:: Footer -->
                    <div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
                        <div class="kt-container  kt-container--fluid ">
                           

                            <div class="kt-footer__copyright">
                                <script>
                                    document.write(new Date().getFullYear());
                                </script><a href=""
                                        target="_blank" class="kt-link">GUPD</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- end:: Footer -->
                </div>
            </div>
        </div>

        <!-- end:: Page -->

 <!-- end:: Page -->


        <!--begin::Global Theme Bundle(used by all pages) -->
        <script src="{{ asset('assets/admin/plugins/global/plugins.bundle.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/admin/js/scripts.bundle.js') }}" type="text/javascript"></script>

        <!--end::Global Theme Bundle -->

        <!--begin::Page Vendors(used by this page) -->
        <script src="{{ asset('assets/admin/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript">
        </script>
        {{-- <script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script> --}}
        <script src="{{ asset('assets/admin/plugins/custom/gmaps/gmaps.js') }}" type="text/javascript"></script>

        <!--end::Page Vendors -->

         <!--begin::tour intro js-->
        <script src="{{ asset('assets/js/intro.js') }}" type="text/javascript"></script>
         <!--end::tour intro js-->
         <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/js/plugins/piexif.min.js" type="text/javascript"></script>

         <!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
             This must be loaded before fileinput.min.js -->
         <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/js/plugins/sortable.min.js" type="text/javascript"></script>

         <!-- bootstrap.bundle.min.js below is needed if you wish to zoom and preview file content in a detail modal
             dialog. bootstrap 5.x or 4.x is supported. You can also use the bootstrap js 3.3.x versions. -->

         <!-- the main fileinput plugin script JS file -->
         <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/js/fileinput.min.js"></script>

        <!--begin::Page Scripts(used by this page) -->
        <script src="{{ asset('assets/admin/js/pages/dashboard.js') }}" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/spectrum-colorpicker2/dist/spectrum.min.js"></script>
        <script src="{{ asset('assets/admin/js/pages/crud/metronic-datatable/base/html-table.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/admin/plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/admin/js/pages/crud/datatables/basic/paginations.js') }}"type="text/javascript"></script>
        <script src="{{ asset('assets/js/tour.min.js') }}" type="text/javascript"></script>
        {{-- <script>introJs().start();
        introJs(".introduction-farm").start();
        </script> --}}
        {{-- <script>
            window.tour = new Tour({
            padding: 0,
            nextText: 'More',
            doneText: 'Done',
            prevText: 'Less',
            tipClasses: 'tip-class active',
            steps: [

                {
                element: ".one",
                title: "Tourquoise",
                description: "This box is tourqoise!",
                position: "bottom"
                },
                {
                element: ".two",
                title: "Red",
                description: "Look how red this box is!",
                data: "Custom Data",
                position: "bottom"
                },
                {
                element: ".three",
                title: "Blue",
                description: "Almost too blue! Reminds of a default anchor tag.",
                position: "bottom"
                },
                {
                element: ".four",
                title: "Green",
                description: "ecause there should probably be four of these.",
                position: "bottom"
                },
                {
                element: ".five",
                title: "Purple",
                description: "Because there should probably be five of these.",
                position: "bottom"
                }
            ]
            })
            tour.override('showStep', function(self, step) {
            self(step);
            })
            tour.override('end', function(self, step) {
            self(step);
            })
            tour.start();
        </script> --}}
        @stack('js')
    </body>
    </html>
