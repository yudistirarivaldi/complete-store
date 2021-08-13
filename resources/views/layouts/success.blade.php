<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    <!-- style css pindah ke css.blade -->
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')



  </head>

  <body>
 
    

    <!-- Page Content pindah ke home.blade -->
    @yield('content')

    <!-- footer pindah ke footer.blade -->
    @include('includes.footer')

    <!-- Script pindah ke script blade -->
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
    
    
  </body>
</html>
