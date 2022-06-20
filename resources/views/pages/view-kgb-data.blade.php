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
                            <label>Oleh Pejabat</label>
                            <input type="text" class="form-control" name="pejabat_lama" value="{{ $kgb_data->pejabat_lama }}" disabled />
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tanggal Surat</label>
                                    <input type="date" class="form-control" name="tanggal_gaji_lama" value="{{ $kgb_data->tanggal_gaji_lama }}" disabled />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nomor Surat</label>
                                    <input type="text" class="form-control" name="nomor_gaji_lama" value="{{ $kgb_data->nomor_gaji_lama }}" disabled />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Berlakunya Gaji Lama</label>
                            <input type="date" class="form-control" name="berlaku_gaji_lama" value="{{ $kgb_data->berlaku_gaji_lama }}" disabled />
                        </div>
                        <div class="form-group">
                            <label>Masa Kerja Tanggal Tersebut</label>
                            <input type="text" class="form-control" name="masa_kerja_gaji_lama" value="{{ $kgb_data->masa_kerja_gaji_lama }}" disabled />
                        </div>


                        <br><br>
                        <div class="form-group">
                            <label>Gaji Pokok Baru</label>
                            <div>
                                <input data-parsley-type="number" type="text"
                                        class="form-control" value="{{ $kgb_data->gaji_pokok_baru }}" disabled />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Berdasarkan Masa Kerja</label>
                            <input type="text" class="form-control" name="masa_kerja_gaji_baru" value="{{ $kgb_data->masa_kerja_gaji_baru }}" disabled />
                        </div>
                        <div class="form-group">
                            <label>Dalam Golongan</label>
                            <input type="text" class="form-control" name="golongan" value="{{ $kgb_data->golongan }}" disabled />
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
