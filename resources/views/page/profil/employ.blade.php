@extends('template.main')

@section('title', 'Profil Pegawai | ')

@section('content')

<section class="page-top-section page-profile pb-0">
  <div class="container">
      <div class="section_header">
        <div class="row align-items-center mb-5">
          <div class="col-lg-6 order-2 order-lg-1 text-center text-lg-start">
            <h1>Pegawai Campus Digital</h1>
            <h4 class="fw-normal">Profil Pegawai</h4>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 mb-3 mb-lg-0 text-center">
            <img class="h-auto mb-3 mb-lg-0 img-header" src="{{ asset('assets/images/illustration/5237.png') }}" alt="">
          </div>
        </div>
      </div>
  </div>
</section>

@endsection