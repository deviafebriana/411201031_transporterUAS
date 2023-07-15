@extends('dashboard.layout')

@section('konten')
    <p class="card-title">Tabel Barang</p>
    <div class="pb-3"><a href="{{route('barang.create')}}" class="btn btn-primary">+ Tambah Data Barang</a></div>
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Deskripsi</th>
                    <th>Stok Barang</th>
                    <th>Harga Barang</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1 ?>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ $item->stok_barang }}</td>
                    <td>{{ $item->harga_barang }}</td>
                    <td>
                        <a href="{{ route('barang.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form onsubmit="return confirm('Delete data?')" action="{{ route('barang.destroy', $item->id) }}" class="d-inline" method="POST">
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
