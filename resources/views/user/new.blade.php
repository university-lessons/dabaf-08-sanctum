<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Request-Response Flow</title>
    </head>
    <body class="antialiased">
        <h1>Create User</h1>

        <form method="POST" action="/create-user">
            @csrf
        
            <label for="name">Name</label>
            <input id="name" name="name" type="text">

            <label for="email">Email</label>
            <input id="email" name="email" type="email">

            <label for="password">Password</label>
            <input id="password" name="password" type="password">

            <button type="submit">Submit</button>
        </form>
    </body>
</html>
