<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/default.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<footer class="site-footer vertical-center">
    <div class="container ">

        <!-- Branding Image -->
        <a class="navbar-brand footerlink" href="{{ url('/') }}">
            Webshopper
        </a>

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <li><a class="footerlink" href="{{ url('/algemenevoorwaarden') }}"> Algemene voorwaarden</a></li>
            <li><a class="footerlink" href="{{ url('/ contactformulier  ') }}"> Contactformulier</a></li>
            <li><a class="footerlink" href="{{ url('/klantenservice') }}">Klantenservice</a></li>
            <li><a class="footerlink" href="{{ url('/ privacy') }}"> Privacy</a></li>
        </ul>
    </div>
</footer>

</body>
</html>
