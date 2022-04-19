<x-front-layout>
    <section id="book_request_page">
        <div class="container py-5">
            <div class="card shadow border-0" style="border-radius: 0px;">
                <div class="card-body">
                    @isset($item)
                    @if($item != null)
                    <div class="row">
                        <div class="col-md-3 text-center pt-3">
                            <img src="{{ image_url($item->book_image) }}" style="max-width: 150px;">
                            <h4 class="text-primary pt-2"><b>{{ $item->book_name }}</b></h4>
                            @if ($item->book_status == 'Available')
                                <button class="btn btn-success btn-sm">{{ $item->book_status }}</button>
                            @else
                            <button class="btn btn-danger btn-sm">{{ $item->book_status }}</button>
                            @endif
                        </div>
                        <div class="col-md-9">
                            <form action="{{ route('home.book-request-send', $item->id) }}" method="post">
                                <div class="row">
                                    @csrf
                                    <div class="col-md-12 form-group pt-3">
                                        <label for="book_duration"><b>কত দিনের জন্য বইটি নিতে চান?</b></label>
                                        <input type="text" name="book_duration" id="book_duration" class="form-control" value="{{ old('book_duration') }}" placeholder="কত দিনের জন্য বইটি নিতে চান..?" required>
                                        @error('book_duration')
                                            <p class="text-danger pt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group pt-3">
                                        <label for="book_address"><b>ঠিকানাঃ</b></label>
                                        <textarea name="book_address" id="book_address" class="form-control" style="min-height: 120px" placeholder="ঠিকানা লিখুন..." required>{{ old('book_address') }}</textarea>
                                        @error('book_address')
                                            <p class="text-danger pt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group pt-3">
                                        <label for="admin_delivery_area"><b>ডেলিভারি ঠিকানাঃ</b></label>
                                        <textarea name="admin_delivery_area" id="admin_delivery_area" class="form-control" style="min-height: 120px" placeholder="ডেলিভারি ঠিকানা লিখুন..." required>{{ old('admin_delivery_area') }}</textarea>
                                        @error('admin_delivery_area')
                                            <p class="text-danger pt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-12 pt-3">
                                        <button class="default-btn">সাবমিট <i class='bx bx-save' ></i></button>
                                    </div>
                                </div>
                            </form>
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
