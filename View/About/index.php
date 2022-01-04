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
<html id="html" lang="en">
    <head>
        <?php include_once(GlobalConstants::$defaultHtmlHeadersLocation)?>
        <link rel="stylesheet" type="text/css" href="<?php echo $aboutConst->aboutCss?>">
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
            <div class="white-bg">
                <div class="box">
                    <div class="box-header">
                        <p class="d-inline header">About</p>
                    </div>
                    <div class="box-content">
                        <div id="key-container" class="key-container">
                            <div>
                                <img class="key-img" src="<?php echo $aboutConst->keyImg?>">
                                <img id="key-up-line" class="key-up-line" src="<?php echo $aboutConst->lineUpImg?>">
                            </div>
                            <div id="key-mid-line" class="key-mid-line-container">
                                <img class="key-max-line" src="<?php echo $aboutConst->lineImg?>">
                                <p class="margin-none">10in</p>
                            </div>
                            <div id="key-max-line" class="key-max-line-container">
                                <img class="key-max-line" src="<?php echo $aboutConst->lineImg?>">
                                <p class="margin-none">20in</p>
                            </div>
                        </div>
                        <p class="content-text">Hello! My name is Michael Bower, and as an Industrial Designer my passion is to design a better quality of living by challenging what can be done. Pushing design boundaries while maintaining design integrity throughout the development process. Very engaging and hands on from concept to product launch. I am self-motivated with a willingness to go the extra mile.</p>
                        <p class="margin-none content-text">I had the opportunity to develop products for the home, sporting goods, outdoor living although the majority of my experience has been in medical devices.  Integrating innovative materials and processes for consumer products in many industries. I have worked with a diversity of team members consisting of engineers, marketing, associates and management as well as other designers.</p>
                    </div>
                </div>   
                <div class="box-seperator"></div>
                <div class="box">
                    <div class="box-header">
                        <p class="d-inline header">Skills that Make Design Last and Stay Functional</p>
                    </div> 
                    <div class="box-content container-fluid">
                        <div class="row">    
                            <div class="col-6 position-relative">
                                <p id="rotate-word-highlight">Photoshop</p>
                            </div>
                            <div class="col-6 text-center">
                                <p class="rotate-word content-text margin-none">Photoshop</p>
                                <p class="rotate-word content-text margin-none">Illustrator</p>
                                <p class="rotate-word content-text margin-none">Indesign</p>
                                <p class="rotate-word content-text margin-none">AutoCAD</p>
                                <p class="rotate-word content-text margin-none">Vip3d</p>
                                <p class="rotate-word content-text margin-none">FreeForm</p>
                                <p class="rotate-word content-text margin-none">Solidworks</p>
                                <p class="rotate-word content-text margin-none">Rhino</p>
                                <p class="rotate-word content-text margin-none">Blender</p>
                                <p class="rotate-word content-text margin-none">Keyshot</p>
                                <p class="rotate-word content-text margin-none">Tablet Sketching</p>
                                <p class="rotate-word content-text margin-none">Sketchbook Pro</p>
                                <p class="rotate-word content-text margin-none">Model Making</p>
                                <p class="rotate-word content-text margin-none">Rapid Prototyping</p>
                                <p class="rotate-word content-text margin-none">Industrial Sewing</p>
                                <p class="rotate-word content-text margin-none">Assembly Drawing</p>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="box-seperator"></div>  
                <div class="box position-relative">
                    <div class="awards-icon-container">
                        <img class="award-star" src="<?php echo $aboutConst->starImg?>">
                        <img class="award-star2" src="<?php echo $aboutConst->starImg?>">
                        <img class="award-award" src="<?php echo $aboutConst->awardImg?>">
                        <img class="award-medal" src="<?php echo $aboutConst->medalImg?>">
                        <img class="award-medal2" src="<?php echo $aboutConst->medalImg?>">
                        <img class="award-trophy" src="<?php echo $aboutConst->trophyImg?>">
                        <img class="award-trophy2" src="<?php echo $aboutConst->trophyImg?>">
                        <img class="award-trophy3" src="<?php echo $aboutConst->trophyImg?>">
                    </div>
                    <div class="box-header">
                        <p class="d-inline header">Awards</p>
                    </div> 
                    <div class="box-content">
                        <table class="styled-table">
                            <thead>
                                <tr>
                                    <th>Award</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>13th Annual IDA Awards - Product Design</td>
                                    <td>2020</td>
                                </tr>
                                <tr>
                                    <td>European Product Design Award Honorable Mention</td>
                                    <td>2020</td>
                                </tr>
                                <tr>
                                    <td>Scholastic Art and Writing Gold Key Drawing</td>
                                    <td>2014</td>
                                </tr>
                                <tr>
                                    <td>Scholastic Art and Writing Honorable Mention</td>
                                    <td>2014</td>
                                </tr>
                                <tr>
                                    <td>Scholastic Art and Writing Award for Excellence Visual Arts</td>
                                    <td>2014</td>
                                </tr>
                                <tr>
                                    <td>Connecticut Association of Schools Outstanding Arts Award</td>
                                    <td>2014</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>  
            </div>
        </div>    
        <?php include_once(GlobalConstants::$navbarPhpLocation) ?>
        <script type="text/javascript" src="<?php echo GlobalConstants::$jQueryJs?>"></script>
        <script type="text/javascript" src="<?php echo GlobalConstants::$navbarJsLocation?>"></script>
        <script type="text/javascript" src="<?php echo $aboutConst->indexJs?>"></script>
    </body>
</html>