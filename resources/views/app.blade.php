<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    {!! SEO::generate(!! app()->environment('production')) !!}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script type="text/javascript" src="{{ mix('/js/app.js') }}" defer></script>
</head>
<body>
@inertia
<noscript>@includeIf($noscript, $page)</noscript>
</body>
</html>
