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
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('kgb.index') }}">Data KGB</a></li>
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
                        <p class="text-muted m-b-30">Penambahan Data Kenaikan Gaji Berkala Untuk Semua Pegawai Yang Berhak Mendapatkannya</p>
                        <form action="{{ route('kgb.store') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label class="control-label">Nama Pegawai</label>
                                <select class="form-control select2" name="id_user">
                                    <option>Select</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <br><br>
                            <div class="form-group">
                                <label class="control-label">Golongan / Gaji Pokok / Masa Kerja</label>
                                <select class="form-control select2" name="id_category">
                                    <option>Select</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category }}/{{ $category->class }} || Rp. {{ number_format($category->salary, 2, ',', '.') }} || {{ $category->mkg }} Tahun</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mulai Tanggal</label>
                                <input type="date" class="form-control" name="berlaku_gaji_baru" required placeholder="Masukkan Tanggal Berlaku Gaji Baru ..."/>
                            </div>
                            <div class="form-group">
                                <label>Nomor PP dan Tahun</label>
                                <input type="text" class="form-control" name="nomor_pp" required placeholder="Masukkan No PP dan Tahun ..."/>
                            </div>
                            <div class="form-group">
                                <label>Mengetahui</label>
                                <input type="text" class="form-control" name="mengetahui" required placeholder="Masukkan Surat Baru Mengetahui ..."/>
                            </div>
                            <div class="form-group">
                                <label>NIP Mengetahui</label>
                                <input type="text" class="form-control" name="nip_mengetahui" required placeholder="Masukkan NIP Yang Mengetahui ..."/>
                            </div>

                            <br>
                            <div class="form-group mb-0">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                        Simpan
                                    </button>
                                    <a href="{{ route('kgb.index') }}" class="btn btn-secondary waves-effect">Cancel</a>
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
