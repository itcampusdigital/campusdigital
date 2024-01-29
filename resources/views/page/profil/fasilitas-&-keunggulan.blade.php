@extends('template.main')

@section('title', 'fasilitas & Keunggulan | ')

@section('content')

<section class="page-top-section page-profile pb-0">
  <div class="container">
      <div class="section-header">
        <div class="row align-items-center mb-5">
          <div class="col-lg-6 order-2 order-lg-1 text-center text-lg-start">
            <h1>Fasilitas & Keunggulan</h1>
            <h4 class="fw-normal">Fasilitas & Keunggulan Campus Digital</h4>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 mb-3 mb-lg-0 text-center">
            <img class="h-auto mb-3 mb-lg-0 img-header" src="{{ asset('assets/images/illustration/5237.png') }}" alt="">
          </div>
        </div>
      </div>
      <div class="section-mengapa mb-5">
        <div class="heading mb-4">
          <h1>Mengapa Kami?</h1>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <li class="list-unstyled"><i class="fas fa-check bg-primary-s text-primary p-1 mb-2 rounded"></i> Instruktur yang tersertifikasi</li>
            <li class="list-unstyled"><i class="fas fa-check bg-primary-s text-primary p-1 mb-2 rounded"></i> Video Pembelajaran yang aplikatif</li>
            <li class="list-unstyled"><i class="fas fa-check bg-primary-s text-primary p-1 mb-2 rounded"></i> Peluang berkarir di Perusahaan mitra</li>
            <li class="list-unstyled"><i class="fas fa-check bg-primary-s text-primary p-1 mb-2 rounded"></i> Pengelola dan instruktur tersertifikasi</li>
            <li class="list-unstyled"><i class="fas fa-check bg-primary-s text-primary p-1 mb-2 rounded"></i> Modul Pembelajaran selalu up to date</li>
          </div>
          <div class="col-lg-6">
            <li class="list-unstyled"><i class="fas fa-check bg-primary-s text-primary p-1 mb-2 rounded"></i> Lokasi yang strategis dan mudah dijangkau</li>
            <li class="list-unstyled"><i class="fas fa-check bg-primary-s text-primary p-1 mb-2 rounded"></i> Kerjasama dengan instansi pemerintah maupun swasta</li>
            <li class="list-unstyled"><i class="fas fa-check bg-primary-s text-primary p-1 mb-2 rounded"></i> Peserta berkesempatan mendapatkan sertifikasi kompetensi</li>
            <li class="list-unstyled"><i class="fas fa-check bg-primary-s text-primary p-1 mb-2 rounded"></i> Waktu belajar yang fleksibel bisa belajar kapan dan dimana saja</li>
            <li class="list-unstyled"><i class="fas fa-check bg-primary-s text-primary p-1 mb-2 rounded"></i> Program affiliate yang memberi potensi penghasilan langsung  peserta</li>
            <li class="list-unstyled"><i class="fas fa-check bg-primary-s text-primary p-1 mb-2 rounded"></i> Mentor dan instruktur merupakan praktisi bisnis dan teknologi digital tersertifikasi</li>
          </div>
        </div>
      </div>
      <div class="section-fasilitas bg-light rounded-1 p-4 mb-5">
        <div class="text-center mb-5">
          <h1>Fasilitas dan Sarana</h1>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-2 col-md-3 col-6 text-center"><p><i class="text-primary fas fa-mosque"></i></p><p><p>Musholla<p></p></div>
          <div class="col-lg-2 col-md-3 col-6 text-center"><p><i class="text-primary fas fa-eye"></i></p><p><p>LED Proyektor<p></p></div>
          <div class="col-lg-2 col-md-3 col-6 text-center"><p><i class="text-primary fas fa-desktop"></i></p><p><p>Komputer dan Internet<p></p></div>
          <div class="col-lg-2 col-md-3 col-6 text-center"><p><i class="text-primary fas fa-fan"></i></p><p><p>Ruangan yang nyaman dan ber-AC<p></p></div>
          <div class="col-lg-2 col-md-3 col-6 text-center"><p><i class="text-primary fas fa-book"></i></p><p><p>Materi e-book dan video pembelajaran<p></p></div>
        </div>
      </div>
  </div>
</section>

@endsection