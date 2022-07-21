<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('front/assets/images/pemda.ico')}}">
	<!-- Title -->
	<title>@yield('title')</title>


	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ url ('limitless/Template/global_assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ url ('limitless/Template/layout_1/LTR/default/full/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ url ('limitless/Template/layout_1/LTR/default/full/assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ url ('limitless/Template/layout_1/LTR/default/full/assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ url ('limitless/Template/layout_1/LTR/default/full/assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ url ('limitless/Template/layout_1/LTR/default/full/assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_red.css">
	<!-- /global stylesheets -->
	@stack('css')
	<!-- Core JS files -->
	<script src="{{ url ('limitless/Template/global_assets/js/main/jquery.min.js ')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/editors/ckeditor/ckeditor.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/forms/inputs/inputmask.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/extensions/jquery_ui/core.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/forms/tags/tagsinput.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/forms/tags/tokenfield.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/forms/inputs/touchspin.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/forms/inputs/maxlength.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/forms/inputs/formatter.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/tables/datatables/extensions/jszip/jszip.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/tables/datatables/extensions/buttons.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/demo_pages/form_inputs.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/uploaders/fileinput/fileinput.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/demo_pages/uploader_bootstrap.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/notifications/noty.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/editors/summernote/summernote.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/demo_pages/editor_summernote.js')}}"></script>
	<script src="{{ url ('limitless/Template/layout_1/LTR/default/full/assets/js/app.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/demo_pages/dashboard.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/demo_pages/editor_ckeditor.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/demo_pages/form_floating_labels.js ')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/demo_pages/datatables_extension_buttons_html5.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/demo_pages/form_select2.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/demo_pages/extra_jgrowl_noty.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/notifications/sweet_alert.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/demo_pages/extra_sweetalert.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/demo_pages/widgets_stats.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/demo_pages/form_multiselect.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/demo_pages/form_actions.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/pickers/anytime.min.js' )}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/pickers/pickadate/picker.js' )}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/pickers/pickadate/picker.date.js' )}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/pickers/pickadate/picker.time.js' )}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/pickers/pickadate/legacy.js' )}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/demo_pages/picker_date.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/notifications/jgrowl.min.js' )}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/demo_pages/components_modals.js') }}"></script>
	<!-- /theme JS files -->

	<!-- Theme JS files Datatable-->
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/demo_pages/datatables_basic.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/demo_pages/table_elements.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/extensions/contextmenu.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/visualization/echarts/echarts.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/plugins/forms/styling/switch.min.js')}}"></script>
	<script src="{{ url ('limitless/Template/global_assets/js/demo_pages/form_checkboxes_radios.js')}}"></script>
	<script src="{{ url ('js/webcam.min.js')}}"></script>
	{{-- <script src="{{ url ('limitless/Template/global_assets/js/demo_pages/charts/echarts/pies_donuts.js')}}"></script> --}}

	{{-- <script src="{{ url ('limitless/Documentation/assets/ckeditor/ckeditor.js')}}"></script> --}}

	<!-- /theme JS files Datatable-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.all.js"
		integrity="sha512-ZYvPGKyKaVHwZFJldzOuYineKWIBiHZliZCcfa2dq4IYJe/w7k4WOUYa22jNAUAC+fxlXB1blBq1cgGQrV7DGg=="
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.js"
		integrity="sha512-CrNI25BFwyQ47q3MiZbfATg0ZoG6zuNh2ANn/WjyqvN4ShWfwPeoCOi9pjmX4DoNioMQ5gPcphKKF+oVz3UjRw=="
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.all.min.js"
		integrity="sha512-jQxNe7fqaqehR3t/JfoxC8y2dwkEIL/7a6JWbs6sQdSCI/6Kd0t2okI9nhuKeSUgM5JDTDgdUzLzSPovB2lOBQ=="
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.js"
		integrity="sha512-pCY6IoVbjV1hvVawzGdzKCAVB0UXiOacncL59KETWUSkEPiDkvXTrXjGjpAQF6YCqxTcoa3YIV9SGGnFkb8evg=="
		crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.css"
		integrity="sha512-/D4S05MnQx/q7V0+15CCVZIeJcV+Z+ejL1ZgkAcXE1KZxTE4cYDvu+Fz+cQO9GopKrDzMNNgGK+dbuqza54jgw=="
		crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.css"
		integrity="sha512-IThEP8v8WRHuDqEKg3D6V0jROeRcQXGu/02HzCudtHKlLSzl6F6EycdHw34M3gsBA5zsUyR4ynW6j5vS1qE4wQ=="
		crossorigin="anonymous" />
</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="{{ route('index') }}" class="d-inline-block" target="_blank">
				<img src="{{ url ('img/diskominfo.png ')}}" style="height: 30px;">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>
			</ul>

			<span class="navbar-text ml-md-3 mr-md-auto">
				<span class="badge bg-success">Online</span>
			</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
						<img src="{{ asset ('uploads/'.auth()->user()->profile_photo_path)}}" class="rounded-circle"
							alt="">
						<span>{{auth()->user()->name}}</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="{{url('/account')}}/{{auth()->user()->id}}/edit" class="dropdown-item"><i
								class="icon-cog5"></i> Setting Akun</a>
						<a href="{{route('logout')}}" class="dropdown-item"><i class="icon-switch2"
								id="sweet_warning"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">
				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header">
							<div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu"
								title="Main"></i>
						</li>
						<li class="nav-item">
							<a href="{{ route('dashboard') }}" class="nav-link @yield('kondisi1')">
								<i class="icon-home4"></i>
								<span>Dashboard</span>
							</a>
						</li>

						@permission('menu_depan-read')
						<li class="nav-item nav-item-submenu @yield('kondisi5')">
							<a href="#" class="nav-link"><i class="icon-menu7"></i> <span>Menu Depan</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Menu Depan">
								{{-- <li class="nav-item"><a href="{{ route('gallery.index') }}"
										class="nav-link">Galeri</a></li> --}}
								<li class="nav-item"><a href="{{ route('menuberanda.index') }}"
										class="nav-link">Menu</a></li>
								<li class="nav-item"><a href="{{ route('lampirans.index') }}"
										class="nav-link">Download Area</a></li>
								<li class="nav-item"><a href="{{ route('pengumumans.index') }}"
										class="nav-link">Pengumuman</a></li>
								<li class="nav-item"><a href="{{ route('sampul.index') }}" class="nav-link">Sampul
										Beranda</a></li>
								{{-- <li class="nav-item"><a href="{{ route('website.index') }}"
										class="nav-link">Website Kelurahan</a></li> --}}
								{{-- <li class="nav-item"><a href="{{ route('youtube.index') }}"
										class="nav-link">Youtube</a></li> --}}
							</ul>
						</li>
						@endpermission

						@permission('posting-read')
						<li class="nav-item nav-item-submenu @yield('kondisi2')  @yield('kondisi7')">
							<a href="#" class="nav-link"><i class="icon-newspaper"></i> <span>Posting</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Posting">
								<li class="nav-item"><a href="{{ route('posting.index') }}" class="nav-link">Posting
										Berita</a></li>
								<li class="nav-item"><a href="{{ route('halaman.index') }}" class="nav-link">Halaman Menu</a>
								</li>
								<li class="nav-item nav-item-submenu @yield('kondisi7')">
									<a href="#" class="nav-link ">Daftar Informasi Publik</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item "><a href="{{ route('daftar-informasi-publik.index') }}" class="nav-link"> Berkala | Setiap Saat | Serta Merta</a></li>
										<li class="nav-item"><a href="{{ route('dip-dikecualikan.index') }}" class="nav-link">Dikecualikan</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="{{ route('infohoax.index') }}" class="nav-link">Info
										Hoax</a></li>
								<li class="nav-item"><a href="{{ route('infografis.index') }}"
										class="nav-link">InfoGrafis</a></li>
								<li class="nav-item"><a href="{{ route('category.index') }}"
										class="nav-link">Kategori</a></li>
							</ul>
						</li>
						@endpermission


						@permission('users-read')
						<li class="nav-item nav-item-submenu @yield('kondisi3') @yield('kondisi4') @yield('kondisi11') ">
							<a href="#" class="nav-link"><i class="icon-user"></i> <span>User</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="User">
								<li class="nav-item nav-item-submenu @yield('kondisi11')">
									<a href="#" class="nav-link "> Management User</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item "><a href="{{route('user.index')}}" class="nav-link"> Diskominfo</a></li>
										<li class="nav-item"><a href="{{route('user-integrasi.index')}}" class="nav-link">Integrasi</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="{{route('role.index')}}" class="nav-link ">Role</a></li>
							</ul>
						</li>
						@endpermission


						@permission('layanan-read')
						<li class="nav-item nav-item-submenu @yield('kondisi6')">
							<a href="#" class="nav-link"><i class="icon-bubble-lines4"></i><span>Layanan</span>
								{{-- <span class="badge bg-orange-400 align-self-center ml-auto">{{
									$total_layanan}}</span> --}}
							</a>
							<ul class="nav nav-group-sub" data-submenu-title="Layanan">
								{{-- <li class="nav-item">
									<a href="{{ route('pengaduans.index') }}" class="nav-link ">Pengaduan Masyarakat
										<span
											class="badge bg-orange-400 align-self-center ml-auto">{{$status_pengaduan}}</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('komentar.index') }}" class="nav-link ">Permohonan Informasi
										<span
											class="badge bg-orange-400 align-self-center ml-auto">{{$status_komentar}}</span>
									</a>
								</li> --}}
								<li class="nav-item">
									<a href="{{ route('media-publikasi.index') }}" class="nav-link ">Media Publikasi
										@if ($media_publikasi == 0)
											<span class="badge bg-grey-400 align-self-center ml-auto">{{$media_publikasi}}</span>
										@else
											<span class="badge bg-green-400 align-self-center ml-auto">{{$media_publikasi}}</span>
										@endif
									</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('liputan.index') }}" class="nav-link ">Liputan
										@if ($liputan == 0)
											<span class="badge bg-grey-400 align-self-center ml-auto">{{$liputan}}</span>
										@else
											<span class="badge bg-green-400 align-self-center ml-auto">{{$liputan}}</span>
										@endif
									</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('informasi-publik.index') }}" class="nav-link ">Informasi Publik
										@if ($informasi_publik == 0)
											<span class="badge bg-grey-400 align-self-center ml-auto">{{$informasi_publik}}</span>
										@else
											<span class="badge bg-green-400 align-self-center ml-auto">{{$informasi_publik}}</span>
										@endif
									</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('pengajuan-keberatan.index') }}" class="nav-link ">Keberatan
										Informasi Publik
										@if ($pengajuan_keberatan == 0)
											<span class="badge bg-grey-400 align-self-center ml-auto">{{$pengajuan_keberatan}}</span>
										@else
											<span class="badge bg-green-400 align-self-center ml-auto">{{$pengajuan_keberatan}}</span>
										@endif
									</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('pinjam-tempat.index') }}" class="nav-link ">Tempat Rapat
										@if ($tempat_rapat == 0)
											<span class="badge bg-grey-400 align-self-center ml-auto">{{$tempat_rapat}}</span>
										@else
											<span class="badge bg-green-400 align-self-center ml-auto">{{$tempat_rapat}}</span>
										@endif
									</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('pinjam-peralatan.index') }}" class="nav-link ">Pinjam Peralatan
										@if ($pinjam_peralatan == 0)
											<span class="badge bg-grey-400 align-self-center ml-auto">{{$pinjam_peralatan}}</span>
										@else
											<span class="badge bg-green-400 align-self-center ml-auto">{{$pinjam_peralatan}}</span>
										@endif
									</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('magang.index') }}" class="nav-link ">Magang
										@if ($magang == 0)
											<span class="badge bg-grey-400 align-self-center ml-auto">{{$magang}}</span>
										@else
											<span class="badge bg-green-400 align-self-center ml-auto">{{$magang}}</span>
										@endif
									</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('link_zoom.index') }}" class="nav-link ">Link Zoom
										@if ($zoom == 0)
											<span class="badge bg-grey-400 align-self-center ml-auto">{{$zoom}}</span>
										@else
											<span class="badge bg-green-400 align-self-center ml-auto">{{$zoom}}</span>
										@endif
									</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('jaringan-internet.index') }}" class="nav-link ">Jaringan Internet
										@if ($internet == 0)
											<span class="badge bg-grey-400 align-self-center ml-auto">{{$internet}}</span>
										@else
											<span class="badge bg-green-400 align-self-center ml-auto">{{$internet}}</span>
										@endif
									</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('permohonan-aplikasi.index') }}" class="nav-link ">Aplikasi
										@if ($aplikasi == 0)
											<span class="badge bg-grey-400 align-self-center ml-auto">{{$aplikasi}}</span>
										@else
											<span class="badge bg-green-400 align-self-center ml-auto">{{$aplikasi}}</span>
										@endif
									</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('permohonan-subdomain.index') }}" class="nav-link ">Subdomain
										@if ($subdomain == 0)
											<span class="badge bg-grey-400 align-self-center ml-auto">{{$subdomain}}</span>
										@else
											<span class="badge bg-green-400 align-self-center ml-auto">{{$subdomain}}</span>
										@endif
									</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('permintaan-colocation.index') }}" class="nav-link ">Colocation Server
										@if ($colocation == 0)
											<span class="badge bg-grey-400 align-self-center ml-auto">{{$colocation}}</span>
										@else
											<span class="badge bg-green-400 align-self-center ml-auto">{{$colocation}}</span>
										@endif
									</a>
								</li>
							</ul>
						</li>
					@endpermission

					{{-- Mulai Ticketing--}}

					@permission('tiket-read')
					<li class="nav-item-header">
						<div class="text-uppercase font-size-xs line-height-xs">Tiket</div> <i class="icon-menu"
							title="tiket"></i>
					</li>
					<li class="nav-item nav-item-submenu @yield('kondisi8')">
						<a href="#" class="nav-link"><i class="icon-pencil5"></i> <span>Tiket</span></a>
						<ul class="nav nav-group-sub" data-submenu-title="Posting">
							<li class="nav-item"><a href="{{ route('tiket:tiket.create') }}" class="nav-link">Tambah
									Tiket</a></li>
							<li class="nav-item"><a href="{{ route('tiket:tiket.index') }}" class="nav-link">List
									Tiket</a></li>
						</ul>
					</li>
					@endpermission

					<li class="nav-item-header">
						<div class="text-uppercase font-size-xs line-height-xs">AIM</div> <i class="icon-menu"
							title="AIM"></i>
					</li>

					@permission('inventory-read')
					<li class="nav-item nav-item-submenu @yield('kondisi9')">
						<a href="#" class="nav-link"><i class="icon-drawer"></i> <span>Inventory</span></a>
						<ul class="nav nav-group-sub" data-submenu-title="Posting">
							<li class="nav-item"><a href="{{ route('inventory:satuan.index') }}"
									class="nav-link">Satuan</a></li>
							<li class="nav-item"><a href="{{ route('inventory:kategori.index') }}"
									class="nav-link">Kategori</a></li>
							<li class="nav-item"><a href="{{ route('inventory:barang.index') }}"
									class="nav-link">Barang</a></li>
							<li class="nav-item"><a href="{{ route('inventory:peminjaman.index') }}"
									class="nav-link">Peminjaman</a></li>
						</ul>
					</li>
					@endpermission

					@permission('agenda-read')
					<li class="nav-item">
						<a href="{{ route('agenda:harian.index') }}" class="nav-link @yield('kondisi10')">
							<i class="icon-bookmark"></i>
							<span>Agenda</span>
						</a>
					</li>
					@endpermission

					@permission('tamu-read')
					<li class="nav-item">
						<a href="{{ route('buku:tamu.index') }}" class="nav-link @yield('kondisi12')">
							<i class="icon-man-woman"></i>
							<span>Buku Tamu</span>
						</a>
					</li>
					@endpermission	

					@permission('skm-read')
					<li class="nav-item">
						<a href="{{ route('skm.index') }}" class="nav-link @yield('kondisi13')">
							<i class="icon-pie-chart2"></i>
							<span>Rekap Data SKM</span>
						</a>
					</li>
					@endpermission

					@permission('lkh-read')
					<li class="nav-item">
						<a href="{{ route('daily-work-recap.index') }}" class="nav-link @yield('kondisi14')">
							<i class="icon-stack"></i>
							<span>Laporan Kegiatan Harian</span>
						</a>
					</li>
					@endpermission

					<li class="nav-item-header">
						<div class="text-uppercase font-size-xs line-height-xs">Presensi</div> <i class="icon-menu"
							title="presensi"></i>
					</li>

					@permission('presensi-read')
					<li class="nav-item">
						<a href="{{ route('presensi.index') }}" class="nav-link @yield('kondisi15')">
							<i class="icon-stack-text"></i>
							<span>Presensi </span>
						</a>
					</li>
					@endpermission

					@permission('presensi_admin-read')
					<li class="nav-item nav-item-submenu @yield('kondisi16')">
						<a href="#" class="nav-link"><i class="icon-stack-text"></i> <span>Presensi</span></a>
						<ul class="nav nav-group-sub" data-submenu-title="Presensi">
							<li class="nav-item"><a href="{{ route('presensi-admin.index') }}" class="nav-link @yield('kondisi16')">
									<span>Laporan Presensi </span></a>
							</li>
							<li class="nav-item"><a href="{{ route('setting-tanggal.index') }}" class="nav-link @yield('kondisi16')">
									<span>Setting Tanggal </span></a>
							</li>
						</ul>
					</li>
					@endpermission
					<!-- /main -->
					</ul>
				</div>
				<!-- /main navigation -->
			</div>
			<!-- /sidebar content -->
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">
			<!-- Page header -->
			@if(!Route::is('presensi.index') )
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span
								class="font-weight-semibold">@yield('menu')</span> - @yield('submenu')</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="{{ route('dashboard')}}" class="breadcrumb-item">
								<i class="icon-home2 mr-2"></i>
								Home
							</a>
							@yield('halaman')
						</div>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="breadcrumb justify-content-center">
							<div class="breadcrumb-elements-item dropdown p-0">
								@yield('tambah_data')
							</div>
						</div>
					</div>
				</div>
			</div>
			@endif
			<!-- /page header -->

			@yield('container')

			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
						data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2017 - {{ Carbon\Carbon::now()->isoFormat('Y') }}. <a href="#">Diskominfo Wonosobo</a> by
						<a href="#">Devandewa</a>
					</span>
				</div>
			</div>

			<!-- Basic modal tampilkan link zoom admin-->
			<div id="modal_default" class="modal fade" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title topikzoom"></h5>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>

						<div class="modal-body">
							<p class="link-zoomss" id="cuks"></p>
						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
							<button onclick="salinLink()" type="button" class="btn bg-primary">Copy Link</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /basic modal -->
			<!-- /footer -->
		</div>
		<!-- /main content -->
	</div>
	<!-- /page content -->
	<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
	<script>
		$(function () {
			$(".alert").delay(3000).slideUp(300);
		});

		function salinLink() {
			var copyText = document.getElementById("cuks");
			navigator.clipboard.writeText(copyText.innerText);
			alert("Link Berhasil di Salin!");
		}

		$('body').on('click', '.btn-linkzoom', function (event) {
			event.preventDefault();
			const topik = $(this).data('topik_zoom');
			const link = $(this).data('link_zoom');
			console.log(topik);
			console.log(link);
			// Set data to Form Edit
			$('.topikzoom').html('Link Zoom ' + topik);
			$('.link-zoomss').html(link);
		});
	</script>
	<script>
		$(document).on('click', '.delete-data-table', function (a) {
			a.preventDefault();
			Swal.fire({
				title: 'Are you sure?',
				text: "Do you realy want to delete this records? This process cannot be undone.",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Delete!'
			}).then((result) => {
				if (result.value) {
					a.preventDefault();
					var url = $(this).attr('href');
					$.ajaxSetup({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});

					$.ajax({
						url: url,
						method: 'delete',
						success: function () {
							Swal.fire(
								'Deleted!',
								'data has been deleted.',
								'success'
							)
							table.ajax.reload();
							if (typeof table2) {
								table2.ajax.reload();
							}
						}
					})
				}
			})
		});
	</script>

	<script>
		$(document).on('click', '.deletee', function (a) {
			a.preventDefault();
			Swal.fire({
				title: 'Are you sure?',
				text: "Do you realy want to delete this records? This process cannot be undone.",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Delete!'
			}).then((result) => {
				if (result.value) {

					var url = $(this).attr('href');
					window.location.replace(url);

				}
			})
		});
	</script>

	@stack('js')
</body>

</html>
