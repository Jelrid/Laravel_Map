<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=21a0bfd2-bd4e-4c0b-9010-6e84fc6aaad3&lang=ru_RU" type="text/javascript">
    </script>
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-12 w-auto" src="./logo.png" alt="">
            </a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Зарегестрироваться <span
                    aria-hidden="true">&rarr;</span></a>
        </div>
    </nav>
    </header>
    {{$slot}}
</body>

</html>