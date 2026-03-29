<x-layouts.site title="Widow Empowerment — The Deborah Bonat Foundation">

    <x-site.hero
        title='<span class="text-brand-gold">Widow</span> Empowerment'
        subtitle='"He heals the brokenhearted and binds up their wounds." — Psalm 147:3'
    />

    <section class="py-20 bg-brand-cream">
        <div class="max-w-4xl mx-auto px-4 sm:px-6">

            <div class="bg-white rounded-3xl p-8 sm:p-12 border border-purple-100 shadow-sm mb-10">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-xl bg-brand-blue/10 flex items-center justify-center text-2xl text-brand-blue">
                        <i class="fa-solid fa-hands-holding-heart"></i>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-brand-blue">Widows to Workers (W2W)</h2>
                        <p class="text-brand-gold text-sm font-semibold">Our Initiative</p>
                    </div>
                </div>

                <h3 class="text-lg font-bold text-gray-800 mb-3">The Problem</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Widowhood in Nigeria is often compounded by economic vulnerability, social isolation, and cultural
                    stigma. Many women who lose their husbands lose their primary income source, their home, and sometimes
                    even their standing in the community — all at once.
                </p>

                <h3 class="text-lg font-bold text-gray-800 mb-3">Our Response</h3>
                <p class="text-gray-600 leading-relaxed mb-4">
                    The Widows to Workers (W2W) initiative equips widows with practical skills — tailoring, soap-making,
                    food processing, agriculture, and digital literacy — combined with business seed grants, mentorship,
                    and a supportive community of peers.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">
                    @foreach([
                        ['Skills Training', '3–6 month vocational programmes in high-demand trades'],
                        ['Seed Grants', 'Micro-grants to help participants launch their first business'],
                        ['Peer Circles', 'Monthly support groups for accountability and encouragement'],
                        ['Spiritual Care', 'Chaplaincy and grief counselling integrated into every cohort'],
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
                    ['Who can benefit from W2W?', 'Any widow in Nigeria, regardless of age or tribe. Priority is given to women with dependent children and those facing economic hardship.'],
                    ['How do I refer a widow?', 'Contact us through our contact page or speak to our Field Officers in your local ECWA church. Any community leader can make a referral.'],
                    ['How can I support this program?', 'You can donate directly to the W2W program, volunteer as a skills trainer, or partner as a business mentor.'],
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
                <a href="{{ route('get-involved.donate') }}?program=widows"
                   class="inline-flex items-center justify-center px-8 py-3.5 bg-brand-gold text-brand-blue rounded-xl font-bold text-sm hover:bg-brand-gold-light transition-colors">
                    Support Widow Empowerment
                </a>
                <a href="{{ route('get-involved.volunteer') }}"
                   class="inline-flex items-center justify-center px-8 py-3.5 bg-white border border-purple-200 text-brand-blue rounded-xl font-semibold text-sm hover:bg-brand-cream transition-colors">
                    Volunteer as a Trainer
                </a>
            </div>
        </div>
    </section>

    <x-site.cta-banner />

</x-layouts.site>
