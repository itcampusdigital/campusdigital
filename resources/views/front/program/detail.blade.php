@extends('template.main')

@section('title', $program->program_title.' - Program | ')

@section('content')

<section class="page-program">
  <div class="py-5 text-white page-top-section " style="background-image: url('{{ asset('assets/images/background/b1bde199d76dd22fc49aa288b0d5ab10.svg') }}'); background-size: cover; background-repeat: no-repeat; filter: hue-rotate(45deg);">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h1 class="mb-3">{{ ucwords($program->program_title) }}</h1>
          <p class="mb-5 badge bg-white text-body">{{ $program->kategori }}</p>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb py-2 px-3 rounded-2" style="background-color: background: rgb(255,255,255); background: linear-gradient(90deg, rgba(255,255,255,1) 10%, rgba(255,255,255,0) 80%);">
              <li class="breadcrumb-item"><a href="{{ route('site.home') }}">Beranda</a></li>
              <li class="breadcrumb-item"><a href="{{ route('site.program.index', ['category' => $program->slug]) }}">{{ $program->kategori }}</a></li>
              <li class="breadcrumb-item text-dark" aria-current="page">{{ ucwords($program->program_title) }}</li>
            </ol>
          </nav>
        </div>

      </div>
    </div>
  </div>
</section>
<section> 
    <div class="container mt-5">
      <div class="row m-sm-5 m-md-5 text-center">
        <div class="card title page-manfaat">
            <div class="mt-3">
              <h2>
                Pelatihan Cepat <br> <span style="color: red;font-size:calc(50% + 1vh + 1vw);">7 Hari Langsung Ujian</span>
              </h2>
            </div>
            <div class="card-body text-center mt-3">
              <h3>
                Sertifikasi <b>{{ ucwords($program->program_title) }}</b> BNSP
              </h3>
              <img style="max-width: 300px;max-height:200px" class="card-img" src="{{ asset('assets/images/bnsp/logo_bnsp.png') }}" alt="BNSP-LOGO">
              <p class="size-manfaat mb-5" >
                Progam Pembelajaran Online Via Zoom Meet atau Offline Tatap Muka Untuk Anda Yang Membutuhkan Sertifikat BNSP di Bidang {{ ucwords($program->program_title) }}
              </p>
            </div>

          </div>
          <div class="button-daftar mt-3 mb-3 mt-md-5 mb-md-5 mt-sm-4 mb-sm-2">
            <a href="#form-registration" type="button" class="btn btn-danger size-title rounded-4"><b>DAFTAR SEKARANG</b></a>
        </div>
        <hr>
      </div>
    </div> 
  <div class="card border-0">
    <div class="{{ $program->konten == null ? 'd-none' : '' }}" style="background-image: url('{{ asset('assets/images/background/s.svg') }}'); background-size: cover;background-repeat: no-repeat;">
      <div class="container">
        <div class="row">
        {{-- <div class="g"> --}}
          <div class="card-body" style="margin-left:35px">
            <h3 class="mb-5 mt-md-3 size-title" style="text-align: center">
              Mengapa Harus Menguasai <br> <span style="color: red">{{ ucwords($program->program_title) }} ?</span>
            </h3>
             
            <div class="col-lg-12">
              <div class="mb-5">
                <div class="ql-editor size-description">{!! $program->konten !!}</div>
              </div>
            </div>
          </div>
          {{-- </div> --}}
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="card border-0">
    <div style="background-image: url('{{ asset('assets/images/background/vvv.svg') }}');background-size: cover; background-repeat: no-repeat;">
      <div class="container">
        <div class="row ">
            <div class="card-body">
                <h3 class="mb-md-4 mt-md-3 size-title" style="text-align: center ">
                  Manfaat Pelatihan <span style="color: red">{{ ucwords($program->program_title) }}</span>
                </h3>
                
                <div class="col-lg-12 col-md-12">
                  <div class="ql-snow mb-4">
                    <div class="ql-editor size-description mx-md-5 mx-sm-3">{!! html_entity_decode($program->program_manfaat) !!}</div>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <section>
    @if($program->program_materi == null)
    <div class="container d-none">
    @else
    <div class="container">
    @endif
      <div class="row m-md-3 m-sm-3">
        <div class="card title">
              <h3 class="mb-4 mt-3" style="text-align: center">
                Materi Pelatihan <span style="color: red">{{ ucwords($program->program_title) }}</span>
              </h3>
              <div class="row p-lg-4 p-md-2 p-sm-1">
                @if ($count != null)
                  @for ($i=0;$i<$count;$i++)
                    <div class="col-lg-4 col-sm-6">
                      <div class="card border-0 shadow-sm mb-4 size-manfaat">
                        <div class="card-header rounded-15 border-0 page-manfaat" id="headingOne">
                          <h2 class="mb-0">
                            <button class="btn btn-block text-start d-flex align-items-center justify-content-between btn-collapse collapsed size-manfaat" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <b>
                                  {{ ucwords($program->program_materi[$i]) }}
                                </b>
                            <i class="fa fa-angle-up"></i>
                            </button>
                          </h2>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                          <div class="card-body">
                                <p>
                                  {{ ucwords($program->materi_desk[$i]) }}
                                </p>
                          </div>
                        </div>
                      </div>            
                    </div>
                  @endfor
                @endif
              </div>  
        </div>
      </div>
    </div>
  </section>
<section>
  @if($program->price != null)
  <div class="container mt-5">
    <div class="row m-sm-5 m-md-5 text-center">
      <div class="col-12">
          <h2>
            Berapa Biaya Investasi Pelatihan <br> <span style="color: red">{{ ucwords($program->program_title) }} ? </span>
          </h2>
      </div>
    </div>
    <div class="text-center mt-5 mb-5">
      <h3 style="color: green">
        <s>{{ $program->price[0] }}</s>
      </h3>
      <h1 class="mt-3 mb-4" style="color: red">
        {{ $program->price[1] }}
      </h1>
      <h3>
        Termasuk Biaya Sertifikasi <br>BNSP
      </h3>
    </div>
  </div>
  @else
    <div class="container mt-5 d-none"></div>
  @endif
</section>
{{-- <section class="mt-4 pt-4">
  <div class="container">
    <div class="row">
      <div class="card title">
        <div class="card-body">
            <h3 class="mb-4 mt-3" style="text-align: center">
              Apa itu Pelatihan <span style="color: red">{{ $program->program_title }}</span>
            </h3>
            <div class="ql-snow mb-4">
              <div class="ql-editor">{!! $program->konten !!}</div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}
<section class="bg-light py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4">
        <img src="{{ asset('assets/images/illustration/customer-service.svg') }}" alt="customer-support" class="img-fluid">
      </div>
      <div class="col-lg-8">
        <h5>Form Pendaftaran</h5>
        <hr>
        <form id="form-registration" method="post" action="{{ route('site.program.register', ['permalink' => $program->program_permalink]) }}">
          @csrf
          @if(Session::get('message'))
          <div class="alert alert-success">{{ Session::get('message') }}</div>
          @endif
          <input type="hidden" name="id_program" value="{{ $program->id_program }}">
          <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control {{ $errors->has('nama_lengkap') ? 'border-danger' : '' }}" value="{{ old('nama_lengkap') }}">
            @if($errors->has('nama_lengkap'))
            <div class="text-danger">{{ $errors->first('nama_lengkap') }}</div>
            @endif
          </div>
          <div class="mb-3">
            <label class="form-label">Instansi</label>
            <input type="text" name="nama_panggilan" class="form-control {{ $errors->has('nama_panggilan') ? 'border-danger' : '' }}" value="{{ old('nama_panggilan') }}">
            @if($errors->has('nama_panggilan'))
            <div class="text-danger">{{ $errors->first('nama_panggilan') }}</div>
            @endif
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control {{ $errors->has('email') ? 'border-danger' : '' }}" value="{{ old('email') }}">
            @if($errors->has('email'))
            <div class="text-danger">{{ $errors->first('email') }}</div>
            @endif
          </div>
          <div class="mb-3">
            <label class="form-label">No HP / WhatsApp</label>
            <input type="text" name="nomor_hp" class="form-control {{ $errors->has('nomor_hp') ? 'border-danger' : '' }}" value="{{ old('nomor_hp') }}">
            @if($errors->has('nomor_hp'))
            <div class="text-danger">{{ $errors->first('nomor_hp') }}</div>
            @endif
          </div>
          <button id="register-button" type="submit" class="btn btn-primary register">Daftar</button>
        </form>

        <a id="send-wa" target="_blank" href="https://wa.me/"></a>

      </div>
    </div>
  </div>
</section>

@endsection

@section('css-extra')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.1/simple-lightbox.css" integrity="sha512-RCGG1PJuk9/28eeYNu0bIcQVnrpqe3B9iKGbnQLlNCDdJ2pYW3ru0I2MUen+qFTIUywPnNJDhoTsCg8Sjqrehg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<style type="text/css">
  /* Quill */
  #program{min-height: calc(100vh - 20rem);}
  .ql-editor {padding: 0; text-align: justify;}
  .ql-editor h2 {margin-bottom: 1rem!important; font-weight: 600!important;}
  .ql-editor h3 {margin-bottom: 1rem!important; font-weight: 600!important;}
  .ql-editor ol {padding-left: 15px!important;}
  .ql-editor ol {margin-bottom: 1rem!important;}
  .ql-editor li {margin-bottom: 1rem!important;line-height: 1.5!important}
  .ql-editor p {margin-bottom: 1rem!important;}
  .card-img-top{border-radius: 0;}



  .size-title{
    font-size: calc(30% + 1vw + 1vh );
  }
  .size-description{
    font-size: calc(0.8vw + 1vh);
  }
  .size-manfaat{
    font-size:calc(5% + 0.5vw + 1vh);
  }
  .title{
    box-shadow: 0px 10px 20px 0px rgba(0,0,0,0.3);
    -webkit-box-shadow: 0px 10px 20px 0px rgba(0,0,0,0.3);
    -moz-box-shadow: 0px 10px 20px 0px rgba(0,0,0,0.3);
  }
  .page-manfaat{background-color: rgba(239, 228, 250, 0.952);}
  .space {vertical-align:middle;margin-top: 20px;}
</style>

@endsection

@section('js-extra')

@if(count($errors) > 0 || Session::get('message'))
<script>
  $("html, body").animate({ scrollTop: $("html, body").prop("scrollHeight")});
</script>
@endif

<script>
  $(".register-link").click(function() {
    $("html, body").animate({
        scrollTop: $(
          "html, body").get(0).scrollHeight
    });
  });

  $(window).scroll(function (event) {
    var scrollTop = $(window).scrollTop();
    if (scrollTop > 10) {
      $(".stick").removeClass("position-relative");
      $(".stick").addClass("sticky-top" + " " + "top");
    } else {
      $(".stick").addClass("position-relative");
      $(".stick").removeClass("sticky-top" + " " + "top");
    }
  });

</script>

<script>

  $(document).on('click', '#register-button', function(e){ 
    let nama_lengkap = $("[name=nama_lengkap]").val();
    let instansi = $("[name=nama_panggilan]").val();
    let email = $("[name=email]").val();
    let nomor_hp = $("[name=nomor_hp]").val();
    if (nama_lengkap != '' && instansi != '' && email != '' && nomor_hp != '') {
      var url = 'https://wa.me/{{ setting('site.whatsapp') }}?text=Halo,%20Saya%20mau%20mendaftar%20program%20*{{ $program->kategori }}%20{{ $program->program_title }}*%0a%0aNama%20Lengkap:%20' + nama_lengkap + '%0aInstansi:%20' + instansi + '%0aEmail:%20' + email + '%0aNomor%20HP:%20' + nomor_hp; 
      window.open(url, '_blank');
    }
  });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.1/simple-lightbox.jquery.min.js" integrity="sha512-/KPL35RUhlitNiujTD78F6lyczxSeUrAsdPdEgkktIfmV28iY51t1oLOfAGB7fOnci6tntAwFdVpkAvlcXt89Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
  var lightbox = $(".popup-image").simpleLightbox({
   /* options */ 
  });
</script>

@endsection
