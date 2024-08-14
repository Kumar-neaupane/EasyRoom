<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            background-image: url('/assets/img/reg3.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.5);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            flex: 1;
            margin: auto;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
            position: relative;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border-radius: 4px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        input.invalid {
            border-color: red;
        }

        .validation-icon {
            position: absolute;
            right: 10px;
            top: 35px;
            font-size: 18px;
            display: none;
        }

        .validation-icon.valid {
            color: green;
            display: inline-block;
        }

        .validation-icon.invalid {
            color: red;
            display: inline-block;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #d63031;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .login-link {
            margin-top: 15px;
            font-size: 14px;
        }

        .login-link a {
            color: blue;
            text-decoration: underline;
            font-weight: bold;
        }

        .login-link a:hover {
            text-decoration: underline;
            color: blue;
        }

        .foo {
            margin-top: 30px;
        }

        .header {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="header">
        @include('hnavbar') <!-- Navbar stays on top -->
    </div>

    <div class="container">
        <h2>Register</h2>
        <form id="registrationForm" method="POST" action="/store" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
                <span class="validation-icon" id="name-icon"></span>
            </div>
            <div class="form-group">
                <label for="number">Phone Number:</label>
                <input type="text" name="number" id="number" placeholder="Enter your phone number" required>
                <span class="validation-icon" id="number-icon"></span>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
                <span class="validation-icon" id="email-icon"></span>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
                <span class="validation-icon" id="password-icon"></span>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" name="password_confirmation" id="confirmPassword"
                    placeholder="Confirm your password" required>
                <span class="validation-icon" id="confirmPassword-icon"></span>
            </div>
            <button type="submit">Register</button>
        </form>
        <div class="login-link">
            Already have an account? <a href="/">Login</a>
        </div>
    </div>

    <script>
        document.getElementById('registrationForm').addEventListener('input', function() {
            validateName();
            validateNumber();
            validateEmail();
            validatePassword();
            validateConfirmPassword();
        });

        function validateName() {
            const nameInput = document.getElementById('name');
            const nameIcon = document.getElementById('name-icon');
            const regex = /^[a-zA-Z][a-zA-Z0-9\s]*$/;

            if (!regex.test(nameInput.value)) {
                nameInput.classList.add('invalid');
                nameIcon.classList.remove('valid');
                nameIcon.classList.add('invalid');
                nameIcon.textContent = '✘';
            } else {
                nameInput.classList.remove('invalid');
                nameIcon.classList.remove('invalid');
                nameIcon.classList.add('valid');
                nameIcon.textContent = '✔';
            }
        }

        function validateNumber() {
            const numberInput = document.getElementById('number');
            const numberIcon = document.getElementById('number-icon');
            const regex = /^[0-9]{10}$/;

            if (!regex.test(numberInput.value)) {
                numberInput.classList.add('invalid');
                numberIcon.classList.remove('valid');
                numberIcon.classList.add('invalid');
                numberIcon.textContent = '✘';
            } else {
                numberInput.classList.remove('invalid');
                numberIcon.classList.remove('invalid');
                numberIcon.classList.add('valid');
                numberIcon.textContent = '✔';
            }
        }

        function validateEmail() {
            const emailInput = document.getElementById('email');
            const emailIcon = document.getElementById('email-icon');
            const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!regex.test(emailInput.value)) {
                emailInput.classList.add('invalid');
                emailIcon.classList.remove('valid');
                emailIcon.classList.add('invalid');
                emailIcon.textContent = '✘';
            } else {
                emailInput.classList.remove('invalid');
                emailIcon.classList.remove('invalid');
                emailIcon.classList.add('valid');
                emailIcon.textContent = '✔';
            }
        }

        function validatePassword() {
            const passwordInput = document.getElementById('password');
            const passwordIcon = document.getElementById('password-icon');

            if (passwordInput.value.length < 6) {
                passwordInput.classList.add('invalid');
                passwordIcon.classList.remove('valid');
                passwordIcon.classList.add('invalid');
                passwordIcon.textContent = '✘';
            } else {
                passwordInput.classList.remove('invalid');
                passwordIcon.classList.remove('invalid');
                passwordIcon.classList.add('valid');
                passwordIcon.textContent = '✔';
            }
        }

        function validateConfirmPassword() {
            const confirmPasswordInput = document.getElementById('confirmPassword');
            const passwordInput = document.getElementById('password');
            const confirmPasswordIcon = document.getElementById('confirmPassword-icon');

            if (confirmPasswordInput.value !== passwordInput.value || confirmPasswordInput.value.length < 6) {
                confirmPasswordInput.classList.add('invalid');
                confirmPasswordIcon.classList.remove('valid');
                confirmPasswordIcon.classList.add('invalid');
                confirmPasswordIcon.textContent = '✘';
            } else {
                confirmPasswordInput.classList.remove('invalid');
                confirmPasswordIcon.classList.remove('invalid');
                confirmPasswordIcon.classList.add('valid');
                confirmPasswordIcon.textContent = '✔';
            }
        }
    </script>
    <div class="foo">
        @include('footer') <!-- Footer stays at the bottom -->
    </div>
</body>

</html>
