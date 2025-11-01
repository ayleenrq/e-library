@extends('layouts.main')

@section('judul')
    Create Account
@endsection

@section('konten')
    <div class="min-h-screen flex">
        <div class="w-full flex items-center justify-center p-8">
            <div class="w-full max-w-md">
                <div class="bg-white rounded-2xl shadow-sm p-8">
                    <h2 class="text-3xl font-bold text-gray-900 text-center mb-8">Sign Up</h2>
                    
                    <form action="{{ url('register') }}" method="POST">
                        @csrf

                        @if(session('success'))
                            <div class="text-green-600 mb-4">{{ session('success') }}</div>
                        @endif

                        @if($errors->any())
                            <div class="text-red-600 mb-4">
                                <ul class="list-disc pl-5">
                                    @foreach($errors->all() as $e)
                                        <li>{{ $e }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        <x-input
                            name="name"
                            type="text"
                            placeholder="Full Name"
                            required
                        />

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
                        </div>

                        <x-button 
                            type="submit" 
                            text="Create account"
                        />

                        <div class="mt-5 text-center text-sm text-gray-500 mb-6">or sign up with</div>

                        <div class="flex gap-3 justify-center mb-6">
                            <button type="button" class="w-12 h-12 bg-green-100 hover:bg-green-200 rounded-lg flex items-center justify-center transition">
                                <i class="fa-brands fa-google text-green-900"></i>
                            </button>
                            <button type="button" class="w-12 h-12 bg-green-100 hover:bg-green-200 rounded-lg flex items-center justify-center transition">
                                <i class="fa-brands fa-facebook text-green-900"></i>
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
@endsection