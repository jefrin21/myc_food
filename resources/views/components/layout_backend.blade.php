<!DOCTYPE html>
<html lang="en">
   
@yield('head')

    <body class="fixed-left">
        <!-- Loader -->
        <div id="preloader">
            <div id="status"><div class="spinner"></div></div>
        </div>
        {{-- end loader --}}
        <div id="wrapper">
           
            <x-sidebar_backend></x-sidebar_backend>

            @yield('app-content')

            <x-footer_backend></x-footer_backend>
        </div>

      @yield('js')
    </body>
</html>
