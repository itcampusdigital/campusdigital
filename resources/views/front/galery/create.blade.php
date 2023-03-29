@extends('template.main')

@section('title', 'Form Gallery | ')

@section('content')

<section class="page-top-section set-bg">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 order-2 order-lg-1 text-center text-lg-start">
        <h1>Galery</h1>
        <h4 class="fw-normal">Dokumentasi Campus Digital</h4>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 mb-1 mb-lg-0 text-center">
        <img class="h-auto mb-3 mb-lg-0 img-header" src="{{asset('assets/images/illustration/min/5758.png')}}" alt="banner">
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container lg-3">
    <div class="row">

        <form enctype="multipart/form-data" method="POST" action="{{ route('galery.store') }}" >
            {{ csrf_field() }}

            <div class="form-group">
              <label for="judul_gambar">Judul Gambar</label>
              <input type="text" name="judul_gambar" class="form-control mb-4">
            </div>
            <div class="form-group">
              <label for="gambar">Gambar</label>
              <input name="gambar" type="file" class="form-control mb-4">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

 
      
    </div>
  </div>
</section>




@endsection

@section('css-extra')

<style type="text/css">
  .info-text {padding-top: 0;}
</style>

@endsection