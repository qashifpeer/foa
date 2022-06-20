<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>User Panel</title>

    @include('user.layouts.styles')
    @include('user.layouts.scripts')
</head>

<body class="sb-nav-fixed">
    @include('user.layouts.navbar')
    <div id="layoutSidenav">
        @include('user.layouts.side_nav')

        <div id="layoutSidenav_content">
            <main>

                <div class="container-fluid px-4">
                  

                    @yield('main_content')



                </div>
            </main>

            @include('user.layouts.footer')

        </div>
    </div>

    @include('user.layouts.scripts_footer')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                iziToast.error({
                    title: '',
                    position: 'topRight',
                    message: '{{ $error }}',
                });
            </script>
        @endforeach
    @endif

    @if (session()->get('error'))
        <script>
            iziToast.error({
                title: '',
                position: 'topRight',
                message: '{{ session()->get('error') }}',
            });
        </script>
    @endif

    @if (session()->get('success'))
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
