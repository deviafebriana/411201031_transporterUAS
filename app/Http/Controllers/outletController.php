<?php

namespace App\Http\Controllers;

use App\Models\outlet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class outletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = outlet::orderBy('id','asc')->get();
        return view('dashboard.outlet.outletindex')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.outlet.outletcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('id',$request->id);
        Session::flash('nama_outlet',$request->nama_outlet);
        Session::flash('lokasi_outlet',$request->lokasi_outlet);
        Session::flash('alamat_outlet',$request->alamat_outlet);
        

        $request->validate([
            'id'=>'required|numeric|unique:outlet,id',
            'nama_outlet'=>'required',
            'lokasi_outlet'=>'required',
            'alamat_outlet'=>'required',
        ],[
            'id.required'=> 'ID wajib diisi',
            'id.numeric'=> 'ID wajib angka',
            'id.unique'=> 'ID yang diisi sudah ada di database',
            'nama_outlet.required'=> 'Nama Outlet wajib diisi',
            'lokasi_outlet.required'=> 'Lokasi Outlet wajib diisi',
            'alamat_outlet.required'=> 'Alamat Outlet wajib diisi',
        ]);
        $data = [
            'id'=>$request->id,
            'nama_outlet'=>$request->nama_outlet,
            'lokasi_outlet'=>$request->lokasi_outlet,
            'alamat_outlet'=>$request->alamat_outlet,
        ];
        outlet::create($data);

        return redirect()->route('outlet.index')->with('success','Data sudah diinput');
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
        $data = outlet::where('id', $id)->first();
        return view('dashboard.outlet.outletedit')->with('data', $data);
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
        $request->validate([
            
            
            'nama_outlet'=>'required',
            'lokasi_outlet'=>'required',
            'alamat_outlet'=>'required',
        ],[
            
            'nama_outlet.required'=> 'Nama Outlet wajib diisi',
            'lokasi_outlet.required'=> 'Lokasi Outlet wajib diisi',
            'alamat_outlet.required'=> 'Alamat Outlet wajib diisi',

        ]);
        $data = [
           
            'nama_outlet'=>$request->nama_outlet,
            'lokasi_outlet'=>$request->lokasi_outlet,
            'alamat_outlet'=>$request->alamat_outlet,

        ];
        outlet::where('id',$id)->update($data);

        return redirect()->route('outlet.index')->with('success','Data sudah di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        outlet::where('id',$id)->delete();
        return redirect()->route('outlet.index')->with('success','Berhasil delete data');
    }
}
