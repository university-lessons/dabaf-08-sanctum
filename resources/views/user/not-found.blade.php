<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    @include('shared.head')

    <body class="antialiased">
        <div class="container">
            <h1>Ooops! user not found!</h1>

            <span>
                Do you want to <a href="/user/create">create it?</a>
            </span>
        </div>
    </body>
</html>
