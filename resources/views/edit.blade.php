@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('ujian.update', $ujian->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Nama Matakuliah:</label>
              <input type="text" class="form-control" name="nama_mk" value="{{$ujian->nama_mk}}"/>
          </div>
          <div class="form-group">
              <label for="name"> Dosen:</label>
              <input type="text" class="form-control" name="dosen" value="{{$ujian->dosen}}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Jumlah Soal:</label>
              <input type="text" class="form-control" name="jumlah_soal" value="{{$ujian->jumlah_soal}}"/>
          </div>
          <div class="form-group">
              <label for="text">Keterangan:</label>
              <input type="text" class="form-control" name="keterangan" value="{{$ujian->keterangan}}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection