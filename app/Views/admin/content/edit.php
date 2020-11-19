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
  		<div class="card-body">
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
						<div class="card-body">
							<div class="form-group">
								<input type="file" class="form-control">
							</div>
							<div class="form-group">
								<button>upload</button>
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