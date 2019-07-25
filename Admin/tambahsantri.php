  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
          <div class="col-lg-8">
            <div class="p-3">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"><b>Tambah Data Santri</h1>
                </div>
                <form class="user" method="post"  action="">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="nama" placeholder="Nama Santri">
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                      <input type="text" class="form-control form-control-user" name="id" placeholder="ID Santri">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control form-control-user" name="tahun" placeholder="Tahun Masuk">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control form-control-user" name="tagihan" placeholder="Tagihan /- Bulan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" class="form-control form-control-user" name="tempat" placeholder="Tempat Lahir">
                    </div>
                    <div class="col-sm-6">
                      <input type="date" class="form-control form-control-user" name="tanggal" placeholder="Tanggal Lahir">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <label for="jkel">Jenis Kelamin</label>
                      <div>
                        <label class="radio-inline">
                          <input type="radio" name="jkel" value="Laki-laki"> Laki-laki
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="jkel" value="Perempuan"> Perempuan
                        </label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label for="jkel">Status</label>
                      <div>
                        <label class="radio-inline">
                          <input type="radio" name="status" value="Aktif"> Aktif 
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="status" value="Boyong"> Sudah Boyong
                        </label>
                      </div>
                    </div> 
                  </div>

                  <div class="form-group">
                    <input type="text-area" class="form-control form-control-user" name="alamat" placeholder="Alamat">
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
    include 'koneksi.php';
    if(isset($_POST['simpan'])){

      $sql= "INSERT INTO `santri`(`nama_san`,`id_san`, `tempat_san`, `tanggal_san`, `jkel_san`, `tahun_san`, `alamat_san`, `status_san`, `tagihan_san`,`total_san`) 
      VALUES ('".$_POST['nama']."',
      '".$_POST['id']."',
      '".$_POST['tempat']."',
      '".$_POST['tanggal']."',
      '".$_POST['jkel']."',
      '".$_POST['tahun']."',
      '".$_POST['alamat']."',
      '".$_POST['status']."',
      '".$_POST['tagihan']."',
      '".$_POST['tagihan']."'*300000)";

      $s1 = mysqli_query($conn,$sql);


      if($s1){
        ?>
        <script>alert("Alhamdulillah Berhasil Menyimpan Data"); document.location= '?halaman=datasantri';
      </script>
      <?php
    }
    else
    {
      ?>
      <script>alert("Gagal Menyimpan Data"); document.location= '?halaman=datasantri';
    </script>
    <?php

  }
} ?> 