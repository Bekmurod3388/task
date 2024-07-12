<html>
<head>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="#">
            <h1>Create Account</h1>
            <input type="text" name="name" placeholder="Username" />
            <input type="password" name="password" placeholder="Password" />
            <button>Ro'yxatdan o'tish</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="#">
            <h1>Log In</h1>
            <input type="text" name="name" placeholder="Username" />
            <input type="password" name="password" placeholder="Password" />
            <button>Login</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Login!</h1>
                <p>Click the login button to log in</p>
                <button class="ghost" id="signIn">Login</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Register!</h1>
                <p>Click the register button to register</p>
                <button class="ghost" id="signUp">Register</button>
            </div>
        </div>
    </div>
</div>

<script src="assets/script.js"></script>
</body>
</html>
