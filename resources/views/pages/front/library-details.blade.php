<x-front-layout>

    <section id="library_page">
        <div class="container py-5">

            <div class="row">
                <div class="col-md-6">
                    <img src="{{ image_url($item->library_image) }}" onerror="this.src='{{ front_asset('images/library.jpg') }}'" class="w-100 p-1" style="border: 2px solid #079c86;">
                </div>
                <div class="col-md-6">
                    <h1 class="text-primary"><b>{{ $item->library_name }}</b></h1>
                    <div class="p-2 rounded" style="background: rgba(0, 0, 0, 0.089);">
                        <p>ফোন: <b>{{ $item->library_phone }}</b></p>
                        <p>ঠিকানা: <b>{{ $item->library_address }}</b></p>
                        <p>Map: <a href="{{ $item->library_map }}" class="btn btn-danger btn-sm">Google Map</a></p>
                        <p>অফিস টাইম: <b>{{ $item->office_time }}</b></p>
                        <p>
                            বিবরণ: {{ $item->library_description }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="row pt-4">
                <div class="col-md-12">
                    <div class="card shadow border-0" style="border-radius: 0px">
                        <div class="card-header border-0 bg-primary">
                            <h3 class="text-white">"{{ $item->library_name }}"-এর অন্তর্ভুক্ত বইসমূহ</h3>
                        </div>
                        <div class="card-body">
                            <div class="pt-3 book-list">
                                @forelse ($books as $book)
                                <div class="book-card">
                                    <img src="{{ image_url($book->book_image) }}">
                                    <p class="mb-1">{{ $book->book_name }}</p>
                                    <h6><b class="text-primary">৳ {{ $book->book_price }}</b></h6>
                                    <div class="overlay">
                                        <a href="{{ route('home.book-details', $book->id) }}" class="default-btn btn-sm">বিস্তারিত</a>
                                    </div>
                                </div>
                                @empty
                                <div class="py-5 text-center">
                                    <i class='bx bx-file-find text-secondary' style="font-size: 50px"></i>
                                    <h3 class="text-primary m-0">কোনো বই খুজেঁ পাওয়া যায় নি</h3>
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</x-front-layout>
