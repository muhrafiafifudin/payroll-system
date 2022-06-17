<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\KgbData;
use Illuminate\Support\Facades\Redirect;
use PDF;

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

        return view('pages.kgb-data', compact('kgb_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();

        return view('pages.form-kgb-data', compact('users'));
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
        //
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

        return view('pages.edit-kgb-data', [
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
        $kgb_data = KgbData::where('id', $id)->first();
        $user = User::where('id', $kgb_data->id_user)->get();
        $data = [
            'data' => $kgb_data,
            'user' => $user[0]
        ];

        $pdf = PDF::loadView('pages.print-pdf', $data);

        return $pdf->download('itsolutionstuff.pdf');
    }
}
