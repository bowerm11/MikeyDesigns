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
        <link rel="stylesheet" href="<?php echo GlobalConstants::$footerCssLocation?>">
        <link rel="stylesheet" href="<?php echo ProjectConstants::$indexCss?>">
    </head>
    <body>  
        <div id="table-of-contents-container"></div>
        <div class="project-main-container navbar-removeable-section">
            <div class="100-Vw-Vh">
                <img class="img-fill-container-cover" src="<?php echo FootwearConstants::$titlepicImg?>">
            </div>
            <div class="project-main">
                <div class="section">
                    <p class="title margin-none">Table of Contents:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <ol class="margin-none">
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Why do we wear shoes?">Why do we wear shoes?</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Sustainability">Sustainability</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Sketches">Sketches</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Knitting Pattern">Knitting Pattern</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Cad Models">Cad Models</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Final Product">Final Product</span></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Why do we wear shoes?">
                    <p class="title margin-none">Why do we wear shoes?</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <p class="margin-none">A simple question, a shoe is a tool worn on the foot that protects the user from elements and aids in mobility. Footwear trends today have been driven by social demands rather than the physical need. The cultural implication of shoes enforce gender stereotypes, class and identity.</p>
                                <p class="margin-none"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Sustainability">
                    <p class="title margin-none">Sustainability:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <p class="margin-none">The footwear is sustainable by 3D printing the wearable soles, an expensive concept that is already being created from various companies. As the twenty-first century heads into automated manufacturing, the consumer would just have to order the new parts online and return the old to be recycled. The goal of designing modular footwear with the intended purpose to not affect a landfill would be for the consumer to only replace what they need when they need it.</p>
                                <p class="margin-none"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <?php include_once(GlobalConstants::$footerPhpLocation)?>   
        </div>
        <?php include_once(GlobalConstants::$navbarPhpLocation) ?>
        <?php include_once(GlobalConstants::$noscriptPhpLocation) ?>
        <script type="text/javascript" src="<?php echo GlobalConstants::$jQueryJs?>"></script>
        <script type="text/javascript" src="<?php echo GlobalConstants::$navbarJsLocation?>"></script>
        <script type="text/javascript" src="<?php echo ProjectConstants::$tocJs?>"></script>
        <script type="text/javascript" src="<?php echo ProjectConstants::$indexJs?>"></script>
    </body>
</html>