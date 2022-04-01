<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <style>
      body {
        padding: ;
      }
      .navbar-template{ 
        list-style-type: none;
        padding-top:10px;
        padding-bottom:10px;
        margin-bottom: 0px;
      }
      .item-nav a{
        text-decoration: none;
        color: rgb(255, 253, 253);
        font-size:  18px;
        font-weight: 500;
      }
      .item-nav {
        display: inline-block;
        padding-right: 10px;
      }
      .body{
        padding-left: 30px;
        padding-right: 30px;
        padding-top: 30px;
      }
    </style>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>{{ $title }}</title>
  </head>
  <body>
      <div>
          <ul class="navbar-template bg-dark" style="">
              <li class="item-nav"><a class="d-inline" href="/"><i class="bi bi-house-door"></i></a></li>
                <li class="item-nav"><a class="d-inline" href="/">Home</a></li>
                <li class="item-nav"><a class="d-inline" href="/user">User</a></li>
          </ul>
      </div>

      <div class="body">
        @yield('container')
      </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>