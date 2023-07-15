@extends('dashboard.layout')

@section('konten')
    <p class="card-title">Tabel Sales</p>
    <div class="pb-3"><a href="{{route('sales.create')}}" class="btn btn-primary">+ Tambah Data Sales</a></div>
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>ID Sales</th>
                    <th>Nama Sales</th>
                    <th>Lokasi Sales</th>
                    <th>Lokasi Outlet</th>
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
                    <td>{{ $item->lokasi_sales }}</td>
                    <td>{{ $item->lokasi_outlet }}</td>
                    <td>
                        <a href="{{ route('sales.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form onsubmit="return confirm('Delete data?')" action="{{ route('sales.destroy', $item->id) }}" class="d-inline" method="POST">
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
