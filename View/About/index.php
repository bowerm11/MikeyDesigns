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
        <meta name="apple-mobile-web-app-capable" content="yes">
        <title>About</title>
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Yantramanav:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo $aboutConst->bootstrapCss?>">
        <link rel="stylesheet" type="text/css" href="<?php echo $aboutConst->aboutCss?>">
        <link rel="stylesheet" type="text/css" href="<?php echo $aboutConst->navbarCss?>">
    </head>
    <body>
        <div id="aboutContainer" class="navbar-removeable-section">
            <div class="front-cover-container 100-Vw-Vh">
                <div class="about-title-box-container">
                    <div class="about-title-box">
                        <p class="margin-none">Hi, I'm Michael.</p>
                        <p class="margin-none monospace-font font-size-18">Industrial Designer</p>
                    </div>
                </div>
                <div class="animated-dot-container">
                    <div class="animated-dot">
                        <img class="dot" src="<?php echo $aboutConst->dotImg?>" alt="Click Below">
                    </div>
                </div>
                <div id="front-page-parrallax" class="parallax-container">
                    <div class="parallax me-background-img"></div>
                    <div class="parallax me-img"></div>
                </div>
            </div> 
            <div class="black-box monospace-font">
                <div class="black-box-header">
                    <p class="d-inline">Always Designing</p>
                </div>
                <div class="black-box-content">
                    <div class="key-container">
                        <img class="key-img" src="<?php echo $aboutConst->keyImg?>">
                        <div class="key-mid-line-container">
                            <img class="key-dot" src="<?php echo $aboutConst->dotImg?>"><img class="key-max-line" src="<?php echo $aboutConst->lineImg?>"><img class="key-dot" src="<?php echo $aboutConst->dotImg?>">
                        </div>
                        <div class="key-max-line-container">
                            <img class="key-dot" src="<?php echo $aboutConst->dotImg?>"><img class="key-max-line" src="<?php echo $aboutConst->lineImg?>"><img class="key-dot" src="<?php echo $aboutConst->dotImg?>">
                            <p class="margin-none">20in</p>
                        </div>
                    </div>
                    <p class="margin-none">Make dive black, typewriter text. Place graph.Add black box to every paragraph</p>
                </div>
            </div>   
            <div class="black-box monospace-font">
                <div class="black-box-header">
                    <p class="d-inline">Skills that Make Design Last and Stay Functional</p>
                </div>
                <p class="margin-none">Make div black, typewriter text. Place graph.</p>
                <div class="chart-container">
                    <div class="chart-axis">
                        <img class="chart-x-axis" src="<?php echo $aboutConst->lineUpImg?>">
                    </div>
                </div>
            </div>   
        </div>    
        <?php include_once($aboutConst->navBarPhp) ?>
    </body>
    <script type="text/javascript" src="<?php echo $aboutConst->jQueryJs?>"></script>
    <script type="text/javascript" src="<?php echo $aboutConst->gchartJs?>"></script>
    <script type="text/javascript" src="<?php echo $aboutConst->attractableBtnJs?>"></script>
    <script type="text/javascript" src="<?php echo $aboutConst->navBarJs?>"></script>
    <script type="module" src="<?php echo $aboutConst->indexJs?>"></script>
</html>