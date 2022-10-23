<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible"
              content="ie=edge">
        <meta name="author"
              content="TECG-CPW">
        <meta name="description"
              content="Une table manipulable via Livewire">
        <meta name="keywords"
              content="livewire, table, triable, cherchable">

        <title>Mes contacts</title>
        @livewireStyles
        @vite(['resources/css/app.css'])
    </head>
    <body class="mx-auto max-w-3xl bg-white mt-4">
        <main class="container w-full">
            <h1 class="text-2xl font-black mb-8 uppercase text-center tracking-wider text-blue-800">Mes Contacts</h1>
            <div class="flex flex-col gap-2 mb-8">
                <livewire:pagination-selector/>
                <livewire:search-term-field/>
            </div>
            <livewire:table class="w-full mb-4"/>

        </main>
        @livewireScripts
    </body>
</html>
