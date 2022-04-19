<x-front-layout>
    <section id="categories_page">
        <div class="container py-5">
            <div class="card shadow border-0" style="border-radius: 0px">
                <div class="card-header border-0 bg-primary">
                    <h3 class="text-white ">ক্যাটাগরি সমূহ</h3>
                </div>
                <div class="card-body">
                    @isset($collection)
                    @if(count($collection) > 0)
                    <div class="pt-3 category-list">
                        @foreach ($collection as $category)
                        <a href="{{ route('home.category-book', $category->id) }}" class="category-card">
                            <div class="category-card-box">
                                <h5>{{ $category->category_name }}</h5>
                            </div>
                        </a>
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
