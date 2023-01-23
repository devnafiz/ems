<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Unice Education Malaysia</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <script type="text/javascript">
            
        $(function() { // Dropdown toggle
            $('.dropdown-toggle').click(function() { $(this).next('.dropdown').slideToggle();
            });

            $(document).click(function(e) 
            { 
            var target = e.target; 
            if (!$(target).is('.dropdown-toggle') && !$(target).parents().is('.dropdown-toggle')) 
            //{ $('.dropdown').hide(); }
              { $('.dropdown').slideUp(); }
            });
            });
        </script>
    </body>
</html>
