<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->hasRole('admin')) {
            return view('backend.customer.riwayat');
        } elseif (Auth::user()->hasRole('admin')) {
            return redirect('/');
        }
    }
}
