<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/jpg" href="{{asset('svg/coffee-solid.svg')}}"/>
    
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="background-color: #EEF1F9;">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/dashboard')}}">
                    <span>Note<span class="text-success">Nuts<span><i class="fas fa-coffee"></i></span></span></span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mt-2" id="navbarColor01">
                    <ul class="navbar-nav ms-auto mx-4">
                        <li class="nav-item">
                            <a class="nav-link @if(Request::is('dashboard'))active bg-success text-white @endif" href="{{ url('/dashboard')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Request::is('notes'))active bg-success text-white @endif" href="{{ url('/notes')}}">My Notes</a>
                        </li>
                    </ul>
                    <a href="{{url('/log-out')}}" class="btn btn-danger border-3 rounded-pill text-white my-2 my-sm-0">Log Out</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="bg-dark p-4 text-center text-white @if(Request::is('notes')) d-none @endif">
        Note<span class="text-success">Nuts</span> &copy; 2021
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    @yield('script')
</body>
</html>