@extends('layouts.admin')

@section('title', 'Bukti Pembayaran')

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

          <h6 class="mt-2 font-weight-bold text-primary">Tabel Paket </h6>
        </div>
        <div class="col-6 d-flex justify-content-end">

          <a href=" {{route('transaction.index')}} " class="m-0 btn btn-primary btn-sm">
            <i class="fa fa-plus"></i>
            Kembali</a>
        </div>
      </div>
     
    </div>
    <div class="card-body">
     <h2>Bukti Pembayaran</h2>
     @foreach($bukti as $image)
     <img src="{{Storage::url($image->bukti)}}" alt="" style="width:500px"
                    class="img-thumbnail" />
     @endforeach
    </div>
  </div>


  </div>
@endsection