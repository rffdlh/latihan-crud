@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data Kelas</div>

                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Kelas</label>
                        <input type="text" name="nama" value="{{$kelas->kelas}}" class="form-control" readonly>
                    </div>
                    <div class="form-goup">
                        <label>Daftar Data Siswa</label>
                        <ul>
                            @foreach($kelas->siswa as $data)
                                <li>{{$data->nama}} - {{$data->nis}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="form-goup">
                        <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
