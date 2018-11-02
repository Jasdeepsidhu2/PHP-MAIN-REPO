

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <title>Welcome Mr Bean</title>
</head>
<body>
    <header>
        <div class="top-top">top-top
        
        <?php if(auth::check()):?> 
                <div>
                <h2>Hello <?php echo request()->user()->name?>!</h2>
                    @include('logout')
                </div>
               
            
            <?php else:?>
                <a href="/login">Login</a>

        <?php endif;?>
    
        </div>
        <div class="hero bg-1">
        <img style = " width:100%; height:100%"src="https://pbs.twimg.com/profile_banners/158331222/1528372321/1500x500" alt="">
        </div>

         @yield('headerBottom')
    </header>
    
        @yield('content')
   
  </body>
</html>