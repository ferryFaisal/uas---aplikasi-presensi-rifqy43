<div class="container-fluid px-4">
    <h2 class="mt-4">Tambah Mahasiswa</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="index.php">Beranda</a>/<a href="index.php?p=user">Data User</a>/Tambah Mahasiswa</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
                Tabel Mahasiswa
        </div>
        <div class="card-body">
            <form action="proses/tambah-mahasiswa-proses.php" method="post" >
                <div class="form-group mb-3">
                    <label for="nim">NIM:</label>
                    <input name="nim" type="text" class="form-control" id="email" placeholder="Masukkan NIM" required>
                </div>
                <div class="form-group mb-3">
                    <label for="nama">Nama Mahasiswa:</label>
                    <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan Nama Mahasiswa" required>
                </div>
                <div class="form-group mb-3">
                    <label for="kelas">Kelas:</label>
                    <select name="kelas" class=" form-control" id='kelas' required>
                            <option value="salah">Pilih Kelas</option>
                            <option value="5A">5 A</option>
                            <option value="5B">5 B</option>
                    </select>
                </div>
                <div>
                    <input class="btn btn-primary" type="submit" value="Submit" name="simpan">
                </div>
            </form>
        </div>
    </div>
</div>