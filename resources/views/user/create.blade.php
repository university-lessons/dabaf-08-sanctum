<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    @include('shared.head')
    
    <body class="antialiased">
        <div class="container">
            <h1>Create User</h1>

            <form method="POST" action="/user/store">
                @csrf
            
                <label for="name">Name</label>
                <input id="name" name="name" type="text">

                <label for="email">Email</label>
                <input id="email" name="email" type="email">

                <label for="password">Password</label>
                <input id="password" name="password" type="password">

                <button type="submit">Submit</button>
            </form>
        </div>
    </body>
</html>
