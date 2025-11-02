<footer class="bg-gray-900 text-white mt-auto">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-lg font-bold mb-4">e-Library</h3>
                <p class="text-gray-400 text-sm">
                    Your digital gateway to knowledge. Borrow, read, and explore thousands of books from the comfort of your home.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ url('/') }}" class="text-gray-400 hover:text-green-500 transition">Home</a></li>
                    <li><a href="{{ url('books') }}" class="text-gray-400 hover:text-green-500 transition">Browse Books</a></li>
                    <li><a href="{{ url('categories') }}" class="text-gray-400 hover:text-green-500 transition">Categories</a></li>
                    <li><a href="{{ url('loans') }}" class="text-gray-400 hover:text-green-500 transition">My Loans</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-semibold mb-4">Support</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="text-gray-400 hover:text-green-500 transition">Help Center</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-green-500 transition">Contact Us</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-green-500 transition">Terms of Service</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-green-500 transition">Privacy Policy</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-semibold mb-4">Contact</h3>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li class="flex items-center gap-2">
                        <i class="fa-solid fa-envelope"></i>
                        <span>info@elibrary.com</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fa-solid fa-phone"></i>
                        <span>+62 123 4567 890</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Jakarta, Indonesia</span>
                    </li>
                </ul>
                <div class="flex gap-3 mt-4">
                    <a href="#" class="w-9 h-9 bg-gray-800 hover:bg-green-600 rounded-lg flex items-center justify-center transition">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="#" class="w-9 h-9 bg-gray-800 hover:bg-green-600 rounded-lg flex items-center justify-center transition">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="#" class="w-9 h-9 bg-gray-800 hover:bg-green-600 rounded-lg flex items-center justify-center transition">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-800 mt-8 pt-8 text-center text-sm text-gray-400">
            <p>&copy; {{ date('Y') }} e-Library. All rights reserved.</p>
        </div>
    </div>
</footer>