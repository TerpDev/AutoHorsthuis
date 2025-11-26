<!-- NAVBAR -->
<nav
    x-data="{
        mobileOpen:false,
        scrolled:false,
        lOpen:false,
        hOpen:false,
        cOpen:false,
        forceDark: {{ request()->is('LutscherAlmGallerij', 'AlmHutteGallerij') || request()->is('vacatures/*') ? 'true' : 'false' }},
    }"
    x-init="
        scrolled = window.scrollY > 10;

        // body scroll blokkeren als mobile menu open is
        $watch('mobileOpen', value => {
            document.body.classList.toggle('overflow-hidden', value);
        });
    "
    @scroll.window="if (!mobileOpen) { scrolled = window.scrollY > 10 }"
    :class="forceDark
        ? 'bg-black'
        : (mobileOpen
            ? 'bg-black/90 shadow-lg backdrop-blur-sm'
            : (scrolled ? 'bg-black/80 shadow-lg backdrop-blur-sm' : 'bg-transparent'))"
    class="fixed top-0 left-0 w-full z-50 transition-colors duration-300"
>
    {{-- FULLSCREEN OVERLAY ACHTER HET MENU (MOBIEL) --}}
    <div x-cloak
         x-show="mobileOpen"
         x-transition.opacity
         class="fixed inset-0 bg-black/80 backdrop-blur-sm lg:hidden z-40">
    </div>

    {{-- NAV CONTENT --}}
    <div class="relative mx-auto w-full max-w-6xl px-6 lg:px-8 z-50">
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

        <!-- Mobile menu panel -->
        <div x-cloak
             x-show="mobileOpen"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             class="lg:hidden pb-4"
        >
            <div class="mt-2 rounded-2xl bg-black/90 backdrop-blur-md border border-white/10 shadow-xl">
                <div class="flex flex-col gap-1 pt-3 pb-2 text-base font-medium">
                    <a href="/"
                       class="px-5 py-2 flex items-center justify-between
                              {{ request()->is('/') ? 'bg-white/10 text-red-500' : 'text-white/90 hover:bg-white/5' }}">
                        <span>Home</span>
                    </a>

                    <a href="/autoschade"
                       class="px-5 py-2 flex items-center justify-between
                              {{ request()->is('autoschade') ? 'bg-white/10 text-red-500' : 'text-white/90 hover:bg-white/5' }}">
                        <span>Autoschade</span>
                    </a>

                    <a href="/spuiterij"
                       class="px-5 py-2 flex items-center justify-between
                              {{ request()->is('spuiterij') ? 'bg-white/10 text-red-500' : 'text-white/90 hover:bg-white/5' }}">
                        <span>Spuiterij</span>
                    </a>

                    <a href="/banden-velgen"
                       class="px-5 py-2 flex items-center justify-between
                              {{ request()->is('banden-velgen') ? 'bg-white/10 text-red-500' : 'text-white/90 hover:bg-white/5' }}">
                        <span>Banden/Velgen</span>
                    </a>

                    <a href="/contact"
                       class="px-5 py-2 flex items-center justify-between
                              {{ request()->is('contact') ? 'bg-white/10 text-red-500' : 'text-white/90 hover:bg-white/5' }}">
                        <span>Contact</span>
                    </a>
                </div>

                <!-- CTA's onder in menu -->
                <div class="px-5 pb-4 pt-2 flex flex-col gap-2 text-sm">
                    <a href="tel:0622373308"
                       class="w-full inline-flex items-center justify-center rounded-xl bg-red-600 px-4 py-2.5 font-semibold text-white hover:bg-red-500 transition">
                        Bel 06 22 37 33 08
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
