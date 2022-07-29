@extends('layouts.admin')

@section('title', 'Edit Transaksi')

@section('content')
<div class="container-fluid">

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="row">
        <div class="col-6">
          <h6 class="mt-2 font-weight-bold text-primary">Edit Transaksi</h6>
        </div>
      </div>
     
    </div>
    
        <form action="{{route('transaction.update',$item->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card-body">
              
                <input
                type="text"
                class="form-control @error('nama') is-invalid @enderror"
                placeholder="Masukkan Paket"
                value="{{ $item->id_paket }}"
                name="id_paket"
                required
                readonly
              />

              <div class="form-group">
                <label for="nama">Nama</label>
                <input
                  type="text"
                  class="form-control @error('nama') is-invalid @enderror"
                  placeholder="Masukkan Paket"
                  value="{{ $item->nama }}"
                  name="nama"
                  autocomplete="nama"
                  required
                />
                  @error('nama')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input
                  type="text"
                  class="form-control @error('alamat') is-invalid @enderror"
                  value="{{$item->alamat}}"
                  autocomplete="alamat"
                  name="alamat"
                  placeholder="Masukkan kecepatan paket"
                  required
                />
                @error('alamat')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
                
            

              <div class="form-group">
                <label for="phone">Nomer HP</label>
                <input
                  type="text"
                  class="form-control @error('phone') is-invalid @enderror"
                  placeholder="Masukkan informasi paket"
                  value="{{ $item->phone }}"
                  name="phone"
                  autocomplete="phone"
                  required
                />
                  @error('phone')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="email"
                  class="form-control @error('email') is-invalid @enderror"
                  placeholder="Masukkan harga"
                  value="{{ $item->email }}"
                  name="email"
                  autocomplete="email"
                  required
                />
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
                <label for="transaction_total">Total</label>
                <input
                  type="text"
                  class="form-control @error('transaction_total') is-invalid @enderror"
                  placeholder="Masukkan harga"
                  value="{{ $item->transaction_total }}"
                  name="transaction_total"
                  autocomplete="transaction_total"
                  required
                />
                  @error('transaction_total')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              
              <div class="form-group">
                <label>Type Kost</label>
                <select class="form-control" name="transaction_status">
                 <option value="Proses">Proses</option>
                      <option value="Sukses">Sukses</option>
                </select>

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