<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
guestsOnly();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">

<!-- Custom Styling -->
<link rel="stylesheet" href="assets/css/style.css">
    <title>Register</title>
  </head>

<body>
<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

  <!-- Page Wrapper !-->
<div class="auth-content">

  <form class="" action="register.php" method="post">
    <h2 class="form-title">Register</h2>
    <br/>
      <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

    <div>
      <label>Username or Fullname</label>
      <input type="text" name="username" class="text-input" value="<?php echo $username; ?>">
    </div>
    <div>
      <label>Email</label>
      <input type="email" name="email" class="text-input "value="<?php echo $email; ?>">
    </div>
    <div>
      <label>Password</label>
      <input type="password" name="password" class="text-input "value="<?php echo $password; ?>">
    </div>
    <div>
      <label>Password Confirmation</label>
      <input type="password" name="passwordConf" class="text-input "value="<?php echo $passwordConf; ?>">
    </div>
    <div>
      <button type="submit" name="register-btn" class="btn btn-big">Register</button>
    </div>
    <p>Already registered? <a href="<?php echo BASE_URL . '/login.php' ?>">Sign In</a></p>
  </form>

</div>

<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Custom Script -->
<script src="assets/js/scripts.js"></script>


  </body>
</html>
