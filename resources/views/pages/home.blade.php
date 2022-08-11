@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('content')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Dashboard</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Selamat Datang di Sistem Kenaikan Gaji Berkala
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end row -->

        @role('admin')
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat" style="background-color: #2d33a3">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-account-multiple float-right"></i>
                            </div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3">Pegawai</h6>
                                <h4 class="mb-4">{{ $users }}</h4>
                                <span class="ml-2">Jumlah Data Pegawai</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat" style="background-color: #2d33a3">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-clipboard-text float-right"></i>
                            </div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3">Kenaikan Gaji</h6>
                                <h4 class="mb-4">{{ $kgb }}</h4>
                                <span class="ml-2">Jumlah Data KGB</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        @endrole
    </div> <!-- container-fluid -->
</div> <!-- content -->
@endsection
