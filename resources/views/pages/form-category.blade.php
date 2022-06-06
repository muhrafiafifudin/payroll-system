@extends('layouts.admin')

@section('title')
    Category
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Tambah Golongan</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Main</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Golongan</a></li>
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
                            @method('post')

                            <div class="form-group">
                                <label>Golongan</label>
                                <input type="text" name="category" class="form-control" required placeholder="Tulis nama golongan ..."/>
                            </div>
                            <div class="form-group">
                                <label>Gaji Pokok</label>
                                <input type="number" name="salary" class="form-control" required placeholder="Tulis gaji pokok ..."/>
                            </div>
                            
                            <div class="form-group mb-0">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                        Submit
                                    </button>
                                    <a href="{{ route('category.index') }}" class="btn btn-secondary waves-effect">Edit</a>
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