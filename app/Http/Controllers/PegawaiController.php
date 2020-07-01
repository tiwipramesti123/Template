<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// panggil model pegawai
use App\Pegawai;


class PegawaiController extends Controller
{
	public function home(){
		return view('register');
	}
 
	public function welcome(){
		return view('welcome');
	}

}