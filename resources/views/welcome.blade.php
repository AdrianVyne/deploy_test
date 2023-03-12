<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

        @include("layouts/head")
        <title>Laravel 10 Vite with React</title>
        @viteReactRefresh
        @vite('resources/js/app.jsx')
    </head>
    <body>
    @include("layouts/navbar-user")
     <div id="app"></div>
     <p>in essence this website runs through php with the laravel framework with vite and react.js </p>
    </body>
</html>
