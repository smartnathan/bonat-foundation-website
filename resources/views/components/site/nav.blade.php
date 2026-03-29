<nav
    x-data="{ mobileOpen: false, programsOpen: false }"
    @click.outside="programsOpen = false"
    class="bg-brand-blue shadow-lg sticky top-0 z-50"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            {{-- Logo --}}
            <a href="{{ route('legacy') }}" class="flex items-center gap-2 shrink-0">
                <span class="text-brand-gold font-bold text-lg leading-tight tracking-wide">
                    TDB<span class="text-white">F</span>
                </span>
                <span class="hidden sm:block text-white font-semibold text-sm leading-tight">
                    The Deborah Bonat<br>
                    <span class="text-brand-gold text-xs font-normal tracking-widest uppercase">Foundation</span>
                </span>
            </a>

            {{-- Desktop Nav --}}
            <div class="hidden lg:flex items-center gap-1">

                <a href="{{ route('legacy') }}"
                   class="nav-link {{ request()->routeIs('legacy') ? 'text-brand-gold' : 'text-white/80 hover:text-brand-gold' }} px-3 py-2 text-sm font-medium transition-colors">
                    Home
                </a>

                <a href="{{ route('about') }}"
                   class="nav-link {{ request()->routeIs('about*') ? 'text-brand-gold' : 'text-white/80 hover:text-brand-gold' }} px-3 py-2 text-sm font-medium transition-colors">
                    About Us
                </a>

                {{-- Programs Dropdown --}}
                <div class="relative">
                    <button
                        @click="programsOpen = !programsOpen"
                        class="flex items-center gap-1 px-3 py-2 text-sm font-medium transition-colors {{ request()->routeIs('programs.*') ? 'text-brand-gold' : 'text-white/80 hover:text-brand-gold' }}"
                    >
                        Our Programs
                        <svg class="w-4 h-4 transition-transform" :class="programsOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <div
                        x-show="programsOpen"
                        x-transition:enter="transition ease-out duration-150"
                        x-transition:enter-start="opacity-0 -translate-y-1"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-100"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-1"
                        @click.outside="programsOpen = false"
                        class="absolute left-0 top-full mt-1 w-60 bg-white rounded-lg shadow-xl border border-purple-100 py-2 z-50"
                        style="display: none"
                    >
                        <a href="{{ route('programs.index') }}" class="dropdown-item flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-purple-50 hover:text-brand-blue">
                            <span class="text-lg"></span> All Programs
                        </a>
                        <div class="border-t border-gray-100 my-1"></div>
                        <a href="{{ route('programs.widows') }}" class="dropdown-item flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-purple-50 hover:text-brand-blue">
                            <span class="text-lg"></span> Widow Empowerment
                        </a>
                        <a href="{{ route('programs.orphans') }}" class="dropdown-item flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-purple-50 hover:text-brand-blue">
                            <span class="text-lg"></span> Orphan Care
                        </a>
                        <a href="{{ route('programs.elderly') }}" class="dropdown-item flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-purple-50 hover:text-brand-blue">
                            <span class="text-lg"></span> Elderly Care
                        </a>
                        <a href="{{ route('programs.missions') }}" class="dropdown-item flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-purple-50 hover:text-brand-blue">
                            <span class="text-lg"></span> Missions Support
                        </a>
                        <a href="{{ route('programs.new-converts') }}" class="dropdown-item flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-purple-50 hover:text-brand-blue">
                            <span class="text-lg"></span> New Convert Care
                        </a>
                    </div>
                </div>

                <a href="{{ route('impact') }}"
                   class="nav-link {{ request()->routeIs('impact') ? 'text-brand-gold' : 'text-white/80 hover:text-brand-gold' }} px-3 py-2 text-sm font-medium transition-colors">
                    Impact &amp; Stories
                </a>

                <a href="{{ route('get-involved.index') }}"
                   class="nav-link {{ request()->routeIs('get-involved.*') ? 'text-brand-gold' : 'text-white/80 hover:text-brand-gold' }} px-3 py-2 text-sm font-medium transition-colors">
                    Get Involved
                </a>

                <a href="{{ route('media') }}"
                   class="nav-link {{ request()->routeIs('media') ? 'text-brand-gold' : 'text-white/80 hover:text-brand-gold' }} px-3 py-2 text-sm font-medium transition-colors">
                    Media
                </a>

                <a href="{{ route('contact') }}"
                   class="nav-link {{ request()->routeIs('contact') ? 'text-brand-gold' : 'text-white/80 hover:text-brand-gold' }} px-3 py-2 text-sm font-medium transition-colors">
                    Contact
                </a>

                <a href="{{ route('get-involved.donate') }}"
                   class="ml-3 inline-flex items-center px-4 py-2 bg-brand-gold text-brand-blue rounded-lg text-sm font-bold hover:bg-brand-gold-light transition-colors shadow">
                    Donate Now
                </a>
            </div>

            {{-- Mobile hamburger --}}
            <button
                @click="mobileOpen = !mobileOpen"
                class="lg:hidden p-2 rounded-md text-white/80 hover:text-white hover:bg-white/10 transition-colors"
                aria-label="Toggle menu"
            >
                <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display:block">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display:none">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div
        x-show="mobileOpen"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="lg:hidden bg-brand-dark border-t border-white/10"
        style="display: none"
    >
        <div class="px-4 py-3 space-y-1">
            <a href="{{ route('legacy') }}" class="block px-3 py-2.5 text-white/80 hover:text-brand-gold hover:bg-white/5 rounded-md text-sm font-medium transition-colors">Home</a>
            <a href="{{ route('about') }}" class="block px-3 py-2.5 text-white/80 hover:text-brand-gold hover:bg-white/5 rounded-md text-sm font-medium transition-colors">About Us</a>

            <div class="border-l-2 border-brand-gold/30 ml-3 pl-3 space-y-1">
                <p class="text-brand-gold/60 text-xs font-semibold uppercase tracking-wider px-3 pt-1">Our Programs</p>
                <a href="{{ route('programs.index') }}" class="block px-3 py-2 text-white/70 hover:text-brand-gold text-sm transition-colors">All Programs</a>
                <a href="{{ route('programs.widows') }}" class="block px-3 py-2 text-white/70 hover:text-brand-gold text-sm transition-colors">Widow Empowerment</a>
                <a href="{{ route('programs.orphans') }}" class="block px-3 py-2 text-white/70 hover:text-brand-gold text-sm transition-colors">Orphan Care</a>
                <a href="{{ route('programs.elderly') }}" class="block px-3 py-2 text-white/70 hover:text-brand-gold text-sm transition-colors">Elderly Care</a>
                <a href="{{ route('programs.missions') }}" class="block px-3 py-2 text-white/70 hover:text-brand-gold text-sm transition-colors">Missions Support</a>
                <a href="{{ route('programs.new-converts') }}" class="block px-3 py-2 text-white/70 hover:text-brand-gold text-sm transition-colors">New Convert Care</a>
            </div>

            <a href="{{ route('impact') }}" class="block px-3 py-2.5 text-white/80 hover:text-brand-gold hover:bg-white/5 rounded-md text-sm font-medium transition-colors">Impact &amp; Stories</a>
            <a href="{{ route('get-involved.index') }}" class="block px-3 py-2.5 text-white/80 hover:text-brand-gold hover:bg-white/5 rounded-md text-sm font-medium transition-colors">Get Involved</a>
            <a href="{{ route('media') }}" class="block px-3 py-2.5 text-white/80 hover:text-brand-gold hover:bg-white/5 rounded-md text-sm font-medium transition-colors">Media &amp; Resources</a>
            <a href="{{ route('contact') }}" class="block px-3 py-2.5 text-white/80 hover:text-brand-gold hover:bg-white/5 rounded-md text-sm font-medium transition-colors">Contact Us</a>

            <div class="pt-2 pb-1">
                <a href="{{ route('get-involved.donate') }}" class="block w-full text-center px-4 py-3 bg-brand-gold text-brand-blue rounded-lg text-sm font-bold hover:bg-brand-gold-light transition-colors">
                    Donate Now
                </a>
            </div>
        </div>
    </div>
</nav>
