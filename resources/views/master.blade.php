<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/style.css') !!}
</head>
<body>
@include('partials.navbar')
<div class="container">

    <div class="row">
        @yield('content')
    </div>
</div>

<script src="{!! asset('js/jquery-1.12.2.min.js') !!}"></script>
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>

</body>
</html>