@extends('dashboard.layout')

@section('konten')
    <p class="card-title">Tabel Transaksi</p>
    <div class="pb-3"><a href="{{route('transaksi.create')}}" class="btn btn-primary">+ Tambah Data Transaksi</a></div>
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>ID Transaksi</th>
                    <th>Nama Sales</th>
                    <th>Nama Barang</th>
                    <th>Nama Outlet</th>
                    <th>Jumlah Stok</th>
                    <th>Jumlah Display</th>
                    <th>Time Visit</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1 ?>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama_sales }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->nama_outlet }}</td>
                    <td>{{ $item->jumlah_stok }}</td>
                    <td>{{ $item->jumlah_display }}</td>
                    <td>{{ $item->visit_datetime }}</td>
                    <td>
                        <a href="{{ route('transaksi.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form onsubmit="return confirm('Delete data?')" action="{{ route('transaksi.destroy', $item->id) }}" class="d-inline" method="POST">
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
