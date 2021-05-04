<?= $this->extend('templates/layout/layout'); ?>

<?= $this->section('content') ?>
  
<script type="text/javascript">
     $(".sidebar-item").removeClass("active");
     $("#siswa").addClass("active");
</script>
<hr>
<form method="post" action="/controlsiswa/simpan/<?= $edit>0 ? $siswa['idSiswa'] : '' ;?>" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-4">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h4>Photo Siswa</h4>
                    </div>
                    <div class="card-body"> 
                        <div class="logo-box mx-auto">
                            <label for="logo" class="form-label logoLabel d-none"></label>
                            <div class="fileUpload rounded-circle">
                                <input class="upload" style="height:100%" type="file" onchange="preview()" id="logo" name="photo">
                                <img src="/assets/photosiswa/<?= $edit>0 ? $siswa['photo'] : 'siswa.png' ;?>" class="img-thumbnail img-preview img-fluid" style="width:100%;min-height:100%" alt="Logo">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-xl-8">
                <div class="card shadow-sm">
                    <div class="card-header">

                        <span class="fs-5 ps-4"><strong>Detail Siswa</strong></span>

                    </div>
                    <div class="card-body p-0 p-md-3">
                        <div class="container">
                            <div class="form-group">
                                <label for="">Nama Siswa </label>
                                <input value="<?= $edit>0 ? $siswa['namasiswa'] : old('namasiswa') ;?>" type="text" class="form-control rounded-pill" name="namasiswa">
                            </div>
                            <div class="form-group">
                                <label for="">Nomor Induk Siswa</label>
                                <input type="text" value="<?= $edit>0 ? $siswa['nis'] : old('nis') ;?>"  class="form-control rounded-pill" name="nis">
                            </div>
                            <div class="form-group">
                                <label for="">Kelas</label>
                                <select name="kelas" class="form-select form-control rounded-pill" id="">
                                    <?php if($edit == 1): ?>
                                        <option value="<?= $siswa['kelas'] ?>"><?= $siswa['kelas'] ?></option>
                                    <?php else: ?>
                                        <option value="Laki laki">--Pilih Kelas</option>
                                    <?php endif; ?>
                                    <option value="1">1. VII</option>
                                    <option value="2">2. VIII</option>
                                    <option value="3">3. IX</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <select name="kelamin" class="form-control rounded-pill" id="">
                                    <?php if($edit == 1): ?>
                                        <option value="<?= $siswa['kelamin'] ?>"><?= $siswa['kelamin'] ?></option>
                                    <?php else: ?>
                                        <option value="Laki laki">--Pilih Jenis Kelmin</option>
                                    <?php endif; ?>
                                    <option value="Laki laki">1. Laki laki</option>
                                    <option value="Perempuan">2. Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" value="<?= $edit>0 ? $siswa['alamat'] : old('alamat') ;?>" class="form-control rounded-pill" name="alamat">
                            </div>
                            <div class="form-group">
                                <label for="">Tempat Lahir</label>
                                <input type="text" value="<?= $edit>0 ? $siswa['tmptlahir'] : old('tmptlahir') ;?>" class="form-control rounded-pill" name="tmptlahir">
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="text"value="<?= $edit>0 ? $siswa['tgllahir'] : old('tgllahir') ;?>" class="form-control rounded-pill" name="tgllahir" id="date">
                            </div>
                            <div class="form-group">
                                <label for="">Seklah Asal</label>
                                <input value="<?= $edit>0 ? $siswa['sekolahasal'] : old('sekolahasal') ;?>" type="text" class="form-control rounded-pill" name="sekolahasal">
                            </div>
                            <hr>
                            <div class="row text-center  my-3">
                                <button type="submit" class="btn btn-success rounded-pill py-2">  Simpan</button>

                                <a class="mt-3" href="/siswa">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?= $this->endSection(); ?>