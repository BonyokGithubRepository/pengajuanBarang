<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QTY;

class QTYController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qty = QTY::all();
        return view ('QTY.index',compact('qty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        QTY::create($request->all());
        return redirect('/QTY');
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
    public function edit($id)
    {
        $qty = QTY::find($id);
        return view('QTY.edit',compact('qty'));
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
        $qty = QTY::find($id);
        $data = [
         "nama_perangkat" => $request->nama_perangkat,
         "tanggal_qty" => $request->tanggal_qty,
        ];
        $qty->update($data);
        return redirect('/QTY');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $qty = QTY::find($id);
        $qty->delete();
        alert()->success('SuccesDelete','Data anda berhasil dihapus!!'); 
        return redirect('/QTY');
    }
}
