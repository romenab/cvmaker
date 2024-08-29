<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cvmaker</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;1,200&family=Playfair+Display:ital,wght@0,700;1,700&family=Roboto+Condensed&display=swap"
        rel="stylesheet">
    <style>
        .playfair-display-font1 {
            font-family: "Playfair Display", serif;
            font-optical-sizing: auto;
            font-weight: 700;
            font-style: normal;
        }

        .montserrat-fonts {
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: 200;
            font-style: normal;
        }

        .playfair-display-font2 {
            font-family: "Playfair Display", serif;
            font-optical-sizing: auto;
            font-weight: 700;
            font-style: italic;
        }
    </style>
</head>
<body>

<div class="relative h-screen w-screen">
    <img src="{{ asset('images/photo.png') }}" alt="Background Image" class="object-cover h-full w-full">
    <div class="absolute inset-0 bg-gray-900 bg-opacity-40 z-10"></div>
    <div class="text-white absolute inset-0 flex flex-col justify-center items-start px-20 pt-10 z-20">
        <div class="montserrat-fonts text-4xl">WELCOME TO</div>
        <div class="playfair-display-font1 text-9xl">CV Maker.</div>
        <div class="playfair-display-font2 text-3xl pt-2">Create a Professional CV in Minutes</div>
    </div>


    @if (Route::has('login'))
        <div class="absolute top-0 left-0 right-0 bg-neutral-900 z-30">
            <nav class="flex justify-end m-1 space-x-4 px-5">

                @auth
                    <a href="{{ url('/dashboard') }}"
                       class="rounded-md px-4 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                       class="  rounded-md px-6 py-3 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Log in
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="  rounded-md px-6 py-3 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        </div>
    @endif
    <footer class="absolute bottom-0 left-0 right-0 bg-neutral-900  text-white py-4 z-30">
        <div class="container mx-auto text-center">
            <p class="text-sm ">© 2024 CV Maker.</p>
        </div>
    </footer>
</div>

</body>
</html>
