<?php
// menu link variables

$webform = "forms/webform.php";
$acronymform ="forms/acronymform.php";
$teams = "teams.php"
?>




<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="img/logo.png" alt="placeholder+image"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">  
      <li><?php echo memory_get_peak_usage(true); ?></li>    
      	<li class="active"><a href="dashboard/index.php">Dashboard1234</a></li>
        <li class="active"><a href="<?php echo $webform; ?>">Web Resourse Admin</a></li>
        <li class="active"><a href="<?php echo $acronymform;?>">Acronym Resourse Admin</a></li>
        <li class="active"><a href="">Trident Teams</a></li>
        <li class="active">Release Schedule</li>
        <!-- <li class="active">Trident Teams</li>
        <li class="active">Trident Teams</li>
        <li  class="active">Trident Teams</li>-->
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2><img src="img/logo.png" alt="placeholder+image"></h2>
      <ul class="nav nav-pills nav-stacked">
      <li><?php echo memory_get_peak_usage(true) /1000000 .'Mb'; ?></li>  
         <li class="active"><a href="index.php">Dashboard1234</a></li>
        <li class="active"><a href="<?php echo $webform; ?>">Web Resourse Admin</a></li>
        <li class="active"><a href="<?php echo $acronymform;?>">Acronym Resourse Admin</a></li>
        <li class="active"><a href="">Web Resourse</a></li>
        <li class="active"><a href="">Acronyms</a></li>
        <li class="active" onclick="toggleTeam()"><a href="">Trident Teams</a></li>
        <li class="active" onclick="toggleRelease()"><a href="">Release Schedule</a></li>
        <li class="active"><a href="">Release Schedule</a></li>
        <!-- <li class="active">Trident Teams</li>
        <li class="active">Trident Teams</li>
        <li  class="active">Trident Teams</li>-->
      </ul><br>
    </div>
    <br>