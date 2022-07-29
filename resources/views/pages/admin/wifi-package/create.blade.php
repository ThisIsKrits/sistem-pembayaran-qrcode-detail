@extends('layouts.admin')

@section('title', 'Input Data Paket')

@section('content')
<div class="container-fluid">

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="row">
        <div class="col-6">
          <h6 class="mt-2 font-weight-bold text-primary">Input Data Paket</h6>
        </div>
      </div>
     
    </div>
    
        <form action="{{route('wifi-package.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              

              <div class="form-group">
                <label for="nama_paket">Nama Paket</label>
                <input
                  type="text"
                  class="form-control @error('nama_paket') is-invalid @enderror"
                  placeholder="Masukkan Paket"
                  value="{{ old('nama_paket') }}"
                  name="nama_paket"
                  autocomplete="nama_paket"
                  required
                />
                  @error('nama_paket')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
                <label for="speed">Kecepatan Paket</label>
                <input
                  type="text"
                  class="form-control @error('speed') is-invalid @enderror"
                  value="{{old('speed')}}"
                  autocomplete="speed"
                  name="speed"
                  placeholder="Masukkan kecepatan paket"
                  required
                />
                @error('speed')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
                
            

              <div class="form-group">
                <label for="informasi_paket">Informasi Paket</label>
                <input
                  type="text"
                  class="form-control @error('informasi_paket') is-invalid @enderror"
                  placeholder="Masukkan informasi paket"
                  value="{{ old('informasi_paket') }}"
                  name="informasi_paket"
                  autocomplete="informasi_paket"
                  required
                />
                  @error('informasi_paket')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
                <label for="harga_paket">Harga Paket</label>
                <input
                  type="text"
                  class="form-control @error('harga_paket') is-invalid @enderror"
                  placeholder="Masukkan harga"
                  value="{{ old('harga_paket') }}"
                  name="harga_paket"
                  autocomplete="harga_paket"
                  required
                />
                  @error('harga_paket')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" placeholder="Image">
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