@extends('layouts.main')

@section('judul')
    Create Account
@endsection

@section('konten')
    <div class="min-h-screen flex">
        <div class="w-full flex items-center justify-center p-8">
            <div class="w-full max-w-md">
                <div class="bg-white rounded-2xl shadow-sm p-8">
                    <h2 class="text-3xl font-bold text-gray-900 text-center mb-8">Create<br>account</h2>
                    
                    <form action="{{ url('register') }}" method="POST">
                        @csrf

                        <x-input
                            name="email"
                            type="email"
                            placeholder="Email address"
                            required
                        />

                        <div class="mb-6 relative">
                            <x-input
                                name="password"
                                type="password"
                                placeholder="Password"
                                required
                            />
                            <button 
                                type="button" 
                                onclick="togglePassword()"
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600"
                            >
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </button>
                        </div>

                        <button 
                            type="submit" 
                            class="w-full bg-green-400 hover:bg-green-500 text-gray-900 font-semibold py-3 rounded-lg transition duration-200 mb-6"
                        >
                            Create account
                        </button>

                        <div class="text-center text-sm text-gray-500 mb-6">or sign up with</div>

                        <div class="flex gap-3 justify-center mb-6">
                            <button type="button" class="w-12 h-12 bg-green-100 hover:bg-green-200 rounded-lg flex items-center justify-center transition">
                                <span class="text-xl font-bold text-gray-700">G</span>
                            </button>
                            <button type="button" class="w-12 h-12 bg-green-100 hover:bg-green-200 rounded-lg flex items-center justify-center transition">
                                <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 0C4.477 0 0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.879V12.89h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.989C16.343 19.128 20 14.991 20 10c0-5.523-4.477-10-10-10z"/>
                                </svg>
                            </button>
                            <button type="button" class="w-12 h-12 bg-green-100 hover:bg-green-200 rounded-lg flex items-center justify-center transition">
                                <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z"/>
                                </svg>
                            </button>
                        </div>

                        <p class="text-xs text-center text-gray-500 mb-6">
                            By creating an account you agree to e-Library's
                            <a href="#" class="text-green-600 hover:underline">Terms of Services</a> and 
                            <a href="#" class="text-green-600 hover:underline">Privacy Policy</a>.
                        </p>

                        <p class="text-sm text-center text-gray-600">
                            Have an account? 
                            <a href="{{ url('login') }}" class="text-green-600 hover:underline font-semibold">Log in</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
        }
    </script>
@endsection