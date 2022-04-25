<x-front-layout>
    <section id="categories_page">
        <div class="container py-5">
            <div class="card shadow border-0" style="border-radius: 0px; max-width: 900px; margin: auto;">
                <div class="card-body">
                    @isset($item)
                    @if($item != null)
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ image_url($item->book_image) }}" class="w-100">
                        </div>
                        <div class="col-md-9">
                            <h4>নামঃ <span class="text-primary"> {{ $item->book_name }}</span></h4>
                            <p class="mb-1">ক্যাটাগরিঃ <b>{{ $item->category->category_name }}</b></p>
                            <p class="mb-1">লেখকঃ <b>{{ $item->bookWriter->writer_name }}</b></p>
                            <p class="mb-1">দাতাঃ <b>{{ $item->book_owner }}</b></p>
                            <p class="mb-1">পেইজঃ <b>{{ $item->book_pages }} পৃষ্টা</b></p>
                            <p class="mb-1">মূল্যঃ <b>{{ $item->book_price }} টাকা</b></p>
                            <p class="mb-1">প্রকাশক <b>{{ $item->book_publisher }}</b></p>
                            <p class="mb-1">
                                স্টেটাসঃ
                                @if ($item->book_status == 'Available')
                                    <b class="text-success">{{ $item->book_status }}</b>
                                @else
                                    <b class="text-danger">{{ $item->book_status }}</b>
                                @endif
                            </p>
                            <p class="mb-1">লাইব্রেরিঃ <b>{{ $item->library != null ? $item->library->library_name : '' }}</b></p>
                            <p class="mb-1">তারিখঃ <b>{{ $item->book_created }}</b></p>
                            <p class="mb-1">বিবরণঃ <small>{{ $item->book_description }}</small></p>

                            <div class="pt-3">
                                @if ($item->book_pdf != 0)
                                    <a href="{{ image_url($item->book_pdf) }}" class="default-outline-btn" target="_blank">একটু পড়ে দেখুন</a>
                                @endif
                                @if ($item->book_status == 'Available')
                                <a href="{{ route('home.book-request', $item->id) }}" class="default-btn">রিকুয়েস্ট পাঠান</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="py-5 text-center">
                        <i class='bx bx-file-find text-secondary' style="font-size: 50px"></i>
                        <h3 class="text-primary m-0">কোনো তথ্য খুজে পাওয়া যায় নি</h3>
                    </div>
                    @endif
                    @endisset
                </div>
            </div>
        </div>
    </section>
</x-front-layout>
