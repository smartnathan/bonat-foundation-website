<x-layouts.site title="Home — The Deborah Bonat Foundation">

    {{-- Hero --}}
    <section
        class="relative min-h-[90vh] bg-brand-dark overflow-hidden flex items-center"
        x-data="{
            active: 0,
            slides: 3,
            init() {
                setInterval(() => { this.active = (this.active + 1) % this.slides }, 5000)
            }
        }"
        x-init="init()"
    >
        {{-- Background gradient --}}
        <div class="absolute inset-0 bg-gradient-to-br from-brand-dark via-brand-dark to-brand-blue/40 z-0"></div>

        {{-- Subtle diagonal grid texture --}}
        <div class="absolute inset-0 z-0 opacity-[0.04]"
             style="background-image: repeating-linear-gradient(45deg, #D4AF37 0, #D4AF37 1px, transparent 0, transparent 50%); background-size: 28px 28px;"></div>

        {{-- Portrait images — right half --}}
        <div class="absolute inset-y-0 right-0 w-full lg:w-[58%] z-10 pointer-events-none select-none">
            @foreach(['IMG-20260325-WA0011.jpg.jpeg', 'IMG-20260326-WA0006.jpg.jpeg', 'IMG-20260326-WA0036.jpg.jpeg'] as $i => $img)
                <div
                    class="absolute inset-0 transition-opacity duration-1000 ease-in-out"
                    x-cloak
                    :class="active === {{ $i }} ? 'opacity-100' : 'opacity-0'"
                >
                    <img
                        src="/images/homepage-banner/{{ $img }}"
                        alt="Mama Deborah Iya Bonat"
                        class="w-full h-full object-cover object-top"
                        style="filter: contrast(1.1) brightness(1.04) saturate(1.15);"
                    >
                    {{-- Fade left edge into dark background --}}
                    <div class="absolute inset-0" style="background: linear-gradient(to right, #070F2B 0%, #070F2B 5%, rgba(7,15,43,0.85) 22%, rgba(7,15,43,0.3) 45%, transparent 65%);"></div>
                    {{-- Fade bottom --}}
                    <div class="absolute inset-0" style="background: linear-gradient(to top, #070F2B 0%, rgba(7,15,43,0.4) 15%, transparent 35%);"></div>
                </div>
            @endforeach
        </div>

        {{-- Text content --}}
        <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full py-24 lg:py-32">
            <div class="max-w-[520px]">
                <p class="text-brand-gold text-xs font-semibold uppercase tracking-[0.2em] mb-5">The Deborah Bonat Foundation</p>
                <h1 class="text-4xl sm:text-5xl lg:text-[3.5rem] font-bold text-white leading-[1.1]">
                    Turning Every Story<br>
                    <span class="text-brand-gold">of Persecution</span><br>
                    into Resilience
                </h1>
                <p class="mt-6 text-white/70 text-lg leading-relaxed">
                    Serving widows, orphans, the elderly, missionaries, and new converts across Nigeria
                    — in honour of Mama Deborah Iya Bonat.
                </p>
                <div class="mt-10 flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('get-involved.donate') }}"
                       class="inline-flex items-center justify-center px-8 py-4 bg-brand-gold text-brand-blue rounded-xl font-bold hover:bg-brand-gold-light transition-colors shadow-lg shadow-brand-gold/20">
                        Donate Now
                    </a>
                    <a href="{{ route('get-involved.volunteer') }}"
                       class="inline-flex items-center justify-center px-8 py-4 bg-white/10 border border-white/20 text-white rounded-xl font-semibold hover:bg-white/20 transition-colors">
                        Join Our Volunteer Network
                    </a>
                </div>

                {{-- Slide dot indicators --}}
                <div class="mt-10 flex gap-2 items-center">
                    @for($i = 0; $i < 3; $i++)
                        <button
                            @click="active = {{ $i }}"
                            class="h-1.5 rounded-full transition-all duration-500 focus:outline-none"
                            :class="active === {{ $i }} ? 'w-8 bg-brand-gold' : 'w-2.5 bg-white/30 hover:bg-white/50'"
                            aria-label="View photo {{ $i + 1 }}"
                        ></button>
                    @endfor
                </div>
            </div>
        </div>
    </section>

    {{-- Mission & Vision --}}
    <section class="py-20 bg-brand-cream">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-brand-blue">Our Mission &amp; Vision</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-3xl p-8 border border-purple-100 shadow-sm">
                    <div class="w-12 h-12 rounded-xl bg-brand-blue flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-blue">Our Mission</h3>
                    <p class="mt-3 text-gray-600 leading-relaxed">
                        To provide holistic support — spiritual, social, economic, and educational — to the most vulnerable
                        in our communities, transforming suffering into strength and isolation into belonging.
                    </p>
                </div>
                <div class="bg-brand-blue rounded-3xl p-8 shadow-sm">
                    <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white">Our Vision</h3>
                    <p class="mt-3 text-white/70 leading-relaxed">
                        A Nigeria where no widow is abandoned, no orphan is without hope, no elderly person is forgotten,
                        no missionary labours without support, and no new convert faces persecution alone.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Five Pillars --}}
    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-12">
                <p class="text-brand-gold text-xs font-semibold uppercase tracking-widest mb-2">Our Focus Areas</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-brand-blue">The Five Pillars</h2>
                <p class="mt-3 text-gray-500 max-w-xl mx-auto">Five communities she served faithfully — now five pillars of the foundation.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <x-site.pillar-card
                    icon="🌿"
                    title="Widow Empowerment"
                    initiative="Widows to Workers (W2W)"
                    description="Skills training and economic empowerment to transform grieving widows into self-sustaining workers."
                    route="programs.widows"
                />
                <x-site.pillar-card
                    icon="📚"
                    title="Orphan Care"
                    initiative="HOPE Fund"
                    description="Education sponsorships, mentorship, and care packages for orphaned children across Nigeria."
                    route="programs.orphans"
                />
                <x-site.pillar-card
                    icon="🤝"
                    title="Elderly Care"
                    initiative="Golden Care Network (GCN)"
                    description="Dignity-restoring care, visitation, firewood, food, and clothing distributions for the elderly."
                    route="programs.elderly"
                />
                <x-site.pillar-card
                    icon="✝️"
                    title="Missions Support"
                    initiative="EMS Field Support"
                    description="Direct aid and encouragement for local missionaries and ECWA Missionary Society field workers."
                    route="programs.missions"
                />
                <x-site.pillar-card
                    icon="🕊️"
                    title="New Convert Care"
                    initiative="Deborah's Basket"
                    description="Monthly care packages, shelter, and discipleship for new believers facing persecution."
                    route="programs.new-converts"
                />
                <a href="{{ route('get-involved.donate') }}"
                   class="group block bg-brand-gold/10 rounded-2xl p-6 border-2 border-dashed border-brand-gold/40 hover:border-brand-gold hover:bg-brand-gold/20 transition-all text-center flex flex-col items-center justify-center min-h-[200px]">
                    <div class="text-3xl mb-3">💛</div>
                    <h3 class="text-brand-blue font-bold text-lg">Support a Pillar</h3>
                    <p class="mt-2 text-gray-500 text-sm">Your donation directly funds one of these five life-changing programs.</p>
                    <p class="mt-4 text-brand-blue text-sm font-semibold group-hover:text-brand-gold transition-colors">Give Now →</p>
                </a>
            </div>
        </div>
    </section>

    <x-site.cta-banner />

    {{-- Latest News --}}
    <section class="py-20 bg-brand-cream">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="flex items-end justify-between mb-10">
                <div>
                    <p class="text-brand-gold text-xs font-semibold uppercase tracking-widest mb-1">Foundation News</p>
                    <h2 class="text-2xl sm:text-3xl font-bold text-brand-blue">Latest Updates</h2>
                </div>
                <a href="{{ route('impact') }}" class="text-brand-blue text-sm font-semibold hover:text-brand-gold transition-colors hidden sm:block">View all →</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach([
                    ['Foundation Launch', 'The Deborah Bonat Foundation is officially launched in loving memory of Mama Deborah Iya Bonat.', 'Foundation News'],
                    ['Memorial Service', 'Details on the homegoing celebration and thanksgiving service are being finalised. Watch this space.', 'Announcement'],
                    ['Five Pillars Unveiled', 'Learn about our five core programs: W2W, HOPE Fund, Golden Care Network, Missions Support, and Deborah\'s Basket.', 'Programs'],
                ] as [$title, $excerpt, $category])
                    <article class="bg-white rounded-2xl overflow-hidden border border-purple-100 shadow-sm hover:shadow-md transition-shadow">
                        <div class="aspect-video bg-gray-100 flex items-center justify-center text-gray-300 text-sm">[Image placeholder]</div>
                        <div class="p-6">
                            <span class="inline-block px-3 py-1 bg-brand-blue/10 text-brand-blue text-xs font-semibold rounded-full">{{ $category }}</span>
                            <h3 class="mt-3 font-bold text-gray-800">{{ $title }}</h3>
                            <p class="mt-2 text-gray-500 text-sm leading-relaxed">{{ $excerpt }}</p>
                            <a href="{{ route('impact') }}" class="mt-4 inline-block text-brand-blue text-sm font-semibold hover:text-brand-gold transition-colors">Read more →</a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

</x-layouts.site>
