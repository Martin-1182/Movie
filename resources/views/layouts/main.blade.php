<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie App</title>

    <link rel="stylesheet" href="/css/main.css">
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="#">
                    <svg class="w-32" id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.42 511.81" width="32" height="32"><path d="M500.94,191.81H31.61a10.67,10.67,0,0,0-10.67,10.67v256a53.39,53.39,0,0,0,53.33,53.33h384a53.4,53.4,0,0,0,53.34-53.33v-256A10.67,10.67,0,0,0,500.94,191.81ZM490.27,458.48a32,32,0,0,1-32,32h-384a32,32,0,0,1-32-32V213.14h448Z" transform="translate(-0.19 0)"/><path d="M511.27,93.1,493.11,24.22A32.22,32.22,0,0,0,454.86.79l-429.78,102a32,32,0,0,0-23.9,39l20.1,79.44a10.63,10.63,0,0,0,10.32,8,10.77,10.77,0,0,0,2.65-.32A10.64,10.64,0,0,0,42,216l-1.17-4.63L503.31,106.24a10.69,10.69,0,0,0,8-13.14ZM35.55,190.64,21.86,136.56a10.69,10.69,0,0,1,8.06-13L459.7,21.57a9.77,9.77,0,0,1,2.33-.28,10.79,10.79,0,0,1,10.41,8.22l15.38,58.34Z" transform="translate(-0.19 0)"/><path d="M121.72,192.92a10.76,10.76,0,0,0-14.34,4.78L64.72,283a10.68,10.68,0,0,0,4.77,14.32,10.88,10.88,0,0,0,4.78,1.13,10.69,10.69,0,0,0,9.56-5.91l42.67-85.33A10.69,10.69,0,0,0,121.72,192.92Z" transform="translate(-0.19 0)"/><path d="M228.36,192.92a10.72,10.72,0,0,0-14.31,4.78L171.38,283a10.7,10.7,0,0,0,4.78,14.32,10.88,10.88,0,0,0,4.78,1.13,10.65,10.65,0,0,0,9.54-5.91l42.66-85.33A10.68,10.68,0,0,0,228.36,192.92Z" transform="translate(-0.19 0)"/><path d="M335,192.92a10.74,10.74,0,0,0-14.32,4.78L278.05,283a10.69,10.69,0,0,0,4.78,14.32,10.84,10.84,0,0,0,4.78,1.13,10.62,10.62,0,0,0,9.53-5.91l42.67-85.33A10.69,10.69,0,0,0,335,192.92Z" transform="translate(-0.19 0)"/><path d="M441.7,192.92a10.73,10.73,0,0,0-14.32,4.78L384.71,283a10.7,10.7,0,0,0,4.78,14.32,10.88,10.88,0,0,0,4.78,1.13,10.64,10.64,0,0,0,9.54-5.91l42.67-85.33A10.69,10.69,0,0,0,441.7,192.92Z" transform="translate(-0.19 0)"/><path d="M500.94,277.14H31.61a10.67,10.67,0,1,0,0,21.34H500.94a10.67,10.67,0,0,0,0-21.34Z" transform="translate(-0.19 0)"/><path d="M134.75,173.19,61.28,99.71A10.67,10.67,0,1,0,46.2,114.8l73.47,73.49a10.7,10.7,0,0,0,7.55,3.11,10.56,10.56,0,0,0,7.53-3.13A10.67,10.67,0,0,0,134.75,173.19Z" transform="translate(-0.19 0)"/><path d="M239.12,149.48,165.58,76A10.67,10.67,0,0,0,150.5,91.1L224,164.57a10.68,10.68,0,0,0,15.11-15.09Z" transform="translate(-0.19 0)"/><path d="M343.39,125.78,270,52.29A10.66,10.66,0,1,0,254.9,67.37l73.41,73.5a10.74,10.74,0,0,0,7.55,3.11,10.54,10.54,0,0,0,7.53-3.11A10.68,10.68,0,0,0,343.39,125.78Z" transform="translate(-0.19 0)"/><path d="M447.63,102.1,374.2,28.61a10.67,10.67,0,1,0-15.09,15.08l73.43,73.5a10.78,10.78,0,0,0,7.56,3.11,10.66,10.66,0,0,0,7.53-18.2Z" transform="translate(-0.19 0)"/></svg>
                    </a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <div class="relative mt-3 md:mt-0">
                    <input type="text" class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
                    <div class="absolute top-0">
                        <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24"><path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"/></svg>
                    </div>
                </div>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="/img/avatar.jpg" alt="avatar" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>
