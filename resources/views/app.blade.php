<!-- Layout File -->
<!DOCTYPE html>
<html lang="en">

<head>  
    <meta name="description" content="Blog by arnon">
    <meta name="keywords" content="web design blog, web dev blog, starting">
    
    <style type="text/css">
        #main-header{
            text-align: center;
            background-color: black;
            color:white;
            padding: 10px;
        }

        #main-footer{
            text-align: center;
            font-size: 18px;
        }
    </style>

    <title>@yield('title')</title>
</head>

<body>
    
    @include('nav')
    @yield('content')

    <footer id="main-footer">
        <p>Copyright &copy; 2019 My website</p>
    </footer>

</body>

</html>