@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Siswa</div>

                <div class="card-body">
                    <form action="{{route('siswa.update', $siswa->id)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Nis</label>
                            <input type="text" name="nis" class="form-control" value="{{$siswa->nis}}" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Siswa</label>
                            <input type="text" name="nama" class="form-control" value="{{$siswa->nama}}" value="{{$siswa->nis}}" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" cols="30" rows="10" required>{{$siswa->alamat}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            {{-- <input type="text" name="kelas" class="form-control" required> --}}
                            <select name="id_kelas" class="form-control">
                                @foreach($kelas as $data)
                                    <option value="{{$data->id}}" {{$data->id == $siswa->id_kelas ? 'selected' : ''}}>{{$data->kelas}}</option>
                                @endforeach
                            </select>
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
