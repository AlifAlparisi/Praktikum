@extends('adminLayout/index')
@section('content')
tabel dosen
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">nip</th>
        <th scope="col">nama</th>
        <th scope="col">noHp</th>
        <th scope="col">alamat</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($dosen as $item)

      <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$item->nip}}</td>
        <td>{{$item->nama}}</td>
        <td>{{$item->noHp}}</td>
        <td>{{$item->alamat}}</td>
      </tr>

      @endforeach
    </tbody>
  </table>
@endsection