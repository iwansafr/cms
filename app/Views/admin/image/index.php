<?php
$this->extend('layout/dashboard');

$this->section('content');
?>
<main>
  <div class="container-fluid">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item">Dashboard</li>
      <li class="breadcrumb-item active">Image</li>
    </ol>
    <div class="card-body">
			<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#uploadImage">
			  <i class="fa fa-upload"></i> Add Image
			</button>
			<div class="modal fade" id="uploadImage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-body">
			      	<form action="/admin/image/" method="post" id="imageForm" entype="multipart/form-data">
			      		<?= csrf_field() ?>
				      	<div class="form-group">
				      		<label for="title">title</label>
				      		<input type="text" id="title" class="form-control" name="title">
				      	</div>
				        <div class="form-group">
				        	<label for="image">image</label>
				        	<input type="file" class="form-control" id="image" name="image" accept=".jpg,.jpeg,.png,.ico">
				        	<img src="" class="img image_place img-fluid" width="200" >
				        </div>
				        <button type="submit" class="btn btn-success" id="upload"><i class="fa fa-upload"></i></button>
			      	</form>
			      </div>
			    </div>
			  </div>
			</div>
			<hr>
			<div id="image_box" class="row">
				
			</div>
    </div>
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
<?php
$this->endSection();
