@extends('merchant.layouts._main')

@section('title', 'اضافة')
@section('toolbar')
<!--begin::Page title-->
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
    <!--begin::Title-->
    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{ 'المنتجات' }}</h1>
    <!--end::Title-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('home') }}" class="text-muted text-hover-primary">{{ 'الرئيسية' }}</a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('products.index') }}" class="text-muted text-hover-primary">{{ 'المنتجات' }}</a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">{{ 'إضافة منتجات' }}</li>
        <!--end::Item-->
    </ul>
    <!--end::Breadcrumb-->
</div>
<!--end::Page title-->
@endsection

@section('content')

<x-flash-error />

<!--begin::Form-->
<form class="form d-flex flex-column flex-lg-row" action="{{ route('OurProduct.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <!--begin::Main column-->
    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
        <!--begin::General options-->
        <div class="card card-flush py-4">
            <div class="card-header">
                <div class="card-title">
                    <h2>{{ 'عام' }}</h2>
                </div>
            </div>
            <div class="card-body pt-0">

                <!-- المحتوى -->
                <div class="mb-10 fv-row">
                    <label class="required form-label">{{ 'المحتوى' }}</label>
                    <input type="text" name="content" class="form-control mb-2 @error('content') is-invalid @enderror" />
                    @error('content')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>

                <!-- الوصف -->
                <div class="mb-10 fv-row">
                    <label class="form-label">{{ 'الوصف' }}</label>
                    <textarea class="form-control mb-2 @error('discription') is-invalid @enderror" rows="3" name="discription"></textarea>
                    @error('discription')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        <!--end::General options-->

        <div class="d-flex justify-content-end">
            <a href="javascript:history.back()" id="kt_cancel" class="btn btn-light me-5">{{ 'إلغاء' }}</a>
            <button type="submit" id="kt_submit" class="btn btn-primary">
                <span class="indicator-label">{{ 'حفظ التغييرات' }}</span>
                <span class="indicator-progress">{{ 'الرجاء الانتظار...' }}
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>
    </div>
    <!--end::Main column-->
</form>
<!--end::Form-->

@endsection

@push('scripts')
{{-- <script>
    $('#category_id').select2({
        placeholder: 'اختر'
    });
    document.getElementById('thumbnail').addEventListener('click', function(e) {
        document.getElementById('images').click();
    });

    document.getElementById('images').addEventListener('change', function(e) {
        if (this.files && this.files[0]) {
            var files = this.files;
            var text= '';
            for (let i = 0; i < files.length; i++) {
                console.log(files[i]);
                text += '<img id="thumbnail" height="100" width="100" src="'+URL.createObjectURL(files[i])+'">';
            }
            $('#div_img').html(text);
        }
    });
$(document).on('click', '.btn-remove', function(e) {
    $(this).closest('.item-content').remove();
});

function create_new_row()
{
    console.log($('#temp_addition').html());
    $('#addition_div').append($('#temp_addition').html());
}
</script> --}}
@endpush
