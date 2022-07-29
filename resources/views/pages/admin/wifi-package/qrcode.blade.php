@extends('layouts.admin')

@section('title', 'Data Paket Wifi')

@section('content')
<div class="container">
    <div class="row mt-5 text-center">
        {!! $qrcode !!}
    </div>
</div>
@endsection