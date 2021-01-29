<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/main.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @isset($header)
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>


        <footer class="bg-gray-800 text-gray-300 px-6 lg:px-8 py-6 md:py-12">
            <div class="max-w-screen-xl mx-auto grid md:grid-cols-2 lg:grid-cols-5 gap-6 lg:gap-x-8">
                <div>
                    <h5 class="text-xl font-semibold text-white">Product</h5>
                    <nav class="mt-4">
                        <ul class="space-y-2">
                            <li>
                                <a href="#" class="font-normal text-base hover:text-gray-100">Landingpages</a>
                            </li>
                            <li>
                                <a href="#" class="font-normal text-base hover:text-gray-100">Features</a>
                            </li>
                            <li>
                                <a href="#" class="font-normal text-base hover:text-gray-100">Documentation</a>
                            </li>
                            <li>
                                <a href="#" class="font-normal text-base hover:text-gray-100">Careers</a>
                            </li>
                            <li>
                                <a href="#" class="font-normal text-base hover:text-gray-100">Blocks</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div>
                    <h5 class="text-xl font-semibold text-white">Industries</h5>
                    <nav class="mt-4">
                        <ul class="space-y-2">
                            <li>
                                <a href="#" class="font-normal text-base hover:text-gray-100">Employment</a>
                            </li>
                            <li>
                                <a href="#" class="font-normal text-base hover:text-gray-100">Childcare</a>
                            </li>
                            <li>
                                <a href="#" class="font-normal text-base hover:text-gray-100">Education</a>
                            </li>
                            <li>
                                <a href="#" class="font-normal text-base hover:text-gray-100">Accountancy</a>
                            </li>
                            <li>
                                <a href="#" class="font-normal text-base hover:text-gray-100">Wholesale</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div>
                    <h5 class="text-xl font-semibold text-white">About us</h5>
                    <nav class="mt-4">
                        <ul class="space-y-2">
                            <li>
                                <a href="#" class="font-normal text-base hover:text-gray-100">Company</a>
                            </li>
                            <li>
                                <a href="#" class="font-normal text-base hover:text-gray-100">Download brochure</a>
                            </li>
                            <li>
                                <a href="#" class="font-normal text-base hover:text-gray-100">Media Kit</a>
                            </li>
                            <li>
                                <a href="#" class="font-normal text-base hover:text-gray-100">Accountancy</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div>
                    <h5 class="text-xl font-semibold text-white">Legal</h5>
                    <nav class="mt-4">
                        <ul class="space-y-2">
                            <li>
                                <a href="#" class="font-normal text-base hover:text-gray-100">Terms and conditions</a>
                            </li>
                            <li>
                                <a href="#" class="font-normal text-base hover:text-gray-100">Security</a>
                            </li>
                            <li>
                                <a href="#" class="font-normal text-base hover:text-gray-100">Privacy and Cookie
                                    Statement</a>
                            </li>
                            <li>
                                <a href="#" class="font-normal text-base hover:text-gray-100">Processor Agreement</a>
                            </li>
                            <li>
                                <a href="#" class="font-normal text-base hover:text-gray-100">Sitemap</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div>
                    <h5 class="text-xl font-semibold text-white">Contact</h5>
                    <div class="space-y-4 md:space-y-6 mt-4">
                        <div class="flex items-start space-x-4">
                            <div>
                                <svg class="w-6 h-6 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <address class="not-italic">
                                    Rorikstraat 159<br>
                                    Wijk bij Duurstede<br>
                                    The Netherlands
                                </address>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div>
                                <svg class="w-6 h-6 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <a href="#" class="hover:text-gray-100">support@hello.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="max-w-screen-xl mx-auto flex flex-col md:flex-row justify-between items-center space-y-4 mt-16 lg:mt-20">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('index') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>
                <div class="text-sm">
                    &copy; {{ \Carbon\Carbon::now()->format('Y') }} {{ config('app.name') }}. All rights reserved.
                </div>
            </div>
        </footer>
    </div>

    @stack('modals')
    @stack('scripts')

    @livewireScripts
</body>

</html>