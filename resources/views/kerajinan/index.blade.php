@extends('layout.master2')

@section('content')
<div class="container mt-3">
    <div class="row">
      <div align="Center">
        <h2 class="mr-auto">Data Produk Kerajinan</h2>
      </div>
      @if (session()->has('pesan'))
      <div class="alert alert-success">
          {{session()->get('pesan')}}
      </div>
      @endif
      @if (session()->has('hapus'))
      <div class="alert alert-danger">
          {{session()->get('hapus')}}
      </div>
      @endif
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Bahan</th>
            <th>Harga</th>
            <th>Tanggal ditambahkan</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($kerajinans as $kerajinan)
          <tr>
            <th>{{$loop->iteration}}</th>
            <td><a href="{{route('kerajinan.show2', ['kerajinan' => $kerajinan->id])}}">{{$kerajinan->nama}}</a></td>
            <td>{{$kerajinan->jenis}}</td>
            <td>{{$kerajinan->bahan}}</td>
            <td>{{$kerajinan->harga}}</td>
            <td>{{$kerajinan->updated_at}}</td>
          </tr>
          @empty
            <td colspan="6" class="text-center">Tidak ada data...</td>
          @endforelse
        </tbody>

      </table>
    </div>
      <div align="right">
      <a href="{{route('kerajinan.create')}}" class="btn btn-primary"> Tambah Produk</a></div>
    </div>
  </div>

@endsection
