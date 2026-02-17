<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Project</title>
    <script src=https://cdn.tailwindcss.com></script>
</head>

<body>
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-green-400" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2c-.6 0-1 .4-1 1v1.1c-1.1.2-2 .8-2.7 1.7-.8 1-1.3 2.3-1.3 3.7 0 .7.1 1.4.3 2-1.4 1.1-2.3 2.9-2.3 4.8 0 3.3 2.7 6 6 6h2c3.3 0 6-2.7 6-6 0-1.9-.9-3.7-2.3-4.8.2-.6.3-1.3.3-2 0-1.4-.5-2.7-1.3-3.7-.7-.9-1.6-1.5-2.7-1.7V3c0-.6-.4-1-1-1z" />
                            </svg>
                            <span class="text-white font-semibold text-lg">
                                Pear
                            </span>
                        </div>



                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                                <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                                <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <header class="relative bg-white shadow-sm">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{$heading}}</h1>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{$slot}}
            </div>
        </main>
    </div>

</body>

</html>