<head>
  <?php include'./include/head.php';
  $pageTitle = 'home';
  ?>
  <title><?= $pageTitle ?></title>
</head>
<html>
  <body>
      <!-- <div class="container-fluid">
        <?php include './include/banner.php' ?>
      </div> -->
        <?php include './include/navbar.php' ?>
      <div class="container-fluid">
        <div class="row justify-content-center mt-3">
        <div class="order-2 order-lg-1 col-lg-3 my-lg-3 col-10 mb-3 ">
          <div class="left container-fluid box default">
            <div class="row justify-content-center">
              <?php include './include/layout/left.php';
              include './include/videos.php';?>
            </div>
          </div>
        </div>
        <div class="order-1 order-lg-2 col-lg-6 mb-lg-0 col-10">
            <div class="center box default mb-3">
              <p class="intro">
                Welcome to my website! This is a place where I store information about the various projects I'm working on. The main ones at the moment are my game server (sprout) and a story my brother and I are working on (the mandates). <br />
                 <br />
                 Links to the information on my current and up coming projects can be found above, along with some information about myself and what I do.
              </p>
            </div>
        </div>
        <?php include './include/layout/right.php';?>
      </div>
    </div>
  </body>
</html>
