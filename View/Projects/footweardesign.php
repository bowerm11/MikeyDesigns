<?php 
    $pageTitle = "Footwear Design Project";

    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/allowDirectCall.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/globalErrorHandler.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Projects/FootwearConstants.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/SqlVisitors.php");
    include_once(GlobalConstants::$rootPath . "/Controller/Shared/Logger.php");
    include_once(GlobalConstants::$rootPath . "/Controller/Shared/_defaultHeaders.php");

    Logger::Log("IP Remote/Forwarded (" . GlobalConstants::$ipRemote . "/" . GlobalConstants::$ipForwarded . ") entered the Footwear Project screen.", "Project_Footwear");
    SqlVisitors::SqlInsertVisitors();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once(GlobalConstants::$defaultHtmlHeadersLocation)?>
        <link rel="stylesheet" href="<?php echo FootwearConstants::$indexCss?>">
    </head>
    <body>  
        <div class="project-main-container navbar-removeable-section">
            <div class="project-header-container position-relative">
                <div class="project-title-container">
                    <div class="project-title-box">
                        <p class="margin-none">Footwear Design</p>
                    </div>
                </div>
                <img class="project-title-img" src="<?php echo FootwearConstants::$titlepicImg?>" alt="">
            </div>
            <div class="section-container margin-l-r-auto">
                <div class="section">
                    <p class="section-header">Why do we wear shoes?</p>
                    <div class="section-content container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <div class="img-tidbit-conatianer margin-l-r-auto">
                                    <div class="img-tidbit-txt-container vertical-align-middle">
                                        <p class="margin-none font-weight-300">Hand-Knitted Insert</p>
                                    </div>
                                    <img class="section-std-img img-border-round" src="<?php echo FootwearConstants::$insertImg?>" alt="">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6 vertical-align-middle">
                                <p class="margin-none">A simple question, a shoe is a tool worn on the foot that protects the user from elements and aids in mobility. Footwear trends today have been driven by social demands rather than the physical need. The cultural implication of shoes enforce gender stereotypes, class and identity.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-seperator"></div>
                <div class="section margin-l-r-auto">
                    <p class="section-header">Sustainable, Modular, and Recyclable</p>
                    <div class="section-content container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-md-6 vertical-align-middle">
                                <p>The footwear is sustainable by 3D printing the wearable soles, an expensive concept that is already being created from various companies. As the twenty-first century heads into automated manufacturing, the consumer would just have to order the new parts online and return the old to be recycled. The goal of designing modular footwear with the intended purpose to not affect a landfill would be for the consumer to only replace what they need when they need it.</p>
                                <p class="margin-none">With in these sketches I took inspiration from the trending footwear mentioned in today’s music industry.</p>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="img-tidbit-conatianer margin-l-r-auto">
                                    <div class="img-tidbit-txt-container vertical-align-middle">
                                        <p class="margin-none font-weight-300">Belcalis Almanzar - ‘I Like It’</p>
                                    </div>
                                    <img class="section-std-img img-border-round" src="<?php echo FootwearConstants::$sketchImg?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
        </div>
        <?php include_once(GlobalConstants::$navbarPhpLocation) ?>
        <?php include_once(GlobalConstants::$noscriptPhpLocation) ?>
        <script type="text/javascript" src="<?php echo GlobalConstants::$jQueryJs?>"></script>
        <script type="text/javascript" src="<?php echo GlobalConstants::$navbarJsLocation?>"></script>
        <script type="text/javascript" src="<?php echo FootwearConstants::$indexJs?>"></script>
    </body>
</html>