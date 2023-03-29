@extends('template.main')

@section('title', 'Afiliasi | ')

@section('content')

<section class="page-top-section set-bg ">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 order-2 order-lg-1 text-center text-lg-start">
        <h1>Afiliasi</h1>
        <h4 class="fw-normal">Dapatkan komisi sebesar Rp.{{ number_format(setting('site.komisi_student'),0,',','.') }}<br>Setiap pendaftaran melalui kode referral</h4>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 mb-3 mb-lg-0 text-center">
        <img class="h-auto mb-3 mb-lg-0 img-header" src="{{asset('assets/images/illustration/min/6617.png')}}" alt="banner">
      </div>
    </div>
  </div>
</section>

<section class="info-section spad">
  <div class="container">
    <div class="heading text-center">
      <h1>Bagaimana Caranya?</h1>
      <p class="mb-2">Program afiliasi merupakan program dimana Anda dapat menerima komisi dari kami dengan cara memberikan referensi Campus Digital kepada teman, relasi atau pengunjung website Anda, kemudian pihak yang Anda referensikan tersebut melakukan order & pembayaran. Komisi diberikan sebesar Rp.{{ number_format(setting('site.komisi_student'),0,',','.') }} setiap pendaftaran yang berhasil transfer. Fasilitas member untuk mereferensikan yaitu dengan adanya sistem URL Referral, dimana setiap member akan mendapatkannya.</p>
      <div class="mb-4">
        <p>Contoh URL Referral adalah:</p>
        <span class="alert alert-info">{{ URL::to('/') }}?ref=masagung</span>
      </div>
      <p>Setiap member yang daftar melalui URL Referral Anda, maka bonus atau komisi akan otomatis masuk ke dalam data komisi yang kemudian bisa diambil kapan saja.</p>
    </div>
    <div class="content">
      
    </div>
  </div>
</section>

@endsection

@section('css-extra')

<style type="text/css">
  .info-text {padding-top: 0;}
</style>

@endsection