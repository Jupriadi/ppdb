<?= $this->extend('templates/layout/layout'); ?>

<?= $this->section('content') ?>
  
<script type="text/javascript">
     $(".sidebar-item").removeClass("active");
     $("#siswa").addClass("active");
</script>
<hr>
<div class="container">
    <section class="section">
        <div class="row" id="table-striped">
            <div class="col-12 p-0">
                <div class="card shadow">
                    <div class="card-header bg-primary text-light">
                        <strong class="card-title"><i class="bi bi-people"></i> Tabel Data Siswa</strong>
                        <a href="/panel/formsiswa" class="btn  btn-sm bg-light text-primary position-absolute end-0 me-4 top-0 mt-4 rounded-pill d-none d-md-block"><i class="bi bi-plus-circle-fill"></i> Tambah Data</a>
                    </div>
                    <div class="row container mt-3">
                        <div class="col-8 col-7 px-2 px-md-2 col-md-5 mb-3">
                            <div class="input-group mb-2 position-relative">
                                <input type="text" class="form-control rounded-pill" placeholder="Cari">
                                <!-- <span class="position-absolute top-50 start-0"><i class="bi bi-search"></i></span> -->
                            </div>
                        </div>
                        <div class="col-4 p-0 col-md-3 col-md-2">
                            <select name="kelas" class="form-select form-control" id="">
                                <option value="">Kelas</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <hr>
                    </div>
                    <div class="card-content container pb-3">
                        <div class="d-md-none d-block">

                            <?php foreach($datasiswa as $siswa) : ?>
                            <div class="row" data-bs-toggle="collapse"  id="accordionFlushExample" data-bs-target="#col-<?= $siswa['idSiswa'] ?>">
                                <div class="col-2 fs-3">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="col-10">
                                    <?= $siswa['namasiswa'] ?>
                                    <hr>
                                </div>
                            </div>
                            <div id="col-<?= $siswa['idSiswa'] ?>" class="row accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="col-2"></div>
                                <div class="col-10">
                                    <div class="accordion-body">
                                        <strong for="">NIY</strong>
                                        <div class="mb-2">
                                            <?= $siswa['nis'] ?>
                                        </div>
                                     </div>
                                     <div>
                                        <a href="/panel/formsiswa/<?= $siswa['idSiswa'] ?>" class="btn bg-primary btn-sm text-light rounded-circle"><i class="bi bi-pencil-fill"></i></a>

                                        <a href="#hps-<?= $siswa['idSiswa'] ?>" data-bs-toggle="modal" class="btn bg-warning btn-sm text-light rounded-circle"><i class="bi bi-trash-fill"></i></a>
                                     </div>
                                     <hr>
                                </div>
                            </div>
                            
                            <!-- Modal  Hapus Guru-->
                            <div class="modal fade" id="hps-<?= $siswa['idSiswa'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                    <div class="modal-body text-center py-3 mb-4">
                                        <div class="text-center text-danger" style="font-size:45pt;"><i class="bi bi-question-circle-fill"></i></div>
                                        <span class="text-center">Apakah Anda Yakin Akan Menghapus Data.?</p>
                                        <h3 class="text-center mg-3"><?= $siswa['idSiswa'] ?></h3>
                                        <div class="text-center">
                                            <button class="btn btn-primary rounded-pill" data-bs-dismiss="modal">Tidak <i class="bi bi-x-circle-fill"></i></button>
                                            <a href="/progres/hapussiswa/<?= $siswa['idSiswa'] ?>" class="btn btn-outline-primary rounded-pill px-4">Ya  <i class="bi bi-trash2-fill me-n4"></i></a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                            
                             <!-- .alert-primary, .alert-secondary, .alert-success, .alert-danger, .alert-warning, .alert-info, .alert-light, .alert-dark -->
                            
                        <!-- Button trigger modal -->
                      
                        <div class="table-responsive d-none d-md-block">
                            <table class="table table-hover table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>PHOTO</th>
                                        <th>NAMA</th>
                                        <th>ALAMAT</th>
                                        <th>JENIS KELAMIN</th>
                                        <th>PILIHAN</th>
                                    </tr>
                                </thead>
                                
                                <tbody style="font-size:10pt"> 
                                    <?php foreach($datasiswa as $siswa): ?>
                                      
                                    <tr>  
                                        <td>
                                            <div class="mx-auto" style="width:50px;height:60px;overflow:hidden">
                                                <img style="width:100%" src="/assets/photosiswa/<?= $siswa['photo'] ?>" alt="PHoto siswa">
                                            </div>
                                        </td>
                                        <td><?= $siswa['namasiswa'] ?></td>
                                        <td><?= $siswa['alamat'] ?></td>
                                        <td><?= $siswa['kelamin'] ?></td>
                                        
                                        <td class="">
                                            <a href="/panel/formsiswa/<?= $siswa['idSiswa'] ?>">
                                                <i class="bi bi-pencil-fill"></i>
                                            </a>
                                            <a href="#hapus-<?= $siswa['idSiswa'] ?>" data-bs-toggle="modal">
                                                <i class="bi bi-trash-fill"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Modal  Hapus Guru-->
                                    <div class="modal fade" id="hapus-<?= $siswa['idSiswa'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                          <div class="modal-body text-center py-3">
                                            <div class="text-center text-danger" style="font-size:45pt;"><i class="bi bi-question-circle-fill"></i></div>
                                            <span class="text-center">Apakah Anda Yakin Akan Menghapus Data.?</p>
                                            <h3 class="text-center mg-3"><?= $siswa['namasiswa'] ?></h3>
                                            <div class="text-center">
                                                <button class="btn btn-primary rounded-pill" data-bs-dismiss="modal">Tidak <i class="bi bi-x-circle-fill"></i></button>
                                                <a href="/progres/hapussiswa/<?= $siswa['idSiswa'] ?>" class="btn btn-outline-primary rounded-pill px-4">Ya  <i class="bi bi-trash2-fill me-n4"></i></a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Striped rows end -->
</div>

<div class="postion-absolute shadow d-md-none position-fixed me-4 mb-4 bg-success rounded-circle end-0 bottom-0"  style="width: 50px;height: 50px;">
    <div class="positon-relative">
        <a href="/panel/formguru" class="text-light fs-1 position-absolute top-50 start-50 translate-middle">
            <i class="bi bi-plus-circle-dotted"></i>
        </a>
    </div>
</div>


<?= $this->endSection(); ?>