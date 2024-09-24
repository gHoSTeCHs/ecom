<x-layout>
    <div class="min-h-screen flex bg-bg-sec">
        <!-- Sidebar -->
        <aside class="w-64 bg-primary text-bg-primary p-6 hidden lg:block">
            <div class="flex flex-col space-y-4">
                <a href="#" class="font-bold text-xl">Dashboard</a>
                <a href="#" class="text-text-sec hover:text-bg-primary transition">Profile</a>
                <a href="#" class="text-text-sec hover:text-bg-primary transition">Settings</a>
                <a href="#" class="text-text-sec hover:text-bg-primary transition">Notifications</a>
                <form action="/logout" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="text-text-sec hover:text-bg-primary transition">Logout</button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <!-- Top Navbar (for mobile screens) -->
            <div class="lg:hidden flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-primary">Dashboard</h1>
                <button class="text-primary">
                    <!-- Hamburger Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                         class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

            <!-- Profile Header -->
            <div class="bg-bg-primary p-6 rounded-lg shadow-lg mb-6">
                <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                    <div class="w-32 h-32 rounded-full bg-gray-300 overflow-hidden">
                        <img src="https://via.placeholder.com/150" alt="Profile Picture"
                             class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1">
                        <h1 class="text-3xl font-bold text-primary">John Doe</h1>
                        <p class="text-text-sec">john.doe@example.com</p>
                        <p class="text-text-tet mt-1">Member since: January 1, 2023</p>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="bg-bg-primary p-4 rounded-lg shadow-lg text-center">
                    <h2 class="text-2xl font-bold text-primary">120</h2>
                    <p class="text-text-sec">Posts</p>
                </div>
                <div class="bg-bg-primary p-4 rounded-lg shadow-lg text-center">
                    <h2 class="text-2xl font-bold text-primary">15</h2>
                    <p class="text-text-sec">Comments</p>
                </div>
                <div class="bg-bg-primary p-4 rounded-lg shadow-lg text-center">
                    <h2 class="text-2xl font-bold text-primary">8</h2>
                    <p class="text-text-sec">Followers</p>
                </div>
            </div>

            <!-- Personal Information -->
            <div class="bg-bg-primary p-6 rounded-lg shadow-lg mb-6">
                <h2 class="text-xl font-bold text-primary mb-4">Personal Information</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <p class="text-text-sec mb-2">Full Name: John Doe</p>
                        <p class="text-text-sec mb-2">Email: john.doe@example.com</p>
                        <p class="text-text-sec mb-2">Phone: +1 234 567 890</p>
                    </div>
                    <div>
                        <p class="text-text-sec mb-2">Address: 123 Main St, Springfield, IL</p>
                        <p class="text-text-sec mb-2">Country: United States</p>
                    </div>
                </div>
            </div>

            <!-- Edit Profile Button -->
            <div class="text-right">
                <button
                    class="px-4 py-2 bg-primary text-bg-primary font-semibold rounded-lg hover:bg-opacity-80 transition">
                    Edit Profile
                </button>
            </div>
        </div>
    </div>


</x-layout>
