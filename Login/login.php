<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href ="./css/style.css" />
</head>
<body>
    <img class="wave gambar" src="img/wave.png"/>
    <div class="container">
        <div class="img">
            <img src="img/bg.png"/>
        </div>

    <div class="login-content">
        <form action="cek_login.php" method="post" name="login">
            <img src="img/avatar.png">
            <h2 class="title">Selamat datang</h2>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
            <div class="i">
        <i class="fas fa-user"></i>
    </div>
    <div class="div">
        <h5>Nama User</h5>
        <input name ="username" type="text" class="input"/>
    </div>
</div>
    <div class="input-div pass">
        <i class="fas fa-user"></i>
    </div>
    <div class="div">
        <h5>Kata Sandi</h5>
        <input name ="password" type="password" class="input"/>
    </div>
</div>
<a href ="#">Lupa kata sandi?</a>
<input type="submit" class="btn" value="login"/>
</form>
</div>
</div>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>