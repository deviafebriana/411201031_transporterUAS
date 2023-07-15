@extends('dashboard.layout')

@section('konten')
    <p class="card-title">Tabel Outlet</p>
    <div class="pb-3"><a href="{{route('outlet.create')}}" class="btn btn-primary">+ Tambah Data Outlet</a></div>
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>ID Outlet</th>
                    <th>Nama Outlet</th>
                    <th>Lokasi Outlet</th>
                    <th>Alamat Outlet</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1 ?>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama_outlet }}</td>
                    <td>{{ $item->lokasi_outlet }}</td>
                    <td>{{ $item->alamat_outlet }}</td>
                    <td>
                        <a href="{{ route('outlet.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form onsubmit="return confirm('Delete data?')" action="{{ route('outlet.destroy', $item->id) }}" class="d-inline" method="POST">
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
