<head>
  <?php include'./include/head.php';
  $pageTitle = 'about mov51';
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
                I am an autistic young adult that has found enjoyment in learning and sharing what I know. This website is a launch pad for my projects and a colection of some of my colected information. On this page you will find stuff about who I am and setups I use for projects.
              </p>
            </div>
            <div id="streams" class="center box default mb-3">
              <a href="#streams"><h3>Streams</h3></a>
              <p>
                This is my stream schedule. I will do my best to keep it up to date with cancelations and time shifts.
              </p>
              <?php include './include/layout/calender/calender.php';?>
            </div>
            <div id="PCspecs" class="center box default mb-3">
                <a href="#PCspecs"><h3>PC specs</h3></a>
                <p>
                  This is the pc that I do most of my work on. I continually upgrade it as I need to. Since the day I bought it have changed the ram, power supply, hard drives, and GPU. Please do not use it as an example of what to buy for yourself as each personb will need a differnt build for what they do.
                </p>
                <ul class="list">
                  <li>
                    Intel(R) Core(TM) i7 6700K 4.00 GHz
                  </li>
                  <li>
                    GIGABYTE GeForce GTX 1070 8GB
                  </li>
                  <li>
                    3 AOC 2260 1080p monitors
                  </li>
                  <li>
                    1 32 inch 1080p Sceptre television <sub>duplicated monitor</sub>
                  </li>
                  <li>
                    1 acer 1080p monitor
                  </li>
                  <li>
                    32GB 2400 mhz DDR4 Ram
                  </li>
                </ul>
            </div>
            <div id="Alts" class="center box default mb-3">
              <a href="#Alts"><h3>Minecraft accounts</h3></a>
              <p>
                I have 4 minecraft accounts, these are generaly know as alts. For me the alts are usefull in testing mods and plugins that have interactions with multiple players as well as running multiple farms while continuing to play the game. Many of you may see this as a waste of money, you may not see the use in buying a game 4 times. To me Mojang has more than earned the money I have spent on their game, the amount of joy and freinds I have recived from the game they made is priceless.
              </p>
              <ul class="list">
                <li>
                  <a href="https://namemc.com/profile/mov51.1">mov51 <sub>my main account - purchased 25 July, 2015</sub></a>
                </li>
                <li>
                  <a href="https://namemc.com/profile/mov52.1">mov52 <sub>one of my alts - purchased 15 February, 2017</sub></a>
                </li>
                <li>
                  <a href="https://namemc.com/profile/mov53.1">mov53 <sub>one of my alts - purchased 7 June, 2018</sub></a>
                </li>
                <li>
                  <a href="https://namemc.com/profile/mov54.1">mov54 <sub>one of my alts - purchased 24 December, 2018</sub></a>
                </li>
              </ul>
            </div>
            <div id="ServerSpecs" class="center box default mb-3">
                <a href="#ServerSpecs"><h3>Server specs</h3></a>
                <p>
                  This is what I currently host my sprout server on. Its a dedicated micro PC that I have running in my house for the sole purpose of hosting the server.
                </p>
                <ul class="list">
                  <li>
                    ThinkCentre M73 micro PC
                  </li>
                  <li>
                    Intel Core i5-4570 Haswell Quad-Core 3.2 GHz
                  </li>
                  <li>
                    16GB (2 x 8G) 204-Pin DDR3 SO-DIMM 1600
                  </li>
                </ul>
            </div>
        </div>
        <div class="order-3 order-lg-3 col-lg-3 my-lg-3 col-10 mb-3">
          <div class="right container-fluid box default">
            <div class="row justify-content-center">
              <?php include './include/layout/right.php';?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
