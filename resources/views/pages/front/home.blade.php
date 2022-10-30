<x-front-layout>


    {{-- Slider Section --}}
    @isset($collection['sliders'])
    @if (count($collection['sliders']) > 0)
    <section id="slider_section">
        <div class="container pt-3">
            <div class="owl-carousel owl-theme" id="carousel-slider">
                @foreach ($collection['sliders'] as $slider)
                    <div class="item overflow-hidden">
                        <img src="{{ image_url($slider->image) }}" class="w-100">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
    @endisset
    {{-- Slider Section --}}

    <div class="py-1 pt-2">
        <marquee behavior="" direction="left">শীঘ্রই শুভ উদ্বোধন হতে যাচ্ছে  ভিলেজ কমিউনিটি পর্যায়ে দেশের প্রথম ডিজিটাল লাইব্রেরি "ছদাহা ডিজিটাল লাইব্রেরি"</marquee>
    </div>

    {{-- Recently Books Section --}}
    @isset($collection['books'])
    @if (count($collection['books']) > 0)
    <section id="recent_books_section">
        <div class="container pb-4">
            <div class="card shadow border-0" style="border-radius: 0px">
                <div class="card-body">
                    <div class="row pb-3">
                        <div class="col-md-6">
                            <h3 class="py-2 text-primary text-left m-0"><b>নতুন যুক্ত বইসমূহ</b></h3>
                        </div>
                        <div class="col-md-6">
                            <div class="text-end">
                                <button class="default-btn" id="recent-books-prev" style="min-width: 60px"><i class='bx bxs-chevron-left pt-2'></i></button>
                                <button class="default-btn" id="recent-books-next" style="min-width: 60px"><i class='bx bxs-chevron-right pt-2'></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel owl-theme" id="recent-books">
                        @foreach ($collection['books'] as $book)
                        <div class="item">
                            <img src="{{ image_url($book->book_image) }}">
                            <p class="mb-1">{{ $book->book_name }}</p>
                            <h6><b class="text-primary">৳ {{ $book->book_price }}</b></h6>
                            <a href="{{ route('home.book-details', $book->id) }}" class="default-outline-btn  btn-sm w-100">বিস্তারিত</a>
                        </div>
                        @endforeach
                    </div>
                    <div class="pt-4 text-center">
                        <a href="{{ route('home.books') }}" class="default-btn">সমস্ত বই দেখুন</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    @endisset
    {{-- Recently Books Section --}}


    {{-- Categories Section --}}
    @isset($collection['categories'])
    @if (count($collection['categories']) > 0)
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
                        @foreach ($collection['categories'] as $category)
                        <a href="{{ route('home.category-book', $category->id) }}">
                            <div class="item">
                                <h5 class="m-0">{{ $category->category_name }}</h5>
                            </div>
                        </a>
                        @endforeach
                    </div>
                    <div class="pt-4 text-center">
                        <a href="{{ route('home.categories') }}" class="default-outline-btn">সমস্ত ক্যাটাগরি দেখুন</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    @endisset
    {{-- Categories Section --}}


    {{-- Profiles Section --}}
    @isset($collection['profiles'])
    @if (count($collection['profiles']) > 0)
    <section id="member_section">
        <div class="container pb-5">
            <div class="card shadow border-0 pb-4" style="border-radius: 0px">
                <div class="card-body">
                    <div class="pt-2 pb-5 text-center">
                        <h3 class="text-primary"><b>বইবন্ধু</b></h3>
                        <p class="m-0">ঘরে ঘরে বই পৌঁছে দিতে বইবন্ধু আছে আপনার পাশে। দ্রুত বই পেতে আবেদন করে কল করুন।</p>
                        <div style="width: 150px; line-height: 3px;" class="d-inline-block bg-primary">&nbsp;</div>
                    </div>

                    <div class="owl-carousel owl-theme" id="members">
                        @foreach ($collection['profiles'] as $profile)
                        <div class="item p-2 text-center">
                            <img src="{{ image_url($profile->image) }}" alt="{{ $profile->name }}" class="book_friend_img  my-2">
                            <h5>{{ $profile->name }}</h5>
                            <h6 class="m-0 text-secondary">{{ $profile->designation }}</h6>
                            <a href="#" class="btn btn-danger btn-sm mt-1">কল করুন</a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    @endisset
    {{-- Profiles Section --}}


    {{-- Contact Us Section --}}
    <x-front.pages.contact-us/>
    {{-- Contact Us Section --}}


</x-front-layout>
