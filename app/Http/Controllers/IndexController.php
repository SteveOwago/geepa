<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function privacy()
    {
        return view('privacy');
    }
    public function terms()
    {
        return view('terms');
    }
    public function downloads(){
        $downloads = Download::with('media')->get();
        return view('downloads', compact('downloads'));
    }
}
