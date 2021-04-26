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
                        <a href="/panel/tambahguru" class="btn  btn-sm bg-primary text-light position-absolute end-0 me-4 top-0 mt-4 rounded-pill d-none d-md-block"><i class="bi bi-plus-circle-fill"></i> Tambah Data</a>
                    </div>
                    <div class="card-content container pb-3">
                        <div class="d-md-none d-block">

                            {% for g in guru %}
                            <div class="row" data-bs-toggle="collapse"  id="accordionFlushExample" data-bs-target="#col-{{g.id}}">
                                <div class="col-2 fs-3">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="col-10">
                                    {{g.namaguru}}
                                    <hr>
                                </div>
                            </div>
                            <div id="col-{{g.id}}" class="row accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="col-2"></div>
                                <div class="col-10">
                                    <div class="accordion-body">
                                        <strong for="">NIP</strong>
                                        <div class="mb-2">
                                            {{g.nipguru}}
                                        </div>
                                        <strong >HP / WA</strong>
                                        <div class="mb-4">
                                            {{g.hpguru}}
                                        </div>
                                     </div>
                                     <div>
                                        <a href="/panel/editguru/{{g.id}}" class="btn bg-primary btn-sm text-light rounded-circle"><i class="bi bi-pencil-fill"></i></a>

                                        <a href="#hps-{{g.id}}" data-bs-toggle="modal" class="btn bg-warning btn-sm text-light rounded-circle"><i class="bi bi-trash-fill"></i></a>
                                     </div>
                                     <hr>
                                </div>
                            </div>
                            
                            <!-- Modal  Hapus Guru-->
                            <div class="modal fade" id="hps-{{g.id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                    <div class="modal-body text-center py-3 mb-4">
                                        <div class="text-center text-danger" style="font-size:45pt;"><i class="bi bi-question-circle-fill"></i></div>
                                        <span class="text-center">Apakah Anda Yakin Akan Menghapus Data.?</p>
                                        <h3 class="text-center mg-3">{{g.namaguru}}</h3>
                                        <div class="text-center">
                                            <button class="btn btn-primary rounded-pill" data-bs-dismiss="modal">Tidak <i class="bi bi-x-circle-fill"></i></button>
                                            <a href="/panel/hapusguru/{{g.id}}" class="btn btn-outline-primary rounded-pill px-4">Ya  <i class="bi bi-trash2-fill me-n4"></i></a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            {% endfor %}
                        </div>
                            
                             <!-- .alert-primary, .alert-secondary, .alert-success, .alert-danger, .alert-warning, .alert-info, .alert-light, .alert-dark -->
                            
                        <!-- Button trigger modal -->
                      
                        <div class="table-responsive d-none d-md-block">
                            <table class="table table-hover table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>NAMA</th>
                                        <th>ALAMAT</th>
                                        <th>JENIS KELAMIN</th>
                                        <th>HP / Whatsapp</th>
                                        <th>PENDIDIKAN</th>
                                        <th>JURUSAN</th>
                                        <th>PILIHAN</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    {% for gr in guru %}
                                      
                                    <tr>  
                                        <td class="text-bold-500">{{gr.namaguru}}</td>
                                        <td>{{gr.alamatguru}}</td>
                                        <td>{{gr.kelaminguru}}</td>
                                        <td>{{gr.hpguru}}</td>
                                        <td>{{gr.jenjang}}</td>
                                        <td>{{gr.jurusan}}</td>
                                        <td class="">
                                            <a href="/panel/editguru/{{gr.id}}">
                                                <i class="bi bi-pencil-fill"></i>
                                            </a>
                                            <a href="#hapus-{{gr.id}}" data-bs-toggle="modal">
                                                <i class="bi bi-trash-fill"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Modal  Hapus Guru-->
                                    <div class="modal fade" id="hapus-{{gr.id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                          <div class="modal-body text-center py-3">
                                            <div class="text-center text-danger" style="font-size:45pt;"><i class="bi bi-question-circle-fill"></i></div>
                                            <span class="text-center">Apakah Anda Yakin Akan Menghapus Data.?</p>
                                            <h3 class="text-center mg-3">{{gr.namaguru}}</h3>
                                            <div class="text-center">
                                                <button class="btn btn-primary rounded-pill" data-bs-dismiss="modal">Tidak <i class="bi bi-x-circle-fill"></i></button>
                                                <a href="/panel/hapusguru/{{gr.id}}" class="btn btn-outline-primary rounded-pill px-4">Ya  <i class="bi bi-trash2-fill me-n4"></i></a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    {% endfor %}
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
        <a href="/panel/tambahguru" class="text-light fs-1 position-absolute top-50 start-50 translate-middle">
            <i class="bi bi-plus-circle-dotted"></i>
        </a>
    </div>
</div>

    <!-- Modal -->
    <div class="modal fade" id="saved" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body py-4">
                    <div class="text-center text-success" style="font-size:50pt;"><i class="bi bi-emoji-heart-eyes"></i></div>
                    <p class="text-center">Data Berhasil Disimpan.!</p>
                </div>
            </div>
        </div>
    </div>

    {% if messages %}
        {% for message in messages %}
            <script type="text/javascript">
            //modal auto load
                $(window).on('load', function() {
                $('#saved').modal('show');
                });
            </script>
        {% endfor %}
    {% endif %}

    <script>
        setTimeout(function() {
            $("#saved").modal('hide')
        }, 2000);

    </script>
<?= $this->endSection(); ?>