@extends('layout.master')
@section('content')

<div class="col-md-12">
  <div class="card mb-4">
    <h5 class="card-header">Edit PTL </h5>
    <div class="card-body">
      <div>
        <form action="/QTY/update/{{$qty->id_qty}}" method="post">
            @csrf
            @method('PUT')
        <label for="defaultFormControlInput" class="form-label">Nama Perangkat</label>
        <input type="text" class="form-control" name="nama_perangkat" value="{{$qty->nama_perangkat}}" id="defaultFormControlInput" placeholder="John Doe" aria-describedby="defaultFormControlHelp">
        <label for="defaultFormControlInput" class="form-label">Tanggal QTY</label>
        <input type="date" class="form-control" name="tanggal_qty" value="{{$qty->tanggal_qty}}" id="defaultFormControlInput" placeholder="John Doe" aria-describedby="defaultFormControlHelp">
        <br>
        <button type="submit" class="btn btn-primary" >Edit</button>
      </form>
      </div>
    </div>
  </div>
</div>

@endsection