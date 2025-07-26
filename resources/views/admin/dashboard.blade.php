@extends('admin.layouts.app')

@section('content')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-xxl-3 eshop-cards-container">
                        <div class="row">
                            <div class="col-6 col-md-3 col-lg-6">
                                <div class="card">
                                    <span class="bg-primary h-50 w-50 d-flex-center rounded-circle m-auto eshop-icon-box">
                                            <i class="ph  ph-currency-circle-dollar f-s-24"></i>
                                    </span>
                                    <div class="card-body eshop-cards">
                                        <span class="ripple-effect"></span>
                                        <div class="overflow-hidden">
                                            <h3 class="text-primary mb-0">1.2M</h3>
                                            <p class="mg-b-35 f-w-600 text-dark-800 txt-ellipsis-1">Total Sales</p>
                                            <span class="badge bg-light-primary">View Report</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-lg-6">
                                <div class="card">
                              <span class="bg-danger h-50 w-50 d-flex-center rounded-circle m-auto eshop-icon-box">
                                                <i class="ph ph-x-circle f-s-24"></i>
                              </span>
                                    <div class="card-body eshop-cards">
                                        <span class="ripple-effect"></span>
                                        <h3 class="text-danger mb-0">125</h3>
                                        <p class="mg-b-35 f-w-600 text-dark-800 txt-ellipsis-1">Canceled Orders</p>
                                        <span class="badge bg-light-danger">Refunded</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-lg-6">
                                <div class="card">
                            <span class="bg-warning h-50 w-50 d-flex-center rounded-circle m-auto eshop-icon-box">
                                <i class="ph-duotone  ph-certificate f-s-24"></i>
                            </span>
                                    <div class="card-body eshop-cards">
                                        <span class="ripple-effect"></span>
                                        <h3 class="text-warning mb-0 txt-ellipsis-1"> 95% </h3>
                                        <p class="mg-b-35 f-w-600 text-dark-800 txt-ellipsis-1">Top Product</p>
                                        <span class="badge bg-light-dark">watch X200</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-lg-6">
                                <div class="card">
                             <span class="bg-success h-50 w-50 d-flex-center rounded-circle m-auto eshop-icon-box">
                                 <i class="ph-duotone  ph-user-circle-plus f-s-24"></i>
                             </span>
                                    <div class="card-body eshop-cards">
                                        <span class="ripple-effect"></span>
                                        <h3 class="text-success mb-0">8.5k</h3>
                                        <p class="mg-b-35 f-w-600 text-dark-800 txt-ellipsis-1">New Customers</p>
                                        <span class="badge bg-light-success">Active</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection