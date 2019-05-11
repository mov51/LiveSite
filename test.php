<head>
  <?php include'./include/head.php';
  $pageTitle = 'testing please!';
  ?>
  <title><?= $pageTitle ?></title>
</head>
<body>
  <div class="container-fluid">
    <div class="row justify-content-center mt-3">
      <div class="order-2 order-lg-1 col-lg-3 my-lg-3 col-10 mb-3 ">
      </div>
      <div class="order-1 order-lg-2 col-lg-6 mb-lg-0 col-10">
        <!-- content here -->
        <div class="article default">
          <p class="intro">
            <code>class="intro"</code> </br>
            sets a paragraph in an article to font weight 700.
          </p>
          <p>
            <code>class="article default"</code> </br>
            the class article applies the positioning sytles to a div aswell as includes the box class styles.</br>
            the default class styles the article/box with the the primary colors for the theme.
            </br>
            </br>
            <code>&lt;code&gt;&lt;/code&gt;</code> </br>
            displays code like this!
          </p>
          <div class="box dark override mr-2 ml-2">
            <p>
              <code>class="box dark override"</code> </br>
              this is an internal box, its set with the box class and adds just the backbround and border styles. it has all of the sub clases just like the article class.</br>
              in most cases you will need to add the override class to ensure that you have more specicity than the styled dic that the internal box is contained within.
            </p>
          </div>
        </div>
        <div class="article dark">
          <p>
            <code>class="article dark"</code> </br>
            adding the dark class to an article makes the background dark and the text orange. </br>
            this should change for all of the below elements.
          </p>
          <div class="box default mt-2 mr-2 ml-2">
            <p>
              <code>class="box default override"</code> </br>
              this is an internal box, its set with the box class and adds just the backbround and border styles. it has all of the sub clases just like the article class.</br>
              in most cases you will need to add the override class to ensure that you have more specicity than the styled dic that the internal box is contained within.
            </p>
          </div>
        </div>
        <div class="article danger">
          <p>
            <code>class="article danger"</code> </br>
            adding the warning class to an article makes the background orange and the text flat white. </br>
            this should change for all of the below elements.
          </p>
          <ul class="boxList">
            <li class="box danger">
              <p><code>class="boxList"</code> the boxList class will clear and postion ul elements for further styling.</p>
            </li>
            <li class="box dark">
              <p><code>class="box hover dark"</code> adding these classes will style a li element with a box style. this respects the style system.</p>
            </li>
            <li class="box dark hover">
              <p><code>class="box hover dark"</code> adding the hover class to a styled box will cause the borders to change when its hoverd over. this is usefull to show that a box contains a link.</p>
            </li>
          </ul>
        </div>
      </div>
      <div class="order-3 order-lg-3 col-lg-3 my-lg-3 col-10 mb-3">
      </div>
    </div>
  </div>
</body>
