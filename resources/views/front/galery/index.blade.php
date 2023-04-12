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
		    @if(!Auth::guest() && Auth::user()->role == 1)
          <a type="button" href={{ route('site.galery.create') }} class="btn btn-dark">Tambah Gambar</a>
        @endif
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
          <img style="height:350px" src="{{ asset('assets/images/dokumentasi/'.$gambars->gambar) }}">
          @if (!Auth::guest() && Auth::user()->id_user == 1)
            <table>
              <td>
                <a href="{{ route('galery.edit',['id'=>$gambars->id]) }}" type="button" class="btn btn-info bok">Edit</a>
              </td>
              <td>
                <a href="{{ route('galery.delete',['id'=>$gambars->id]) }}" type="button" class="btn btn-danger bok">Delete</a>
              </td>
            </table>
          @endif
          
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