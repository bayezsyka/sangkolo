<!-- Login Form -->
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-6" :status="session('status')" />

    <div class="max-w-md w-full mx-auto bg-[#2e2e2e] rounded-xl shadow-2xl overflow-hidden p-8 border border-[#3e3e3e]">
        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-[#d0d0d0] to-[#ffffff]">
                Welcome Back
            </h2>
            <p class="mt-2 text-sm text-gray-400">
                Sign in to access your account
            </p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- Email -->
            <div>
                <div class="flex items-center justify-between">
                    <x-input-label for="email" :value="__('Email')" class="text-gray-300" />
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                </div>
                <x-text-input 
                    id="email" 
                    class="block mt-2 w-full bg-[#3a3a3a] border-[#4a4a4a] text-gray-200 focus:ring-2 focus:ring-[#5a5a5a] focus:border-[#5a5a5a]" 
                    type="email" 
                    name="email" 
                    :value="old('email')" 
                    required 
                    autofocus 
                    autocomplete="username"
                    placeholder="your@email.com"
                />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>
                <div class="flex items-center justify-between">
                    <x-input-label for="password" :value="__('Password')" class="text-gray-300" />
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                </div>
                <x-text-input 
                    id="password" 
                    class="block mt-2 w-full bg-[#3a3a3a] border-[#4a4a4a] text-gray-200 focus:ring-2 focus:ring-[#5a5a5a] focus:border-[#5a5a5a]" 
                    type="password" 
                    name="password" 
                    required 
                    autocomplete="current-password"
                    placeholder="••••••••"
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me & Forgot Password -->
            <div class="flex items-center justify-between">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded bg-[#3a3a3a] border-[#4a4a4a] text-[#5a5a5a] focus:ring-[#5a5a5a] focus:ring-offset-[#2e2e2e]" name="remember">
                    <span class="ms-2 text-sm text-gray-400">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-400 hover:text-gray-300 transition duration-150" href="{{ route('password.request') }}">
                        {{ __('Forgot password?') }}
                    </a>
                @endif
            </div>

            <!-- Submit Button -->
            <div>
                <x-primary-button class="w-full justify-center bg-gradient-to-r from-[#5a5a5a] to-[#3a3a3a] hover:from-[#6a6a6a] hover:to-[#4a4a4a] transition-all duration-200 shadow-md">
                    {{ __('Log in') }}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </x-primary-button>
            </div>

            <!-- Register Link -->
            <div class="text-center text-sm text-gray-500">
                Don't have an account? 
                <a href="{{ route('register') }}" class="text-gray-400 hover:text-gray-300 transition duration-150">
                    Register here
                </a>
            </div>
        </form>
    </div>
</x-guest-layout>