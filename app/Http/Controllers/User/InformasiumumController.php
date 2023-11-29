<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pjsekolah;
use App\Models\PjTim;
use App\Models\User;

class InformasiumumController extends Controller
{
    public function index(Request $request)
    {

      
        
        return view('pages.admin.user.Informasi-umum.index');
    }
}
