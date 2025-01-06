@extends('merchant.layouts._main')

@section('title', 'تعديل منتجاتنا')

@section('content')

<x-flash-error />
<form class="form d-flex flex-column flex-lg-row" action="{{ route('OurProduct.update', $our_products->id) }}"
    method="post" enctype="multipart/form-data">
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
                                <label class="required form-label">{{ 'المحتوى' }}</label>
                                <input type="text" name="content"
                                    class="form-control mb-2 @error('content') is-invalid @enderror"
                                    value="{{ old('content', $our_products->content) }}" />
                            </div>
                            <div class="mb-10 fv-row">
                                <label class="required form-label">{{ 'الوصف' }}</label>
                                <textarea class="form-control mb-2 @error('discription') is-invalid @enderror" rows="3"
                                    name="discription">{{ old('discription', $our_products->discription) }}</textarea>
                                <div class="text-muted fs-7">{{ 'قم بتحديد وصف لزيادة وضوح المنتج.' }}</div>
                            </div>
                            @error('discription')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror

                    </div>

                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end">
            <a href="javascript:history.back()" id="kt_cancel" class="btn btn-light me-5">{{ 'إلغاء' }}</a>
            <button type="submit" id="kt_submit" class="btn btn-primary">
                <span class="indicator-label">{{ 'حفظ التغييرات' }}</span>
                <span class="indicator-progress">{{ 'الرجاء الانتظار...' }}
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
