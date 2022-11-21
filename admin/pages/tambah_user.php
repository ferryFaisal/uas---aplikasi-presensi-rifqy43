<div class="container-fluid px-4">
    <h2 class="mt-4">Tambah User</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="index.php">Beranda</a>/<a href="index.php?p=user">Data User</a>/Tambah User</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
                Tabel User
        </div>
        <div class="card-body">
            <form action="proses/tambah-user-proses.php" method="post" >
                <div class="form-group mb-3">
                    <label for="email">Email:</label>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Masukkan Email" required>
                </div>
                <div class="form-group mb-3">
                    <label for="nama_user">Nama User:</label>
                    <input name="name" type="text" class="form-control" id="nama_user" placeholder="Masukkan Nama User" required>
                </div>
                <div class="form-group mb-3">
                    <label for="pass">Password:</label>
                    <input name="pass" type="password" class="form-control" id="pass" placeholder="Masukkan Email" required>
                </div>
                <div class="form-group mb-3">
                    <label for="role">Role:</label>
                    <select name="role" class=" form-control" id='role' required>
                            <option value="salah">Pilih role</option>
                            <option value="admin">Admin</option>
                            <option value="dosen">Dosen</option>
                    </select>
                </div>
                <div>
                    <input class="btn btn-primary" type="submit" value="Submit" name="simpan">
                </div>
            </form>
        </div>
    </div>
</div>