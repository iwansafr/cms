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
        <div class="col-md-4 mt-5">
          <div class="card" style="">
            <!-- <div class="card-header">
              login form
            </div> -->
            <div class="card-body">
              <div class="form-group text-center">
                <img src="https://www.freepnglogos.com/uploads/fox-head-art-logo-png-13.png" width="100" alt="">
              </div>
              <div class="form-group">
                <label for=""><i class="fa fa-user"></i> username</label>
                <input type="text" name="username" placeholder="username" class="form-control">
              </div>
              <div class="form-group">
                <label for=""><i class="fa fa-key"></i> password</label>
                <input type="password" name="password" placeholder="password" class="form-control">
              </div>
              <div class="form-group">
                <button class="btn btn-secondary" type="submit">Login</button>
              </div>
            </div>
            <!-- <div class="card-footer">
              
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>