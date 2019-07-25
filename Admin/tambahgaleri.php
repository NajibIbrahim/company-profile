  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
          <div class="col-lg-8">
            <div class="p-3">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"><b>Tambah Galeri</h1>
                </div>
                <form class="user" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="text" class="form-control" name="judul" placeholder="Judul Gambar">
                  </div>
<!--                   <div class="form-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="gambar">
                      <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                    </div>
                  </div> -->
                  <div class="form-group">
                    <label for="gambar">Upload Gambar </label>
                    <input type="file" name="gambar">
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

                <?php
                include 'koneksi.php';
                if(isset($_POST['simpan'])){
                  date_default_timezone_set('Asia/Jakarta');
                  $tanggal = date("Y-m-d");

                  $nama = $_FILES['gambar']['name'];
                  $lokasi = $_FILES['gambar']['tmp_name'];

                  $foto = "img/galeri/$nama";
                  move_uploaded_file($lokasi, $foto);

                  $sql = "INSERT INTO galeri (judul, tanggal, gambar)
                  VALUES ('".$_POST['judul']."', '$tanggal', '$nama')";

                  $s1 = mysqli_query($conn,$sql);


                  if($s1){
                    ?>
                    <script>alert("Alhamdulillah Berhasil Menyimpan Data"); document.location= '?halaman=datagaleri';
                  </script>

                  <?php
                 // echo 'Berhasil';

                }
                else
                {
                // echo 'gagal';
                  ?>

                  <script>alert("Gagal Menyimpan Data"); document.location= '?halaman=datagaleri';
                </script>
                <?php

              }
            } ?>

            <hr>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>