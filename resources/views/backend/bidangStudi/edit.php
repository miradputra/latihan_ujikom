@extends('backend')
@section('css')
</script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data bidang studi</div>
                <div class="card-body">
                    <form action="{{ route('bidangStudi.update', $bidangStudi->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                                {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">code</label>
                                <input class="form-control" value="{{ $bidangstudi->kode }}" type="text" name="kode">
                            </div>
                            <div class="form-group">
                                <label for="">nama</label>
                                <input class="form-control" value="{{ $bidangstudi->nama }}" type="text" name="kode">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-info">
                                Simpan Data
                                </button>
                            </div>
                            <div class="form-group">
                                <a href="{{ url('tag') }}" class="btn btn-outline-info">Kembali</a>
                            </div>
                     </form>
                </div>
                </div>
            </div>
        </div>
     </div>
@endsection