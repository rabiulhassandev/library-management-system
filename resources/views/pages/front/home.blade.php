<x-front-layout>


    {{-- Slider Section --}}
    @isset($collection['sliders'])
    @if (count($collection['sliders']) == 0)
    <section id="slider_section">
        <div class="container py-3">
            <div class="owl-carousel owl-theme" id="carousel-slider">
                <div class="item" style="background-image: url('https://ds.rokomari.store/rokomari110/banner/182fa3e6-9310-4f07-8ddd-48c823914cff.png')"></div>
                <div class="item" style="background-image: url('https://ds.rokomari.store/rokomari110/banner/62ca6f99-fad3-451c-8cdc-faebc30a05e4.png')"></div>
                <div class="item" style="background-image: url('https://ds.rokomari.store/rokomari110/banner/8b406570-2c1b-421e-97ef-bef868b9ce1a.png')"></div>
            </div>
        </div>
    </section>
    @endif
    @endisset
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
    <x-front.pages.contact-us/>
    {{-- Contact Us Section --}}


</x-front-layout>
