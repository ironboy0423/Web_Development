<?php include("../../path.php"); ?>
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
<link rel="stylesheet" href="../../assets/css/style.css">

<!-- Admin Styling -->
<link rel="stylesheet" href="../../assets/css/admin.css">

<title>Admin Section - Manage Post</title>
</head>
<body>

    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <!-- Admin Page Wrapper !-->
    <div class="admin-wrapper">

      <!-- Left Sidebar !-->
      <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

  <!-- Admin Page Wrapper !-->

  <!-- Admin Content !-->
  <div class="admin-content">
  <div class="button-group">
    <a href="create.php" class="btn btn-big">Add Post</a>
    <a href="index.php" class="btn btn-big">Manage Posts</a>
  </div>

  <div class="content">

    <h2 class="page-title">Manage Posts</h2>

      <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
      <table>
        <thead>
          <th>SN</th>
          <th>Title</th>
          <th>Author</th>
          <th colspan="3">Action</th>
        </thead>
        <tbody>
          <?php $sql = 'SELECT p.*, u.username FROM posts AS p
            JOIN users AS u ON p.user_id=u.id';
            $result = mysqli_query($conn, $sql);
            $i = 1;
            while($post = mysqli_fetch_array($result))
            {
            ?>
            <tr>
              <td><?php echo $post['id'] ?></td>
              <td><?php echo $post['title'] ?></td>
              <td><?php echo $post['username'] ?></td>            
              <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">Edit</a></td>
              <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete">Delete</a></td>

              <?php if ($post['published']): ?>
                <td><a href="edit.php?published=0&p_id=<?php echo $post['id'] ?>" class="unpublish">Unpublish</a></td>
              <?php else: ?>
                <td><a href="edit.php?published=1&p_id=<?php echo $post['id'] ?>" class="publish">Publish</a></td>
              <?php endif; ?>
          </tr>
          <?php $i++;
            }?> 
        </tbody>
      </table>

  </div>

</div>
  <!-- Admin Content !-->

  </div>
  <!-- Admin Page Wrapper !-->



<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Custom Script -->
<script src="../../assets/js/scripts.js"></script>


  </body>
</html>
