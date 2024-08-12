<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .footer {
            background-color: #e74c3c;
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .social {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .social p {
            margin: 5px 0;
            transition: all 0.3s ease;
        }

        .social i:hover {
            color: #3498db;
            background-color: #ecf0f1;

            border-radius: 5px;
            transform: scale(1.1);
            padding: 1px;

        }

        .fb {
            display: flex;
            justify-content: flex-end;
            flex: 1;
        }

        .fb p {
            margin-left: 10px;
            transition: all 0.3s ease;
        }

        .fb p:hover {
            color: #3498db;
            background-color: #ecf0f1;


            border-radius: 50%;
            transform: scale(1.3);
            padding: 1px;
        }

        .copy {
            text-align: center;
            flex: 1;
        }

        .footer .copy p {
            margin: 0;
            padding: 10px 0;
        }

        @media screen and (max-width: 600px) {
            .footer {
                flex-direction: column;
                text-align: center;
            }

            .social,
            .copy,
            .fb {
                margin: 10px 0;
                flex: 100%;
                justify-content: center;
            }
        }
    </style>
</head>

<body>
    <div class="footer">
        <div class="social">
            <p><i class="fa-solid fa-phone"></i> 9818041863</p>
            <p><i class="fa-regular fa-envelope"></i> easyroom@gmail.com</p>
        </div>
        <div class="copy">
            <p>Copyright © 2024 EasyRoom. All Rights Reserved.</p>
        </div>
        <div class="fb">
            <p><i class="fa-brands fa-facebook"></i></p>
            <p><i class="fa-brands fa-instagram"></i></p>
            <p><i class="fa-brands fa-tiktok"></i></p>
        </div>
    </div>
</body>

</html>
