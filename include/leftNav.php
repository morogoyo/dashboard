<?php
// menu link variables

$webform = "forms/webform.php";
$acronymform ="forms/acronymform.php";
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
      	<li class="active"><a href="#section1">Dashboard</a></li>
        <li class="active"><a href="<?php echo $webform; ?>">Web Resourse Admin</a></li>
        <li class="active"><a href="<?php echo $acronymform;?>">Acronym Resourse Admin</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2><img src="img/logo.png" alt="placeholder+image"></h2>
      <ul class="nav nav-pills nav-stacked">
         <li class="active"><a href="#section1">Dashboard</a></li>
        <li class="active"><a href="<?php echo $webform; ?>">Web Resourse Admin</a></li>
        <li class="active"><a href="<?php echo $acronymform;?>">Acronym Resourse Admin</a></li>
        <!-- <li class="active"><a href="#section3">Geo</a></li> -->
      </ul><br>
    </div>
    <br>