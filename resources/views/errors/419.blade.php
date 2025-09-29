<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>419 | Page Expired</title>
    @vite('resources/css/app.css') {{-- load Tailwind if using Vite --}}
</head>

<body class="min-h-screen flex flex-col items-center justify-center bg-gray-100 px-6">
    <div class="text-center">
        <h1 class="text-9xl font-extrabold text-red-600 tracking-widest">419</h1>
        <p class="text-2xl md:text-3xl font-semibold mt-6 text-gray-800">
            Page Expired
        </p>
        <p class="mt-4 text-gray-500">
            This usually happens if the page was left open too long or your session ended.
            Try refreshing the page or logging in again.
        </p>


        <div class="mt-8 mb-10 flex justify-center gap-5 flex-wrap space-x-4">
            <a href="{{ url('/') }}"
                class="px-6 py-3 bg-red-600 text-white rounded-lg shadow hover:bg-red-700 transition">
                Go Home
            </a>
            <a href="{{ url()->previous() }}"
                class="px-6 py-3 bg-gray-200 text-gray-800 rounded-lg shadow hover:bg-gray-300 transition">
                Go Back
            </a>
        </div>
    </div>

    <div class="mt-20 text-gray-400 text-sm">
        &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
    </div>
</body>

</html>
