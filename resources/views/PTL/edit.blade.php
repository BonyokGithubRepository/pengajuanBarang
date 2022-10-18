@extends('layout.master')
@section('content')

<div class="col-md-12">
  <div class="card mb-4">
    <h5 class="card-header">Edit PTL </h5>
    <div class="card-body">
      <div>
        <form action="/PTL/update/{{$ptl->id_ptl}}" method="post">
            @csrf
            @method('PUT')
        <label for="defaultFormControlInput" class="form-label">Name</label>
        <input type="text" autocomplete="off" class="form-control" name="nama" value="{{$ptl->nama}}" id="defaultFormControlInput" placeholder="John Doe" aria-describedby="defaultFormControlHelp">
        <label for="defaultFormControlInput" class="form-label">Email</label>
        <input type="email" class="form-control" autocomplete="off" name="email" value="{{$ptl->email}}" id="defaultFormControlInput" placeholder="John Doe" aria-describedby="defaultFormControlHelp">
        <label for="defaultFormControlInput" class="form-label">No Wa</label>
        <input type="number" class="form-control" autocomplete="off" name="no_wa" value="{{$ptl->no_wa}}" id="defaultFormControlInput" placeholder="John Doe" aria-describedby="defaultFormControlHelp">
        <label for="defaultFormControlInput" class="form-label">Area</label>
        <input type="text" class="form-control"autocomplete="off"  name="area" value="{{$ptl->area}}" id="defaultFormControlInput" placeholder="John Doe" aria-describedby="defaultFormControlHelp">
        <br>
        <button type="submit" class="btn btn-primary" >Edit</button>
      </form>
      </div>
    </div>
  </div>
</div>

@endsection