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
            <div id="PCspecs" class="center article">
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

            <div id="PCspecs2" class="center box default mb-3">
                <a href="#PCspecs2"><h3>PC specs</h3></a>
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
        </div>
        <?php include './include/layout/right.php';?>
      </div>
    </div>
  </body>
</html>
