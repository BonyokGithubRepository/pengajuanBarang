<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PTL;
use App\User;
use Auth;
use Illuminate\Support\Str;

class PTLController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ptl = PTL::all();
        return view ('PTL.index',compact('ptl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Ptl::create([
        'nama' => $request->nama,
        'email' => $request->email,
        'no_wa' => $request->no_wa,
        'area' => $request->area,
        'id_user'=> auth::user()->id,
        'password'=> bcrypt($request->password)
    ]);
        User::create([
        'name' => $request -> nama,
        'role' => 'ptl',
        'remember_token' => Str::random(60),
        'password' => bcrypt($request->password)
    ]);
        return redirect('/PTL');
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
    public function edit($id_ptl)
    {
        $ptl = Ptl::find($id_ptl);
        return view('PTL.edit',compact('ptl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_ptl)
    {
        $ptl = Ptl::find($id_ptl);
        $data = [
         "nama" => $request->nama,
         "email" => $request->email,
         "no_wa" => $request->no_wa,
         "area" => $request->area,
        ];
        $ptl->update($data);
        return redirect('/PTL');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id_ptl)
    {
        $ptl = Ptl::find($id_ptl);
        $ptl->delete();
        alert()->success('SuccesDelete','Data anda berhasil dihapus!!'); 
        return redirect('/PTL');
    }
}
