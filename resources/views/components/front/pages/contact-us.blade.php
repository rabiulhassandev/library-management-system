<section id="contact_us_section">
    <div class="container py-5">
        <div class="card shadow border-0" style="border-radius: 0px;">
            <div class="card-body">
                <div class="col-md-12 text-left">
                    <marquee behavior="" direction=""><h3 class="py-2 text-primary m-0"><b>আমাদের সাথে যোগাযোগ করুন</b></h3></marquee>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://cdn.dribbble.com/users/2317423/screenshots/14013635/contact_us_4x.jpg" class="w-100">
                    </div>
                    <div class="col-md-8">
                        <form action="{{ route('home.contact-us-form') }}" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group pt-3">
                                        <label for="name"><b>নামঃ</b></label>
                                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" placeholder="আপনার নাম লিখুন..." required>
                                        @error('name')
                                        <p class="text-danger pt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pt-3">
                                        <label for="address"><b>ঠিকানা</b></label>
                                        <input type="text" name="address" id="address" value="{{ old('address') }}" class="form-control" placeholder="ঠিকনা লিখুন..." required>
                                        @error('address')
                                        <p class="text-danger pt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pt-3">
                                        <label for="phone"><b>ফোনঃ</b></label>
                                        <input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="form-control" placeholder="আপনার ফোন নাম্বার লিখুন..." required>
                                        @error('phone')
                                        <p class="text-danger pt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pt-3">
                                        <label for="contact_type"><b>যোগাযোগের ধরণঃ</b></label>
                                        <select name="contact_type" id="contact_type" class="form-control" required>
                                            <option value="">-- ধরন নির্বাচন করুন --</option>
                                            <option value="বই প্রদান">বই প্রদান</option>
                                            <option value="আর্থিক সহযোগিতা">আর্থিক সহযোগিতা</option>
                                            <option value="সহায়তা কামনা">সহায়তা কামনা</option>
                                            <option value="পরামর্শ">পরামর্শ</option>
                                            <option value="অভিযোগ/সমস্যা">অভিযোগ/সমস্যা</option>
                                        </select>
                                        @error('contact_type')
                                        <p class="text-danger pt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group pt-3">
                                        <label for="subject"><b>বিষয়ঃ</b></label>
                                        <input type="text" name="subject" id="subject" value="{{ old('subject') }}" class="form-control" placeholder="বিষয় লিখুন..." required>
                                        @error('subject')
                                        <p class="text-danger pt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group pt-3">
                                        <label for="description"><b>বিবরণঃ</b></label>
                                        <textarea name="description" id="description" class="form-control" style="min-height: 120px" placeholder="বিস্তারিত বিবরণ লিখুন..." required>{{ old('description') }}</textarea>
                                        @error('description')
                                        <p class="text-danger pt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="pt-3">
                                <button class="default-btn">দ্রুত জমা দিন <i class='bx bx-save' ></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
