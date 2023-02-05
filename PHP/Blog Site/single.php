<?php include("path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php');

if (isset($_GET['id'])) {
$post = selectOne('posts', ['id' => $_GET['id']]);
}

$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);
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

<!-- Facebook Page Plugin SDK -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=554569265208834&autoLogAppEvents=1" nonce="Gayh1wS3"></script>

    <title><?php echo $post['title']; ?> | Ironboy Inspires</title>


  <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

  <!-- Page Wrapper !-->
  <div class="page-wrapper">

    <!-- Content !-->
    <div class="content clearfix">

      <!-- Main Content Wrapper!-->
      <div class="main-content-wrapper">
      <div class="main-content single">
        <h1 class="post-title"><?php echo $post['title']; ?></h1>

        <div class="post-content">
          <?php echo html_entity_decode($post['body']); ?>
        </div>
      </div>
      </div>
      <!-- Main Content Wrapper!-->

      <!-- Sidebar !-->
      <div class="sidebar single">
      <div class="fb-page" data-href="https://www.facebook.com/ironboy04/" data-tabs="" data-width="1000" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
        <blockquote cite="https://www.facebook.com/ironboy04/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ironboy04/">Iron Boy</a></blockquote></div>

        <div class="section popular">
          <h2 class="section-title">Popular</h2>

          <?php foreach ($posts as $p): ?>
          <div class="post clearfix">
            <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
            <a href="#" class="title"><h4>
              <?php echo $p['title']; ?></h4></a>
          </div>
          <?php endforeach; ?>
      </div>

        <div class="section topics">
          <h2 class="section-title">Topics</h2>
          <ul>
            <?php foreach ($topics as $topic): ?>
            <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>

      <!-- Sidebar !-->
    </div>
<!-- Content !-->

  </div>
<!-- Page Wrapper !-->

<?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

<!-- Footer !-->

<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Slick Carousel -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Custom Script -->
<script src="assets/js/scripts.js"></script>

  </body>
</html>
