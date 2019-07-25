                   <?php
                   include "koneksi.php";
                   $sql = $conn->query("SELECT * FROM santri WHERE id_san='$_GET[id_san]'");
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
                                <h1 class="h4 text-gray-900 mb-4"><b>Lihat Data "<?php echo $d['nama_san']; ?>"</h1>
                                </div>

                                <table style="text-align: left;" border='0' class="table table-striped table-bordered table-hover">
                                  <!-- <tr class="text-lighten"> -->
                                    <tr>
                                      <th width="210px">Nama Santri</th><td width="360px"><?php echo $d['nama_san']; ?></td>
                                      <!-- <th width="165px">Nama Santri</th><td width="260px">Achmad Najib Ibrahim</td> -->
                                    </tr>
                                    <tr>
                                      <th>ID Santri</th><td><?php echo $d['id_san']; ?></td>
                                    </tr>
                                    <tr>
                                      <th>Tempat, Tanggal Lahir</th><td><?php echo $d['tempat_san']; ?>, <?php echo $d['tanggal_san']; ?></td>
                                    </tr>
                                    <tr>
                                      <th>Jenis Kelamin</th><td><?php echo $d['jkel_san']; ?></td>
                                    </tr>
                                    <tr>
                                      <th>Tahun Masuk</th><td><?php echo $d['tahun_san']; ?></td>
                                    </tr>
                                    <tr>
                                      <th>Alamat</th><td><?php echo $d['alamat_san']; ?></td>
                                    </tr>
                                    <tr>  
                                      <th>Status</th><td><?php echo $d['status_san']; ?></td>
                                    </tr>
                                    <tr>  
                                      <th>Tagihan/-Bulan</th><td><?php echo $d['tagihan_san']; ?> Bulan</td>
                                    </tr>
                                    <tr>
                                      <th>Total Tagihan</th><td><b>Rp. <?php echo $d['total_san']; ?></b></td>
                                    </tr>
                                  </table>
                                  <hr>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>