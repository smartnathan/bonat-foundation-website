@props([
    'title',
    'subtitle' => null,
    'dark' => false,
    'tall' => false,
])

<section class="relative {{ $tall ? 'min-h-[70vh]' : 'py-20 md:py-28' }} flex items-center justify-center overflow-hidden
    {{ $dark ? 'bg-brand-dark' : 'bg-brand-purple' }}">

    {{-- Decorative background pattern --}}
    <div class="absolute inset-0 opacity-5" style="background-image: repeating-linear-gradient(45deg, #D4AF37 0, #D4AF37 1px, transparent 0, transparent 50%); background-size: 20px 20px;"></div>

    {{-- Gradient overlay --}}
    <div class="absolute inset-0 bg-gradient-to-b from-black/20 via-transparent to-black/30"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 text-center">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white leading-tight">
            {!! $title !!}
        </h1>
        @if($subtitle)
            <p class="mt-4 text-lg md:text-xl text-white/75 max-w-2xl mx-auto leading-relaxed">{{ $subtitle }}</p>
        @endif
        @isset($cta)
            <div class="mt-8">{{ $cta }}</div>
        @endisset
    </div>
</section>
