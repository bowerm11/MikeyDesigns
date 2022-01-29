<?php 
    $pageTitle = "EMS Footwear";

    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/allowDirectCall.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/globalErrorHandler.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Projects/EmsfootwearConstants.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/SqlVisitors.php");
    include_once(GlobalConstants::$rootPath . "/Controller/Shared/Logger.php");
    include_once(GlobalConstants::$rootPath . "/Controller/Shared/_defaultHeaders.php");

    Logger::Log("IP Remote/Forwarded (" . GlobalConstants::$ipRemote . "/" . GlobalConstants::$ipForwarded . ") entered the EMS Footwear Project screen.", "Project_Emsfootwear");
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
            <div class="100-Vw-Vh position-relative">
                <div class="arrow-down-cover-container position-absolute">
                    <img class="arrow-down-cover-img d-block margin-l-r-auto" src="<?php echo ProjectConstants::$arrowDownBlackSvg?>">
                </div>
                <img class="img-fill-container-cover" src="<?php echo EmsfootwearConstants::$img1?>">
            </div>
            <div class="project-main">
                <div class="section">
                    <p class="title margin-none">Table of Contents:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <ol class="margin-none">
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Preliminary Research">Preliminary Research</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Customer / Market Info">Customer / Market Info</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Mood Board">Mood Board</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Concept Summary">Concept Summary</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Design Development">Design Development</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Final Shoe">Final Shoe</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Material Board">Material Board</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="The Collection">The Collection</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="The Process">The Process</span></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Preliminary Research">
                    <p class="title margin-none">Preliminary Research:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <p>As a personal interest, my focus on this collection was to design a utilitarian work boot suitable for a first responder.</p>
                                <p class="margin-none">Requirements:</p>
                                <ul>
                                    <li>Protecting the toes</li>
                                    <li>Ankle support</li>
                                    <li>Water resistance</li>
                                    <li>Counter protection</li>
                                    <li>convenient side storage</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Customer / Market Info">
                    <p class="title margin-none">Customer / Market Info:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <p class="margin-none">Profession: Emergency Medical Services at Hunters Ambulance</p>
                                <p class="margin-none">Location: Connecticut</p>
                                <p>Bio: Works over 40 hours, grinds for any overtime pay. A student in the medical field working as a first responder finds themselves always on the go. In need of a work boot that wouldn’t be so expensive yet more durable.</p>
                                <p class="text-center fst-italic">“You never truly know how a patient is going to react or how bad a scene could be.” - WLR</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Mood Board">
                    <p class="title margin-none">Mood Board:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <img class="w-100 max-width-700px d-block margin-l-r-auto border-r-5" src="<?php echo EmsfootwearConstants::$img2?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Concept Summary">
                    <p class="title margin-none">Concept Summary:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <p>This collection was focused on the need to always be prepared on the job as a first responder. Paying tribute to those who are always on their feet, ensuring for a more comfortable, safer practice.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Design Development">
                    <p class="title margin-none">Design Development:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 vertical-align-middle margin-t-b-10">
                                        <img class="w-100 max-width-900px d-block margin-l-r-auto border-r-5 border-blue" src="<?php echo EmsfootwearConstants::$img3?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 vertical-align-middle margin-t-b-10">
                                        <img class="w-100 max-width-900px d-block margin-l-r-auto border-r-5 border-blue" src="<?php echo EmsfootwearConstants::$img4?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-6 vertical-align-middle margin-t-b-10">
                                        <img class="w-100 max-width-700px d-block margin-l-r-auto border-r-5 border-blue" src="<?php echo EmsfootwearConstants::$img5?>">
                                    </div>
                                    <div class="col-12 col-lg-6 vertical-align-middle margin-t-b-10">
                                        <img class="w-100 max-width-700px d-block margin-l-r-auto border-r-5 border-blue" src="<?php echo EmsfootwearConstants::$img6?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-6 vertical-align-middle margin-t-b-10">
                                        <img class="w-100 max-width-700px d-block margin-l-r-auto border-r-5 border-blue" src="<?php echo EmsfootwearConstants::$img7?>">
                                    </div>
                                    <div class="col-12 col-lg-6 vertical-align-middle margin-t-b-10">
                                        <img class="w-100 max-width-700px d-block margin-l-r-auto border-r-5 border-blue" src="<?php echo EmsfootwearConstants::$img8?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 vertical-align-middle margin-t-b-10">
                                        <img class="w-100 max-width-900px d-block margin-l-r-auto border-r-5 border-blue" src="<?php echo EmsfootwearConstants::$img9?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Final Shoe">
                    <p class="title margin-none">Final Shoe:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <img class="w-100 max-width-900px d-block margin-l-r-auto border-r-5 border-blue" src="<?php echo EmsfootwearConstants::$img10?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Material Board">
                    <p class="title margin-none">Material Board:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <img class="w-100 max-width-900px d-block margin-l-r-auto border-r-5 border-blue" src="<?php echo EmsfootwearConstants::$img11?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="The Collection">
                    <p class="title margin-none">The Collection:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12 margin-t-b-10">
                                <img class="w-100 max-width-900px d-block margin-l-r-auto border-r-5 border-blue" src="<?php echo EmsfootwearConstants::$img12?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 margin-t-b-10">
                                <img class="w-100 max-width-900px d-block margin-l-r-auto border-r-5 border-blue" src="<?php echo EmsfootwearConstants::$img13?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="The Process">
                    <p class="title margin-none">The Process:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12 margin-t-b-10">
                                <img class="w-100 max-width-900px d-block margin-l-r-auto border-r-5 border-blue" src="<?php echo EmsfootwearConstants::$img14?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 margin-t-b-10">
                                <img class="w-100 max-width-900px d-block margin-l-r-auto border-r-5 border-blue" src="<?php echo EmsfootwearConstants::$img15?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 margin-t-b-10">
                                <img class="w-100 max-width-900px d-block margin-l-r-auto border-r-5 border-blue" src="<?php echo EmsfootwearConstants::$img16?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 margin-t-b-10">
                                <p class="margin-none">Process from left to right:</p>
                                <ol>
                                    <li>Patterning/ Trace and cut out materials.</li>
                                    <li>Skive patterned pieces.</li>
                                    <li>Sew upper body, Lateral gusset pockets and medial straps.</li>
                                    <li>Double stitch the vamp to the quarters.</li>
                                    <li>Sew up lining to the upper at the top line.</li>
                                    <li>Sew the tongue together with thin padding.</li>
                                    <li>Last the lining first to apply Counter stiffener and toe stiffener.</li>
                                    <li>Wait 24 hours for stiffener to set.</li>
                                    <li>Last the uppers, glue down the lasting allowance then sand it flush.</li>
                                    <li>Glue cork to fill in the gam, sand that flush.</li>
                                    <li>Build soles with EVA foam sheets, treads.</li>
                                    <li>Embroider lateral heel decorations, backed with thin lining leather.</li>
                                    <li>Cut out star for the embroidery to show.</li>
                                    <li>Glue together then sew along the edge of the star.</li>
                                    <li>Sew the lateral heel decorations to the sole wraps.</li>
                                    <li>Sew the ends together, then glue to the sole.</li>
                                    <li>De-last Boots, wear and enjoy.</li>
                                </ol>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-xl-6 vertical-align-middle margin-t-b-10">
                                <img class="w-100 max-width-900px d-block margin-l-r-auto border-r-5 border-blue" src="<?php echo EmsfootwearConstants::$img17?>">
                            </div>
                            <div class="col-12 col-xl-6 vertical-align-middle margin-t-b-10">
                                <img class="w-100 max-width-900px d-block margin-l-r-auto border-r-5 border-blue" src="<?php echo EmsfootwearConstants::$img18?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-xl-6 vertical-align-middle margin-t-b-10">
                                <img class="w-100 max-width-900px d-block margin-l-r-auto border-r-5 border-blue" src="<?php echo EmsfootwearConstants::$img19?>">
                            </div>
                            <div class="col-12 col-xl-6 vertical-align-middle margin-t-b-10">
                                <img class="w-100 max-width-900px d-block margin-l-r-auto border-r-5 border-blue" src="<?php echo EmsfootwearConstants::$img20?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 vertical-align-middle margin-t-b-10">
                                <img class="w-100 max-width-900px d-block margin-l-r-auto border-r-5 border-blue" src="<?php echo EmsfootwearConstants::$img21?>">
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