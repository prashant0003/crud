<?php 

include 'con.php';
if(isset($_POST['ok'])){
  $id=$_GET['id'];
  $user_name=$_POST['name'];
  $password=$_POST['pass'];

  $q="UPDATE `crudtable` SET `id`='$id',`user_name`='$user_name',`password`='$password' WHERE id=$id";
  $query=mysqli_query($con,$q);
  header('location:display.php');

}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <div class="container">
      <div class="col-lg-6 m-auto">
      	<h1>Update Operation</h1>
            <form method="post">
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" name="name" class="form-control" id="inputname3">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" name="pass" class="form-control" id="inputPassword3">
                </div>
              </div>
              <br>
              <button type="submit" name="ok" class="btn btn-primary form-control">Sign in</button>
            </form>

      </div>
    </div>
    
  </body>
</html>