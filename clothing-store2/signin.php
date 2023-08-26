<html>

<head>
    
    <link rel="stylesheet" href="../clothing-store2/css/stylesignin.css">
    <!-- icon-->
    <link rel="shortcut icon" href="../clothing store2/image/logo.ico">

    <title>Sign In page</title>
</head>

<body>


    <h1 class="logo"><span>P</span>rada <span>Store</span></h1>
    
    <div>
        <h1>Sign In</h1>
        <form method="post" action="handle_signin.php">

            <input type="email" required id="email" name="email" placeholder="Email">
            <p>
                <input type="password" required id="password" name="password" placeholder="Password">
                <p>
                    <input type="submit" class="SignIn" id="submit" name="submit" value="Sign In" >
        </form>
        <a href="#">forget password ? </a>
        <p><a class="HA">dont have a account ? </a><a href="index.php">sign up</a>

        </form>

    </div>
    
</body>

</html>