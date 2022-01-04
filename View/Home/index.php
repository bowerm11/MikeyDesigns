<?php 
    $pageTitle = "Mikey Designs";

    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/allowDirectCall.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/globalErrorHandler.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Home/HomeConstants.php");
    include_once(GlobalConstants::$rootPath . "/Controller/Shared/Logger.php");
    include_once(GlobalConstants::$rootPath . "/Controller/Shared/_defaultHeaders.php");

    Logger::Log("IP Remote/Forwarded (" . GlobalConstants::$ipRemote . "/" . GlobalConstants::$ipForwarded . ") entered the home screen.", "Index_Home");
?>

<!DOCTYPE html>
<html id="html" lang="en">
    <head>
        <?php include_once(GlobalConstants::$defaultHtmlHeadersLocation)?>
        <link rel="stylesheet" href="<?php echo $homeConst->homeCss?>">
    </head>
    <body>
        <div id="loading-container" class="100-Vw-Vh">
            <div class="loading-elements">
                <img src="<?php echo $homeConst->loadingImg?>" alt="Dog Image">
                <p class="text-center">Hello, I'm Holly and I'm loading your screen...</p>
            </div>
        </div>
        <div id="home-container" class="navbar-removeable-section 100-Vw-Vh">
            <div id="hand-helper" class="hand-graphic">
                <img class="hand-img" src="<?php echo $homeConst->handImg?>" alt="">
            </div>
            <div id="canvas-container"></div>
        </div>    
        <?php include_once(GlobalConstants::$navbarPhpLocation) ?>
        <script type="text/javascript" src="<?php echo GlobalConstants::$jQueryJs?>"></script>
        <script type="text/javascript" src="<?php echo $homeConst->coverAnimationJs?>"></script>
        <script type="text/javascript" src="<?php echo $homeConst->starBackgroundJs?>"></script>
        <script type="text/javascript" src="<?php echo $homeConst->islandJs?>"></script>
        <script type="text/javascript" src="<?php echo GlobalConstants::$navbarJsLocation?>"></script>
        <script type="module" src="<?php echo $homeConst->indexJs?>"></script>
    </body>   
</html>