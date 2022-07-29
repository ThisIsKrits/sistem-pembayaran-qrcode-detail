@extends('layouts.admin')

@section('title', 'Data User')

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

          <h6 class="mt-2 font-weight-bold text-primary">Tabel User </h6>
        </div>
        <div class="col-6 d-flex justify-content-end">

          <a href=" {{route('user.create')}} " class="m-0 btn btn-primary btn-sm">
            <i class="fa fa-plus"></i>
            Tambah User</a>
        </div>
      </div>
     
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Username</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
          </tfoot>
          @foreach ($items as $item)
          <tbody>
                <td>{{$item->name}}</td>
                <td>{{$item->username}}</td>
                <td>{{$item->email}}</td>
                <td>
                  {{-- <a href="{{route('user.edit', $item->id)}}" class="btn btn-secondary btn-xs">
                  <i class="fas fa-pencil-alt"></i>Edit
                  </a> --}}
                  <form action="{{route('user.destroy', $item->id)}}" method="POST" class="d-inline">
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