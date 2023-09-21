<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Beranda extends Controller
{
    public function index(){
        echo 'Ini adalah halaman beranda <strong>Admin</strong>';
    }
}
