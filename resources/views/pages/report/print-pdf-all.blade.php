<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            padding-left: 30px;
            padding-right: 30px;
        }
    </style>
</head>
<body>

    @foreach ($kgb_data as $data)
        <table width="100%" style="line-height: 18px">
            <tr>
                <td width="65%">
                </td>
                <td width="35%">
                    <table>
                        <tr>
                            <td>Surakarta, {{ \Carbon\Carbon::now()->isoFormat('D MMMM Y') }}</td>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td>Kepada :</td>
                        </tr>
                        <tr>
                            <td>Yth. Kepala Kantor Pelayanan</td>
                        </tr>
                        <tr>
                            <td style="padding-left: 2rem">Perbendaharaan Negara</td>
                        </tr>
                        <tr>
                            <td>di -</td>
                        </tr>
                        <tr>
                            <td style="padding-left: 2rem">SURAKARTA</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table>

                        @php
                            $array_bln = array(1=>"I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
                            $bulan = $array_bln[date('n')];
                        @endphp

                        <tr>
                            <td>Nomor</td>
                            <td>:</td>
                            <td>00{{ $data->id }}/RRI-SKA/SDM/{{ $bulan }}/{{ date('Y') }}</td>
                        </tr>
                        <tr>
                            <td>Lampiran</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Perihal</td>
                            <td>:</td>
                            <td>KENAIKAN GAJI BERKALA</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>A/n Sdr. {{ $data->users->name }}</td>
                        </tr>
                    </table>
                </td>
                <td>

                </td>
            </tr>
            <tr>
                <td colspan="2"><br></td>
            </tr>
            <tr>
                <td colspan="2">
                    <table width="100%">
                        <tr>
                            <td width="12%" ></td>
                            <td width="30%"></td>
                            <td width="3%"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align: justify">Dengan ini diberitahukan bahwa, berhubung telah terpenuhinya masa kerja dan syarat-syarat lainnya kepada :</td>
                        </tr>
                        <tr>
                            <td colspan="4"><br></td>
                        </tr>
                        <tr>
                            <td style="text-align: right; padding-right: 0.5rem">1.</td>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ $data->users->name }}</td>
                        </tr>
                        <tr>
                            <td style="text-align: right; padding-right: 0.5rem">2.</td>
                            <td>NIP</td>
                            <td>:</td>
                            <td>{{ $data->users->nip }}</td>
                        </tr>
                        <tr>
                            <td style="text-align: right; padding-right: 0.5rem">3.</td>
                            <td>Pangkat / Jabatan</td>
                            <td>:</td>
                            <td>{{ $data->users->pangkat }} / {{ $data->users->jabatan }}</td>
                        </tr>
                        <tr>
                            <td style="text-align: right; padding-right: 0.5rem">4.</td>
                            <td>Kantor Tempat</td>
                            <td>:</td>
                            <td>{{ $data->users->kantor }}</td>
                        </tr>
                        <tr>
                            <td style="text-align: right; padding-right: 0.5rem">5.</td>
                            <td>Gaji Pokok</td>
                            <td>:</td>
                            <td>Rp. {{ number_format($data->categories->salary, 2, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td colspan="4"><br></td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                Atas dasar Surat Keputusan terakhir tentang gaji / Pangkat ditetapkan :
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><br></td>
                        </tr>
                        <tr>
                            <td style="text-align: right; padding-right: 0.5rem">a.</td>
                            <td>Oleh Pejabat</td>
                            <td>:</td>
                            <td>{{ $data->users->pejabat }}</td>
                        </tr>
                        <tr>
                            <td style="text-align: right; padding-right: 0.5rem">b.</td>
                            <td>Tanggal / Nomor</td>
                            <td>:</td>
                            <td>{{ \Carbon\Carbon::parse($data->tanggal_gaji_lama)->translatedFormat('d F Y') }} / {{ $data->users->nomor_gaji_lama }}</td>
                        </tr>
                        <tr>
                            <td style="text-align: right; padding-right: 0.5rem; vertical-align: top">c.</td>
                            <td>Tgl mulai berlakunya gaji tersebut</td>
                            <td>:</td>
                            <td>{{ \Carbon\Carbon::parse($data->berlaku_gaji_lama)->translatedFormat('d F Y') }}</td>
                        </tr>
                        <tr>
                            <td style="text-align: right; padding-right: 0.5rem; vertical-align: top">d.</td>
                            <td>Masa kerja golongan pada tgl tersebut</td>
                            <td>:</td>
                            <td>{{ $data->users->categories->mkg }} Tahun</td>
                        </tr>
                        <tr>
                            <td colspan="4"><br></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align: center">
                                <ins>DIBERIKAN GAJI BERKALA HINGGA MEMPEROLEH :</ins>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><br></td>
                        </tr>
                        <tr>
                            <td style="text-align: right; padding-right: 0.5rem">6.</td>
                            <td>Gaji Pokok Baru</td>
                            <td>:</td>
                            <td>Rp. {{ number_format($data->categories->salary, 2, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td style="text-align: right; padding-right: 0.5rem">7.</td>
                            <td>Berdasarkan Masa Kerja</td>
                            <td>:</td>
                            <td>{{ $data->categories->mkg }} Tahun</td>
                        </tr>
                        <tr>
                            <td style="text-align: right; padding-right: 0.5rem">8.</td>
                            <td>Dalam Golongan</td>
                            <td>:</td>
                            <td>{{ $data->categories->category . '/' . $data->categories->class }}</td>
                        </tr>
                        <tr>
                            <td style="text-align: right; padding-right: 0.5rem">9.</td>
                            <td>Mulai Tanggal</td>
                            <td>:</td>
                            <td>{{ \Carbon\Carbon::parse($data->berlaku_gaji_baru)->translatedFormat('d F Y') }}</td>
                        </tr>
                        <tr>
                            <td colspan="4"><br></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align: justify">
                                Diharap agar sesuai dengan {{ $data->nomor_pp }} kepada Pegawai tersebut dapat dibayarkan penghasilan berdasarkan Gaji Pokok yang baru
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><br></td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table width="100%">
                                    <tr>
                                        <td width="60%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td style="text-align: center">KEPALA RRI SURAKARTA</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><br></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><br></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><br></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td style="text-align: center">{{ $data->mengetahui }}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td style="text-align: center">NIP. {{ $data->nip_mengetahui }}</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    @endforeach

</body>
</html>
