<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Saul
Product Version: 1.0.0
Upgrade to Pro: https://keenthemes.com/products/saul-html-pro
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href=""/>
		<title>Monitor Air Sungai</title>
		<meta charset="utf-8" />
		<meta name="description" content="Saul HTML Free - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme" />
		<meta name="keywords" content="Saul, bootstrap, bootstrap 5, dmin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Saul HTML Free - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme" />
		<meta property="og:url" content="https://keeenthemes.com/products/saul-html-pro" />
		<meta property="og:site_name" content="Keenthemes | Saul HTML Free" />
		<link rel="canonical" href="https://preview.keenthemes.com/saul-html-free" />
		<link rel="shortcut icon" href="{{ asset ('media/avatars/undipp.png')}}" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="{{asset ('plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset ('plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{asset ('plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" data-kt-app-aside-enabled="true" data-kt-app-aside-fixed="true" data-kt-app-aside-push-toolbar="true" data-kt-app-aside-push-footer="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">

                @include ('layouts.include.header')

				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

                            @include ('layouts.include.sidebar')


					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar pt-5">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
									<!--begin::Toolbar wrapper-->
									<div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
										<!--begin::Page title-->
										<div class="page-title d-flex flex-column gap-1 me-3 mb-2">
											<!--begin::Breadcrumb-->
											<ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-6">
												<!--begin::Item-->
												<li class="breadcrumb-item text-gray-700 fw-bold lh-1">
													<a href="../dist/index.html" class="text-gray-500">
														<i class="ki-duotone ki-home fs-3 text-gray-400 me-n1"></i>
													</a>
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="breadcrumb-item">
													<i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="breadcrumb-item text-gray-700 fw-bold lh-1">Dashboards</li>
												<!--end::Item-->

											</ul>
											<!--end::Breadcrumb-->
											<!--begin::Title-->
											<h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-1 lh-0">Dashboard</h1>
											<!--end::Title-->
										</div>
										<!--end::Page title-->
										<!--begin::Actions-->
										<!-- Include your view content here -->

                                        <a href="{{ route('export.data') }}" class="btn btn-success">Download Report</a>

										<!--end::Actions-->
									</div>
									<!--end::Toolbar wrapper-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-fluid">

                                    <!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-xl-10">
										<!--begin::Col-->
										<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">

											<!--begin::Card widget 5-->
											<div class="card card-flush h-md-100 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<div class="d-flex align-items-center">
															<!--begin::Amount-->
															<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">1,012</span>
															<!--end::Amount-->
															<!--begin::Badge-->
															<span class="badge badge-light-danger fs-base">
															<i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>0.2%</span>
															<!--end::Badge-->
														</div>
														<!--end::Info-->
														<!--begin::Subtitle-->
														<span class="text-gray-400 pt-1 fw-semibold fs-6">PH</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end pt-0">
													<!--begin::Progress-->
													<div class="d-flex align-items-center flex-column mt-3 w-100">
														<div class="d-flex justify-content-between w-100 mt-auto mb-2">
															<span class="fw-bolder fs-6 text-dark">1,048 dari PH ideal</span>
															<span class="fw-bold fs-6 text-gray-400">62%</span>
														</div>
														<div class="h-8px mx-3 w-100 bg-light-success rounded">
															<div class="bg-success rounded h-8px" role="progressbar" style="width: 62%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<!--end::Progress-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 5-->
										</div>
										<!--end::Col-->
                                        <!--begin::Col-->
										<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">

											<!--begin::Card widget 5-->
											<div class="card card-flush h-md-100 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<div class="d-flex align-items-center">
															<!--begin::Amount-->
															<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">1,012</span>
															<!--end::Amount-->
															<!--begin::Badge-->
															<span class="badge badge-light-danger fs-base">
															<i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>0.2%</span>
															<!--end::Badge-->
														</div>
														<!--end::Info-->
														<!--begin::Subtitle-->
														<span class="text-gray-400 pt-1 fw-semibold fs-6">PH</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end pt-0">
													<!--begin::Progress-->
													<div class="d-flex align-items-center flex-column mt-3 w-100">
														<div class="d-flex justify-content-between w-100 mt-auto mb-2">
															<span class="fw-bolder fs-6 text-dark">1,048 dari PH ideal</span>
															<span class="fw-bold fs-6 text-gray-400">62%</span>
														</div>
														<div class="h-8px mx-3 w-100 bg-light-success rounded">
															<div class="bg-success rounded h-8px" role="progressbar" style="width: 62%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<!--end::Progress-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 5-->
										</div>
										<!--end::Col-->


									</div>
									<!--end::Row-->

                                    <!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-xl-10">
										<!--begin::Col-->
										<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">

											<!--begin::Card widget 5-->
											<div class="card card-flush h-md-100 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<div class="d-flex align-items-center">
															<!--begin::Amount-->
															<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">1,012</span>
															<!--end::Amount-->
															<!--begin::Badge-->
															<span class="badge badge-light-danger fs-base">
															<i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>0.2%</span>
															<!--end::Badge-->
														</div>
														<!--end::Info-->
														<!--begin::Subtitle-->
														<span class="text-gray-400 pt-1 fw-semibold fs-6">Suhu</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end pt-0">
													<!--begin::Progress-->
													<div class="d-flex align-items-center flex-column mt-3 w-100">
														<div class="d-flex justify-content-between w-100 mt-auto mb-2">
															<span class="fw-bolder fs-6 text-dark">1,048 dari Suhu ideal</span>
															<span class="fw-bold fs-6 text-gray-400">62%</span>
														</div>
														<div class="h-8px mx-3 w-100 bg-light-success rounded">
															<div class="bg-success rounded h-8px" role="progressbar" style="width: 62%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<!--end::Progress-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 5-->
										</div>
										<!--end::Col-->
                                        <!--begin::Col-->
										<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">

											<!--begin::Card widget 5-->
											<div class="card card-flush h-md-100 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<div class="d-flex align-items-center">
															<!--begin::Amount-->
															<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">1,012</span>
															<!--end::Amount-->
															<!--begin::Badge-->
															<span class="badge badge-light-danger fs-base">
															<i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>0.2%</span>
															<!--end::Badge-->
														</div>
														<!--end::Info-->
														<!--begin::Subtitle-->
														<span class="text-gray-400 pt-1 fw-semibold fs-6">TDS</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end pt-0">
													<!--begin::Progress-->
													<div class="d-flex align-items-center flex-column mt-3 w-100">
														<div class="d-flex justify-content-between w-100 mt-auto mb-2">
															<span class="fw-bolder fs-6 text-dark">1,048 dari TDS ideal</span>
															<span class="fw-bold fs-6 text-gray-400">62%</span>
														</div>
														<div class="h-8px mx-3 w-100 bg-light-success rounded">
															<div class="bg-success rounded h-8px" role="progressbar" style="width: 62%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<!--end::Progress-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 5-->
										</div>
										<!--end::Col-->


									</div>
									<!--end::Row-->

								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->

					</div>
					<!--end:::Main-->

				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->

		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-duotone ki-arrow-up">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</div>
		<!--end::Scrolltop-->

		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{asset('plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="{{asset('plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
		<script src="{{asset ('plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{asset ('js/widgets.bundle.js')}}"></script>
		<script src="{{asset ('js/custom/widgets.js')}}"></script>
		<script src="{{asset ('js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{asset ('js/custom/utilities/modals/upgrade-plan.js')}}"></script>
		<script src="{{asset ('js/custom/utilities/modals/create-account.js')}}"></script>
		<script src="{{asset ('js/custom/utilities/modals/create-app.js')}}"></script>
		<script src="{{asset ('js/custom/utilities/modals/users-search.js')}}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
