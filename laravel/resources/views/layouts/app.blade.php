<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('layouts/head')

<body>
    <div id="app">
        @include('layouts/navbar')

        <main role="main" class="container">
            <div class="row">
                @include('layouts/main')

                @include('layouts/sidebar')
            </div><!-- /.row -->
        </main><!-- /.container -->

        @include('layouts/footer')
    </div><!-- .app -->
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
