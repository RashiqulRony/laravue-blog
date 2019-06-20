<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">

    <!-- Favicon-->
    <link rel="shortcut icon" href="{!! asset('frontend/') !!}/img/fav.png" />
    <!-- Author Meta -->
    <meta name="author" content="CodePixar" />
    <!-- Meta Description -->
    <meta name="description" content="" />
    <!-- Meta Keyword -->
    <meta name="keywords" content="" />
    <!-- meta character set -->
    <meta charset="UTF-8" />
    <!-- Site Title -->
    <title>Revive</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Playfair+Display:700,700i" rel="stylesheet"/>
    <!-- ==================CSS=========================== -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('frontend/') !!}/css/linearicons.css" />
    <link rel="stylesheet" href="{!! asset('frontend/') !!}/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{!! asset('frontend/') !!}/css/magnific-popup.css" />
    <link rel="stylesheet" href="{!! asset('frontend/') !!}/css/nice-select.css" />
    <link rel="stylesheet" href="{!! asset('frontend/') !!}/css/owl.carousel.css" />
    <link rel="stylesheet" href="{!! asset('frontend/') !!}/css/bootstrap.css" />
    <link rel="stylesheet" href="{!! asset('frontend/') !!}/css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="{!! asset('frontend/') !!}/css/themify-icons.css" />
    <link rel="stylesheet" href="{!! asset('frontend/') !!}/css/main.css" />


</head>

<body>

@yield('content')

<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{!! asset('frontend/') !!}/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="{!! asset('frontend/') !!}/js/vendor/bootstrap.min.js"></script>
<script src="{!! asset('frontend/') !!}/js/owl.carousel.min.js"></script>
<script src="{!! asset('frontend/') !!}/js/jquery.sticky.js"></script>
<script src="{!! asset('frontend/') !!}/js/jquery.tabs.min.js"></script>
<script src="{!! asset('frontend/') !!}/js/parallax.min.js"></script>
<script src="{!! asset('frontend/') !!}/js/jquery.nice-select.min.js"></script>
<script src="{!! asset('frontend/') !!}/js/jquery.ajaxchimp.min.js"></script>
<script src="{!! asset('frontend/') !!}/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="{!! asset('frontend/') !!}/js/bootstrap-datepicker.js"></script>
<script src="{!! asset('frontend/') !!}/js/main.js"></script>
</body>
</html>
