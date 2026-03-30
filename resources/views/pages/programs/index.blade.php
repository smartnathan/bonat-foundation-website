<x-layouts.site title="Our Programs — The Deborah Bonat Foundation">

    <x-site.hero
        title="Our Five Pillars"
        subtitle="Five communities Mama Deborah served — five programs the foundation is committed to sustaining."
    />

    <section class="py-20 bg-brand-cream">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <x-site.pillar-card
                    icon='<i class="fa-solid fa-hands-holding-heart"></i>'
                    title="Widow Empowerment"
                    initiative="Widows to Workers (W2W)"
                    description="A holistic support model combining economic empowerment, psychosocial care, healthcare access, and skills development so widows can rebuild with dignity."
                    route="programs.widows"
                />
                <x-site.pillar-card
                    icon='<i class="fa-solid fa-book-open"></i>'
                    title="Orphan Care"
                    initiative="HOPE Fund"
                    description="Full educational sponsorships alongside shelter, mentorship, psychological support, and family reunification — giving every child a foundation for a dignified future."
                    route="programs.orphans"
                />
                <x-site.pillar-card
                    icon='<i class="fa-solid fa-person-cane"></i>'
                    title="Elderly Care"
                    initiative="Golden Care Network (GCN)"
                    description="Basic needs support, healthcare access, social inclusion, home care, and advocacy for elderly persons aged 65 and above across Nigeria."
                    route="programs.elderly"
                />
                <x-site.pillar-card
                    icon='<i class="fa-solid fa-cross"></i>'
                    title="Missions Support"
                    initiative="EMS Field Support"
                    description="Financial grants, resources, training, and logistical support so that no indigenous missionary labours without the backing they deserve."
                    route="programs.missions"
                />
                <x-site.pillar-card
                    icon='<i class="fa-solid fa-dove"></i>'
                    title="New Convert Care"
                    initiative="Deborah's Basket"
                    description="Immediate relief, trauma counselling, legal aid, vocational training, and community integration for new Christians facing persecution and displacement."
                    route="programs.new-converts"
                />
            </div>
        </div>
    </section>

    <x-site.cta-banner />

</x-layouts.site>
