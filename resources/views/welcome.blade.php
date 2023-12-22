<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @livewireStyles
    <title>Welcome</title>
</head>
<body class="flex min-h-full antialiased">
    <div class="w-full">
        <livewire:header-menu />
        <div class="lg:pl-[22rem] md:pl-[4rem] sm:pl-[4rem] xs:pl-[4rem] pr-[4rem] flex-col pt-16 pb-10">
            <main class="flex-auto h-full">
{{--                <article class="flex h-full">--}}
{{--                    <div class="flex-auto prose dark:prose-invert [html_:where(&>*)]:mx-auto [html_:where(&>*)]:max-w-2xl [html_:where(&>*)]:lg:mx-[calc(50%-min(50%,theme(maxWidth.lg)))] [html_:where(&>*)]:lg:max-w-3xl">--}}
{{--                    <div class="flex flex-col">--}}
{{--                        <p>--}}
{{--                            Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </article>--}}
                <livewire:article-component />
            </main>
        </div>
    </div>
    @livewireScripts
    @livewireScriptConfig
</body>
</html>
