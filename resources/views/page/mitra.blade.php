@extends('template.main')

@section('title', 'Kemitraan SMK | ')

@section('content')

<section class="page-top-section bg">
  <div class="dark">
    <div class="container">
      <div class="row align-items-center">
        <div class="text-white col-lg-6 order-2 order-lg-1 text-center text-lg-start">
          <h1>Program Kemitraan SMK</h1>
          <h4 class="fw-normal">Mengambangkan tenaga didik sebagai calon tenaga kerja yang berkualitas</h4>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 mb-3 mb-lg-0 text-center">
          <img class="h-auto mb-3 mb-lg-0 img-header" src="{{asset('assets/images/illustration/min/6617.png')}}" alt="banner">
        </div>
      </div>
    </div>
  </div>

</section>

<section class="info-section spad">
  <div class="container">
    <div class="row">
        <div class="heading text-center">
            <h1>Tentang Kemitraan SMK</h1>
            <div class="mt-4 text-center">
                <p class="text-mitra">
                    Menurut Instruksi Presiden Nomor 9 Tahun 2016 tentang Revitalisasi Sekolah Menengah Kejuruan (SMK), 
                    Kementerian Pendidikan dan Kebudayaan (Kemendikbud) terus melakukan penguatan <i>link and match</i> dengan dunia usaha dan dunia industri. <br>
                    <b>PT. Campus Digital Indonesia</b> berkomitmen tinggi dan turut serta berpartisipasi dalam menyiapkan lulusan yang profesional dengan daya saing tinggi terutama pada Industri digital dan pemasaran. 
                    Dengan berbagai layanan dan support kami siap mengawal siswa untuk menghadapi era digital dan meraih kesuksesan. 
                </p>
            </div>     
        </div>
    </div>
  </div>
</section>
<section class="mb-5 mod">
  <div class="container">
    <div class="row">
        @foreach ($mitra_program as $mitra)
            {{-- modal form --}}
            <div id="myModal{{ $mitra->id_program }}" class="modalku position-fixed">
              <div class="container" style="width: 100%">
                <div class="row">
                  <!-- Modal content -->
                  <div class="modal-contentku rounded">
                    <div class="modal-headerku">   
                      <span onclick="closeX('{{ $mitra->id_program }}')" class="close">&times;</span>     
                    </div>
                    <div class="modal-bodyku">
                      <div class="card m-3">
                        <div class="card-body">
                          <h5 class="card-title">{{ $mitra->program_title }}</h5>
                          <p class="card-text">{{ $mitra->konten }}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  {{-- end modal content --}}
                </div>
              </div>
            </div>
            {{-- end modal form --}}

            <div class="col-12 col-sm-6 g-3">
                <div class="card rounded-1 shadow">
                    <img class="card-img-top" src="{{ asset('assets/images/mitra/1600316063.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $mitra->program_title }}</h5>
                        <p class="card-text">{{ substr($mitra->konten,0,90) }}....
                        <a onclick="showModal('{{ $mitra->id_program }}')" type="button" id="myBtn"><span style="color:blue"><u>Lihat Selengkapnya...</u></span></a> 
                      </p>
                        <br>
                        <a onclick="chatWA('{{ $mitra->program_title }}')" id="chat" class="chat btn btn-success">WhatsApp</a>
                    </div>
                </div>    
            </div>
          @endforeach
      </div>
  </div>
  
</section>

@endsection

@section('css-extra')

<style type="text/css">
  .bg{
  /* background-image: url('{{ asset('assets/images/background/bg-mitra.jpeg') }}'); */
  background-size: cover;
  height: 400px;
  
  background-image: linear-gradient(to bottom, rgb(52, 52, 53), rgba(44, 44, 44, 0.589)),
  url('{{ asset('assets/images/background/bg-mitra.jpeg') }}');
}

  .info-text {padding-top: 0;}
  .text-mitra{
    text-align: justify;text-justify: inter-word;font-size:18px;
  }

  body.modalku {
    overflow: visible;
  }

  .modalku {
    display: none; /* Hidden by default */
    position: relative; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /*Location of the box*/
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }

  /* Modal Content */
  .modal-contentku {
    position: relative ;
    background-color: #fefefe;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    left: 10%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s;
  }

  /* Add Animation */
  @-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
  }

  @keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
  }

  /* The Close Button */
  .close {
    color: #000;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: #272727;
    text-decoration: none;
    cursor: pointer;
  }

  .modal-headerku {
    padding: 2px 16px;
    color: white;
  }

  .modal-bodyku {padding: 2px 16px;}

  .modal-footerku {
    padding: 2px 16px;
    color: white;
  }
</style>

@endsection

@section('js-extra')
<script type="text/javascript">
  // Get the modal
  var modal = document.getElementById("myModal");
  
  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");

  function showModal(id){
    var modal = document.getElementById("myModal"+id);
    modal.style.display = 'block';
  }

  function closeX(id){
    var modal = document.getElementById("myModal"+id);
    modal.style.display = "none";
  }
  
  // When the user clicks anywhere outside of the modal, close it
  // window.onclick = function(event) {
  //   if (event.target == modal) {
  //     modal.style.display = "none";
  //   }
  // }

  function chatWA(judul){
    var isitext = 'Halo Campusdigital, Saya ingin bertanya tentang program Kemitraan SMK '+judul;
    window.open('https://api.whatsapp.com/send?phone={{ setting('site.whatsapp') }}&text='+isitext, '_blank')
  }

</script>

@endsection