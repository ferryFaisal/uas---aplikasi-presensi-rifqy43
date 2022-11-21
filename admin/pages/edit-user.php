<div class="container-fluid px-4">
    <h2 class="mt-4">Edit User</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="index.php">Beranda</a>/<a href="index.php?p=user">Data User</a>/Tambah User</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
                Tabel User
        </div>
        <?php
            $email=$_GET['email'];
            $q_tampil=mysqli_query($db,"SELECT * FROM user WHERE email='$email'");
            $r_tampil=mysqli_fetch_array($q_tampil);
        ?>
        <div class="card-body">
            <form action="proses/edit-user-proses.php" method="post">
                <div class="form-group mb-3">
                    <label for="email">Email:</label>
                    <input name="email" type="text" class="form-control" id="email" value="<?php echo $r_tampil['email']; ?>" readonly>
                </div>
                <div class="form-group mb-3">
                    <label for="nama_user">Nama User:</label>
                    <input name="name" type="text" class="form-control" id="nama_user" value="<?php echo $r_tampil['name']; ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="pass">Password:</label>
                    <input name="pass" type="password" class="form-control" id="pass" value="<?php echo $r_tampil['password']; ?>" required>
                </div>
                <div class="form-group mb-3">
                    <div class="form-label-group">
                        <select name="role" class=" form-control" required>
                            <option value='salah'>Pilih role</option>
                            <option <?php if ($r_tampil['role'] == 'admin'){echo "selected";}?> value="admin">Admin</option>
                            <option <?php if ($r_tampil['role'] == 'dosen'){echo "selected";}?> value="dosen">Dosen</option>
                        </select>
                    </div>
                </div>
          </div>
                <!-- <div class="form-group mb-3">
                    <label for="harga">:</label>
                    <input name="harga" type="number" class="form-control" id="harga" placeholder="Masukkan harga" required>
                </div>
                <div class="form-group mb-3">
                    <label for="foto">Foto:</label>
                    <input name="foto" type="file" class="form-control" id="foto" placeholder="Masukkan Foto Produk" required>
                </div> -->
                <div>
                    <input class="btn btn-primary" type="submit" value="Submit" name="simpan">
                </div>
            </form>
        </div>
    </div>
</div>

    <!-- <div class="jumbotron mt-5">
        <div class="container">
            <div class="card border-dark mb-3">
                <div class="card-header">
                    Menambah Produk - Produk
                </div>
                <div class="card-body">
                    <form action="../proses/create_input.php" method="post" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="id_produk">ID Produk:</label>
                            <input name="id_produk" type="text" class="form-control" id="id_produk" value="" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama_produk">Nama Produk:</label>
                            <input name="nama_produk" type="text" class="form-control" id="nama_produk" placeholder="Masukkan Nama Produk" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="desc">Deskripsi:</label>
                            <textarea name="deskripsi" id="desc" class="form-control" placeholder="Masukkan Deskripsi" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="harga">Harga:</label>
                            <input name="harga" type="number" class="form-control" id="harga" placeholder="Masukkan harga" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="foto">Foto:</label>
                            <input name="foto" type="file" class="form-control" id="foto" placeholder="Masukkan Foto Produk" required>
                        </div>
                        <div>
                            <input class="btn btn-primary" type="submit" value="Submit" name="simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div> -->
    <!-- </div> -->