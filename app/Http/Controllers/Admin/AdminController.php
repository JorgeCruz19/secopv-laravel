<?php

namespace App\Http\Controllers\Admin;

use App\Lotification;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $lotifications = Lotification::all();
        $users = User::all();
        return view('admin.dashboard', compact(['lotifications', 'users']));
    }
}
