@extends('layout.master')
@section('content')

    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Table Request</h4>
    <div class="card">
        @if (Auth::user()->role == 'mitra')
            <div></div>
        @else
            <h5 class="card-header">Form request</h5>
            <button type="button" class="btn btn-icon btn-primary" style="margin-left:95%; margin-top:-55px"
                data-bs-toggle="modal" data-bs-target="#modalCenter">
                <span class="tf-icons bx  bxs-user-plus"></span>
            </button>
        @endif

        <div class="col-lg-4 col-md-6">
            <div class="mt-3">
                <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Form Request</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="/request/create" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nameWithTitle" class="form-label">Nama PTL</label>
                                            @if(Auth::user()->role == 'admin')
                                            <select id="selectTypeOpt" class="form-select color-dropdown" name="id_ptl">
                                                @foreach ($ptl as $l)
                                                    <option selected="" value="{{ $l->id_ptl }}">{{ $l->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @elseif(Auth::user()->role == 'ptl')
                                            @foreach ($ptl as $l)
                                              <input type="text" id="nameWithTitle" autocomplete="off" name="id_ptl" value="{{ $l->id_ptl }}"
                                                class="form-control" required/>
                                                @endforeach
                                              @endif
                                        </div>
                                    </div>
                                    <div class="col mb-3">
                                        <div class="col mb-3">
                                            <label for="emailWithTitle" class="form-label">Nama Perangkat</label>
                                            <select id="selectTypeOpt" class="form-select color-dropdown"
                                                name="id_perangkat">
                                                @foreach ($perangkat as $p)
                                                    <option selected="" value="{{ $p->id_perangkat }}">
                                                        {{ $p->nama_perangkat }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col mb-3">
                                            <label for="dobWithTitle" class="form-label">Nama Mitra</label>
                                            <select id="selectTypeOpt" class="form-select color-dropdown" name="id_mitra">
                                                @foreach ($mitra as $m)
                                                    <option selected="" value="{{ $m->id_mitra }}">{{ $m->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col mb-3">
                                            <label for="nameWithTitle" class="form-label">Spa</label>
                                            <input type="text" id="nameWithTitle" autocomplete="off" name="spa"
                                                class="form-control" placeholder="masukan spa" required/>
                                        </div>
                                        <br>
                                        <div class="col mb-3" style="margin-top: -20px;">
                                            <label for="nameWithTitle" class="form-label">Tanggal Request</label>
                                            <input class="form-control" type="date" style="height: 38px;"
                                                autocomplete="off" name="tgl_request" class="form-control"
                                                id="html5-date-input" required/>
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
                            <th>Tanggal Request</th>
                            @if (Auth::user()->role == 'ptl')
                                <th>Action</th>
                            @if (Auth::user()->role == 'admin')
                                <th></th>
                                <th>Action</th>
                            @endif
                        </tr>
                    @endif
                </thead>
                <tbody>
                    @foreach ($request as $p)
                        <tr>
                            <td>{{ $p->ptl->nama }}</td>
                            <td>{{ $p->perangkat->nama_perangkat }}</td>
                            <td>{{ $p->mitra->nama }}</td>
                            <td>{{ $p->spa }}</td>
                            <td>{{ $p->tgl_request }}</td>
                            <td>
                                @if (Auth::user()->role == 'ptl')
                                    <a style="margin-left:-20px" href="/request/delete/{{ $p->id_request }}"
                                        class="btn btn-primary">
                                        Delete
                                    </a>
                                @endif
                            </td>
                            <td>
                                @if (Auth::user()->role == 'admin')
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/request/delete/{{ $p->id_request }}"><i
                                                    class="bx bx-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
