
<!DOCTYPE html>
<html lang="en">
	<head><base href="../../">
		<meta charset="utf-8" />
		<title>Admin Dashboard Deteksi Pneunomia</title>
		<meta name="description" content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular 11, VueJs, React, Laravel, admin themes, web design, figma, web development, ree admin themes, bootstrap admin, bootstrap dashboard" />
		<link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
        <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ url('assets/admin/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url('assets/admin/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

		<!--end::Global Stylesheets Bundle-->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        @stack('styles')
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
                    @include('layouts.menu-admin')
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->
						@include('layouts.bradcrume-admin')
						<!--end::Toolbar-->
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container">
                                {{ $slot }}
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					@include('layouts.footer-admin')
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--begin::Drawers-->

		<!--end::Main-->
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ url('assets/admin/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ url('assets/admin/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ url('assets/admin/js/custom/widgets.js') }}"></script>
		<script src="{{ url('assets/admin/js/custom/apps/chat/chat.js') }}"></script>
		<script src="{{ url('assets/admin/js/custom/modals/create-app.js') }}"></script>
		<script src="{{ url('assets/admin/js/custom/modals/upgrade-plan.js') }}"></script>
		<script src="{{ url('assets/admin/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
        <script>
			ClassicEditor
				.create( document.querySelector( '#editor' ) )
				.catch( error => {
					console.error( error );
				} );
		</script>

		<!--end::Page Custom Javascript-->
        @livewireScripts
        @yield('scripts')
        @stack('scripts')
        @livewire('modal.modal')

		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
