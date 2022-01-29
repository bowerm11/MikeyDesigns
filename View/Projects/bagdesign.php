<?php 
    $pageTitle = "Bag Design";

    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/allowDirectCall.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/globalErrorHandler.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Projects/BagdesignConstants.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/SqlVisitors.php");
    include_once(GlobalConstants::$rootPath . "/Controller/Shared/Logger.php");
    include_once(GlobalConstants::$rootPath . "/Controller/Shared/_defaultHeaders.php");

    Logger::Log("IP Remote/Forwarded (" . GlobalConstants::$ipRemote . "/" . GlobalConstants::$ipForwarded . ") entered the Cora IoT Project screen.", "Project_CoraIot");
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
                <img class="img-fill-container-cover" src="<?php echo BagdesignConstants::$titlePicImg?>">
            </div>
            <div class="project-main">
                <div class="section">
                    <p class="title margin-none">Table of Contents:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <ol class="margin-none">
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Sketches">Sketches</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Assembly Order">Assembly Order</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Spec Sheet">Spec Sheet</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Mock Up">Mock Up</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Materials">Materials</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Materials">Final Product</span></li>
                                </ol>
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
                                <img class="w-100 margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover border-r-5" src="<?php echo BagdesignConstants::$img1?>">
                            </div>
                            <div class="col-12">
                                <img class="w-100 margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover border-r-5" src="<?php echo BagdesignConstants::$img2?>">
                            </div>
                            <div class="col-12">
                                <img class="w-100 margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover border-r-5" src="<?php echo BagdesignConstants::$img3?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Assembly Order">
                    <p class="title margin-none">Assembly Order:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <p class="margin-t-10 sub-title">Preparation</p>
                                <div class="row">
                                    <div class="col-12 margin-t-b-10">
                                        <ol>
                                            <li>Begin by cutting out all of the pieces from the patterns.</li>
                                            <li>Skive around all edges of the pieces that require a half inch skiff.</li>
                                            <li>Start by assembling each piece together.</li>
                                            <li>The front flap should be layered by Vinyl, Mesh and a final layer of Vinyl.</li>
                                            <li>Then sew the top binding to the front flap.</li>
                                            <li>Keep in mind that the pockets have to come while the bag is flat.</li>
                                            <li>Sew the vinyl front curved zipper pocket to the front of the bag with the loose mesh in between.</li>
                                            <li>After that apply the hardware to the front of the bag  and the flap.</li>
                                            <li>The flap requires 6 Large eyelets, the male push lock on either side of the curve.</li>
                                            <li>The female push lock pieces go on the front facing of the messenger.</li>
                                            <li>Start by gluing the padding between the lining and the leather for the front, back and U gusset, folder pocket.</li>
                                            <li>Sew the concave pockets onto the lining with the leather backing. </li>
                                            <li>Make sure to have enough seam allowance on the leather piece to fold over the lining to the binding.</li>
                                            <li>Next would be the “shoulder” pieces. The extra U gussets that are for a pop of color.</li>
                                            <li>Use chalk or awl to mark your centers. Do this before you do anything.</li>
                                            <li>Make sure you have the zipper, zipper facing, facing, the lining and zipper pocket for the inside of the front of the bag.</li>
                                            <li>When applying the zipper you must layer accordingly: Zipper facing, Zipper, lining, zipper pocket.</li>
                                            <li>Apply rubber cement to the front sides of the seam allowances to start the silken seam connecting the back with the front.</li>
                                            <li>You will be sewing through multiple layers so layers so take it slow, walk it if you have to.</li>
                                            <li>Then sew the top to the back.</li>
                                            <li>The flap to the top.</li>
                                            <li>Now it is time for the U gusset construction.</li>
                                            <li>Apply the eyelet hardware through the D-ring tab but not through the gusset itself.</li>
                                            <li>Then apply the snaps on either side of the eyelets, those will be used for interchanging a decretive handles.</li>
                                            <li>Apply the snaps to the mystery braid ends.</li>
                                            <li>Go back and remark your centers on the U gussets, this will help you because the bottom silken seam acts as the middle so you don't need to mark that.</li>
                                            <li>Turn the bag inside out and begin to clip or pin around the edges that you all sew together.</li>
                                            <li>This will be a turned seam that you will then attach a binding to cover.</li>
                                            <li>At this point there so many layers it wouldn't be good to sew through any more.</li>
                                            <li>Lastly once you have both U gussets all there is left would be to make the cross body strap.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Spec Sheet">
                    <p class="title margin-none">Spec Sheet:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <img class="w-100 max-width-900px margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover border-r-5" src="<?php echo BagdesignConstants::$img4?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Mock Up">
                    <p class="title margin-none">Mock Up:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <img class="w-100 max-width-900px margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover border-r-5" src="<?php echo BagdesignConstants::$img5?>">
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
                                <img class="w-100 max-width-900px margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover border-r-5" src="<?php echo BagdesignConstants::$img6?>">
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