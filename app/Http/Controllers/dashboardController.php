<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\outlet;
use App\Models\barang2;
use Illuminate\Http\Request;
use App\Models\ViewPengiriman;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('dashboard1');
    // }

    public function index()
    {
            //untuk pie chart
            $lastMonth = Carbon::now()->subMonth();
            $oneYearAgo = Carbon::now()->subYear();
            $threeMonth = Carbon::now()->subMonth(3);



            

            $listBarang = DB::table('view_pengiriman')->where('harga_barang', '>', 1000)->whereDate('tanggal', '>', $oneYearAgo)->
            select('nama_barang', DB::raw("count(id) as total"))->
            groupBy('id_barang')->get();

            $listLokasi = DB::table('view_pengiriman')->where('jumlah_barang', '>', 100)->whereDate('tanggal', '>', $lastMonth)->
            select('nama_lokasi', DB::raw("count(id) as total"))->
            groupBy('id_lokasi')->get();

            //get data visit/transaksi dan jumlah count
            $allVisit = ViewPengiriman::whereDate('tanggal', '>', $threeMonth);
            $countVisit = $allVisit->count();

            $trendLokasi = DB::table('view_pengiriman')->whereDate('tanggal', '>', $oneYearAgo)->
            select('nama_lokasi', DB::raw("count(id) as total"))->
            orderBy('total','desc')->
            groupBy('id_lokasi')->get();

            $trendBarang = DB::table('view_pengiriman')->whereDate('tanggal', '>', $oneYearAgo)->
            select('nama_barang', DB::raw("count(id) as total"))->
            orderBy('total','desc')->
            groupBy('id_barang')->get();

            //get data sales dan jumlah count
            $allSales = User::all();
            $countSales = $allSales->count();

            //get data outlet dan jumlah count
            $allOutlet = outlet::all();
            $countOutlet = $allOutlet->count();


            //get data barang dan jumlah count
            $allBarang = barang2::all();
            $countBarang = $allBarang->count();

            

            // if(Auth::user()->level == 1){
            //     return view('dashboard.index', compact('listBarang','listOutlet','countVisit','countOutlet','countSales','countBarang'));

            // } else {
            //     return redirect('transaksi');
            // }

            return view('dashboard1', compact('listBarang','listLokasi','countVisit','trendLokasi','countSales','trendBarang'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
