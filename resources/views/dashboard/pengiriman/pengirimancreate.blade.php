@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{route("pengiriman.index")}}" class="btn btn-secondary">
        << Back</a>
    </div>
    <form action="{{route('pengiriman.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id" class="form-label">No.Pengiriman</label>
            <input type="text"
              class="form-control form-control-sm" name="id" id="id" aria-describedby="helpId" placeholder="id" value="{{Session::get('id')}}">
          </div>
        <div class="mb-3">
          <label for="no_pengiriman" class="form-label">No.Transaksi</label>
          <input type="text"
            class="form-control form-control-sm" name="no_pengiriman" id="no_pengiriman" aria-describedby="helpId" placeholder="no_pengiriman" value="{{Session::get('no_pengiriman')}}">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date"
              class="form-control form-control-sm" name="tanggal" id="tanggal" aria-describedby="helpId" placeholder="tanggal" value="{{Session::get('tanggal')}}">
        </div>
        <div class="mb-3">
          <label for="lokasi_id" class="form-label">Lokasi</label>
          <select name="lokasi_id" class="form-control">
              <option value="">- Pilih Lokasi -</option>
              @foreach ($lokasi as $item)
              <option value="{{ $item->id }}">{{ $item->lokasi_outlet }}</option>
              @endforeach
          </select>
      </div>
        <div class="mb-3">
          <label for="barang_id" class="form-label">Nama Barang</label>
          <select name="barang_id" class="form-control">
              <option value="">- Pilih Nama Barang -</option>
              @foreach ($barangs as $item)
              <option value="{{ $item->id }}">{{ $item->nama_barang }}</option>
              @endforeach
          </select>
      </div>
        <div class="mb-3">
            <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
            <input type="text"
              class="form-control form-control-sm" name="jumlah_barang" id="jumlah_barang" aria-describedby="helpId" placeholder="jumlah_barang" value="{{Session::get('jumlah_barang')}}">
        </div>
        <div class="mb-3">
          <label for="harga_barang" class="form-label">Harga Barang</label>
          <input type="text"
            class="form-control form-control-sm" name="harga_barang" id="harga_barang" aria-describedby="helpId" placeholder="harga_barang" value="{{Session::get('harga_barang')}}">
      </div>
        <div class="mb-3">
          <label for="kurir_id" class="form-label">ID Kurir</label>
          <select name="kurir_id" class="form-control">
              <option value="">- Pilih ID Kurir -</option>
              @foreach ($users as $item)
              <option value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
          </select>
      </div>
        <button class="btn btn-primary" name="simpan" type="submit">Save</button>

    </form>
@endsection