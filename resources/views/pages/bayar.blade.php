@extends('layouts.home')

@section('title', 'Sistem Pembayaran Wifi')

@section('content')
<main>
    <div class="content-bayar">
      <div class="container">
        <div class="row justify-content-center">
            <div class="row mt-5 text-center">
                {!! $qrcode !!}
            </div>

          <div class="col-6">
            <div class="card">
              <div class="card-header">Form Pembayaran</div>
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukkan Nama Anda!" />
                  </div>
                  <div class="form-group">
                    <label for="paker">Pilih Paket Wifi</label>
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Pilih Paket Wifi</option>
                      <option value="1">Paket 1</option>
                      <option value="2">Paket 2</option>
                      <option value="3">Paket 3</option>
                    </select>
                  </div>

                  <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
