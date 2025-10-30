<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index()
    {
        //
        return view('frontend.00_halamanutama.index',[
            'title' => 'Tenang, Rekapinaja',
        ]);
    }
}
