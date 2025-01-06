@extends('merchant.layouts._main')

@section('title', 'إنشاء منتج')
@section('toolbar')
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{'المنتجات'}}</h1>
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('home') }}" class="text-muted text-hover-primary">{{'الرئيسية'}}</a>
        </li>
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('products.index') }}" class="text-muted text-hover-primary">{{'المنتجات'}}</a>
        </li>
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <li class="breadcrumb-item text-muted">{{'إضافة منتجات'}}</li>
    </ul>
</div>
@endsection

@section('content')

<x-flash-error />
<form class="form d-flex flex-column flex-lg-row" action="{{ route('products.store' ) }}" method="post"
    enctype="multipart/form-data">
    @csrf
    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                    href="#kt_general">{{'عام'}}</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="kt_general" role="tab-panel">
                <div class="d-flex flex-column gap-7 gap-lg-10">
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{'عام'}}</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="mb-10 fv-row">
                                <label class="required form-label">{{'اسم المنتج'}}</label>
                                <input type="text" name="name"
                                    class="form-control mb-2 @error('name') is-invalid @enderror" />
                            </div>
                            @error('name')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                            <div>
                                <label class="form-label">{{'الوصف'}}</label>
                                <textarea class="form-control mb-2 @error('description') is-invalid @enderror" rows="3"
                                    name="description"></textarea>
                                <div class="text-muted fs-7">{{'ضع وصفًا للمنتج لزيادة وضوحه.'}}</div>
                            </div>
                            @error('description')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{'الوسائط'}}</h2>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="file" name="image" class="form-control">
                            @if (@$product->image)
                            <img src={{ asset('storage/' . @$product->image) }} alt="" height="50">
                            @endif
                        </div>
                    </div>

                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{'التسعير'}}</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="mb-10 fv-row">
                                <label class="required form-label">{{'السعر الأساسي'}}</label>
                                <input type="number" name="price"
                                    class="form-control mb-2 @error('offer_price') is-invalid @enderror" value="" />
                                @error('offer_price')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                             <div class="mb-10 fv-row">
                                <label class="required form-label">{{'النقاط'}}</label>
                                <input type="number" name="points"
                                    class="form-control mb-2" value="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <a href="javascript:history.back()" id="kt_cancel" class="btn btn-light me-5">{{ 'إلغاء' }}</a>
            <button type="submit" id="kt_submit" class="btn btn-primary">
                <span class="indicator-label">{{'حفظ التغييرات'}}</span>
                <span class="indicator-progress">{{'يرجى الانتظار...'}}
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>
    </div>
</form>

<div class="d-none" id="temp_addition">
    <div class="form-group item-content mt-5">
        <div class="d-flex flex-column gap-3">
            <div class="form-group d-flex flex-wrap align-items-center gap-5">
                <div class="w-100 w-md-200px">
                    <input type="text" name="addition_name[]" class="form-control" placeholder="الصنف" required>
                </div>
                <input type="number" name="addition_price[]" class="form-control mw-100 w-200px" placeholder="السعر"
                    min="0" required>
                <button type="button" class="btn btn-remove btn-sm btn-icon btn-light-danger">
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1"
                                transform="rotate(-45 7.05025 15.5356)" fill="currentColor"></rect>
                            <rect x="8.46447" y="7.05029" width="12" height="2" rx="1"
                                transform="rotate(45 8.46447 7.05029)" fill="currentColor"></rect>
                        </svg>
                    </span>
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
@endpush
