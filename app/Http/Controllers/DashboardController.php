<?php

namespace App\Http\Controllers;

use App\Models\KgbData;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::count();
        $kgb = KgbData::count();

        return view('pages.home', [
            'users' => $users,
            'kgb' => $kgb,
        ]);
    }
}
