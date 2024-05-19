<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" :class="{'dark': $store.darkModeStore.dark}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Frontend Quiz</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    @vite('resources/css/app.css')

    <!-- Scripts -->
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="font-sans h-screen  antialiased text-dark-navy bg-pattern-background-mobile-light
tablet:bg-pattern-background-tablet-light desktop:bg-pattern-background-desktop-light bg-no-repeat
bg-cover
dark:bg-pattern-mobile-desktop-dark dark:tablet:bg-pattern-tablet-dark dark:desktop:bg-pattern-desktop-dark
dark:text-white"
>
{{ $slot }}
</body>
</html>
