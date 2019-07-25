                   <?php
                   include "koneksi.php";
                   $sql = $conn->query("SELECT * FROM login WHERE name='$_GET[name]'");
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
                                <h1 class="h4 text-gray-900 mb-4"><b>Lihat Data Akun "<?php echo $d['name']; ?>"</h1>
                                </div>

                                <table style="text-align: left;" border='0' class="table table-striped table-bordered table-hover">
                                  <!-- <tr class="text-lighten"> -->
                                    <tr>
                                      <th width="210px">Nama Akun</th><td width="360px"><?php echo $d['name']; ?></td>
                                      <!-- <th width="165px">Nama Santri</th><td width="260px">Achmad Najib Ibrahim</td> -->
                                    </tr>
                                    <tr>
                                      <th>Username</th><td><?php echo $d['username']; ?></td>
                                    </tr>
                                    <tr>
                                      <th>Password</th><td><?php echo $d['password']; ?></td>
                                    </tr>
                                    <tr>
                                      <th>Level</th><td><?php echo $d['level']; ?></td>
                                    </tr>
                                  </table>
                                  <hr>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>