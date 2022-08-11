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
                    <h4 class="page-title">Lihat Data Pegawai</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('employee.index') }}">Data Pegawai</a></li>
                        <li class="breadcrumb-item active">Lihat Data Pegawai</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Detail Data Pegawai</h4>
                        <p class="text-muted m-b-30">Menampilkan Detail Data Pegawai</p>
                        <form action="{{ route('employee.update', $users->id) }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="name" value="{{ $users->name }}" disabled />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $users->email }}" disabled />
                            </div>
                            <div class="form-group">
                                <label>NIP</label>
                                <div>
                                    <input data-parsley-type="number" type="text" name="nip"
                                            class="form-control" value="{{ $users->nip }}" disabled />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Pangkat</label>
                                        <input type="text" class="form-control" name="pangkat" value="{{ $users->pangkat }}" disabled />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Jabatan</label>
                                        <input type="text" class="form-control" name="jabatan" value="{{ $users->jabatan }}" disabled />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Kantor</label>
                                <input type="text" class="form-control" name="kantor" value="{{ $users->kantor }}" disabled />
                            </div>
                            <div class="form-group">
                                <label>Gaji Pokok</label>
                                <div>
                                    <input data-parsley-type="number" type="text" name="gaji_pokok"
                                            class="form-control" value="{{ $users->gaji_pokok }}" disabled />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status Kenaikan Gaji</label>
                                <input type="text" class="form-control" name="kantor" value="{{ $users->status == 0 ? 'Tidak Dapat KGB' : 'Dapat KGB' }}" disabled />
                            </div>

                            <div class="form-group mb-0">
                                <div>
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
