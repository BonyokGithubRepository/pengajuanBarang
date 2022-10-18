@extends('layout.master')
@section('content')

<div class="col-md-12">
  <div class="card mb-4">
    <h5 class="card-header">Edit Perangkat</h5>
    <div class="card-body">
      <div>

        <form action="/perangkat/update/{{$perangkat->id_perangkat}}" method="post">
          @csrf
          @method('PUT')
        <label for="defaultFormControlInput" class="form-label">Name</label>
        <input type="text" class="form-control" autocomplete="off" name="nama_perangkat" value="{{$perangkat->nama_perangkat}}" placeholder="John Doe" aria-describedby="defaultFormControlHelp" required><br>
        <button type="submit" class="btn btn-primary">Edit</button>
        </form>
      </div>
      </div>
  </div>
</div>
@endsection
