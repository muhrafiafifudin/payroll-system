@extends('layouts.admin')

@section('title')
    Golongan
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Tambah Golongan</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Golongan</a></li>
                        <li class="breadcrumb-item active">Tambah Golongan</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Form Tambah Golongan</h4>
                        <p class="text-muted m-b-30">Penambahan Golongan</p>
                        <form action="{{ route('category.store') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label>Golongan</label>
                                <input type="text" class="form-control" name="category" required placeholder="Masukkan Golongan ..." required/>
                            </div>
                            <div class="form-group">
                                <label>Kelas</label>
                                <input type="text" class="form-control" name="class" placeholder="Masukkan Kelas ..." required/>
                            </div>
                            <div class="form-group">
                                <label>Masa Kerja</label>
                                <input type="number" class="form-control" name="mkg" placeholder="Masukkan Masa Kerja .." required/>
                            </div>
                            <div class="form-group">
                                <label>Gaji Pokok</label>
                                <input type="number" class="form-control" name="salary" placeholder="Masukkan Gaji Pokok .." required/>
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">Simpan</button>
                                <a href="{{ route('employee.index') }}" class="btn btn-secondary waves-effect">Cancel</a>
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
