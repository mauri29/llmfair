<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">   

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">  
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/uni.css" rel="stylesheet">
    <link href="/css/light.css" rel="stylesheet">
    <link href="/css/fotis.css" rel="stylesheet">
    <link href="/css/sky.css" rel="stylesheet">
    <link href="/css/footer.css" rel="stylesheet">
    @yield('styles')
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

    <div id="app">
        @include('layouts.partials._navigation')
        @yield('content')        
        @include('layouts.partials._werbe')        
        @include('layouts.partials._fotis')
        @include('layouts.partials._markt')
        @include('layouts.partials._universities')

        @include('layouts.partials._footer')
    </div>


    <!-- Scripts -->
    <script src="/js/app.js"></script>
    @yield('scripts')
</body>
</html>
