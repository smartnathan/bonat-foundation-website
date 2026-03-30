<x-layouts.site title="Orphan Care — The Deborah Bonat Foundation">

    <x-site.hero
        title='<span class="text-brand-gold">Orphan</span> Care'
        subtitle='"A father to the fatherless, a defender of widows, is God in his holy dwelling." — Psalm 68:5'
    />

    <section class="py-20 bg-brand-cream">
        <div class="max-w-4xl mx-auto px-4 sm:px-6">

            <div class="bg-white rounded-3xl p-8 sm:p-12 border border-purple-100 shadow-sm mb-10">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-xl bg-brand-blue/10 flex items-center justify-center text-2xl text-brand-blue">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-brand-blue">The HOPE Fund</h2>
                        <p class="text-brand-gold text-sm font-semibold">Hope for Orphans' Education Fund</p>
                    </div>
                </div>

                <h3 class="text-lg font-bold text-gray-800 mb-3">The Problem</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Millions of children in Nigeria — aged 0 to 18 — grow up without one or both parents. Without
                    sponsorship, many will never complete primary school. Beyond education, orphaned children face
                    trauma, instability, and the absence of guidance at the most formative period of their lives.
                </p>

                <h3 class="text-lg font-bold text-gray-800 mb-3">Our Response</h3>
                <p class="text-gray-600 leading-relaxed mb-4">
                    The Hope for Orphans Education Fund (HOPE Fund) delivers full educational sponsorships alongside
                    shelter, mentorship, psychological support, and where possible, family reunification — giving every
                    child a foundation for a dignified future.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">
                    @foreach([
                        ['Educational Support', 'School fees, uniforms, learning materials, and after-school programmes from primary through tertiary level.'],
                        ['Shelter & Care', 'Partnering with or establishing safe, nurturing homes for children in need of stable accommodation.'],
                        ['Mentorship & Guidance', 'Connecting orphans with positive role models and trained mentors for regular guidance.'],
                        ['Psychological Support', 'Trauma counselling and therapeutic interventions to support healing and emotional wellbeing.'],
                        ['Family Reunification', 'Where appropriate and safe, working towards reintegrating children with extended family.'],
                    ] as [$title, $desc])
                        <div class="bg-brand-cream rounded-xl p-4 border border-purple-100">
                            <h4 class="font-semibold text-brand-blue text-sm">{{ $title }}</h4>
                            <p class="text-gray-500 text-xs mt-1 leading-relaxed">{{ $desc }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- FAQ Accordion --}}
            <div x-data="{ open: null }" class="bg-white rounded-3xl border border-purple-100 shadow-sm overflow-hidden">
                <h3 class="text-lg font-bold text-brand-blue p-8 pb-4">Frequently Asked Questions</h3>
                @foreach([
                    ['How much does it cost to sponsor a child?', 'Sponsorship costs vary by school level and location. Contact us for current sponsorship rates. Even a partial contribution is welcome.'],
                    ['Can I sponsor a specific child?', 'Yes. We can connect you with a child in your preferred state or age range, and provide regular progress updates.'],
                    ['How do I nominate an orphan?', 'Community leaders, ECWA pastors, and concerned neighbours can submit nominations through our contact page or Field Officers.'],
                ] as $i => [$q, $a])
                    <div class="border-t border-gray-100">
                        <button
                            @click="open = (open === {{ $i }}) ? null : {{ $i }}"
                            class="w-full flex items-center justify-between px-8 py-5 text-left font-semibold text-gray-800 hover:text-brand-blue transition-colors"
                        >
                            <span>{{ $q }}</span>
                            <svg class="w-5 h-5 text-brand-blue shrink-0 transition-transform" :class="open === {{ $i }} ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div x-show="open === {{ $i }}" x-collapse class="px-8 pb-6 text-gray-500 text-sm leading-relaxed">
                            {{ $a }}
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('get-involved.donate') }}?fund=hope"
                   class="inline-flex items-center justify-center px-8 py-3.5 bg-brand-gold text-brand-blue rounded-xl font-bold text-sm hover:bg-brand-gold-light transition-colors">
                    Sponsor a Child via HOPE Fund
                </a>
                <a href="{{ route('get-involved.volunteer') }}"
                   class="inline-flex items-center justify-center px-8 py-3.5 bg-white border border-purple-200 text-brand-blue rounded-xl font-semibold text-sm hover:bg-brand-cream transition-colors">
                    Volunteer as a Mentor
                </a>
            </div>
        </div>
    </section>

    <x-site.cta-banner />

</x-layouts.site>
