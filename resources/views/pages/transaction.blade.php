@extends('layouts.home')

@section('title', 'Sistem Pembayaran Wifi')

@section('content')
<main>
    <div class="content-bayar">
      <div class="container">
        <div class="row mt-5 mb-5 text-center">
          {!! $qrcode !!}
          <p>Scan untuk melihat detail paket</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-6">
            <div class="card mb-5">
              <div class="card-header">Bank</div>
              <div class="card-body">
               <table class="table">
                   <tr>
                       <th>Nama Bank</th>
                       <th>No rekening</th>
                       <th>Atas Nama</th>
                      </tr>
                  <tr>
                      @foreach ($item_bank as $bank)
                      <td>{{$bank->nama_bank}}</td>
                      <td>{{$bank->no_rek}}</td>
                      <td>{{$bank->nama_pemilik}}</td>
                      @endforeach
                  </tr>
                  
                 
               </table>
               
              </div>
            </div>
            <p style="color: red">Note : Transfer sesuai harga paket lalu isi form dibawah!
              <br>Jangan lupa Foto bukti Pembayaran untuk diupload!
            </p>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-6">
            <div class="card">
              <div class="card-header">Form Pembayaran</div>
              <div class="card-body">
                <form action="{{route('transaction-proses',$item->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                      
                        <div class="form-group">
                            <input
                              type="hidden"
                              class="form-control @error('id_paket') is-invalid @enderror"
                              placeholder="Masukkan harga"
                              value="{{ $item->id }}"
                              name="id_paket"
                              autocomplete="id_paket"
                              required
                            />
                              @error('id_paket')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
        
                      <div class="form-group">
                        <label for="nama">Nama</label>
                        <input
                          type="text"
                          class="form-control @error('nama') is-invalid @enderror"
                          placeholder="Masukkan Paket"
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
                        <label for="email">Email</label>
                        <input
                          type="email"
                          class="form-control @error('email') is-invalid @enderror"
                          value="{{old('email')}}"
                          autocomplete="email"
                          name="email"
                          placeholder="Masukkan kecepatan paket"
                          required
                        />
                        @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                        
                    
        
                      <div class="form-group">
                        <label for="phone">No Hp</label>
                        <input
                          type="text"
                          class="form-control @error('phone') is-invalid @enderror"
                          placeholder="Masukkan informasi paket"
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
        
                      <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input
                          type="text"
                          class="form-control @error('alamat') is-invalid @enderror"
                          placeholder="Masukkan harga"
                          value="{{ old('alamat') }}"
                          name="alamat"
                          autocomplete="alamat"
                          required
                        />
                          @error('alamat')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>

                      <div class="form-group">
                        <input
                          type="hidden"
                          class="form-control @error('harga_paket') is-invalid @enderror"
                          placeholder="Masukkan harga"
                          value="{{ $item->harga_paket }}"
                          name="transaction_total"
                          autocomplete="harga_paket"
                          required
                        />
                          @error('harga_paket')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
        
                      <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">
                          Submit
                        </button>
                      </div>
                    </div>
                    <!-- /.card-body -->
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
