<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel Tech Challenge</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        @livewireStyles

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <style>
        .imgGalery{
            height: 100% !important;
            Width: 100% !important;
        }
    </style>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif


            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            @if (isset($footer))
                <footer class="fixed-bottom mt-auto py-3 bg-dark text-white">
                    {{ $footer }}
                </footer>
            @endif  
        </div>

        @stack('modals')
        @stack('scripts')

        @livewireScripts
        <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>
        <script>
            let root = document.querySelector('[drag-root]')

            root.querySelectorAll('[drag-item]').forEach(el =>{
                el.addEventListener('dragstart', e => {
                    e.target.setAttribute('dragging', true)
                })
                el.addEventListener('dragend', e => {
                    e.target.removeAttribute('dragging')
                })
                el.addEventListener('dragenter', e => {
                    e.target.classList.add('bg-danger')
                    e.preventDefault()
                })
                el.addEventListener('dragover', e => {
                    e.preventDefault()
                })
                el.addEventListener('dragleave', e => {
                    e.target.classList.remove('bg-danger')
                    console.log('leave')
                })
                el.addEventListener('drop', e => {
                    e.target.classList.remove('bg-danger')
                    let draggingEl = root.querySelector('[dragging]')
                    e.target.before(draggingEl)
                })
            })
        </script>
    </body>
</html>
