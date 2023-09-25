<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    @include('shared.head')
    
    <body class="antialiased">
        <div class="container">
            <h1>Search User</h1>

            <form method="GET" action="/user/search/{name}">
                @csrf
                
                <label for="name">Name</label>
                <input id="name" name="name" type="text">

                <button type="submit">Submit</button>
            </form>
        </div>
    </body>
</html>
