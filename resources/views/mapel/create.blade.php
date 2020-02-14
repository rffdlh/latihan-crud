@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Pelajaran</div>

                <div class="card-body">
                    <form action="{{route('mapel.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nama Pelajaran</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-goup">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
