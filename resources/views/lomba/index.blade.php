@extends('layout.app')

@section('css')

@endsection

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NAMA</th>
      <th scope="col">DESKRIPSI</th>
      <th scope="col">POSTER</th>
      <th scope="col">TANGGAL TUTUP</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $lombas = \App\lomba::get();
        for($i = 0; $i<sizeOf($lombas); $i++){
            echo'
                    
            <tr>
            
            <td>'.$lombas[$i]->id.'</td>
            <td>'.$lombas[$i]->nama.'</td>
            <td>'.$lombas[$i]->deskripsi.'</td>
            <td>
                <img height="100" src="'.$lombas[$i]->poster.'">
            </td>
            <td>'.$lombas[$i]->tanggal_tutup.'</td>
            <td>

                <button type="button" class="btn btn-light">edit</button>
                <button type="button" class="btn btn-success">delete</button>
            </td>
            
            
        </tr> ';
        
        }

        ?>
    
  </tbody>

@endsection

@section('js')

@endsection