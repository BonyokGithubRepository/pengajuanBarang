<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mitra;
use App\User;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Support\Str;

class mitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $mitra = Mitra::all();
        return view ('mitra.index',compact('mitra','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        $user = new User;
        $user->name = $request->nama;
        $user->role = 'mitra';
        $user->remember_token = Str::random(60);
        $user->password = Hash::make($request->pas);
        $user->save();


        Mitra::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'nama_pict' => $request->nama_pict,
            'id_user'=> $user->id,
            'password'=> $request->pas,
            'role'=>'mitra'
        ]);


        return redirect('/mitra');

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
    public function edit($id_mitra)
    {
        $mitra = Mitra::find($id_mitra); 
        return view('mitra.edit',compact('mitra'));
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
        $mitra = Mitra::find($id);
        $data = [
            "nama" => $request->nama,
            "email" => $request->email,
            "nama_pict" => $request->nama_pict,
            "password" => $request->password
        ];
        $mitra->update($data);
        return redirect('/mitra');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mitra = Mitra::find($id);
        $mitra->delete();
        alert()->success('SuccesDelete','Data anda berhasil dihapus!!'); 
        
        return redirect('/mitra');
    }
}
