<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- FONTAWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- SCRIPTS --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- STYLE --}}
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="{{ asset('/js/app.js')}}"></script>

    <title>Testecnico</title>
</head>
<body>
    @include('components.home-header')

    @include('components.jumbotron')

    @include('components.spacer')

    @include('components.disclaimer')

    @include('components.spacer')

    @include('components.product')

    @include('components.spacer')
    
    @yield('home-content')

    @include('components.spacer')

    @include('components.slogan')

    @include('components.spacer')

    @include('components.partners')
    
    @include('components.footer')
</body>
</html>