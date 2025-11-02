<header class="bg-white shadow-sm sticky top-0 z-50">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="flex items-center gap-2">
                    <i class="fa-solid fa-book text-green-600 text-2xl"></i>
                    <span class="text-xl font-bold text-gray-900">e-Library</span>
                </a>
            </div>

            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ url('/') }}" class="text-gray-700 hover:text-green-600 font-medium transition">
                    Home
                </a>
                <a href="{{ url('books') }}" class="text-gray-700 hover:text-green-600 font-medium transition">
                    Books
                </a>
                <a href="{{ url('categories') }}" class="text-gray-700 hover:text-green-600 font-medium transition">
                    Categories
                </a>
                
                @auth
                    <a href="{{ url('loans') }}" class="text-gray-700 hover:text-green-600 font-medium transition">
                        My Loans
                    </a>
                @endauth
            </div>

            <div class="flex items-center gap-4">
                <button class="text-gray-600 hover:text-green-600 transition">
                    <i class="fa-solid fa-search text-xl"></i>
                </button>

                @auth
                    <button class="text-gray-600 hover:text-green-600 transition relative">
                        <i class="fa-solid fa-bell text-xl"></i>
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs w-4 h-4 rounded-full flex items-center justify-center">3</span>
                    </button>

                    <div class="relative group">
                        <button class="flex items-center gap-2 text-gray-700 hover:text-green-600 transition">
                            <div class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center text-white font-semibold">
                                {{ substr(Auth::user()->name, 0, 1) }}
                            </div>
                            <i class="fa-solid fa-chevron-down text-sm"></i>
                        </button>
                        
                        <div class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 hidden group-hover:block">
                            <a href="{{ url('profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fa-solid fa-user mr-2"></i> Profile
                            </a>
                            <a href="{{ url('loans') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fa-solid fa-book mr-2"></i> My Loans
                            </a>
                            <hr class="my-2">
                            <form action="{{ url('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                                    <i class="fa-solid fa-sign-out mr-2"></i> Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ url('login') }}" class="text-gray-700 hover:text-green-600 font-medium transition">
                        Login
                    </a>
                    <a href="{{ url('register') }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg font-medium transition">
                        Sign Up
                    </a>
                @endauth

                <button class="md:hidden text-gray-600" id="mobile-menu-btn">
                    <i class="fa-solid fa-bars text-2xl"></i>
                </button>
            </div>
        </div>

        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ url('/') }}" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-lg">Home</a>
                <a href="{{ url('books') }}" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-lg">Books</a>
                <a href="{{ url('categories') }}" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-lg">Categories</a>
                @auth
                    <a href="{{ url('loans') }}" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-lg">My Loans</a>
                @endauth
            </div>
        </div>
    </nav>
</header>

<script>
    document.getElementById('mobile-menu-btn')?.addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>