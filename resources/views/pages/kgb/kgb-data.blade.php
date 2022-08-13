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
                    <h4 class="page-title">Data Kenaikan Gaji Berkala</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data KGB</li>
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
                                    <h4 class="mt-0 header-title">Daftar Data KGB</h4>
                                    <p class="text-muted m-b-30">
                                        Menampilkan semua data kenaikan gaji berkala dari semua pegawai yang telah mendapatkannya.
                                    </p>
                                </div>

                                <div class="col-lg-4 text-right">
                                    <a href="{{ route('kgb.create') }}" class="btn btn-success waves-effect waves-light"><i class="ion-plus"></i> &nbsp Tambah Data</a>
                                    <a href="{{ url('print-pdf') }}" target="_blank" class="btn btn-primary waves-effect waves-light">Print Semua</a>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Gaji Pokok</th>
                                            <th>Gaji Pokok Baru</th>
                                            <th>Golongan</th>
                                            <th>Mulai Tanggal</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no=1 @endphp
                                        @foreach ($kgb_data as $data)
                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td>{{ $data->users->name }}</td>
                                                <td>Rp. {{ number_format($data->users->categories->salary, 2, ',', '.') }}</td>
                                                <td>Rp. {{ number_format($data->categories->salary, 2, ',', '.') }}</td>
                                                <td>{{ $data->categories->category }}/{{ $data->categories->class }}</td>
                                                <td>{{ $data->berlaku_gaji_baru }}</td>
                                                <td>
                                                    <form action="{{ route('kgb.destroy', $data->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        <a href="{{ url('print-pdf/' . $data->id) }}" target="_blank" class="btn btn-primary waves-effect waves-light">Print</a>
                                                        <a href="{{ route('kgb.show', $data->id) }}" class="btn btn-warning waves-effect waves-light">View</a>
                                                        <a href="{{ route('kgb.edit', $data->id) }}" class="btn btn-info waves-effect waves-light">Edit</a>
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
                                    <h4 class="mt-0 header-title">Data KGB Pegawai</h4>
                                    <p class="text-muted m-b-30">
                                        Menampilkan data kenaikan gaji berkala secara detail berdasarkan id masing - masing.
                                    </p>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Gaji Pokok</th>
                                            <th>Gaji Pokok Baru</th>
                                            <th>Golongan</th>
                                            <th>Mulai Tanggal</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no=1 @endphp
                                        @forelse ($kgb_data_personal as $data)
                                            <tr>
                                                <td scope="row">{{ $no++ }}</td>
                                                <td>{{ $data->users->name }}</td>
                                                <td>Rp. {{ number_format($data->users->categories->salary, 2, ',', '.') }}</td>
                                                <td>Rp. {{ number_format($data->categories->salary, 2, ',', '.') }}</td>
                                                <td>{{ $data->golongan }}</td>
                                                <td>{{ $data->berlaku_gaji_baru }}</td>
                                                <td>
                                                    <a href="{{ route('kgb.show', $data->id) }}" class="btn btn-warning waves-effect waves-light">View</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="text-center" colspan="7">Anda belum masuk ke daftar Kenaikan Gaji Berkala</td>
                                            </tr>
                                        @endforelse
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
