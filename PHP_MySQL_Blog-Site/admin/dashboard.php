<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
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
<link rel="stylesheet" href="../assets/css/style.css">

<!-- Admin Styling -->
<link rel="stylesheet" href="../assets/css/admin.css">

    <title>Admin Section - Dashboard</title>

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


    <div class="content">
      <h2 class="page-title">Dashboard</h2>
      <?php include(ROOT_PATH . '/app/includes/messages.php') ?>
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
<script src="../assets/js/scripts.js"></script>


  </body>
</html>
