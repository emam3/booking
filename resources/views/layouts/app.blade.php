<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking App</title>
    <link rel="stylesheet" href="css/app.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Booking App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

                @if (auth()->user())

                    <li class="nav-item active">
                        <a class="nav-link" href="/BookaRoom">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/BookaRoom">Book a room</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/YourRooms">Your rooms</a>
                    </li>

                    @if(auth()->user()->role == "admin")
                    <li class="nav-item">
                        <a class="nav-link" href="/AddNewBranch">Add Branch/Room</a>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link" href="/DashBoard">Dashboard</a>
                    </li> --}}
                    @endif

                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li>

                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>

                @endif
            </ul>
        </div>
    </nav>

    @yield('content')
</body>

</html>
