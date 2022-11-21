  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
<div class="container-fluid px-4">
            <h1 class="mt-4">Tampil Data User</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active"><a href="index.php">Beranda</a>/Data User</li>
            </ol>

            <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Tabel User
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <a class="btn btn-primary mb-2" href="index.php?p=tambah_user" role="button">Tambah Data</a>
                  <thead>
                    <tr>
                      <th>Email</th>
                      <th>Nama</th>
                      <th>Password</th>
                      <th>Role</th>
                      <th>Date Created</th>
                      <th>Date Modified</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>

                  <?php
                    $sql = "SELECT * FROM user";
                    $q_tampil = mysqli_query($db, $sql);

                    while($r_tampil=mysqli_fetch_array($q_tampil)){
                    ?>

                  <tbody>
                    <tr>
                      <td><?php echo $r_tampil['email']; ?></td>
                      <td><?php echo $r_tampil['name']; ?></td>
                      <td><?php echo $r_tampil['password']; ?></td>
                      <td><?php echo $r_tampil['role']; ?></td>
                      <td><?php echo $r_tampil['date_created']; ?></td>
                      <td><?php echo $r_tampil['date_modified']; ?></td>
                      <td>
                            <a class="btn btn-primary" href="index.php?p=edit-user&email=<?php echo $r_tampil['email'] ?>" role="button">Edit</a>
                            <a class="btn btn-warning" href="proses/delete-user.php?email=<?php echo $r_tampil['email']; ?>" role="button" onclick="return confirm('Apakah anda yakin menghapus data tersebut?')">Hapus</a>
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