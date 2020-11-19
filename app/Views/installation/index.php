<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Installation - </title>
  <link href="/template/css/styles.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
  <?= csrf_meta() ?>
</head>
<body class="bg-secondary">
  <main>
    <div class="container-fluid">
      <div class="row">
      	<div class="col-md-4"></div>
        <div class="col-md-4 mt-5">
          <div class="card" style="">
            <form action="" method="post">
            	<?= csrf_field() ?>
	            <div class="card-body">
	              <div class="form-group text-center">
	                <h5>INSTALLATION</h5>
	              </div>
	              <div class="form-group">
	                <label for=""><i class="fa fa-globe"></i> site title</label>
	                <input type="text" name="site title" placeholder="site title" class="form-control" required>
	              </div>
	              <div class="form-group">
	                <label for=""><i class="fa fa-user"></i> username</label>
	                <input type="text" name="username" placeholder="admin username" class="form-control" required>
	              </div>
	              <div class="form-group">
	                <label for=""><i class="fa fa-envelope"></i> email</label>
	                <input type="text" name="email" placeholder="admin email" class="form-control" required>
	              </div>
	              <div class="form-group">
	                <label for=""><i class="fa fa-key"></i> password</label>
	                <input type="password" name="password" placeholder="admin password" class="form-control" required>
	              </div>
	              <div class="form-group">
	              	<label for=""><i class="fa fa-columns"></i> templates</label>
	              	<select name="template" id="" class="form-control">
	              		<?php foreach ($templates as $value): ?>
	              			<option value="<?= $value ?>"><?= $value ?></option>
	              		<?php endforeach ?>
	              	</select>
	              </div>
	              <div class="form-group">
	                <button class="btn btn-secondary" type="submit">Install</button>
	              </div>
	            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>