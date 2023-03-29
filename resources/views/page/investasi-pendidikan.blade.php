@extends('template.main')

@section('title', 'Investasi Pendidikan | ')

@section('content')

<section class="page-top-section page-profile" id="price-list">
  <div class="container">
    <div class="header-one">
      <div class="section_header">
        <div class="row align-items-center mb-5">
          <div class="col-lg-6 order-2 order-lg-1 text-center text-lg-start">
            <h1>Investasi Pendidikan</h1>
            <h4 class="fw-normal">Investasi Pendidikan Di Campus Digital</h4>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 mb-3 mb-lg-0 text-center">
            <img class="h-auto mb-3 mb-lg-0 img-header" src="{{ asset('assets/images/illustration/min/7747.png') }}" alt="">
          </div>
        </div>
      </div>
      <div v-cloak class="bg-light p-4 rounded-1">
        <div class="section-invest">
          <p  class="fw-bold mb-4">Di bawah ini adalah rincian biaya pendidikan yang harus dibayarkan agar dapat bergabung dengan Lembaga Pendidikan Profesi Campus Digital diantaranya sebagai berikut :</p>
          <table class="table table-striped" id="reguler" v-for="program in programs" :key="program.idProgram">
            <thead>
              <tr>
                <th class="bg-primary-s text-primary" style="border-radius: .5rem 0 0 0;" scope="col">No.</th>
                <th class="bg-primary-s text-primary">@{{ program.titleName }}</th>
                <th class="bg-primary-s text-primary" style="border-radius: 0 .5rem 0 0;">@{{ program.titlePrice }}</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="content in program.contents" :key="program.idContent">
                <th v-if="content.idContent < 100" scope="row">@{{ content.idContent }}</th>
                <td v-if="content.idContent > 100" class="fw-bold bg-primary-s text-primary" colspan="3">@{{ content.contentName }}</td>
                <td v-if="content.idContent < 100" >@{{ content.contentName }}</td>
                <td v-if="content.idContent < 100" width="500">Rp. @{{ content.contentPrice }}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <div class="heading my-5">
              <p class="fw-bold">Untuk rincian lebih lanjutnya tentang biaya pendidikan yang harus dibayarkan, dapat langsung menghubungi kami melalui support center berikut:</p>
            </div>
            <div class="row align-items-center">
              <div class="col-lg-6 mb-4 text-center">
                <div class="card py-2 px-3">
                  <div class="card-body">
                    <div class="row align-items-center text-center text-md-start">
                      <div class="col-md-6">
                        <a href="/"><img class="mb-3" src="{{ asset('assets/images/logo/logo-dark.png')}}" width="200" alt="logo-campusdigital"></a>
                      </div>
                      <div class="col-md-6">
                        <ul class="list-unstyled">
                          <li class="mb-2 d-flex align-items-center"><i class="fas fa-envelope me-2" style="font-size: 20px; color: #33B6E7"></i><a class="text-body" href="mailto:{{ setting('site.email') }}">{{ setting('site.email') }}</a></li>
                          <li class="mb-2 d-flex align-items-center"><i class="fab fa-whatsapp me-2" style="font-size: 22px; color: #1AD03F"></i><a class="text-body" href="https://wa.me/{{ setting('site.whatsapp') }}" target="_blank">{{ setting('site.whatsapp') }}</a></li>
                          <li></li>
                          <li class="mb-2 d-flex align-items-center"><i class="fab fa-instagram me-2" style="font-size: 22px; color: #912EB9;"></i><a class="text-body" href="https://instagram.com/campusdigital.id" target="_blank">campusdigital.id</a></li>
                          <li></li>
                          <li class="mb-2 d-flex align-items-center"><i class="fab fa-facebook me-2" style="font-size: 22px; color: #1773EA;"></i><a class="text-body" href="https://www.facebook.com/campusdigital.id/?ref=py_c" target="_blank">campusdigital</a></li>
                          <li></li>
                          <li class="mb-2 d-flex align-items-center"><i class="fab fa-youtube me-2" style="font-size: 22px; color: #F70000;"></i><a class="text-body" href="https://www.youtube.com/channel/UCz6opXZW_HqPU6RQlfxOS9w" target="_blank">Campus Digital</a></li>
                          <li></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4 maps">
                {!! html_entity_decode(setting('site.google_maps')) !!}
              </div>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </div>
</section>

@endsection

@section('js-extra')
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script type="text/javascript" src="{{asset('assets/js/investasi-pendidikan.js')}}"></script>
@endsection