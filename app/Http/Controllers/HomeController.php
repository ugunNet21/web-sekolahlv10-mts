<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
    public function sejarah()
    {
        return view('pages.sejarah');
    }
    public function visimisi(){
        return view('pages.visi-misi');
    }
    public function gallery(){
        $items = Gallery::all();
        return view('pages.gallery',compact('items'));
    }
}
