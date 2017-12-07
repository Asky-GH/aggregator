<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('layouts/head')

<body>
    <div id="app">
        @include('layouts/navbar')

        <main role="main" class="container">
            <div class="row">
                @include('layouts/main')

                @if (!(str_contains(Route::currentRouteName(), ['login', 'register']) 
                    || str_contains(Route::currentRouteAction(), [
                        'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm', 
                        'App\Http\Controllers\Auth\ResetPasswordController@showResetForm'])))
                @include('layouts/sidebar')
                @endif
            </div><!-- /.row -->
        </main><!-- /.container -->

        @if (!(str_contains(Route::currentRouteName(), ['login', 'register']) 
                    || str_contains(Route::currentRouteAction(), [
                        'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm', 
                        'App\Http\Controllers\Auth\ResetPasswordController@showResetForm'])))
        @include('layouts/footer')
        @endif
    </div><!-- .app -->
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        $('#flash-message').delay(5000).fadeOut(300);
    </script>
</body>
</html>
