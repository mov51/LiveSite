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
            <div class="center box default mb-3">
              <a href="https://mov51.net/about.php#streams"><h3>Streams</h3></a>
              <p>
                This is my stream schedule. I will do my best to keep it up to date with cancelations and time shifts.
              </p>
              <?php include './include/layout/calender/calender.php';?>
            </div>
            <div class="center box default mb-3">
              <p class="">
                <h3>PC specs</h3>
                <p>
                  This is the pc that I do most of my work on. I continually upgrade it as I need to. Since the day I bought it have changed the ram, power supply, hard drives, and GPU. Please do not use it as an example of what to buy for yourself as each personb will need a differnt build for what they do.
                </p>
                <ul class="list">
                  <li>
                    Intel(R) Core(TM) i7-6700 CPU @3.40GHz
                  </li>
                  <li>
                    GIGABYTE GeForce GTX 1070 8GB
                  </li>
                  <li>
                    3 AOC 2260 1080p monitors
                  </li>
                  <li>
                    1 32 inch 1080p Sceptre television <span class="sub">duplicated monitor</span>
                  </li>
                  <li>
                    1 acer 1080p monitor
                  </li>
                  <li>
                    32GB 2400 mhz DDR4 Ram
                  </li>
                </ul>
              </p>
            </div>
            <div class="center box default mb-3">
              <p class="">
                <h3>Server specs</h3>
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
              </p>
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
