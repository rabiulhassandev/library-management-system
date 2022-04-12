<x-auth-layout>
    <div class="sign-in-from rounded" style="background-color: rgba(255, 255, 255, 0.2)">
        <h3 class="mb-0 text-center text-white">লগইন</h3>
        <p class="text-center text-white">ড্যাশবোর্ডে অ্যাক্সেস করতে আপনার  ইউজারআইডি এবং পাসওয়ার্ড লিখুন</p>

        {{-- <div>
            <x-validation-errors class="mb-4" />

            @if (session('status'))
            <h5 class="mb-4  text-success">
                {{ session('status') }}
            </h5>
            @endif
        </div> --}}

        <form class="mt-4 form-text" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email">{{ __('ইমেইল') }}</label>
                <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="আপনার ইমেইল লিখুন" required
                    autofocus />
            </div>
            <div class="mb-3">
                <label for="password">{{ __('পাসওয়ার্ড') }}</label>
                <a href="/forgot-password" class="float-right text-secondary">পাসওয়ার্ড ভূলে গেছেন?</a>
                <input id="password" class="form-control" type="password" name="password" placeholder="আপনার পাসওয়ার্ড লিখুন" required
                    autocomplete="current-password" />
            </div>
            <div class="d-inline-block w-100">
                <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">মনে রাখুন</label>
                </div>
            </div>
            <div class="sign-info text-center">
                <button type="submit" class="btn btn-white d-block w-100 btn-lg mb-2">লগইন</button>
                <span class="text-secondary d-inline-block line-height-2">আপনার কি কোনো একাউন্ট নেই? <a href="/register" class="text-white">রেজিষ্ট্রেশন</a></span>
            </div>
        </form>
    </div>
</x-auth-layout>
