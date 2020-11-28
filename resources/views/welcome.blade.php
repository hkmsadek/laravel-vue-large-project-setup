<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Vue Large set up!</title>

    </head>

    <body>
        <script>
            (function () {
                window.Laravel = {
                    csrfToken: '{{ csrf_token() }}'
                };
            })();

        </script>
        <div  id="app">
            <mainapp></mainapp>
        </div>


        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
