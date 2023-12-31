@extends('dashboard.layout')

@section('konten')
    <p class="card-title">Tabel Pengiriman</p>
    <div class="pb-3"><a href="{{route('pengiriman.create')}}" class="btn btn-primary">+ Tambah Data Pengiriman</a></div>
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>No.Pengiriman</th>
                    <th>No.Transaksi</th>
                    <th>Tanggal</th>
                    <th>ID Lokasi Outlet</th>
                    <th>ID Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Harga Barang</th>
                    <th>ID Kurir</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1 ?>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->no_pengiriman }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->lokasi_id }}</td>
                    <td>{{ $item->barang_id }}</td>
                    <td>{{ $item->jumlah_barang }}</td>
                    <td>{{ $item->harga_barang }}</td>
                    <td>{{ $item->kurir_id }}</td>
                    <td>
                        <form onsubmit="return confirm('Delete data?')" action="{{ route('pengiriman.destroy', $item->id) }}" class="d-inline" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" type="submit" name="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php $i++; ?>
                @endforeach
               
            </tbody>
        </table>
    </div>    

@endsection
