@extends('layouts.home')

@section('title', 'Sistem Pembayaran Wifi')

@section('content')
<main>
    <div class="content-bayar">
      <div class="container">
        <div class="row justify-content-center">
        

          <div class="col-6">
            <div class="card">
                <div class="col text-center">
                    <img src="{{url('frontend/images/ic_mail.png')}}" alt="">
                    <h1>Yeay Sukses!!</h1>
                    <p>
                     Konfirmasi Pembayaran akan dikirim melalui WA/Email
                     <br>
                    </p>
                    <a href="{{url('/')}}" class="btn btn-primary mt-3 px-5 mb-2">
                        Home Page
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
