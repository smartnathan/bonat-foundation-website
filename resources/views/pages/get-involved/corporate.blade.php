<x-layouts.site title="Corporate Partnerships — The Deborah Bonat Foundation">

    <x-site.hero
        title='Corporate <span class="text-brand-gold">Partnerships</span>'
        subtitle="CSR that goes beyond compliance — sponsorships that genuinely transform communities."
    />

    <section class="py-20 bg-brand-cream">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">

            <div class="text-center mb-14">
                <h2 class="text-3xl font-bold text-brand-purple">Partner with a Pillar</h2>
                <p class="mt-3 text-gray-500 max-w-xl mx-auto text-sm">
                    Corporate partners can adopt a specific program pillar for a full year, fund a distribution event,
                    or sponsor a cohort of beneficiaries. We provide full reporting and impact documentation.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-14">
                @foreach([
                    ['🥇', 'Pillar Sponsor', 'Fund an entire program pillar for 12 months. Receive dedicated recognition, quarterly reports, and co-branding rights.'],
                    ['🥈', 'Event Sponsor', 'Sponsor a specific distribution event, workshop, or the annual Voices of Grace Conference.'],
                    ['🥉', 'Cohort Sponsor', 'Sponsor a cohort of beneficiaries (e.g. 10 widows through W2W, or 5 children through HOPE Fund) for 12 months.'],
                ] as [$icon, $tier, $desc])
                    <div class="bg-white rounded-2xl p-8 border border-purple-100 shadow-sm text-center">
                        <p class="text-3xl mb-4">{{ $icon }}</p>
                        <h3 class="font-bold text-brand-purple text-lg">{{ $tier }}</h3>
                        <p class="mt-3 text-gray-500 text-sm leading-relaxed">{{ $desc }}</p>
                    </div>
                @endforeach
            </div>

            <div class="bg-brand-purple rounded-3xl p-8 sm:p-12 text-center text-white">
                <h3 class="text-2xl font-bold text-brand-gold mb-3">Ready to Partner?</h3>
                <p class="text-white/70 text-sm max-w-lg mx-auto mb-8">
                    Contact us to request our corporate partnership prospectus and discuss a package tailored to your
                    organisation's values and CSR objectives.
                </p>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center px-8 py-3.5 bg-brand-gold text-brand-purple rounded-xl font-bold text-sm hover:bg-brand-gold-light transition-colors">
                    Request Prospectus
                </a>
            </div>
        </div>
    </section>

</x-layouts.site>
