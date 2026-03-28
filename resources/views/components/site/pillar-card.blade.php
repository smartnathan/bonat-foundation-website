@props([
    'icon',
    'title',
    'description',
    'route',
    'initiative' => null,
])

<a href="{{ route($route) }}"
   class="group block bg-white rounded-2xl p-6 shadow-sm border border-purple-100 hover:shadow-md hover:border-brand-gold/40 transition-all duration-200">
    <div class="w-14 h-14 rounded-xl bg-purple-50 group-hover:bg-brand-gold/10 flex items-center justify-center text-2xl mb-4 transition-colors">
        {{ $icon }}
    </div>
    <h3 class="text-brand-purple font-bold text-lg leading-snug group-hover:text-brand-purple-light transition-colors">
        {{ $title }}
    </h3>
    @if($initiative)
        <p class="mt-1 text-brand-gold text-xs font-semibold uppercase tracking-wider">{{ $initiative }}</p>
    @endif
    <p class="mt-2 text-gray-500 text-sm leading-relaxed">{{ $description }}</p>
    <p class="mt-4 text-brand-purple text-sm font-semibold group-hover:text-brand-gold transition-colors flex items-center gap-1">
        Learn more <span class="group-hover:translate-x-1 transition-transform inline-block">→</span>
    </p>
</a>
