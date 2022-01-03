<?php 
    $pageTitle = "Footwear Design Project";

    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/allowDirectCall.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/globalErrorHandler.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Projects/FootwearConstants.php");
    include_once(GlobalConstants::$rootPath . "/Controller/Shared/Logger.php");
    include_once(GlobalConstants::$rootPath . "/Controller/Shared/_defaultHeaders.php");

    Logger::Log("IP Remote/Forwarded (" . GlobalConstants::$ipRemote . "/" . GlobalConstants::$ipForwarded . ") entered the Footwear Project screen.", "Project_Footwear");
?>

<!DOCTYPE html>
<html id="html">
    <head>
        <?php include_once(GlobalConstants::$defaultHtmlHeadersLocation)?>
        <link rel="stylesheet" href="<?php echo $footConst->indexCss?>">
    </head>
    <body>  
        <p>test</p>
        <?php include_once(GlobalConstants::$navbarPhpLocation) ?>
    </body>
    <script type="text/javascript" src="<?php echo GlobalConstants::$jQueryJs?>"></script>
    <script type="text/javascript" src="<?php echo GlobalConstants::$navbarJsLocation?>"></script>
    <script type="module" src="<?php echo $footConst->indexJs?>"></script>
</html>