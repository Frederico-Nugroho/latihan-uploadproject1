<?php


include 'koneksi.php';
if(isset($_POST['register'])){

    $username = $_POST['username'];
    $nama = $_POST['nama_lengkap'];
    $password = $_POST['password'];

    $query = "INSERT INTO user (username, password, nama_lengkap) VALUES ('$username','$password','$nama')";
    $result = mysqli_query($koneksi, $query);

    if($result){
        echo "<script>alert('Registrasi Berhasil! Silahkan login.'); 
        window.location='login.php'</script>";
    } else {
        echo "Gagal mendaftar!";}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel ="stylesheet" href="style.css">
</head>
<body>
    <div class="registerbox">
    <h2>Register Form</h2>
    <form method="POST">
        <table> 
            <tr>
                <td><label for= "username">Nama Lengkap :</label></td>
                <td><input type="text" name="username" placehorder="Nama Lengkap" required></td>
            </tr>
            <tr>
                <td>Username :</td>
                <td><input type="text" name="username" placehorder="username" required></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="checkbox" name="agree" value="1" required> I agree to the Terms and Conditions</td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Register" name="register"></td>
            </tr>
        </table>
    </form>
        <p> Create Account | <a href="login.php">Login Sekarang </a></p>
    </div>
</body>
</html>