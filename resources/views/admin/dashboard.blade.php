@extends('admin.layouts._main')
@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-xl-3">
        <!--begin::Stats Widget 25-->
        <div class="card card-custom bg-light-success card-stretch gutter-b">
            <!--begin::Body-->
            <div class="card-body">
                <span class="svg-icon svg-icon-2x svg-icon-success">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <path
                                d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z"
                                fill="#000000" opacity="0.3"></path>
                            <path
                                d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z"
                                fill="#000000"></path>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
                <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">$5,209</span>
                <span class="font-weight-bold text-muted font-size-sm">SAP UI Progress</span>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Stats Widget 25-->
    </div>
    <div class="col-xl-3">
        <!--begin::Stats Widget 26-->
        <div class="card card-custom bg-light-danger card-stretch gutter-b">
            <!--begin::ody-->
            <div class="card-body">
                <span class="svg-icon svg-icon-2x svg-icon-danger">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                            <path
                                d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                            <path
                                d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero"></path>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
                <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">2,044</span>
                <span class="font-weight-bold text-muted font-size-sm">New Customers</span>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Stats Widget 26-->
    </div>
    <div class="col-xl-3">
        <!--begin::Stats Widget 27-->
        <div class="card card-custom bg-light-info card-stretch gutter-b">
            <!--begin::Body-->
            <div class="card-body">
                <span class="svg-icon svg-icon-2x svg-icon-info">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect>
                            <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"></rect>
                            <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"></rect>
                            <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"></rect>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
                <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">$50,000</span>
                <span class="font-weight-bold text-muted font-size-sm">Milestone Reached</span>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Stats Widget 27-->
    </div>
    <div class="col-xl-3">
        <!--begin::Stats Widget 28-->
        <div class="card card-custom bg-light-warning card-stretch gutter-b">
            <!--begin::Body-->
            <div class="card-body">
                <span class="svg-icon svg-icon-2x svg-icon-warning">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <path
                                d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                fill="#000000"></path>
                            <path
                                d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                fill="#000000" opacity="0.3"></path>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
                <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">23,508</span>
                <span class="font-weight-bold text-muted font-size-sm">23,508</span>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Stat: Widget 28-->
    </div>
</div>
<div class="row">
    <div class="col-xl-8">
        <!--begin::Charts Widget 6-->
<div class="card card-custom card-stretch gutter-b">
    <!--begin::Header-->
    <div class="card-header h-auto border-0">
        <div class="card-title py-5">
            <h3 class="card-label">
                <span class="d-block text-dark font-weight-bolder">Recent Orders</span>
                <span class="d-block text-muted mt-2 font-size-sm">More than 500+ new orders</span>
			</h3>
        </div>
        <div class="card-toolbar">
            <span class="mr-5 d-flex align-items-center font-weight-bold">
                <i class="label label-dot label-xl label-primary mr-2"></i> Sales
            </span>
            <span class="d-flex align-items-center font-weight-bold">
                <i class="label label-dot label-xl label-info mr-2"></i> Authors
            </span>
        </div>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body">
        <div class="row">
            <div class="col-4 d-flex flex-column">
                <!--begin::Block-->
                <div class="bg-light-warning p-8 rounded-xl flex-grow-1">
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-5">
                        <div class="symbol symbol-circle symbol-white symbol-30 flex-shrink-0 mr-3">
                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-danger"><!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Shopping/Cart3.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" fill="#000000"/>
    </g>
</svg><!--end::Svg Icon--></span>                            </div>
                        </div>
                        <div>
                            <div class="font-size-sm font-weight-bold">$2800</div>
                            <div class="font-size-sm text-muted">Weekly CoreAd Sales</div>
                        </div>
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-5">
                        <div class="symbol symbol-circle symbol-white symbol-30 flex-shrink-0 mr-3">
                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-info"><!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Home/Library.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"/>
        <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1"/>
    </g>
</svg><!--end::Svg Icon--></span>                            </div>
                        </div>
                        <div>
                            <div class="font-size-sm font-weight-bold">490</div>
                            <div class="font-size-sm text-muted">Manuals Added</div>
                        </div>
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-5">
                        <div class="symbol symbol-circle symbol-white symbol-30 flex-shrink-0 mr-3">
                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-warning"><!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Flip-vertical.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M9.07117914,12.5710461 L13.8326627,12.5710461 C14.108805,12.5710461 14.3326627,12.3471885 14.3326627,12.0710461 L14.3326627,0.16733734 C14.3326627,-0.108805035 14.108805,-0.33266266 13.8326627,-0.33266266 C13.6282104,-0.33266266 13.444356,-0.208187188 13.3684243,-0.0183579985 L8.6069408,11.8853508 C8.50438409,12.1417426 8.62909204,12.4327278 8.8854838,12.5352845 C8.94454394,12.5589085 9.00756943,12.5710461 9.07117914,12.5710461 Z" fill="#000000" opacity="0.3" transform="translate(11.451854, 6.119192) rotate(-270.000000) translate(-11.451854, -6.119192) "/>
        <path d="M9.23851648,24.5 L14,24.5 C14.2761424,24.5 14.5,24.2761424 14.5,24 L14.5,12.0962912 C14.5,11.8201488 14.2761424,11.5962912 14,11.5962912 C13.7955477,11.5962912 13.6116933,11.7207667 13.5357617,11.9105959 L8.77427814,23.8143047 C8.67172143,24.0706964 8.79642938,24.3616816 9.05282114,24.4642383 C9.11188128,24.4878624 9.17490677,24.5 9.23851648,24.5 Z" fill="#000000" transform="translate(11.500000, 18.000000) scale(1, -1) rotate(-270.000000) translate(-11.500000, -18.000000) "/>
        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="11" y="2" width="2" height="20" rx="1"/>
    </g>
</svg><!--end::Svg Icon--></span>                            </div>
                        </div>
                        <div>
                            <div class="font-size-sm font-weight-bold">34,300</div>
                            <div class="font-size-sm text-muted">Emails Received</div>
                        </div>
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-5">
                        <div class="symbol symbol-circle symbol-white symbol-30 flex-shrink-0 mr-3">
                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-success"><!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Home/Cupboard.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M3.5,3 L9.5,3 C10.3284271,3 11,3.67157288 11,4.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L3.5,20 C2.67157288,20 2,19.3284271 2,18.5 L2,4.5 C2,3.67157288 2.67157288,3 3.5,3 Z M9,9 C8.44771525,9 8,9.44771525 8,10 L8,12 C8,12.5522847 8.44771525,13 9,13 C9.55228475,13 10,12.5522847 10,12 L10,10 C10,9.44771525 9.55228475,9 9,9 Z" fill="#000000" opacity="0.3"/>
        <path d="M14.5,3 L20.5,3 C21.3284271,3 22,3.67157288 22,4.5 L22,18.5 C22,19.3284271 21.3284271,20 20.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,4.5 C13,3.67157288 13.6715729,3 14.5,3 Z M20,9 C19.4477153,9 19,9.44771525 19,10 L19,12 C19,12.5522847 19.4477153,13 20,13 C20.5522847,13 21,12.5522847 21,12 L21,10 C21,9.44771525 20.5522847,9 20,9 Z" fill="#000000" transform="translate(17.500000, 11.500000) scale(-1, 1) translate(-17.500000, -11.500000) "/>
    </g>
</svg><!--end::Svg Icon--></span>                            </div>
                        </div>
                        <div>
                            <div class="font-size-sm font-weight-bold">550</div>
                            <div class="font-size-sm text-muted">Meetups Completed</div>
                        </div>
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-5">
                        <div class="symbol symbol-circle symbol-white symbol-30 flex-shrink-0 mr-3">
                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Media/Equalizer.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"/>
        <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"/>
        <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"/>
        <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"/>
    </g>
</svg><!--end::Svg Icon--></span>                            </div>
                        </div>
                        <div>
                            <div class="font-size-sm font-weight-bold">$346,000</div>
                            <div class="font-size-sm text-muted">Total Author Sales</div>
                        </div>
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="d-flex align-items-center">
                        <div class="symbol symbol-circle symbol-white symbol-30 flex-shrink-0 mr-3">
                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-danger"><!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Shopping/Pound.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M7.825,10.225 C7.2,9.475 6.85,8.4 6.85,7.375 C6.85,4.55 9.15,2.05 12.35,2.05 C15.45,2.05 17.8,4.45 17.875,7.425 L15.075,7.425 C15.075,5.85 13.975,4.6 12.35,4.6 C10.75,4.6 9.6,5.775 9.6,7.375 C9.6,8.26626781 10.0162926,9.06146809 10.6676674,9.58392078 C10.7130614,9.62033024 10.7238389,12.2340233 10.7,17.425 L17.5444449,17.425 C17.8205873,17.425 18.0444449,17.6488576 18.0444449,17.925 C18.0444449,17.9869142 18.0329457,18.0482899 18.0105321,18.1060047 L17.3988817,19.6810047 C17.3242018,19.8733052 17.1390868,20 16.9327944,20 L6.3,20 C6.02385763,20 5.8,19.7761424 5.8,19.5 L5.8,17.925 C5.8,17.6488576 6.02385763,17.425 6.3,17.425 L7.925,17.425 L7.925,12.475 L7.825,10.225 Z" fill="#000000"/>
        <path d="M4.3618034,11.2763932 L4.8618034,10.2763932 C4.94649941,10.1070012 5.11963097,10 5.30901699,10 L15.190983,10 C15.4671254,10 15.690983,10.2238576 15.690983,10.5 C15.690983,10.5776225 15.6729105,10.6541791 15.6381966,10.7236068 L15.1381966,11.7236068 C15.0535006,11.8929988 14.880369,12 14.690983,12 L4.80901699,12 C4.53287462,12 4.30901699,11.7761424 4.30901699,11.5 C4.30901699,11.4223775 4.32708954,11.3458209 4.3618034,11.2763932 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>                            </div>
                        </div>
                        <div>
                            <div class="font-size-sm font-weight-bold">560</div>
                            <div class="font-size-sm text-muted">Total Transactions</div>
                        </div>
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Block-->
            </div>
            <div class="col-8">
                <div id="kt_charts_widget_6_chart"></div>
            </div>
        </div>
    </div>
    <!--end::Body-->
</div>
<!--end::Charts Widget 6-->
    </div>

    <div class="col-xl-4">
        <!--begin::List Widget 7-->
        <div class="card card-custom card-stretch gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0">
                <h3 class="card-title font-weight-bolder text-dark">{{t('Stores')}}</h3>

            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body pt-0">
                @foreach ($merchants as $merchant)
                    <!--begin::Item-->
                    <div class="d-flex align-items-center flex-wrap mb-8">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50 symbol-light mr-5">
                            <span class="symbol-label">
                                <img src="{{$merchant->image_path}}"
                                    class="h-50 align-self-center" alt="">
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Text-->
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">{{$merchant->name}}</a>
                            <span class="text-muted font-weight-bold">{{$merchant->typeMerchant->name}}</span>
                        </div>
                        <!--end::Text-->
                        <span
                            class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+82$</span>
                    </div>
                    <!--end::Item-->
                @endforeach


                <!--begin::Item-->
                <div class="d-flex align-items-center flex-wrap mb-8">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-50 symbol-light mr-5">
                        <span class="symbol-label">
                            <img src="/metronic/theme/html/demo1/dist/assets/media/svg/misc/015-telegram.svg"
                                class="h-50 align-self-center" alt="">
                        </span>
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Text-->
                    <div class="d-flex flex-column flex-grow-1 mr-2 my-2">
                        <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Popular
                            Authors</a>
                        <span class="text-muted font-weight-bold">Randy, Steve, Mike</span>
                    </div>
                    <!--end::Text-->

                    <span
                        class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+280$</span>
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex align-items-center flex-wrap mb-8">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-50 symbol-light mr-5">
                        <span class="symbol-label">
                            <img src="/metronic/theme/html/demo1/dist/assets/media/svg/misc/003-puzzle.svg"
                                class="h-50 align-self-center" alt="">
                        </span>
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Text-->
                    <div class="d-flex flex-column flex-grow-1 mr-2 my-2">
                        <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">New Users</a>
                        <span class="text-muted font-weight-bold">John, Pat, Jimmy</span>
                    </div>
                    <!--end::Text-->

                    <span
                        class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+4500$</span>
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex align-items-center flex-wrap mb-8">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-50 symbol-light mr-5">
                        <span class="symbol-label">
                            <img src="/metronic/theme/html/demo1/dist/assets/media/svg/misc/005-bebo.svg"
                                class="h-50 align-self-center" alt="">
                        </span>
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Text-->
                    <div class="d-flex flex-column flex-grow-1 mr-2 my-2">
                        <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Active
                            Customers</a>
                        <span class="text-muted font-weight-bold">Sandra, Tim, Louis</span>
                    </div>
                    <!--end::Text-->

                    <span
                        class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+4500$</span>
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex align-items-center flex-wrap">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-50 symbol-light mr-5">
                        <span class="symbol-label">
                            <img src="/metronic/theme/html/demo1/dist/assets/media/svg/misc/014-kickstarter.svg"
                                class="h-50 align-self-center" alt="">
                        </span>
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Text-->
                    <div class="d-flex flex-column flex-grow-1 mr-2 my-2">
                        <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Bestseller
                            Theme</a>
                        <span class="text-muted font-weight-bold">Disco, Retro, Sports</span>
                    </div>
                    <!--end::Text-->

                    <span
                        class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+4500$</span>
                </div>
                <!--end::Item-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::List Widget 7-->
    </div>
</div>
@endsection

@push('scripts')
<script>
  (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
    key: "AIzaSyCEz55gx1MPUmNOurWXibdbAdN6Ypd74C0",
    v: "weekly",
    // Use the 'v' parameter to indicate the version to use (weekly, beta, alpha, etc.).
    // Add other bootstrap parameters as needed, using camel case.
  });
</script>
@endpush
