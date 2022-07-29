@extends('layouts.admin')

@section('title', 'Edit Data Rekening')

@section('content')
<div class="container-fluid">

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="row">
        <div class="col-6">
          <h6 class="mt-2 font-weight-bold text-primary">Edit Data Rekening</h6>
        </div>
      </div>
     
    </div>
    
        <form action="{{route('payment.update',$item->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card-body">
              

              <div class="form-group">
                <label for="nama_bank">Nama Bank</label>
                <input
                  type="text"
                  class="form-control @error('nama_bank') is-invalid @enderror"
                  placeholder="Masukkan nama bank"
                  value="{{ $item->nama_bank }}"
                  name="nama_bank"
                  autocomplete="nama_bank"
                  required
                />
                  @error('nama_bank')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
                <label for="nama_pemilik">Nama Pemilik</label>
                <input
                  type="text"
                  class="form-control @error('nama_pemilik') is-invalid @enderror"
                  placeholder="Masukkan nama pemilik"
                  value="{{ $item->nama_pemilik }}"
                  name="nama_pemilik"
                  autocomplete="nama_pemilik"
                  required
                />
                  @error('nama_pemilik')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
                <label for="no_rek">Nomer Rekening</label>
                <input
                  type="text"
                  class="form-control @error('no_rek') is-invalid @enderror"
                  value="{{$item->no_rek}}"
                  autocomplete="no_rek"
                  name="no_rek"
                  placeholder="Masukkan kecepatan paket"
                  required
                />
                @error('no_rek')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>


              <div class="form-group">
                <button type="submit" class="btn btn-primary">
                  Submit
                </button>
              </div>
            </div>
            <!-- /.card-body -->
          </form>
    
  </div>


  </div>


 
@endsection