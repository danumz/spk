<div class="page-wrapper">
    <div class="container-fluid">
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Basic Material inputs</h4>
                                <h6 class="card-subtitle">Just add <code>form-material</code> class to the form that's it.</h6>
                                <!-- <form class="form-material m-t-40"> -->
                                <?= form_open('Admin/Product/proses', array('class'=>'form-material m-t-40')) ?>

                                    <div class="form-group">
                                        <label>Bobot Pengalaman</label>
                                        <select name="pengalaman" class="form-control">
                                            <option>Pilih</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pendidikan</label>
                                        <select name="pendidikan" class="form-control">
                                            <option>Pilih</option>
                                            <option value="1">SMA</option>
                                            <option value="2">SMK</option>
                                            <option value="3">S1</option>
                                            <option value="4">S2</option>
                                            <option value="5">S3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Peminatan</label>
                                        <select name="peminatan" class="form-control">
                                            <option>Pilih</option>
                                            <option value="1">A</option>
                                            <option value="2">B</option>
                                            <option value="3">C</option>
                                            <option value="4">D</option>
                                            <option value="5">E</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Lahir</label>
                                        <select name="lahir" class="form-control">
                                            <option>PIlih</option>
                                            <option value="5">22-26</option>
                                            <option value="4">27-31</option>
                                            <option value="3">32-36</option>
                                            <option value="2">37-40</option>
                                            <option value="1">41-47</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Statur perkawinan</label>
                                        <select name="kawin" class="form-control">
                                            <option>Pilih</option>
                                            <option value="1">Ya</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                      <button type="submit" name="submit" class="btn btn-info waves-effect waves-light m-t-10">Proses</button>

                                </div>

                                <?= form_close() ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Daftar Calon Pelaman</h4>
                                <h6 class="card-subtitle">Add class <code>.table</code></h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama</th>
                                                <th>Pengalaman</th>
                                                <th>Pendidikan</th>
                                                <th>Peminatan</th>
                                                <th>Lahir</th>
                                                <th>Status Perkawinan</th>
                                                <th>Bayes</th>
                                                <th>MPE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          $no = 1;
                                          foreach ($hasil as $k): ?>
                                            <tr>
                                              <td><?= $no; ?></td>
                                              <td><?= $k->nik ?></td>
                                              <td><?= $k->pengalaman_id  ?></td>
                                              <?php
                                              switch ($k->pendidikan_id) {
                                                case 1:
                                                  $pend ="SMA";
                                                  break;
                                                case 2:
                                                  $pend ="SMK";
                                                  break;
                                                case 3:
                                                  $pend ="S1";
                                                  break;
                                                case 4:
                                                  $pend ="S2";
                                                  break;
                                                case 5:
                                                  $pend ="S3";
                                                  break;

                                                default:
                                                  $pend = "";
                                                  break;
                                              }
                                              switch ($k->peminatan_id) {
                                                case 1:
                                                  $pem ="A";
                                                  break;
                                                case 2:
                                                  $pem ="B";
                                                  break;
                                                case 3:
                                                  $pem ="C";
                                                  break;
                                                case 4:
                                                  $pem ="D";
                                                  break;
                                                case 5:
                                                  $pem ="E";
                                                  break;

                                                default:
                                                  $pem = "";
                                                  break;
                                              }
                                               ?>
                                              <td><?= $pend ?></td>
                                              <td><?= $pem ?></td>
                                              <td><?= $k->tgl_lahir ?></td>
                                              <td><?= $k->status_perkawinan ?></td>
                                              <td><?= $k->bayes ?></td>
                                              <td><?= $k->mpe ?></td>
                                            </tr>

                                          <?php
                                          $no++;
                                        endforeach; ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>

          </div>
