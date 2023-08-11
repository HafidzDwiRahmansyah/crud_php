<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD PHP NATIVE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <h3 class="text-center my-5">CRUD Admin</h3>
    <section class="tambah">
        <div class="container">
            <div class="row">
                <div class="card border-0 shadow rounded-3">
                    <div class="card-body">
                        <form action="php/save.php" method="post">
                            <label class="form-label" for="username">Username</label>
                            <input class="form-control" type="text" name="username" id="username" placeholder="username..."><br>
                            <label class="form-label" for="mail">Email</label>
                            <input class="form-control" type="email" name="mail" id="mail" placeholder="email..."><br>
                            <label class="form-label" for="pass">Password</label>
                            <input class="form-control" type="password" name="pass" id="pass" placeholder="password..."><br>
                            <button class="btn btn-success mx-auto d-block" name="simpan" type="submit">Simpan Data</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="card border-0 shadow rounded-3">
                    <div class="card-body">
                        <table class="table table-responsive mx-auto">
                            <thead>
                                <th>No</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <?php
                                include "app/db.php";
                                $data = $conn->query("SELECT * FROM tbl_admin");
                                $no = 1;
                                foreach ($data as $show) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $show['username'] ?></td>
                                        <td><?= $show['email'] ?></td>
                                        <td><?= $show['password'] ?></td>
                                        <td>
                                            <a type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $show['id'] ?>">Edit</a>
                                            <a class="btn btn-danger" href="php/save.php?id_hapus=<?= $show['id'] ?>">Hapus</a>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="exampleModal<?= $show['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="php/save.php?id_edit=<?= $show['id'] ?>" method="post">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Data</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <label class="form-label" for="username">Username</label>
                                                        <input class="form-control" type="text" name="username" id="username" value="<?= $show['username'] ?>" placeholder="username..."><br>
                                                        <label class="form-label" for="mail">Email</label>
                                                        <input class="form-control" type="email" name="mail" id="mail" value="<?= $show['email'] ?>" placeholder="email..."><br>
                                                        <label class="form-label" for="pass">Password</label>
                                                        <input class="form-control" type="text" name="pass" id="pass" value="<?= $show['password'] ?>" placeholder="password..."><br>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" name="" class="btn btn-success">Simpan</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>

<!-- <a class="btn btn-warning" href="">Edit</a> -->

<!-- pengenalan aplikasi mobile dan android -->