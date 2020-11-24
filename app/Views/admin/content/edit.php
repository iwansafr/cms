<?php
$this->extend('layout/dashboard');

$this->section('content');
?>
<main>
  <div class="container-fluid">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item">Dashboard</li>
      <li class="breadcrumb-item">Content</li>
      <li class="breadcrumb-item active">Create</li>
    </ol>
		<form action="" method="post">
			<?= csrf_field() ?>
			<div class="row">
				<div class="col-md-9">
					<div class="card-body">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="title">
						</div>
						<div class="form-group">
							<textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
						</div>
					</div>
				</div>
				<div class="col-md-3">
						<label>Featured Image</label>
            <?php $valid = !empty($validation->showError('foto_diri')) ? 'is-invalid' : ''; ?>
            <?php $value = !empty($data['foto_diri']) ? '/images/blt/' . $data['foto_diri'] : old('foto_diri'); ?>
            <div class="input-group">
						  <input type="text" id="input_image" name="image" class="form-control" aria-label="Text input with dropdown button">
						  <div class="input-group-append">
						    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="image_type">Image</button>
						    <div class="dropdown-menu">
						      <a class="dropdown-item image_type" data-type="file" href="#">Upload Image</a>
						      <a class="dropdown-item image_type" data-type="link" href="#">Link Image</a>
						    </div>
						  </div>
						</div>
				</div>
			</div>
		</form>
  </div>
</main>
<?php
$this->endSection();
$this->section('js');
?>
<script src="/assets/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="/assets/js/validate.js"></script>
<script src="/assets/js/image_upload.js"></script>
<script>
	$(document).ready(function(){
		$('.image_type').on('click',function(){
			var label = $(this).data('type');
			$('#image_type').html(label);
			$('#input_image').attr('type',label);
			if(label=='link'){
				$('#input_image').attr('placeholder','please insert link image');
			}
		});
	});
</script>
<?php
$this->endSection();
