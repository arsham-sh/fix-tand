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
                        <small class="text-muted fs-7 fw-bold my-1 ms-1">لیست دسته بندی ها</small>
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
                                    <span class="card-label fw-bolder fs-3 mb-1">ویرایش دسته بندی</span>
                                </h3>
                            </div>
                            <!--end::Header-->
							<hr>
                            <!-- TABLE -->
                            <div class="card-body py-3">
                                <form action="{{ route('categories.update', $category->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-10">

                                        <div class="row g-9 mb-7">
                                            <!-- Category Name -->
                                            <div class="col-md-6 fv-row">
                                                <label class="required fs-6 fw-bold mb-2">نام دسته بندی</label>
                                                <input type="text" name="name" class="form-control form-control-solid" placeholder="نام دسته بندی را وارد کنید" value="{{ $category->name }}" required />
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex justify-content-end py-6 px-9" style="float: right">
                                            <button type="submit" class="btn btn-primary">ذخیره دسته بندی</button>
                                            <a href="{{ route('categories.index') }}" class="btn btn-light btn-active-light-primary me-2">لغو</a>
                                        </div>
                                </form>
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