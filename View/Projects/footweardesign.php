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
                <img class="img-fill-container-cover" src="<?php echo FootwearConstants::$titlePicImg?>">
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
                <div class="section js-toc-content-item" data-toc-title="Sketches">
                    <p class="title margin-none">Sketches:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 margin-t-b-10">
                                        <img class="w-100 max-width-700px d-block margin-l-r-auto border-r-5" src="<?php echo FootwearConstants::$img1?>">
                                    </div>
                                </div>  
                                <div class="row">
                                    <div class="col-12 col-lg-6 margin-t-b-10">
                                        <img class="w-100 max-width-700px d-block margin-l-r-auto border-r-5" src="<?php echo FootwearConstants::$img2?>">
                                    </div>
                                    <div class="col-12 col-lg-6 margin-t-b-10">
                                        <img class="w-100 max-width-700px d-block margin-l-r-auto border-r-5" src="<?php echo FootwearConstants::$img3?>">
                                    </div>
                                </div>   
                                <div class="row">
                                    <div class="col-12 col-lg-6 margin-t-b-10">
                                        <img class="w-100 max-width-700px d-block margin-l-r-auto border-r-5" src="<?php echo FootwearConstants::$img4?>">
                                    </div>
                                    <div class="col-12 col-lg-6 margin-t-b-10">
                                        <img class="w-100 max-width-700px d-block margin-l-r-auto border-r-5" src="<?php echo FootwearConstants::$img5?>">
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-12 margin-t-b-10">
                                        <img class="w-100 max-width-700px d-block margin-l-r-auto border-r-5" src="<?php echo FootwearConstants::$img6?>">
                                    </div>
                                </div>  
                                <div class="row">
                                    <div class="col-12 margin-t-b-10">
                                        <img class="w-100 max-width-700px d-block margin-l-r-auto border-r-5" src="<?php echo FootwearConstants::$img7?>">
                                    </div>
                                </div>     
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Knitting Pattern">
                    <p class="title margin-none">Knitting Pattern:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12 col-lg-6 margin-t-b-10 text-center">
                                <img class="w-100 max-width-700px d-block margin-l-r-auto border-r-5" src="<?php echo FootwearConstants::$img8?>">
                                <p class="margin-none">Knitting in the round: 55 Stitches</p>
                                <p class="margin-none">Needle 1 has 27 Stitches</p>
                                <p class="margin-none">Needle 2 has 14 Stitches</p>
                                <p>Needle 3 has 14 Stitches</p>
                                <p class="margin-none">Purling around the heel curve</p>
                                <p>Decreasing by SSK (slip slip knit) every other round of knits</p>
                            </div>
                            <div class="col-12 col-lg-6 margin-t-b-10 text-center">
                                <img class="w-100 max-width-500px d-block margin-l-r-auto border-r-5" src="<?php echo FootwearConstants::$img9?>">
                                <p class="margin-none">Material used on Upper</p>
                                <p class="margin-none">Dritz Round and Braided Soft Stretch Elastic Cord</p>
                                <p>1/8 in (.316 cm) & $1/4 in (.64 cm)</p>
                            </div>
                            <div class="col-12 col-lg-6 margin-t-b-10 text-center">
                                <img class="w-100 max-width-500px d-block margin-l-r-auto border-r-5" src="<?php echo FootwearConstants::$img11?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Cad Models">
                    <p class="title margin-none">Cad Models:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 margin-t-b-10">
                                        <img class="w-100 max-width-700px d-block margin-l-r-auto border-r-5" src="<?php echo FootwearConstants::$img12?>">
                                    </div>
                                    <div class="col-12 margin-t-b-10">
                                        <img class="w-100 max-width-300px d-block margin-l-r-auto border-r-5" src="<?php echo FootwearConstants::$img13?>">
                                    </div>
                                    <div class="col-12 margin-t-b-10">
                                        <img class="w-100 max-width-500px d-block margin-l-r-auto border-r-5" src="<?php echo FootwearConstants::$img14?>">
                                    </div>
                                    <div class="col-12 margin-t-b-10">
                                        <img class="w-100 max-width-500px d-block margin-l-r-auto border-r-5" src="<?php echo FootwearConstants::$img15?>">
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Final Product">
                    <p class="title margin-none">Final Product:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 margin-t-b-10">
                                        <img class="w-100 max-width-700px d-block margin-l-r-auto border-r-5" src="<?php echo FootwearConstants::$img16?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-6 margin-t-b-10">
                                        <img class="w-100 max-width-700px d-block margin-l-r-auto border-r-5" src="<?php echo FootwearConstants::$img17?>">
                                    </div>
                                    <div class="col-12 col-lg-6 margin-t-b-10">
                                        <img class="w-100 max-width-700px d-block margin-l-r-auto border-r-5" src="<?php echo FootwearConstants::$img18?>">
                                    </div>
                                </div>
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