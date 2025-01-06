@extends('merchant.layouts._main')

@section('title', 'حول')
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
        </li>
    </ul>
</div>
@endsection

@section('content')

<x-flash-error />
<form class="form d-flex flex-column flex-lg-row" action="{{ route('about.store' ) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_general">{{'عام'}}</a>
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
                                <label class="required form-label">{{'العنوان'}}</label>
                                <input type="text" name="title" class="form-control mb-2 @error('name') is-invalid @enderror" />
                            </div>
                            <div class="mb-10 fv-row">
                                <label class="required form-label">{{'العنوان الفرعي'}}</label>
                                <input type="text" name="subtitle" class="form-control mb-2 @error('name') is-invalid @enderror" />
                            </div>
                            <div class="mb-10 fv-row">
                                <label class="required form-label">{{'اسم المتجر'}}</label>
                                <input type="text" name="store_name" class="form-control mb-2 @error('name') is-invalid @enderror" />
                            </div>
                            @error('name')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                            <div>
                                <label class="form-label">{{'الوصف'}}</label>
                                <textarea class="form-control mb-2 @error('description') is-invalid @enderror" rows="3" name="description"></textarea>
                                <div class="text-muted fs-7">{{'حدد وصفًا للمنتج لزيادة الظهور.'}}</div>
                            </div>
                            @error('description')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{'الأسعار'}}</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="mb-10 fv-row">
                                <label class="required form-label">{{'المنتجات'}}</label>
                                <input type="number" name="products" class="form-control mb-2 @error('products') is-invalid @enderror" value="" />
                                @error('offer_price')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-10 fv-row">
                                <label class="required form-label">{{'العملاء'}}</label>
                                <input type="number" name="custumers" class="form-control mb-2 @error('custumers') is-invalid @enderror" value="" />
                                @error('offer_price')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-10 fv-row">
                                <label class="required form-label">{{'الطلبات'}}</label>
                                <input type="number" name="orders" class="form-control mb-2 @error('orders') is-invalid @enderror" value="" />
                                @error('offer_price')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{'الصورة 1'}}</h2>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="file" name="image1" class="form-control">
                            @if (@$product->image)
                            <img src={{ asset('storage/' . @$product->image) }} alt="" height="50">
                            @endif
                        </div>
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{'الصورة 2'}}</h2>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="file" name="image2" class="form-control">
                            @if (@$product->image)
                            <img src={{ asset('storage/' . @$product->image2) }} alt="" height="50">
                            @endif
                        </div>
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{'الصورة 3'}}</h2>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="file" name="image3" class="form-control">
                            @if (@$product->image)
                            <img src={{ asset('storage/' . @$product->image3) }} alt="" height="50">
                            @endif
                        </div>
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{'الصورة 4'}}</h2>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="file" name="image4" class="form-control">
                            @if (@$product->image)
                            <img src={{ asset('storage/' . @$product->image4) }} alt="" height="50">
                            @endif
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



@endsection

@push('scripts')
{{-- <script>
    $('#category_id').select2({
        placeholder: 'Select'
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
    $(this).closes'.item-content').remove();
});

function create_new_row()
{
    console.log($('#temp_addition').html());
    $('#addition_div').append($('#temp_addition').html());
}
</script> --}}
@endpush
