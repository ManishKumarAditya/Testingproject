<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bookie @yield('title')</title>
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-info">
        <a class="navbar-brand" href=" ">
            <h4 class="text-white">bookie.com</h4>
        </a>
        <form action="{{route('book.index')}}" method="GET" class="form-inline mx-auto">
            <div class="input-group">
                <input type="text" name="search" class="form-control ml-5" size="70">
                <div class="input-group-append">
                    <button type="submit" name="find" class="btn btn-dark">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                            <path fill-rule="evenodd"
                                d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                        </svg>
                    </button>
                </div>
            </div>
        </form>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="{{route('book.index')}}" class="nav-link btn btn-dark btn-sm ml-2">Home</a></li>
            <li class="nav-item"><a href="{{route('book.create')}} " class=" btn btn-dark nav-link btn-sm ml-2">Insert</a></li>
            <li class="nav-item"><a href="" class="nav-link btn btn-dark btn-sm ml-2">About us</a></li>
        </ul>
    </nav>
    @section('content')
    @show
</body>

</html>
