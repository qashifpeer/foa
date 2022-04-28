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
    <body>
        <!-- Responsive navbar-->
        @include('frontend.layouts.nav')
        <!-- Page content-->
        <div class="container">
            @yield('content_main')
        </div>
        <!-- Bootstrap core JS-->
       @include('frontend.layouts.scripts_footer')
    </body>
</html>

