<!-- Header/Navigation -->
<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4 md:py-0  flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <a href="{{ route('home') }}" class="flex items-center space-x-2">
                <i class="fas fa-blog text-2xl text-blue-600"></i>
                <h1 class="text-2xl font-bold text-gray-800">I<span class="text-blue-600">Blog</span></h1>
            </a>
        </div>

        <nav class="hidden md:flex space-x-8 items-center">
            <a href="{{ route('home') }}" class="text-blue-600 font-medium">Home</a>
            <!-- Categories Dropdown -->
            <div class="relative desktop-dropdown">
                <a href="{{ route('categories') }}" class="text-gray-600 hover:text-blue-600 py-4 transition flex items-center">
                    Categories
                    <i class="fas fa-chevron-down ml-1 text-sm"></i>
                </a>
                <div class="absolute left-0 w-64 bg-white rounded-md shadow-lg hidden z-50 desktop-dropdown-menu">
                    <div class="py-2">
                        <div class="relative desktop-dropdown-sub">
                            <button class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition flex justify-between items-center w-full text-left">
                                Web Development
                                <i class="fas fa-chevron-right text-xs"></i>
                            </button>
                            <div class="absolute left-full top-0 mt-0 w-64 bg-white rounded-md shadow-lg hidden desktop-dropdown-submenu">
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Frontend</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Backend</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Full Stack</a>
                            </div>
                        </div>
                        <div class="relative desktop-dropdown-sub">
                            <button class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition flex justify-between items-center w-full text-left">
                                Artificial Intelligence
                                <i class="fas fa-chevron-right text-xs"></i>
                            </button>
                            <div class="absolute left-full top-0 mt-0 w-64 bg-white rounded-md shadow-lg hidden desktop-dropdown-submenu">
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Machine Learning</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Deep Learning</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">NLP</a>
                            </div>
                        </div>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Cloud Computing</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Cybersecurity</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Mobile Development</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">DevOps</a>
                    </div>
                </div>
            </div>
            <a href="#" class="text-gray-600 hover:text-blue-600 transition">About</a>
            <a href="#" class="text-gray-600 hover:text-blue-600 transition">Contact</a>
        </nav>

        <div class="flex items-center space-x-4">
            <button class="md:hidden text-gray-600" id="mobile-menu-button">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <a href="{{ route('login') }}" class="hidden md:block bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                Login
            </a>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
        <div class="container mx-auto px-4 py-4">
            <a href="{{ route('home') }}" class="block py-2 text-blue-600 font-medium">Home</a>
            <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Articles</a>
            <div class="relative">
                <a href="{{ route('categories') }}" class="block py-2 text-gray-600 hover:text-blue-600 transition flex items-center w-full text-left mobile-dropdown-toggle">
                    Categories
                    <i class="fas fa-chevron-down ml-1 text-sm"></i>
                </a>
                <div id="mobile-categories" class="hidden pl-4 mobile-dropdown-menu">
                    <div class="py-1">
                        <div class="relative">
                            <button class="block py-2 text-gray-600 hover:text-blue-600 transition flex items-center w-full text-left mobile-dropdown-sub-toggle">
                                Web Development
                                <i class="fas fa-chevron-down ml-1 text-sm"></i>
                            </button>
                            <div id="mobile-webdev-submenu" class="hidden pl-4 mobile-dropdown-submenu">
                                <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Frontend</a>
                                <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Backend</a>
                                <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Full Stack</a>
                            </div>
                        </div>
                        <div class="relative">
                            <button class="block py-2 text-gray-600 hover:text-blue-600 transition flex items-center w-full text-left mobile-dropdown-sub-toggle">
                                Artificial Intelligence
                                <i class="fas fa-chevron-down ml-1 text-sm"></i>
                            </button>
                            <div id="mobile-ai-submenu" class="hidden pl-4 mobile-dropdown-submenu">
                                <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Machine Learning</a>
                                <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Deep Learning</a>
                                <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">NLP</a>
                            </div>
                        </div>
                        <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Cloud Computing</a>
                        <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Cybersecurity</a>
                        <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Mobile Development</a>
                        <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">DevOps</a>
                    </div>
                </div>
            </div>
            <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">About</a>
            <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Contact</a>
        </div>
    </div>
</header>

<!-- Page Header with Search -->
<section class="bg-gradient-to-r from-blue-500 to-purple-600 text-white py-12">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="mb-6 md:mb-0">
                <h2 class="text-3xl md:text-4xl font-bold mb-2">Web Development</h2>
                <p class="text-lg">Latest articles about web technologies, frameworks, and best practices</p>
            </div>

            <div class="w-full md:w-auto">
                <div class="relative">
                    <input type="text" placeholder="Search in Web Development..."
                            class="w-full md:w-64 lg:w-96 px-4 py-3 rounded-md text-gray-800 pr-10">
                    <button class="absolute right-3 top-3 text-gray-500 hover:text-blue-600">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
