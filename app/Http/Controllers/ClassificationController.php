<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ClassificationController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('pages.classification.classification', compact('users'));
    }
}
