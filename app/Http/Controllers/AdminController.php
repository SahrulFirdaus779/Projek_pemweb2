<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class Admincontroller extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}
