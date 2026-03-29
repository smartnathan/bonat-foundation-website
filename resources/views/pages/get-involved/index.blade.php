<x-layouts.site title="Get Involved — The Deborah Bonat Foundation">

    <x-site.hero
        title='Get <span class="text-brand-gold">Involved</span>'
        subtitle="There are many ways to carry this torch. Find yours."
    />

    <section class="py-20 bg-brand-cream">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8">

                <a href="{{ route('get-involved.donate') }}"
                   class="group bg-white rounded-3xl p-8 border border-purple-100 shadow-sm hover:shadow-md hover:border-brand-gold/40 transition-all flex flex-col">
                    <div class="w-14 h-14 rounded-xl bg-brand-gold/10 flex items-center justify-center text-2xl text-brand-gold mb-5">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <h3 class="text-xl font-bold text-brand-blue group-hover:text-brand-gold transition-colors">Donation Portal</h3>
                    <p class="mt-3 text-gray-500 text-sm leading-relaxed flex-grow">
                        Give a one-time gift or set up a recurring Legacy Gift. Every contribution directly funds one
                        of our five pillars.
                    </p>
                    <p class="mt-5 text-brand-blue text-sm font-semibold group-hover:text-brand-gold transition-colors flex items-center gap-1">
                        Give now <span class="group-hover:translate-x-1 transition-transform inline-block">→</span>
                    </p>
                </a>

                <a href="{{ route('get-involved.volunteer') }}"
                   class="group bg-white rounded-3xl p-8 border border-purple-100 shadow-sm hover:shadow-md hover:border-brand-gold/40 transition-all flex flex-col">
                    <div class="w-14 h-14 rounded-xl bg-brand-blue/10 flex items-center justify-center text-2xl text-brand-blue mb-5">
                        <i class="fa-solid fa-hands-holding-heart"></i>
                    </div>
                    <h3 class="text-xl font-bold text-brand-blue group-hover:text-brand-gold transition-colors">Volunteer Hub</h3>
                    <p class="mt-3 text-gray-500 text-sm leading-relaxed flex-grow">
                        Sign up as a field worker, skills trainer, mentor, or community coordinator. Your time and
                        talent are as valuable as any donation.
                    </p>
                    <p class="mt-5 text-brand-blue text-sm font-semibold group-hover:text-brand-gold transition-colors flex items-center gap-1">
                        Sign up <span class="group-hover:translate-x-1 transition-transform inline-block">→</span>
                    </p>
                </a>

                <a href="{{ route('get-involved.corporate') }}"
                   class="group bg-white rounded-3xl p-8 border border-purple-100 shadow-sm hover:shadow-md hover:border-brand-gold/40 transition-all flex flex-col">
                    <div class="w-14 h-14 rounded-xl bg-brand-blue/10 flex items-center justify-center text-2xl text-brand-blue mb-5">
                        <i class="fa-solid fa-building"></i>
                    </div>
                    <h3 class="text-xl font-bold text-brand-blue group-hover:text-brand-gold transition-colors">Corporate Partnerships</h3>
                    <p class="mt-3 text-gray-500 text-sm leading-relaxed flex-grow">
                        See how your organisation can adopt a pillar, sponsor a program year, or co-host a
                        distribution event. CSR that truly transforms.
                    </p>
                    <p class="mt-5 text-brand-blue text-sm font-semibold group-hover:text-brand-gold transition-colors flex items-center gap-1">
                        Partner with us <span class="group-hover:translate-x-1 transition-transform inline-block">→</span>
                    </p>
                </a>

                <a href="{{ route('get-involved.faith') }}"
                   class="group bg-white rounded-3xl p-8 border border-purple-100 shadow-sm hover:shadow-md hover:border-brand-gold/40 transition-all flex flex-col">
                    <div class="w-14 h-14 rounded-xl bg-brand-blue/10 flex items-center justify-center text-2xl text-brand-blue mb-5">
                        <i class="fa-solid fa-cross"></i>
                    </div>
                    <h3 class="text-xl font-bold text-brand-blue group-hover:text-brand-gold transition-colors">Faith-Based Collaboration</h3>
                    <p class="mt-3 text-gray-500 text-sm leading-relaxed flex-grow">
                        For churches, ECWA congregations, and EMS partner organisations. Learn how your congregation
                        can become a local chapter of the foundation's work.
                    </p>
                    <p class="mt-5 text-brand-blue text-sm font-semibold group-hover:text-brand-gold transition-colors flex items-center gap-1">
                        Collaborate <span class="group-hover:translate-x-1 transition-transform inline-block">→</span>
                    </p>
                </a>
            </div>
        </div>
    </section>

</x-layouts.site>
