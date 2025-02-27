<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../../">
		<meta charset="utf-8" />
		<title>SIBABANG</title>
		<meta name="description" content="Singin page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="assets/css/pages/login/login-3.css" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
        @include('includes.css')
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
            <div class="login login-3 wizard d-flex flex-column flex-lg-row flex-column-fluid wizard" id="kt_login">
				<!--begin::Aside-->
                @yield('aside')
				<!--begin::Aside-->
				<!--begin::Content-->
				@yield('content')
				<!--end::Content-->
	    </div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
        @include('includes.js')
		<!--begin::Page Scripts(used by this page)-->
		<script src="assets/js/pages/custom/login/login-3.js"></script>
		<!--end::Page Scripts-->
        @include('sweetalert::alert')
        @stack('addon-script')
	</body>
	<!--end::Body-->
</html>
