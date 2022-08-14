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
                    <h4 class="page-title">Data Pegawai</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Pegawai</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @role('admin')
                            <div class="row">
                                <div class="col-lg-8">
                                    <h4 class="mt-0 header-title">Daftar Data Pegawai</h4>
                                    <p class="text-muted m-b-30">
                                        Menampilkan semua data pegawai yang berhak dan tidak untuk mendapatkan kenaikan gaji.
                                    </p>
                                </div>

                                <div class="col-lg-4 text-right">
                                    <a href="{{ route('employee.create') }}" class="btn btn-success waves-effect waves-light"><i class="ion-plus"></i> &nbsp Tambah Data Pegawai</a>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NIP</th>
                                            <th>Jabatan</th>
                                            <th>Kantor</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no=1 @endphp
                                        @foreach ($users as $user)
                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->nip }}</td>
                                                <td>{{ $user->jabatan }}</td>
                                                <td>{{ $user->kantor }}</td>
                                                <td>
                                                    <form action="{{ route('employee.destroy', $user->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        <a href="{{ route('employee.show', $user->id) }}" class="btn btn-warning waves-effect waves-light">View</a>
                                                        <a href="{{ route('employee.edit', $user->id) }}" class="btn btn-info waves-effect waves-light">Edit</a>
                                                        <button type="submit" class="btn btn-danger waves-effect waves-light" onclick="return confirm('Anda Yakin ?')">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-lg-8">
                                    <h4 class="mt-0 header-title">Informasi Pribadi</h4>
                                    <p class="text-muted m-b-30">
                                        Menampilkan informasi mengenai data pribadi.
                                    </p>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NIP</th>
                                            <th>Jabatan</th>
                                            <th>Kantor</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no=1 @endphp
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>{{ Auth::user()->name }}</td>
                                            <td>{{ Auth::user()->nip }}</td>
                                            <td>{{ Auth::user()->jabatan }}</td>
                                            <td>{{ Auth::user()->kantor }}</td>
                                            <td>
                                                <form action="{{ route('employee.destroy', Auth::user()->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <a href="{{ route('employee.show', Auth::user()->id) }}" class="btn btn-warning waves-effect waves-light">View</a>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        @endrole
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>
@endsection
