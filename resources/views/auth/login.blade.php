<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    @include('shared.head')
    
    <body class="antialiased">
        <div class="container">
            <h1>Login</h1>

            {{$errors}}

            <form method="POST" action="{{route('authenticate')}}">
                @csrf
            
                <label for="email">Email</label>
                <input id="email" name="email" type="email">

                <label for="password">Password</label>
                <input id="password" name="password" type="password">

                <button type="submit">Login</button>
            </form>
        </div>
    </body>
</html>
