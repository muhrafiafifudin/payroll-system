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
                    <h4 class="page-title">View Golongan</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Golongan</a></li>
                        <li class="breadcrumb-item active">View Golongan</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Form View Golongan</h4>
                        <p class="text-muted m-b-30">Lihat Golongan</p>

                        <div class="form-group">
                            <label>Golongan</label>
                            <input type="text" class="form-control" value="{{ $categories->category }}" name="category" disabled/>
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            <input type="text" class="form-control" value="{{ $categories->class }}" name="class" disabled/>
                        </div>
                        <div class="form-group">
                            <label>Masa Kerja</label>
                            <input type="number" class="form-control" value="{{ $categories->mkg }}" name="mkg" disabled/>
                        </div>
                        <div class="form-group">
                            <label>Gaji Pokok</label>
                            <input type="number" class="form-control" value="{{ $categories->salary }}" name="salary" disabled/>
                        </div>

                        <div class="form-group mb-0">
                            <div>
                                <a href="{{ route('category.index') }}" class="btn btn-secondary waves-effect">Cancel</a>
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
