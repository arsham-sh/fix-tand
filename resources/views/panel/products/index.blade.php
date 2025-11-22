@extends('panel.layouts.app')
@section('content')
<!-- Content -->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!-- TITLE -->
	<div class="toolbar" id="kt_toolbar">
		<!-- Container -->
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<!-- Page title -->
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend"
				data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
				class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!-- Title -->
				<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">
					مدیریت محصولات
					<span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
					<small class="text-muted fs-7 fw-bold my-1 ms-1">لیست محصولات</small>
				</h1>
				<!-- end Title -->
			</div>
			<!-- end Page title -->
		</div>
		<!-- end Container -->
	</div>
	<!-- END TITLE -->
	<!-- Post -->
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<!-- Container -->
		<div id="kt_content_container" class="container-xxl">
			<!--begin::Row-->
			<div class="row gy-5 g-xl-8">
				<!--begin::Col-->
				<div class="col-xl-12">
					<!--begin::Tables Widget 9-->
					<div class="card card-xl-stretch mb-5 mb-xl-8">
						<!--begin::Header-->
						<div class="card-header border-0 pt-5">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bolder fs-3 mb-1">لیست محصولات</span>
								<span class="text-muted mt-1 fw-bold fs-7">2 محصول</span>
							</h3>
							<div title="برای اضافه کردن محصول جدید کلیک کنید">
								<a href="#" class="btn btn-sm btn-primary">
									<span class="svg-icon svg-icon-3">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none">
											<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
												transform="rotate(-90 11.364 20.364)" fill="black" />
											<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
										</svg>
									</span>
									اضافه کردن محصول جدید
								</a>
							</div>
						</div>
						<!--end::Header-->
						<!-- TABLE -->
						<div class="card-body py-3">
							<!--begin::Table container-->
							<div class="table-responsive">
								<!--begin::Table-->
								<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
									<!--begin::Table head-->
									<thead>
										<tr class="fw-bolder text-muted">
											<th class="w-25px">
												<div
													class="form-check form-check-sm form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="1"
														data-kt-check="true" data-kt-check-target=".widget-9-check" />
												</div>
											</th>
											<th class="min-w-120px">تصاویر</th>
											<th class="min-w-150px">مدل</th>
											<th class="min-w-150px">قیمت</th>
											<th class="min-w-60px">وضعیت</th>
											<th class="min-w-60px">رنگ</th>
											<th class="min-w-60px">تعداد</th>
											<th class="min-w-100px text-end">عملیات ها</th>
										</tr>
									</thead>
									<!--end::Table head-->
									<!--begin::Table body-->
									<tbody>
										<tr>
											<td>
												<div
													class="form-check form-check-sm form-check-custom form-check-solid">
													<input class="form-check-input widget-9-check" type="checkbox"
														value="1" />
												</div>
											</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="symbol symbol-45px me-5">
														<img src="../assets/media/avatars/150-11.jpg" alt="" />
													</div>
												</div>
											</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="d-flex justify-content-start flex-column">
														<a href="#"
															class="text-dark fw-bolder text-hover-primary fs-6 text-truncate">گوشی
															موبایل اپل iPhone 13 Pro CH/A نات اکتیو دو سیم کارت ظرفیت
															256 گیگابایت رم 6 گیگابایت </a>
													</div>
												</div>
											</td>
											<td>
												<span class="text-dark fw-bolder fs-6">100,000,000 تومان</span>
											</td>
											<td>
												<!-- <span class="badge badge-white">New</span> -->
												<!-- <span class="badge badge-primary">New</span> -->
												<!-- <span class="badge badge-light">New</span> -->
												<!-- <span class="badge badge-secondary">New</span> -->
												<!-- <span class="badge badge-success">New</span> -->
												<!-- <span class="badge badge-info">New</span> -->
												<!-- <span class="badge badge-warning">New</span> -->
												<!-- <span class="badge badge-danger">New</span> -->
												<span class="badge badge-success">موجود</span>
											</td>
											<td>
												<span class="text-dark fw-bolder fs-6">قرمز</span>
											</td>
											<td>
												<span class="text-dark fw-bolder fs-6">2</span>
											</td>
											<td>
												<div class="d-flex justify-content-end flex-shrink-0">
													<a href="#"
														class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
														<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
														<span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
																height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3"
																	d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
																	fill="black" />
																<path
																	d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
																	fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</a>
													<a href="#"
														class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
														<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
														<span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
																height="24" viewBox="0 0 24 24" fill="none">
																<path
																	d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
																	fill="black" />
																<path opacity="0.5"
																	d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
																	fill="black" />
																<path opacity="0.5"
																	d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
																	fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</a>
												</div>
											</td>
										</tr>
									</tbody>
									<!--end::Table body-->
								</table>
								<!--end::Table-->
							</div>
							<!--end::Table container-->
						</div>
						<!-- END TABLE -->
					</div>
					<!--end::Tables Widget 9-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
		</div>
		<!-- end Container -->
	</div>
	<!-- end Post -->
</div>
<!-- End Content -->
@endsection