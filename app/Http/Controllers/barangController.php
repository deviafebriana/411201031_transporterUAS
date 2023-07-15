<?php

namespace App\Http\Controllers;

use App\Models\barang2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = barang2::orderBy('id','asc')->get();
        return view('dashboard.barang.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.barang.create');
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
        Session::flash('nama_barang',$request->nama_barang);
        Session::flash('deskripsi',$request->deskripsi);
        Session::flash('stok_barang',$request->stok_barang);
        Session::flash('harga_barang',$request->harga_barang);
        

        $request->validate([
            'id'=>'required|numeric|unique:barang2,id',
            'nama_barang'=>'required',
            'deskripsi'=>'required',
            'stok_barang'=>'required',
            'harga_barang'=>'required',
        ],[
            'id.required'=> 'ID wajib diisi',
            'id.numeric'=> 'ID wajib angka',
            'id.unique'=> 'ID yang diisi sudah ada di database',
            'nama_barang.required'=> 'Nama Barang wajib diisi',
            'deskripsi.required'=> 'Deskripsi Barang wajib diisi',
            'stok_barang.required'=> 'Stok Barang wajib diisi',
            'harga_barang.required'=> 'Harga Barang wajib diisi',

        ]);
        $data = [
            'id'=>$request->id,
            'nama_barang'=>$request->nama_barang,
            'deskripsi'=>$request->deskripsi,
            'stok_barang'=>$request->stok_barang,
            'harga_barang'=>$request->harga_barang,

        ];
        barang2::create($data);

        return redirect()->route('barang.index')->with('success','Data sudah diinput');
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
        $data = barang2::where('id', $id)->first();
        return view('dashboard.barang.edit')->with('data', $data);
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
            
            
            'nama_barang'=>'required',
            'deskripsi'=>'required',
            'stok_barang'=>'required',
            'harga_barang'=>'required',
        ],[
            
            'nama_barang.required'=> 'Nama Barang wajib diisi',
            'deskripsi.required'=> 'Deskripsi Barang wajib diisi',
            'stok_barang.required'=> 'Stok Baraag wajib diisi',
            'harga_barang.required'=> 'Harga Barang wajib diisi',

        ]);
        $data = [
           
            'nama_barang'=>$request->nama_barang,
            'deskripsi'=>$request->deskripsi,
            'stok_barang'=>$request->stok_barang,
            'harga_barang'=>$request->harga_barang,

        ];
        barang2::where('id',$id)->update($data);

        return redirect()->route('barang.index')->with('success','Data sudah di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        barang2::where('id',$id)->delete();
        return redirect()->route('barang.index')->with('success','Berhasil delete data');
    }
}
