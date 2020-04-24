@extends('layout')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Tambah
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
      <form method="post" action="{{ route('ujian.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Nama Matakuliah:</label>
              <input type="text" class="form-control" name="nama_mk"/>
          </div>
          <div class="form-group">
              <label for="price">Dosen :</label>
              <input type="text" class="form-control" name="dosen"/>
          </div>
          <div class="form-group">
              <label for="quantity">Jumlah Soal :</label>
              <input type="text" class="form-control" name="jumlah_soal"/>
          </div>
          <div class="form-group">
          <label for="keterangan">Keterangan</label>
          <input type="text" class="form-control" name="keterangan"/>
          </div>
          <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
  </div>
</div>
@endsection