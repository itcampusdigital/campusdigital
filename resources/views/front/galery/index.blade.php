@extends('template.main')

@section('title', 'Galery | ')

@section('content')

<section class="page-top-section set-bg">
  <div class="py-5" style="background-image: url('{{ asset('assets/images/background/b1bde199d76dd22fc49aa288b0d5ab10.svg') }}'); background-size: cover; background-repeat: no-repeat; filter: hue-rotate(45deg);">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 order-2 order-lg-1 text-center text-lg-start">
        <h1 class="text-white">Galery</h1>
        <br>
        <div class="jud">
          <h4 class="dok">Dokumentasi Pelatihan Campus Digital</h4>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 mb-1 mb-lg-0 text-center">
        <img class="h-auto mb-3 mb-lg-0 img-header" src="{{asset('assets/images/illustration/min/5758.png')}}" alt="banner">
      </div>
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
          <a class="popup-image" href="{{ image('assets/images/dokumentasi/'.$gambars->gambar,'gallery') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Klik untuk memperbesar">
            <img style="height:300px;width:300px" src="{{ image('assets/images/dokumentasi/'.$gambars->gambar,'gallery') }}">
          </a>
        </div>
      </div>
     
		@endforeach
    <div class="pagination justify-content-center">
      {{ $gambarr->links() }}
    </div>
  </div>
</section>

@endsection

@section('css-extra')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.1/simple-lightbox.css" integrity="sha512-RCGG1PJuk9/28eeYNu0bIcQVnrpqe3B9iKGbnQLlNCDdJ2pYW3ru0I2MUen+qFTIUywPnNJDhoTsCg8Sjqrehg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<style type="text/css">
  .info-text {padding-top: 0;}

  .bok {
  display: block;
  width: 100%;
  cursor: pointer;
  text-align: center;
}

.jud{
  background-color: whitesmoke;
  border-radius: 20px;
  padding-left: 10px;
  padding-bottom: 1px
}

.jud .dok{
  ; 
  filter: brightness(20%);
  color: var(--primary);
}
</style>

@endsection
@section('js-extra')

<script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.1/simple-lightbox.jquery.min.js" integrity="sha512-/KPL35RUhlitNiujTD78F6lyczxSeUrAsdPdEgkktIfmV28iY51t1oLOfAGB7fOnci6tntAwFdVpkAvlcXt89Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
  var lightbox = $(".popup-image").simpleLightbox({
   /* options */ 
  });
</script>

@endsection