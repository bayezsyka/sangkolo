<x-guest-layout>
    <div class="max-w-md w-full mx-auto bg-[#2e2e2e] rounded-xl shadow-2xl overflow-hidden p-8 border border-[#3e3e3e]">
        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-[#d0d0d0] to-[#ffffff]">
                Create Account
            </h2>
            <p class="mt-2 text-sm text-gray-400">
                Join us to get started
            </p>
        </div>

        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" class="text-gray-300" />
                <x-text-input 
                    id="name" 
                    class="block mt-2 w-full bg-[#3a3a3a] border-[#4a4a4a] text-gray-200 focus:ring-2 focus:ring-[#5a5a5a] focus:border-[#5a5a5a]" 
                    type="text" 
                    name="name" 
                    :value="old('name')" 
                    required 
                    autofocus 
                    autocomplete="name"
                    placeholder="Your name"
                />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="text-gray-300" />
                <x-text-input 
                    id="email" 
                    class="block mt-2 w-full bg-[#3a3a3a] border-[#4a4a4a] text-gray-200 focus:ring-2 focus:ring-[#5a5a5a] focus:border-[#5a5a5a]" 
                    type="email" 
                    name="email" 
                    :value="old('email')" 
                    required 
                    autocomplete="username"
                    placeholder="your@email.com"
                />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" class="text-gray-300" />
                <x-text-input 
                    id="password" 
                    class="block mt-2 w-full bg-[#3a3a3a] border-[#4a4a4a] text-gray-200 focus:ring-2 focus:ring-[#5a5a5a] focus:border-[#5a5a5a]" 
                    type="password" 
                    name="password" 
                    required 
                    autocomplete="new-password"
                    placeholder="••••••••"
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-300" />
                <x-text-input 
                    id="password_confirmation" 
                    class="block mt-2 w-full bg-[#3a3a3a] border-[#4a4a4a] text-gray-200 focus:ring-2 focus:ring-[#5a5a5a] focus:border-[#5a5a5a]" 
                    type="password" 
                    name="password_confirmation" 
                    required 
                    autocomplete="new-password"
                    placeholder="••••••••"
                />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Submit Button -->
            <div>
                <x-primary-button class="w-full justify-center bg-gradient-to-r from-[#5a5a5a] to-[#3a3a3a] hover:from-[#6a6a6a] hover:to-[#4a4a4a] transition-all duration-200 shadow-md">
                    {{ __('Register') }}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                    </svg>
                </x-primary-button>
            </div>

            <!-- Login Link -->
            <div class="text-center text-sm text-gray-500">
                Already have an account? 
                <a href="{{ route('login') }}" class="text-gray-400 hover:text-gray-300 transition duration-150">
                    Login here
                </a>
            </div>
        </form>
    </div>
</x-guest-layout>