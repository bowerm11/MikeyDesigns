<?php 
    $pageTitle = "About";

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
        <?php include_once(GlobalConstants::$defaultHtmlHeadersLocation)?>
        <link rel="stylesheet" type="text/css" href="<?php echo $aboutConst->aboutCss?>">
        <link rel="stylesheet" type="text/css" href="<?php echo $aboutConst->navbarCss?>">
    </head>
    <body>
        <div id="aboutContainer" class="navbar-removeable-section">
            <div class="front-cover-container 100-Vw-Vh">
                <div class="about-title-box-container">
                    <div class="about-title-box">
                        <p class="margin-none header">Hi, I'm Michael.</p>
                        <p class="margin-none font-size-18">Industrial Designer</p>
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
                            <img class="key-max-line" src="<?php echo $aboutConst->lineImg?>">
                        </div>
                        <div class="key-max-line-container">
                            <img class="key-max-line" src="<?php echo $aboutConst->lineImg?>">
                            <p class="margin-none">20in</p>
                        </div>
                    </div>
                    <p class="content-text">Hello! My name is Michael Bower, and as an Industrial Designer my passion is to design a better quality of living by challenging what can be done. Pushing design boundaries while maintaining design integrity throughout the development process. Very engaging and hands on from concept to product launch. I am self-motivated with a willingness to go the extra mile.</p>
                    <p class="margin-none content-text">I had the opportunity to develop products for the home, sporting goods, outdoor living although the majority of my experience has been in medical devices.  Integrating innovative materials and processes for consumer products in many industries. I have worked with a diversity of team members consisting of engineers, marketing, associates and management as well as other designers.</p>
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
    <script type="text/javascript" src="<?php echo GlobalConstants::$jQueryJs?>"></script>
    <script type="text/javascript" src="<?php echo $aboutConst->attractableBtnJs?>"></script>
    <script type="text/javascript" src="<?php echo $aboutConst->navBarJs?>"></script>
    <script type="module" src="<?php echo $aboutConst->indexJs?>"></script>
</html>