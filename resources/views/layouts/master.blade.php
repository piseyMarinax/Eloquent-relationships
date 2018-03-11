<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Blog Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">

    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <!-- header -->
            @include('layouts.includes.header')  
        <!-- /header -->              

        <!-- nav -->    
            @include('layouts.includes.nav')
        <!-- /nav -->

        <!-- nav -->
            @include('layouts.includes.notification')
        <!-- /nav -->

        <!-- /slideShow -->  
            @yield('slideShow')      
        <!-- /slideShow -->

        <!-- display2Items -->  
            @yield('display2Items')      
        <!-- /display2Items -->        
    </div>

    <main role="main" class="container">
        <div class="row">
            <!-- blog-main -->
            <div class="col-md-8 blog-main">
                @yield('content')
                {{--  @include('layouts.includes.content')  --}}
            </div><!-- /blog-main -->
            
            <!-- /.blog-sidebar -->
            <aside class="col-md-4 blog-sidebar">
                @include('layouts.includes.blogSidebar')
            </div><!-- /.blog-sidebar -->
        </div>
        <!-- /.row -->
    </main>
    <!-- /.container -->
    <!-- footer -->
        @include('layouts.includes.footer')
    <!-- / footer -->    
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>