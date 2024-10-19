<!--
DStrickler Sat, Oct 19, 2024 1:02PM
file: /resources/views/components/layouts/app.blade.php
-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }}</title>
    @livewireStyles
</head>
<body>
@livewireScripts
{{ $slot }}
</body>
</html>
