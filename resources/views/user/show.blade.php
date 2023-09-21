<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    @include('shared.head')

    <body class="antialiased">
        <div class="container">
            <h1>Profile</h1>
            <h2>Hello: {{$user->name}}</h2>
        </div>
    </body>
</html>
