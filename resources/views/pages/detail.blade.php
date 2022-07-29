@extends('layouts.home')

@section('title', 'Sistem Pembayaran Wifi')

@section('content')
<main>
    <div class="content-bayar">
      <div class="container">
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
            </div>
          </div>
        <div class="row justify-content-center">
        

          <div class="col-6">
            <div class="card">
              <div class="card-header">Detail Pembayaran</div>
              <div class="card-body">
               <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>Paket</td>
                        <td>{{$item->wifi_package->nama_paket}}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>{{$item->nama}}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>{{$item->alamat}}</td>
                    </tr>
                    <tr>
                        <td>Nomer HP</td>
                        <td>{{$item->phone}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{$item->email}}</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>{{$item->transaction_total}}</td>
                    </tr>
                    
                </tbody>
                

               </table>
               
               <h2 class="mt-2">Upload Bukti Pembayaran</h2>
                <form action="{{route('transaction-upload',$item->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                      
        
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control @error('nama_paket') is-invalid @enderror"
                          placeholder="Masukkan Paket"
                          value="{{ $item->id }}"
                          name="id_transaksi"
                          autocomplete="nama_paket"
                          readonly
                        />
                          @error('nama_paket')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
        
                      <div class="form-group">
                        <label for="image">Bukti Transfer</label>
                        <input type="file" class="form-control" name="bukti" placeholder="Image">
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
  </main>
@endsection
