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
           
            <x-sidebar></x-sidebar>

            @yield('app-content')

        </div>

      @yield('js')
    </body>
</html>
