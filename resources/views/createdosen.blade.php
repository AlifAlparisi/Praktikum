@extends('adminLayout/index')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create data Dosen</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="POST" action="/store">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">NIP</label>
          <input type="text" class="form-control" id="nip" name="nip">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
          </div>
          <div class="form-group">
            <label>Pilihan Matkul</label>
            <select class="custom-select"id="matkul_id" name="matkul_id">
                <option value="0">tidak bermatkul</option>
                @foreach ($mtkl as $item)
                <option value="{{$item->id}}">{{$item->matkul}}</option>
                @endforeach
            </select>
          </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection
