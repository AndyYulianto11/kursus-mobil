@extends('layouts.app')

@section('content')
<div class="app-content-area">
    <div class="bg-danger pt-20 pb-21 mt-n14 mx-n4 bg-content"></div>
    <div class="container-fluid mt-n22">
        <div class="row">
            <div class="col-lg-5 col-md-3 col-1">
                <!-- Page header -->
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <div class="mb-2 mb-lg-0">
                        <h3 class="mb-0  text-white">Dashboard</h3>
                    </div>
                    <div class="mb-0 mg-lg-0">
                        <h3 class="mb-0 text-white px-5"><img src="{{ asset('images/icon/dashboard.svg') }}" width="28" height="24" class="mb-2"> <span class="px-2">-</span> Data Presensi</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
                <!-- card -->
                <div class="card h-100 card-lift bg-primary border-0 text-white">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- heading -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <h1 class="mb-0 text-white">Perusahaan</h1>
                                <h1 class=" mb-1 fw-bold text-white">18</h1>
                            </div>
                            <div class="icon-shape icon-md rounded-2 mt-5">
                                <img src="{{ asset('images/icon/perusahaan.svg') }}" width="100" height="60">
                            </div>
                        </div>
                        <!-- project number -->
                        <div class="1h-1">
                            <h5 class="mb-0 text-white px-5 ">JUMLAH SEMUA DATA</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection