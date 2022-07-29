@extends('layouts.admin')

@section('title', 'Data Rekening')

@section('content')
<div class="container-fluid">
  @if ($message = Session::get('error'))
  <div class="alert alert-warning">
      <p>{{ $message }}</p>
  </div>
@endif
@if ($message = Session::get('success'))
  <div class="alert alert-success">
      <p>{{ $message }}</p>
  </div>
@endif
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="row">
        <div class="col-6">

          <h6 class="mt-2 font-weight-bold text-primary">Tabel Rekening </h6>
        </div>
        <div class="col-6 d-flex justify-content-end">

          <a href=" {{route('payment.create')}} " class="m-0 btn btn-primary btn-sm">
            <i class="fa fa-plus"></i>
            Tambah Rekening</a>
        </div>
      </div>
     
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nama Bank</th>
              <th>No.Rekening</th>
              <th>Nama Pemilik</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>Nama Bank</th>
              <th>No.Rekening</th>
              <th>Nama Pemilik</th>
              <th>Action</th>
            </tr>
          </tfoot>
          @foreach ($items as $item)
          <tbody>
                <td>{{$item->nama_bank}}</td>
                <td>{{$item->no_rek}}</td>
                <td>{{$item->nama_pemilik}}</td>
                <td>
                  <a href="{{route('payment.edit', $item->id)}}" class="btn btn-secondary btn-xs">
                  <i class="fas fa-pencil-alt"></i>Edit
                  </a>
                  <form action="{{route('payment.destroy', $item->id)}}" method="POST" class="d-inline">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger btn-xs">
                      <i class="fas fa-trash"></i>
                      Delete
                  </button>
                  </form>
                </td>
              </tbody>
              @endforeach
        </table>
      </div>
    </div>
  </div>


  </div>
@endsection