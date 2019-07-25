                   <?php
                   include "koneksi.php";
                   $sql = $conn->query("SELECT * FROM berita join label using(id_label) WHERE judul='$_GET[judul]'");
                   $d = $sql->fetch_assoc();

                   ?>
                   <div class="container">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                      <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                          <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                          <div class="col-lg-8">
                            <div class="p-3">
                              <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><b>Lihat Berita "<?php echo $d['judul']; ?>"</h1>
                                </div>

                                <table style="text-align: left;" border='0' class="table table-striped table-bordered table-hover">
                                  <!-- <tr class="text-lighten"> -->
                                    <tr>
                                      <th width="170px">Di Upload Pada</th><td><?php echo $d['tanggal']; ?></td>
                                      <!-- <th width="165px">Nama Santri</th><td width="260px">Achmad Najib Ibrahim</td> -->
                                    </tr>
                                    <tr>
                                      <th>Label</th><td><?php echo $d['ket']; ?></td>
                                    </tr>
                                    <tr>
                                      <th>Judul</th><td><?php echo $d['judul']; ?></td>
                                    </tr>
                                    <tr>
                                      <th>Isi</th><td><?php echo $d['isi']; ?></td>
                                    </tr>
                                    <tr>
                                      <th>Gambar</th><td><img width="50%" src="img/berita/<?php echo $d['gambar'];?>"></td>

                                    </tr>
                                  </table>
                                  <hr>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>