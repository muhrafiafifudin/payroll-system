<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('pages.employee.employee-data', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('pages.employee.form-employee-data', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = User::create([
            'name' => $request->input('name'),
            'id_category' => $request->input('id_category'),
            'nip' => $request->input('nip'),
            'pangkat' => $request->input('pangkat'),
            'jabatan' => $request->input('jabatan'),
            'kantor' => $request->input('kantor'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'pejabat' => $request->input('pejabat'),
            'nomor_gaji_lama' => $request->input('nomor_gaji_lama'),
            'tanggal_gaji_lama' => $request->input('tanggal_gaji_lama'),
            'berlaku_gaji_lama' => $request->input('berlaku_gaji_lama'),
        ]);

        $users->assignRole('user');
        $users->save();

        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);

        return view('pages.employee.view-employee-data', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::findOrFail($id);
        $categories = Category::all();

        return view('pages.employee.edit-employee-data', compact('users', 'categories'));
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

        $users = User::findOrFail($id);
        $users->update($data);

        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect()->route('employee.index');
    }
}
