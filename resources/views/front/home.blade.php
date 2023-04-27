@extends('template.main')

@section('content')
{{--  --}}
<div class="card">
<section class="hero-section">
  <div class="child_sec" style="background-image: url('{{ asset('assets/images/background/pattern.svg') }}'); background-size: contain;">
    
    <div class="container child_sec">
      <div class="row pare text-center">

        <div class="order-1 order-sm-1 order-lg-1 order-xl-0 col-6 col-sm-6 col-md-6 col-lg-6 col-xl-4 col-xxl-4 align-self-end">
          <img class="img12 img-fluid" src="{{ asset('assets/images/background/person-11.png') }}">
        </div>

        <div class="jud1 order-xl-1 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 col-xxl-4 align-self-center">
            <div class="text-lg-start">
              <h1 class="fontjudul" style="color:#340369;text-align: center">Let's Join Us!</h1>
              <h3 style="text-align: center" class="fontdigital mb-3">Digital Technology <br> & Business Class</h3>
            </div>
            <div class="text-lg-start">
              <p style="text-align: center" class="fonttext mb-3">Mari bergabung bersama kami untuk mendapatkan ilmunya!</p>
              <div class="text-center">

                <a href="{{ route('auth.register') }}" class="btn btn-primary rounded-15 px-5 shadow-sm fw-bold">Daftar</a>
              </div>
            </div>
        </div>
        
        <div class="order-2 order-sm-2 order-lg-2 order-xl-2 col-6 col-sm-6 col-md-6 col-lg-6 col-xl-4 col-xxl-4 align-self-end" >
          <img class="img12 img-fluid" src="{{ asset('assets/images/background/person-21.png') }}">
        </div>
        
      </div>
  </div>
</section>
</div>

<div class="card" style="border-radius: 20%">
<section class="www">
  <div class="container">
    <div>
      <div class="title mb-4 text-center">
        <h1>Program Kursus Reguler</h1>
      </div>
      {{-- <div class="owl-carousel owl-theme" id="programs1"> --}}
      <div class="row">
        @foreach($program_reguler as $data)
        <div class="col-6 col-lg-3">
          <div class="card border-0 shadow-sm mb-3">
            <img src="{{ image('assets/images/program/'.$data->program_gambar, 'program') }}" class="card-img-top w-100 owl-lazy">
            <div class="card-body">
              <p class="fw-bold text-truncate d-block">{{ $data->program_title }}</p>
              <p class="text-truncate-3 d-none d-md-box">{{ substr(strip_tags(html_entity_decode($data->konten)),0,100).'...' }} </p>
              <a href="/program/{{ $data->program_permalink }}" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="text-center">
        <a class="btn btn-primary" href="/program/kategori/reguler">Lihat Semua</a>
      </div>
      <div class="title mb-4 text-center mt-5">
        <h1>Program Kursus Corporate</h1>
      </div>
      {{-- <div class="owl-carousel owl-theme" id="programs2"> --}}
      <div class="row">
        @foreach($program_corporate as $data)
        <div class="col-6 col-lg-3">
          <div class="card border-0 shadow-sm mb-3">
            <img src="{{ image('assets/images/program/'.$data->program_gambar, 'program') }}" class="card-img-top w-100 owl-lazy">
            <div class="card-body">
              <p class="fw-bold text-truncate d-block">{{ $data->program_title }}</p>
              <p class="text-truncate-3 d-none d-md-box">{{ substr(strip_tags(html_entity_decode($data->konten)),0,100).'...' }} </p>
              <a href="/program/{{ $data->program_permalink }}" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="text-center">
        <a class="btn btn-primary" href="/program/kategori/corporate">Lihat Semua</a>
      </div>
      <div class="title mb-4 text-center mt-5">
        <h1>Program Profesi 1 Tahun</h1>
      </div>
      {{-- <div class="owl-carousel owl-theme" id="programs3"> --}}
      <div class="row justify-content-center">
        @foreach($program_profesi as $data)
        <div class="col-6 col-lg-3">
          <div class="card border-0 shadow-sm mb-3">
            <img src="{{ image('assets/images/program/'.$data->program_gambar, 'program') }}" class="card-img-top w-100 owl-lazy">
            <div class="card-body">
              <p class="fw-bold text-truncate d-block">{{ $data->program_title }}</p>
              <p class="text-truncate-3 d-none d-md-box">{{ substr(strip_tags(html_entity_decode($data->konten)),0,100).'...' }} </p>
              <a href="/program/{{ $data->program_permalink }}" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="text-center">
        <a class="btn btn-primary" href="/program/kategori/profesi">Lihat Semua</a>
      </div>
    </div>
  </div>
</section>
</div>
<section class="feature-section bg-light pt-5">
  <div class="container">
    <div class="text-center">
      <h1>Mentor Kami</h1>
      <p>Campus Digital memiliki mentor yang ahli di bidangnya</p>
    </div>
    <div class="feature-item" >
      <div class="owl-carousel owl-theme" id="mentor">
			  @foreach($mentor as $data)
				<div class="card border-0 shadow-sm text-center">
				  <img style="max-width: 120px; position: relative; top: -3rem" src="{{ asset('assets/images/mentor/'.$data->foto_mentor) }}" class="rounded-circle shadow" alt="Mentor Campusdigital">
          <div class="card-body" style="margin-top: -2rem">
  				  <div class="p fw-bold">{{ $data->nama_mentor }}</div>
  				  <p>{{ $data->profesi_mentor }}</p>
          </div>
				</div>
			  @endforeach
      </div>
    </div>
  </div>
</section>

<section class="info-section spad">
  <div class="container">
    <div class="heading text-center" style="margin-bottom: 6em">
      <h1 >Privat dan Kursus Internet Marketing</h1>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-12">
      <div class="accordion" id="accordionExample">

        <div class="row">
          <div class="col-lg-6">
            <div class="card border-0 shadow-sm mb-4">
              <div class="card-header rounded-15 border-0" style="background-color: var(--primary-s);" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-block text-start d-flex align-items-center justify-content-between btn-collapse collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Anda Pegawai, Karyawan, Pengusaha Atau Siapapun Yang Ingin Menambah Penghasilan?
                  <i class="fa fa-angle-up"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="card-body">
                  Kami ada solusinya!! Belajar Online Marketing bersama kami di Campus Digital, di program Kursus Digital Marketing. Jadikan Bisnis Online sebagai sumber penghasilan Anda!!
                </div>
              </div>
            </div>            
          </div>
          <div class="col-lg-6">
            <div class="card border-0 shadow-sm mb-4">
              <div class="card-header rounded-15 border-0" style="background-color: var(--green-s);" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-block text-start d-flex w-100 align-items-center justify-content-between btn-collapse collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Anda Ingin Belajar Bisnis Online<br>Tapi Tidak Cukup Waktu?
                  <i class="fa fa-angle-up"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="card-body">
                  Kami siapkan SOLUSInya!!! Kursus Digital Marketing yang kami adakan ini sudah kita siapkan untuk Anda yang sibuk. Pegawai, Karyawan, Mahasiswa, atau siapapun yang memiliki keterbatasan waktu. Kita desain sederhana tapi sangat efektif.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="card border-0 shadow-sm mb-4">
              <div class="card-header rounded-15 border-0" style="background-color: var(--red-s);" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-block text-start d-flex align-items-center justify-content-between btn-collapse collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Anda Ingin Usaha Sambilan, Tapi Tidak Punya Cukup Waktu? Atau Malah Tidak Cukup Modal?
                  <i class="fa fa-angle-up"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="card-body">
                  Campus Digital punya jawabannya!!! Bisnis Online. Bisa dikerjakan paruh waktu dan modal yang relatif terjangkau. Dan bisa dikerjakan siapapun dan di manapun.
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card border-0 shadow-sm mb-4">
              <div class="card-header rounded-15 border-0" style="background-color: var(--blue-s);" id="headingFour">
                <h2 class="mb-0">
                  <button class="btn btn-block text-start d-flex align-items-center justify-content-between btn-collapse collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Anda Bingung Kepada Siapa Belajar Online Marketing? Apakah Belajar Online Marketing Harus Mahal?
                  <i class="fa fa-angle-up"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="card-body">
                  Tidak usah BINGUNG!! Pengajar di Kursus Digital Marketing ini merupakan pengajar pilihan. Merupakan mentor dan supervisor terpilih dari Campus Digital. Pengajar kami bukan hanya mumpuni secara TEORI tapi juga bisnis onlinenya berjalan dan terbukti MENGHASILKAN.
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
  </div>
</section>

<div class="custom-shape-divider-bottom-1619236286">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,0V7.23C0,65.52,268.63,112.77,600,112.77S1200,65.52,1200,7.23V0Z" class="shape-fill"></path>
    </svg>
</div>
<section class="mitra-section bg-light">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="h-100 d-flex text-center" style="justify-content: center; align-items: center; width: 100%;">
          <span >
            <h2 class="mb-3">Mitra Kami</h2>
            <span>Campus Digital telah dipercaya sebagai lembaga pelatihan digital marketing<br>dengan melahirkan SDM yang memiliki kompetensi.</span>
          </span>
        </div>
      </div>
      <div class="col-12">
        <div class="feature-item">
          <div class="d-block d-md-none">
            <div class="owl-carousel owl-theme" id="mitra">
      			  @foreach($mitra as $data)
      				<div data-bs-toggle="tooltip" data-placement="bottom" title="{{ $data->nama_mitra }}">
        				<img src="{{ asset('assets/images/mitra/'.$data->logo_mitra) }}" alt="Mitra Campusdigital">
      				</div>
      			  @endforeach
            </div>
          </div>
          <div class="mitra-lg container py-5 d-none d-md-block">
            <div class="row text-center">
              @foreach($mitra as $data)
              <div class="col-2" data-bs-toggle="tooltip" data-placement="bottom" title="{{ $data->nama_mitra }}">
                <img src="{{ asset('assets/images/mitra/'.$data->logo_mitra) }}" alt="Mitra Campusdigital">
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container-fluid py-5">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-3">
          <h2 class="mb-3">Dokumentasi</h2>
          <span>Kumpulan dokumentasi setiap kegiatan Campus Digital</span>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="dokumentasi col-md-6">
        <img src="{{ asset('assets/images/dokumentasi/doc4.jpg') }}" class="img-fluid">
      </div>
      <div class="text-center col-lg-6 mt-3">
          <h2>Documentation for Each Activity</h2>
          <p>Dokumentasi dari Event Event Campus Digital</p>
        <a href="/galery"class="btn btn-lg btn-galery px-4"><i class="fas fa-eye" style="font-size: 20px;"></i> Lihat Selengkapnya</a>
      </div>
    </div>
  </div>
</div>

{{-- <section class="feature-section spad py-5 mt-5">
  <div class="container">
    <div class="text-center">
      <h2 >Dokumentasi</h2>
      <p>Kumpulan dokumentasi setiap kegiatan Campus Digital</p>

    </div>
    </div>
  </div>
</section> --}}

{{-- <section class="hero-section">
  <div class="container text-start h-50">
    <div class="row align-items-center h-50">
      <div class="col-lg-6">
        <div class="">
          <div class="text-center text-lg-start">
          	<h1>Let's Join Us!</h1>
		  	    <h2 class="mb-3"><span style="color: var(--primary);">Digital</span> Technology<br>& Business Class</h2>
          </div>
          <div class="text-center text-lg-start">
      			<p class="mb-3">Mari bergabung bersama kami untuk<br>mendapatkan ilmunya!</p>
      			<p><a href="{{ route('auth.register') }}" class="btn btn-primary rounded-15 px-5 shadow-sm fw-bold">Daftar</a></p>
          </div>
        </div>
    </div>
    <div class="col-lg-6 text-center">
        <img class="hero" src="{{ asset('assets/images/background/hero.png') }}" alt="">
    </div>
  </div>
</section> --}}

<section class="feature-section spad py-5 mt-5">
  <div class="container">
    <div class="text-center">
      <h2 >Testimoni</h2>
      <p >Apa yang mereka katakan tentang kami?</p>
      <div class="bg-feature position-relative" style="height: 300px">
        <span class="qts-left">❝</span>
        <span class="qts-right">❞</span>

    <div class="feature-item">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-theme" id="testimoni">

            <div class="card front-card-zoom">
              <div class="overflow-hidden">
                <a class="popup-youtube" href="https://www.youtube.com/watch?v=k-QpsCmXNX4">
                  <div style="height: 200px; background-position: center; background-size: cover; background-image: url({{asset('assets/images/background/testimoni1.gif')}})">
                    <div class="overlay-galery text-center"><i class="fab fa-youtube overlay-galery-content"></i></div>
                  </div>
                </a>
              </div>
            </div>

            <div class="card front-card-zoom">
              <div class="overflow-hidden">
                <a class="popup-youtube" href="https://www.youtube.com/watch?v=9or8bE9KxPc">
                  <div style="height: 200px; background-position: center; background-size: cover; background-image: url({{asset('assets/images/background/testimoni2.gif')}})">
                    <div class="overlay-galery text-center"><i class="fab fa-youtube overlay-galery-content"></i></div>
                  </div>
                </a>
              </div>
            </div>

            <div class="card front-card-zoom">
              <div class="overflow-hidden">
                <a class="popup-youtube" href="https://www.youtube.com/watch?v=AfGz0Z9HGfU">
                  <div style="height: 200px; background-position: center; background-size: cover; background-image: url({{asset('assets/images/background/banner-320.gif')}})">
                    <div class="overlay-galery text-center"><i class="fab fa-youtube overlay-galery-content"></i></div>
                  </div>
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

      </div>
    </div>
  </div>
</section>

<section class="cta-section set-bg bg-light">
  <div class="container d-block d-lg-flex align-items-center">
    <div class="me-0 me-lg-5 mb-3 mb-lg-0 text-center text-lg-start">
      <img src="{{asset('assets/images/illustration/5127311.png')}}" alt="img">
    </div>
    <div class="text-center text-lg-start">
      <h2  >Hubungi Kami</h2>
      <p >Customer Service Kami Siap Membantu Anda untuk Mendapatkan Informasi Lebih Lanjut Mengenai Program-Program Campus Digital</p>
      <a href="#" onClick="window.open('https://api.whatsapp.com/send?phone={{ setting('site.whatsapp') }}&text=Halo Campus Digital, saya butuh informasi tentang layanan Campus Digital...', '_blank')" class="btn btn-lg btn-success px-4"><i class="fab fa-whatsapp me-2" style="font-size: 20px;"></i> Hubungi Kami via WhatsApp</a>
    </div>
  </div>
</section>

@endsection

@section('js-extra')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('assets/js/home.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js" integrity="sha512-+m6t3R87+6LdtYiCzRhC5+E0l4VQ9qIT1H9+t1wmHkMJvvUQNI5MKKb7b08WL4Kgp9K0IBgHDSLCRJk05cFUYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('.popup-youtube').magnificPopup({
    type: 'iframe'
  });
});


</script>
@endsection

@section('css-extra')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css" integrity="sha512-nIm/JGUwrzblLex/meoxJSPdAKQOe2bLhnrZ81g5Jbh519z8GFJIWu87WAhBH+RAyGbM4+U3S2h+kL5JoV6/wA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style type="text/css">
  
  .img12{
    height: 100%;
    width: auto;
  }


	.hero {max-width: 700px; background-position: center; background-size: cover; animation: up-down 1.5s ease-in-out infinite alternate-reverse both;}
	@keyframes up-down {
	  0% {
		transform: translateY(10px);
	  }

	  100% {
		transform: translateY(-10px);
	  }
	}
	.btn-galery {color: var(--primary); background-color: var(--primary-s); border-color: var(--primary-s);}
	.btn-galery:hover {color: var(--bs-white); background-color: var(--primary); border-color: var(--primary);
}
  #programs1 .owl-nav, 
  #programs2 .owl-nav{position: absolute; top: 50%;}

	#popupModal .close {position: absolute; right: -15px; top: -15px; background-color: #340369; color: #fdd100; width: 25px; height: 25px; opacity: 1!important;}
	.hero-section {height:600px; padding-bottom: 0;}
	.hs-text {padding-top: 0; padding-right: 0;}
	.hs-text h2 {font-size: 70px; margin-bottom: 0;}
	.hs-text h3 {font-size: 55px; margin-bottom: 0;}
	.hs-text p {font-size: 20px; margin-bottom: 0; margin-start: 20px;}
  .child_sec{height: 600px;}
  .child{height:600px;}
  .pare{height: 600px;margin-top: 10px}
 


	@media only screen and (max-width: 767px) {


		.hero-section {padding-top: 5em;}
		.hs-text {padding-top: 0; margin-bottom: 0;}
		.hs-text h2 {font-size: 50px; margin-bottom: 0;}
		.hs-text h3 {font-size: 35px; margin-bottom: 0;}
		.hs-text p {margin-start: 0;}
		.hero {height: 350px; margin-top: -50px margin-bottom: -20px}
	
  
		.hero-section {padding-top: 5em;}
		.hs-text {padding-top: 0; margin-bottom: 0;}
		.hs-text h2 {font-size: 60px; margin-bottom: 0;}
		.hs-text h3 {font-size: 45px; margin-bottom: 0;}
		.hs-text p {margin-start: 0;}
		.hero {height: 450px; margin-top: -50px}
}

@media only screen and (min-width: 993px) and (max-width: 1199px) {

  .jud1{margin-top: 70px}
  .pare{height: 600px;margin-top: 10px}
  .img12{height: 280px;}

}

 @media only screen and (min-width: 768px) and (max-width: 991px) {
  .jud1{
    margin-bottom:0px;
    margin-top:80px;
  }  
  
  .fontjudul{
    font-size: 1em;
    }

  .fontdigital{
    font-size: 1em;
    }

  .fonttext{
    font-size: 1em;
    }

    .img12{
      height: 300px;
    }
}


@media only screen and (min-width:576px) and (max-width:767px){
  .child{height:520px;}

  .pare{height: 520px}

  .fontjudul{
    font-size: 1em;
    }

  .fontdigital{
    font-size: 1em;
    }

  .fonttext{
    font-size: 1em;
    }
}

@media only screen and (max-width:575px){
  .child_sec{height: 520px}
  .pare{height: 520px}
}

	
</style>

@endsection