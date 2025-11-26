<!-- NAVBAR -->
<nav
    x-data="{
        mobileOpen:false, scrolled:false, lOpen:false, hOpen:false, cOpen:false,
        forceDark: {{ request()->is('LutscherAlmGallerij', 'AlmHutteGallerij') || request()->is('vacatures/*') ? 'true' : 'false' }},
    }"
    x-init="scrolled = window.scrollY > 10"
    @scroll.window="scrolled = window.scrollY > 10"
    :class="forceDark
        ? 'bg-black'
        : (scrolled ? 'bg-black/80 shadow-lg backdrop-blur-sm' : 'bg-transparent')"
    class="fixed top-0 left-0 w-full z-50 transition-colors duration-300"
>
    <div class="mx-auto w-full max-w-6xl px-6 lg:px-8">
        <div class="flex items-center justify-between h-24 lg:h-28 transition-all duration-300">
            <!-- Logo -->
            <a href="/" class="flex items-center">
                <img src="{{ asset('images/horsthuislogo.webp') }}" alt="Logo" class="h-16 w-auto lg:h-20" />
            </a>

            <!-- Desktop menu -->
            <div class="hidden lg:flex items-center gap-7">
                <a href="/"
                   class="relative text-lg xl:text-xl text-white transition
                   after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:bg-white after:transition-all after:duration-300
                   {{ request()->is('/') ? 'after:w-full font-semibold' : 'after:w-0 hover:after:w-full' }}">
                    Home
                </a>

                <a href="/autoschade"
                   class="relative text-lg xl:text-xl text-white transition
                   after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:bg-white after:transition-all after:duration-300
                   {{ request()->is('autoschade') ? 'after:w-full font-semibold' : 'after:w-0 hover:after:w-full' }}">
                    Autoschade
                </a>

                <a href="/spuiterij"
                   class="relative text-lg xl:text-xl text-white transition
                   after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:bg-white after:transition-all after:duration-300
                   {{ request()->is('spuiterij') ? 'after:w-full font-semibold' : 'after:w-0 hover:after:w-full' }}">
                    Spuiterij
                </a>

                <a href="/banden-velgen"
                   class="relative text-lg xl:text-xl text-white transition
                   after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:bg-white after:transition-all after:duration-300
                   {{ request()->is('banden-velgen') ? 'after:w-full font-semibold' : 'after:w-0 hover:after:w-full' }}">
                    Banden/Velgen
                </a>

                <a href="/contact"
                   class="relative text-lg xl:text-xl text-white transition
                   after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:bg-white after:transition-all after:duration-300
                   {{ request()->is('contact') ? 'after:w-full font-semibold' : 'after:w-0 hover:after:w-full' }}">
                    Contact
                </a>
            </div>

            <!-- Mobile burger -->
            <button @click="mobileOpen=!mobileOpen"
                    class="lg:hidden relative w-11 h-11 flex items-center justify-center"
                    aria-label="Open menu">
                <span class="absolute block h-0.5 w-7 bg-white transition-all duration-300"
                      :class="mobileOpen ? 'rotate-45 translate-y-0' : '-translate-y-2'"></span>
                <span class="absolute block h-0.5 w-7 bg-white transition-all duration-300"
                      :class="mobileOpen ? 'opacity-0' : 'opacity-100'"></span>
                <span class="absolute block h-0.5 w-7 bg-white transition-all duration-300"
                      :class="mobileOpen ? '-rotate-45 translate-y-0' : 'translate-y-2'"></span>
            </button>
        </div>

        <!-- Mobile menu -->
        <div x-cloak x-show="mobileOpen"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             class="lg:hidden pb-6 text-white bg-black/90 backdrop-blur-sm rounded-b-xl"
        >
            <div class="flex flex-col gap-1 pt-3">
                <a href="/" class="px-4 py-2 {{ request()->is('/') ? 'text-red-500 font-semibold' : '' }}">Home</a>
                <a href="/autoschade" class="px-4 py-2 {{ request()->is('autoschade') ? 'text-red-500 font-semibold' : '' }}">Autoschade</a>
                <a href="/spuiterij" class="px-4 py-2  {{ request()->is('spuiterij') ? 'text-red-500 font-semibold' : '' }}">Spuiterij</a>
                <a href="/banden-velgen" class="px-4 py-2  {{ request()->is('banden-velgen') ? 'text-red-500 font-semibold' : '' }}">Banden/Velgen</a>
                <a href="/contact" class="px-4 py-2  {{ request()->is('contact') ? 'text-red-500 font-semibold' : '' }}">Contact</a>
            </div>
        </div>
    </div>
</nav>
