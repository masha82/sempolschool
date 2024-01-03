<!DOCTYPE html>
<html lang="en" class="side-panel">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Website SMKN 1 Sempol</title>	

		<meta name="author" content="okler.net">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png') }}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.compat.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/twentytwenty/css/twentytwenty.css') }}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/theme-elements.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/theme-blog.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/theme-shop.css') }}">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/demos/demo-dentist.css') }}">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{ asset('assets/css/skins/skin-dentist.css') }}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

		@stack('css')
		<!-- Document Title
		============================================= -->
		@yield('title')
		{{-- <title>Website SMKN 1 Sempol Bondowoso</title> --}}

	</head>
	<body data-plugin-cursor-effect data-plugin-page-transition>
		<div class="side-panel-wrapper">
			<button class="hamburguer-btn side-panel-close side-panel-toggle active" data-set-active="false">
				<span class="close">
					<span></span>
					<span></span>
				</span>
			</button>
			{{-- <div class="pt-5">
				<a href="#">
					<img alt="#" width="123" height="32" src="{{ asset('assets/img/sempol/logo.png') }}">
				</a>
				<p class="py-4 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi velit turpis, tincidunt ut</p>
				<h4 class="text-color-primary text-4">Get In Touch</h4>
				<ul class="list list-icons font-weight-semibold text-color-default text-2-5">
					<li>
						<i class="icon-location-pin icons text-color-tertiary top-7"></i> Jl. Raya Kawah Ijen, Kab. Bondowoso
					</li>
					<li>
						<i class="icon-envelope icons text-color-tertiary top-7"></i> <a href="#" class="text-color-default text-color-hover-tertiary text-decoration-none">mail@domain.com</a>
					</li>
					<li>
						<i class="icon-clock icons text-color-tertiary top-7"></i> Mon - Sat 9:00am - 6:00pm / Sunday - CLOSED
					</li>
					<li>
						<i class="icon-phone icons text-color-tertiary top-7"></i> <a href="#" class="text-color-default text-color-hover-tertiary text-decoration-none">123-456-7890</a>
					</li>
				</ul>

				<a href="demo-dentist-contact.html#book" class="btn w-100  btn-secondary border-0 text-2-5 font-weight-semi-bold btn-px-4 btn-py-3 my-3">Book Appointment</a>

				<h4 class="text-color-primary text-4 pt-3">Follow Us</h4>
				<ul class="social-icons social-icons-clean social-icons-medium">
					<li class="social-icons-facebook">
						<a href="http://www.facebook.com/" target="_blank" title="Facebook">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li class="social-icons-twitter">
						<a href="http://www.twitter.com/" target="_blank" title="Twitter">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li class="social-icons-instagram">
						<a href="http://www.instagram.com/" target="_blank" title="Instagram">
							<i class="fab fa-instagram"></i>
						</a>
					</li>
					<li class="social-icons-linkedin">
						<a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
							<i class="fab fa-linkedin"></i>
						</a>
					</li>
				</ul>
			</div> --}}
		</div>
		<div class="body">
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 53, 'stickySetTop': '-53px'}">
				<div class="header-body border-top-0 h-auto box-shadow-none">
					<div class="header-top border-width-1">
						<div class="container-fluid px-lg-5 h-100">
							<div class="header-row h-100">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills">
												<li class="nav-item py-2 d-none d-sm-inline-flex pe-2">
													<span class="ps-0 font-weight-semibold text-color-default text-2">
													<i class="text-color-tertiary p-relative top-3 text-4-5"></i> SMKN 1 Sempol, Kab. Bondowoso</span>
												</li>
											</ul>
										</nav>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills p-relative bottom-2">
												<li class="nav-item py-2 d-none d-md-inline-flex">
													<a href="#" class="text-2 font-weight-semibold text-color-default text-color-hover-tertiary">
														<i class="icon-envelope icons text-color-tertiary p-relative top-3 text-4-5"></i> smkn1_sempol@yahoo.co.id</a>
												</li>
												<li class="nav-item py-2 d-none d-sm-inline-flex pe-2">
													<span class="ps-0 font-weight-semibold text-color-default text-2">
													<i class="icon-location-pin icons text-color-tertiary p-relative top-3 text-4-5"></i> Jl. Raya Kawah Ijen, Kab. Bondowoso</span>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container header-container-height-sm container-fluid px-lg-5 p-static">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="#">
											<img width="123" height="62" src="{{ asset('assets/img/sempol/logo.png') }}">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end justify-content-lg-center w-155">
								<div class="header-row">
									<div class="header-nav header-nav-line header-nav-bottom-line header-nav-bottom-line-effect-1 justify-content-lg-center ps-lg-5">
										<div class="header-nav-main header-nav-main-square header-nav-main-text-capitalize header-nav-main-text-size-4 header-nav-main-dropdown-no-borders header-nav-main-arrows header-nav-main-full-width-mega-menu header-nav-main-mega-menu-bg-hover header-nav-main-effect-2">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a href="{{ url('/') }}" class="nav-link dropdown-toggle">Beranda</a>
														<ul class="dropdown-menu">
															<li><a href="{{ url('berita') }}" class="dropdown-item">Berita</a></li>
															<li><a href="{{ url('gallery') }}" class="dropdown-item">Gallery</a></li>
															<li><a href="{{ url('media') }}" class="dropdown-item">Video</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a href="#" class="nav-link dropdown-toggle">Profil</a>
														<ul class="dropdown-menu">
															<li><a href="{{ url('tentangsekolah') }}" class="dropdown-item">Tentang Sekolah</a></li>
															<li><a href="{{ url('visidanmisi') }}" class="dropdown-item">Visi dan Misi</a></li>
															<li><a href="{{ url('kepala') }}" class="dropdown-item">Kepala Sekolah</a></li>
															<li><a href="{{ url('pejabat') }}" class="dropdown-item">Wakil Kepala Sekolah</a></li>
															<li><a href="{{ url('jurusan') }}" class="dropdown-item">Kompetensi Keahlian</a></li>
															<li><a href="{{ url('achievement') }}" class="dropdown-item">Prestasi Sekolah</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a href="#" class="nav-link dropdown-toggle">Data</a>
														<ul class="dropdown-menu">
															<li><a href="{{ url('gurusekolah') }}" class="dropdown-item">Guru</a></li>
															<li><a href="{{ url('tenagapendidik') }}" class="dropdown-item">Tenaga Pendidik</a></li>
															<li><a href="{{ url('siswasekolah') }}" class="dropdown-item">Siswa</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a href="#" class="nav-link dropdown-toggle">Info</a>
														<ul class="dropdown-menu">
															<li><a href="{{ url('infosekolah') }}" class="dropdown-item">Pengumuman</a></li>
															<li><a href="{{ url('agendasekolah') }}" class="dropdown-item">Agenda Kegiatan</a></li>
															<li><a href="{{ url('jadwalmapel') }}" class="dropdown-item">Jadwal Pelajaran</a></li>
															<li><a href="{{ url('jadwalexam') }}" class="dropdown-item">Jadwal Ujian</a></li>
															<li><a href="{{ url('ekskul') }}" class="dropdown-item">Ekstrakurikuler</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a href="demo-dentist-services.html" class="nav-link dropdown-toggle">OSIS</a>
														<ul class="dropdown-menu">
															<li><a href="{{ url('tentangosis') }}" class="dropdown-item">Tentang OSIS</a></li>
															<li><a href="{{ url('pengurus') }}" class="dropdown-item">Pengurus OSIS</a></li>
															<li><a href="{{ url('kegosis') }}" class="dropdown-item">Kegiatan OSIS</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a href="demo-dentist-services.html" class="nav-link dropdown-toggle">Literasi</a>
														<ul class="dropdown-menu">
															<li><a href="#" class="dropdown-item">Daftar Buku</a></li>
															<li><a href="#" class="dropdown-item">Video Pembelajaran</a></li>
														</ul>
													</li>
													<li>
														<a href="#" class="nav-link active">
															Login
														</a>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<!-- Content
    		============================================= -->
    		<section id="content">

       			 <div class="content-wrap p-0 mb-4">
           		 @yield('content')
        		</div>
    		</section>

			<footer id="footer" class="border-0 mt-0">
				<div class="container pt-5">
					<div class="row text-center text-lg-start font-weight-semi-bold text-color-light text-4 py-3">
					</div>
				</div>
				<div class="container pb-5">
					<div class="row text-center text-md-start py-4 my-5">
						<div class="col-md-6 col-lg-3 align-self-center text-center text-md-start text-lg-center mb-5 mb-lg-0">
							<a href="#" class="text-decoration-none">
								<img src="{{ asset('assets/img/sempol/logo.png') }}" class="img-fluid">
							</a>
						</div>
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-transform-none font-weight-bold text-color-light text-4-5 mb-4">Tentang Sekolah</h5>
							<ul class="list list-unstyled">
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5">Alamat</span> 
									<a href="demo-auto-services-contact.html#get-direction" class="text-color-light font-weight-medium text-3-5">Jl. Raya Kawah Ijen, Kabupaten Bondowoso</a>
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5 mb-1">Kontak Kami</span>
									<ul class="list list-unstyled font-weight-light text-3-5 mb-0">
										<li class="text-color-light line-height-3 mb-0">
											Telepon: <a href="#" class="text-decoration-none text-color-light text-color-hover-default">08xxxxx</a>
										</li>
									</ul>
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5">EMAIL</span>
									<a href="mailto:mail@example.com" class="text-decoration-none font-weight-light text-3-5 text-color-light text-color-hover-default">smkn1_sempol@yahoo.co.id</a>
								</li>
							</ul>
							<ul class="social-icons social-icons-medium">
								<li class="social-icons-instagram">
									<a href="http://www.instagram.com/" class="no-footer-css" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
								</li>
								<li class="social-icons-twitter mx-2">
									<a href="http://www.twitter.com/" class="no-footer-css" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
								</li>
								<li class="social-icons-facebook">
									<a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-3 offset-lg-1">
							<h5 class="text-transform-none font-weight-bold text-color-light text-4-5 mb-4">Jadwal Sekolah</h5>
							<ul class="list list-unstyled list-inline mb-0">
								<li>Senin - Kamis: 06.45 - 13:00 WIB</li>
								<li>Jumat: 06:30 - 11:00 WIB</li>
								<li>Sabtu-Minggu: Tutup</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<p class="text-center text-color-light opacity-5 text-3 mb-0">MyLind © 2023. All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>
<!-- Vendor -->
<script src="{{ asset('assets/vendor/plugins/js/plugins.min.js') }}"></script>
<script src="{{ asset('assets/vendor/twentytwenty/js/jquery.event.move.js') }}"></script>
<script src="{{ asset('assets/vendor/twentytwenty/js/jquery.twentytwenty.js') }}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('assets/js/theme.js') }}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{ asset('assets/js/views/view.contact.js') }}"></script>

<!-- Demo -->
<script src="{{ asset('assets/js/demos/demo-dentist.js') }}"></script>

<!-- Theme Custom -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

<!-- Theme Initialization Files -->
<script src="{{ asset('assets/js/theme.init.js') }}"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@stack('js')