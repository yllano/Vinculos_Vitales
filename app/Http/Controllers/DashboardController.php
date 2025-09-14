<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function familiar()
    {
        return view('familiar.dashboard');
    }

    public function adulto()
    {
        return view('adulto.dashboard');
    }
}
