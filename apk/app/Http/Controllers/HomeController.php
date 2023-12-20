<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function sopancommand() {
    // 	 $data = [
    //     'nama' => 'John Doe',
    //     'umur' => 25,
    // ];

    // return view('view_sopan')->with('data', $data);
    // }


    public function home(){
    	return view('view_beranda');

    }


    public function transaksi(){
    	return view('view_beranda');

    }
}


