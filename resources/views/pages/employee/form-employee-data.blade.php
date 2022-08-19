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
                                <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Lengkap ..." required/>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Masukkan Email ..." required/>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Masukkan Password .." required/>
                            </div>
                            <div class="form-group">
                                <label>NIP</label>
                                <div>
                                    <input data-parsley-type="number" type="text" name="nip" class="form-control" placeholder="Masukkan NIP ..." required/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Pangkat</label>
                                        <input type="text" class="form-control" name="pangkat" placeholder="Masukkan Pangkat ..." required/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Jabatan</label>
                                        <input type="text" class="form-control" name="jabatan" placeholder="Masukkan Jabatan ..." required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Kantor</label>
                                <input type="text" class="form-control" name="kantor" placeholder="Masukkan Kantor ..." required/>
                            </div>
                            <div class="form-group">
                                <label>Oleh Pejabat</label>
                                <input type="text" class="form-control" name="pejabat" placeholder="Masukkan Nama Pejabat Surat Lama ..." required/>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tanggal Surat</label>
                                        <input type="date" class="form-control" name="tanggal_gaji_lama" placeholder="Masukkan Tanggal Surat Lama ..." required/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nomor Surat</label>
                                        <input type="text" class="form-control" name="nomor_gaji_lama" placeholder="Masukkan Nomor Surat Lama ..." required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Berlakunya Gaji Lama</label>
                                <input type="date" class="form-control" name="berlaku_gaji_lama" placeholder="Masukkan Berlaku Gaji Lama ..." required/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Golongan / Gaji Pokok</label>
                                <select class="form-control select2" name="id_category" required>
                                    <option value="">Select</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category }}/{{ $category->class }} || Rp. {{ number_format($category->salary, 2, ',', '.') }} || {{ $category->mkg }} Tahun</option>
                                    @endforeach
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
