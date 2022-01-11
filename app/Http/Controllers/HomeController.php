<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Laratrust;

class HomeController extends Controller
{
    public function index()
    {
        $rooms = DB::table('rooms')->get();

        return view('frontend.homepage',['rooms' => $rooms]);
        
/*         if (Laratrust::hasRole('admin')) {
            $users = DB::table('users')->where('id', '=', '10')->get();
            $rooms = DB::table('rooms')->get();

            return view('frontend.homepage')->with('users', $users)->with('rooms', $rooms);
        } if (Laratrust::hasRole('customer')) {
            $users = DB::table('users')->where('id', '=', '10')->get();
            $rooms = DB::table('rooms')->get();

            return view('frontend.homepage')->with('users', $users)->with('rooms', $rooms);
        } else {
            $rooms = DB::table('rooms')->get();

            return view('frontend.homepage',['rooms' => $rooms]);
        } */
    }
}
