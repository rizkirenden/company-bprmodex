<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing H1 dengan Tailwind</title>

    <!-- Fonts (opsional) -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 dark:bg-gray-900 p-8 min-h-screen">

    <div class="max-w-4xl mx-auto space-y-6">

        <!-- Test 1: Basic H1 -->
        <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
                Basic H1 - Let's get started
            </h1>
        </div>

        <!-- Test 2: Blue H1 -->
        <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow">
            <h1 class="text-3xl font-bold text-blue-600 dark:text-blue-400">
                Blue Colored H1
            </h1>
        </div>

        <!-- Test 3: Gradient H1 -->
        <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow">
            <h1 class="text-4xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">
                Gradient H1 Text
            </h1>
        </div>

        <!-- Test 4: H1 dengan underline -->
        <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow">
            <h1 class="text-3xl font-bold underline decoration-blue-500 underline-offset-8">
                Underlined H1
            </h1>
        </div>

        <!-- Test 5: H1 dengan tracking (letter spacing) -->
        <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow">
            <h1 class="text-3xl font-bold tracking-wide">
                Tracking Wide H1
            </h1>
        </div>

        <!-- Test 6: Responsive H1 -->
        <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow">
            <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-center">
                Responsive H1 (ubah ukuran browser)
            </h1>
        </div>

        <!-- Test 7: H1 dengan shadow -->
        <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow">
            <h1 class="text-4xl font-bold drop-shadow-lg">
                Drop Shadow H1
            </h1>
        </div>

        <!-- Test 8: H1 dengan hover effect -->
        <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow">
            <h1
                class="text-3xl font-bold text-gray-700 hover:text-red-500 hover:scale-105 transition-all duration-300 cursor-pointer">
                Hover me!
            </h1>
        </div>

        <!-- Test 9: H1 dengan border bottom -->
        <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow">
            <h1 class="text-2xl font-bold pb-2 border-b-4 border-blue-500 inline-block">
                Border Bottom H1
            </h1>
        </div>

        <!-- Test 10: H1 dari file original Anda -->
        <div class="p-6 bg-white dark:bg-[#161615] rounded-lg shadow">
            <h1 class="mb-1 font-medium text-blue-600 dark:text-blue-400">
                Let's get started (Original style + blue)
            </h1>
            <p class="text-gray-600 dark:text-gray-400">Original paragraph styling</p>
        </div>

    </div>

</body>

</html>
