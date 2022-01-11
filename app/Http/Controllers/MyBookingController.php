<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyBooking;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use Auth;
use PDF;
use App;

class MyBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->hasRole('admin')) {
            $id_customer = Auth::user()->id;

            $booking = DB::table('tamu')->where('id_customer', $id_customer)->join('rooms', 'rooms.type', '=', 'tamu.tipe_tamu')->join('users', 'users.id', '=', 'tamu.id_customer')->get();
    
            return view('backend.customer.mybooking')->with('booking', $booking)->with('id_customer', $id_customer);
        } elseif (Auth::user()->hasRole('admin')) {
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservasi  $Reservasi
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $id_customer = Auth::user()->id;

        $booking = DB::table('tamu')->where('id_customer', $id_customer)->join('rooms', 'rooms.type', '=', 'tamu.tipe_tamu')->join('users', 'users.id', '=', 'tamu.id_customer')->get();

        return view('backend.customer.mybooking')->with('booking', $booking)->with('id_customer', $id_customer);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservasi  $Reservasi
     * @return \Illuminate\Http\Response
     */
    public function pdfview(Request $request)
    {
        $id_customer = Auth::user()->id;

        $booking = DB::table('tamu')->where('id_customer', $id_customer)->join('rooms', 'rooms.type', '=', 'tamu.tipe_tamu')->join('users', 'users.id', '=', 'tamu.id_customer')->get();

/*         return view('backend.customer.pdftamu')->with('booking', $booking)->with('id_customer', $id_customer); */

        $data = [
            'booking' => $booking,
            'id_customer' => $id_customer
        ];

        $pdf = PDF::loadView('backend.customer.pdftamu', $data)->setOptions(['defaultFont' => 'nunito']);
        
        return $pdf->download('customer.pdf');

        
    }
}
