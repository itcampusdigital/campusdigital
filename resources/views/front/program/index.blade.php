@extends('template.main')

@section('title', $kategori.' | ')

@section('content')

<div id="program">
<section class="page-top-section set-bg">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 order-2 order-lg-1 text-center text-lg-start">
        <h1>Program {{ $kategori }}</h1>
        <h4 class="fw-normal">Daftar program pelatihan <span class="text-lowercase">{{ $kategori }}</span><br>yang tersedia untuk Anda</h4>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 mb-3 mb-lg-0 text-center">
        <img class="h-auto mb-3 mb-lg-0 img-header" src="{{asset('assets/images/illustration/min/8778.png')}}" alt="banner">
      </div>
    </div>
  </div>
</section>

<section class="info-section spad pt-0">
  <div class="container">
    <div class="row">
      @foreach($program as $data)
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card border-0 shadow-sm mb-3">
          <img src="{{ image('assets/images/program/'.$data->program_gambar, 'program') }}" class="card-img-top w-100">
          <div class="card-body">
            <p class="fw-bold m-0 text-truncate d-block">{{ $data->program_title }}</p>
            <p class="text-truncate-3 d-none d-md-box">{{ substr(strip_tags(html_entity_decode($data->konten)),0,100).'...' }} </p>
            <a href="/program/{{ $data->program_permalink }}" class="btn btn-primary">Selengkapnya</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row mt-3 justify-content-center" id="pagination">
      {!! $program->links() !!}
    </div>
  </div>
</section>
</div>

@endsection

@section('js-extra')

@endsection

@section('css-extra')

<style type="text/css">
#program{min-height: calc(100vh - 22rem);}
.info-text {padding-top: 0;}
.info-text p {margin-bottom: 1rem!important;}
p{line-height: 1.5}
.pagination{justify-content: center; width: fit-content; margin-left: auto; margin-right: auto;}

.ql-align-left{text-align: left!important;}
.ql-align-right{text-align: right!important;}
.ql-align-center{text-align: center!important;}
.ql-align-justify{text-align: justify!important;}
.badge{font-size: 1rem; padding-top: .5rem; padding-bottom: .5rem;}
.badge.active{background-color: var(--primary)!important; color: var(--bs-white)!important;}

.card-title{margin-bottom: 0; line-height: 22px; height: 44px; display: -webkit-box !important; -webkit-line-clamp: 2; -moz-line-clamp: 2; -ms-line-clamp: 2; -o-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical; -ms-box-orient: vertical; -o-box-orient: vertical; box-orient: vertical; overflow: hidden; text-overflow: ellipsis;}
#outer{float: left; width: 100%; overflow: hidden; white-space: nowrap; display: inline-block; padding: .5em;}
.hide{display: none;}
#left-button, #right-button{display: flex;width: 30px;text-align: center;background-color: var(--bs-white);border-radius: 100%;width: 40px;height: 40px;justify-content: center;align-items: center;}
</style>

@endsection
