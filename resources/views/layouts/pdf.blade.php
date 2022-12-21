<!doctype html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Seo meta tag -->
  
    <meta name="keywords"
        content="account, Accounting Software, balance sheet, cash flow, Cost Of Revenue, fixed asset schedule, ledger, multi branch, Profit Or Loss Account, receive payment, trial balance">
    <meta name="description"
        content="E-Account is a dynamic, open source, easy to use, user friendly web base application. Which is built in PHP – MySQL">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon-->
    
   
    <!-- End -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap Core Css -->
     
    {{-- Report style --}}
   
    <title>title</title>
 
</head>

<body>
    @yield('content')
    <!-- Optional JavaScript -->
    <!-- Jquery Core Js -->
   <script src="{{ public_path('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ public_path('assets/js/jquery.min.js') }}"></script>
    <script src="{{ public_path('assets/js/jquery.repeater.min.js') }}"></script>
    <script src="{{ public_path('assets/js/popper.min.js') }}"></script>
    <script src="{{ public_path('assets/js/bootstrap.min.js') }}"></script>

</body>

</html>