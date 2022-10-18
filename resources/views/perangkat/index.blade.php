@extends('layout.master')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Table Perangkat</h4>
  <div class="card">
      <h5 class="card-header">Table Perangkat</h5>
      <button type="button" class="btn btn-icon btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter"
          style="margin-left:95%; margin-top:-55px">
          <span class="tf-icons bx  bxs-user-plus"></span>

      </button>
      <div class="col-lg-4 col-md-6">
          <div class="mt-3">
              <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="modalCenterTitle">Form Mitra</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                          </div>
                          <form action="/perangkat/create" method="post">
                            @csrf
                              <div class="modal-body">
                                  <div class="row">
                                      <div class="col mb-3">
                                          <label for="nameWithTitle" class="form-label">Nama Perangkat</label>
                                          <input type="text" autocomplete="off" id="nameWithTitle" name="nama_perangkat" class="form-control"
                                              placeholder="Enter Perangkat" required/>
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
                      <th>Nama Perangkat</th>
                  </tr>
              </thead>
              <tbody class="table-border-bottom-0">

               @foreach($perangkat as $p)
                  <tr>
                      <td>{{ $p->nama_perangkat }}</td>
                      <td>
                          <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                  data-bs-toggle="dropdown">
                                  <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item" href="/perangkat/edit/{{$p->id_perangkat}}"><i
                                          class="bx bx-edit-alt me-1"></i> Edit</a>
                                  <a class="dropdown-item" href="/perangkat/delete/{{$p->id_perangkat}}"><i
                                          class="bx bx-trash me-1"></i> Delete</a>
                              </div>
                          </div>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
  </div>
</div>

@endsection