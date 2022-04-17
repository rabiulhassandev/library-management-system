<x-auth-layout>
    <div class="card m-auto" style="max-width: 500px; background-color: rgba(255, 255, 255, 0.2)">
        <div class="card-body">
            <div class="text-center">
                <h5 class="text-white mb-2">Two Factor Challenge !</h5>
                <span class="text-white font-weight-300">
                    Check Your Google Authenticator Application And Entering The
                    Authentication Code.
                </span>
            </div>

            <x-validation-errors class="my-4" />

            @if (session('status'))
            <h5 class="mb-4  text-success">
                {{ session('status') }}
            </h5>
            @endif

            <div x-data="{ recovery: false }">

                <form method="POST" class="form-horizontal" action="{{ route('two-factor.login') }}">
                    @csrf

                    <div class="mt-4" x-show="! recovery">
                        <label for="code" class="text-white">{{ __('Code') }}</label>
                        <input id="code" class="form-control" type="text" inputmode="numeric" name="code" autofocus
                            x-ref="code" placeholder="Enter your code" autocomplete="one-time-code" />
                    </div>

                    <div class="mt-4" x-show="recovery">
                        <label for="recovery_code" class="text-white">{{ __('Recovery Code') }}</label>
                        <input id="recovery_code" class="form-control" type="text" name="recovery_code"
                            x-ref="recovery_code" placeholder="Enter your recovery code" autocomplete="one-time-code" />
                    </div>

                    <div class="text-center mt-4">
                        <button class="btn btn-lg btn-primary w-100 waves-effect waves-light">
                            {{ __('Log in') }}
                        </button>
                        <span class="text-secondary d-inline-block line-height-2 pt-2">You Don't have any account? <a href="/registration" class="text-white">Registration</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-auth-layout>
