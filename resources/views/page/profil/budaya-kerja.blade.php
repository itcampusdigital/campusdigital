@extends('template.main')

@section('title', 'Budaya Kerja | ')

@section('content')

<section class="page-top-section page-profile pb-0">
  <div class="container">
      <div class="section_header">
        <div class="row align-items-center mb-5">
          <div class="col-lg-6 order-2 order-lg-1 text-center text-lg-start">
            <h1>Budaya Kerja</h1>
            <h4 class="fw-normal">Budaya Kerja Campus Digital</h4>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 mb-3 mb-lg-0 text-center">
            <img class="h-auto mb-3 mb-lg-0 img-header" src="{{ asset('assets/images/illustration/5237.png') }}" alt="">
          </div>
        </div>
      </div>
      <div class="section_budaya mb-5">
        <div class="row justify-content-center mt-4">
          <div class="col-md-6 col-lg-4 mb-3 d-flex align-items-stretch">
            <div class="service-item d-block d-lg-flex text-center text-lg-start align-items-start p-3">
              <img class="bg-light p-1 mb-2 me-3" src="{{ asset('assets/images/icon/star-rating.png') }}" width="80">
              <div class="text-start">
                <h5>Commitment (Memegang Teguh Komitmen)</h5>
                <p>Memegang teguh komitmen yang telah kami buat., amanah, bertanggung jawab dan saling percaya satu sama lain.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3 d-flex align-items-stretch">
            <div class="service-item d-block d-lg-flex text-center text-lg-start align-items-start p-3">
              <img class="bg-light p-1 mb-2 me-3" src="{{ asset('assets/images/icon/bar-chart.png') }}" width="80">
              <div class="text-start">
                <h5>Add Value (Menambah Nilai)</h5>
                <p>Selalu memberikan nilai tambah bagi pelanggan, bagi mitra bisnis, bagi lingkungan  sekitar dan masyarakat dunia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3 d-flex align-items-stretch">
            <div class="service-item d-block d-lg-flex text-center text-lg-start align-items-start p-3">
              <img class="bg-light p-1 mb-2 me-3" src="{{ asset('assets/images/icon/customer.png') }}" width="80">
              <div class="text-start">
                <h5>Mutual Respect (Saling Menghormati dan Menghargai)</h5>
                <p>Selalu saling menghargai hasil usaha kontribusi pihak lain. Keterbukaan dan kejelasan informasi dan komunikasi sangat penting, selalu saling membuka diri untuk perbaikan kualitas kinerja kami.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3 d-flex align-items-stretch">
            <div class="service-item d-block d-lg-flex text-center text-lg-start align-items-start p-3">
              <img class="bg-light p-1 mb-2 me-3" src="{{ asset('assets/images/icon/best-employee.png') }}" width="80">
              <div class="text-start">
                <h5>Professional (Menjaga Sikap Profesionalisme)</h5>
                <p>Memanfaatkan keahlian untuk pencapaian target-target perusahaan secara efektif, efisien dan optimal, selalu berfikir, bersikap dan bertindak hati-hati.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3 d-flex align-items-stretch">
            <div class="service-item d-block d-lg-flex text-center text-lg-start align-items-start p-3">
              <img class="bg-light p-1 mb-2 me-3" src="{{ asset('assets/images/icon/success.png') }}" width="80">
              <div class="text-start">
                <h5>Ultimate (Unggul)</h5>
                <p>Sadar bahwa untuk menjadi yang terbaik dan memberikan yang terbaik, memutuskan untuk melakukan sesuatu melebihi standard dan rata-rata orang lain.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3 d-flex align-items-stretch">
            <div class="service-item d-block d-lg-flex text-center text-lg-start align-items-start p-3">
              <img class="bg-light p-1 mb-2 me-3" src="{{ asset('assets/images/icon/rating.png') }}" width="80">
              <div class="text-start">
                <h5>Service Excellent ( Pelayanan yang Bermutu)</h5>
                <p>Memberikan pelayanan yang bermutu, bekerja dan melayani dengan baik saja tidak cukup, harus bekerja dengan predikat yang luar biasa.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>

@endsection