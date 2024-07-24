@extends('template.template')
@section('main')
<h1>Form Tambah Data Siswa</h1>
<form action="{{route('siswa.store')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">NIS</label>
      <input type="number" class="form-control @error('nis') is-invalid @enderror " id="exampleInputEmail1" name="nis" value="{{old('nis')}}">

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleInputEmail1" name="nama" value="{{old('nama')}}">
     
      </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Alamat</label>
        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputEmail1" name="alamat" value="{{old('alamat')}}">

    </div>
   
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection