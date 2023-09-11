<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>

@extends('dashboard.layouts.header')


@extends('dashboard.layouts.navigation')


{{-- @section('main-content') --}}
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="col">
                    <h2 class="h5 page-title">Welcome!</h2>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add Content</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('index.create') }}"> Back</a>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('index.store') }}" enctype='multipart/form-data' method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Page name</strong>
                        <input type="text" name="Pagename" class="form-control" placeholder="Page Name">
                        @error('Pagename')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Heading 1</strong>
                            <input type="text" name="heading1" class="form-control" placeholder="Heading 1">
                            @error('heading1')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Heading 2</strong>
                            <input type="text" name="heading2" class="form-control" placeholder="Heading 2">
                            @error('heading2')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong> Content Description</strong>
                                <input type="text" name="description" class="form-control"
                                    placeholder="Content Description">
                                @error('description')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                <div class="container">
                                    <div class="form-group mt-2">
                                        <label for="">File</label>
                                        <input type="File" name="image" id="image" class="form-control"
                                            placeholder="" aria-describedby="helpId">
                                        <small id="helpId" class="text-muted">Help text</small>
                                    </div>
                                    {{-- <button class="btn btn-primary">Upload</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary ml-3">Submit</button>
                </div>
        </form>
    </div>



    {{-- <form method="post" enctype='multipart/form-data' action='{{url('/home/store')}}'>
        @csrf
    <div class="container">
        <div class="form-group mt-2">
          <label for="">File</label>
          <input type="File" name="image" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Help text</small>
        </div>
        <button class="btn btn-primary">Upload</button>
    </div>
    
        </form> --}}

</main>
<!-- main -->
<!-- .wrapper -->
{{-- @endsection  --}}

@extends('dashboard.layouts.footer')
