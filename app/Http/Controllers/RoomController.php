<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use Auth;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {
            $rooms = DB::table('rooms')->get();
            return view('backend.admin.rooms',['rooms' => $rooms]);
        } elseif (Auth::user()->hasRole('customer')) {
            return view('backend.customer.mybooking');
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
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('/img/rooms'), $imageName);
    
        DB::table('rooms')->insert([
            'foto' => $imageName,
            'type' => $request->namaHotel,
            'harga' => $request->hargaHotel,
            'jumlah' => $request->jumlahHotel
        ]);
        return redirect('rooms');
/* 	DB::table('rooms')->insert([
		'namaHotel' => $request->namaHotel
	]);
	return redirect('customer'); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $rooms = DB::table('rooms')->get();
        // mengirim data rooms ke view index
        return view('frontend.homepage',['rooms' => $rooms]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rooms = DB::table('rooms')
        ->where('id_room', $id)
        ->get();
        return view('backend.rooms.edit',['rooms' => $rooms]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        if ($request->image !== null) {
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/img/rooms'), $imageName);
        } else {
            $imageName = null;
        }
        DB::table('rooms')
        ->where('id_room', $request->id)
        ->update([
            'foto' => $imageName,
            'type' => $request->namaHotel,
            'harga' => $request->hargaHotel,
            'jumlah' => $request->jumlahHotel
        ]);
        return redirect('rooms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	DB::table('rooms')->where('id_room',$id)->delete();
	return redirect('rooms');
    }
}
