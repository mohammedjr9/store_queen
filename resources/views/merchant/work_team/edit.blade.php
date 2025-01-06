@extends('merchant.layouts._main')

@section('title', 'تعديل الشخص')

@section('content')

<x-flash-error />
<!--begin::Form-->
<form class="form d-flex flex-column flex-lg-row" action="{{ route('workTeam.update', $work_team->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <!--begin::Main column-->
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
                                <label class="required form-label">{{ 'الاسم' }}</label>
                                <input type="text" name="name" value="{{ old('name', $work_team->name) }}"
                                    class="form-control mb-2 @error('name') is-invalid @enderror" />
                            </div>
                            @error('name')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror

                            <div class="mb-10 fv-row">
                                <label class="required form-label">{{ 'المسمى الوظيفي' }}</label>
                                <input type="text" name="job_title" value="{{ old('job_title', $work_team->job_title) }}"
                                    class="form-control mb-2 @error('job_title') is-invalid @enderror" />
                            </div>
                            @error('job_title')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{ 'الوسائط' }}</h2>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="file" name="image" class="form-control">
                            @if ($work_team->image)
                                <img src="{{ asset('storage/' . $work_team->image) }}" alt="الصورة الحالية" height="50">
                            @endif
                        </div>
                    </div>

                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{ 'روابط وسائل التواصل الاجتماعي' }}</h2>
                            </div>
                        </div>

                        <div class="card-body pt-0">
                            <div class="mb-10 fv-row">
                                <label class="required form-label">{{ 'فيسبوك' }}</label>
                                <input type="text" name="facebook" value="{{ old('facebook', $work_team->facebook) }}"
                                    class="form-control mb-2 @error('facebook') is-invalid @enderror" />
                                @error('facebook')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-10 fv-row">
                                <label class="required form-label">{{ 'تويتر' }}</label>
                                <input type="text" name="twitter" value="{{ old('twitter', $work_team->twitter) }}"
                                    class="form-control mb-2 @error('twitter') is-invalid @enderror" />
                                @error('twitter')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-10 fv-row">
                                <label class="required form-label">{{ 'انستغرام' }}</label>
                                <input type="text" name="instagram" value="{{ old('instagram', $work_team->instagram) }}"
                                    class="form-control mb-2 @error('instagram') is-invalid @enderror" />
                                @error('instagram')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end">
            <a href="javascript:history.back()" id="kt_cancel" class="btn btn-light me-5">{{ 'إلغاء' }}</a>

            <button type="submit" id="kt_submit" class="btn btn-primary">
                <span class="indicator-label">{{ 'حفظ التعديلات' }}</span>
                <span class="indicator-progress">{{ 'يرجى الانتظار...' }}
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
