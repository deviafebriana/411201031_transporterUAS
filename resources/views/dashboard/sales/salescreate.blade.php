@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{route("sales.index")}}" class="btn btn-secondary">
        << Back</a>
    </div>
    <form action="{{route('sales.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id" class="form-label">ID Sales</label>
            <input type="text"
              class="form-control form-control-sm" name="id" id="id" aria-describedby="helpId" placeholder="id" value="{{Session::get('id')}}">
          </div>
        <div class="mb-3">
          <label for="nama_sales" class="form-label">Nama Sales</label>
          <input type="text"
            class="form-control form-control-sm" name="nama_sales" id="nama_sales" aria-describedby="helpId" placeholder="nama_sales" value="{{Session::get('nama_sales')}}">
        </div>
        <div class="mb-3">
            <label for="lokasi_sales" class="form-label">Lokasi Sales</label>
            <input type="text"
              class="form-control form-control-sm" name="lokasi_sales" id="lokasi_sales" aria-describedby="helpId" placeholder="lokasi_sales" value="{{Session::get('lokasi_sales')}}">
        </div>
        <div class="mb-3">
            <label for="lokasi_outlet" class="form-label">Lokasi Outlet</label>
            <input type="text"
              class="form-control form-control-sm" name="lokasi_outlet" id="lokasi_outlet" aria-describedby="helpId" placeholder="lokasi_outlet" value="{{Session::get('lokasi_outlet')}}">
        </div>
        <button class="btn btn-primary" name="simpan" type="submit">Save</button>

    </form>
@endsection