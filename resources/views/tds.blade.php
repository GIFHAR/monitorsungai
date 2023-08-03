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
		<link rel="shortcut icon" href="{{ asset ('media/logos/favicon.ico')}}" />
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
												<li class="breadcrumb-item text-gray-700 fw-bold lh-1">TDS</li>
												<!--end::Item-->

											</ul>
											<!--end::Breadcrumb-->
											<!--begin::Title-->
											<h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-1 lh-0">TDS</h1>
											<!--end::Title-->
										</div>
										<!--end::Page title-->
										<!--begin::Actions-->
										<a href="#" class="btn btn-sm btn-success ms-3 px-4 py-3" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Donwload Report</a>
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
										<div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
											<!--begin::Chart widget 3-->
											<div class="card card-flush overflow-hidden h-md-100">
												<!--begin::Header-->
												<div class="card-header py-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-dark">TDS Air Sungai</span>
														<span class="text-gray-400 mt-1 fw-semibold fs-6">Statistik per menit</span>
													</h3>
													<!--end::Title-->

												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
													<!--begin::Statistics-->
													<div class="px-9 mb-5">
														<!--begin::Statistics-->
														<div class="d-flex mb-2">
															<span class="fs-4 fw-semibold text-gray-400 me-1">=</span>
															<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">13</span>
														</div>
														<!--end::Statistics-->
														<!--begin::Description-->
														<span class="fs-6 fw-semibold text-gray-400">kurang 2 lagi untuk ideal</span>
														<!--end::Description-->
													</div>
													<!--end::Statistics-->
													<!--begin::Chart-->

                                                    <div id="kt_charts_widget_3" style="min-height: 300px;"></div>
                                                    <script src="{{ asset('js/widgets.bundle.js') }}"></script>


                                                    <script>
                                                    document.addEventListener("DOMContentLoaded", () => {


                                                    var height = parseInt(KTUtil.css(element, 'height'));
                                                    var labelColor = KTUtil.getCssVariableValue('--bs-gray-500');
                                                    var borderColor = KTUtil.getCssVariableValue('--bs-border-dashed-color');
                                                    var baseColor = KTUtil.getCssVariableValue('--bs-success');
                                                    var lightColor = KTUtil.getCssVariableValue('--bs-success');

                                                    var options = {
                                                        series: [{
                                                            name: 'Nilai TDS',
                                                            data: [18, 18, 20, 20, 18, 18, 22, 22, 20, 20, 18, 18, 20, 20, 18, 18, 20, 20, 22]
                                                        }],
                                                        chart: {
                                                            fontFamily: 'inherit',
                                                            type: 'area',
                                                            height: height,
                                                            toolbar: {
                                                                show: false
                                                            }
                                                        },
                                                        plotOptions: {

                                                        },
                                                        legend: {
                                                            show: false
                                                        },
                                                        dataLabels: {
                                                            enabled: false
                                                        },
                                                        fill: {
                                                            type: "gradient",
                                                            gradient: {
                                                                shadeIntensity: 1,
                                                                opacityFrom: 0.4,
                                                                opacityTo: 0,
                                                                stops: [0, 80, 100]
                                                            }
                                                        },
                                                        stroke: {
                                                            curve: 'smooth',
                                                            show: true,
                                                            width: 3,
                                                            colors: [baseColor]
                                                        },
                                                        xaxis: {
                                                            categories: ['', '11:05', '11:06', '11:07', '11:08', '11:09', '11:10', '11:11', '11:12', '11:13', '11:14', '11:15', '11:16', '11:17', '11:18', '11:19', '11:20', '11:21', ''],
                                                            axisBorder: {
                                                                show: false,
                                                            },
                                                            axisTicks: {
                                                                show: false
                                                            },
                                                            tickAmount: 6,
                                                            labels: {
                                                                rotate: 0,
                                                                rotateAlways: true,
                                                                style: {
                                                                    colors: labelColor,
                                                                    fontSize: '12px'
                                                                }
                                                            },
                                                            crosshairs: {
                                                                position: 'front',
                                                                stroke: {
                                                                    color: baseColor,
                                                                    width: 1,
                                                                    dashArray: 3
                                                                }
                                                            },
                                                            tooltip: {
                                                                enabled: true,
                                                                formatter: undefined,
                                                                offsetY: 0,
                                                                style: {
                                                                    fontSize: '12px'
                                                                }
                                                            }
                                                        },
                                                        yaxis: {
                                                            tickAmount: 4,
                                                            max: 24,
                                                            min: 10,
                                                            labels: {
                                                                style: {
                                                                    colors: labelColor,
                                                                    fontSize: '12px'
                                                                },
                                                                formatter: function(val) {
                                                                    return val
                                                                }
                                                            }
                                                        },
                                                        states: {
                                                            normal: {
                                                                filter: {
                                                                    type: 'none',
                                                                    value: 0
                                                                }
                                                            },
                                                            hover: {
                                                                filter: {
                                                                    type: 'none',
                                                                    value: 0
                                                                }
                                                            },
                                                            active: {
                                                                allowMultipleDataPointsSelection: false,
                                                                filter: {
                                                                    type: 'none',
                                                                    value: 0
                                                                }
                                                            }
                                                        },
                                                        tooltip: {
                                                            style: {
                                                                fontSize: '12px'
                                                            },
                                                            y: {
                                                                formatter: function(val) {
                                                                    return val
                                                                }
                                                            }
                                                        },
                                                        colors: [lightColor],
                                                        grid: {
                                                            borderColor: borderColor,
                                                            strokeDashArray: 4,
                                                            yaxis: {
                                                                lines: {
                                                                    show: true
                                                                }
                                                            }
                                                        },
                                                        markers: {
                                                            strokeColor: baseColor,
                                                            strokeWidth: 3
                                                        }
                                                    };
                                                    var chart = new ApexCharts(element, options);
                                                    chart.render();

                                                    }
                                                    );
                                                    </script>




													<!--end::Chart-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Chart widget 3-->
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
