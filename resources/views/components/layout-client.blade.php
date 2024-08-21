<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind Css -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite('resources/css/app.css')

    <!-- Alpiine Js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400..700&display=swap"
        rel="stylesheet">

    <script src="resources/js/app.js"></script>
    <title>Document</title>
</head>

<body class="h-full min-h-full">

    <x-navbar-client></x-navbar-client>
    <x-content-bg></x-content-bg>

    <!-- Content -->
    <content>
        {{ $slot }}
    </content>

</body>

</html>
