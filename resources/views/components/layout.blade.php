<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/css/app.js'])
</head>
<body class="bg-slate-500 text-white">
    <div class="container mx-auto px-10">
        <nav class="flex justify-between items-center py-4 border-b bo">
            <div>
                <a href="/">
                    <div class="flex gap-1">
                        <img class="w-[20px]" src="{{ Vite::asset('resources/assets/logo.svg') }}" alt="logo">
                        <span>Pixel Position</span>
                    </div>
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>
            <div>
                <a href="">Post a job</a>
            </div>
        </nav>
        <main class="mt-10 max-w-[986px] m-auto">{{ $slot }}</main>
    </div>
</body>
</html>