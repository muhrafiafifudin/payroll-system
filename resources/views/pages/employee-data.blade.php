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
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Menu</a></li>
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
                        <div class="row">
                            <div class="col-lg-8">
                                <h4 class="mt-0 header-title">Daftar Data Pegawai</h4>
                                <p class="text-muted m-b-30">
                                    Menampilkan semua data pegawai yang berhak dan tidak untuk mendapatkan kenaikan gaji
                                </p>
                            </div>

                            @role('admin')
                                <div class="col-lg-4 text-right">
                                    <a href="{{ route('employee.create') }}" class="btn btn-success waves-effect waves-light"><i class="ion-plus"></i> &nbsp Tambah Data Pegawai</a>
                                </div>
                            @else

                            @endrole
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
                                        <th>Status</th>
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
                                            <td>{{ $user->status == 0 ? 'Tidak Aktif' : 'Aktif' }}</td>

                                            @role('admin')
                                                <td>
                                                    <form action="{{ route('employee.destroy', $user->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="button" class="btn btn-warning waves-effect waves-light" data-toggle="modal" data-target="#myModal">View</button>
                                                        <a href="{{ route('employee.edit', $user->id) }}" class="btn btn-info waves-effect waves-light">Edit</a>
                                                        <button type="submit" class="btn btn-danger waves-effect waves-light" onclick="return confirm('Anda Yakin ?')">Hapus</button>
                                                    </form>
                                                </td>
                                            @else
                                                <td>
                                                    <button type="button" class="btn btn-warning waves-effect waves-light" data-toggle="modal" data-target="#viewModal">View</button>
                                                </td>
                                            @endrole
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <!-- sample modal content -->
                            <div id="viewModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title mt-0" id="myModalLabel">Daftar Data Pegawai</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>
@endsection
