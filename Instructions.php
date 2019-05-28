
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
              <a href="#TwitchLancher"><h3>how to install a minecraft modpack on the twitch launcher</h3></a>
              <div class="row justify-content-center">
                <div class="col-lg-6 col-12 box dark override">
                  <p>
                    This article explains how to install a modpack for the java edition of minecraft with the twitch launcher. <br /><br />
                    It requires the you have accses to the internet, a purchaced minecraft java edition account, a twitch account, a modpack you want to install, and a computer to install it on. The specifiactions requrired for the computer will vary depending on the pack you want to play, its best to ask for minmum specs in forums for the pack.
                  </p>
                </div>
                <div class="col-lg-6 col-12">
                  <div class="mx-auto py-2" style="width: 100%;">
                    <img style="width: 100%;" src="https://i.imgur.com/6xaSwKg.png"/>
                  </div>
                </div>
              </div>
                <div class="col-12">
                  <div class="CascadeList" id="UsingTwitch">
                    <div class="card box dark override">
                      <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#InstallTwitch">
                          <img src="https://i.imgur.com/Adyc0iB.png"/>Installing The Launcher
                        </a>
                      </div>
                      <div id="InstallTwitch" class="collapse" data-parent="#UsingTwitch">
                        <div class="card-body">
                          <div class="row">
                            <div class="row justify-content-center">
                              <div class="col-lg-6 col-12">
                                <p>
                                  First off you need the installer, open your web browser and go to <a target="_blank" href="https://www.twitch.tv/downloads">this link</a>. This tutorial assumes your using windows, so choose the windows installer
                                </p>
                              </div>
                              <div class="col-lg-6 col-12">
                                <div class="mx-auto py-2" style="width: 100%;">
                                  <a target="_blank" href="https://i.imgur.com/Y0mcmtk.png"><img style="width: 100%;" src="https://i.imgur.com/Y0mcmtk.png"/></a>
                                </div>
                              </div>
                            </div>
                            <div class="row justify-content-center">
                              <div class="col-lg-6 col-12">
                                <p>
                                  Now that you have the installer open it. You can either click on it in your browser or navigate to your downloads folder and open it from there. <br /> Once youve opened the installer you will see a page that just says install, as you can imagine, click install. Once its finished it will automatically open the launcher and you will be asked to log in to your twitch account or sign up with a new one. Sign in with twitch and we can move on to installing the pack.
                                </p>
                              </div>
                              <div class="col-lg-6 col-12">
                                <div class="mx-auto mt-lg-5" style="width: 100%;">
                                  <a target="_blank" href="https://i.imgur.com/r83buNT.png"><img style="width: 100%;" src="https://i.imgur.com/r83buNT.png"/></a>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>
                    <div class="card box dark override">
                      <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#InstallApack">
                          <img src="https://i.imgur.com/Adyc0iB.png"/>Installing A Modpack
                        </a>
                      </div>
                      <div id="InstallApack" class="collapse" data-parent="#UsingTwitch">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-12 col-lg-6">
                              <p>
                                Now that you have the laucher installed and you have logged into to twitch you should see an image similar to image 1. <br />The first button you are going to want to click is mods. Once you've clicked the mods button you should see image 2, click minecraft (highlighted in image 2). once clicked you should see image 3, click install and that will allow twitch to manage mods for minecraft. <br /><br />And you've done the hard part! Now you should see image 4, wich is where you will manage your packs in the twitch launcher.
                              </p>
                            </div>
                            <div class="col-12 col-lg-6">
                              <div class="row tiles">
                                <div class="col-6 my-2">
                                  <a target="_blank" href="https://i.imgur.com/odbajGI.png">Image 1<img style="width: 100%;" src="https://i.imgur.com/odbajGI.png"/></a>
                                </div>
                                <div class="col-6 my-2">
                                  <a target="_blank" href="https://i.imgur.com/fDox3QX.png">Image 2<img style="width: 100%;" src="https://i.imgur.com/fDox3QX.png"/></a>
                                </div>
                                <div class="col-6 my-2">
                                  <a target="_blank" href="https://i.imgur.com/LqA7gSU.png">Image 3<img style="width: 100%;" src="https://i.imgur.com/LqA7gSU.png"/></a>
                                </div>
                                <div class="col-6 my-2">
                                  <a target="_blank" href="https://i.imgur.com/XY9OWtr.png">Image 4<img style="width: 100%;" src="https://i.imgur.com/XY9OWtr.png"/></a>
                                </div>
                              </div>
                            </div>
                            <div class="col-12 col-lg-6 box default override">
                              <p>
                                To install a pack Click the browse modpacks button on the page from image 5. Once there use the search bar on the top right to find the pack your looking for, as an example the pack sprout (image 6). Hover over the left side of the pack you want to bring up the install button as seen in image 6, to bring up more details on the pack click anywhere else on the image (image 7). <br />
                                The pack will take a few minutes to download all of the mods and configure forge and minecraft. Once done it will show up in your "my modpacks" page with a play button when you hover over it (image 8).
                              </p>
                            </div>
                            <div class="col-12 col-lg-6">
                              <div class="row tiles">
                                <div class="col-6 my-2">
                                  <a target="_blank" href="https://i.imgur.com/JPU3DYO.png">Image 5<img style="width: 100%;" src="https://i.imgur.com/JPU3DYO.png"/></a>
                                </div>
                                <div class="col-6 my-2">
                                  <a target="_blank" href="https://i.imgur.com/qCjOSfH.png">Image 6<img style="width: 100%;" src="https://i.imgur.com/qCjOSfH.png"/></a>
                                </div>
                                <div class="col-6 my-2">
                                  <a target="_blank" href="https://i.imgur.com/ZbRmsXA.png">Image 7<img style="width: 100%;" src="https://i.imgur.com/ZbRmsXA.png"/></a>
                                </div>
                                <div class="col-6 my-2">
                                  <a target="_blank" href="https://i.imgur.com/lXu2Gvg.png">Image 8<img style="width: 100%;" src="https://i.imgur.com/lXu2Gvg.png"/></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="card box dark override">
                    <div class="card-header">
                      <a class="card-link" data-toggle="collapse" href="#RamWithTwitch">
                        <img src="https://i.imgur.com/Adyc0iB.png"/>Changing Alocated Ram
                      </a>
                    </div>
                <div id="RamWithTwitch" class="collapse" data-parent="#UsingTwitch">
                  <div class="card-body">
                    <div class="row justify-content-center">
                      <div class="col-12">
                        Before you can start the pack it's important to make sure your alocated ram is high enough to run it. Modded minecraft has a very high ram requriement compared to vanilla minecraft. This means that you will have to change the ram allocation from the default settings.
                      </div>
                      <div class="col-12 col-lg-6">
                        <p>
                          First step is to open your twitch settings page. You'll find the settings in the hamburger on the top right of the window  menu under file->settings or by pressing <code>CTRL + ,</code>. Image 9 shows the location of the hamburgur menu to accses the settings menu. Once on the settings page click the minecraft button highlighted in image 10, once there scroll down untill you see the section highlighted in image 11.<br /><br />
                          The smaller box thats highlighted in image 11 is the slider we are looking for, it sets the default ram for all packs that you create. The general rule is that fully featured packs will require 4-7 gigabytes of ram, that means you should in general have 8 gigabytes of ram installed on your pc to run a pack. This gives you ram to use for your operating system and other programs.
                        </p>
                      </div>
                      <div class="col-12 col-lg-6">
                        <div class="row tiles">
                          <div class="col-12 my-2">
                            <a target="_blank" href="https://i.imgur.com/BzF98r2.png">Image 9<img style="width: 100%;" src="https://i.imgur.com/BzF98r2.png"/></a>
                          </div>
                          <div class="col-12 my-2">
                            <a target="_blank" href="https://i.imgur.com/4jkzVGA.png">Image 10<img style="width: 100%;" src="https://i.imgur.com/4jkzVGA.png"/></a>
                          </div>
                          <div class="col-12 my-2">
                            <a target="_blank" href="https://i.imgur.com/70z0i5a.png">Image 11<img style="width: 100%;" src="https://i.imgur.com/70z0i5a.png"/></a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-12 default override">
                        <p>
                          To get the amount of ram you wand to allocate take the GiB ammount and multiply it by 1024 to get the size in MiB. So if you want 6 GB's of ram for your pack (my recomended default) use the number <code>6144</code>. So now your settings page should look like image 12. Now that the default ram has been set you can start the pack, if it doesnt play very well you can try increasing the ram but keep in mind, more is not always better. The more ram you add to minecraft the harder it has to work to clear that memory. In general I wouldnt suggest more than 8 for any minecraft instance, though there are exeptions.
                        </p>
                      </div>
                      <div class="col-12 col-lg-5">
                        <a target="_blank" href="https://i.imgur.com/6qpKXFI.png">Image 11<img style="width: 100%;" src="https://i.imgur.com/6qpKXFI.png"/></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                  <div class="card box dark override">
                    <div class="card-header">
                      <a class="card-link" data-toggle="collapse" href="#LaunchTwitch">
                        <img src="https://i.imgur.com/Adyc0iB.png"/>Launching A Modpack
                      </a>
                    </div>
                <div id="LaunchTwitch" class="collapse" data-parent="#UsingTwitch">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-12">
                        Now that you have Twitch setup and a pack installed the reset is just like using the vanilla launcher. Once you hit play Twitch will open the vanilla lancher with a seperate list of profiles that will have the modpack you want to play. You will need to login first as normal, then hit play in the launcher, thats it. To install new packs just repeat the steps above.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                </div>
              </div>
        </div>
      </div>
      <?php include './include/layout/rightSidebar/instruct.php';?>
    </div>
  </body>
</html>
