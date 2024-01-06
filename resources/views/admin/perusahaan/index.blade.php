@extends('layouts.app')

@section('content')
<div class="app-content-area py-4">
    <div class="bg-danger pt-20 pb-23 mt-n10 mx-n3 bg-content" style="margin-bottom: -200px;"></div>
    <div class="container-fluid mt-n20">
        <div class="row">
            <div class="col-lg-5 col-md-3 col-1">
                <!-- Page header -->
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <div class="mb-0 mb-lg-0">
                        <h3 class="mb-0  text-white">Dashboard</h3>
                    </div>
                    <div class="mb-0 mb-lg-0">
                        <h3 class="mb-0 text-white px-5"><img src="{{ asset('images/icon/dashboard.svg') }}" width="28" height="24" class="mb-2"> <span class="px-2">-</span> Data Perusahaan</h3>
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
                                <h2 class="mb-0 text-white">PERUSAHAAN</h2>
                                <h2 class=" mb-1 fw-bold text-white">30</h2>
                            </div>
                            <div class="icon-shape icon-md rounded-2 mt-5">
                                <img src="{{ asset('images/icon/perusahaan.svg') }}" width="100" height="60">
                            </div>
                        </div>
                        <!-- project number -->
                        <div class="1h-1">
                            <p class="text-white px-5 mt-4" style="font-size: 15px"><b>JUMLAH SEMUA DATA</b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
                <!-- card -->
                <div class="card h-100 card-lift bg-success border-0 text-white">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- heading -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <h2 class="mb-0 text-white">MOBIL</h2>
                                <h2 class=" mb-1 fw-bold text-white">30</h2>
                            </div>
                            <div class="icon-shape icon-md rounded-2 mt-5 px-5">
                                <img src="{{ asset('images/icon/mobil.svg') }}" width="100" height="70">
                            </div>
                        </div>
                        <!-- project number -->
                        <div class="1h-1">
                            <p class="text-white px-5 mt-4" style="font-size: 15px"><b>JUMLAH SEMUA DATA</b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
                <!-- card -->
                <div class="card h-100 card-lift bg-orange border-0 text-white">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- heading -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <h2 class="mb-0 text-white">PAKET</h2>
                                <h2 class=" mb-1 fw-bold text-white">30</h2>
                            </div>
                            <div class="icon-shape icon-md rounded-2 mt-5 px-5">
                                <img src="{{ asset('images/icon/paket.svg') }}" width="100" height="80">
                            </div>
                        </div>
                        <!-- project number -->
                        <div class="1h-1">
                            <p class="text-white px-5 mt-4" style="font-size: 15px"><b>JUMLAH SEMUA DATA</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="row">
                                <div class="col-md-12 py-5">
                                    <div class="row">
                                        <div class="col-md-6 px-5 mt-2" style="font-size: 30px">
                                            <form action="#">
                                                <div class="form-group">
                                                    <label for="show"><b>Show</b></label>
                                                    <select name="show" id="show" class="w-20">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                    </select>
                                                    <label for="entries"><b>Entries</b></label>
                                                </div>
                                            </form>
                                            <label for=""></label>
                                        </div>
                                        <div class="col-md-6">
                                            <form action="#" method="get">
                                                <div class="form-group">
                                                    <label for="search" style="font-size: 30px" class="px-3"><b>Search</b></label>
                                                    <input type="search" style="min-width: 400px; height: 60px">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <table class="table table-bordered text-center">
                                        <thead class="table-light">
                                            <tr>
                                                <th>NAMA PERUSAHAAN</th>
                                                <th>SURAT KUASA</th>
                                                <th>AKTA NOTARIS</th>
                                                <th>KTP PIMPINAN</th>
                                                <th>SURAT IZIN TEMPAT USAHA</th>
                                                <th>SURAT IZIN USAHA PERDAGANGAN</th>
                                                <th>ALAMAT PERUSAHAN</th>
                                                <th>TANDA DAFTAR PERUSAHAAN</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td><button class="btn btn-success btn-lg">Cetak</button></td>
                                                <td><button class="btn btn-success btn-lg">Cetak</button></td>
                                                <td><button class="btn btn-success btn-lg">Cetak</button></td>
                                                <td><button class="btn btn-success btn-lg">Cetak</button></td>
                                                <td><button class="btn btn-success btn-lg">Cetak</button></td>
                                                <td><button class="btn btn-success btn-lg">Cetak</button></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    {{ $data->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection