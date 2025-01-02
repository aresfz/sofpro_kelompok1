<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ManajemenUserController extends Controller
{
    //
    public function index () {
        
        $manajemenUser = User::all();
        return view('manajemenUser.index', compact('manajemenUser'));
    }

}
