@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{route("outlet.index")}}" class="btn btn-secondary">
        << Back</a>
    </div>
    <form action="{{route('outlet.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id" class="form-label">ID Outlet</label>
            <input type="text"
              class="form-control form-control-sm" name="id" id="id" aria-describedby="helpId" placeholder="id" value="{{ Session::get('id') }}">
          </div>
        <div class="mb-3">
          <label for="nama_outlet" class="form-label">Nama Outlet</label>
          <input type="text"
            class="form-control form-control-sm" name="nama_outlet" id="nama_outlet" aria-describedby="helpId" placeholder="nama_outlet" value="{{Session::get('nama_outlet')}}">
        </div>
        <div class="mb-3">
            <label for="lokasi_outlet" class="form-label">Lokasi Outlet</label>
            <input type="text"
              class="form-control form-control-sm" name="lokasi_outlet" id="lokasi_outlet" aria-describedby="helpId" placeholder="lokasi_outlet" value="{{Session::get('lokasi_outlet')}}">
        </div>
        <div class="mb-3">
            <label for="alamat_outlet" class="form-label">Alamat Outlet</label>
            <textarea class="form-control" rows="5" name="alamat_outlet">{{Session::get('alamat_outlet')}}</textarea>
        </div>
        <button class="btn btn-primary" name="simpan" type="submit">Save</button>

    </form>
@endsection
