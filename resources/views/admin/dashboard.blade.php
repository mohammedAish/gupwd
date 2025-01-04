<x-admin-layout>
{{--      <div class="container row">

    <div class="col-md-6 col-sm-12 pt-5 text-center mb-4">
    <div class="  py-4 " style="background-color: rgba(75, 192, 192, 1);color:#fff; width:300px;height:240px;font-size: 20px;   border-radius: 10%;">
        <div class="inner">
            <h3 style="font-size: 70px;">340</h3>

            ​
            <p>عدد الطلبات الكلي </p>
        </div>

    </div>
</div>
<div class="col-md-6 col-sm-12 pt-5 text-center mb-4">
    <div class="  py-4 " style="background-color: rgb(75, 192, 134);color:#fff; width:300px;height:240px;font-size: 20px;   border-radius: 10%;">
        <div class="inner">
            <h3 style="font-size: 70px;">180</h3>

            ​
            <p>عدد العاملين  </p>
        </div>

    </div>
</div>

<div class="col-md-10 text-center col-sm-12 mt-5 pt-4">
    <canvas id="myChart" width="100%" height="50"></canvas>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <!--Begin::Dashboard 1-->

    <!--Begin::Row-->
    <div class="row">
        <div class=" col-12 order-lg-1 order-xl-1">

            <!--begin:: Widgets/Activity-->
            <div class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--skin-solid kt-portlet--height-fluid">
                <div class="kt-portlet__head kt-portlet__head--noborder kt-portlet__space-x">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Activity
                        </h3>
                    </div>
                    {{-- <div class="kt-portlet__head-toolbar">
                        <a href="#" class="btn btn-label-light btn-sm btn-bold dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                            <ul class="kt-nav">
                                <li class="kt-nav__section kt-nav__section--first">
                                    <span class="kt-nav__section-text">Finance</span>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-graph-1"></i>
                                        <span class="kt-nav__link-text">Statistics</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                                        <span class="kt-nav__link-text">Events</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-layers-1"></i>
                                        <span class="kt-nav__link-text">Reports</span>
                                    </a>
                                </li>
                                <li class="kt-nav__section">
                                    <span class="kt-nav__section-text">Customers</span>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                                        <span class="kt-nav__link-text">Notifications</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-file-1"></i>
                                        <span class="kt-nav__link-text">Files</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
               
            </div>

            <!--end:: Widgets/Activity-->
        </div>

       

     
     
    </div>

    <!--End::Row-->

    <!--Begin::Row-->
       <!-- begin:: Content -->
       <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
             <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon2-line-chart"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    {{__('home.new_orders')}}
                </h3>
            </div>
           
        </div>

        <div class="kt-portlet__body kt-portlet__body--fit">

            <div class="kt-portlet__body">

                <!--begin: Search Form -->
                <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
                </div>
                <!--end: Search Form -->
            </div>
            <!--begin: Datatable -->
           
    <!--end: Datatable -->
        </div>
        </div>
    </div>

    <!-- end:: Content -->

    <!--End::Row-->

    <!--End::Dashboard 1-->
</div>
</x-admin-layout>
