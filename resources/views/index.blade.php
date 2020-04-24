@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nama Matkul</td>
          <td>Dosen</td>
          <td>Jumlah Soal</td>
          <td>Keterangan</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($ujian as $ujian)
        <tr>
            <td>{{$ujian->id}}</td>
            <td>{{$ujian->nama_mk}}</td>
            <td>{{$ujian->dosen}}</td>
            <td>{{$ujian->jumlah_soal}}</td>
            <td>{{$ujian->keterangan}}</td>
            <td><a href="{{ route('ujian.edit',$ujian->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('ujian.destroy', $ujian->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div>
  <button onclick="location.href='{{ url('http://127.0.0.1:8000/ujian/create') }}'">
     Tambah</button>
  </div>
<div>
@endsection