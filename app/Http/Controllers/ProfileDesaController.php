<?php

namespace App\Http\Controllers;

use App\Models\profileDesa;
use Illuminate\Http\Request;

class profileDesaController extends Controller
{
    public function index()
    {
        $profileDesa = profileDesa::all();
        return view('ProfileDesa');
    }

}
