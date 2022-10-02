<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container py-12">
        <div class="grid grid-cols-3 gap-6">
            <div class="col-span-2">
                <iframe class="w-full aspect-video " src="https://www.youtube.com/embed/r1ySsbIA7EU"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <div class="bg-red-400 aspect-square"></div>
                <div class="bg-green-400 aspect-[2/1]"></div>
            </div>
            <div class="col-span-1 bg-blue-500">

            </div>
        </div>
    </div>
</body>

</html>
