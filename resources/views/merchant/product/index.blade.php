@extends('merchant.layouts._main')

@section('title', 'المنتجات')
@section('toolbar')

<!--begin::Page title-->
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
    <!--begin::Title-->
    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{ 'جميع المنتجات' }}</h1>
    <!--end::Title-->
</div>
<!--end::Page title-->
@endsection

@section('content')

<x-flash-message class="success" />

<!--begin::Products-->
<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                <span class="svg-icon svg-icon-1 position-absolute ms-4">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                              transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                        <path
                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                              fill="currentColor" />
                    </svg>
                </span>
                <input type="text" id="search" class="form-control form-control-solid w-250px ps-14 filter"
                       placeholder="{{ 'بحث' }}" />
            </div>
            <!--end::Search-->
        </div>
        <!--begin::Add Product Button-->
        <div class="card-toolbar">
            <a href="{{ route('products.create') }}" class="btn btn-primary">{{ 'إضافة منتج' }}</a>
        </div>
        <!--end::Add Product Button-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="products_table">
            <!--begin::Table head-->
            <thead>
                <!--begin::Table row-->
                <tr class="text-start text-gray-400 fw-bold fs-6 text-uppercase gs-0">
                    <th>{{ 'المعرف' }}</th>
                    <th>{{ 'الصورة' }}</th>
                    <th>{{ 'الاسم' }}</th>
                    <th>{{ 'الوصف' }}</th>
                    <th>{{ 'السعر' }}</th>
                    <th>{{ 'النقاط' }}</th>
                    <th>{{ 'تاريخ الإنشاء' }}</th>
                    <th class="min-w-70px">الإجراءات</th>
                </tr>
                <!--end::Table row-->
            </thead>
            <!--end::Table head-->

            <!--begin::Table body-->
            <tbody class="fw-semibold text-gray-600">
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" style="object-fit:contain"
                                 alt="{{ $product->name }}" width="50">
                        @else
                            <span>غير متوفر</span>
                        @endif
                    </td>
                    <td>{{ $product->name }}</td>
                    <td>{{ Str::limit($product->description, 60) }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->points }}</td>
                    <td>{{ $product->created_at ? $product->created_at->format('Y-m-d') : 'غير متوفر' }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary">{{ 'تعديل' }}</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">{{ 'حذف' }}</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <!--end::Table body-->
        </table>
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Products-->

@endsection

@push('scripts')
<!-- Add any additional scripts here -->
@endpush
