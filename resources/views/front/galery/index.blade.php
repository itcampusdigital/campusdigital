@extends('template.main')

@section('title', 'Galery | ')

@section('content')

<section class="page-top-section set-bg">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 order-2 order-lg-1 text-center text-lg-start">
        <h1>Galery</h1>
        <h4 class="fw-normal">Dokumentasi Campus Digital</h4>
		@if(!Auth::guest() && Auth::user()->role == 1)
          <a type="button" href={{ route('site.galery.create') }} class="btn btn-dark">Tambah Gambar</a>
        @endif
      </div>
      <div class="col-lg-6 order-1 order-lg-2 mb-1 mb-lg-0 text-center">
        <img class="h-auto mb-3 mb-lg-0 img-header" src="{{asset('assets/images/illustration/min/5758.png')}}" alt="banner">
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container lg-3">
    <div class="row">
		@foreach($gambarr as $gambars)
      <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
        <div class="card border-0 shadow-sm">
          <div class="card-header bg-white text-center"><h5>{{ $gambars->judul_gambar }}</h5></div>
              <img style="height:350px" src="{{ asset('assets/images/dokumentasi/'.$gambars->gambar) }}">
        </div>
      </div>
		@endforeach
  </div>
</section>




@endsection

@section('css-extra')

<style type="text/css">
  .info-text {padding-top: 0;}
</style>

@endsection