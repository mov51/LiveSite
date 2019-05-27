
<head>
  <?php include'./include/head.php';
  $pageTitle = 'Instructions';
  ?>
  <title><?= $pageTitle . " - mov51"?></title>
</head>
<html>
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
            <div id="TwitchLancher" class="center box default mb-3">
              <a href="#Contact"><h3>how to install a minecraft modpack on the twitch launcher</h3></a>
              <div class="row ">
                <div class="col-lg-6 col-12 box dark override">
                  <p>
                    This article explains how to install a modpack for the java edition of minecraft with the twitch launcher. <br /><br />
                    It requires the you have accses to the internet, a purchaced minecraft java edition account, a modpack you want to install, and a computer to install it on. The specifiactions requrired for the computer will vary depending on the pack you want to play, its best to ask for minmum specs in forums for the pack.
                  </p>
                </div>
                <div class="col-lg-6 col-12">
                  <div class="mx-auto py-2" style="width: 100%;">
                    <img style="width: 100%;" src="https://i.imgur.com/6xaSwKg.png"/>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <?php include './include/layout/rightSidebar/instruct.php';?>
      </div>
    </div>
  </body>
</html>
