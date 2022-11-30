<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan </title>
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
<a href="add.php" class="button is-primary">Tambah</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>NISN</th>
            <th>EMAIL</th>
            <th>ALAMAT</th>
            <th>AKSI</th>
        </tr>
    </thead>
</tbody>  
    <?php
    $no = 1;
    $sql = "SELECT * FROM mahasiswa";
    $result = $koneksi->query($sql);
    $hasil = $result->fetch_all(MYSQLI_ASSOC);

    foreach ($hasil as $r) {
        ?>
        <tr>
            <td><?= $no; ?></td>
            <td><? $r['nama']; ?></td>
            <td><? $r['nisn']; ?></td>
            <td><? $r['email']; ?></td>
            <td><? $r['alamat']; ?></td>
            <td>
            <form action="query.php" method="post">
                <a class="button is-warning" href="ubah.php?id=<?= $r[
                    'id'
                ]?>">EDIT</a>
                <button
                name="delete"
                value="<?phpecho $r['id']; ?>"
                class="button is-danger"
                onclick="javascript:return confirm('Data Ingin dihapus?');" title="hapus">
                Hapus    

                </button>
            </form>
            </td>
        </tr>

    </td>
    </tr>
    <?php #no++
    }?>

    </body>
</table>

    </div>
</div>
</body>
</html>