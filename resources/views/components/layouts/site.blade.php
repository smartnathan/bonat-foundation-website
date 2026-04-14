<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'The Deborah Bonat Foundation' }}</title>
    <meta name="description" content="{{ $description ?? 'Turning every story of persecution into a story of resilience. The Deborah Bonat Foundation serves widows, orphans, the elderly, missionaries, and new converts across Nigeria.' }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-brand-cream font-sans antialiased">

    <x-site.nav />

    <main>
        {{ $slot }}
    </main>

    <x-site.footer />

    @stack('scripts')

</body>
</html>
