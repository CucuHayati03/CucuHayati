<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar is-danger" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
            <img src="https://bulma.io/images/bulma-logo.png" widht="112" height="28">
        </a>    

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>    
    </div>  
    
    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item">
                Home
            </a> 
        </div>   
        
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-primary">
                        <strong>Sign Up></strong>
                    </a>
                    <a class="button is-light">
                        Log in
                    </a>    
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="container mt-3">
    <form action="query.php" method="post">
        <input type="hidden" class="form-control" value="<?= $edit[0]['id'] ?>" name="id" />
        <div class="field">
            <label class="label">Nama</label>
            <div class="control">
                <input value="<?= $edit[0]['nama'] ?>" name="nama" class="input" type="text" placeholder="masukkan nama">
            </div>
        </div>
        <div class="field">
            <label class="label">Nip</label>
            <div class="control">
                <input value="<?= $edit[0]['nip'] ?>" name="nip" class="input" type="text" placeholder="masukkan nip">
            </div>
        </div>
        <div class="field">
            <label class="label">Email</label>
            <div class="control">
                <input value="<?= $edit[0]['email'] ?>" name="email" class="input" type="email" placeholder="masukkan email">
            </div>
        </div>
        <div class="field">
            <label class="label">Alamat</label>
            <div class="control">
                <textarea name="alamat" class="textarea" placeholder="masukkann Alamat"><?= $edit[0]['alamat'] ?></textarea>
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button name="update" class="button is-link">edit</button>
            </div>
            <div class="control">
                <button type="reset" class="button is-link is-light">Cancel</button>
            </div>
        </div>
    </div>
</form>
</body>
</html>