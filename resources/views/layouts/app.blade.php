<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Blog' }} | Prefix</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    {{-- keuntungan saat kita menggunakan component daripada @include adalah kita bisa mempassing data dari class
    component
    ny ke file .blade nya --}}
    <x-navbar></x-navbar>
    {{-- End --}}
    @yield('content')
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</body>

</html>