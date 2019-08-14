@extends('backend')
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Bidang studi</div>
                <br>
                <center><a href="{{ route('bidangStudi.create') }}" class="btn btn-primary">Tambah | +</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>kode </th>
                                <th>Nama</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @foreach($bidangStudi as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->kode }}</td>
                    <td>{{ $data->nama }}</td>
                    <td><a href="{{ route('bidangStudi.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                        <form action="{{ route('bidangStudi.destroy', $data->id) }}" method="post">
                            @csrf
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