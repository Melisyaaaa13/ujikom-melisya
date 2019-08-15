@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Halaman pembeli </div>
                <br>
                <center><a href="{{ route('pembeli.create') }}" class="btn btn-primary">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>No Ktp</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Hp</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                @foreach($pembeli as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->no_ktp }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->telepon }}</td>
                    <td>{{ $data->hp }}</td>
                    <td><a href="{{ route('pembeli.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('pembeli.show', $data->id) }}" class="btn btn-success">Detail Data</a></td>
                    <td><form action="{{ route('pembeli.destroy', $data->id) }}" method="post">
                    {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn -sm btn-danger" type="submit">Hapus Data</button>
                    </form>
                    </td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection