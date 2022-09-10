<x-front-layout>
    <section id="categories_page">
        <div class="container py-5">
            <div class="card shadow border-0" style="border-radius: 0px; max-width: 900px; margin: auto;">
                <div class="card-body">
                    @isset($item)
                    @if($item != null)
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ image_url($item->image) }}" class="w-100">
                        </div>
                        <div class="col-md-9">
                            <h4>নামঃ <span class="text-primary"> {{ $item->book_name }}</span></h4>
                            <p class="mb-1">শ্রেণিঃ <b>{{ $item->class_name }}</b></p>
                            <p class="mb-1">দাতাঃ <b>{{ $item->owner_name }}</b></p>
                            <p class="mb-1">ফোনঃ <b>{{ $item->phone }}</b></p>
                            <p class="mb-1">ঠিকানাঃ <b>{{ $item->book_address }}</b></p>
                            <p class="mb-1">
                                স্টেটাসঃ
                                @if ($item->status == 'Active')
                                    <b class="text-success">{{ $item->status }}</b>
                                @else
                                    <b class="text-danger">{{ $item->status }}</b>
                                @endif
                            </p>
                            <p class="mb-1">তারিখঃ <b>{{ $item->created }}</b></p>
                            <p class="mb-1">বিবরণঃ <small>{{ $item->description }}</small></p>

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
