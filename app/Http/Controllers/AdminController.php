<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index()
    {
        $admin = DB::table('users')->where('role', '=', 'admin')->get();

        // Return View
        return view('backend.admin.admin')->with('admin', $admin);
    }
}
