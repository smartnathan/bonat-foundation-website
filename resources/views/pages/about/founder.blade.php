<x-layouts.site title="The Founder's Story — The Deborah Bonat Foundation">

    <x-site.hero
        title="The Founder's Story"
        subtitle="A woman who turned 29 years of widowhood into a lifetime of ministry."
    />

    <article class="py-20 bg-brand-cream">
        <div class="max-w-3xl mx-auto px-4 sm:px-6">

            {{-- Pull quote --}}
            <blockquote class="mb-14 text-center">
                <p class="text-2xl sm:text-3xl text-brand-purple font-light italic leading-relaxed">
                    "She did not sit down in her grief. She got up and gave it away."
                </p>
                <footer class="mt-4 text-brand-gold/80 text-sm">— A tribute from those who knew her</footer>
            </blockquote>

            {{-- Photo placeholder --}}
            <div class="aspect-video bg-gray-100 rounded-3xl flex items-center justify-center text-gray-300 text-sm border border-gray-200 mb-12">
                [Portrait of Mama Deborah — replace me]
            </div>

            <div class="prose prose-lg prose-slate max-w-none space-y-6 text-gray-700 leading-relaxed">
                <h2 class="text-2xl font-bold text-brand-purple">A Life Defined by Service</h2>
                <p>
                    Deborah Ishaku Bonat was born into a faith that would become her entire identity. From her earliest
                    years, she was drawn to the margins — to the people others looked away from. When she became a widow,
                    she could have turned inward. Instead, she turned outward.
                </p>
                <p>
                    For twenty-nine years, she walked the streets and communities of Jos, Plateau State, carrying
                    firewood, foodstuff, and clothing to elderly people who had been forgotten. She organised distributions.
                    She visited the sick. She prayed for the grieving. She showed up.
                </p>

                <h2 class="text-2xl font-bold text-brand-purple mt-10">The Five She Loved</h2>
                <p>
                    Every name on the foundation's five pillars represents a group she personally served:
                </p>
                <ul class="space-y-3">
                    <li class="flex gap-3"><span class="text-brand-gold font-bold shrink-0">Widows:</span> She was one. She knew the silence, the financial pressure, the loneliness. She made sure others did not face it alone.</li>
                    <li class="flex gap-3"><span class="text-brand-gold font-bold shrink-0">Orphans:</span> She believed every child deserved an education. She personally sponsored children through school and never stopped asking who else needed support.</li>
                    <li class="flex gap-3"><span class="text-brand-gold font-bold shrink-0">The Elderly:</span> Her Jos distributions were legendary — firewood, clothing, food. Practical love for people who had given everything to their communities and were now often overlooked.</li>
                    <li class="flex gap-3"><span class="text-brand-gold font-bold shrink-0">Missionaries:</span> She was a faithful partner of the ECWA Missionary Society, giving material and spiritual support to men and women in the field.</li>
                    <li class="flex gap-3"><span class="text-brand-gold font-bold shrink-0">New Converts:</span> She understood what it cost to change your faith in a hostile environment. She made sure those people had food, a roof if needed, and someone standing with them.</li>
                </ul>

                <h2 class="text-2xl font-bold text-brand-purple mt-10">The Taraba Journey</h2>
                <p>
                    Her final mission was to Taraba State — a place of need, and a place she felt called to serve. It was
                    not unusual for her to go where others would not. That final journey was not a tragedy. It was the
                    fullest expression of who she was: a woman who, right to the end, kept going to the people who needed
                    her most.
                </p>

                <h2 class="text-2xl font-bold text-brand-purple mt-10">Her Legacy, Formalised</h2>
                <p>
                    The Deborah Bonat Foundation was not invented after her death. It was always there — in her hands,
                    her visits, her distributions, her prayers. What her family and the board have done is give it a name,
                    a structure, and a permanence. She started it. We are continuing it.
                </p>
            </div>

            <div class="mt-14 pt-8 border-t border-gray-200 flex flex-col sm:flex-row gap-4 items-center justify-center">
                <a href="{{ route('about') }}"
                   class="inline-flex items-center gap-2 px-6 py-3 bg-white border border-purple-200 text-brand-purple rounded-xl font-semibold text-sm hover:bg-brand-cream transition-colors">
                    ← Back to About Us
                </a>
                <a href="{{ route('get-involved.donate') }}"
                   class="inline-flex items-center gap-2 px-6 py-3 bg-brand-gold text-brand-purple rounded-xl font-bold text-sm hover:bg-brand-gold-light transition-colors">
                    Honour Her Legacy — Give Now
                </a>
            </div>
        </div>
    </article>

</x-layouts.site>
