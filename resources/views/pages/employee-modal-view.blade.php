@foreach ($user_details as $user)
<table class="l-h-34" width="100%" style="margin: 0 auto">
    <tr>
        <td class="text-right p-r-10">Nama</td>
        <td>:</td>
        <td class="p-l-10 font-600">{{ $user->nama }}</td>
    </tr>
    <tr>
        <td class="text-right p-r-10">NIP</td>
        <td>:</td>
        <td class="p-l-10 font-600">180101140</td>
    </tr>
    <tr>
        <td class="text-right p-r-10">Pangkat / Jabatan</td>
        <td>:</td>
        <td class="p-l-10 font-600">Penata I / Administrasi Umum</td>
    </tr>
    <tr>
        <td class="text-right p-r-10">Kantor</td>
        <td>:</td>
        <td class="p-l-10 font-600">Serengan</td>
    </tr>
    <tr>
        <td class="text-right p-r-10">Gaji Pokok</td>
        <td>:</td>
        <td class="p-l-10 font-600">Rp. 30.000.000,00</td>
    </tr>
    <tr>
        <td class="text-right p-r-10">Status Kenaikan Gaji</td>
        <td>:</td>
        <td class="p-l-10 font-600">Dapat</td>
    </tr>
</table>
@endforeach
