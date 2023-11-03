<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link href="./style.css" rel="stylesheet" />

  <title>Registrasi | Education</title>
</head>

<body>
  <!-- username -->
  <section id="registrasi  " class="registrasi">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-4">
          <div class="tittle text-center">
            <h1>registrasi</h1>
          </div>

          <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
            <div class="form-group">
              <label for="exampleInputusername1">username</label>
              <input type="username" class="form-control" id="exampleInputusername" name="username" placeholder="Enter username" />

            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="email" />
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">confirm Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" />
            </div>
            <button type="submit " class="btn btn-primary d-md-block ms-auto">Log In</button>
          </form>
        </div>
      </div>
    </div>
    <!-- akhir -->
</body>

</html>

<!-- databases -->
<?php
try {
  include("DATABASES.php");
  if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $pass = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($username)) {
      echo "masukan username!";
    } elseif (empty($email)) {
      echo "masukan email!";
    } elseif (empty($pass)) {
      echo "masukan password!";
    } else {
      $sql = "INSERT INTO regis ( id, user,`email`,pass)
    VALUES ( null,'$username', '$email','$pass')";

      mysqli_query($conn, $sql);
      echo "berhasil";
    }
  }
} catch (mysqli_sql_exception) {
  echo "username telah digunakan!";
}
mysqli_close($conn);
?>
<!-- akhir databases -->