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
                    <h4 class="page-title">Golongan</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Golongan</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <h4 class="mt-0 header-title">Daftar Golongan</h4>
                                <p class="text-muted m-b-30">
                                    Menampilkan semua golongan berdasarkan kelas dan masa kerja.
                                </p>
                            </div>

                            <div class="col-lg-4 text-right">
                                <a href="{{ route('category.create') }}" class="btn btn-success waves-effect waves-light"><i class="ion-plus"></i> &nbsp Tambah Golongan</a>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Golongan</th>
                                        <th>Kelas</th>
                                        <th>Masa Kerja</th>
                                        <th>Gaji</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1 @endphp
                                    @foreach ($categories as $category)
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Golongan {{ $category->category }}</td>
                                            <td>{{ $category->class }}</td>
                                            <td>{{ $category->mkg }} Tahun</td>
                                            <td>Rp. {{ number_format($category->salary, 2, ',', '.') }}</td>
                                            <td>
                                                <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <a href="{{ route('category.show', $category->id) }}" class="btn btn-warning waves-effect waves-light">View</a>
                                                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-info waves-effect waves-light">Edit</a>
                                                    <button type="submit" class="btn btn-danger waves-effect waves-light" onclick="return confirm('Anda Yakin ?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>
@endsection
