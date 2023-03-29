@extends('template.main')

@section('title', $program->program_title.' - Program | ')

@section('content')

<section class="page-top-section page-program">
  <div class="py-5 text-white" style="background-image: url('{{ asset('assets/images/background/b1bde199d76dd22fc49aa288b0d5ab10.svg') }}'); background-size: cover; background-repeat: no-repeat; filter: hue-rotate(45deg);">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h1 class="mb-3">{{ $program->program_title }}</h1>
          <p class="mb-5 badge bg-white text-body">{{ $program->kategori }}</p>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb py-2 px-3 rounded-2" style="background-color: background: rgb(255,255,255); background: linear-gradient(90deg, rgba(255,255,255,1) 10%, rgba(255,255,255,0) 80%);">
              <li class="breadcrumb-item"><a href="{{ route('site.home') }}">Beranda</a></li>
              <li class="breadcrumb-item"><a href="{{ route('site.program.index', ['category' => $program->slug]) }}">{{ $program->kategori }}</a></li>
              <li class="breadcrumb-item text-dark" aria-current="page">{{ $program->program_title }}</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 order-2 order-lg-1">
        <div class="ql-snow">
          <div class="ql-editor">{!! html_entity_decode($program->konten) !!}</div>
        </div>
      </div>
      <div class="col-lg-4 order-1 order-lg-2 stick position-relative px-0 px-md-3 h-100">
        <div class="sticky-sidebar">
          <div class="card rounded-1 border-0 shadow mb-3 mb-lg-0">
            <a class="popup-image" href="{{ image('assets/images/program/'.$program->program_gambar, 'program') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Klik untuk memperbesar">
              <img class="card-img-top" src="{{ image('assets/images/program/'.$program->program_gambar, 'program') }}" title="{{ $program->program_title }}">
            </a>
            <div class="card-body py-4">
              <button class="btn btn-primary w-100 register-link">Daftar Sekarang</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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
  .ql-editor p {margin-bottom: 1rem!important;}
  .card-img-top{border-radius: 0;}
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
