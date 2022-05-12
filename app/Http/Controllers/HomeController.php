<?php

namespace App\Http\Controllers;

use App\Lotification;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $lotifications = Lotification::latest()->paginate(8);
        return view('home', compact('lotifications'));
    }
}
