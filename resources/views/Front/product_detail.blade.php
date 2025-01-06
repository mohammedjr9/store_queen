<!DOCTYPE html>
<html lang="ar" dir="rtl">

@include('Front.layouts.header')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تفاصيل المنتج</title>

    <style>
        /* لجعل الصفحة تأخذ كامل الارتفاع */
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        /* الحاوية الرئيسية */
        .container-xxl {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* الحاوية الرئيسية للمحتوى */
        .content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        /* إضافة div فاضي لدفع الفوتر للأسفل */
        .spacer {
    height: 100px; /* يمكنك تعديل الارتفاع حسب الحاجة */
}
        /* تنسيق المنتج */
        .product-container {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            margin: 30px 0;
        }

        .product-image {
            max-width: 40%;
            margin-left: 20px;
        }

        .product-image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .product-info {
    flex: 1;
    margin-top: 100px;
    margin-right: 180px; /* يمكنك تعديل القيمة لتتناسب مع التصميم */
    /* يمكنك تعديل القيمة لتتناسب مع التصميم */
}

        .product-name {
            font-size: 32px;
            margin-bottom: 10px;
            color: #333;
        }

        .product-price {
            font-size: 28px;
            color: #e74c3c;
            margin-bottom: 20px;
        }

        .product-description {
            font-size: 18px;
            line-height: 1.6;
            color: #555;
            margin-bottom: 30px;
        }

        .buy-btn {
            background-color: #3498db;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        .buy-btn:hover {
            background-color: #2980b9;
        }

        /* الفوتر */
        footer {
            background-color: #001f3f;
            color: white;
            padding: 20px 0;
            text-align: center;
            width: 100%;
            flex-shrink: 0;
        }
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">

        <!-- Header Start -->
        @include('Front.layouts.nav')
        <!-- Header End -->

        <!-- المحتوى الرئيسي -->
        <div class="content container">
            <div class="product-container">
                <div class="product-info">
                    <h1 class="product-name">{{ $product->name }}</h1>
                    <p class="product-price">{{ $product->price }} شيكل</p>
                    <p class="product-description">
                        {{$product->description}}
                    </p>
                    <button class="buy-btn">شراء الآن</button>
                </div>
                <div class="product-image">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="صورة المنتج">
                </div>
            </div>
        </div>

        <!-- Div فاضي لدفع الفوتر للأسفل -->
        <div class="spacer"></div>

        <!-- الفوتر -->
    <!-- Footer Start -->
    <footer>
        <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4"></div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Company</h6>
                                <a class="btn btn-link" href="">About Us</a>
                                <a class="btn btn-link" href="">Contact Us</a>
                                <a class="btn btn-link" href="">Privacy Policy</a>
                                <a class="btn btn-link" href="">Terms & Condition</a>
                                <a class="btn btn-link" href="">Support</a>
                            </div>
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Services</h6>
                                <a class="btn btn-link" href="">Food & Restaurant</a>
                                <a class="btn btn-link" href="">Spa & Fitness</a>
                                <a class="btn btn-link" href="">Sports & Gaming</a>
                                <a class="btn btn-link" href="">Event & Party</a>
                                <a class="btn btn-link" href="">GYM & Yoga</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                            Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a class="border-bottom" href="https://themewagon.com"
                                target="_blank">ThemeWagon</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

        <!-- Back to Top -->
        {{-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> --}}
    </div>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('lib/jquery/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
