<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body>
<x-nav.appnav :list="$header"/>
<x-nav.sidebar>
    <div class="bg-slate-50 min-h-screen">


        {{$slot}}
    </div>
</x-nav.sidebar>
@if(session('message'))
    <x-alert.success/>
@endif
</body>
</html>
