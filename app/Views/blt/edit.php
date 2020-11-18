<?php
$this->extend('layout/dashboard');

$this->section('content');
$session = session();
?>
<main>
  <div class="container-fluid">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item">Dashboard</li>
      <li class="breadcrumb-item active"><?php echo !empty($data) ? 'Edit' : 'Tambah'; ?> Peserta</li>
    </ol>
    <div class="card">
      <?php
      helper('system');
      if (!empty($session->getFlashData('message'))) {
        $message = $session->getFlashData('message');
        alert($message['msg'], $message['alert']);
      }
      ?>

      <form action="/blt<?php echo !empty($data) ? '/' . $data['id'] : ''; ?>" method="post" enctype="multipart/form-data">
        <?php
        if (!empty($data)) {
        ?>
          <input type="hidden" name="_method" value="POST">
        <?php
        }
        ?>
        <?= csrf_field() ?>
        <div class="card-header">
          <?php echo !empty($data) ? 'Edit' : 'Tambah'; ?> Peserta
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Nama</label>
                <?php
                if (!empty($validation->showError('nama'))) {
                  $valid = 'is-invalid';
                  $value = old('nama');
                } else {
                  $valid = '';
                  $value = !empty($data['nama']) ? $data['nama'] : old('nama');
                }
                echo form_input(['name' => 'nama', 'placeholder' => 'nama', 'class' => 'form-control ' . $valid, 'value' => $value]); ?>
                <div class="invalid-feedback">
                  <?php echo $validation->showError('nama'); ?>
                </div>
              </div>
              <div class="form-group">
                <label>Nik</label>
                <?php
                if (!empty($validation->showError('nik'))) {
                  $valid = 'is-invalid';
                  $value = old('nik');
                } else {
                  $valid = '';
                  $value = !empty($data['nik']) ? $data['nik'] : old('nik');
                }
                echo form_input(['type' => 'number', 'name' => 'nik', 'placeholder' => 'nik', 'class' => 'form-control ' . $valid, 'value' => $value]); ?>
                <div class="invalid-feedback">
                  <?php echo $validation->showError('nik'); ?>
                </div>
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <?php
                if (!empty($validation->showError('alamat'))) {
                  $valid = 'is-invalid';
                  $value = old('alamat');
                } else {
                  $valid = '';
                  $value = !empty($data['alamat']) ? $data['alamat'] : old('alamat');
                }
                echo form_textarea(['name' => 'alamat', 'placeholder' => 'alamat', 'class' => 'form-control ' . $valid, 'value' => $value]); ?>
                <div class="invalid-feedback">
                  <?php echo $validation->showError('alamat'); ?>
                </div>
              </div>
              <div class="form-group">
                <label>Pekerjaan</label>
                <?php
                if (!empty($validation->showError('pekerjaan'))) {
                  $valid = 'is-invalid';
                  $value = old('pekerjaan');
                } else {
                  $valid = '';
                  $value = !empty($data['pekerjaan']) ? $data['pekerjaan'] : old('pekerjaan');
                }
                echo form_input(['name' => 'pekerjaan', 'placeholder' => 'pekerjaan', 'class' => 'form-control ' . $valid, 'value' => $value]); ?>
                <div class="invalid-feedback">
                  <?php echo $validation->showError('pekerjaan'); ?>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Foto Diri</label>
                    <?php $valid = !empty($validation->showError('foto_diri')) ? 'is-invalid' : ''; ?>
                    <?php $value = !empty($data['foto_diri']) ? '/images/blt/' . $data['foto_diri'] : old('foto_diri'); ?>
                    <div class="custom-file" style="height: 200px;">
                      <?php
                      echo form_upload(['name' => 'foto_diri', 'id' => 'foto_diri', 'placeholder' => 'foto_diri', 'class' => 'custom-file-input ' . $valid, 'value' => $value, 'accept' => '.jpg,.jpeg,.png,.gif']);
                      ?>
                      <label class="custom-file-label" for="foto_diri">Ambil Gambar ...</label>
                      <div class="invalid-feedback">
                        <?php echo $validation->showError('foto_diri'); ?>
                      </div>
                      <?php
                      $gambar = !empty($data['foto_diri']) ? '/images/blt/' . $data['foto_diri'] : 'https://www.freeiconspng.com/uploads/no-image-icon-11.PNG';
                      ?>
                      <img src="<?php echo $gambar; ?>" class="img image_place img-fluid" width="200" alt="Icon No Free Png" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Foto KTP</label>
                    <?php $valid = !empty($validation->showError('foto_ktp')) ? 'is-invalid' : ''; ?>
                    <?php $value = !empty($data['foto_ktp']) ? '/images/blt/' . $data['foto_ktp'] : old('foto_ktp'); ?>
                    <div class="custom-file" style="height: 200px;">
                      <?php
                      echo form_upload(['name' => 'foto_ktp', 'id' => 'foto_ktp', 'placeholder' => 'foto_ktp', 'class' => 'custom-file-input ' . $valid, 'value' => $value, 'accept' => '.jpg,.jpeg,.png,.gif']);
                      ?>
                      <label class="custom-file-label" for="foto_ktp">Ambil Gambar ...</label>
                      <div class="invalid-feedback">
                        <?php echo $validation->showError('foto_ktp'); ?>
                      </div>
                      <?php
                      $gambar = !empty($data['foto_ktp']) ? '/images/blt/' . $data['foto_ktp'] : 'https://www.freeiconspng.com/uploads/no-image-icon-11.PNG';
                      ?>
                      <img src="<?php echo $gambar; ?>" class="img image_place img-fluid" width="200" alt="Icon No Free Png" />
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Foto KK</label>
                    <?php $valid = !empty($validation->showError('foto_kk')) ? 'is-invalid' : ''; ?>
                    <?php $value = !empty($data['foto_kk']) ? '/images/blt/' . $data['foto_kk'] : old('foto_kk'); ?>
                    <div class="custom-file" style="height: 200px;">
                      <?php
                      echo form_upload(['name' => 'foto_kk', 'id' => 'foto_kk', 'placeholder' => 'foto_kk', 'class' => 'custom-file-input ' . $valid, 'value' => $value, 'accept' => '.jpg,.jpeg,.png,.gif']);
                      ?>
                      <label class="custom-file-label" for="foto_kk">Ambil Gambar ...</label>
                      <div class="invalid-feedback">
                        <?php echo $validation->showError('foto_kk'); ?>
                      </div>
                      <?php
                      $gambar = !empty($data['foto_kk']) ? '/images/blt/' . $data['foto_kk'] : 'https://www.freeiconspng.com/uploads/no-image-icon-11.PNG';
                      ?>
                      <img src="<?php echo $gambar; ?>" class="img image_place img-fluid" width="200" alt="Icon No Free Png" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Foto Rumah</label>
                    <?php $valid = !empty($validation->showError('foto_rumah')) ? 'is-invalid' : ''; ?>
                    <?php $value = !empty($data['foto_rumah']) ? '/images/blt/' . $data['foto_rumah'] : old('foto_rumah'); ?>
                    <div class="custom-file" style="height: 200px;">
                      <?php
                      echo form_upload(['name' => 'foto_rumah', 'id' => 'foto_rumah', 'placeholder' => 'foto_rumah', 'class' => 'custom-file-input ' . $valid, 'value' => $value, 'accept' => '.jpg,.jpeg,.png,.gif']);
                      ?>
                      <label class="custom-file-label" for="foto_rumah">Ambil Gambar ...</label>
                      <div class="invalid-feedback">
                        <?php echo $validation->showError('foto_rumah'); ?>
                      </div>
                      <?php
                      $gambar = !empty($data['foto_rumah']) ? '/images/blt/' . $data['foto_rumah'] : 'https://www.freeiconspng.com/uploads/no-image-icon-11.PNG';
                      ?>
                      <img src="<?php echo $gambar; ?>" class="img image_place img-fluid" width="200" alt="Icon No Free Png" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <button class="btn btn-sm btn-success" type="submit"><i class="fa fa-save"></i> Simpan</button>
          <button class="btn btn-sm btn-warning" type="reset"><i class="fa fa-redo"></i> Reset</button>
        </div>
      </form>
    </div>
  </div>
</main>
<?php
$this->endSection();

$this->section('js');
?>
<script src="/assets/js/script.js"></script>
<?php
$this->endSection();
