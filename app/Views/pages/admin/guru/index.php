<?= $this->extend('templates/layout/layout'); ?>

<?= $this->section('content') ?>
  
<script type="text/javascript">
     $(".sidebar-item").removeClass("active");
     $("#guru").addClass("active");
</script>
<hr>
<div class="container">
    <section class="section">
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header">
                        <strong class="card-title">Tabel Data Guru</strong>
                        <a href="/panel/formguru" class="btn  btn-sm bg-primary text-light position-absolute end-0 me-4 top-0 mt-4 rounded-pill d-none d-md-block"><i class="bi bi-plus-circle-fill"></i> Tambah Data</a>
                    </div>
                    <div class="card-content container pb-3">
                        <div class="d-md-none d-block">

                            <?php foreach($dataguru as $guru) : ?>
                            <div class="row" data-bs-toggle="collapse"  id="accordionFlushExample" data-bs-target="#col-<?= $guru['idGuru'] ?>">
                                <div class="col-2 fs-3">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="col-10">
                                    <?= $guru['namaguru'] ?>
                                    <hr>
                                </div>
                            </div>
                            <div id="col-<?= $guru['idGuru'] ?>" class="row accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="col-2"></div>
                                <div class="col-10">
                                    <div class="accordion-body">
                                        <strong for="">NIY</strong>
                                        <div class="mb-2">
                                            <?= $guru['niy'] ?>
                                        </div>
                                        <strong >HP / WA</strong>
                                        <div class="mb-4">
                                            <?= $guru['hp'] ?>
                                        </div>
                                     </div>
                                     <div>
                                        <a href="/panel/editguru/<?= $guru['idGuru'] ?>" class="btn bg-primary btn-sm text-light rounded-circle"><i class="bi bi-pencil-fill"></i></a>

                                        <a href="#hps-<?= $guru['idGuru'] ?>" data-bs-toggle="modal" class="btn bg-warning btn-sm text-light rounded-circle"><i class="bi bi-trash-fill"></i></a>
                                     </div>
                                     <hr>
                                </div>
                            </div>
                            
                            <!-- Modal  Hapus Guru-->
                            <div class="modal fade" id="hps-<?= $guru['idGuru'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                    <div class="modal-body text-center py-3 mb-4">
                                        <div class="text-center text-danger" style="font-size:45pt;"><i class="bi bi-question-circle-fill"></i></div>
                                        <span class="text-center">Apakah Anda Yakin Akan Menghapus Data.?</p>
                                        <h3 class="text-center mg-3"><?= $guru['namaguru'] ?></h3>
                                        <div class="text-center">
                                            <button class="btn btn-primary rounded-pill" data-bs-dismiss="modal">Tidak <i class="bi bi-x-circle-fill"></i></button>
                                            <a href="/panel/hapusguru/<?= $guru['idGuru'] ?>" class="btn btn-outline-primary rounded-pill px-4">Ya  <i class="bi bi-trash2-fill me-n4"></i></a>
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
                                        <th>HP / Whatsapp</th>
                                        <th>PENDIDIKAN</th>
                                        <th>PILIHAN</th>
                                    </tr>
                                </thead>
                                
                                <tbody style="font-size:10pt"> 
                                    <?php foreach($dataguru as $guru): ?>
                                      
                                    <tr>  
                                        <td>
                                            <div class="mx-auto" style="width:50px;height:60px;overflow:hidden">
                                                <img style="width:100%" src="/assets/photoguru/<?= $guru['photo'] ?>" alt="PHoto Guru">
                                            </div>
                                        </td>
                                        <td><?= $guru['namaguru'] ?></td>
                                        <td><?= $guru['alamat'] ?></td>
                                        <td><?= $guru['kelamin'] ?></td>
                                        <td><?= $guru['hp'] ?></td>
                                        <td><?= $guru['pendidikan']." ".$guru['jurusan'] ?></td>
                                        
                                        <td class="">
                                            <a href="/panel/formguru/<?= $guru['idGuru'] ?>">
                                                <i class="bi bi-pencil-fill"></i>
                                            </a>
                                            <a href="#hapus-<?= $guru['idGuru'] ?>" data-bs-toggle="modal">
                                                <i class="bi bi-trash-fill"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Modal  Hapus Guru-->
                                    <div class="modal fade" id="hapus-<?= $guru['idGuru'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                          <div class="modal-body text-center py-3">
                                            <div class="text-center text-danger" style="font-size:45pt;"><i class="bi bi-question-circle-fill"></i></div>
                                            <span class="text-center">Apakah Anda Yakin Akan Menghapus Data.?</p>
                                            <h3 class="text-center mg-3"><?= $guru['namaguru'] ?></h3>
                                            <div class="text-center">
                                                <button class="btn btn-primary rounded-pill" data-bs-dismiss="modal">Tidak <i class="bi bi-x-circle-fill"></i></button>
                                                <a href="/progres/hapusguru/<?= $guru['idGuru'] ?>" class="btn btn-outline-primary rounded-pill px-4">Ya  <i class="bi bi-trash2-fill me-n4"></i></a>
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