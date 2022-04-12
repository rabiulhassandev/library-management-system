<x-auth-layout>
    <div class="sign-in-from rounded" style="background-color: rgba(255, 255, 255, 0.2)">
        <h3 class="mb-0 text-center text-white">Login</h3>
        <p class="text-center text-white">Enter your email and password to access the Dashboard</p>

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
                <label for="email">{{ __('Email') }}</label>
                <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" required
                    autofocus />
            </div>
            <div class="mb-3">
                <label for="password">{{ __('Password') }}</label>
                <a href="/forgot-password" class="float-right text-secondary">Forgot Password?</a>
                <input id="password" class="form-control" type="password" name="password" placeholder="Enter your password" required
                    autocomplete="current-password" />
            </div>
            <div class="d-inline-block w-100">
                <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                </div>
            </div>
            <div class="sign-info text-center">
                <button type="submit" class="btn btn-white d-block w-100 btn-lg mb-2">Login</button>
                <span class="text-secondary d-inline-block line-height-2">You Don't have any account? <a href="/register" class="text-white">Registration</a></span>
            </div>
        </form>
    </div>
</x-auth-layout>
