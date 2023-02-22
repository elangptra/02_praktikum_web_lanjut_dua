<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo 'Selamat Datang';
    }

    public function about(){
        echo 'NIM   : 2141720074 ';
        echo 'Nama  : Elang Putra Adam';
    }

    public function articles($id){
        echo 'Halaman Artikel dengan Id ' .$id;
    }
}
