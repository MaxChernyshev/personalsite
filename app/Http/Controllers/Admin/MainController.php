<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{


    public function index(Request $request) {

        $data = User::all();


        return view('admin.index', compact('data'));
    }
}
