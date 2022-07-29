@extends('layouts.home')

@section('title', 'Sistem Pembayaran Wifi')

@section('content')
<main>
  <div class="content-bayar" style="margin-bottom: 150px;">
    <div class="container">
      <h3 class="text-center">Cari Data Anda</h3>
      <div class="row justify-content-center">
        <div class="col-6">
          <div class="card">
            <div class="card-body">
              <form action="/home/cari" method="GET">
                <div class="form-group">
                  <label for="">Cari Data</label>
                  <input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}" class="form-control">

                </div>
                <div class="form-group mt-2">

                  <input type="submit" class="btn btn-primary" value="CARI">
                </div>
              </form>

            </div>
             
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
        

            <div class="col-6">
              <div class="card mb-5">
                <div class="card-header">Bank</div>
                <div class="card-body">
                 <table class="table">
                     <tr>
                         <th>Nama</th>
                         <th>Alamat</th>
                        </tr>
                    <tr>
                        @foreach ($data as $item)
                        <td>{{$item->nama}}</td>
                        <td>{{$item->alamat}}</td>
                        @endforeach
                    </tr>
                    
                   
                 </table>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>

    
  </main>
@endsection
