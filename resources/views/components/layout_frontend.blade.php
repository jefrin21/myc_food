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
           
            <x-sidebar_frontend></x-sidebar_frontend>
            <x-navbar_frontend></x-navbar_frontend>
            @yield('app-content')

            <x-footer_frontend></x-footer_frontend>
        </div>

      @yield('js')
    </body>
</html>
