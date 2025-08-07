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
                <div class="relative">
                <button id="userMenuButton" class="flex items-center space-x-2 focus:outline-none">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="w-8 h-8 rounded-full">
                    <span class="hidden md:inline text-gray-700">John Doe</span>
                    <i class="fas fa-chevron-down text-gray-500 text-xs"></i>
                </button>
                <div id="userMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Saved Articles</a>
                    <div class="border-t border-gray-200"></div>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
        <div class="container mx-auto px-4 py-4">
            <a href="{{ route('home') }}" class="block py-2 text-blue-600 font-medium">Home</a>
            <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Articles</a>
            <div class="relative">
                <button class="block py-2 text-gray-600 hover:text-blue-600 transition flex items-center w-full text-left mobile-dropdown-toggle">
                    Categories
                    <i class="fas fa-chevron-down ml-1 text-sm"></i>
                </button>
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
<!-- Header/Navigation -->
<!-- Profile Header -->
<div class="profile-header">
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row items-center md:items-end">
            <div class="avatar-upload mb-4 md:mb-0 md:mr-6">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Profile" class="w-24 h-24 md:w-32 md:h-32 rounded-full border-4 border-white shadow-md">
                <div class="avatar-overlay">
                    <i class="fas fa-camera text-white text-xl"></i>
                    <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept="image/*">
                </div>
            </div>
            <div class="text-center md:text-left">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-800">John Doe</h1>
                <p class="text-gray-600 mb-2">Senior Web Developer</p>
                <div class="flex justify-center md:justify-start space-x-4">
                    <span class="text-gray-600"><i class="fas fa-map-marker-alt mr-1"></i> San Francisco, CA</span>
                    <span class="text-gray-600"><i class="fas fa-calendar-alt mr-1"></i> Joined June 2021</span>
                </div>
                <div class="mt-4 flex justify-center md:justify-start space-x-4">
                    <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-github"></i></a>
                    <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fas fa-globe"></i></a>
                </div>
            </div>
            <div class="mt-4 md:mt-0 md:ml-auto">
                <button class="bg-white text-blue-600 border border-blue-600 px-4 py-2 rounded-md hover:bg-blue-50 transition">
                    <i class="fas fa-edit mr-2"></i> Edit Profile
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Profile Navigation -->
<div class="bg-white border-b">
    <div class="container mx-auto px-4">
        <nav class="flex space-x-8">
            <a href="#" class="py-4 px-1 tab-active">Posts</a>
            <a href="#" class="py-4 px-1 text-gray-600 hover:text-blue-600 transition">Comments</a>
            <a href="#" class="py-4 px-1 text-gray-600 hover:text-blue-600 transition">Bookmarks</a>
            <a href="#" class="py-4 px-1 text-gray-600 hover:text-blue-600 transition">Stats</a>
            <a href="#" class="py-4 px-1 text-gray-600 hover:text-blue-600 transition">Settings</a>
        </nav>
    </div>
</div>
