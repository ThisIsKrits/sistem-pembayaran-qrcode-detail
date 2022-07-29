@extends('layouts.home')

@section('title', 'Sistem Pembayaran Wifi')

@section('content')
<main>
  

    <div class="content">
      <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          @foreach ($items as $item)
          <div class="col">
            <div class="card" style="width: 18rem">
              <img src="{{Storage::url($item->image)}}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">{{$item->nama_paket}}</h5>
                <a href="{{url('transaction/'.$item->id)}}" class="btn btn-primary">Scan Detail Paket</a>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>

    
  </main>
@endsection
