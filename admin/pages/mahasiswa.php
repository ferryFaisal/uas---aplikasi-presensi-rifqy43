  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
<div class="container-fluid px-4">
            <h1 class="mt-4">Tampil Data Mahasiswa</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active"><a href="index.php">Beranda</a>/Data Mahasiswa</li>
            </ol>

            <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Tabel Mahasiswa
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <a class="btn btn-primary mb-2" href="index.php?p=tambah_mahasiswa" role="button">Tambah Data</a>
                  <thead>
                    <tr>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Kelas</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>

                  <?php
                    $sql = "SELECT * FROM mahasiswa";
                    $q_tampil = mysqli_query($db, $sql);

                    while($r_tampil=mysqli_fetch_array($q_tampil)){
                    ?>

                  <tbody>
                    <tr>
                      <td><?php echo $r_tampil['nim']; ?></td>
                      <td><?php echo $r_tampil['nama']; ?></td>
                      <td><?php echo $r_tampil['kelas']; ?></td>
                      <td>
                            <a class="btn btn-primary" href="index.php?p=edit-mahasiswa&nim=<?php echo $r_tampil['nim'] ?>" role="button">Edit</a>
                            <a class="btn btn-warning" href="proses/delete-mahasiswa.php?nim=<?php echo $r_tampil['nim']; ?>" role="button" onclick="return confirm('Apakah anda yakin menghapus data tersebut?')">Hapus</a>
                            <!-- <a class="btn btn-primary" href="index.php?p=pasien-edit&id=" role="button">Edit</a>
                            <a class="btn btn-warning" href="proses/pasien-hapus.php?id=" role="button" onclick="return confirm('Apakah anda yakin menghapus data tersebut?')">Hapus</a> -->
                      </td>
                    </tr>
                  </tbody>

                  <?php } ?>

                </table>
                </div>
              </div>
            </div>
          </div>