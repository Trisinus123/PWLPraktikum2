<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index() {
        echo "Selamat Datang";
    }
    public function about() {
        echo "Nama: Trisinus Gulo<br>";
        echo "Nim: 2141720035";
    }
    public function articles($id=1) {
        echo "Halaman Artikel dengan ID ".$id;
    }
}

