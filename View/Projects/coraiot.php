<?php 
    $pageTitle = "Cora IOT";

    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/allowDirectCall.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/globalErrorHandler.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Projects/CoraIotConstants.php");
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
        <link rel="stylesheet" href="<?php echo ProjectConstants::$indexCss?>">
    </head>
    <body>  
        <div id="table-of-contents-container"></div>
        <div class="project-main-container navbar-removeable-section">
            <div class="100-Vw-Vh">
                <img class="img-fill-container-cover" src="<?php echo CoraIotConstants::$titlePicImg?>">
            </div>
            <div class="project-main">
                <div class="section">
                    <p class="title margin-none">Table of Contents:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <ol class="margin-none">
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="The Goal">The Goal</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="The Team">The Team</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Market Research">Market Research</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Material Manufacturing">Material Manufacturing</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Biomaterials Utilized">Biomaterials Utilized</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Sketches">Sketches</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Bill of Materials">Bill of Materials</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Final Product">Final Product</span></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="The Goal">
                    <p class="title margin-none">The Goal:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <p class="text-center">Design an opportunity that would eliminate clutter within the workspace that encourages organization, environment, and focus.</p>
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
                                <p class="text-center margin-none">GiGi Romero</p>
                                <p class="text-center margin-none">Henry Bell</p>
                                <p class="text-center margin-none">Shenghui Hu</p>
                                <p class="text-center margin-none">Isha Beniwal</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Market Research">
                    <p class="title margin-none">Market Research:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <p class="margin-t-10 sub-title">Subwoofer</p>
                                <div class="row">
                                    <div class="col-12 col-md-6 margin-t-b-10">
                                        <div class="border-blue padding-5 h-100">
                                            <p class="font-weight-300 text-center margin-none">Sonos</p>
                                            <img class="w-100 border-r-5" src="<?php echo CoraIotConstants::$img1?>">
                                            <p class="margin-10">Sonos SUB as their speakers face each other to cancel out rattle and vibration, resulting in a clearer sound.</p>               
                                        </div>  
                                    </div>
                                    <div class="col-12 col-md-6 margin-t-b-10">
                                        <div class="border-blue padding-5 h-100">
                                            <p class="font-weight-300 text-center margin-none">Bang & Olufsen</p>
                                            <img class="w-100 border-r-5" src="<?php echo CoraIotConstants::$img2?>">
                                            <p class="margin-10">Speakers are interchangeable and interconnectable. Allowing user to add more speakers and create unique shapes. We took inspiration from these speakers for the form of our design.</p>               
                                        </div>  
                                    </div>
                                    <div class="col-12 margin-t-b-10">
                                        <div class="border-blue padding-5 h-100">
                                            <img class="w-100 border-r-5 max-width-500px d-block margin-l-r-auto" src="<?php echo CoraIotConstants::$img3?>">
                                            <div class="margin-10 text-center">
                                                <p>The Speaker/Subwoofer that our team decided to pursue would be suitable to use in our design due to it's specifications necessary for our sound desired quality.</p>  
                                                <p class="margin-none">The size: Speaker 2” Subwoofer 3”</p>             
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="margin-t-10 sub-title">Technologies</p>
                                <div class="row">
                                    <div class="col-12 margin-t-b-10">
                                        <div class="border-blue padding-5 h-100">
                                            <img class="w-100 max-width-500px d-block margin-l-r-auto border-r-5" src="<?php echo CoraIotConstants::$img4?>">
                                            <p class="font-weight-300 text-left margin-none">Inductive Phone Charger</p>
                                            <p class="margin-none indent">Brand: BesTech Power Co.</p>    
                                            <p class="indent">Charging time 3-5 hours (same as charging from wall outlet).</p>  
                                            <p class="font-weight-300 text-left margin-none">Bluetooth Chip</p>
                                            <p class="indent">The bluetooth chip will allow for wireless music streaming to the speaker.</p> 
                                            <p class="font-weight-300 text-left margin-none">Qi Charger Components</p>
                                            <p class="indent">Wireless power transfer using inductive charging over distances up to 4cm (1.6in).</p>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Material Manufacturing">
                    <p class="title margin-none">Material Manufacturing:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <p class="margin-t-10 sub-title">High Performance Dye Casting (HPDC) - Used in the monitor stand</p>
                                <div class="row">
                                    <div class="col-12 margin-t-b-10">
                                        <p>HPDC is a metal forming process that molds molten metal under high pressure. Needed for geometrically complex or intricate parts, with similar results to injection molding. This would be used for the execution of the monitor stand.</p>
                                        <p class="margin-none">Benefits: This is a greatly process choice for high volume low cost metal parts with excellent durability, good strength to weight characteristics.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <p class="margin-t-10 sub-title">Investment Casting</p>
                                <div class="row">
                                    <div class="col-12 margin-t-b-10">
                                        <p>Investment casting is a manufacturing process in which a wax pattern is coated with a refractory ceramic material. Once the ceramic material is hardened its internal geometry takes the shape of casting. The wax is melted out and molten metal is poured into the cavity where the wax pattern was. This process will be used to create the speaker/subwoofer skeleton.</p>
                                        <p class="margin-none">Benefits: Yields precision parts one-off or high volume production without expensive tooling.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <p class="margin-t-10 sub-title">Injection Molding</p>
                                <div class="row">
                                    <div class="col-12 margin-t-b-10">
                                        <p>Granular plastic is fed by a forced ram from a hopper into a heated barrel. As the granules are slowly moved forward by a screw-type plunger, the plastic is forced into a heated chamber where it is melted. As the plunger moves melted plastic is forced through a nozzle that rests against the mould, allowing it to enter the mould cavity through a gate and runner system. This will be used for the speaker housing.</p>
                                        <p class="margin-none">Benefits: Ability to create complex geometry and detailed features for both interior and exterior. High efficiency, strong, durable parts, reduced manufacturing cost.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <p class="margin-t-10 sub-title">Hydroforming</p>
                                <div class="row">
                                    <div class="col-12 margin-t-b-10">
                                        <p>Sheet hydroforming uses one die and a sheet of metal; the blank sheetis driven into the die by high pressure water on one side of the sheet forming the desired shape. This will be used for the wireless charger housing.</p>
                                        <p class="margin-none">Benefits: High surface quality, higher surface strength than other processes.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <p class="margin-t-10 sub-title">Computer Numerical Control (CNC)</p>
                                <div class="row">
                                    <div class="col-12 margin-t-b-10">
                                        <p>A CNC router is a router that can cut in all shapes and sizes. The cutting bit can move up to 5 axis's to achieve a complex 3D movements and cut out the base of inductive charger, and the base of the speakers.</p>
                                        <p class="margin-none">Benefits: Can be ran continuously 24/7. Parts created using CNC can be made multiple times with the exact same precision.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Biomaterials Utilized">
                    <p class="title margin-none">Biomaterials Utilized:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <p class="text-center margin-none"><span class="font-weight-300">Cork:</span> Hydrophobic, Recyclable, Sustainable, Harvesting</p>
                                <p class="text-center margin-none"><span class="font-weight-300">Recycled Aluminum:</span> Recyclable, Abundant, Non-Toxic</p>
                                <p class="text-center margin-none"><span class="font-weight-300">Polypropylene:</span> Recyclable, No Toxic Waste, Lightweight</p>
                                <p class="text-center margin-none"><span class="font-weight-300">Soybean Fiber:</span> Renewable, Easy To Dye, Hydrophobic, Organic</p>
                                <p class="text-center margin-none"><span class="font-weight-300">Silicone Rubber:</span> Grip, Heat Resistant, Shock Absorption</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Sketches">
                    <p class="title margin-none">Sketches:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <img class="w-100 border-r-5" src="<?php echo CoraIotConstants::$img5?>">
                            </div>
                            <div class="col-12 col-md-6">
                                <img class="w-100 border-r-5" src="<?php echo CoraIotConstants::$img6?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Bill of Materials">
                    <p class="title margin-none">Bill of Materials:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <img class="w-100 max-width-700px d-block margin-l-r-auto border-r-5" src="<?php echo CoraIotConstants::$img7?>">
                            </div>
                            <div class="col-12 margin-t-10 overflow-auto">
                                <table class="blue-table">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Part #</th>
                                            <th>Name</th>
                                            <th>Material</th>
                                            <th>Process</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Top</td>
                                            <td>Aluminum</td>
                                            <td>Hydroforming</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Motherboard</td>
                                            <td>N/A</td>
                                            <td>N/A</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Qi Charging Board</td>
                                            <td>N/A</td>
                                            <td>N/A</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Bottom</td>
                                            <td>Aluminum</td>
                                            <td>Hydroforming</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row margin-t-b-10">
                            <div class="col-12">
                                <img class="w-100 max-width-700px d-block margin-l-r-auto border-r-5" src="<?php echo CoraIotConstants::$img9?>">
                            </div>
                            <div class="col-12 margin-t-10 overflow-auto">
                                <table class="blue-table">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Part #</th>
                                            <th>Name</th>
                                            <th>Material</th>
                                            <th>Process</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Cage Outer Shell</td>
                                            <td>Polypropylene</td>
                                            <td>Injection Molding</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Speakers x2</td>
                                            <td>N/A</td>
                                            <td>N/A</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Motherboard</td>
                                            <td>N/A</td>
                                            <td>N/A</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Bluetooth Chip</td>
                                            <td>N/A</td>
                                            <td>N/A</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Battery</td>
                                            <td>N/A</td>
                                            <td>N/A</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row margin-t-b-10">
                            <div class="col-12">
                                <img class="w-100 max-width-700px d-block margin-l-r-auto border-r-5" src="<?php echo CoraIotConstants::$img11?>">
                            </div>
                            <div class="col-12 margin-t-10 overflow-auto">
                                <table class="blue-table">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Part #</th>
                                            <th>Name</th>
                                            <th>Material</th>
                                            <th>Process</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Desk Riser</td>
                                            <td>Aluminum</td>
                                            <td>HDPC</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Speaker Shell</td>
                                            <td>Aluminum</td>
                                            <td>Investment Casting</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Charging Board</td>
                                            <td>Aluminum</td>
                                            <td>Hydroforming</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Woofer Shell</td>
                                            <td>Aluminum</td>
                                            <td>Investment Casting</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Woofer Inlay</td>
                                            <td>Soybean Fiber</td>
                                            <td>N/A</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Speaker Inlay</td>
                                            <td>Cork</td>
                                            <td>N/A</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Final Product">
                    <p class="title margin-none">Final Product:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12 col-lg-6 margin-t-b-10">
                                <img class="w-100 max-width-700px d-block margin-l-r-auto border-r-5" src="<?php echo CoraIotConstants::$img14?>">
                            </div>
                            <div class="col-12 col-lg-6 margin-t-b-10">
                                <img class="w-100 max-width-700px d-block margin-l-r-auto border-r-5" src="<?php echo CoraIotConstants::$img13?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6 margin-t-b-10">
                                <img class="w-100 max-width-700px d-block margin-l-r-auto border-r-5" src="<?php echo CoraIotConstants::$img15?>">
                            </div>
                            <div class="col-12 col-lg-6 margin-t-b-10">
                                <img class="w-100 max-width-700px d-block margin-l-r-auto border-r-5" src="<?php echo CoraIotConstants::$img16?>">
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