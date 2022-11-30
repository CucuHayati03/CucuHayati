<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bulma.css">
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
                        <strong>Sign Up</strong>
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
    <div class="field">
  <label class="label">Nama</label>
  <div class="control">
    <input name="nama" class="input" type="text" placeholder="masukkan nama">
  </div>
</div>

   <div class="field">
    <label class="label">NIP</label>
    <div class="control">
        <input name="nip" class="input" type="text" placeholder="masukkan NIP">
    </div> 
   </div>   
   
   <div class="field">
    <label class="label">Email</label>
    <div class="control">
        <input name="email" class="input is-danger" type="email" placeholder="masukkan email">
    </div> 
   </div>   

   <div class="field">
    <label class="label">Alamat</label>
    <div class="control">
        <textarea name="alamat" class="textarea" placeholder="textarea"></textarea>
    </div> 
   </div>   


   <div class="field is-grouped">
    <div class="control">
        <button name="create" class="button is-link">Submit</button>
    </div>   
</div>
</div>
</form> 
</body>
</html>