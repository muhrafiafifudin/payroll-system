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
                    <h4 class="page-title">Tambah Data Pegawai</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Menu</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Data Pegawai</a></li>
                        <li class="breadcrumb-item active">Tambah Data Pegawai</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Form Tambah Data Pegawai</h4>
                        <p class="text-muted m-b-30">Penambahan Data Pegawai</p>
                        <form class="" action="#">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" required placeholder="Type something"/>
                            </div>
                            <div class="form-group">
                                <label>NIP</label>
                                <div>
                                    <input data-parsley-type="number" type="text"
                                            class="form-control" required
                                            placeholder="Enter only numbers"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <div>
                                    <textarea required class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon</label>
                                <div>
                                    <input data-parsley-type="number" type="text"
                                            class="form-control" required
                                            placeholder="Enter only numbers"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jabatan</label>
                                <input type="text" class="form-control" required placeholder="Type something"/>
                            </div>
                            <div class="form-group">
                                <label>Kantor</label>
                                <input type="text" class="form-control" required placeholder="Type something"/>
                            </div>
                            <div class="form-group">
                                <label>Gaji Pokok</label>
                                <div>
                                    <input data-parsley-type="number" type="text"
                                            class="form-control" required
                                            placeholder="Enter only numbers"/>
                                </div>
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