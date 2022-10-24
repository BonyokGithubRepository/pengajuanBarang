@extends('layout.master')
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Table Mitra</h4>
        <div class="card">
            <h5 class="card-header">Table Mitra</h5>
            <button type="button" class="btn btn-icon btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter"
                style="margin-left:95%; margin-top:-55px">
                <span class="tf-icons bx  bxs-user-plus"></span>

            </button>
            <div class="col-lg-4 col-md-6">
                <div class="mt-3">
                    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                @if(Auth::user()->role == "mitra")
                                    ""
                                @else

                                @endif
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalCenterTitle">Form Mitra</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <form action="/mitra/create" method="post">
                                  @csrf
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="nameWithTitle" class="form-label">Nama</label>
                                                <input type="text" autocomplete="off" id="nameWithTitle" name="nama" class="form-control"
                                                    placeholder="Enter Name" required />
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Email</label>
                                                <input type="email"  autocomplete="off" id="emailWithTitle" name="email"
                                                    class="form-control" placeholder="xxxx@xxx.xx" required/>
                                            </div>
                                            <div class="col mb-0">
                                                <label for="dobWithTitle" class="form-label">Nama Poto</label>      
                                                <input type="file" id="dobWithTitle" name="nama_pict"
                                                    class="form-control" required />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="nameWithTitle" class="form-label">Password</label>
                                                <input type="password" autocomplete="off" id="nameWithTitle" name="pas" class="form-control "
                                                    placeholder="Masukan password"  required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Nama Foto</th>
                            <th>Password</th>
                            @if(Auth::user()->role == 'admin')
                            <th>Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                    @foreach($mitra as $p)
                        <tr>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->email }}</td>
                            <td>{{ $p->nama_pict }}</td>
                            <td>{{ $p->password }}</td>
                            @if(Auth::user()->role == 'admin')
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="/mitra/edit/{{$p->id_mitra}}"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="/mitra/delete/{{$p->id_mitra}}"><i
                                                class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
