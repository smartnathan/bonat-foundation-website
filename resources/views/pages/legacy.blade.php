<x-layouts.site title="In Loving Memory — The Deborah Bonat Foundation">

    {{-- ============================================================
         MEMORIAL HERO — Portrait carousel with sepia tone
    ============================================================ --}}
    <section
        class="relative min-h-screen flex items-center justify-center overflow-hidden bg-brand-dark"
        x-data="{
            active: 0,
            slides: 3,
            init() { setInterval(() => { this.active = (this.active + 1) % this.slides }, 6000) }
        }"
        x-init="init()"
    >
        {{-- Portrait images — full background, sepia-toned --}}
        @foreach(['deborah-bonat-homepage-one.webp', 'doborah-bonat-homepage-two.webp', 'deborah-bonat-homepage-three.webp'] as $i => $img)
            <div
                class="absolute inset-0 transition-opacity duration-1500 ease-in-out"
                :class="active === {{ $i }} ? 'opacity-100' : 'opacity-0'"
            >
                <img
                    src="/images/homepage-banner/{{ $img }}"
                    alt="Mama Deborah Iya Bonat"
                    class="w-full h-full object-cover"
                    style="object-position: {{ $i === 1 ? 'center 20%' : 'top' }}; filter: sepia(0.65) contrast(1.05) brightness(0.6);"
                >
            </div>
        @endforeach

        {{-- Dark overlay for readability --}}
        <div class="absolute inset-0 bg-gradient-to-b from-brand-dark/60 via-brand-dark/50 to-brand-dark/90"></div>

        {{-- Decorative gold pattern --}}
        <div class="absolute inset-0 opacity-[0.025]" style="background-image: repeating-linear-gradient(45deg, #D4AF37 0, #D4AF37 1px, transparent 0, transparent 50%); background-size: 30px 30px;"></div>

        {{-- Content --}}
        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 text-center py-20">

            {{-- Gold memorial bar --}}
            <div class="flex items-center justify-center gap-4 mb-8">
                <div class="h-px bg-brand-gold/40 w-16 sm:w-24"></div>
                <span class="text-brand-gold/80 text-xs uppercase tracking-[0.3em] font-medium">In Memoriam</span>
                <div class="h-px bg-brand-gold/40 w-16 sm:w-24"></div>
            </div>

            <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-white leading-tight">
                Mama Deborah<br>
                <span class="text-brand-gold">Iya Bonat</span>
            </h1>

            <div class="mt-5 flex flex-wrap items-center justify-center gap-3 text-sm">
                <span class="px-4 py-1.5 rounded-full border border-brand-gold/40 bg-brand-gold/10 text-brand-gold font-semibold tracking-widest">1957 – 2026</span>
                <span class="text-white/40 hidden sm:inline">|</span>
                <span class="text-white/75 font-light tracking-wider">30 Years of Widowhood</span>
                <span class="text-white/40 hidden sm:inline">|</span>
                <span class="text-white/75 font-light tracking-wider italic">A Life Poured Out</span>
            </div>

            {{-- Quote 1 --}}
            <blockquote class="mt-10 max-w-2xl mx-auto">
                <p class="text-xl sm:text-2xl text-white/85 italic font-light leading-relaxed">
                    "A heart for the lost, a home for the found: Sustaining the mission Mama Deborah lived and died for."
                </p>
            </blockquote>

            {{-- Quote 2 --}}
            <blockquote class="mt-6 max-w-2xl mx-auto">
                <p class="text-base sm:text-lg text-brand-gold/80 italic font-light leading-relaxed">
                    "From the mission field to the Father's arms, but the Mission remains: Carrying the torch of a life poured out for the Gospel."
                </p>
            </blockquote>

            <div class="mt-12 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#tributes"
                   class="inline-flex items-center justify-center gap-2 px-8 py-3.5 bg-white/10 border border-white/20 text-white rounded-xl font-semibold text-sm hover:bg-white/20 transition-colors backdrop-blur-sm">
                    <i class="fa-regular fa-comment-dots"></i>
                    Leave a Tribute
                </a>
                <a href="#donate"
                   class="inline-flex items-center justify-center gap-2 px-8 py-3.5 bg-brand-gold text-brand-blue rounded-xl font-bold text-sm hover:bg-brand-gold-light transition-colors shadow-lg">
                    <i class="fa-solid fa-heart"></i>
                    Give in Her Memory
                </a>
            </div>

            {{-- Slide indicators --}}
            <div class="mt-10 flex gap-2 justify-center">
                @for($i = 0; $i < 3; $i++)
                    <button
                        @click="active = {{ $i }}"
                        class="h-1 rounded-full transition-all duration-500 focus:outline-none"
                        :class="active === {{ $i }} ? 'w-8 bg-brand-gold' : 'w-2 bg-white/30'"
                    ></button>
                @endfor
            </div>

            {{-- Scroll arrow --}}
            <div class="mt-12 animate-bounce text-white/30">
                <i class="fa-solid fa-chevron-down text-xl"></i>
            </div>
        </div>
    </section>

    {{-- ============================================================
         THE VISION UNVEILED
    ============================================================ --}}
    <section class="py-20 bg-brand-cream">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">

            <div class="text-center mb-12">
                <p class="text-brand-gold text-xs font-semibold uppercase tracking-widest mb-2">A Message from the Board</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-brand-blue">The Vision Unveiled</h2>
            </div>

            {{-- Pull-out quote sidebar layout --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">

                {{-- Left pull quote --}}
                <div class="lg:col-span-1 space-y-6">
                    <div class="bg-brand-blue rounded-2xl p-6 text-white relative overflow-hidden">
                        <div class="absolute top-3 left-4 text-brand-gold/20 text-6xl font-serif leading-none">&ldquo;</div>
                        <p class="relative italic text-white/90 text-sm leading-relaxed mt-4">
                            "We must mend the heart before we can teach the hands."
                        </p>
                        <p class="mt-3 text-brand-gold/70 text-xs font-semibold">— Mama Deborah Iya Bonat</p>
                    </div>
                    <div class="bg-white rounded-2xl p-6 border border-blue-100 relative overflow-hidden">
                        <div class="absolute top-3 left-4 text-brand-gold/20 text-6xl font-serif leading-none">&ldquo;</div>
                        <p class="relative italic text-gray-700 text-sm leading-relaxed mt-4">
                            "I want to go with my people."
                        </p>
                        <p class="mt-3 text-brand-gold/70 text-xs font-semibold">— Her final words before Taraba, March 2026</p>
                    </div>
                </div>

                {{-- Board message --}}
                <div class="lg:col-span-2 bg-white rounded-3xl shadow-sm border border-blue-100 p-8 sm:p-10">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-14 h-14 rounded-full bg-brand-blue/10 flex items-center justify-center text-brand-blue font-bold text-lg border-2 border-brand-gold/30 shrink-0">
                            DBF
                        </div>
                        <div>
                            <p class="font-bold text-brand-blue">The Board of Trustees</p>
                            <p class="text-gray-500 text-sm">The Deborah Bonat Foundation</p>
                        </div>
                    </div>

                    <blockquote class="text-gray-700 text-lg leading-relaxed italic border-l-4 border-brand-gold pl-5 mb-6">
                        "Mama's work didn't end in Taraba. We are carrying the torch."
                    </blockquote>

                    <div class="space-y-4 text-gray-600 text-base leading-relaxed">
                        <p>
                            Our mother, Deborah Iya Bonat, walked 30 years as a widow — not in retreat, but in forward motion.
                            From distributing firewood and foodstuff in Jos, to supporting missionaries in the field, to nurturing
                            new converts and abandoned orphans, she spent herself completely in service.
                        </p>
                        <p>
                            Her final journey to Taraba State to carry out mission work was not an end — it was the fullest
                            expression of who she was. It is now the foundation of everything we build in her name.
                        </p>
                        <p>
                            The Deborah Bonat Foundation is her vision, formalised. We — her children and the board she helped
                            inspire — commit ourselves to ensuring that every widow, orphan, elderly person, missionary, and
                            new convert in Nigeria knows that they are not alone.
                        </p>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('about.founder') }}" class="inline-flex items-center gap-2 text-brand-blue font-semibold text-sm hover:text-brand-gold transition-colors">
                            <i class="fa-solid fa-arrow-right text-xs"></i>
                            Read the full Founder's Message
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         FUNERAL DETAILS — May 1st
    ============================================================ --}}
    <section class="py-16 bg-brand-blue/5 border-y border-blue-100">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">

            <div class="text-center mb-10">
                <p class="text-brand-gold text-xs font-semibold uppercase tracking-widest mb-2">Homegoing Celebration</p>
                <h2 class="text-3xl font-bold text-brand-blue">Funeral &amp; Burial Details</h2>
                <p class="mt-2 text-gray-500 text-sm">
                    <i class="fa-regular fa-calendar-check text-brand-gold mr-1"></i>
                    Thursday, 1st May 2026 — Samaru Kataf, Kaduna State
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="bg-white rounded-2xl p-6 border border-blue-100 shadow-sm text-center">
                    <div class="w-12 h-12 rounded-xl bg-brand-blue/10 flex items-center justify-center mx-auto mb-4">
                        <i class="fa-solid fa-church text-brand-blue text-xl"></i>
                    </div>
                    <h3 class="text-brand-blue font-bold mb-1">Lying in State</h3>
                    <p class="text-gray-500 text-sm">1st May 2026</p>
                    <p class="text-gray-400 text-xs mt-1">[Venue TBC]</p>
                </div>

                <div class="bg-white rounded-2xl p-6 border border-blue-100 shadow-sm text-center ring-2 ring-brand-gold/30">
                    <div class="w-12 h-12 rounded-xl bg-brand-gold/10 flex items-center justify-center mx-auto mb-4">
                        <i class="fa-solid fa-cross text-brand-gold text-xl"></i>
                    </div>
                    <h3 class="text-brand-blue font-bold mb-1">Thanksgiving Service</h3>
                    <p class="text-gray-500 text-sm">1st May 2026</p>
                    <p class="text-gray-400 text-xs mt-1">[Church &amp; Time TBC]</p>
                </div>

                <div class="bg-white rounded-2xl p-6 border border-blue-100 shadow-sm text-center">
                    <div class="w-12 h-12 rounded-xl bg-brand-blue/10 flex items-center justify-center mx-auto mb-4">
                        <i class="fa-solid fa-location-dot text-brand-blue text-xl"></i>
                    </div>
                    <h3 class="text-brand-blue font-bold mb-1">Interment</h3>
                    <p class="text-gray-500 text-sm">1st May 2026</p>
                    <p class="text-gray-400 text-xs mt-1">Samaru Kataf, Kaduna State</p>
                </div>
            </div>

            <div class="mt-8 bg-white rounded-2xl p-5 border border-blue-100 flex flex-col sm:flex-row items-center gap-4 justify-between">
                <div class="flex items-center gap-3 text-gray-600 text-sm">
                    <i class="fa-solid fa-map-pin text-brand-blue"></i>
                    <span>2 Mono Street, Kafanchan-Kaduna Road, Samaru Kataf, Kaduna State</span>
                </div>
                <div class="flex gap-3 shrink-0">
                    <a href="https://wa.me/2349065477834" target="_blank" rel="noopener"
                       class="inline-flex items-center gap-2 px-4 py-2 bg-green-500 text-white rounded-lg text-xs font-semibold hover:bg-green-600 transition-colors">
                        <i class="fa-brands fa-whatsapp text-base"></i>
                        WhatsApp
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center gap-2 px-4 py-2 bg-brand-blue text-white rounded-lg text-xs font-semibold hover:bg-brand-blue-light transition-colors">
                        <i class="fa-regular fa-envelope"></i>
                        Enquiries
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         TRIBUTES — Digital Condolence Book
    ============================================================ --}}
    <section id="tributes" class="py-20 bg-brand-cream scroll-mt-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">

            <div class="text-center mb-12">
                <p class="text-brand-gold text-xs font-semibold uppercase tracking-widest mb-2">A Life Poured Out</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-brand-blue">Leave a Tribute for Mama Deborah I. Bonat <span class="text-gray-400 font-normal">(1957–2026)</span></h2>
                <p class="mt-4 text-gray-500 max-w-2xl mx-auto text-sm leading-relaxed">
                    In the wake of our profound loss, we find strength in your stories. Mama Deborah was a mother to the motherless,
                    a sanctuary for the persecuted, and a light to the ECWA family. Whether she taught you in the classroom, led
                    you in the Fellowship, or sheltered you in her home, we invite you to share your memories and messages of
                    comfort here. These tributes will be compiled into a <strong class="text-brand-blue">Legacy Book</strong> for
                    the family and the Foundation archives.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

                {{-- Submission Form --}}
                <div class="bg-white rounded-3xl p-8 shadow-sm border border-blue-100">
                    <h3 class="text-brand-blue font-bold text-lg mb-1 flex items-center gap-2">
                        <i class="fa-solid fa-pen-nib text-brand-gold"></i>
                        Write Your Tribute
                    </h3>
                    <p class="text-gray-400 text-xs mb-6">All messages are reviewed before appearing publicly.</p>

                    @if(session('condolence_success'))
                        <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-xl text-green-700 text-sm flex items-center gap-2">
                            <i class="fa-solid fa-circle-check"></i>
                            {{ session('condolence_success') }}
                        </div>
                    @endif

                    <form action="{{ route('condolences.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                        @csrf

                        {{-- Full Name --}}
                        <div>
                            <label for="condolence_name" class="block text-sm font-medium text-gray-700 mb-1.5">
                                <i class="fa-regular fa-user text-brand-blue/50 mr-1"></i>
                                Full Name <span class="text-red-400">*</span>
                            </label>
                            <input
                                type="text"
                                id="condolence_name"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                maxlength="100"
                                class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-brand-blue/30 focus:border-brand-blue transition-colors @error('name') border-red-400 @enderror"
                                placeholder="e.g. Pastor John Musa"
                            >
                            @error('name')
                                <p class="mt-1 text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Affiliation --}}
                        <div>
                            <label for="condolence_affiliation" class="block text-sm font-medium text-gray-700 mb-1.5">
                                <i class="fa-solid fa-people-group text-brand-blue/50 mr-1"></i>
                                Affiliation <span class="text-gray-400">(optional)</span>
                            </label>
                            <select
                                id="condolence_affiliation"
                                name="affiliation"
                                class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-brand-blue/30 focus:border-brand-blue transition-colors bg-white"
                            >
                                <option value="">— Select your affiliation —</option>
                                @foreach(["ECWA Women's Fellowship", "EMS/Missionary", "Student/Alumnus", "New Convert", "Friend/Family", "Other"] as $option)
                                    <option value="{{ $option }}" {{ old('affiliation') === $option ? 'selected' : '' }}>{{ $option }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Message --}}
                        <div>
                            <label for="condolence_message" class="block text-sm font-medium text-gray-700 mb-1.5">
                                <i class="fa-regular fa-comment-dots text-brand-blue/50 mr-1"></i>
                                Your Message <span class="text-red-400">*</span>
                            </label>
                            <textarea
                                id="condolence_message"
                                name="message"
                                required
                                maxlength="1000"
                                rows="5"
                                class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-brand-blue/30 focus:border-brand-blue transition-colors resize-none @error('message') border-red-400 @enderror"
                                placeholder="Share a memory, a prayer, or a word of encouragement..."
                            >{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Photo Upload --}}
                        <div>
                            <label for="condolence_photo" class="block text-sm font-medium text-gray-700 mb-1.5">
                                <i class="fa-regular fa-image text-brand-blue/50 mr-1"></i>
                                Upload a Photo <span class="text-gray-400">(optional — JPG/PNG, max 5MB)</span>
                            </label>
                            <input
                                type="file"
                                id="condolence_photo"
                                name="photo"
                                accept="image/jpeg,image/png,image/webp"
                                class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-brand-blue/10 file:text-brand-blue hover:file:bg-brand-blue/20 transition-colors"
                            >
                            @error('photo')
                                <p class="mt-1 text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Email --}}
                        <div>
                            <label for="condolence_email" class="block text-sm font-medium text-gray-700 mb-1.5">
                                <i class="fa-regular fa-envelope text-brand-blue/50 mr-1"></i>
                                Email Address <span class="text-gray-400">(private — for funeral updates &amp; thank-you note)</span>
                            </label>
                            <input
                                type="email"
                                id="condolence_email"
                                name="email"
                                value="{{ old('email') }}"
                                maxlength="255"
                                class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-brand-blue/30 focus:border-brand-blue transition-colors @error('email') border-red-400 @enderror"
                                placeholder="your@email.com"
                            >
                            @error('email')
                                <p class="mt-1 text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                                class="w-full py-3 bg-brand-blue text-white rounded-xl font-semibold text-sm hover:bg-brand-blue-light transition-colors flex items-center justify-center gap-2">
                            <i class="fa-solid fa-paper-plane"></i>
                            Submit Tribute
                        </button>
                    </form>
                </div>

                {{-- Condolence Wall --}}
                <div class="bg-white rounded-3xl p-8 shadow-sm border border-blue-100 flex flex-col">
                    <h3 class="text-brand-blue font-bold text-lg mb-1 flex items-center gap-2">
                        <i class="fa-solid fa-book-open text-brand-gold"></i>
                        Tributes from the Community
                    </h3>
                    <p class="text-gray-400 text-xs mb-6">Voices from the Body of Christ across Nigeria and beyond.</p>

                    @if($condolences->isEmpty())
                        <div class="flex-grow flex flex-col items-center justify-center py-10 text-center text-gray-400">
                            <i class="fa-solid fa-dove text-4xl text-brand-blue/20 mb-3 block"></i>
                            <p class="text-sm">Be the first to leave a tribute for Mama Deborah.</p>
                        </div>
                    @else
                        <div class="space-y-4 max-h-[580px] overflow-y-auto pr-1">
                            @foreach($condolences as $condolence)
                                <div class="bg-brand-cream rounded-2xl p-5 border border-blue-100">
                                    <div class="flex items-start gap-3">
                                        <div class="w-9 h-9 rounded-full bg-brand-blue/10 flex items-center justify-center text-brand-blue font-bold text-sm shrink-0">
                                            {{ strtoupper(substr($condolence->name, 0, 1)) }}
                                        </div>
                                        <div class="min-w-0">
                                            <p class="font-semibold text-gray-800 text-sm">{{ $condolence->name }}</p>
                                            <div class="flex flex-wrap items-center gap-2 mt-0.5">
                                                @if($condolence->affiliation)
                                                    <span class="text-[10px] font-semibold bg-brand-blue/10 text-brand-blue px-2 py-0.5 rounded-full">{{ $condolence->affiliation }}</span>
                                                @endif
                                                <span class="text-gray-400 text-xs">
                                                    <i class="fa-regular fa-clock mr-1"></i>
                                                    {{ $condolence->created_at->diffForHumans() }}
                                                </span>
                                            </div>
                                            <p class="mt-2 text-gray-600 text-sm leading-relaxed">{{ $condolence->message }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         LAUNCH GIFT / DONATION CTA
    ============================================================ --}}
    <section id="donate" class="py-20 bg-brand-dark scroll-mt-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">

            <div class="text-center mb-12">
                <p class="text-brand-gold text-xs font-semibold uppercase tracking-widest mb-2">In Lieu of Flowers</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-white">Make a Launch Gift</h2>
                <p class="mt-3 text-white/60 max-w-xl mx-auto text-sm leading-relaxed">
                    Honour Mama Deborah by sowing into the causes she lived for.
                    Your first gift to the Foundation is a seed of her legacy.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div class="bg-white/5 border border-brand-gold/20 rounded-3xl p-8 hover:border-brand-gold/40 transition-colors">
                    <i class="fa-solid fa-graduation-cap text-brand-gold text-3xl mb-4 block"></i>
                    <h3 class="text-brand-gold font-bold text-xl">The HOPE Fund</h3>
                    <p class="text-white/50 text-xs uppercase tracking-wider mt-1">Hope for Orphans' Education Fund</p>
                    <p class="mt-4 text-white/70 text-sm leading-relaxed">
                        Give an orphaned child the gift of education — school fees, books, uniforms, and mentorship through
                        their formative years. Every naira changes a trajectory.
                    </p>
                    <a href="{{ route('get-involved.donate') }}?fund=hope"
                       class="mt-6 inline-flex items-center justify-center gap-2 w-full px-6 py-3 bg-brand-gold text-brand-blue rounded-xl font-bold text-sm hover:bg-brand-gold-light transition-colors">
                        <i class="fa-solid fa-heart"></i>
                        Donate to HOPE Fund
                    </a>
                </div>

                <div class="bg-white/5 border border-brand-gold/20 rounded-3xl p-8 hover:border-brand-gold/40 transition-colors">
                    <i class="fa-solid fa-hands-holding-heart text-brand-gold text-3xl mb-4 block"></i>
                    <h3 class="text-brand-gold font-bold text-xl">New Convert Care</h3>
                    <p class="text-white/50 text-xs uppercase tracking-wider mt-1">Deborah's Basket Monthly Package</p>
                    <p class="mt-4 text-white/70 text-sm leading-relaxed">
                        Support new believers who face persecution after leaving their faith communities — with food,
                        shelter, and discipleship through "Deborah's Basket" monthly care packages.
                    </p>
                    <a href="{{ route('get-involved.donate') }}?fund=new-converts"
                       class="mt-6 inline-flex items-center justify-center gap-2 w-full px-6 py-3 bg-brand-gold text-brand-blue rounded-xl font-bold text-sm hover:bg-brand-gold-light transition-colors">
                        <i class="fa-solid fa-heart"></i>
                        Donate to New Convert Care
                    </a>
                </div>
            </div>

            <div class="mt-8 text-center">
                <a href="{{ route('get-involved.donate') }}"
                   class="text-brand-gold/70 hover:text-brand-gold text-sm underline-offset-2 hover:underline transition-colors">
                    View all giving options →
                </a>
            </div>
        </div>
    </section>

    {{-- ============================================================
         FOUNDATION OVERVIEW TEASER
    ============================================================ --}}
    <section class="py-16 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 text-center">
            <p class="text-brand-gold text-xs font-semibold uppercase tracking-widest mb-2">The Five Pillars</p>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-blue">Her Mission, Our Mandate</h2>
            <p class="mt-3 text-gray-500 text-sm max-w-xl mx-auto">
                The Deborah Bonat Foundation serves five groups she held closest to her heart.
            </p>

            <div class="mt-10 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4">
                @foreach([
                    ['fa-solid fa-hands-holding', 'Widows', 'programs.widows'],
                    ['fa-solid fa-child-reaching', 'Orphans', 'programs.orphans'],
                    ['fa-solid fa-person-cane', 'Elderly', 'programs.elderly'],
                    ['fa-solid fa-cross', 'Missions', 'programs.missions'],
                    ['fa-solid fa-dove', 'New Converts', 'programs.new-converts'],
                ] as [$faIcon, $label, $routeName])
                    <a href="{{ route($routeName) }}"
                       class="group bg-brand-cream rounded-2xl p-5 flex flex-col items-center gap-2 border border-blue-100 hover:border-brand-gold/40 hover:shadow-sm transition-all">
                        <i class="{{ $faIcon }} text-2xl text-brand-blue group-hover:text-brand-gold transition-colors"></i>
                        <span class="text-brand-blue text-xs font-semibold group-hover:text-brand-gold transition-colors">{{ $label }}</span>
                    </a>
                @endforeach
            </div>

            <a href="{{ route('home') }}" class="mt-10 inline-flex items-center gap-2 text-brand-blue font-semibold text-sm hover:text-brand-gold transition-colors">
                Explore the full foundation website
                <i class="fa-solid fa-arrow-right text-xs"></i>
            </a>
        </div>
    </section>

    {{-- ============================================================
         BOTTOM CTA — Give in Memory
    ============================================================ --}}
    <section class="py-14 bg-brand-blue">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 text-center">
            <i class="fa-solid fa-dove text-brand-gold text-4xl mb-4 block"></i>
            <h2 class="text-2xl sm:text-3xl font-bold text-white">Give in Memory of Mama Deborah</h2>
            <p class="mt-3 text-white/70 text-sm max-w-lg mx-auto leading-relaxed">
                In lieu of flowers, honour her extraordinary life by funding the work she started at age 13.
                Every gift continues her mission.
            </p>
            <a href="{{ route('get-involved.donate') }}"
               class="mt-8 inline-flex items-center gap-3 px-10 py-4 bg-brand-gold text-brand-blue rounded-xl font-bold text-base hover:bg-brand-gold-light transition-colors shadow-lg shadow-brand-gold/20">
                <i class="fa-solid fa-heart-pulse"></i>
                Give in Memory of Mama Deborah
            </a>
        </div>
    </section>

</x-layouts.site>
