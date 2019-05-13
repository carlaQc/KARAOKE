<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Argon Dashboard') }}</title>
        <!-- Favicon -->
        <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Icons -->
        <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
    </head>
    <body class="{{ $class ?? '' }}"  style="background-image: url(../../img//22.jpg)  ; background-repeat: no-repeat;  ">
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            @include('layouts.navbars.sidebar')
        @endauth
        
        <div class="main-content" >
            @include('layouts.navbars.navbar')
            @yield('content')
        </div>

        @guest()
            @include('layouts.footers.guest')
        @endguest

        


        <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        
        @stack('js')
        

        <!-- Argon JS -->
        

        <script>
            $(document).ready(function () {
                $("#exampleModal").modal("show");
            });
         </script>

        <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
        <script>

  
  $('#edit').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget) 
      var nombre = button.data('nombre') 
      var capacidad = button.data('capacidad') 
      var nombre = button.data('costo') 
      var capacidad = button.data('disponible') 
      var tipam_id = button.data('tipamid') 
      var modal = $(this)

      modal.find('.modal-body #nombre').val(nombre);
      modal.find('.modal-body #capacidad').val(capacidad);
      modal.find('.modal-body #costo').val(costo);
      modal.find('.modal-body #disponibe').val(disponible);
      modal.find('.modal-body #tip_id').val(tip_id);
})


  $('#delete').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget) 

      var cat_id = button.data('catid') 
      var modal = $(this)

      modal.find('.modal-body #cat_id').val(cat_id);
})


</script>
    

    </body>
</html>