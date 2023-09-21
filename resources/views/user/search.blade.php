<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    @include('shared.head')
    
    <body class="antialiased">
        <div class="container">
            <h1>Search User</h1>

            <form method="POST" action="/user/find">
                @csrf
                
                <label for="name">Name</label>
                <input id="id" name="id" type="text">

                <button type="submit">Submit</button>
            </form>
        </div>
    </body>
</html>
