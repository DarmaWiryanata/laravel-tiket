<!doctype html>
<html lang="en">
    <head>
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <!-- Fonts and icons -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
        <!-- CSS Files -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/paper-kit.css') }}" rel="stylesheet" />
        
        @yield('css')
    </head>
    <body>
        @include('layouts.navbar')
        <div class="wrapper">
            @yield('content')
        </div>
    </body>
    <!-- Core JS Files -->
    <script src="{{ asset('js/core/jquery.min.js') }}" type="text/javascript"></script>
    {{-- <script src="{{ asset('js/core/jquery-ui-1.12.1.custom.min.js') }}" type="text/javascript"></script> --}}
    <script src="{{ asset('js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/core/bootstrap.min.js') }}" type="text/javascript"></script>

    <!-- Switches -->
    <script src="{{ asset('js/plugins/bootstrap-switch.js') }}"></script>

    <!--  Plugins for Slider -->
    <script src="{{ asset('js/plugins/nouislider.min.js') }}"></script>

    <!--  Plugins for DateTimePicker -->
    <script src="{{ asset('js/plugins/moment.min.js') }}"></script>
    {{-- <script src="{{ asset('js/plugins/bootstrap-datetimepicker.min.js') }}"></script> --}}

    <!--  Paper Kit Initialization snd functons -->
    <script src="{{ asset('js/paper-kit.js') }}"></script>

    @yield('js')
</html>