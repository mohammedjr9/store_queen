@extends('merchant.layouts._main')

@section('title', 'فريق العمل')
@section('toolbar')
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{ 'جميع المنتجات' }}</h1>
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
        </div>
        <div class="card-toolbar">
            <a href="{{ route('workTeam.create') }}" class="btn btn-primary">{{ 'إضافة شخص جديد' }}</a>
        </div>
    </div>

    <div class="card-body pt-0">
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="products_table">
            <thead>
                <tr class="text-start text-gray-400 fw-bold fs-6 text-uppercase gs-0">
                    <th>{{ 'الرقم' }}</th>
                    <th>{{ 'الصورة' }}</th>
                    <th>{{ 'الاسم' }}</th>
                    <th>{{ 'المسمى الوظيفي' }}</th>
                    <th class="min-w-70px">إجراءات</th>
                </tr>
            </thead>

            <tbody class="fw-semibold text-gray-600">
                @foreach($work_team as $work_team)
                <tr>
                    <td>{{ $work_team->id }}</td>
                    <td>
                        @if($work_team->image)
                            <img src="{{ asset('storage/' . $work_team->image) }}" style="object-fit:contain"
                                 alt="{{ $work_team->name }}" width="50">
                        @else
                            <span>غير متوفر</span>
                        @endif
                    </td>
                    <td>{{ $work_team->name }}</td>
                    <td>{{ $work_team->job_title }}</td>

                    <td>
                        <a href="{{ route('workTeam.edit', $work_team->id) }}" class="btn btn-sm btn-primary">{{ 'تعديل' }}</a>
                        <form action="{{ route('workTeam.destroy', $work_team->id) }}" method="POST" style="display: inline-block;">
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
@endpush
