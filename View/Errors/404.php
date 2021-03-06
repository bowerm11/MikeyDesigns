<?php 
    $pageTitle = "Not Found (404)";

    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/allowDirectCall.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/globalErrorHandler.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Errors/ErrorsConstants.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/SqlVisitors.php");
    include_once(GlobalConstants::$rootPath . "/Controller/Shared/Logger.php");
    include_once(GlobalConstants::$rootPath . "/Controller/Shared/_defaultHeaders.php");

    Logger::Log("IP Remote/Forwarded (" . GlobalConstants::$ipRemote . "/" . GlobalConstants::$ipForwarded . ") entered the 404 screen.", "404");
    SqlVisitors::SqlInsertVisitors();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once(GlobalConstants::$defaultHtmlHeadersLocation)?>
        <link rel="stylesheet" href="<?php echo GlobalConstants::$footerCssLocation?>">
        <link rel="stylesheet" href="<?php echo ErrorsConstants::$indexCss?>">
    </head>
    <body>  
        <?php include_once(GlobalConstants::$navbarPhpLocation) ?>
        <?php include_once(GlobalConstants::$noscriptPhpLocation) ?>
        <div class="error-main-container navbar-removeable-section push-footer-to-bottom">
            <div class="text-center">
                <img class="error-img" src="<?php echo $navConst->loadingImg?>" alt="Dog Image">
                <p class="text-center margin-none error-header">Ruh-oh!</p>
                <p class="margin-none">Your request to <span id="url-location">this URL</span> was not found, resulting in a 404.</p>
                <p class="text-center">Please go to the menu bar and select what you need there.</p>
            </div>          
            <?php include_once(GlobalConstants::$footerPhpLocation)?>   
        </div>      
        <script type="text/javascript" src="<?php echo GlobalConstants::$jQueryJs?>"></script>
        <script type="text/javascript" src="<?php echo GlobalConstants::$navbarJsLocation?>"></script>
        <script type="text/javascript" src="<?php echo ErrorsConstants::$indexJs?>"></script>
    </body>
</html>