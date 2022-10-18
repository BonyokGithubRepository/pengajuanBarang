@extends('layout.master')
@section('content')
@include('sweetalert::alert')
<div class="col-md-12">
  <div class="card mb-4">
    <h5 class="card-header">Edit Mitra </h5>
    <div class="card-body">
      <div>
        <form action="/mitra/update/{{$mitra->id_mitra}}" method="post">
            @csrf
            @method('PUT')
        <label for="defaultFormControlInput" class="form-label">Name</label>
        <input type="text" class="form-control" name="nama" value="{{$mitra->nama}}" id="defaultFormControlInput" autocomplete="off" placeholder="John Doe" aria-describedby="defaultFormControlHelp" required>
        <label for="defaultFormControlInput" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" value="{{$mitra->email}}" id="defaultFormControlInput" autocomplete="off" placeholder="John Doe" aria-describedby="defaultFormControlHelp" requiredv>
        <label for="defaultFormControlInput" class="form-label">Nama Foto</label>
        <input type="file" class="form-control" name="nama_pict" value="{{$mitra->nama_pict}}" id="defaultFormControlInput"autocomplete="off"  placeholder="John Doe" aria-describedby="defaultFormControlHelp" required>
        <br>
        <button type="submit" class="btn btn-primary" >Edit</button>
      </form>
      </div>
    </div>
  </div>
</div>

@endsection