@extends('layouts.admin')

@section('title')
    Klasifikasi
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Klasifikasi</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Klasifikasi</li>
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
                                <h4 class="mt-0 header-title">Daftar Klasifikasi</h4>
                                <p class="text-muted m-b-30">
                                    Menampilkan semua klasifikasi yang berhak dan tidak untuk mendapatkan kenaikan gaji.
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
                                        <th>Status</th>
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
                                            <td>{{ $user->type == 0 ? 'Tidak Dapat KGB' : 'Dapat KGB' }}</td>
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
