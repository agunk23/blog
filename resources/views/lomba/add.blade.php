@extends('layout.app')


@section('css')



@endsection


@section('content')
<div class="container">
    <form action="/lomba" method="post">
        {{csrf_field()}}
        <div class="form-group">
        <label for="nama">nama</label>
        <input name="nama" type="text" class="form-control" id="nama"  placeholder="Enter Nama">
        </div>

        <div class="form-group">
                <label for="deskripsi">deskripsi</label>
                <input name="deskripsi" type="text" class="form-control" id="deskripsi" placeholder="tulis deskripsi">
                </div>
        <div class="form-group">
        <label for="poster">poster</label>
        <input name="poster" type="text" class="form-control" id="poster"  plarceholder="poster">
        </div>
        
        <div class="form-group">
        <label for="tanggal_tutup">tanggal</label>
        <input name="tanggal_tutup" type="date" class="form-control" id="tanggal_tutup" placeholder="tanggal">
        </div>
        
                
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection


@section('js')


@endsection



