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
                    <h4 class="page-title">Tambah Data KGB</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Menu</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Data KGB</a></li>
                        <li class="breadcrumb-item active">Tambah Data KGB</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Form Tambah Data KGB</h4>
                        <p class="text-muted m-b-30">Penambahan Data Kenaikan Gaji Berkala Untuk Semua Pegawai Yang erhak Mendapatkannya</p>
                        <form class="" action="#">
                            <div class="form-group">
                                <label class="control-label">Nama Pegawai</label>
                                <select class="form-control select2">
                                    <option>Select</option>
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>NIP</label>
                                <div>
                                    <input data-parsley-type="number" type="text"
                                            class="form-control" readonly
                                            placeholder="This place NIP"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jabatan</label>
                                <input type="text" class="form-control" readonly placeholder="This place position"/>
                            </div>
                            <div class="form-group">
                                <label>Kantor</label>
                                <input type="text" class="form-control" readonly placeholder="This place office"/>
                            </div>
                            <div class="form-group">
                                <label>Oleh Pejabat</label>
                                <input type="text" class="form-control" required placeholder="Type something"/>
                            </div>
                            <div class="form-group">
                                <label>Tanggal / Nomor</label>
                                <input type="text" class="form-control" required placeholder="Type something"/>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Berlakunya Gaji Tersebut</label>
                                <input type="date" class="form-control" required placeholder="Type something"/>
                            </div>
                            <div class="form-group">
                                <label>Masa Kerja Golongan Tanggal Tersebut</label>
                                <input type="text" class="form-control" required placeholder="Type something"/>
                            </div>
                            <div class="form-group">
                                <label>Gaji Pokok Baru</label>
                                <div>
                                    <input data-parsley-type="number" type="text"
                                            class="form-control" required
                                            placeholder="Enter only numbers"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Berdasarkan Masa Kerja</label>
                                <input type="text" class="form-control" required placeholder="Type something"/>
                            </div>
                            <div class="form-group">
                                <label>Dalam Golongan</label>
                                <input type="text" class="form-control" required placeholder="Type something"/>
                            </div>
                            <div class="form-group">
                                <label>Mulai Tanggal</label>
                                <input type="date" class="form-control" required placeholder="Type something"/>
                            </div>
                            
                            <div class="form-group mb-0">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>
@endsection