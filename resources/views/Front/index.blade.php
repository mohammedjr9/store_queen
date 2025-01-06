<!DOCTYPE html>
<html lang="ar" dir="rtl">

@include('Front.layouts.header')
 <style>

img.img-fluid {
    width: 100%;
    height: auto;
    object-fit: cover;
    max-height: 250px;
}


 </style>
<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
   @include('Front.layouts.nav')
        <!-- Header End -->


        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="img/best-friends-being-happy-after-shopping-spree_23-2148650459.avif">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">كوني
                                    متألقة دائما</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">كوني ملكة مع متجر Queen Store
                                </h1>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">عضوية
                                    جديدة</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">الحصول على
                                    النقاط</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100"
                            src="img/collection-cosmetic-beauty-products-white-backdrop_23-2147878830.avif" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">منتجات
                                    العناية بمكان واحد</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">يوفر لك متجر Queen Store جميع
                                    منتجات العناية</h1>
                                <a href=""
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">منتجاتنا</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">الاقسام
                                    الرىيسية</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Booking Start -->
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">

            </div>
        </div>
        <!-- Booking End -->


        <!-- About Start -->
        <div class="container-xxl py-5" id="about">
            <div class="container">
                @if($about)

                <div class="row g-5 align-items-center">

                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">{{ $about->title }}</h6>
                        <h1 class="mb-4">{{ $about->subtitle }}<span class="text-primary text-uppercase">{{
                                $about->store_name }}</span>
                        </h1>
                        <p class="mb-4">
                            {{ $about->description }}
                        </p>
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">{{$about->products}}</h2>
                                        <p class="mb-0">المنتجات</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">{{ $about->custumers}}</h2>
                                        <p class="mb-0">الزبائن</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">{{ $about->orders}}</h2>
                                        <p class="mb-0">طلبيات</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<a class="btn btn-primary py-3 px-5 mt-2" href="">Explore More</a>-->
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s"
                                    src="{{ asset('storage/' . $about->image1) }}" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s"
                                    src="{{ asset('storage/' . $about->image2) }}">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s"
                                    src="{{ asset('storage/' . $about->image3) }}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s"
                                    src="{{ asset('storage/' . $about->image4) }}">
                            </div>
                        </div>
                    </div>

                </div>
                @endif

            </div>
        </div>
        <!-- About End -->


        <!-- Room Start -->
        <div class="container-xxl py-5" id = "ourproduct">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">خدماتنــا</h6>
                    <h1 class="mb-5">تسوق بأمان من <span class="text-primary text-uppercase">منتجاتنا</span></h1>
                </div>

                <div class="row g-4">
                    @foreach ($products as $product)

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ asset('storage/' . $product->image) }}"
                                    style="object-fit:fill" alt="">
                                <small
                                    class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">{{
                                    $product->price }}شكيل
                                </small>
                            </div>

                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">{{ $product->name }}</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>

                                <p class="text-body mb-3">{{ $product->description }}
                                </p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{ route('Home.ProductDetails', ['product_id' => $product->id]) }}">تفاصيل المنتج</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">شراء الان</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
    </div>
    <!-- Room End -->
    <!-- Video Start -->
    <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s" id = "pot">
        <div class="row g-0">
            <div class="col-md-6 bg-dark d-flex align-items-center">
                <div class="p-5">
                    <h6 class="section-title text-start text-white text-uppercase mb-3">كوني ملكة مع متجرنا</h6>
                    <h1 class="text-white mb-4">قسم البودكاست والتسجيلات</h1>
                    <p class="text-white mb-4">
                        المدربة المعتمدة سليمة عبدالهادي شماسنة تقدم دورات في مجال تطوير الذات.
                        مدربة معتمدة مستوى ثاني / فلسطين / جلوبال كندا سنتر.
                    </p>
                    <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3">معرفة المزيد</a>
                    <a href="#" class="btn btn-light py-md-3 px-md-5" data-bs-toggle="modal"
                        data-bs-target="#videoModal">مشاهدة الفيديو</a>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="video" style="width: 100%; height: 500px; overflow: hidden;">
                    @if($video)
                    <video width="100%" height="100%" controls style="border-radius: 10px; object-fit: contain;">
                        <source src="{{ asset('storage/' . $video->video_path) }}" type="video/mp4">
                        المتصفح الخاص بك لا يدعم تشغيل الفيديو.
                    </video>
                    @else
                    <p class="text-white">لا يوجد فيديو متاح حاليًا.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Video End -->



    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">منتجــاتنا</h6>
                <h1 class="mb-5">اكتشفي سر نجاح <span class="text-primary text-uppercase">منتجاتنا</span></h1>
            </div>
            <div class="row g-4">
                @foreach ( $our_products as $our_products )

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <a class="service-item rounded" href="">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">{{ $our_products->content }}</h5>
                        <p class="text-body mb-0"> {{ $our_products->discription }}
                        </p>
                    </a>
                </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- Service End -->



    <!-- Testimonial End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">فريق العمل</h6>
                <h1 class="mb-5">تعرف على فريق العمل لدى <span class="text-primary text-uppercase">Queen Store</span></h1>
            </div>
            <div class="row g-4">
                @foreach ($work_team as $work_team)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded shadow overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('storage/' . $work_team->image) }}" alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <a class="btn btn-square btn-primary mx-1" href="{{ $work_team->facebook }}" target="_blank" aria-label="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-square btn-primary mx-1" href="{{ $work_team->twitter }}" target="_blank" aria-label="Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="btn btn-square btn-primary mx-1" href="{{ $work_team->instagram }}" target="_blank" aria-label="Instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">{{ $work_team->name }}</h5>
                            <small>{{ $work_team->job_title }}</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
    <!-- Team End -->


    <!-- Newsletter Start -->
    <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="row justify-content-center">
            <div class="col-lg-10 border rounded p-1">
                <div class="border rounded text-center p-1">
                    <div class="bg-white rounded text-center p-5">
                        <h4 class="mb-4">احصلي على اخر الاخبار و <span
                                class="text-primary text-uppercase">الخصومات</span></h4>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="">
                            <button type="button"
                                class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">اشترك</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Start -->


    @include('Front.layouts.Footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('lib/jquery/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
