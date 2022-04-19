<x-front-layout>

    <section id="book_page">
        <div class="container py-5">
            <div class="card shadow border-0" style="border-radius: 0px">
                <div class="card-header border-0 bg-primary">
                    <h3 class="text-white">একাডেমিক বইসমূহ</h3>
                </div>
                <div class="card-body">

                    @isset($collection)
                    @if(count($collection) > 0)
                    <div class="pt-3 book-list">
                        @foreach ($collection as $book)
                        <div class="book-card">
                            <img src="{{ image_url($book->image) }}">
                            <p class="mb-1">{{ $book->book_name }}</p>
                            <h6><b class="text-primary">{{ $book->created }}</b></h6>
                            <div class="overlay">
                                <a href="{{ route('home.academic-book-details', $book->id) }}" class="default-btn btn-sm">বিস্তারিত</a>
                            </div>
                        </div>
                        @endforeach
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
