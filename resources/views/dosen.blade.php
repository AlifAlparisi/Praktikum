@extends('adminLayout/index')
@section('content')
<div class="container">

  <div class="row">
tabel dosen
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">nip</th>
        <th scope="col">nama</th>
        <th scope="col">matkul</th>
        <th scope="col">alamat</th>
        <th>action</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach ($dosen as $item)

      <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$item->nip}}</td>
        <td>{{$item->nama}}</td>
        <td>{{$item->matkul}}</td>
        <td>{{$item->alamat}}</td>
        <td class="btn btn-primary btn-sm">edit</td>
        <td class="btn btn-danger btn-sm">delete</td>
      </tr>

      @endforeach
    </tbody>
  </table>
</div>
<div class="row">
  <a href="/createdosen" class="btn btn-success btn-sm"> Create </a>
</div>
</div>
<div class="row">
{{$dosen->links('adminLayout.pagination')}}
</div>
@endsection