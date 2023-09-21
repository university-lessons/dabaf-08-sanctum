<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('shared.head')

    <body class="antialiased">
        <div class="container">

            <h1>DABaF - Example App</h1>

            <ul>
                <li>
                    <a href="/user/create">Create User</a>
                </li>

                <li>
                    <a href="/user/search">Search User</a>
                </li>
            </ul>
        </div>
    </body>
</html>
