@extends('layouts.admin')

@section('title', 'Data Transaksi')

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

          <h6 class="mt-2 font-weight-bold text-primary">Data Transaksi </h6>
        </div>
        <div class="col-6 d-flex justify-content-end">

        </div>
      </div>
     
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nama</th>
                <th>Alamat</th>
                <th>Nomer Hp.</th>
                <th>Email</th>
                <th>Total</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nomer Hp.</th>
                <th>Email</th>
                <th>Total</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
          </tfoot>
          @foreach ($items as $item)
          <tbody>
                <td>{{$item->nama}}</td>
                <td>{{$item->alamat}}</td>
                <td>{{$item->phone}} </td>
                <td>{{$item->email}}</td>
                <td>{{$item->transaction_total}}</td>
                <td>{{$item->transaction_status}}</td>
                <td>
                  <a href="{{route('transaction.show', $item->id)}}" class="btn btn-secondary btn-xs">
                    <i class="fas fa-pencil-alt"></i>show
                  </a>
                  <a href="{{route('transaction.edit', $item->id)}}" class="btn btn-secondary btn-xs">
                  <i class="fas fa-pencil-alt"></i>Edit
                  </a>
                  <form action="{{route('transaction.destroy', $item->id)}}" method="POST" class="d-inline">
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