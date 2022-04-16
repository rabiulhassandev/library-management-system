
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ছদাহা ডিজিটাল লাইব্রেরি</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- BX BX Icon -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- Font CSS -->
    <link rel="stylesheet" href="{{ admin_asset('fonts/my-fonts/font.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ front_asset('css/style.css') }}">
</head>

<body>

    <!-- header end -->
    <header id="header_section" class="bg-white">
        <div class="top-bar mx-auto">
            <div class="row">
                <div class="col-md-3 pt-3">
                    <h5 class="text-primary"><b>ছদাহা <br> ডিজিটাল লাইব্রেরি</b></h5>
                </div>
                <div class="col-md-6 pt-3">
                    <form action="#" method="POST">
                        @csrf
                        <div class="d-flex justify-content-center">
                            <input type="text" class="form-control" placeholder="সার্চ করুন..." required>
                            <button class="default-btn">সাবমিট</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 py-3">
                    <div class="d-flex justify-content-lg-end justify-content-center">
                        <a href="/registration" class="default-outline-btn">রেজিষ্ট্রেশন</a>
                        <a href="/login" class="default-btn mx-1">লগইন</a>
                    </div>

                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ front_asset('images/logo.png') }}" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="mx-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">হোম</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/books">বই সমূহ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/acadamic-books">একাডেমিক বই</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about-us">আমাদের সম্পর্কে</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact-us">যোগাযোগ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- header end-->


    {{-- Slider Section --}}
    <section id="slider_section">
        <div class="container py-3">
            <div class="owl-carousel owl-theme" id="carousel-slider">
                <div class="item" style="background-image: url('https://ds.rokomari.store/rokomari110/banner/182fa3e6-9310-4f07-8ddd-48c823914cff.png')"></div>
                <div class="item" style="background-image: url('https://ds.rokomari.store/rokomari110/banner/62ca6f99-fad3-451c-8cdc-faebc30a05e4.png')"></div>
                <div class="item" style="background-image: url('https://ds.rokomari.store/rokomari110/banner/8b406570-2c1b-421e-97ef-bef868b9ce1a.png')"></div>
            </div>
        </div>
    </section>
    {{-- Slider Section --}}


    {{-- Recently Books Section --}}
    <section id="recent_books_section">
        <div class="container py-4">
            <div class="card shadow border-0" style="border-radius: 0px">
                <div class="card-body">
                    <div class="row pb-3">
                        <div class="col-md-6">
                            <h3 class="py-2 text-primary text-left m-0"><b>সম্প্রতি বইসমূহ</b></h3>
                        </div>
                        <div class="col-md-6">
                            <div class="text-end">
                                <button class="default-btn" id="recent-books-prev" style="min-width: 60px"><i class='bx bxs-chevron-left pt-2'></i></button>
                                <button class="default-btn" id="recent-books-next" style="min-width: 60px"><i class='bx bxs-chevron-right pt-2'></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel owl-theme" id="recent-books">
                        <div class="item">
                            <img src="https://s3-ap-southeast-1.amazonaws.com/rokomari110/ProductNew20190903/130X186/Podartho_Bichitra_Physics_1st_O_2nd_Part-Ajoy_Sarkar-910de-72178.png">
                            <p class="mb-1">সাহিত্য কলোনি</p>
                            <h6><b class="text-primary">৳ ৩০০</b></h6>
                            <button class="default-outline-btn  btn-sm w-100">বিস্তারিত</button>
                        </div>
                        <div class="item">
                            <img src="https://s3-ap-southeast-1.amazonaws.com/rokomari110/ProductNew20190903/130X186/130592359754_125858.jpg">
                            <p class="mb-1">সাহিত্য কলোনি</p>
                            <h6><b class="text-primary">৳ ৩০০</b></h6>
                            <button class="default-outline-btn  btn-sm w-100">বিস্তারিত</button>
                        </div>
                        <div class="item">
                            <img src="https://s3-ap-southeast-1.amazonaws.com/rokomari110/ProductNew20190903/130X186/Amii_Masud_Rana-Kazi_Anower_Hossain-345f5-230862.jpg">
                            <p class="mb-1">সাহিত্য কলোনি</p>
                            <h6><b class="text-primary">৳ ৩০০</b></h6>
                            <button class="default-outline-btn  btn-sm w-100">বিস্তারিত</button>
                        </div>
                        <div class="item">
                            <img src="https://s3-ap-southeast-1.amazonaws.com/rokomari110/ProductNew20190903/130X186/b016bcc55cc4_53626.jpg">
                            <p class="mb-1">সাহিত্য কলোনি</p>
                            <h6><b class="text-primary">৳ ৩০০</b></h6>
                            <button class="default-outline-btn  btn-sm w-100">বিস্তারিত</button>
                        </div>
                        <div class="item">
                            <img src="https://s3-ap-southeast-1.amazonaws.com/rokomari110/ProductNew20190903/130X186/96b48ca6a_4693.jpg">
                            <p class="mb-1">সাহিত্য কলোনি</p>
                            <h6><b class="text-primary">৳ ৩০০</b></h6>
                            <button class="default-outline-btn  btn-sm w-100">বিস্তারিত</button>
                        </div>
                        <div class="item">
                            <img src="https://s3-ap-southeast-1.amazonaws.com/rokomari110/ProductNew20190903/130X186/9875ca3f5_210700.jpg">
                            <p class="mb-1">সাহিত্য কলোনি</p>
                            <h6><b class="text-primary">৳ ৩০০</b></h6>
                            <button class="default-outline-btn  btn-sm w-100">বিস্তারিত</button>
                        </div>
                    </div>
                    <div class="pt-4 text-center">
                        <a href="/books" class="default-btn">সমস্ত বই দেখুন</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Recently Books Section --}}


    {{-- Categories Section --}}
    <section id="category_section">
        <div class="container py-4">
            <div class="card shadow border-0" style="border-radius: 0px">
                <div class="card-body">
                    <div class="row pb-3">
                        <div class="col-md-6">
                            <h3 class="py-2 text-primary text-left m-0"><b>ক্যাটাগরি সমূহ</b></h3>
                        </div>
                        <div class="col-md-6">
                            <div class="text-end">
                                <button class="default-btn" id="category-prev" style="min-width: 60px"><i class='bx bxs-chevron-left pt-2'></i></button>
                                <button class="default-btn" id="category-next" style="min-width: 60px"><i class='bx bxs-chevron-right pt-2'></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel owl-theme" id="categories">
                        <a href="#">
                            <div class="item">
                                <h5 class="m-0">ইসলামিক বই</h5>
                            </div>
                        </a>
                        <a href="#">
                            <div class="item">
                                <h5 class="m-0">তথ্য ও যোগাযোগ প্রযুক্তি</h5>
                            </div>
                        </a>
                    </div>
                    <div class="pt-4 text-center">
                        <a href="/categories" class="default-outline-btn">সমস্ত ক্যাটাগরি দেখুন</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Categories Section --}}


    {{-- Categories Section --}}
    <section id="member_section">
        <div class="container py-4">
            <div class="card shadow border-0" style="border-radius: 0px">
                <div class="card-body">
                    <div class="row pb-3">
                        <div class="col-md-6">
                            <h3 class="py-2 text-primary text-left m-0"><b>সদস্য সমূহ</b></h3>
                        </div>
                        <div class="col-md-6">
                            <div class="text-end">
                                <button class="default-btn" id="member-prev" style="min-width: 60px"><i class='bx bxs-chevron-left pt-2'></i></button>
                                <button class="default-btn" id="member-next" style="min-width: 60px"><i class='bx bxs-chevron-right pt-2'></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel owl-theme" id="members">
                        <div class="item">
                            <img src="https://sports-forum.com/wp-content/uploads/2019/11/Weston-Lowe-400-x-400.png">
                            <h4>সাইফুল ইসলাম</h4>
                            <h6 class="m-0 font-italic">সাধারণ সদস্য</h6>
                            <small class="m-0">sayfulislam@gmail.com</small><br>
                            <small class="m-0">০১৮৩২০২৯১৮২</small><br>
                            <small>সাতকানিয়া, চট্টগ্রাম</small>
                        </div>
                        <div class="item">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/LinkedIn_profil_maxime-remillard_400x400.png">
                            <h4>আশিকুল ইসলাম সাউন</h4>
                            <h6 class="m-0 font-italic">সিনিয়র সদস্য</h6>
                            <small class="m-0">ashikul@gmail.com</small><br>
                            <small class="m-0">০১৮৩২০২৯১৮২</small><br>
                            <small>সাতকানিয়া, চট্টগ্রাম, বাংলাদেশ</small>
                        </div>
                    </div>
                    <div class="pt-4 text-center">
                        <a href="/members" class="default-btn">সমস্ত দেখুন</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Categories Section --}}


    {{-- Contact Us Section --}}
    <section id="contact_us_section">
        <div class="container py-4">
            <div class="card shadow border-0" style="border-radius: 0px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="https://cdn.dribbble.com/users/2317423/screenshots/14013635/contact_us_4x.jpg" class="w-100">
                        </div>
                        <div class="col-md-8">
                            <form action="#" method="post">
                                @csrf
                                <div class="form-group pt-3">
                                    <label for="name"><b>নামঃ</b></label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="আপনার নাম লিখুন..." required>
                                </div>
                                <div class="form-group pt-3">
                                    <label for="subject"><b>বিষয়ঃ</b></label>
                                    <input type="text" name="subject" id="subject" class="form-control" placeholder="বিষয় লিখুন..." required>
                                </div>
                                <div class="form-group pt-3">
                                    <label for="description"><b>বিবরণঃ</b></label>
                                    <textarea name="description" id="description" class="form-control" style="min-height: 120px" placeholder="বিস্তারিত বিবরণ লিখুন..." required></textarea>
                                </div>
                                <div class="pt-3">
                                    <button class="default-btn">সাবমিট <i class='bx bx-save' ></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Contact Us Section --}}


    <!-- Start Footer Section -->
    <section id="footer_section" style="background-color: #ffffff;" class="mt-4">
        <div class="container py-5 text-white">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ front_asset('images/logo.png') }}" class="footer_logo">

                    <p class="text-secondary pt-3" style="text-align: justify;">
                        বিপুলসংখ্যক বইয়ের সংগ্রহশালা নিয়ে তৈরি ওয়েবসাইটই হলো অনলাইন লাইব্রেরি বা 'ই-লাইব্রেরি'। ডাউনলোড করে সংগ্রহ করারও সুযোগ করে দেয় এসব লাইব্রেরি। ডাউনলোড করা বইয়ের সফট কপি সাধারণত পিডিএফ, স্ক্যান ইমেজ এবং টেক্সট ফরমেটে থাকে। অনলাইনের বই প্রচলিত ভাষায় ইলেকট্রনিক বই কিংবা 'ই-বই' নামেও পরিচিত।
                    </p>
                    <div class="footer-social-icons">
                        <a href="#"><i class='bx bxl-facebook-circle px-2 text-white'></i></a>
                        <a href="#"><i class='bx bxl-twitter px-2 text-white'></i></a>
                        <a href="#"><i class='bx bxl-instagram px-2 text-white'></i></a>
                        <a href="#"><i class='bx bxl-youtube px-2 text-white'></i></a>
                    </div>
                </div>
                <div class="col-md-2 pt-2">
                    <h4 class="text-primary"><b>গরুত্বপূর্ণ লিংক</b></h4>
                    <div class="pt-3 list">
                        <a href="#" target="_blank">রকমারি.com</a>
                        <a href="#" target="_blank">বাংলাদেশ কম্পিউটার কাউন্সিল</a>
                        <a href="#" target="_blank">সি এন এস</a>
                        <a href="#" target="_blank">ছদাহা.com</a>
                        <a href="#" target="_blank">সাতকানিয়া উপজেলা</a>
                    </div>
                </div>
                <div class="col-md-2 pt-2">
                    <h4 class="text-primary"><b>পেইজ সমূহ</b></h4>
                    <div class="pt-3 list">
                        <a href="#" target="_blank">হোম</a>
                        <a href="#" target="_blank">আমমাদের সম্পর্কে</a>
                        <a href="#" target="_blank">বই সমূহ</a>
                        <a href="#" target="_blank">একাডেমিক বই</a>
                        <a href="#" target="_blank">যোগাযোগ</a>
                    </div>
                </div>
                <div class="col-md-3 pt-2">
                    <h4 class="text-primary"><b>ক্যাটাগরি</b></h4>
                    <div class="pt-3">
                        <a class="btn btn-outline-secondary btn-sm m-1">ইসলামিক বই</a>
                        <a class="btn btn-outline-secondary btn-sm m-1">ঐতিহাসিক বই</a>
                        <a class="btn btn-outline-secondary btn-sm m-1">সাহিত্যিক বই</a>
                        <a class="btn btn-outline-secondary btn-sm m-1">তথ্য ও যোগাযোগ প্রযুক্তি</a>
                        <a class="btn btn-outline-secondary btn-sm m-1">বিজ্ঞান</a>
                        <a class="btn btn-outline-secondary btn-sm m-1">হাদিস</a>
                        <a class="btn btn-outline-secondary btn-sm m-1">রচনা</a>
                        <a class="btn btn-outline-secondary btn-sm m-1">ভ্রমন</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 py-2" style="background-color: #c0bdbd;">
            <small class="m-0 text-center text-dark mx-auto d-block">Copyright 2022. All Right Reserved. Developed By <a href="#" class="text-primary">RABIUL HASSAN</a></small>
        </div>
    </section>
    <!-- End Footer Section -->


    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- WOW CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ front_asset('js/script.js') }}"></script>
</body>

</html>
