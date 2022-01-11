<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Reservasi;
use DB;
use Auth;
use Carbon\Carbon;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {
            $guests = DB::table('tamu')->get();
            return view('backend.admin.tamu',['guests' => $guests]);

        } if (!Auth::user()->hasRole('admin')) {
            $rooms = DB::table('rooms')->get();
            return view('backend.guests.reservasi',['rooms' => $rooms]);

        } else {
            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = "HTL" . rand(0, 99999);
        $id_cus = Auth::user()->id;
        $current_date_time = Carbon::now()->toDateTimeString();
        
        DB::table('tamu')->insert([
            'id_tamu' => $id,
            'id_customer' => $id_cus,
            'nama_tamu' => $request->nama,
            'jeniskelamin_tamu' => $request->jeniskelamin,
            'telepon_tamu' => $request->nomortelepon,
            'email_tamu' => $request->email,
            'checkin_tamu' => $request->datein,
            'checkout_tamu' => $request->dateout,
            'night_tamu' => $request->totalday,
            'tipe_tamu' => $request->type,
            'status_tamu' => ('Reserved'),
            'biaya_tamu' => $request->totalPriceInput,
            'book_time' => $current_date_time
        ]);
        return redirect('mybooking');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservasi  $Reservasi
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $guests = DB::table('tamu')->get();
        return view('/',['guests' => $guests]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservasi  $Reservasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $tamu = DB::table('tamu')
    ->where('tamu.id_tamu', $id)
    ->get();
	return view('backend.guests.edit',['tamu' => $tamu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservasi  $Reservasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
	DB::table('tamu')
    ->where('id_tamu', $request->id)
    ->update([
        'status_tamu' => $request->status
	]);
	return redirect('/tamu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservasi  $Reservasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	DB::table('tamu')->where('id_tamu',$id)->delete();
		
	return redirect('/tamu');
    }

    public function cari(Request $request)
{
	// menangkap data pencarian
	$cari = $request->cari;

 	// mengambil data dari table pegawai sesuai pencarian data
	$guests = DB::table('tamu')
	->where('id_tamu', 'LIKE', "%" . $cari . "%")->orwhere('nama_tamu', 'LIKE', "%" . $cari . "%")
    ->get();

    	// mengirim data guests ke view index
	return view('backend.admin.tamu')->with('guests', $guests);

}
}
