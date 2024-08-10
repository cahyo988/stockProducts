<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clean Wash App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <nav class="sticky top-0 z-50 bg-white shadow-lg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <a href="{{ url('/') }}" class="text-2xl font-bold tracking-tight">
                    GudangStock
                </a>
                <div class="hidden md:flex space-x-4">
                    <a href="{{ url('/') }}"
                        class="px-3 py-2 rounded-md text-base font-medium hover:bg-slate-600 hover:text-slate-200 transition duration-300">Home</a>
                    <a href="{{ url('/products') }}"
                        class="px-3 py-2 rounded-md text-base font-medium hover:bg-slate-600 hover:text-slate-200 transition duration-300">Products</a>
                    @auth
                        <a href="{{ url('/sales') }}"
                            class="px-3 py-2 rounded-md text-base font-medium hover:bg-slate-600 hover:text-slate-200 transition duration-300">Penjualan</a>
                        <span class="px-3 py-2 rounded-md text-base font-medium">Hi, {{ auth()->user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit"
                                class="px-3 py-2 rounded-md text-white text-base font-medium bg-slate-700 hover:bg-slate-100 hover:text-slate-700 transition duration-300">
                                Logout
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                            class="px-3 py-2 rounded-md text-white text-base font-medium bg-slate-700 hover:bg-slate-100 hover:text-slate-700 transition duration-300">Login</a>
                    @endauth
                </div>
                <div class="md:hidden">
                    <button onclick="toggleMenu()"
                        class="inline-flex items-center justify-center p-2 rounded-md hover:text-gray-200 hover:bg-slate-600 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span id="menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="{{ url('/') }}"
                    class="block px-3 py-2 rounded-md text-base font-medium hover:bg-slate-600 hover:text-slate-200 transition duration-300">Home</a>
                <a href="{{ url('/products') }}"
                    class="block px-3 py-2 rounded-md text-base font-medium hover:bg-slate-600 hover:text-slate-200 transition duration-300">Products</a>
                <a href="{{ url('/sales') }}"
                    class="block px-3 py-2 rounded-md text-base font-medium hover:bg-slate-600 hover:text-slate-200 transition duration-300">Penjualan</a>

                @auth
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit"
                            class="block w-full text-left px-3 py-2 rounded-md text-base font-medium text-white bg-slate-700 hover:bg-slate-100 hover:text-slate-700 transition duration-300">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}"
                        class="block px-3 py-2 rounded-md text-base font-medium text-white bg-slate-700 hover:bg-slate-100 hover:text-slate-700 transition duration-300">Login</a>
                @endauth
            </div>
        </div>
    </nav>

    @yield('content')

    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            const icon = document.getElementById('menu-icon').querySelector('svg');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
                icon.setAttribute('d', 'M6 18L18 6M6 6l12 12');
            } else {
                menu.classList.add('hidden');
                icon.setAttribute('d', 'M4 5h12M4 10h12m-7 5h7');
            }
        }
    </script>
</body>

</html>
