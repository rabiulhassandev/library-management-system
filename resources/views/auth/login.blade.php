<x-auth-layout>

    @push('extra-styles')
        <!-- Font CSS -->
        <link rel="stylesheet" href="{{ admin_asset('fonts/my-fonts/font.css') }}">

        <style>
            body{
                font-family: 'SolaimanLipi', sans-serif;
            }
            .bn_font{
                font-family: 'SolaimanLipi', sans-serif !important;
            }
        </style>
    @endpush

    <div class="sign-in-from rounded" style="background-color: rgba(255, 255, 255, 0.2)">
        <h3 class="mb-0 text-center text-white bn_font">লগইন</h3>
        <p class="text-center text-white" style="font-weight: 300;">ড্যাশবোর্ডে প্রবেশ করতে ইমেইল এবং পাসওয়ার্ড ইনপুট দিন।</p>

        <form class="mt-4 form-text" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email">{{ __('ইমেইল') }}</label>
                <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="আপনার ইমেইল লিখুন" required
                    autofocus />
            </div>
            <div class="mb-3">
                <label for="password">{{ __('পাসওয়ার্ড') }}</label>
                {{-- <a href="/forgot-password" class="float-right text-secondary">পাসওয়ার্ড মনে নেই?</a> --}}
                <input id="password" class="form-control" type="password" name="password" placeholder="আপনার পাসওয়ার্ড লিখুন" required
                    autocomplete="current-password" />
            </div>
            {{-- <div class="d-inline-block w-100">
                <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">মনে রাখুন</label>
                </div>
            </div> --}}
            <div class="sign-info text-center">
                <button type="submit" class="btn btn-white d-block w-100 btn-lg mb-2">লগইন করুন</button>
                <span class="text-light d-inline-block line-height-2" style="font-weight: 300;">আপনার কোনো একাউন্ট নেই? <a href="/registration" class="text-white" style="font-weight: 700;"><b>রেজিষ্ট্রেশন</b></a></span>
            </div>
        </form>
    </div>
</x-auth-layout>
