@extends('merchant.layouts._main')

@section('title', 'تعديل المنتج')

@section('content')

<x-flash-error />
<form class="form d-flex flex-column flex-lg-row" action="{{ route('about.update', $about->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_general">{{ 'عام' }}</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="kt_general" role="tab-panel">
                <div class="d-flex flex-column gap-7 gap-lg-10">
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{ 'عام' }}</h2>
                            </div>
                        </div>

                        <div class="card-body pt-0">
                            <div class="mb-10 fv-row">
                                <label class="required form-label">{{ 'العنوان' }}</label>
                                <input type="text" name="title" class="form-control mb-2 @error('title') is-invalid @enderror" value="{{ old('title', $about->title) }}" />
                            </div>

                            <div class="mb-10 fv-row">
                                <label class="required form-label">{{ 'العنوان الفرعي' }}</label>
                                <input type="text" name="subtitle" class="form-control mb-2 @error('subtitle') is-invalid @enderror" value="{{ old('subtitle', $about->subtitle) }}" />
                            </div>

                            <div class="mb-10 fv-row">
                                <label class="required form-label">{{ 'اسم المتجر' }}</label>
                                <input type="text" name="store_name" class="form-control mb-2 @error('store_name') is-invalid @enderror" value="{{ old('store_name', $about->store_name) }}" />
                            </div>

                            @error('title')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror

                            <div>
                                <label class="form-label">{{ 'الوصف' }}</label>
                                <textarea class="form-control mb-2 @error('description') is-invalid @enderror" rows="3" name="description">{{ old('description', $about->description) }}</textarea>
                                <div class="text-muted fs-7">{{ 'أضف وصفاً لزيادة الوضوح.' }}</div>
                            </div>

                            @error('description')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{ 'التسعير' }}</h2>
                            </div>
                        </div>

                        <div class="card-body pt-0">
                            <div class="mb-10 fv-row">
                                <label class="required form-label">{{ 'المنتجات' }}</label>
                                <input type="number" name="products" class="form-control mb-2 @error('products') is-invalid @enderror" value="{{ old('products', $about->products) }}" />
                                @error('products')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-10 fv-row">
                                <label class="required form-label">{{ 'العملاء' }}</label>
                                <input type="number" name="custumers" class="form-control mb-2 @error('custumers') is-invalid @enderror" value="{{ old('custumers', $about->custumers) }}" />
                                @error('custumers')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-10 fv-row">
                                <label class="required form-label">{{ 'الطلبات' }}</label>
                                <input type="number" name="orders" class="form-control mb-2 @error('orders') is-invalid @enderror" value="{{ old('orders', $about->orders) }}" />
                                @error('orders')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{ 'الصور' }}</h2>
                            </div>
                        </div>

                        <div class="form-group">
                            @foreach (['image1', 'image2', 'image3', 'image4'] as $image)
                                <div class="mb-3">
                                    <label class="form-label">{{ $image }}</label>
                                    <input type="file" name="{{ $image }}" class="form-control mb-2">
                                    @if ($about->$image)
                                        <img src="{{ asset('storage/' . $about->$image) }}" alt="" height="50">
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end">
            <a href="javascript:history.back()" id="kt_cancel" class="btn btn-light me-5">{{ 'إلغاء' }}</a>
            <button type="submit" id="kt_submit" class="btn btn-primary">
                <span class="indicator-label">{{ 'حفظ التغييرات' }}</span>
                <span class="indicator-progress">{{ 'يرجى الانتظار...' }}
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>
    </div>
</form>

@endsection

@push('scripts')
<script>
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
                text += '<img id="thumbnail" height="150" width="100" src="'+URL.createObjectURL(files[i])+'">';
            }
            $('#div_img').html(text);
        }
    });

    $(document).on('click', '.btn-remove', function(e) {
        $(this).closest('.item-content').remove();
    });

    function create_new_row() {
        $('#addition_div').append($('#temp_addition').html());
    }
</script>
@endpush
