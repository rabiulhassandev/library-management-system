<x-front-layout>


    {{-- Slider Section --}}
    @isset($collection['sliders'])
    @if (count($collection['sliders']) > 0)
    <section id="slider_section">
        <div class="container py-3">
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


    {{-- Recently Books Section --}}
    @isset($collection['books'])
    @if (count($collection['books']) > 0)
    <section id="recent_books_section">
        <div class="container py-4">
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
                        <a href="{{ route('home.books') }}" class="default-btn">সব বই দেখুন</a>
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
                        <a href="{{ route('home.categories') }}" class="default-outline-btn">সব ক্যাটাগরি দেখুন</a>
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
                        @foreach ($collection['profiles'] as $profile)
                        <div class="item">
                            <img src="{{ image_url($profile->image) }}">
                            <h4>{{ $profile->name }}</h4>
                            <h6 class="m-0 font-italic">{{ $profile->designation }}</h6>
                            <small class="m-0">{{ $profile->email }}</small><br>
                            <small class="m-0">{{ $profile->phone }}</small><br>
                            <small>{{ $profile->address }}</small>
                        </div>
                        @endforeach
                    </div>
                    <div class="pt-4 text-center">
                        <a href="{{ route('home.about-us') }}" class="default-btn">সমস্ত দেখুন</a>
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
