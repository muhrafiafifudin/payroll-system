@extends('layouts.admin')

@section('title')
    Data Pegawai
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Data Pegawai</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Menu</a></li>
                        <li class="breadcrumb-item active">Data Pegawai</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <h4 class="mt-0 header-title">Daftar Data Pegawai</h4>
                                <p class="text-muted m-b-30">
                                    Menampilkan semua data pegawai yang berhak dan tidak untuk mendapatkan kenaikan gaji
                                </p>
                            </div>
                            <div class="col-lg-4 text-right">
                                <button type="button" class="btn btn-success waves-effect waves-light"><i class="ion-plus"></i> &nbsp Tambah Data</button>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>NIP</th>
                                        <th>Jabatan</th>
                                        <th>Kantor</th>
                                        <th>Status</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Muhammad Rafi Afifudin</td>
                                        <td>3372020208000005</td>
                                        <td>Sekretaris</td>
                                        <td>RSUD Serengan</td>
                                        <td>Aktif</td>
                                        <td>
                                            <button type="button" class="btn btn-info waves-effect waves-light">Edit</button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light">Hapus</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>
@endsection