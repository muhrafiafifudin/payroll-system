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
                    <h4 class="page-title">Edit Data Pegawai</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('employee.index') }}">Data Pegawai</a></li>
                        <li class="breadcrumb-item active">Edit Data Pegawai</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Form Edit Data Pegawai</h4>
                        <p class="text-muted m-b-30">Edit Data Pegawai</p>
                        <form action="{{ route('employee.update', $users->id) }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="name" value="{{ $users->name }}" required placeholder="Masukkan Nama Lengkap ..."/>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $users->email }}" required placeholder="Masukkan Email ..."/>
                            </div>
                            <div class="form-group">
                                <label>NIP</label>
                                <div>
                                    <input data-parsley-type="number" type="text" name="nip"
                                            class="form-control" required value="{{ $users->nip }}"
                                            placeholder="Masukkan NIP ..."/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Pangkat</label>
                                        <input type="text" class="form-control" name="pangkat" value="{{ $users->pangkat }}" required placeholder="Masukkan Pangkat ..."/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Jabatan</label>
                                        <input type="text" class="form-control" name="jabatan" value="{{ $users->jabatan }}" required placeholder="Masukkan Jabatan ..."/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Kantor</label>
                                <input type="text" class="form-control" name="kantor" value="{{ $users->kantor }}" required placeholder="Masukkan Kantor ..."/>
                            </div>
                            <div class="form-group">
                                <label>Gaji Pokok</label>
                                <div>
                                    <input data-parsley-type="number" type="text" name="gaji_pokok"
                                            class="form-control" required value="{{ $users->gaji_pokok }}"
                                            placeholder="Masukkan Gaji Pokok ..."/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Status</label>
                                <select class="form-control select2" name="status">
                                    <option value="0" {{ $users->status == 0 ? ' selected' : '' }}>Tidak Dapat KGB</option>
                                    <option value="1" {{ $users->status == 1 ? ' selected' : '' }}>Dapat KGB</option>
                                </select>
                            </div>

                            <div class="form-group mb-0">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                        Submit
                                    </button>
                                    <a href="{{ route('employee.index') }}" class="btn btn-secondary waves-effect">Cancel</a>
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
