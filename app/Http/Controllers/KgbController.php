<?php

namespace App\Http\Controllers;

use PDF;
use Carbon\Carbon;
use App\Models\User;
use App\Models\KgbData;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class KgbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kgb_data = KgbData::all();
        $kgb_data_personal = KgbData::where('id_user', Auth::id());

        return view('pages.kgb.kgb-data', compact('kgb_data', 'kgb_data_personal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::whereYear('berlaku_gaji_lama', Carbon::now()->subYears(2)->toDateTimeString())->get();
        $categories = Category::all();

        return view('pages.kgb.form-kgb-data', compact('users', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        KgbData::create($data);

        return redirect()->route('kgb.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kgb_data = KgbData::find($id);

        return view('pages.kgb.view-kgb-data', [
            'kgb_data' => $kgb_data,
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kgb_data = KgbData::findOrFail($id);

        return view('pages.kgb.edit-kgb-data', [
            'kgb_data' => $kgb_data,
            'users' => User::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $kgb_data = KgbData::findOrFail($id);
        $kgb_data->update($data);

        return redirect()->route('kgb.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kgb_data = KgbData::findOrFail($id);
        $kgb_data->delete();

        return redirect()->route('kgb.index');
    }

    public function generatePdf($id)
    {
        setlocale(LC_TIME, 'id_ID');
        \Carbon\Carbon::setLocale('id');

        $today = Carbon::now()->isoFormat('D MMMM Y');
        $tahun = Carbon::now()->isoFormat('Y');

        $array_bln = array(1=>"I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $bulan = $array_bln[date('n')];


        $kgb_data = KgbData::where('id', $id)->first();
        $user = User::where('id', $kgb_data->id_user)->first();

        $tanggal_gaji_lama = Carbon::parse($user->tanggal_gaji_lama)->translatedFormat('d F Y');
        $berlaku_gaji_lama = Carbon::parse($user->berlaku_gaji_lama)->translatedFormat('d F Y');
        $berlaku_gaji_baru = Carbon::parse($kgb_data->berlaku_gaji_baru)->translatedFormat('d F Y');

        $no_surat = sprintf("%03s", $kgb_data->id) . '/RRI-SKA/SDM/' . $bulan . '/' . $tahun;

        $data = [
            'no_surat' => $no_surat,
            'today' => $today,
            'data' => $kgb_data,
            'user' => $user,
            'tanggal_gaji_lama' => $tanggal_gaji_lama,
            'berlaku_gaji_lama' => $berlaku_gaji_lama,
            'berlaku_gaji_baru' => $berlaku_gaji_baru
        ];

        $pdf = PDF::loadView('pages.report.print-pdf', $data);

        return $pdf->download('itsolutionstuff.pdf');
    }

    public function generatePdf_All()
    {
        $kgb_data = KgbData::all();

        $view = view('pages.report.print-pdf-all', compact('kgb_data'));
        $html = $view->render();
        $pdf = PDF::loadHTML($html)->setPaper('a4', 'potrait');
        return $pdf->stream('sugeneruoti.pdf');
    }
}
