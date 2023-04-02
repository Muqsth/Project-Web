<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.css" />

</head>
<body class="m-5">
  <div class="text-center p-5">
  <img src="galeri/prof login.png" alt="image" height="150" width="150">
</div>
            <form action="checklogin.php" method="post" role="form" style="width:300px;" class="position-absolute top-50 start-50 translate-middle" >
              <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username" autocomplete="off">
              </div>

              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
</body>
</html>
