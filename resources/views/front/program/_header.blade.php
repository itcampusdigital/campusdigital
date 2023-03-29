<section class="page-top-section bg-theme-2" data-setbg="{{ asset('templates/campusdigital/img/page-top-bg/2.jpg') }}" v-cloak>
	<div class="container text-center my-5">
		<h2 class="text-uppercase text-white text-wrap">@{{title}}</h2>
	</div>
</section>
<section v-cloak>
	<div class="custom-shape-divider-top-1616034455">
	    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
	        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
	    </svg>
	</div>
	<div class="container loans-section spad" style="padding-top: 150px; padding-bottom: 50px">
	  <div class="overview mb-lg-5" v-for="item in items1" :key="item.subtitle">
	  	<div class="heading">
	  		<h2 class="mb-lg-3">@{{ item.subtitle }}</h2>
	  	</div>
	  	<div class="content mb-lg-5">
			<p>@{{ item.content }}</p>
	  	</div>
	  </div>
	</div>
<div class="custom-shape-divider-bottom-1616034763">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
    </svg>
</div>
</section>
<section class="bg-theme-2 " v-cloak>
	<div class="loans-section spad package" style="padding-top: 220px; padding-bottom: 50px">
		<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-lg-4 mb-4 mb-lg-0" v-if="items2!=null" v-for="item in items2">
				<div class="card border-0 shadow">
					<div class="heading card-header text-center bg-transparent mx-4 px-0 py-4">
						<h2>@{{ item.subtitle }}</h2>
					</div>
					<div class="card-body">
					<ul class="list-group list-group-flush">
						<li class="list-group-item d-flex align-items-center" v-for="content in item.contents">
							<i class="fa fa-check position-absolute"></i>
							<span class="ml-4">@{{ content.ct }}</span>
						</li>
					</ul>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	<div class="custom-shape-divider-bottom-1615971570">
	    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
	        <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
	    </svg>
	</div>
</section>
<section class="container loans-section spad" style="padding-top: 150px; padding-bottom: 50px" v-cloak>
	<div class="price row">
		<div class="col-lg-6">
			<p class="h4">Semua manfaat di atas bisa Anda dapatkan setelah menjadi member Campus Digital. Anda cukup investasi sebesar :</p>
			<p class="h2 text-success font-weight-bold"><s>Rp 1234xx</s></p>
			<p class="h2 text-success font-weight-bold">Rp 123xx</p>
		</div>
		<div class="col-lg-6">
			<p class="h4">Jika Anda mendaftar hari ini, kami pastikan Anda mendapat DISKON menjadi:</p>
			<p class="h2 text-danger font-weight-bold">Rp 123xx</p>
			<div class="d-block d-md-flex justify-content-between">
				<a href="#" class="btn btn-lg btn-theme-1-1 rounded-3 mt-3 px-4 mb-3 mb-md-0">Daftar Sekarang</a>
				<a href="https://wa.me/62816343742" target="blank" class="btn btn-lg btn-success rounded-3 mt-3 px-4"><i class="fa fa-whatsapp"></i> WhatsApp Admin</a>
			</div>
		</div>
	</div>
</section>