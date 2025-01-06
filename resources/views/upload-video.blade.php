@extends('merchant.layouts._main')

@section('title', 'Upload Video')

@section('toolbar')
<!--begin::Page title-->
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{'Upload Video'}}</h1>
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('home') }}" class="text-muted text-hover-primary">{{'Home'}}</a>
        </li>

        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <li class="breadcrumb-item text-muted">{{'Upload Video'}}</li>
    </ul>
</div>
<!--end::Page title-->
@endsection

@section('content')

<x-flash-error />
<!--begin::Form-->
<form class="form d-flex flex-column flex-lg-row" action="{{ route('video.upload') }}" method="post"
    enctype="multipart/form-data">
    @csrf
    <!--begin::Main column-->
    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
        <!--begin::Media-->
        <div class="card card-flush py-4">
            <div class="card-header">
                <div class="card-title">
                    <h2>{{'Upload Video'}}</h2>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="form-group mb-10">
                    <!-- حقل لرفع الفيديو -->
                    <label for="video" class="form-label">{{'Video File'}}</label>
                    <input type="file" name="video" class="form-control @error('video') is-invalid @enderror" accept="video/*">
                    @error('video')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        <!--end::Media-->

        <div class="d-flex justify-content-end">
            <!--begin::Button-->
            <a href="javascript:history.back()" id="kt_cancel" class="btn btn-light me-5">{{ 'Cancel' }}</a>
            <!--end::Button-->
            <!--begin::Button-->
            <button type="submit" id="kt_submit" class="btn btn-primary">
                <span class="indicator-label">{{'Upload Video'}}</span>
                <span class="indicator-progress">{{'Please wait...'}}
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <!--end::Button-->
        </div>
    </div>
</form>
<!--end::Form-->

@endsection
