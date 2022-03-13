<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ $pageTitle }}
    </title>
    <link rel="stylesheet" href= "{{ asset('css/style.css') }}" />

    <style>

        *{
            
        }
        .nav-item{
            display: inline-block; 
            width:160px;
             border-right:2px solid #fff; 
             text-align:center;
        }

        .parent-container{
            width:850px; 
            margin-left:auto;
            margin-right:auto;
        }

        #nav-container{
            /* width:800px;  */
            height:20px; 
            background:black !important; 
            color:white;
        }
        
        #nav-container a{
            color: #fff;
            text-decoration: none;
        }

        #signup-nav{
            border:0;
        }
    </style>

    
</head>

<body>
    <div class="parent-container" >

        
    @include('layouts.header')

    @yield('content')

    <!-- Footer -->
    @include('layouts.footer')


    </div>
</body>
</html>
