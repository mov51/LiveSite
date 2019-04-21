<nav id="nav" class="nav sticky navbar navbar-expand-lg bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Mov51</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link <?php if($pageTitle == 'home'){ echo"activePage";}?>" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($pageTitle == 'about mov51'){ echo"activePage";}?>" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle <?php if($pageTitle == 'sprout server'){ echo"activePage";}?>" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Sprout
         </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <a class="dropdown-item" href="sprout.php">Info</a>
           <a class="dropdown-item" href="sprout.php#rules">Rules</a>
           <a class="dropdown-item" href="sprout.php#knownCrashes">known Crashes</a>
         </div>
       </li>
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle disabled <?php if($pageTitle == 'mandates'){ echo"activePage";}?>" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            The Mandates
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="sprout.php">Info</a>
            <a class="dropdown-item" href="sprout.php#rules">Rules</a>
          </div>
        </li>
    </ul>
  </div>
</nav>
