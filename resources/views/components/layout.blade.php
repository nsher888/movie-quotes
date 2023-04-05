<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>



<body {{ $attributes->merge(['class' => 'w-full min-h-screen bg-radial-gradient text-white static mx-auto'])
    }}>
    {{ $slot }}
</body>

</html>