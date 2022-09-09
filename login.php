<html>
    <head>

        <!-- my title -->
        <title>Log In</title>

        <!-- CSS file link -->
        <link rel="stylesheet" href="CSS-FILES/login.css">

        <!-- font links -->
            <!-- font awesome cdn link --> 
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

            <!-- aos css link -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    </head>
    <body>
        <div class="login">
            <div class="form">
                <h2>log in</h2>

                <div class="form-element">
                    <label for="name">name</label>
                    <input type="text" id="name" placeholder="Enter username" name="Name">
                </div>

                <div class="form-element">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter your password" name="Password">
                </div>

                <div class="form-element">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Rember Me</label>
                </div>

                <div class="form-element">
                    <button type="submit" name="Signin">Sign in</button>
                </div>

                <div class="form-element">
                    <a href="#">Forgot Password?</a>
                </div>

            </div>
        </div> 
    </body>
</html>