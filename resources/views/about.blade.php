<!DOCTYPE html>
<html lang="en">


<head>
    @include("layouts/head")

    <title>Document</title>
    @viteReactRefresh
        @vite('resources/js/app.jsx')
</head>
   
<body>
 @include("layouts/navbar-user")
<h1>About Page</h1>
<p>this page is called through route that would direct to a blade</p>
</body>

</html>