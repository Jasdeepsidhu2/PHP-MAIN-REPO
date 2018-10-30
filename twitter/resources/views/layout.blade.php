

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
        <div class="top-top">top-top</div>
        <div class="hero bg-1"></div>

         @yield('headerBottom')
    </header>
    <main class="flex full-page ">
        @yield('content')
    </main>
  </body>
</html>