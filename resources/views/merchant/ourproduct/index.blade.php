@extends('merchant.layouts._main')

@section('title', 'منتجاتنا')
@section('toolbar')

<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{ 'منتجاتنا' }}</h1>
</div>
@endsection

@section('content')

<x-flash-message class="success" />

<div class="card card-flush">
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <div class="card-title">
            <div class="d-flex align-items-center position-relative my-1">
                <span class="svg-icon svg-icon-1 position-absolute ms-4">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                    </svg>
                </span>
                <input type="text" id="search" class="form-control form-control-solid w-250px ps-14 filter" placeholder="{{ 'بحث' }}" />
            </div>
        </div>
        <div class="card-toolbar">
            <a href="{{ route('OurProduct.create') }}" class="btn btn-primary">{{ 'إضافة سجل' }}</a>
        </div>
    </div>

    <div class="card-body pt-0">
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="product_table">
            <thead>
                <tr class="text-start text-gray-400 fw-bold fs-6 text-uppercase gs-0">
                    <th>{{ 'المعرف' }}</th>
                    <th>{{ 'المحتوى' }}</th>
                    <th>{{ 'الوصف' }}</th>
                    <th class="min-w-70px">{{ 'الإجراءات' }}</th>
                </tr>
            </thead>

            <tbody class="fw-semibold text-gray-600">
                @foreach($our_products as $our_products)
                <tr>
                    <td>{{ $our_products->id }}</td>
                    <td>{{ Str::limit($our_products->content, 40) }}</td>
                    <td>{{ Str::limit($our_products->discription, 40) }}</td>
                    <td>
                        <a href="{{ route('OurProduct.edit', $our_products->id) }}" class="btn btn-sm btn-primary">{{ 'تعديل' }}</a>
                        <form action="{{ route('OurProduct.destroy', $our_products->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">{{ 'حذف' }}</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@push('scripts')
<!-- إضافة أي سكربتات إضافية هنا -->
@endpush
