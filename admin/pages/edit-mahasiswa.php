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
            $nim=$_GET['nim'];
            $q_tampil=mysqli_query($db,"SELECT * FROM mahasiswa WHERE nim='$nim'");
            $r_tampil=mysqli_fetch_array($q_tampil);
        ?>
        <div class="card-body">
            <form action="proses/edit-mahasiswa-proses.php" method="post">
                <div class="form-group mb-3">
                    <label for="nim">:</label>
                    <input name="nim" type="text" class="form-control" id="nim" value="<?php echo $r_tampil['nim']; ?>" readonly>
                </div>
                <div class="form-group mb-3">
                    <label for="nama">Nama Mahasiswa:</label>
                    <input name="nama" type="text" class="form-control" id="nama" value="<?php echo $r_tampil['nama']; ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="kelas">Kelas:</label>
                    <select name="kelas" id="kelas" class="form-control" required>
                        <option value='salah'>Pilih role</option>
                        <option <?php if ($r_tampil['kelas'] == '5A'){echo "selected";}?> value="5A">5A</option>
                        <option <?php if ($r_tampil['kelas'] == '5B'){echo "selected";}?> value="5B">5B</option>
                    </select>

                </div>
          </div>

                <div>
                    <input class="btn btn-primary" type="submit" value="Submit" name="simpan">
                </div>
            </form>
        </div>
    </div>
</div>