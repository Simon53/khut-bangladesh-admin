@extends('layout.app')
@section('title', 'Khut::Dashboard')

@section('content')
<style>
    .align-self-start h3 {
        color: #333;
    }
</style>

<div class="row">
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">{{ $productCategories }}</h3>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-success">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Product Category</h6>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">{{ $totalProducts }}</h3>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-success">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Total Product</h6>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">{{ $soldOutProducts }}</h3>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-success">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Sold Out Product</h6>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">{{ $newOrders }}</h3>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-success">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">New Orders</h6>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">{{ $deliveredOrders }}</h3>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-success">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Delivered</h6>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">{{ $deliveryPending }}</h3>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-success">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Delivery Pending</h6>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">{{ $registeredCustomer }}</h3>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-success">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Registered Customer</h6>
            </div>
        </div>
    </div>
</div>
@endsection
