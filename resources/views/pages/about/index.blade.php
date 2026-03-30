<x-layouts.site title="About Us — The Deborah Bonat Foundation">

    <x-site.hero
        title="About The Deborah Bonat Foundation"
        subtitle="Empowering widows, orphans, the elderly, missionaries, and new converts to live with dignity, hope, and self-sufficiency."
    />

    {{-- Founder Teaser --}}
    <section class="py-20 bg-brand-cream">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <p class="text-brand-gold text-xs font-semibold uppercase tracking-widest mb-3">The Founder</p>
                    <h2 class="text-3xl font-bold text-brand-blue leading-tight">
                        Mama Deborah Iya Bonat
                    </h2>
                    <p class="mt-2 text-brand-blue/60 text-sm">1957 – 23rd March, 2026</p>
                    <div class="mt-5 space-y-4 text-gray-600 leading-relaxed">
                        <p>
                            For 29 years, Mama Deborah walked the long road of widowhood — not with bitterness, but with
                            an open hand. She distributed firewood, foodstuff, and clothing in Jos. She supported local
                            missionaries in the field. She mentored new converts facing persecution.
                        </p>
                        <p>
                            Her final act of service was a mission trip to Taraba State — a journey that embodied everything
                            she believed about going where the need is greatest.
                        </p>
                    </div>
                    <a href="{{ route('about.founder') }}"
                       class="mt-7 inline-flex items-center gap-2 px-6 py-3 bg-brand-blue text-white rounded-xl font-semibold text-sm hover:bg-brand-blue-light transition-colors">
                        Read Her Full Story
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
                <div class="aspect-[4/3] rounded-3xl overflow-hidden border border-gray-200 shadow-sm">
                    <img src="/images/homepage-banner/deborah-bonat-homepage-three.webp"
                         alt="Mama Deborah Iya Bonat"
                         class="w-full h-full object-cover object-top"
                         style="filter: contrast(1.05) brightness(1.02) saturate(1.1);">
                </div>
            </div>
        </div>
    </section>

    {{-- Blueprint: Objectives & Core Values --}}
    <section id="blueprint" class="py-20 bg-white scroll-mt-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-14">
                <p class="text-brand-gold text-xs font-semibold uppercase tracking-widest mb-2">Our Blueprint</p>
                <h2 class="text-3xl font-bold text-brand-blue">Objectives &amp; Core Values</h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <div>
                    <h3 class="text-xl font-bold text-brand-blue mb-6">Our Objectives</h3>
                    <div class="space-y-4">
                        @foreach([
                            ['Direct Aid & Advocacy', 'Provide direct aid, resources, education, vocational training, spiritual support, and advocacy for widows, orphans, the elderly, mission initiatives, and new Christian converts facing persecution and displacement in Nigeria.'],
                            ['Sustainable Solutions', 'Foster sustainable solutions that address the root causes of vulnerability within these communities, enabling long-term self-reliance.'],
                            ['Strategic Collaboration', 'Collaborate with local churches, organisations, and government agencies to maximise impact and reach across Nigeria.'],
                            ['Embody Deborah\'s Spirit', 'Embody the compassionate spirit and dedication exemplified by Deborah I. Bonat — serving without question or hesitation.'],
                        ] as [$obj, $desc])
                            <div class="flex gap-4">
                                <div class="w-2 h-2 rounded-full bg-brand-gold mt-2 shrink-0"></div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">{{ $obj }}</h4>
                                    <p class="text-gray-500 text-sm mt-1 leading-relaxed">{{ $desc }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div>
                    <h3 class="text-xl font-bold text-brand-blue mb-6">Core Values</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach([
                            ['fa-solid fa-heart', 'Compassion', 'Driven by empathy and a genuine desire to alleviate suffering.'],
                            ['fa-solid fa-handshake', 'Integrity', 'Operating with transparency, accountability, and ethical practices.'],
                            ['fa-solid fa-bolt', 'Empowerment', 'Equipping beneficiaries with the skills and resources to become self-reliant.'],
                            ['fa-solid fa-crown', 'Dignity', 'Treating every individual with respect and recognising their inherent worth.'],
                            ['fa-solid fa-hands-praying', 'Faith-Based Action', 'Rooted in Christian principles of love, service, and justice.'],
                            ['fa-solid fa-people-group', 'Collaboration', 'Working in partnership to achieve greater impact.'],
                            ['fa-solid fa-seedling', 'Sustainability', 'Implementing programmes that foster long-term positive change.'],
                        ] as [$icon, $value, $desc])
                            <div class="bg-brand-cream rounded-xl p-4 border border-purple-100">
                                <i class="{{ $icon }} text-brand-blue text-xl mb-2 block"></i>
                                <h4 class="font-semibold text-brand-blue text-sm">{{ $value }}</h4>
                                <p class="text-gray-500 text-xs mt-1 leading-relaxed">{{ $desc }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Leadership --}}
    <section id="leadership" class="py-20 bg-brand-blue/5 border-y border-purple-100 scroll-mt-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-14">
                <p class="text-brand-gold text-xs font-semibold uppercase tracking-widest mb-2">Governance</p>
                <h2 class="text-3xl font-bold text-brand-blue">Leadership &amp; Governance</h2>
            </div>

            {{-- Board of Trustees --}}
            <div class="mb-14">
                <h3 class="text-xl font-bold text-brand-blue mb-8 text-center">Board of Trustees</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach([
                        ['Deborah I. Bonat', 'Founder & President (In Memoriam)', 'The heart, vision, and inspiration of the foundation.'],
                        ['Joy Bulus', 'Treasurer', ''],
                        ['Blessing Swanta Bonat', 'Secretary', ''],
                    ] as [$name, $role, $note])
                        <div class="bg-white rounded-2xl p-6 border border-purple-100 shadow-sm text-center">
                            <div class="w-16 h-16 rounded-full bg-brand-blue/10 flex items-center justify-center mx-auto mb-4 text-brand-blue font-bold text-xl border-2 border-brand-gold/20">
                                {{ strtoupper(substr($name, 0, 1)) }}
                            </div>
                            <h4 class="font-bold text-gray-800">{{ $name }}</h4>
                            <p class="text-brand-blue/70 text-xs font-medium mt-1">{{ $role }}</p>
                            @if($note)
                                <p class="text-gray-400 text-xs mt-2 italic">{{ $note }}</p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Board of Directors --}}
            <div class="mb-14">
                <h3 class="text-xl font-bold text-brand-blue mb-8 text-center">Board of Directors</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach([
                        ['[Name TBC]', 'Chairman, Board of Directors', ''],
                        ['[Name TBC]', 'Executive Director', ''],
                        ['[Name TBC]', 'Director, Programs', ''],
                    ] as [$name, $role, $note])
                        <div class="bg-white rounded-2xl p-6 border border-purple-100 shadow-sm text-center">
                            <div class="w-16 h-16 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4 text-gray-300 font-bold text-xl border-2 border-gray-200">
                                ?
                            </div>
                            <h4 class="font-bold text-gray-800">{{ $name }}</h4>
                            <p class="text-brand-blue/70 text-xs font-medium mt-1">{{ $role }}</p>
                        </div>
                    @endforeach
                </div>
                <p class="text-center text-gray-400 text-xs mt-4">Full board will be announced at foundation launch.</p>
            </div>

            {{-- Operations --}}
            <div class="bg-white rounded-3xl p-8 border border-purple-100 shadow-sm">
                <h3 class="text-xl font-bold text-brand-blue mb-6">The Operations Team</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    @foreach([
                        ['fa-solid fa-user-tie', 'Executive Director', 'Responsible for day-to-day operations, programme implementation, and staff management.'],
                        ['fa-solid fa-clipboard-list', 'Program Managers', 'Each of the five pillars is overseen by a dedicated manager responsible for budgeting, delivery, and beneficiary reporting.'],
                        ['fa-solid fa-people-carry-box', 'Field Officers & Social Workers', 'Community-embedded staff directly involved in beneficiary identification, needs assessment, and programme delivery.'],
                        ['fa-solid fa-file-invoice', 'Administrative & Support Staff', 'Handling finance, communications, fundraising, and logistics to keep the foundation running effectively.'],
                        ['fa-solid fa-hands-holding-circle', 'Volunteer Network', 'Community members engaged across all programmes — visiting, training, mentoring, and distributing.'],
                    ] as [$icon, $title, $desc])
                        <div class="flex gap-3 items-start">
                            <div class="w-9 h-9 rounded-lg bg-brand-blue/10 flex items-center justify-center shrink-0 mt-0.5">
                                <i class="{{ $icon }} text-brand-blue text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 text-sm">{{ $title }}</h4>
                                <p class="text-gray-500 text-xs mt-1 leading-relaxed">{{ $desc }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <x-site.cta-banner />

</x-layouts.site>
