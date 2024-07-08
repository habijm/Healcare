<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $data = array('title' => 'Homepage');
        return view('homepage.index', $data);
    }

    public function about()
    {
        $data =  array('title' => 'Tentang Kami');
        return view('homepage.about', $data);
    }

    public function diagnosa()
    {
        $data =  array('title' => 'Diagnosa');
        return view('homepage.diagnosa', $data);
    }

    public function kategori()
    {
        $data = array('title' => 'Kategori Produk');
        return view('homepage.kategori', $data);
    }
}