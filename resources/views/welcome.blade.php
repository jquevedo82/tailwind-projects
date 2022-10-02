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
        <div class="flex">
            <div>1</div>
            <div>2</div>
            <div>3</div>
        </div>
        {{-- modificar hidden al cambiar de tamaño --}}
        <p class="bg-red-200 hidden lg:inline-block mb-4">Esta es una etiqueta en bloque</p>
        <div class="bg-red-200">Esta es tambien etiqueta en bloque</div>
        <blockquote class="bg-red-200">Esta tambien es una etiqueta blqoue</blockquote>

        <span class="bg-blue-200">Etiqueta inline</span>
        <a class="bg-green-300 block">esta tambien es etiqueta inline</a>

    </div>
</body>

</html>
