<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin Panel</title>

        @include('admin.layouts.styles')
        @include('admin.layouts.scripts')
    </head>
    <body class="sb-nav-fixed">
       @include('admin.layouts.navbar')
        <div id="layoutSidenav">
           @include('admin.layouts.side_nav')

           <div id="layoutSidenav_content">
                <main>

                    <div class="container-fluid px-4">
                        <h1 class="mt-4">@yield('heading')</h1>

                        @yield('main_content')



                    </div>
                </main>

              @include('admin.layouts.footer')

            </div>
        </div>

        @include('admin.layouts.scripts_footer')
        @if($errors->any())
    @foreach($errors->all() as $error)
        <script>
            iziToast.error({
                title: '',
                position: 'topRight',
                message: '{{ $error }}',
            });
        </script>
    @endforeach
@endif

@if(session()->get('error'))
    <script>
        iziToast.error({
            title: '',
            position: 'topRight',
            message: '{{ session()->get('error') }}',
        });
    </script>
@endif

@if(session()->get('success'))
    <script>
        iziToast.success({
            title: '',
            position: 'topRight',
            message: '{{ session()->get('success') }}',
        });
    </script>
@endif

    </body>
</html>
