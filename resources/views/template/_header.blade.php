<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
	<div class="container">
		
		<button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fa fa-bars py-2 px-1"></i>
		</button>
		<a class="navbar-brand mx-auto me-lg-3" href="{{ route('site.home') }}">
			<img src="{{ asset('assets/images/logo/'.setting('site.logo')) }}" alt="logo-campusdigital">
		</a>
		<button class="navbar-toggler" type="button" style="opacity: 0;">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="navbar-nav me-auto mt-2 mt-lg-0">
				<li class="nav-item {{ Request::path() == '/' ? 'active' : '' }}">
					<a class="nav-link" href="{{ route('site.home') }}">Beranda</a>
				</li>
				<li class="nav-item dropdown {{ strpos(Request::url(), '/sejarah') || strpos(Request::url(), '/visi-misi') || strpos(Request::url(), '/budaya-kerja') ||strpos(Request::url(), '/fasilitas-keunggulan') ||strpos(Request::url(), '/kontak-kami') ? 'active' : '' }}">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  Tentang Kami
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item {{ strpos(Request::url(), '/sejarah') ? 'active' : '' }}" href="/sejarah">Sejarah</a>
						<a class="dropdown-item text-wrap {{ strpos(Request::url(), '/visi-misi') ? 'active' : '' }}" href="/visi-misi">Visi & Misi</a>
						<a class="dropdown-item text-wrap {{ strpos(Request::url(), '/budaya-kerja') ? 'active' : '' }}" href="/budaya-kerja">Budaya Kerja</a>
						<a class="dropdown-item text-wrap {{ strpos(Request::url(), '/fasilitas-keunggulan') ? 'active' : '' }}" href="/fasilitas-keunggulan">Fasilitas & Keunggulan</a>
						{{-- <a class="dropdown-item text-wrap {{ strpos(Request::url(), '/employ') ? 'active' : '' }}" href="/profil-pegawai">Profil Pegawai</a> --}}
						{{-- <a class="dropdown-item text-wrap {{ strpos(Request::url(), '/kontak-kami') ? 'active' : '' }}" href="/kontak-kami">Kontak Kami</a> --}}
					</div>
				</li>
				<li class="nav-item {{ is_int(strpos(Request::url(), route('site.cabang.index'))) ? 'active' : '' }}">
					<a class="nav-link" href="{{ route('site.cabang.index') }}">Cabang</a>
				</li>
				
				<li class="nav-item {{ is_int(strpos(Request::url(), route('site.galery.index'))) ? 'active' : '' }}">
					<a class="nav-link" href="{{ route('site.galery.index') }}">Galery</a>
				</li>
				
				<li class="nav-item dropdown {{ strpos(Request::url(), '/program/kategori/reguler') || strpos(Request::url(), '/program/kategori/corporate') || strpos(Request::url(), '/program/kategori/profesi') ||strpos(Request::url(), '/program/kategori/sertifikasi') ? 'active' : '' }}">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  Program
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item {{ strpos(Request::url(), '/program/kategori/reguler') ? 'active' : '' }}" href="/program/kategori/reguler">Reguler</a>
						<a class="dropdown-item text-wrap {{ strpos(Request::url(), '/program/kategori/corporate') ? 'active' : '' }}" href="/program/kategori/corporate">Corporate</a>
						<a class="dropdown-item text-wrap {{ strpos(Request::url(), '/program/kategori/profesi') ? 'active' : '' }}" href="/program/kategori/profesi">Profesi</a>
						<a class="dropdown-item text-wrap {{ strpos(Request::url(), '/program/kategori/sertifikasi') ? 'active' : '' }}" href="/program/kategori/sertifikasi">Sertifikasi</a>
						<a class="dropdown-item text-wrap {{ strpos(Request::url(), '/mitra') ? 'active' : '' }}" href="/mitra">Magang/Intern Program</a>
					</div>
				</li>
				<li class="nav-item {{ is_int(strpos(Request::url(), route('site.halaman.detail', ['permalink' => 'afiliasi']))) ? 'active' : '' }}">
					<a class="nav-link" href="{{ route('site.halaman.detail', ['permalink' => 'afiliasi']) }}">Afiliasi</a>
				</li>
				<li class="nav-item {{ is_int(strpos(Request::url(), route('site.artikel.index'))) ? 'active' : '' }}">
					<a class="nav-link" href="/artikel{{ Session::get('ref') != null ? '?ref='.Session::get('ref') : '' }}">Artikel</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  Hubungi Kami
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="/investasi-pendidikan">Investasi Pendidikan</a>
						<a class="dropdown-item" href="/informasi-pendaftaran">Informasi Pendaftaran</a>
					</div>
				</li>
			</ul>
			<ul class="navbar-nav mt-2 mt-lg-0">
		        @if(Auth::guest())
				<li class="nav-item">
		          <a class="nav-link fw-bold mb-3 mb-lg-0" href="{{ route('auth.login') }}" style="color: var(--primary);">Masuk</a>
		        </li>
				<li class="nav-item">
		          <a class="btn btn-primary fw-bold rounded-15 btn-block mb-3 mb-lg-0 px-4" href="{{ route('auth.register', ['ref' => $_GET['ref']]) }}">Daftar</a>
		        </li>
				@else
				<li class="nav-item dropdown">
					<a class="nav-link account dropdown-toggle d-flex align-items-center p-0 pb-2 pb-lg-0" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					  <img src="{{ Auth::user()->foto != '' ? asset('assets/images/user/'.Auth::user()->foto) : asset('assets/images/default/user.jpg') }}" alt="user" class="rounded-circle pt-lg-1 me-2" width="31">
					  <span class="d-lg-none">{{ Auth::user()->nama_user }}</span>
					</a>
					<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarScrollingDropdown">
					  <li><a class="dropdown-item" href="{{ Auth::user()->is_admin == 1 ? route('admin.dashboard') : route('member.dashboard') }}">Dashboard</a></li>
					  <li><a class="dropdown-item" href="{{ Auth::user()->is_admin == 1 ? route('admin.profile') : route('member.profile') }}">Profil</a></li>
					  @if(Auth::user()->is_admin == 0)
					  <li><a class="dropdown-item" href="{{ route('member.afiliasi.carajualan') }}">Afiliasi</a></li>
					  @endif
					  <li><hr class="dropdown-divider"></li>
					  <li><a class="dropdown-item" href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Keluar</a></li>
						<form id="form-logout" method="post" action="{{ Auth::user()->is_admin == 1 ? route('admin.logout') : route('member.logout') }}">
					        {{ csrf_field() }}
					    </form>
					</ul>
				</li>
				@endif
			</ul>
			<button class="btn btn-theme-1 rounded-2 ms-2 d-none">
				<a class="content-btn-nav" href="{{ route('auth.login') }}">Masuk</a>
				<span class="content-btn-nav" >|</span>
				<a class="content-btn-nav" href="{{ route('auth.register', ['ref' => $_GET['ref']]) }}">Daftar</a>
			</button>
		</div>
	</div>
</nav>
