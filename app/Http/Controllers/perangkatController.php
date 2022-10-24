<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\perangkat;

class perangkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perangkat = Perangkat::all();
        return view ('perangkat.index',compact('perangkat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $perangkat)
    {
        Perangkat::create($perangkat->all());
        return redirect('/perangkat');
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
    public function edit($id_perangkat)
    {
        $perangkat = Perangkat::find($id_perangkat);
        return view('perangkat.edit',compact('perangkat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_perangkat)
    {
    $perangkat = Perangkat::find($id_perangkat);
    $perangkat->nama_perangkat = $request->nama_perangkat;
    $perangkat->serial_number = $request->serial_number;
    $perangkat->save();
    return redirect('/perangkat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_perangkat)
    {
    $perangkat = Perangkat::find($id_perangkat);
    $perangkat->delete();
    alert()->success('SuccesDelete','Data anda berhasil dihapus!!'); 
    return redirect('/perangkat');
    }
}
