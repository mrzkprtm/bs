@extends('layout.master2')
@section('title','Kerajinan')
@section('menuKerajinan','active')

@section('content')
<div class="container mt-3">
    <div class="row">
      <div class="col-12 pt-3 justify-content-end align-items-center">
        <h1 class="h2 mr-auto">Detail Kerajinan</h1>
        <hr>
      </div>

      <div class="row">
        <div class="col-md-7">
            <img src='{{ asset("image/".$kerajinan->foto) }}'  alt="..." width="400">
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-4">
          <br>
          <br>
          <br>
          <br>
          <h2>{{$kerajinan->nama}}</h2>
          <table class="table table-borderless">
            <tr>
              <th>Jenis</th>
              <td>{{$kerajinan->jenis}}</td>
            </tr>
            <tr>
              <th>Bahan</th>
              <td>{{$kerajinan->bahan}}</td>
            </tr>
            <tr>
              <th>Detail</th>
              <td>{{$kerajinan->detail}}
              </td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>
                    {{$kerajinan->harga}}
                </td>
              </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="pt-3 d-flex justify-content-end align-items-center">
        <a href="{{route('kerajinan.edit', ['kerajinan' => $kerajinan->id])}}"
            class="btn btn-warning">Edit</a> &nbsp; &nbsp;
        <form action="{{route ('kerajinan.destroy',
            ['kerajinan'=>$kerajinan->id])}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger ml-3">Hapus</button>
        </form>
        </div>
</div>



@endsection
