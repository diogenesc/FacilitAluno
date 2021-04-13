<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/form/css/style.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset ('assets/img/logo.svg')}}" type="image/x-icon">
    
    @yield('header')

    <style>
        #slogan {
            font-family: 'Ubuntu Condensed', sans-serif;
            font-size: 1.3rem;
            text-align: center;
            align-items: center;
            width: 100%;
            height: 100%;
            color:black;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
    <div class="registration-form">
        @yield('form')
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="{{ asset('assets/form/js/script.js')}}"></script>
    @yield('scripts')
</body>
</html>