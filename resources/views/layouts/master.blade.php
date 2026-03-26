<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Comics</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include("partials.header")
    @yield('hero')
    @include("partials.footer")
    
    


</body>
</html>