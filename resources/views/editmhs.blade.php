@extends('adminLayout/index')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create data mahasiswa</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="POST" action="/list/update/{{$mahasiswa->slug}}">
        @method('patch')
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">NPM</label>
          <input type="text" class="form-control" id="npm" name="npm" value="{{$mahasiswa->npm}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$mahasiswa->name}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Class</label>
            <input type="text" class="form-control" id="class" name="class" value="{{$mahasiswa->class}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{$mahasiswa->alamat}}">
        </div>
        <div class="form-group">
            <label>Pilih Organisasi</label>
            <select class="custom-select" id="id_organization" name="id_organization">
                <option value="0" {{$mahasiswa->organization_id == "0" ? 'selected' : ' '}}>Tidak berorganisasi
                </option>
                <option value="1" {{$mahasiswa->organization_id == "1" ? 'selected' : ' '}}>himpunan</option>
                <option value="2" {{$mahasiswa->organization_id == "2" ? 'selected' : ' '}}>BEM</option>
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