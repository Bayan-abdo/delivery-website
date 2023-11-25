<!doctype html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cairo:wght@200;300;400;500;700&family=Lato:wght@300;400;700&family=Libre+Baskerville:wght@400;700&family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


    <link href="{{ url('/css/bootstrap.rtl.min.css') }}" rel="stylesheet">
    <link href="{{ url('/bootstrap-icons-font/bootstrap-icons.min.css') }}" rel="stylesheet">

    <style>
    *{
    font-family: 'Cairo', sans-serif;

}
        .bg-primary {
            background-color: #252E59 !important;
        }

        .btn-primary {
            --bs-btn-bg: #252E59 !important;
        }
    </style>

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md  navbar-dark bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/laroca') }}">
                    LaRoca
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/create-product') }}">إضافة منتج</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/orders') }}">الطلبيات</a>
                            </li>
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('customer/login') }}">تسجيل الدخول</a>
                            </li>

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
                                        تسجيل الخروج
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
            <section class="py-2 text-center container">
                <h1 class="fw-light">
                    @yield('title')
                </h1>
            </section>

            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>
    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
