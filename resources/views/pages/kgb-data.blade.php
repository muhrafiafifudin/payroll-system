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
                    <h4 class="page-title">Data Kenaikan Gaji Berkala</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Menu</a></li>
                        <li class="breadcrumb-item active">Data KGB</li>
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
                                <h4 class="mt-0 header-title">Daftar Data KGB</h4>
                                <p class="text-muted m-b-30">
                                    Menampilkan semua data kenaikan gaji berkala dari semua pegawai yang telah mendapatkannya
                                </p>
                            </div>
                            <div class="col-lg-4 text-right">
                                <a href="{{ route('kgb.create') }}" class="btn btn-success waves-effect waves-light"><i class="ion-plus"></i> &nbsp Tambah Data</a>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Gaji Pokok</th>
                                        <th>Gaji Pokok Baru</th>
                                        <th>Golongan</th>
                                        <th>Mulai Tanggal</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Muhammad Rafi Afifudin</td>
                                        <td>2.500.000</td>
                                        <td>15.000.000</td>
                                        <td>Golongan 1</td>
                                        <td>1 Juni 2022</td>
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
