<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/login.css">
    <title>Login Admin</title>
</head>

<body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    
       




<nav class="navbar bg-info">
    <div class="container-fluid">
        <a href="{{route('asosiyga')}}" class="logo " style="color:white;font-size:22px;">
            <img style="width: 70px; height: 70px;" src="./assets/images/UM-University.png" alt="">
              MUU
              <!-- UNIVERSITY -->
        </a>
    </div>
  </nav>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div> 
    @endif

        
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->

                <!-- Icon -->
                <div class="fadeIn first">
                    <img src="/img/user.svg" id="icon" alt="User Icon" />
                </div>

                <!-- Login Form -->
                <form method="get" action="{{route('loginCheck')}}" >
                    @csrf
                    <input type="text" id="login" class="fadeIn second" name="name" placeholder="Login" autocomplete="off">
                    <input type="text" id="password" class="fadeIn third" name="password" placeholder="Parol" autocomplete="off"><br>
                    @if (session()->has('message'))
                    <strong class="alert alert-danger">{{ session()->get('message') }}</strong>
                    @endif
                    <br><input type="submit" class="fadeIn fourth" value="Log In">
                </form>
            </div>
        </div>


   
    



</body>

</html>