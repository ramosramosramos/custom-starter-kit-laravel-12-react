
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 | Forbidden</title>
    @vite('resources/css/app.css') {{-- load Tailwind if using Vite --}}
</head>

<body class="min-h-screen flex flex-col items-center justify-center bg-gray-100 px-6">
    <div class="text-center">
        <h1 class="text-9xl font-extrabold text-red-600 tracking-widest">403</h1>
        <p class="text-2xl md:text-3xl font-semibold mt-6 text-gray-800">
            Forbidden
        </p>
        <p class="mt-4 text-gray-500">
            Sorry, you are not authorized to view this page.
            If you believe this is a mistake, please contact support.
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
