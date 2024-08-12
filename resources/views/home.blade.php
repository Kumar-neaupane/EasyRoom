<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EasyRoom</title>
    <link rel="stylesheet" href="{{ asset('assets/css/nav.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>
    <div id="header">
        <div class="nav">
            <img src="{{ asset('assets/img/logo.png') }}" alt="logo" height="70px" width="90px">
            <ul>
                <li><a href="#"><i class="fa-solid fa-house"></i>Home</a></li>
                <li><a href="/addroom"><i class="fa-solid fa-plus"></i>Add Room</a></li>
                <li><a href="#"><i class="fa-solid fa-landmark"></i>Available Room</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="/register">Register<i class="fa-solid fa-arrow-right-to-bracket"></i></a></li>
            </ul>
        </div>
        <div class="welcome">
            <h1>Welcome to EasyRoom.</h1><br>
            <h2>Your Ideal Room, Just a Click Away.</h2>

        </div>
        <!----  <div id="sologan">
        <p>EasyRoom is a simple and easy-to-use website that helps you find and rent rooms quickly. You can search,
            view, and compare rooms based on what you need. Whether you're looking for a cozy room in the city or a
            quiet space in the suburbs, EasyRoom makes it easy to find the perfect place. With clear listings and a
            smooth experience, EasyRoom is here to help you find your ideal room with ease.</p>
    </div>--->
        <div class="login-form">
            <h2>Login</h2>
            <form>

                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form><br>
            <p>Don't have an account? <a href="/register">Register</a></p>
        </div>
    </div>
    <div>
        @include('footer');
    </div>
</body>


</html>
