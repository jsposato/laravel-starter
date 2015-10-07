<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSS are placed here -->
    {!! HTML::style('d3pkagxlyv1cfw.cloudfront.net/css/bootstrap.min.css') !!}
    {!! HTML::style('d3pkagxlyv1cfw.cloudfront.net/css/bootstrap-theme.min.css') !!}

    <style>
        body {
            padding-top: 70px;
        }
    </style>
</head>
<body>

<!-- Container -->
<div class="container-fluid">
    @if( Session::has( 'message' ) )
    <?php
    $message = Session::get('message');
    $alertType = Session::get('alertType');
    ?>
            <!-- flash messages -->
    <div class="row">
        <div class="alert {{{ $alertType }}} alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{{ $message }}}</strong>
        </div>
    </div>
    <!-- End flash messages -->
    @endif

            <!-- Content -->
    @yield('content')

</div>
<!-- Footer -->
@include('layouts.footer')
@yield( 'footer' )
        <!-- End Footer -->

{!! HTML::script('d3pkagxlyv1cfw.cloudfront.net/js/jquery-1.11.3.min.js') !!}
{!! HTML::script('d3pkagxlyv1cfw.cloudfront.net/js/bootstrap.min.js') !!}
