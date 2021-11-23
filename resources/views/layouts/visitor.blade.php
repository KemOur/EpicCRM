<!-- NAV VISITOR -->
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/">
                    <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                </a>
            </div>
            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-nav-link href="/" :active="request()->routeIs('pages.welcome')" style="text-decoration: none;color: #59B0E3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                    </svg>
                </x-nav-link>
                <x-nav-link href="features" :active="request()->routeIs('commercial.dashboard')" style="text-decoration: none;">
                    {{ __('Fonctionnalités') }}
                </x-nav-link>
                <x-nav-link href="pricing" :active="request()->routeIs('commercial.dashboard')" style="text-decoration: none;">
                    {{ __('Tarif') }}
                </x-nav-link>
                <x-nav-link href="about" :active="request()->routeIs('commercial.dashboard')" style="text-decoration: none;">
                    {{ __('À propos') }}
                </x-nav-link>
                <x-nav-link :href="route('login')" :active="request()->routeIs('commercial.dashboard')" style="text-decoration: none;">
                    {{ __('connexion') }}
                </x-nav-link>
            </div>
        </div>
    </div>
</nav>
