<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {
            $totalTamu = DB::table('tamu')->count();
            $totalKamar = DB::table('rooms')->sum('jumlah');
            $admin = DB::table('users')->where('role', '=', 'admin')->count();
            $income = DB::table('tamu')->where('status_tamu','=', 'Check In')->orwhere('status_tamu', '=', 'Check Out')->sum('biaya_tamu');
    
            $view = view('backend.admin.dashboard');
    
            // Return View
            return view('backend.admin.dashboard')->with('admin', $admin)->with('totalKamar', $totalKamar)->with('totalTamu', $totalTamu)->with('income', $income);
            
        } elseif (!Auth::user()->hasRole('admin')) {
            return view('backend.customer.mybooking');
        } else {
            $users = DB::table('users')->get();
            $rooms = DB::table('rooms')->get();

            $view1 = view('frontend.homepage');

            return $view1->with('rooms', $rooms)->with('users', $users);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
