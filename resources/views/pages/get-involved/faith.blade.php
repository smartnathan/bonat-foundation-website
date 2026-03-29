<x-layouts.site title="Faith-Based Collaboration — The Deborah Bonat Foundation">

    <x-site.hero
        title='Faith-Based <span class="text-brand-gold">Collaboration</span>'
        subtitle="The church is the foundation's first partner. This is family."
    />

    <section class="py-20 bg-brand-cream">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

                <div class="space-y-8">
                    <div class="bg-white rounded-2xl p-8 border border-purple-100 shadow-sm">
                        <h3 class="text-xl font-bold text-brand-blue mb-3">ECWA / EMS Churches</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            The Deborah Bonat Foundation was born within the ECWA family and remains deeply connected
                            to the Evangelical Church Winning All and the ECWA Missionary Society. ECWA congregations
                            are our natural local chapter network.
                        </p>
                        <p class="mt-3 text-gray-600 text-sm leading-relaxed">
                            Your church can host distributions, identify beneficiaries, mobilise volunteers, and
                            receive training for your pastoral team to provide community care.
                        </p>
                    </div>

                    <div class="bg-white rounded-2xl p-8 border border-purple-100 shadow-sm">
                        <h3 class="text-xl font-bold text-brand-blue mb-3">Any Bible-Believing Church</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            You do not need to be an ECWA congregation to partner with us. Any church committed to
                            James 1:27 — caring for orphans and widows in their distress — is welcome in this network.
                        </p>
                    </div>

                    <div class="bg-white rounded-2xl p-8 border border-purple-100 shadow-sm">
                        <h3 class="text-xl font-bold text-brand-blue mb-3">Missions Organisations</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            If your organisation supports missionaries in Northern Nigeria, we want to coordinate with you.
                            Share beneficiary lists, co-fund field workers, or help us identify new converts who need care.
                        </p>
                    </div>
                </div>

                <div>
                    <div class="bg-brand-blue rounded-3xl p-8 text-white mb-8">
                        <p class="text-brand-gold font-bold text-lg mb-4">How to Become a Local Chapter</p>
                        <div class="space-y-4">
                            @foreach([
                                ['1', 'Contact Us', 'Reach out through the contact form expressing interest in partnership.'],
                                ['2', 'Meet the Team', 'A foundation representative will schedule a call to discuss alignment.'],
                                ['3', 'Sign MOU', 'We formalise the partnership through a simple Memorandum of Understanding.'],
                                ['4', 'Start Serving', 'Your congregation begins identifying and supporting beneficiaries in your area.'],
                            ] as [$num, $step, $desc])
                                <div class="flex gap-4">
                                    <div class="w-8 h-8 rounded-full bg-brand-gold flex items-center justify-center text-brand-blue font-bold text-sm shrink-0">{{ $num }}</div>
                                    <div>
                                        <p class="font-semibold text-sm">{{ $step }}</p>
                                        <p class="text-white/60 text-xs mt-0.5">{{ $desc }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <blockquote class="bg-brand-cream rounded-2xl p-6 border border-purple-100">
                        <p class="text-brand-blue italic leading-relaxed">
                            "Pure and undefiled religion before God the Father is this: to visit orphans and widows in their trouble,
                            and to keep oneself unspotted from the world."
                        </p>
                        <footer class="mt-3 text-brand-gold text-sm font-semibold">James 1:27</footer>
                    </blockquote>

                    <div class="mt-8 text-center">
                        <a href="{{ route('contact') }}"
                           class="inline-flex items-center justify-center px-8 py-3.5 bg-brand-gold text-brand-blue rounded-xl font-bold text-sm hover:bg-brand-gold-light transition-colors">
                            Partner Your Church
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.site>
