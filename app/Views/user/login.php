<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Login - </title>
  <link href="/template/css/styles.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
  <?= csrf_meta() ?>
</head>
<body class="bg-secondary">
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-sm-12 col-lg-3 mt-5">
          <div class="card">
            <div class="card-body">
              <form action="" method="post">
                <?= csrf_field() ?>
                <div class="form-group text-center">
                  <img src="icon.png" width="100" alt="">
                </div>
                <div class="form-group">
                  <?php 
                  $valid = '';
                  $msg = '';
                  if(!empty($validation->hasError('username')) || !empty(session()->getFlashData('username_error')))
                  {
                    $valid = 'is-invalid';
                    $msg = !empty($validation->hasError('username')) ? $validation->showError('username') : session()->getFlashData('username_error')['msg'];
                  }
                  ?>
                  <label for=""><i class="fa fa-user"></i> username</label>
                  <input type="text" name="username" placeholder="username" class="form-control <?= $valid ?>" value="<?= old('username') ?>" >
                  <div class="invalid-feedback">
                    <?= $msg ?>
                  </div>
                </div>
                <div class="form-group">
                  <?php 
                  $valid = '';
                  $msg = '';
                  if(!empty($validation->hasError('password')) || !empty(session()->getFlashData('password_error')))
                  {
                    $valid = 'is-invalid';
                    $msg = !empty($validation->hasError('password')) ? $validation->showError('password') : session()->getFlashData('password_error')['msg'];
                  }
                  ?>
                  <label for=""><i class="fa fa-key"></i> password</label>
                  <input type="password" name="password" placeholder="password" class="form-control <?= $valid ?>" value="<?= old('password') ?>" >
                  <div class="invalid-feedback">
                    <?= $msg ?>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-secondary" type="submit">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>