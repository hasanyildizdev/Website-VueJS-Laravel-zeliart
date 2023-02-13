<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>Zeliart</title>
        <meta name="description" content="Art Galery by Zeliha Altemel" />
        <meta name="keywords" content="Art, Painting, Modern Art" />
        <meta property="og: type" content="website" />
        <meta property="og: title" content="Zeliart" />
        <meta property="og: description" content="Art Galery by Zeliha Altemel" />
        <meta property="og: image" content="/img/icon.webp" />
        <meta property="og: url" content="https://zeliart.iyiapp.com"/>
        <meta property="og: site_name" content="Zeliart" />
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:title" content="Zeliart"/>
        <meta name="twitter:description" content="Art Galery by Zeliha Altemel"/>
        <link rel="shortcut icon" type="image/webp" sizes="180x180"  href="{{ asset('img/icon.webp') }}"/>
        
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
