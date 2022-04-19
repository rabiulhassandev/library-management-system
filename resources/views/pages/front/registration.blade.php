<x-front-layout>
    <section id="registration_page">
        <div class="container py-5">
            <div class="card shadow border-0 mx-auto" style="border-radius: 0px; max-width: 1000px;">
                <div class="card-header border-0 bg-primary">
                    <h3 class="text-white ">রেজিষ্ট্রেশন ফরম</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('home.user-registration') }}" method="post">
                        @csrf
                        <div class="row pt-2">
                            <div class="col-md-6 pt-3">
                                <label for="name">নামঃ</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="আপনার নাম লিখুন..." required>
                                @error('name')
                                    <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6 pt-3">
                                <label for="email">ইমেইলঃ</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="আপনার ইমেইল লিখুন..." required>
                                @error('email')
                                    <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6 pt-3">
                                <label for="password">পাসওয়ার্ডঃ</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="আপনার পাসওয়ার্ডঃ লিখুন..." autocomplete="new-password" required>
                                @error('password')
                                    <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6 pt-3">
                                <label for="password_confirmation">কনফার্ম পাসওয়ার্ডঃ</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="আপনার পাসওয়ার্ড লিখুন..." autocomplete="new-password" required>
                                @error('password_confirmation')
                                    <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6 pt-3">
                                <label for="phone">ফোনঃ</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('name') }}" placeholder="আপনার ফোন নাম্বার লিখুন..." required>
                                @error('phone')
                                    <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6 pt-3">
                                <label for="profession">পেশাঃ</label>
                                <input type="text" name="profession" id="profession" class="form-control" value="{{ old('profession') }}" placeholder="আপনার পেশা লিখুন..." required>
                                @error('profession')
                                    <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6 pt-3">
                                <label for="institute_workplace">প্রতিষ্ট্রান/কর্মস্থল</label>
                                <input type="text" name="institute_workplace" id="institute_workplace" class="form-control" value="{{ old('institute_workplace') }}" placeholder="আপনার প্রতিষ্ট্রান/কর্মস্থলের নাম লিখুন..." required>
                                @error('institute_workplace')
                                    <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6 pt-3">
                                <label for="nid_birth_no">এনআইডি/জন্ম নিবন্ধন নাম্বারঃ</label>
                                <input type="number" name="nid_birth_no" id="nid_birth_no" class="form-control" value="{{ old('nid_birth_no') }}" placeholder="আপনার এনআইডি/জন্ম নিবন্ধন নাম্বার লিখুন..." required>
                                @error('nid_birth_no')
                                    <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-12 pt-3">
                                <label for="address">ঠিকানাঃ</label>
                                <textarea name="address" class="form-control" id="address" placeholder="আপনার ঠিকানা লিখুন..." required>{{ old('name') }}</textarea>
                                @error('email')
                                    <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-12 pt-3">
                                <button class="default-btn">সাবমিট করুন <i class="bx bx-save"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-front-layout>
