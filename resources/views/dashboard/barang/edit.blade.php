@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{route("barang.index")}}" class="btn btn-secondary">
        << Back</a>
    </div>
    <form action="{{route('barang.update', $data->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="id" class="form-label">ID Barang</label>
            <input type="text"
              class="form-control form-control-sm" name="id" id="id" aria-describedby="helpId" placeholder="id" value="{{ $data->id }}">
          </div>
        <div class="mb-3">
          <label for="nama_barang" class="form-label">Nama Barang</label>
          <input type="text"
            class="form-control form-control-sm" name="nama_barang" id="nama_barang" aria-describedby="helpId" placeholder="nama_barang" value="{{$data->nama_barang}}">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi Barang</label>
            <textarea class="form-control" rows="5" name="deskripsi">{{$data->deskripsi}}</textarea>
        </div>
        <div class="mb-3">
            <label for="stok_barang" class="form-label">Stok Barang</label>
            <input type="text"
              class="form-control form-control-sm" name="stok_barang" id="stok_barang" aria-describedby="helpId" placeholder="stok_barang" value="{{$data->stok_barang}}">
        </div>
        <div class="mb-3">
            <label for="harga_barang" class="form-label">Harga Barang</label>
            <input type="text"
              class="form-control form-control-sm" name="harga_barang" id="harga_barang" aria-describedby="helpId" placeholder="harga_barang" value="{{$data->harga_barang}}">
        </div>
        <button class="btn btn-primary" name="simpan" type="submit">Save</button>

    </form>
@endsection
