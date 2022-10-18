@extends('layout.master')
@section('content')

<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Table Request</h4>
<div class="card">
                <h5 class="card-header">form request</h5>
                <button type="button" class="btn btn-icon btn-primary" style="margin-left:95%; margin-top:-55px" data-bs-toggle="modal" data-bs-target="#modalCenter">
                              <span class="tf-icons bx  bxs-user-plus"></span>
                </button>
                <div class="col-lg-4 col-md-6">
                  <div class="mt-3">
                      <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="modalCenterTitle">Form PTl</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal"
                                          aria-label="Close"></button>
                                  </div>
                                  <form action="/PTL/create" method="post">
                                    @csrf
                                      <div class="modal-body">
                                          <div class="row">
                                              <div class="col mb-3">
                                                  <label for="nameWithTitle" class="form-label">Nama Ptl</label>
                                                  <input type="text" id="nameWithTitle"  autocomplete="off" name="nama" class="form-control"
                                                      placeholder="Enter Name" />
                                              </div>
                                          </div>
                                          <div class="row g-2">
                                              <div class="col mb-0">
                                                  <label for="emailWithTitle" class="form-label">Nama Perangkat</label>
                                                  <input type="text" id="emailWithTitle" name="email"
                                                      class="form-control"  autocomplete="off" placeholder="xxxx@xxx.xx" />
                                              </div>
                                              <div class="col mb-0">
                                                  <label for="dobWithTitle" class="form-label">Nama Mitra</label>
                                                  <input type="number" id="dobWithTitle" name="no_wa"
                                                      class="form-control"  autocomplete="off" placeholder="Nomer Whatsapp" />
                                              </div>
                                              <div class="col mb-3">
                                                  <label for="nameWithTitle" class="form-label">Spa</label>
                                                  <input type="text" id="nameWithTitle" autocomplete="off"  name="area" class="form-control"
                                                      placeholder="Enter Name" />
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
                  <table class="table">
                    <thead>
                      <tr class="text-nowrap">
                        <th>Nama PTL</th>
                        <th>Nama perangkat</th>
                        <th>Nama Mitra</th>
                        <th>SPA</th>
                        <th><center>Barcode</center></th>
                        <th>Tanggal Request</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                          <center>
                            <button type="button" class="btn rounded-pill btn-primary">Cetak Barcode</button>
                          </center>
                          </td>
                        <td></td>
                        <td></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                          </div>
                        </td>   
                      </tr>
                      <tr>
                    </tbody>
                  </table>
                </div>
              </div>
@endsection