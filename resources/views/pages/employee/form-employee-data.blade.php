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
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('employee.index') }}">Data Pegawai</a></li>
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
                        <form action="{{ route('employee.store') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="name" required placeholder="Masukkan Nama Lengkap ..."/>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Masukkan Email ..."/>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Masukkan Password .."/>
                            </div>
                            <div class="form-group">
                                <label>NIP</label>
                                <div>
                                    <input data-parsley-type="number" type="text" name="nip"
                                            class="form-control" required
                                            placeholder="Masukkan NIP ..."/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Pangkat</label>
                                        <input type="text" class="form-control" name="pangkat" required placeholder="Masukkan Pangkat ..."/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Jabatan</label>
                                        <input type="text" class="form-control" name="jabatan" required placeholder="Masukkan Jabatan ..."/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Kantor</label>
                                <input type="text" class="form-control" name="kantor" required placeholder="Masukkan Kantor ..."/>
                            </div>
                            <div class="form-group">
                                <label>Gaji Pokok</label>
                                <div>
                                    <input data-parsley-type="number" type="text" name="gaji_pokok"
                                            class="form-control" required
                                            placeholder="Masukkan Gaji Pokok ..."/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Status</label>
                                <select class="form-control select2" name="status">
                                    <option>Select</option>
                                    <option value="0">Tidak Dapat KGB</option>
                                    <option value="1">Dapat KGB</option>
                                </select>
                            </div>

                            <div class="form-group mb-0">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                        Simpan
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
