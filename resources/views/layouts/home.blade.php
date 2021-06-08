<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="" />
    <title>Junno – Multipurpose eCommerce HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/front/img/favicon.ico" />

    <!--**********************************
        all css files
    *************************************-->

    <!--***************************************************
       fontawesome,bootstrap,plugins and main style css
     ***************************************************-->

    <link rel="stylesheet" href="assets/front/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/front/css/ionicons.min.css" />
    <link rel="stylesheet" href="assets/front/css/simple-line-icons.css" />
    <link rel="stylesheet" href="assets/front/css/plugins/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/front/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/front/css/plugins/plugins.css" />
    <link rel="stylesheet" href="assets/front/css/style.min.css" />
@yield('css')
    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

    <!--****************************
         Minified  css
    ****************************-->

    <!--***********************************************
       vendor min css,plugins min css,style min css
     ***********************************************-->
    <!-- <link rel="stylesheet" href="assets/front/css/vendor/vendor.min.css" />
    <link rel="stylesheet" href="assets/front/css/plugins/plugins.min.css" />
    <link rel="stylesheet" href="assets/front/css/style.min.css" /> -->
</head>

<body>
@include('home._header')
@yield('icerik')
@include('home._footer')

</body>

</html>
