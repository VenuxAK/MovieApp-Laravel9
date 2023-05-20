<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="/assets/css/nouislider.min.css">
    <link rel="stylesheet" href="/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="/assets/css/plyr.css">
    <link rel="stylesheet" href="/assets/css/photoswipe.css">
    <link rel="stylesheet" href="/assets/css/default-skin.css">
    <link rel="stylesheet" href="/assets/css/main.css">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="/assets/icon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="icon/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/icon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/icon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/icon/apple-touch-icon-144x144.png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Dmitry Volkov">
    <title>FlixGo – Online Movies, TV Shows & Cinema HTML Template</title>

</head>

<body class="body">

    @if (Request::is("signin") || Request::is("signup"))
    {{ $slot }}
    @else
    <x-navbar />

    {{ $slot }}

    <x-footer />
    @endif

    <!-- JS -->
    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/jquery.mousewheel.min.js"></script>
    <script src="/assets/js/jquery.mCustomScrollbar.min.js"></script>
    <script src="/assets/js/wNumb.js"></script>
    <script src="/assets/js/nouislider.min.js"></script>
    <script src="/assets/js/plyr.min.js"></script>
    <script src="/assets/js/jquery.morelines.min.js"></script>
    <script src="/assets/js/photoswipe.min.js"></script>
    <script src="/assets/js/photoswipe-ui-default.min.js"></script>
    <script src="/assets/js/main.js"></script>
</body>

</html>
