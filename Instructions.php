<!DOCTYPE html>
<html>
  <head>
    <?php include'./include/head.php';
    $pageTitle = 'Instructions';
    ?>
    <title><?= $pageTitle . " - mov51"?></title>
  </head>
  <body>
    <!-- <div class="container-fluid">
    <?php include './include/layout/banner.php' ?>
    </div> -->
    <?php include './include/layout/navbar.php' ?>
    <div class="container-fluid">
      <div class="row justify-content-center mt-3">
        <div class="order-2 order-lg-1 col-lg-3 my-lg-3 col-10 mb-3 ">
          <div class="left container-fluid box default">
            <div class="row justify-content-center">
              <?php include './include/layout/leftSidebar/left.php';
              include './include/layout/leftSidebar/videos/videos.php';?>
            </div>
          </div>
        </div>
        <div class="order-1 order-lg-2 col-lg-6 mb-lg-0 col-10">
          <div class="center box default mb-3">
            <p class="intro">
            This is a place where I collect small tutorials on things I often find myself repeating. I will add more things to this page as time goes on and I'll remove them as they become redundant.
            </p>
          </div>
          <?php include './include/layout/Instructions/Twitch.php';?>
          <?php include './include/layout/Instructions/multiMC.php';?>
        </div>
        <?php include './include/layout/rightSidebar/instruct.php';?>
      </div>
    </div>
  </body>
</html>
