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
                    <h4 class="page-title">Lihat Data KGB</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('kgb.index') }}">Data KGB</a></li>
                        <li class="breadcrumb-item active">Lihat Data KGB</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Detail Data KGB</h4>
                        <p class="text-muted m-b-30">Menampilkan Detail Data Kenaikan Gaji Pegawai</p>
                        <div class="form-group">
                            <label class="control-label">Nama Pegawai</label>
                            <select class="form-control select2" name="id_user" disabled>
                                <option>Select</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" {{ $user->id == $kgb_data->id_user ? ' selected' : '' }}>{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <br><br>
                        <div class="form-group">
                            <label>Gaji Pokok Baru</label>
                            <div>
                                <input data-parsley-type="number" type="text" class="form-control" value="Rp. {{ number_format($kgb_data->categories->salary, 2, ',', '.') }}" disabled />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Berdasarkan Masa Kerja</label>
                            <input type="text" class="form-control" name="masa_kerja_gaji_baru" value="{{ $kgb_data->categories->mkg }} Tahun" disabled />
                        </div>
                        <div class="form-group">
                            <label>Dalam Golongan</label>
                            <input type="text" class="form-control" name="golongan" value="{{ $kgb_data->categories->category }}/{{ $kgb_data->categories->class }}" disabled />
                        </div>
                        <div class="form-group">
                            <label>Mulai Tanggal</label>
                            <input type="date" class="form-control" name="berlaku_gaji_baru" value="{{ $kgb_data->berlaku_gaji_baru }}" disabled />
                        </div>
                        <div class="form-group">
                            <label>Nomor PP dan Tahun</label>
                            <input type="text" class="form-control" name="nomor_pp" value="{{ $kgb_data->nomor_pp }}" disabled />
                        </div>
                        <div class="form-group">
                            <label>Mengetahui</label>
                            <input type="text" class="form-control" name="mengetahui" value="{{ $kgb_data->mengetahui }}" disabled />
                        </div>
                        <div class="form-group">
                            <label>NIP Mengetahui</label>
                            <input type="text" class="form-control" name="nip_mengetahui" value="{{ $kgb_data->nip_mengetahui }}" disabled />
                        </div>

                        <br>
                        <div class="form-group mb-0">
                            <div>
                                <a href="{{ route('kgb.index') }}" class="btn btn-secondary waves-effect">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>
@endsection
