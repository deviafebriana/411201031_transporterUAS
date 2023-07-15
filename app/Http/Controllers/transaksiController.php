<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class transaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = transaksi::orderBy('id','asc')->get();
        return view('dashboard.transaksi.transaksiindex')->with('data',$data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.transaksi.transaksicreate');
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
        Session::flash('nama_sales',$request->nama_sales);
        Session::flash('nama_barang',$request->nama_barang);
        Session::flash('nama_outlet',$request->nama_outlet);
        Session::flash('jumlah_stok',$request->jumlah_stok);
        Session::flash('jumlah_display',$request->jumlah_display);
        Session::flash('visit_datetime',$request->visit_datetime);
        

        $request->validate([
            'id'=>'required|numeric|unique:transaksi,id',
            'nama_sales'=>'required',
            'nama_barang'=>'required',
            'nama_outlet'=>'required',
            'jumlah_stok'=>'required',
            'jumlah_display'=>'required',
            'visit_datetime'=>'required',
        ],[
            'id.required'=> 'ID wajib diisi',
            'id.numeric'=> 'ID wajib angka',
            'id.unique'=> 'ID yang diisi sudah ada di database',
            'nama_sales.required'=> 'Nama Sales wajib diisi',
            'nama_barang.required'=> 'Nama Barang wajib diisi',
            'nama_outlet.required'=> 'Nama Outlet wajib diisi',
            'jumlah_stok.required'=> 'Jumlah Stok wajib diisi',
            'jumlah_display.required'=> 'Jumlah Display wajib diisi',
            'visit_datetime.required'=> 'Time Visit wajib diisi',
        ]);
        $data = [
            'id'=>$request->id,
            'nama_sales'=>$request->nama_sales,
            'nama_barang'=>$request->nama_barang,
            'nama_outlet'=>$request->nama_outlet,
            'jumlah_stok'=>$request->jumlah_stok,
            'jumlah_display'=>$request->jumlah_display,
            'visit_datetime'=>$request->visit_datetime,
        ];
        transaksi::create($data);

        return redirect()->route('transaksi.index')->with('success','Data sudah diinput');
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
        $data = transaksi::where('id', $id)->first();
        return view('dashboard.transaksi.transaksiedit')->with('data', $data);
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
            
            
            'nama_sales'=>'required',
            'nama_barang'=>'required',
            'nama_outlet'=>'required',
            'jumlah_stok'=>'required',
            'jumlah_display'=>'required',
            'visit_datetime'=>'required',
        ],[
            
            'nama_sales.required'=> 'Nama Sales wajib diisi',
            'nama_barang.required'=> 'Nama Barang wajib diisi',
            'nama_outlet.required'=> 'Nama Outlet wajib diisi',
            'jumlah_stok.required'=> 'Jumlah Stok wajib diisi',
            'jumlah_display.required'=> 'Jumlah Display wajib diisi',
            'visit_datetime.required'=> 'Time Visit wajib diisi',

        ]);
        $data = [
           
            'nama_sales'=>$request->nama_sales,
            'nama_barang'=>$request->nama_barang,
            'nama_outlet'=>$request->nama_outlet,
            'jumlah_stok'=>$request->jumlah_stok,
            'jumlah_display'=>$request->jumlah_display,
            'visit_datetime'=>$request->visit_datetime,

        ];
        transaksi::where('id',$id)->update($data);

        return redirect()->route('transaksi.index')->with('success','Data sudah di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        transaksi::where('id',$id)->delete();
        return redirect()->route('transaksi.index')->with('success','Berhasil delete data');
    }
}
