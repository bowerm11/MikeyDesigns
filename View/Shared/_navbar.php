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
        <div id="nav-screen-top" class="col-12">     
        </div>
        <div id="nav-screen-bottom" class="col-12">
            <div class="row nav-menu-bar h-100">
                <div class="col-3 no-padding">
                    <div class="nav-hyperlink">
                        <div>
                            <img class="nav-hyperlink-icon" src="/wwwroot/images/Shared/house.svg" alt="">
                            <a href="">Home</a>
                        </div>
                    </div>
                </div>
                <div class="col-3 no-padding">
                    <div class="nav-hyperlink">
                        <div>
                            <img class="nav-hyperlink-icon" src="/wwwroot/images/Shared/face-smile.svg" alt="">
                            <a href="">About</a>
                        </div>
                    </div>                
                </div>
                <div class="col-3 no-padding">
                    <div class="nav-hyperlink">
                        <div>
                            <img class="nav-hyperlink-icon" src="/wwwroot/images/Shared/flask.svg" alt="">
                            <a href="">Projects</a>
                        </div>
                    </div>
                </div>
                <div class="col-3 no-padding">
                    <div class="nav-hyperlink">
                        <div>
                            <img class="nav-hyperlink-icon" src="/wwwroot/images/Shared/address-book.svg" alt="">
                            <a href="">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
