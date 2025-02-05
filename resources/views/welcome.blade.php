<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel with Tailwind</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <!-- Navigation Bar -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <a href="#" class="flex items-center py-4 px-2">
                        <span class="font-semibold text-gray-500 text-lg">Laravel Tailwind</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-1">
                    <a href="#" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Home</a>
                    <a href="#" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">About</a>
                    <a href="#" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Services</a>
                    <a href="#" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-blue-600 text-white py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">Welcome to Laravel with Tailwind</h1>
            <p class="text-lg mb-8">Build modern, responsive web applications with ease.</p>
            <a href="#" class="bg-white text-blue-600 py-2 px-4 rounded-lg font-semibold hover:bg-blue-100 transition duration-300">Get Started</a>
        </div>
    </section>

    <!-- Card Grid Section -->
    <section class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
           <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="" alt="Local Image 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2">Card Title 1</h2>
                    <p class="text-gray-600">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Learn More</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="" alt="Local Image 2" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2">Card Title 2</h2>
                    <p class="text-gray-600">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white shadow-lg mt-8">
        <div class="container mx-auto px-4 py-6 text-center">
            <p class="text-gray-600">&copy; 2023 Laravel Tailwind. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>