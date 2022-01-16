<?php 
    $pageTitle = "Cocoon Hub";

    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/allowDirectCall.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/globalErrorHandler.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Projects/HandtoolConstants.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/SqlVisitors.php");
    include_once(GlobalConstants::$rootPath . "/Controller/Shared/Logger.php");
    include_once(GlobalConstants::$rootPath . "/Controller/Shared/_defaultHeaders.php");

    Logger::Log("IP Remote/Forwarded (" . GlobalConstants::$ipRemote . "/" . GlobalConstants::$ipForwarded . ") entered the Handtool Project screen.", "Project_Handtool");
    SqlVisitors::SqlInsertVisitors();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once(GlobalConstants::$defaultHtmlHeadersLocation)?>
        <link rel="stylesheet" href="<?php echo ProjectConstants::$indexCss?>">
    </head>
    <body>  
        <div id="table-of-contents-container"></div>
        <div class="project-main-container navbar-removeable-section">
            <div class="100-Vw-Vh">
                <img class="img-fill-container-cover" src="<?php echo HandtoolConstants::$titlePicImg?>">
            </div>
            <div class="project-main">
                <div class="section">
                    <p class="title margin-none">Table of Contents:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <ol class="margin-none">
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="The Team">The Team</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Preliminary Research">Preliminary Research</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Power Source">Power Source</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Vacuum">Vacuum</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Images">Images</span></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="The Team">
                    <p class="title margin-none">The Team:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <p class="text-center margin-none">Michael Bower</p>
                                <p class="text-center margin-none">Christian Doyle</p>
                                <p class="text-center margin-none">Yunhoi Do</p>
                                <p class="text-center margin-none">Chitman Singh</p>
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
                                <p class="margin-none">Surveying 30 students within the SCAD Gulfstream workshop. Our objective was to solve an existing problem of debris going all over the workspace using the existing hand tools. After surveying, we decided to redesign the rotary tool. Sleek and comfortable, this hand tool would efficiently clean up as you're working.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Power Source">
                    <p class="title margin-none">Power Source:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <p class="margin-none">The hand tool would use a piezoelectric nano-generator which would convert mechanical energy into electricity.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Vacuum">
                    <p class="title margin-none">Vacuum:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <p class="margin-none">We have chosen to use the SX-1 by Binaca Pumps, which features low noise and vibration in the compact size of (mm): 32x18x8.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Images">
                    <p class="title margin-none">Images:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12 col-sm-6 margin-t-b-10">  
                                <img class="w-100 h-100 margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo HandtoolConstants::$img1?>">          
                            </div>
                            <div class="col-12 col-sm-6 margin-t-b-10">  
                                <img class="w-100 h-100 margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo HandtoolConstants::$img3?>">          
                            </div>                           
                        </div>
                        <div class="row">
                            <div class="col-12 margin-t-b-10">  
                                <img class="w-100 h-100 margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo HandtoolConstants::$img2?>">          
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 margin-t-b-10">  
                                <img class="w-100 h-100 margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo HandtoolConstants::$img4?>">          
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 margin-t-b-10">  
                                <img class="w-100 h-100 margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo HandtoolConstants::$img5?>">          
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 margin-t-b-10">  
                                <img class="w-100 h-100 margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo HandtoolConstants::$img6?>">          
                            </div>
                            <div class="col-12 col-sm-6 margin-t-b-10">  
                                <img class="w-100 h-100 margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo HandtoolConstants::$img7?>">          
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 margin-t-b-10">  
                                <img class="w-100 h-100 margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo HandtoolConstants::$img8?>">          
                            </div>
                            <div class="col-12 col-sm-6 margin-t-b-10">  
                                <img class="w-100 h-100 margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo HandtoolConstants::$img9?>">          
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 margin-t-b-10">  
                                <img class="w-100 h-100 margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo HandtoolConstants::$img10?>">          
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 margin-t-b-10">  
                                <img class="w-100 h-100 margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo HandtoolConstants::$img11?>">          
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 margin-t-b-10">  
                                <img class="w-100 h-100 margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo HandtoolConstants::$img12?>">          
                            </div>
                            <div class="col-12 col-sm-6 margin-t-b-10">  
                                <img class="w-100 h-100 margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo HandtoolConstants::$img13?>">          
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 margin-t-b-10">  
                                <img class="w-100 h-100 margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo HandtoolConstants::$img14?>">          
                            </div>
                            <div class="col-12 col-sm-6 margin-t-b-10">  
                                <img class="w-100 h-100 margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo HandtoolConstants::$img15?>">          
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 margin-t-b-10">  
                                <img class="w-100 h-100 margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo HandtoolConstants::$img16?>">          
                            </div>
                            <div class="col-12 col-sm-6 margin-t-b-10">  
                                <img class="w-100 h-100 margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo HandtoolConstants::$img17?>">          
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 margin-t-b-10">  
                                <img class="w-100 h-100 margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo HandtoolConstants::$img18?>">          
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
        <script type="text/javascript" src="<?php echo ProjectConstants::$tocJs?>"></script>
        <script type="text/javascript" src="<?php echo ProjectConstants::$indexJs?>"></script>
    </body>
</html>