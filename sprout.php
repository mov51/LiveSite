<head>
  <?php include'./include/head.php';
  $pageTitle = 'sprout server';
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
                <span class="ip">IP: sprout.mov51.net</span>
                I host a server for the modpack sprout. The pack is focused on exploration and intermod gating. This means that in order to progress through the pack you have to touch on each of the mods and explore the world to find the resources you need.
              </p>
              <p>
                To install the pack you can use the <a href="https://www.twitch.tv/downloads">twitch launcher</a> or <a href="https://multimc.org/">multiMC</a> from <a href="https://minecraft.curseforge.com/projects/sprout-explore-for-more?gameCategorySlug=modpacks&projectID=269327">curse</a>.
              </p>
            </div>
            <div class="center box danger mb-3">
              This is a <strong>modpack</strong> for the <strong>java edition</strong> of the game. Seeing as you can't mod other versions of minecraft if you don't have <strong>java edition</strong> you will be unable to play on this server.<br/></br/>
              You need at least 4 GB of ram to allocate to minecraft, any less and the game will be unplayable. A dedicated graphics card is generally required but some integrated ones seem to be able to handle the load.
            </div>
            <div class="center box default mb-3">
              <h3>Rules<sub>Click each rule for more information</sub></h3>
              <?php include './include/lists/sproutRules.php';?>
            </div>
            <div class="center box default mb-3">
              <h3>Known crashes<sub>Click each crash for more information</sub></h3>
              <?php include './include/lists/sproutCrashes.php';?>
            </div>
            <div class="center box default mb-3">
              <h3>Moderators<sub>Click each staff member for more information</sub></h3>
              <?php include './include/lists/sproutStaff.php';?>
            </div>
        </div>
        <?php include './include/layout/right.php';?>
      </div>
    </div>
  </body>
</html>
