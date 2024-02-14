<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
        <img src="{{ asset('./Images/Logo.png') }}" alt="Logo"  style="width: 100px; height: auto;"/>
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
             
            <div class="block m-5">
                <strong>Google recaptcha:</strong>
                {!! NoCaptcha::renderJs() !!}
                {!! NoCaptcha::display() !!}
            <!-- <button class="g-recaptcha" data-sitekey="6LdZLXIpAAAAAI5bXWf13LzX1t8SSnjHc5KRRb8T" data-callback='onSubmit' data-action='submit'>
                    Submit
                </button> -->
            </div>
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
       
  <script src="https://www.google.com/recaptcha/enterprise.js?render=6LdZLXIpAAAAAI5bXWf13LzX1t8SSnjHc5KRRb8T">

//        function onClick(e) {
//         e.preventDefault();
//         grecaptcha.enterprise.ready(async () => {
//       const token = await grecaptcha.enterprise.execute('6LdZLXIpAAAAAI5bXWf13LzX1t8SSnjHc5KRRb8T', {action: 'LOGIN'});
//     });
//   }

//   function onSubmit(token) {
//     document.getElementById("demo-form").submit();
//   }

  </script>
    </x-authentication-card>
</x-guest-layout>
