<x-layouts.base>
    @auth
        @if (Request::is('static-sign-up'))
            <div class="flex flex-wrap -mx-3">
                <div class="w-full max-w-full px-3 flex-0">
                    @include('layouts.navbars.guest.nav')
                </div>
            </div>
            {{ $slot }}
            @include('layouts.footers.guest.footer')
        @elseif (Request::is('static-sign-in'))
            <div class="container sticky top-0 z-sticky">
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full max-w-full px-3 flex-0">
                        @include('layouts.navbars.guest.nav')
                    </div>
                </div>
            </div>
            {{ $slot }}
            @include('layouts.footers.guest.footer')
        @else
            @if (Request::is('rtl'))
                @include('layouts.navbars.auth.sidebar')
                <main class="ease-soft-in-out xl:mr-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
                    @include('layouts.navbars.auth.nav')
                    <div class="w-full px-6 py-6 mx-auto">
                        {{ $slot }}
                        @include('layouts.footers.auth.footer')
                    </div>
                </main>

            @elseif (Request::is('virtual-reality'))
                @include('layouts.navbars.auth.nav')
                @include('layouts.navbars.auth.sidebar')
                {{ $slot }}
                @include('layouts.footers.auth.footer')
            @else
                @include('layouts.navbars.auth.sidebar')
                <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
                    @include('layouts.navbars.auth.nav')
                    <div class="w-full px-6 py-6 mx-auto">
                        {{ $slot }}
                            @include('layouts.footers.auth.footer')
                    </div>
                </main>
            @endif

            @include('components.plugins.fixed-plugin')
        @endif
    @endauth

    @guest
        @if (in_array(request()->route()->getName(),['static-sign-up', 'register']))
            <div class="flex flex-wrap -mx-3">
                <div class="w-full max-w-full px-3 flex-0">
                    @include('layouts.navbars.guest.nav')
                </div>
            </div>
            {{ $slot }}
        @elseif (in_array(request()->route()->getName(),['static-sign-in', 'login', 'forgot-password', 'reset-password']))

        <div class="container sticky top-0 z-sticky">
            <div class="flex flex-wrap -mx-3">
                <div class="w-full max-w-full px-3 flex-0">
                    @include('layouts.navbars.guest.nav')
                </div>
            </div>
        </div>
            {{ $slot }}
        @endif

        @include('layouts.footers.guest.footer')

    @endguest

</x-layouts.base>
