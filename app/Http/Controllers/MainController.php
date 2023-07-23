<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function beranda(){
        return view('beranda');
    }
    public function kerajinan(){
        return view('kerajinan');
    }
    public function banksampah(){
        return view('banksampah');
    }
    public function tentangkami(){
        return view('tentangkami');
    }
    public function admin(){
        return view('admin');
    }
    public function detail(){
        return view('kerajinan.show');
    }
    public function user(){
        return view('user');
    }

}
