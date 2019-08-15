<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BidangStudi;
use Session;
use Auth;

class BstudiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bidangstudi = BidangStudi::all();
        return view('backend.bidangStudi.index',compact('bidangstudi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bidangstudi = bidangstudi::all();
        return view('backend.bidangStudi.create',compact('bidangstudi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bidangstudi = new bidangstudi();
        $bidangstudi->kode = $request->kode;
        $bidangstudi->nama = $request->nama;
        $bidangstudi->save();
        return redirect()->route('backend.bidangStudi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bidangstudi = bidangstudi::findOrfail($id);
        return view('backend.bidangStudi.edit',compact('bidangstudi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bidangstudi = bidangstudi::findOrfail($id);
        $bidangstudi->kode = $request->kode;
        $bidangstudi->nama = $request->nama;
        $bidangstudi->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan<b>"
                         . $bidangstudi->nama."</b>"
        ]);
        return redirect()->route('backend.bidangStudi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bidangstudi = bidangstudi::findOrfail($id);
        $bidangstudi->delete();
        Session::flash("flash_notification",[
            "level" => "Success",
            "message" => "Berhasil menghapus<b>"
                         . $bidangstudi->nama."</b>"
        ]);
        return redirect()->route('backend.bidangStudi.index');
    }
}
