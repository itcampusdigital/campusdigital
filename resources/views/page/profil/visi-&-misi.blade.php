@extends('template.main')

@section('title', 'Visi & Misi | ')

@section('content')

<section class="page-top-section page-profile pb-0">
  <div class="container">
    <div class="section_header">
      <div class="row align-items-center mb-5">
        <div class="col-lg-6 order-2 order-lg-1 text-center text-lg-start">
          <h1>Visi & Misi</h1>
          <h4 class="fw-normal">Visi & Misi Campus Digital</h4>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 mb-3 mb-lg-0 text-center">
          <img class="h-auto mb-3 mb-lg-0 img-header" src="{{ asset('assets/images/illustration/5237.png') }}" alt="">
        </div>
      </div>
    </div>
    <div class="section_visi mb-5">
      <div class="row justify-content-center">
        <div class="col-lg-4 d-lg-flex align-items-stretch mb-4 mb-lg-0">
          <div class="card text-center rounded-1 border-0 shadow-sm">
            <div class="p-4 rounded-1" style="background-color: #fff6f7;"><img class="logo-visi" src="{{ asset('assets/images/icon/dart.png') }}" alt="icon"></div>
            <div class="card-body">
              <h1>Visi</h1>
              <p>Menjadi perusahaan yang unggul dan terpercaya dalam pelayanan jasa Pendidikan dan Pelatihan di bidang Teknologi Digital dan Bisnis</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-lg-flex align-items-stretch mb-4 mb-lg-0">
          <div class="card text-center rounded-1 border-0 shadow-sm">
            <div class="p-4 rounded-1" style="background-color: #d6f3e6"><img class="logo-visi" src="{{ asset('assets/images/icon/guidance.png') }}" alt="icon"></div>
            <div class="card-body">
              <h1>Misi</h1>
              <ul class="text-start">
                <li>Menyediakan layanan program Pendidikan dan pelatihan yang berkualitas</li>
                <li>Membangun karakter sumber daya manusia yang kompeten dan profesional</li>
                <li>Membangun tim yang solid, unggul, dan amanah</li>
                <li>Menyajikan solusi bagi semua mitra bisnis untuk meraih cita-cita mulianya</li>
                <li>Menjadi model pengelolaan bisnis yang menguntungkan dan mensejahterakan</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection