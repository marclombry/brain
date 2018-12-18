

  <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())

                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Résinet
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Cérébro</a>
                    <a href="https://laracasts.com">Outils</a>
                    <a href="https://laravel-news.com">SI</a>
                    <a href="https://forge.laravel.com">Admin</a>
                </div>
            </div>
        </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
 