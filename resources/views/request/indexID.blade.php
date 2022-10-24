@extends('layout.master')
@section('content')

    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Table Request</h4>
    <div class="card">
        {{-- @if (Auth::user()->role == 'mitra')
            <div></div>
        @else
            <h5 class="card-header">Form request</h5>
            <button type="button" class="btn btn-icon btn-primary" style="margin-left:95%; margin-top:-55px"
                data-bs-toggle="modal" data-bs-target="#modalCenter">
                <span class="tf-icons bx  bxs-user-plus"></span>
            </button>
        @endif --}}

        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                        <tr class="text-nowrap">
                            <th>Nama PTL</th>
                            <th>Nama perangkat</th>
                            <th>Nama Mitra</th>
                            <th>SPA</th>
                            <th>Tanggal Request</th>
                        </tr>
                
                </thead>
                <tbody>
                    @foreach ($request as $p)
                        <tr>
                            <td>{{ $p->ptl->nama }}</td>
                            <td>{{ $p->perangkat->nama_perangkat }}</td>
                            <td>{{ $p->mitra->nama }}</td>
                            <td>{{ $p->spa }}</td>
                            <td>{{ $p->tgl_request }}</td>
                        </tr>
                        <tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
