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
					<div class="form-group">
						<div class="dropdown">
						  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  	<i class="fa fa-upload"></i> Add Image
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#uploadImage"><i class="fa fa-image"></i> Upload Image</a>
						    <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#imageLink"><i class="fa fa-link"></i> Link Image</a>
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
<?php
$this->endSection();
