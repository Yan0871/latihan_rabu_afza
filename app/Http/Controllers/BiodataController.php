<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
    	$nama = 'Nama Saya Ferdian';
    	$materi = ["PBO","PWPB","MATDIS"];
    	return view('biodata', ['nama'=>$nama, 'materi'=> $materi]);
    }
}
