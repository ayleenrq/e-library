@extends('layouts.main')

@section('judul')
    Masuk
@endsection

@section('konten')
    <main class="bg-white shadow-lg rounded-xl p-7 w-full max-w-sm">
        <div class="flex flex-col items-center justify-center mb-4">
            <div class="text-blue-600 rounded-full p-5 bg-blue-200 h-8 w-8 flex items-center justify-center mb-3">
                <i class="fa-solid fa-user"></i>
            </div>
            <h3 class="font-bold mb-1">Selamat Datang</h3>
            <p class="text-xs text-gray-800">Masuk ke akun anda</p>
        </div>
        <form action="{{ url('login') }}" method="POST">
            @csrf
            <div class="mb-2">
                <label class="text-xs text-gray-600">Username</label>
                <div class="flex items-center border border-gray-400 rounded-md px-4 py-3 bg-white mt-1">
                    <i class="fa-solid fa-user text-gray-400 text-xs mr-2"></i>
                    <input type="text" id="username" name="username" class="w-full outline-none text-xs" placeholder="Masukkan Username">
                </div>
            </div>
            <div class="mb-6">
                <label class="text-xs text-gray-600">Password</label>
                <div class="flex items-center border border-gray-400 rounded-md px-4 py-3 bg-white mt-1">
                    <i class="fa-solid fa-lock text-gray-400 text-xs mr-2"></i>
                    <input type="text" id="password" name="password" class="w-full outline-none text-xs" placeholder="Masukkan Password">
                </div>
            </div>
            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-xs text-white font-semibold py-3 rounded-md transition">Masuk</button>
        </form>
    </main>
@endsection