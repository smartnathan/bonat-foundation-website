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
                    description="Skills training, business seed grants, and economic mentorship so widows can become financially independent."
                    route="programs.widows"
                />
                <x-site.pillar-card
                    icon='<i class="fa-solid fa-book-open"></i>'
                    title="Orphan Care"
                    initiative="HOPE Fund"
                    description="The Hope for Orphans Education Fund sponsors children from primary school through tertiary education."
                    route="programs.orphans"
                />
                <x-site.pillar-card
                    icon='<i class="fa-solid fa-person-cane"></i>'
                    title="Elderly Care"
                    initiative="Golden Care Network (GCN)"
                    description="Visitation, food, firewood, clothing, and companionship for elderly people living in neglect or isolation."
                    route="programs.elderly"
                />
                <x-site.pillar-card
                    icon='<i class="fa-solid fa-cross"></i>'
                    title="Missions Support"
                    initiative="EMS Field Support"
                    description="Direct material aid, encouragement, and partnership for local missionaries and ECWA Missionary Society workers."
                    route="programs.missions"
                />
                <x-site.pillar-card
                    icon='<i class="fa-solid fa-dove"></i>'
                    title="New Convert Care"
                    initiative="Deborah's Basket"
                    description="Monthly care packages, emergency shelter, and discipleship for new believers facing persecution from family or community."
                    route="programs.new-converts"
                />
            </div>
        </div>
    </section>

    <x-site.cta-banner />

</x-layouts.site>
