<?php 
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/allowDirectCall.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/globalErrorHandler.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/About/AboutConstants.php");
    include_once(GlobalConstants::$rootPath . "/Controller/Shared/Logger.php");
    include_once(GlobalConstants::$rootPath . "/Controller/Shared/_defaultHeaders.php");

    Logger::Log("IP Remote/Forwarded (" . GlobalConstants::$ipRemote . "/" . GlobalConstants::$ipForwarded . ") entered the about screen.", "Index_About");
?>

<!DOCTYPE html>
<html id="html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About</title>
        <link rel="stylesheet" href="<?php echo $aboutConst->bootstrapCss?>">
        <link rel="stylesheet" href="<?php echo $aboutConst->aboutCss?>">
        <link rel="stylesheet" href="<?php echo $aboutConst->navbarCss?>">
    </head>
    <body>
        <div id="aboutContainer" class="navbar-removeable-section">
            <div class="parallax-container">
                <div class="about-title-box-container">
                    <div class="about-title-box">
                        <p class="margin-none">Hi, I'm Michael.</p>
                    </div>
                </div>
                <div class="animated-dot-container">
                    <div class="animated-dot">
                        <img class="dot" src="<?php echo $aboutConst->dotImg?>" alt="Click Below">
                    </div>
                </div>
                <div class="parallax me-img"></div>
            </div> 
            <div>
                <p>Make dive black, typewriter text. Place graph.</p>
            </div>   
        </div>    
        <?php include_once($aboutConst->navBarPhp) ?>
    </body>
    <script type="text/javascript" src="<?php echo $aboutConst->jQueryJs?>"></script>
    <script type="text/javascript" src="<?php echo $aboutConst->attractableBtnJs?>"></script>
    <script type="text/javascript" src="<?php echo $aboutConst->navBarJs?>"></script>
    <script type="module" src="<?php echo $aboutConst->indexJs?>"></script>
</html>