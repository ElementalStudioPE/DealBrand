<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function panel()
    {
        return view('admin.panel');
    }

    public function mensajes()
    {
		return view('admin.mensajes');
    }

    public function media()
    {
		return view('admin.media');
    }
}
