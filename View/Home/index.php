<?php 
    $pageTitle = "Mikey Designs";

    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/allowDirectCall.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/globalErrorHandler.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Home/HomeConstants.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/SqlVisitors.php");
    include_once(GlobalConstants::$rootPath . "/Controller/Shared/Logger.php");
    include_once(GlobalConstants::$rootPath . "/Controller/Shared/_defaultHeaders.php");

    Logger::Log("IP Remote/Forwarded (" . GlobalConstants::$ipRemote . "/" . GlobalConstants::$ipForwarded . ") entered the home screen.", "Index_Home");
    SqlVisitors::SqlInsertVisitors();
?>

<!DOCTYPE html>
<html lang="en">
    <head>  
        <?php include_once(GlobalConstants::$defaultHtmlHeadersLocation)?>
        <link rel="stylesheet" href="<?php echo HomeConstants::$homeCss?>">
    </head>
    <body>
        <div id="home-container" class="navbar-removeable-section 100-Vw-Vh">
            <div id="hand-helper" class="hand-graphic">
                <img class="hand-img" src="<?php echo HomeConstants::$handImg?>" alt="">
            </div>
            <div id="canvas-container"></div>
        </div>    
        <?php include_once(GlobalConstants::$navbarPhpLocation) ?>
        <?php include_once(GlobalConstants::$noscriptPhpLocation) ?>
        <script type="text/javascript" src="<?php echo GlobalConstants::$jQueryJs?>"></script>
        <script type="text/javascript" src="<?php echo GlobalConstants::$navbarJsLocation?>"></script>
        <script type="text/javascript" src="<?php echo HomeConstants::$homeAnimationJs?>"></script>
        <script type="module" src="<?php echo HomeConstants::$indexJs?>"></script>
    </body>   
</html>