<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.3/dist/cdn.min.js"></script>
</head>
<body>
<x-nav.webnav />

<div>
    {{$slot}}
</div>
@if(session('message'))
    <x-alert.success />
@endif
</body>
</html>
