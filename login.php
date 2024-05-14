<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I_Found</title>
    <style>
        * {
            margin: 0px;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body style="background-image: url('Background.jpg');background-repeat: no-repeat;background-attachment: fixed;
background-size: cover;">
    <img src="Logo.png" alt="Nama Logo" width="200px" height="200px" style="display: block; margin-left: auto; margin-right: auto;">
    <div class="form" style="text-align: center;">
        <form action="logic_login.php" method="post" autocomplete="off">
            <label for="email" style="text-align: left; display: inline-block; width: 200px;">Email</label><br>
            <input type="email" id="email" name="email" minlength="4" placeholder="Input email" style="width: 200px;"><br><br>
            <label for="password" style="text-align: left; display: inline-block; width: 200px;">Password</label><br>
            <input name="password" type="password" minlength="4" autocomplete="off" required placeholder="Input password" style="width: 200px;"><br><br>
            <input type="submit" value="Login" style="background-color: blue; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; width: 200px;">
            <br><br>
            <p>Belum Punya Akun? <a style="color: black; text-decoration:none;" href="index.php">Daftar</a></p>
        </form>
    </div>
</body>
</html>
