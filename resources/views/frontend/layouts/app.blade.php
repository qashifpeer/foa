<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Welcome </title>
        <!-- Favicon-->
        @include('frontend.layouts.styles')
    </head>
    <body class="bg-primary bg-opacity-25">
        <!-- Responsive navbar-->
        @include('frontend.layouts.nav')
        <!-- Page content-->

            @yield('content_main')

        <!-- Bootstrap core JS-->
       @include('frontend.layouts.scripts_footer')
    </body>
</html>

