<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
adminOnly();
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
<link rel="stylesheet" href="../../assets/css/style.css">

<!-- Admin Styling -->
<link rel="stylesheet" href="../../assets/css/admin.css">

    <title>Admin Section - Edit Users</title>

</head>
<body>

  <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

  <!-- Admin Page Wrapper !-->
  <div class="admin-wrapper">

    <!-- Left Sidebar !-->
    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
    <!-- Left Sidebar !-->

  <!-- Admin Content !-->
  <div class="admin-content">
      <div class="button-group">
        <a href="create.php" class="btn btn-big">Add User</a>
        <a href="index.php" class="btn btn-big">Manage Users</a>
      </div>

      <div class="content">

        <h2 class="page-title">Edit User</h2>

        <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>

            <form action="edit.php" method="post">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <div>
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>" class="text-input "value="">
              </div>
              <div>
                <label>Email</label>
                <input type="email" name="email" class="text-input" value="<?php echo $email; ?>">
              </div>
              <div>
                <label>Password</label>
                <input type="password" name="password" class="text-input" value="<?php echo $password; ?>">
              </div>
              <div>
                <label>Password Confirmation</label>
                <input type="password" name="passwordConf" class="text-input" value="<?php echo $passwordConf; ?>">
              </div>

              <div>
                <?php if (isset($admin) && $admin == 1): ?>
                <label>
                    <input type="checkbox" name="admin" checked>
                    Admin
                </label>
                <?php else: ?>
                  <label>
                    <input type="checkbox" name="admin" value="">
                    Admin
                  </label>
                <?php endif; ?>
            <div>
              <button type="submit" name="update-user" class="btn btn-big">Update User</button>
            </div>
          </form>
      </div>
    </div>
  <!-- Admin Content !-->

  </div>
  <!-- Admin Page Wrapper !-->



<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- CKeditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>

<!-- Custom Script -->
<script src="../../assets/js/scripts.js"></script>


  </body>
</html>
