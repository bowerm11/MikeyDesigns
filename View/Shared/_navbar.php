<?php 
    include_once("../../Controller/Shared/NavbarConstants.php");
    include_once($navConstants->controllerSharedPath."/preventDirectCall.php");
?>
<link rel="stylesheet" href="<?php echo $navConstants->navbarCss ?>">
<div id="hamburgerClickable" class="hamburger-wrapper">
    <img class="hamburger-icon" src="<?php echo $navConstants->menuIconDir ?>" alt="Menu">
</div>  
<div id="nav-screen" class="container-fluid" hidden>
    <div class="row h-100">
        <div id="nav-screen-left" class="col-6">
        </div>
        <div id="nav-screen-right" class="col-6">
        </div>
    </div>
</div>
<script type="text/javascript" src="/wwwroot/js/Shared/AttractableBtn.js"></script>
<script type="text/javascript" src="/wwwroot/js/Shared/navBar.js"></script>
