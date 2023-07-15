<?php

namespace App\Http\Controllers;

use App\Models\sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class salesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = sales::orderBy('id','asc')->get();
        return view('dashboard.sales.salesindex')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.sales.salescreate');
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
        Session::flash('lokasi_sales',$request->lokasi_sales);
        Session::flash('lokasi_outlet',$request->lokasi_outlet);
        

        $request->validate([
            'id'=>'required|numeric|unique:sales,id',
            'nama_sales'=>'required',
            'lokasi_sales'=>'required',
            'lokasi_outlet'=>'required',
        ],[
            'id.required'=> 'ID wajib diisi',
            'id.numeric'=> 'ID wajib angka',
            'id.unique'=> 'ID yang diisi sudah ada di database',
            'nama_sales.required'=> 'Nama Sales wajib diisi',
            'lokasi_sales.required'=> 'Lokasi Sales wajib diisi',
            'lokasi_outlet.required'=> 'Lokasi Outlet wajib diisi',
        ]);
        $data = [
            'id'=>$request->id,
            'nama_sales'=>$request->nama_sales,
            'lokasi_sales'=>$request->lokasi_sales,
            'lokasi_outlet'=>$request->lokasi_outlet,
        ];
        sales::create($data);

        return redirect()->route('sales.index')->with('success','Data sudah diinput');
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
        $data = sales::where('id', $id)->first();
        return view('dashboard.sales.salesedit')->with('data', $data);
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
            'lokasi_sales'=>'required',
            'lokasi_outlet'=>'required',
        ],[
            
            'nama_sales.required'=> 'Nama Sales wajib diisi',
            'lokasi_sales.required'=> 'Lokasi Sales wajib diisi',
            'lokasi_outlet.required'=> 'Lokasi Outlet wajib diisi',

        ]);
        $data = [
           
            'nama_sales'=>$request->nama_sales,
            'lokasi_sales'=>$request->lokasi_sales,
            'lokasi_outlet'=>$request->lokasi_outlet,

        ];
        sales::where('id',$id)->update($data);

        return redirect()->route('sales.index')->with('success','Data sudah di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        sales::where('id',$id)->delete();
        return redirect()->route('sales.index')->with('success','Berhasil delete data');
    }
}
