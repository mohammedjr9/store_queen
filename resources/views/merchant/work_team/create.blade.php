@extends('merchant.layouts._main')

@section('title', 'إضافة شخص جديد')
@section('toolbar')
<!--begin::Page title-->
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
    <!--begin::Title-->
    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{'Products'}}</h1>
    <!--end::Title-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('home') }}" class="text-muted text-hover-primary">{{'الرئيسية'}}</a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('products.index') }}" class="text-muted text-hover-primary">{{'المنتجات'}}</a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">{{'إضافة شخص'}}</li>
        <!--end::Item-->
    </ul>
    <!--end::Breadcrumb-->
</div>
<!--end::Page title-->
@endsection
@section('content')

<x-flash-error />
<!--begin::Form-->
<form class="form d-flex flex-column flex-lg-row" action="{{ route('workTeam.store' ) }}" method="post"
    enctype="multipart/form-data">
    @csrf
    <!--begin::Aside column-->

    <!--begin::Main column-->
    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
        <!--begin:::Tabs-->
        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
            <!--begin:::Tab item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                    href="#kt_general">{{'General'}}</a>
            </li>
            <!--end:::Tab item-->

        </ul>
        <!--end:::Tabs-->
        <!--begin::Tab content-->
        <div class="tab-content">
            <!--begin::Tab pane-->
            <div class="tab-pane fade show active" id="kt_general" role="tab-panel">
                <div class="d-flex flex-column gap-7 gap-lg-10">
                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{'General'}}</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->



                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">{{'الاسم'}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="name"
                                    class="form-control mb-2 @error('name') is-invalid @enderror" />
                                <!--end::Input-->
                            </div>
                            @error('name')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                            <!--end::Input group-->

                              <!--begin::Input group-->
                              <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">{{'المسمى الوظيفي'}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="job_title"
                                    class="form-control mb-2 @error('job_title') is-invalid @enderror" />
                                <!--end::Input-->
                            </div>
                            @error('job_title')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                            <!--end::Input group-->

                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->
                    <!--begin::Media-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{'الصور'}}</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="form-group">


                            <input type="file" name="image" class="form-control">

                            {{-- @if (@$product->image)
                            <img src={{ asset('storage/' . @$product->image) }} alt="" height="50">
                            @endif --}}

                        </div>

                        <!--end::Card header-->
                    </div>
                    <!--end::Media-->
                    <!--begin::Pricing-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{'social media'}}</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">{{'فيسبوك'}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="facebook"
                                    class="form-control mb-2 @error('facebook') is-invalid @enderror" value="" />
                                <!--end::Input-->
                                @error('facebook')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                           <!--begin::Input group-->
                           <div class="mb-10 fv-row">
                            <!--begin::Label-->
                            <label class="required form-label">{{'تويتر'}}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="twitter"
                                class="form-control mb-2 @error('twitter') is-invalid @enderror" value="" />
                            <!--end::Input-->
                            @error('twitter')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <!--begin::Input group-->  <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">{{'انستقرام'}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="instagram"
                                    class="form-control mb-2 @error('instagram') is-invalid @enderror" value="" />
                                <!--end::Input-->
                                @error('instagram ')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <!--begin::Input group-->
                            <!--end::Input group-->

                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::Pricing-->

                </div>
            </div>
            <!--end::Tab pane-->

        </div>
        <!--end::Tab content-->
        <div class="d-flex justify-content-end">
            <!--begin::Button-->
            <a href="javascript:history.back()" id="kt_cancel" class="btn btn-light me-5">{{ 'Cancel' }}</a>
            <!--end::Button-->

            <!--begin::Button-->
            <button type="submit" id="kt_submit" class="btn btn-primary">
                <span class="indicator-label">{{'حفظ التغيرات '}}</span>
                <span class="indicator-progress">{{'Please wait...'}}
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <!--end::Button-->
        </div>
    </div>
    <!--end::Main column-->
</form>
<!--end::Form-->

@endsection

