

<html>

<head>
    
    <link rel="stylesheet" href="../clothing-store2/css/stylesignup.css">
    <!-- icon-->
    <link rel="shortcut icon" href="../clothing store2/image/logo.ico">

    <title>Sign Up page</title>
</head>

<body>

    <h1 class="logo"><span>P</span>rada <span>Store</span></h1>
    <div>
        <h1>Sign Up</h1>
        <form method="post" action="handle_in.php">
            
                <input type="text" required id="name" name="name" placeholder="Name">
                <p>
            <input type="email" required id="email" name="email" placeholder="Email">
            <p>
                <input type="password" required id="password" name="password" placeholder="Password">
                
                <p>
                    <input type="submit"class="SignUp" id="submit" name="submit" value="Sign Up" >
        </form>
        <a href="#">forget password ? </a>
        <p><a class="HA">Already have a account ? </a><a href="../clothing-store2/signin.php">Sign In</a>

        </form>

    </div>

    <script src="../clothing store2/js/stylesignup.js"></script>
</body>

</html>