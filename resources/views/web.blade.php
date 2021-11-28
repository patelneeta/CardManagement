<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <meta name="description" content="">
    <title>Card Management</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/bootstrap.min.css')}}"></link>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/style.css')}}"></link>

    <script type="text/javascript" src="{{ URL::asset('public/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('public/js/bootstrap.min.js')}}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="antialiased">
    <div class="header">
        <a href="#default" class="logo">CompanyLogo</a>
        <div class="header-right">
            <a class="active" href="{{url('cards/create')}}">Add Card</a>
        </div>
    </div>
    <!--Main Navigation-->

    <main>
        <div class="container">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
                </div>
            @endif
            @yield('content')
        </div>
    </main>

</body>
</html>
