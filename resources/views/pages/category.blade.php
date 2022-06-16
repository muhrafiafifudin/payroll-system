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
                    <h4 class="page-title">Golongan</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Main</a></li>
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
                                <h4 class="mt-0 header-title">Golongan</h4>
                                <p class="text-muted m-b-30">
                                    Menampilkan semua jenis golongan yang ada
                                </p>
                            </div>

                            @role('admin')
                                <div class="col-lg-4 text-right">
                                    <a href="{{ route('category.create') }}" class="btn btn-success waves-effect waves-light"><i class="ion-plus"></i> &nbsp Tambah Category</a>
                                </div>
                            @else
                                    
                            @endrole
                        
                        </div>

                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Golongan</th>
                                        <th>Gaji Pokok</th>

                                        @role('admin')
                                            <th>Keterangan</th>
                                        @else
                                                
                                        @endrole
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1 @endphp
                                    @foreach ($category as $data)
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>{{ $data->category }}</td>
                                            <td>{{ $data->salary }}</td>

                                            @role('admin')
                                                <td>
                                                    <form action="{{ route('category.destroy', $data->id) }}" method="post">
                                                        @csrf
                                                        @method('delete')

                                                        <a href="{{ route('category.edit', $data->id) }}" class="btn btn-info waves-effect waves-light">Edit</a>
                                                        <button type="submit" class="btn btn-danger waves-effect waves-light" onclick="return confirm('Are you sure ?')">Hapus</button>
                                                    </form>
                                                </td>
                                            @else
                                                
                                            @endrole
                                            
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