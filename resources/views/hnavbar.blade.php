<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Document</title>
</head>
<style>
    .nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        padding: 10px 20px;
        background-color: #e74c3c;
    }

    .nav img {
        margin-right: auto;
    }

    .nav ul {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .nav ul li {
        margin: 10px 20px;
    }

    .nav ul li a {
        color: #ecf0f1;
        text-decoration: none;
        font-size: 18px;
        position: relative;
    }

    .nav ul li a::after {
        content: '';
        width: 0;
        height: 3px;
        background-color: #576574;
        position: absolute;
        left: 0;
        bottom: -6px;
        transition: 0.5s;
    }

    .nav ul li a:hover::after {
        width: 100px;
    }
</style>

<body>
    <div class="nav">
        <img src="{{ asset('assets/img/logo.png') }}" alt="logo" height="70px" width="90px">
        <ul>
            <li><a href="/"><i class="fa-solid fa-house"></i>Home</a></li>
            <li><a href="/addroom"><i class="fa-solid fa-plus"></i>Add Room</a></li>
            <li><a href="/available"><i class="fa-solid fa-landmark"></i>Available Room</a></li>
            <li><a href="/about">About us</a></li>
            <li><a href="/register">Register<i class="fa-solid fa-arrow-right-to-bracket"></i></a></li>
        </ul>
    </div>

</body>

</html>
