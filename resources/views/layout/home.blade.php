<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link real="stylesheet" type="text/css" href="{{asset('./plugins/chartist/css/chartist.min.css')}}">
        <link real="stylesheet" type="text/css" href="{{asset('./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">

    </head>
    <body>
      @yield('content')

    </body>
</html>
