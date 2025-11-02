<aside class="w-64 bg-white shadow-sm h-full">
    <div class="p-6">
        @auth
            <div class="bg-green-50 rounded-lg p-4 mb-6">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center text-white font-bold text-lg">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">{{ Auth::user()->name }}</h3>
                        <p class="text-sm text-gray-600">Member</p>
                    </div>
                </div>
            </div>
        @endauth

        <nav class="space-y-2">
            <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">Menu</h3>
            
            <a href="{{ url('/') }}" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-green-50 hover:text-green-600 rounded-lg transition {{ request()->is('/') ? 'bg-green-50 text-green-600' : '' }}">
                <i class="fa-solid fa-home w-5"></i>
                <span class="font-medium">Home</span>
            </a>

            <a href="{{ url('books') }}" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-green-50 hover:text-green-600 rounded-lg transition {{ request()->is('books*') ? 'bg-green-50 text-green-600' : '' }}">
                <i class="fa-solid fa-book w-5"></i>
                <span class="font-medium">Browse Books</span>
            </a>

            <a href="{{ url('categories') }}" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-green-50 hover:text-green-600 rounded-lg transition {{ request()->is('categories*') ? 'bg-green-50 text-green-600' : '' }}">
                <i class="fa-solid fa-layer-group w-5"></i>
                <span class="font-medium">Categories</span>
            </a>

            @auth
                <a href="{{ url('loans') }}" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-green-50 hover:text-green-600 rounded-lg transition {{ request()->is('loans*') ? 'bg-green-50 text-green-600' : '' }}">
                    <i class="fa-solid fa-book-bookmark w-5"></i>
                    <span class="font-medium">My Loans</span>
                    <span class="ml-auto bg-green-600 text-white text-xs px-2 py-1 rounded-full">2</span>
                </a>
            @endauth
        </nav>

        <div class="mt-8">
            <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">Popular Categories</h3>
            <div class="space-y-2">
                <a href="{{ url('categories/fiction') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg transition">
                    Fiction <span class="text-gray-400">(234)</span>
                </a>
                <a href="{{ url('categories/science') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg transition">
                    Science <span class="text-gray-400">(156)</span>
                </a>
                <a href="{{ url('categories/technology') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg transition">
                    Technology <span class="text-gray-400">(89)</span>
                </a>
                <a href="{{ url('categories/history') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg transition">
                    History <span class="text-gray-400">(67)</span>
                </a>
            </div>
        </div>

        @auth
            <div class="mt-8 bg-gray-50 rounded-lg p-4">
                <h3 class="text-sm font-semibold text-gray-900 mb-3">Your Stats</h3>
                <div class="space-y-2 text-sm">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Books Borrowed</span>
                        <span class="font-semibold text-gray-900">12</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Active Loans</span>
                        <span class="font-semibold text-green-600">2</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Completed</span>
                        <span class="font-semibold text-gray-900">10</span>
                    </div>
                </div>
            </div>
        @endauth
    </div>
</aside>