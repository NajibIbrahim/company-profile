       <!-- Begin Page Content -->
       <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Berita - Berita</h1>
        <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->
        <a href="?halaman=tambahberita" class="mb-2 btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Berita</a>
        <a href="?halaman=export_berita.php" class="mb-2 btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Download Data Berita</a>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
<!--           <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
          </div> -->
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th width="10px">No</th>
                    <th width="60px">Tanggal</th>
                    <th width="60px">Label</th>
                    <th width="180px">Judul Berita</th>
                    <th>Isi Berita</th>
                    <th width="80px">Gambar</th>
                    <th width="90px">Aksi</th>
                  </tr>
                </thead>
                <?php
                // $conn = mysqli_connect("localhost", "root", "", "pondok");
                include 'koneksi.php';
                if ($conn->connect_errno) {
                  echo die("Gagal Masuk Database: ".$conn->connect_error);
                }
                $mysql="SELECT * FROM berita join label using(id_label)";
                $query= mysqli_query($conn,$mysql);
                $nomor=1;
                while ($data=mysqli_fetch_array($query)) {

                  ?>
                  <!-- <tbody> -->
                    <tr>
                      <td><?php echo $nomor++; ?></td>
                      <td><?php echo $data['tanggal'];?></td>
                      <td><?php echo $data['ket'];?></td>
                      <td><?php echo $data['judul'];?></td>
                      <td><?= substr($data['isi'], 0,100); ?> .....</td>
                      <td><img width="50% px" src="img/berita/<?php echo $data['gambar'];?>"></td>
                      <td>
                        <a href="?halaman=lihatberita&judul=<?php echo $data['judul'];?>" class="mb-2 btn btn-sm btn-primary shadow-sm"><i class="fas fa-eye fa-sm text-white-50"></i></a>
                        <a href="?halaman=editberita&judul=<?php echo $data['judul'];?>" class="mb-2 btn btn-sm btn-warning shadow-sm"><i class="fas fa-pen fa-sm text-white-50"></i></a>
                        <a href="?halaman=hapusberita&judul=<?php echo $data['judul'];?>" class="mb-2 btn btn-sm btn-danger shadow-sm"><i class="fas fa-trash-alt fa-sm text-white-50"></i></a>
                      </td>
                    </tr>
                    <?php

                  }
                  ?>
                  <!-- </tbody> -->
                </table>
              </div>
            </div>
          </div>

        </div>


        <!-- /.container-fluid -->