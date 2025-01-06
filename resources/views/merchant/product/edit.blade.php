@extends('merchant.layouts._main')

@section('title', 'تعديل المنتج')

@section('content')

<x-flash-error />
<!--begin::Form-->
<form id="kt_form" class="form d-flex flex-column flex-lg-row" action="{{ route('products.update', $product->id) }}"
    method="post" enctype="multipart/form-data">
    @method('put')
    @csrf

    <!--begin::Main column-->
    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
        <!--begin:::Tabs-->
        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
            <!--begin:::Tab item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                    href="#kt_general">{{'عام'}}</a>
            </li>
            <!--end:::Tab item-->
            <!--begin:::Tab item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                    href="#kt_additions">{{'الإضافات'}}</a>
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
                                <h2>{{'عام'}}</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">{{'اسم المنتج'}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="name"
                                    class="form-control mb-2 @error('name') is-invalid @enderror"
                                    value="{{ old('name', $product->name) }}" />
                                <!--end::Input-->
                            </div>
                            @error('name')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                            <!--end::Input group-->

                            <!--begin::Input group for description-->
                            <div>
                                <label class="form-label">{{'الوصف'}}</label>
                                <textarea class="form-control mb-2 @error('description') is-invalid @enderror" rows="3"
                                    name="description">{{$product->description}}</textarea>
                                <div class="text-muted fs-7">{{'قم بتعيين وصف للمنتج لزيادة الظهور.'}}</div>
                            </div>
                            @error('description')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                            <!--end::Input group-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::General options-->

                    <!--begin::Image Upload-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{'الصورة'}}</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="form-label">{{'صورة المنتج'}}</label>
                                <!--end::Label-->
                                <!--begin::Image Display-->
                                @if($product->image)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="الصورة الحالية"
                                        width="150" />
                                </div>
                                @endif
                                <!--end::Image Display-->
                                <!--begin::Input-->
                                <input type="file" name="image" accept="image/*"
                                    class="form-control @error('image') is-invalid @enderror">
                                <!--end::Input-->
                                <div class="text-muted fs-7">{{'قم بتحميل صورة جديدة إذا كنت ترغب في تغيير الحالية.'}}</div>
                            </div>
                            @error('image')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Image Upload-->

                    <!--begin::Pricing-->
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
                                    class="form-control mb-2 @error('offer_price') is-invalid @enderror"
                                    value="{{ $product->price }}" />
                                @error('offer_price')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">{{'النقاط'}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="number" name="points"
                                    class="form-control mb-2" value="{{ $product->points }}" />
                                <!--end::Input-->
                            </div>
                        </div>
                    </div>
                    <!--end::Pricing-->
                </div>
            </div>
            <!--end::Tab pane-->

            <!--begin::Tab pane-->
            <div class="tab-pane fade" id="kt_additions" role="tab-panel">
                <div class="d-flex flex-column gap-7 gap-lg-10">
                    <!--begin::Inventory-->
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{'الإضافات'}}</h2>
                            </div>
                        </div>
                        <div class="card-body pt-2">
                            <div class="form-group row" id="addition_div"></div>
                            <div class="form-group mt-5">
                                <button type="button" class="btn btn-sm btn-light-primary" onclick="create_new_row()">
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1"
                                                transform="rotate(-90 11 18)" fill="currentColor"></rect>
                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor"></rect>
                                        </svg>
                                    </span>{{'إضافة إضافة أخرى'}}
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--end::Inventory-->
                </div>
            </div>
            <!--end::Tab pane-->
        </div>
        <!--end::Tab content-->

        <div class="d-flex justify-content-end">
            <!--begin::Button-->
            <a href="javascript:history.back()" id="kt_cancel" class="btn btn-light me-5">{{ 'إلغاء' }}</a>
            <!--end::Button--> <button type="submit" id="kt_submit" class="btn btn-primary">
                <span class="indicator-label">{{'حفظ التغييرات'}}</span>
                <span class="indicator-progress">{{'يرجى الانتظار...'}}
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>
    </div>
    <!--end::Main column-->
</form>
<!--end::Form-->

@endsection

@push('scripts')
<script>
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
