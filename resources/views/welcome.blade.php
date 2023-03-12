<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include("layouts/head")
        <title>Laravel 10 Vite with React</title>
        @viteReactRefresh
        @vite('resources/js/app.jsx')
    </head>
    <body>
    @include("layouts/navbar-user")
     <div id="app"></div>
<<<<<<< HEAD
     <p>in essence this website runs through php with the laravel framework with vite and react.js </p>
     <p>the wepage is updated(1)</p>
=======
     <p>in essence this website is runs through php with the laravel framework with vite and react.js </p>
>>>>>>> parent of 4ab0859 (.)
    </body>
</html>
