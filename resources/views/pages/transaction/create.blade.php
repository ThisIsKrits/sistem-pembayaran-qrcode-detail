@extends('layouts.admin')

@section('title', 'Form Pembayaran')

@section('content')
<div class="container-fluid">

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="row">
        <div class="col-6">
          <h6 class="mt-2 font-weight-bold text-primary">Form Pembayaran</h6>
        </div>
      </div>
     
    </div>
    
        <form action="{{route('transaction.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              

              <div class="form-group">
                <label for="nama">Nama</label>
                <input
                  type="text"
                  class="form-control @error('nama') is-invalid @enderror"
                  placeholder="Masukkan nama"
                  value="{{ old('nama') }}"
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
                  value="{{old('alamat')}}"
                  autocomplete="alamat"
                  name="alamat"
                  placeholder="Masukkan alamat"
                  required
                />
                @error('alamat')
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
                  placeholder="Masukkan informasi paket"
                  value="{{ old('email') }}"
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
                <label for="phone">Nomer Hp</label>
                <input
                  type="text"
                  class="form-control @error('phone') is-invalid @enderror"
                  placeholder="Masukkan no hp"
                  value="{{ old('phone') }}"
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

              <label for="id_paket">Pilih Paket</label>
              <select name="id_paket" requred class="form-control">
                  <option value="">Pilih Paket Travel</option>
                  @foreach ($item_paket as $item)
                      <option value="{{$item->id}}">
                          {{$item->nama_paket}}
                      </option>
                  @endforeach
              </select>
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