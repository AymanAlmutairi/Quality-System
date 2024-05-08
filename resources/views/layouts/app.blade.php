<!DOCTYPE HTML>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Shaqra University</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets//img/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('assets//css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets//css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets//css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('assets//css/bootstrap.rtl.min.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('assets//css/style.css') }}">
</head>

<body>

    <main>

        <header class="header">
            <div class="header-scroll active">
                <div class="container-fluid">
                    <div class="header-scroll-content d-flex">
                        <div class="logo">
                            <a class="navbar-brand" href="{{ route('home') }}">
                                <img src="{{ asset('assets//img/logo/logo-light.png') }}" alt="Logo"
                                    class="logo-transperant img-fluid">
                            </a>
                        </div>
                        @auth
                            <nav class="navbar navbar-expand-lg p-0 w-100">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mb-0 ms-auto me-0">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('home') }}"> Home </a>
                                        </li>
                                        {{-- <li class="nav-item">
                                            <a class="nav-link" href="courseSpecification.html">course Specification</a>
                                        </li> --}}
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('courses.index') }}">course</a>
                                        </li>
                                        {{-- <li class="nav-item">
                                            <a class="nav-link" href="{{route('operations.index')}}">operations</a>
                                        </li> --}}
                                        {{-- <li class="nav-item">
                                            <a class="nav-link" href="reports.html">reports</a>
                                        </li> --}}
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('sections.index') }}">sections</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('students.index') }}">student</a>
                                        </li>
                                        @if (auth()->user()?->role == 'admin')
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('users.index') }}">users</a>
                                            </li>
                                        @endif
                                        @if (auth()->user()->role == 'program_coordinator' || auth()->user()->role == 'admin')
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('courses.create') }}">add Course</a>
                                            </li>
                                            {{-- <li class="nav-item">
                                                <a class="nav-link" href="{{route('operations.create')}}">add Operation</a>
                                            </li> --}}
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('sections.create') }}">add Section</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('contents.create') }}">add Course
                                                    Content</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('clos.create') }}">add CLO</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('courses.requests') }}">Course Requests</a>
                                            </li>
                                        @endif
                                        @if (auth()->user()?->role == 'admin')
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('students.create') }}">add Student</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('users.create') }}">add User</a>
                                            </li>
                                        @endif


                                        {{-- <li class="nav-item">
                                            <a class="nav-link" href="{{ route('questions.create') }}">add Questions</a>
                                        </li> --}}
                                        <!-- <li class="nav-item">
                                                                                        <a class="nav-link" href="login.html"> login </a>
                                                                                    </li>
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link" href="register.html"> Register </a>
                                                                                    </li>-->

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <i class="fa-solid fa-right-from-bracket"></i>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="display-none">
                                                    @csrf
                                                </form>
                                                </href=>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        @else
                            <nav class="navbar navbar-expand-lg p-0 w-100">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mb-0 ms-auto me-0">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('home') }}"> Home </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        @endauth
                    </div>
                </div>
            </div>
        </header>

        <header class="header header-mob">
            <div class="header-overlay">
                <div class="container">
                    @auth

                        <div class="header-scroll-content d-flex">
                            <div class="logo">
                                <a class="navbar-brand" href="{{ route('home') }}">
                                    <img src="{{ asset('assets//img/logo/logo-light.png') }}" alt="Logo"
                                        class="logo-transperant img-fluid">
                                </a>
                            </div>
                            <div class="icon-menu">
                                <i class="fa-solid fa-bars"></i>
                            </div>
                        </div>
                    @else
                        <div class="header-scroll-content d-flex">
                            <div class="logo">
                                <a class="navbar-brand" href="{{ route('home') }}">
                                    <img src="{{ asset('assets//img/logo/logo-light.png') }}" alt="Logo"
                                        class="logo-transperant img-fluid">
                                </a>
                            </div>
                            <div class="icon-menu">
                                <i class="fa-solid fa-bars"></i>
                            </div>
                        </div>
                    @endauth
                </div>
            </div>
            <div class="header-mob-content active">
                <div class="header-mob-content-overlay close-mob"></div>
                <div class="menu-content">
                    <div class="logo">
                        <img src="{{ asset('assets//img/logo/logo-light.png') }}" alt="">
                        <div class="close-mob close-menu ms-auto me-0">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                    </div>
                    <div class="menu-list">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}"> Home </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="courseSpecification.html">course Specification</a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('courses.index') }}">course</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{route('operations.index')}}">opretions</a>
                            </li> --}}
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="reports.html">reports</a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('sections.index') }}">sections</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('students.index') }}">student</a>
                            </li>
                            @if (auth()->user()?->role == 'admin')
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('users.index') }}">users</a>
                                </li>
                            @endif
                            @if (auth()->user()?->role == 'program_coordinator' || auth()->user()?->role == 'admin')
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('courses.create') }}">add Course</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{route('operations.create')}}">add Operation</a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('sections.create') }}">add Section</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contents.create') }}">add Course Content</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('clos.create') }}">add CLO</a>
                                </li>
                            @endif
                            @if (auth()->user()?->role == 'admin')
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('students.create') }}">add Student</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('users.create') }}">add User</a>
                                </li>
                            @endif


                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('questions.create') }}">add Questions</a>
                            </li> --}}
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="login.html"> login </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="register.html"> Register </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="lougout.html">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                </a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="overlay-footer">
            <div class="container">
                <div class="foot-copyright text-center">
                    <p>
                        <span style="font-weight:700"> Shaqra University </span> © 2024 All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets//js/popper.min.js') }}"></script>
    <script src="{{ asset('assets//js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets//js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets//js/jquery.datetimepicker.js') }}"></script>
    <script src="{{ asset('assets//js/plugins.js') }}"></script>
    @yield('scripts')
</body>

</html>
