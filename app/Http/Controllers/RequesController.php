<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reques;
use App\Mitra;
use App\Ptl;
use App\Perangkat;

class RequesController extends Controller
{
    public function index()
    {
        $request = Reques::all();
        $mitra = Mitra::all();
        $ptl = Ptl::all();
        $perangkat = Perangkat::all();
        return view ('request.index',compact('request','mitra','ptl','perangkat'));
    }
    public function indexID($id)
    {
        $request = Reques::find($id);
        $mitra = Mitra::all();
        $ptl = Ptl::all();
        $perangkat = Perangkat::all();
        return view ('request.indexID',compact('request','mitra','ptl','perangkat'));

    }

    public function create(Request $request)
    {
        $data = [
            'id_ptl' => $request->id_ptl,
            'id_mitra'=>$request->id_mitra,
            'id_perangkat'=>$request->id_perangkat,
            'spa'=>$request->spa,
            'tgl_request'=>$request->tgl_request
        ];
        Reques::create($data);
        return redirect('/request');
    }


    public function mitra(){
        $mitra = Mitra::all();
        return view('request.index',['mitra'=> $mitra]);
    }


    public function delete($id)
    {
        $request = Reques::find($id);
        $request->delete();
        alert()->success('SuccesDelete','Data anda berhasil dihapus!!'); 
        return redirect('/request');
    }
}
