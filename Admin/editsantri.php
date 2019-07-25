  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
          <div class="col-lg-8">
            <div class="p-3">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"><b>Edit Data Santri</h1>
                </div>

                <?php
                include "koneksi.php";
                $sql = $conn->query("SELECT * FROM santri WHERE id_san='$_GET[id_san]'");
                $row = $sql->fetch_assoc();

                ?>

                <form class="user" method="POST"  action="">
                  <div class="form-group">
                    <input class="form-control form-control-user" name="nama" value="<?php echo $row['nama_san']; ?>" required/>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                      <input class="form-control form-control-user" name="id" value="<?php echo $row['id_san']; ?>" required/>
                    </div>
                    <div class="col-sm-4">
                      <input class="form-control form-control-user" name="tahun" value="<?php echo $row['tahun_san']; ?>" required/>
                    </div>
                    <div class="col-sm-4">
                      <input class="form-control form-control-user" name="tagihan" value="<?php echo $row['tagihan_san']; ?>" required/>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input class="form-control form-control-user" name="tempat" value="<?php echo $row['tempat_san']; ?>" required/>
                    </div>
                    <div class="col-sm-6">
                      <input type="date" class="form-control form-control-user" name="tanggal" value="<?php echo $row['tanggal_san']; ?>" required/>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <label for="jkel">Jenis Kelamin</label>
                      <div>
                        <label class="radio-inline">
                          <input type="radio" name="jkel" value="Laki-laki"
                          <?php if ($row["jkel_san"]=='Laki-laki') {
                            echo 'checked';
                          }
                          ?>
                          >Laki-laki
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="jkel" value="Perempuan"
                          <?php if ($row["jkel_san"]=='Perempuan') {
                            echo 'checked';
                          }
                          ?>
                          >Perempuan
                        </label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label for="jkel">Status</label>
                      <div>
                        <label class="radio-inline">
                          <input type="radio" name="status" value="Aktif"
                          <?php if ($row["status_san"]=='Aktif') {
                            echo 'checked';
                          }
                          ?>
                          >Aktif
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="status" value="Sudah Boyong"
                          <?php if ($row["status_san"]=='Sudah Boyong') {
                            echo 'checked';
                          }
                          ?>
                          >Sudah Boyong
                        </label>
                      </div>
                    </div> 
                  </div>

                  <div class="form-group">
                    <input type="text-area" class="form-control form-control-user" name="alamat" value="<?php echo $row['alamat_san']; ?>" required/>
                  </div>
                  <div class="text-center mb-2">
                    <a class="small" href="">Pastikan Data Yang Anda Masukkan Sudah Benar !</a>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <button type="reset" name="reset" class="col-sm-4-6 btn btn-danger btn-user btn-block">Reset</button>
                    </div>
                    <div class="col-sm-6">
                      <button type="submit" name="simpan" class="col-sm-4-6 btn btn-primary btn-user btn-block">Simpan</button>
                    </div>
                  </div>
                  <hr>
                </form>
                <hr>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>


    <?php
    if (isset($_POST['simpan'])) {

      $nama_san     = $_POST['nama'];
      $id_san     = $_POST['id'];
      $tempat_san   = $_POST['tempat'];
      $tanggal_san  = $_POST['tanggal'];
      $jkel_san     = $_POST['jkel'];
      $tahun_san    = $_POST['tahun'];
      $alamat_san   = $_POST['alamat'];
      $status_san   = $_POST['status'];
      $tagihan_san  = $_POST['tagihan'];
      $total_san = $tagihan_san * 300000;


      $sql = $conn->query("UPDATE santri SET 
        nama_san    =  '$nama_san',
        id_san      =  '$id_san',
        tempat_san  =  '$tempat_san',
        tanggal_san =  '$tanggal_san',
        jkel_san    =  '$jkel_san',
        tahun_san   =  '$tahun_san',
        alamat_san  =  '$alamat_san',
        status_san  =  '$status_san',
        tagihan_san =  '$tagihan_san',
        total_san   =  '$total_san' WHERE id_san='$_GET[id_san]'");
      if ($sql) {

        ?>
        <script type="text/javascript">
          alert("Data Berhasil di Update"); document.location = '?halaman=datasantri';
        </script>
        <?php

      } else {

        ?>
        <script type="text/javascript">
          alert("Data Gagal di Update"); document.location = '?halaman=datasantri';
        </script>
        <?php

      }

    }
    ?>