<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel ="stylesheet" href="style.css">
</head>
<body>
    <div class="loginbox">
    <h2>Login Form</h2>
    <form method="POST">

        <table style="text-align: center;"> 
            <tr>
                <td><label for ="username">Username :</label></td>
                <td><input type="text" name="username" placehorder="username" required></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="password" name="password" required></td>
            </tr>
        </table>
        <tr> 
            <td colspan="2" align="center"><input type="checkbox" name="rememberme" value="1"> Remember Me</td>
        </tr>   
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Login"></td>
    </form>
        
        <p> Daftar Disini | <a href="register.php">Daftar Sekarang </a></p>
    </div>
</body>
</html>