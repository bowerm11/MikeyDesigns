<?php 
    $pageTitle = "Armada Home IOT";

    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/allowDirectCall.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/globalErrorHandler.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Projects/ArmadahomeiotConstants.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/SqlVisitors.php");
    include_once(GlobalConstants::$rootPath . "/Controller/Shared/Logger.php");
    include_once(GlobalConstants::$rootPath . "/Controller/Shared/_defaultHeaders.php");

    Logger::Log("IP Remote/Forwarded (" . GlobalConstants::$ipRemote . "/" . GlobalConstants::$ipForwarded . ") entered the Armada Home IOT Project screen.", "Project_ArmadaHomeIot");
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
                <img class="img-fill-container-cover" src="<?php echo ArmadaHomeIotConstants::$img1?>">
            </div>
            <div class="project-main">
                <div class="section">
                    <p class="title margin-none">Table of Contents:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <ol class="margin-none">
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Project Brief">Project Brief</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Team">Team</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Research">Research</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Internal Components Featured in our Design">Internal Components Featured in our Design</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Process Sketches">Process Sketches</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Final Product">Final Product</span></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Project Brief">
                    <p class="title margin-none">Project Brief:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <p class="text-center">The goal of this project is to design a plastic product housing containing internal features commonly used in “Internet of things” or IOT devices. The developmental process of injection molded parts such as ribs, bosses, snap fits, and other features are utilized. Following standard rules and guidelines for housing part breakup, mold parting line location, part wall thickness also consider manufacturing issues such as design for assembly, design for simplicity and design for disassembly.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Team">
                    <p class="title margin-none">Team:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <p class="text-center margin-none">Michael Bower</p>
                                <p class="text-center margin-none">GiGi Romero</p>
                                <p class="text-center margin-none">Daniel Saza</p>
                                <p class="text-center margin-none">Shenghui Hu</p>
                                <p class="text-center">Stephen Snyder</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Research">
                    <p class="title margin-none">Research:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <p class="margin-none margin-t-10 sub-title">Home Security Types</p>
                                <div class="row">
                                    <div class="col-12 col-lg-6 margin-t-b-10">
                                        <div class="h-100 border-blue">
                                            <div>
                                                <img class="w-100 h-100 max-width-300px margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover" src="<?php echo ArmadaHomeIotConstants::$img2?>">
                                                <p class="text-center font-weight-300">Omna 180 HD Cam</p>
                                                <p class="text-center margin-none">Can record clips on optional SD cards.</p>
                                                <p class="text-center margin-none">LED IR lights to see 16ft in total darkness.</p>
                                                <p class="text-center margin-none">Built in speaker and microphone for two way chatting.</p>
                                                <p class="text-center">180 degree full HD camera.</p>
                                            </div>
                                        </div>                                       
                                    </div>
                                    <div class="col-12 col-lg-6 margin-t-b-10">    
                                        <div class="h-100 border-blue">
                                            <div>
                                                <img class="w-100 h-100 max-width-500px margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover" src="<?php echo ArmadaHomeIotConstants::$img3?>">
                                                <p class="text-center font-weight-300">EZVIZ Mini 360 Plus</p>
                                                <p class="text-center margin-none">Full - Room Coverage with an easy setup.</p>
                                                <p class="text-center margin-none">HD camera with great color and sharp details.</p>
                                                <p class="text-center margin-none">Remote controlled from the app on the users phone.</p>
                                                <p class="text-center">Privacy mask to cover the lens when users wish to not be recorded.</p>
                                                <p class="text-center font-weight-300">Technology</p>
                                                <p class="text-center margin-none">Motorized 360 degree camera to follow any moving object.</p>
                                                <p class="text-center margin-none">The camera itself only has 92 degree of view.</p>
                                                <p class="text-center margin-none">The software uses mention detecting technology to alert the user when the camera is capturing something moving in the area.</p>
                                                <p class="text-center margin-none">Cloud storage options where the camera can send the video to the company's serves if the user pays for it, or a micro SD card can be used with as much as 128 gb of storage.</p>
                                                <p class="text-center">The app is intuitive with controls for the user to be able to personally control where the camera is viewing.</p>
                                            </div>            
                                        </div>                                    
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-6 margin-t-b-10">
                                        <div class="h-100 border-blue">
                                            <div>
                                                <img class="w-100 h-100 max-width-300px margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover" src="<?php echo ArmadaHomeIotConstants::$img4?>">
                                                <p class="text-center font-weight-300">iCamera Keep Pro</p>
                                                <p class="text-center margin-none">Motion Tracking Technology to follow motion around the house.</p>
                                                <p class="text-center margin-none">Integrated Carbon Monoxide and Smoke alarm detection.</p>
                                                <p class="text-center margin-none">Custom activity zones to minimize false alarms.</p>
                                                <p class="text-center margin-none">Night Vision.</p>
                                                <p class="text-center">2-Way Audio.</p>
                                                <p class="text-center font-weight-300">Technology</p>
                                                <p class="text-center margin-none">350 degree camera uses electric motors to track motion throughout the house.</p>
                                                <p class="text-center margin-none">The camera can pan up and down 40 degrees to make sure that it is capturing whatever is happening.</p>
                                                <p class="text-center">Patented alarm sound recognition to alert the homeowner as soon as a fire/ Carbon monoxide alarm goes off in the house.</p>
                                            </div>           
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 margin-t-b-10">
                                        <div class="h-100 border-blue">
                                            <div>
                                                <img class="w-100 h-100 max-width-300px margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover" src="<?php echo ArmadaHomeIotConstants::$img5?>">
                                                <p class="text-center font-weight-300">Homeboy</p>
                                                <p class="text-center margin-none">3 month long rechargeable battery life.</p>
                                                <p class="text-center margin-none">Runs on existing Wi-Fi network without any additional hardware.</p>
                                                <p class="text-center margin-none">Integrated installing magnets.</p>
                                                <p class="text-center margin-none">Motion Sensing with built-in lighting.</p>
                                                <p class="text-center margin-none">Motion alerts and audio alarms from user's phone.</p>
                                                <p class="text-center">Built in SD card slot to record footage.</p>
                                                <p class="text-center font-weight-300">Technology</p>
                                                <p class="text-center margin-none">Homeboy uses GPS tracking software to arm and disarm itself automatically when the user comes home or leaves.</p>
                                                <p class="text-center margin-none">While only saving the video to an SD card, the camera does not use a lot of bandwidth as other security systems that are constantly sending video feed to the cloud.</p>
                                                <p class="text-center margin-none">Lower resolution camera. (640x480 rather than the standard the standard 720p or 1080p resolutions).</p>
                                                <p class="text-center">Built in lithium ion battery.</p>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Internal Components Featured in our Design">
                    <p class="title margin-none">Internal Components Featured in Our Design:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-lg-6 margin-t-b-10">
                                        <div class="h-100 border-blue">
                                            <div>
                                                <img class="w-100 h-100 max-width-700px margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover" src="<?php echo ArmadaHomeIotConstants::$img6?>">
                                                <p class="text-center font-weight-300">Amazon's Alexa 7 Mic Array</p>
                                                <p class="text-center margin-none">Includes far field voice recognition.</p>
                                                <p class="text-center margin-none">Alexa wake word technology.</p>
                                                <p class="text-center margin-none">Compatible with leading chipsets.</p>
                                                <p class="text-center">Connects to shared Raspberry Pi Motherboard.</p>
                                            </div>
                                        </div>                                       
                                    </div>
                                    <div class="col-12 col-lg-6 margin-t-b-10">    
                                        <div class="h-100 border-blue">
                                            <div>
                                                <img class="w-100 h-100 max-width-500px margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover" src="<?php echo ArmadaHomeIotConstants::$img7?>">
                                                <p class="text-center font-weight-300">Vifa 2.5” Woofer</p>
                                                <p class="text-center margin-none">Overall Outside Diameter 3.33”.</p>
                                                <p class="text-center margin-none">Baffle  Cutout Diameter 2.25”.</p>
                                                <p class="text-center margin-none">Depth 2.02”.</p>
                                                <p class="text-center">3 mounting holes.</p>
                                            </div>            
                                        </div>                                    
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="border-blue">
                                            <div>
                                                <img class="w-100 h-100 max-width-500px margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover" src="<?php echo ArmadaHomeIotConstants::$img8?>">
                                                <p class="text-center font-weight-300">Raspberry Pi 3 Model B</p>
                                                <p class="text-center margin-none">Quad Core 1.2GHz Broadcom BCM2837 64bit CPU 1GB RAM</p>
                                                <p class="text-center margin-none">BCM43438 wireless LAN and Bluetooth Low</p>
                                                <p class="text-center margin-none">Energy (BLE) in board</p>
                                                <p class="text-center margin-none">40-pin extended GPIO</p>
                                                <p class="text-center margin-none">4 USB 2 ports</p>
                                                <p class="text-center margin-none">4 Pole stereo output and composite video port</p>
                                                <p class="text-center margin-none">CSI camera port</p>
                                                <p class="text-center margin-none">DSI display port</p>
                                                <p class="text-center margin-none">Micro SD port</p>
                                                <p class="text-center margin-none">Upgraded switched Micro USB power source up to 2.5A</p>
                                                <p class="text-center">Board Thickness 1.6mm</p>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                <div class="row margin-t-b-10">
                                    <div class="col-12">
                                        <p class="margin-none margin-t-10 sub-title">Why would consumers want our product?</p>
                                        <p class="text-center margin-none">Backup Lithium ion batteries built-in incase of a power outage.</p>
                                        <p class="text-center margin-none">SD card and USB slots internally for the user to have a choice in storage (from 32GB to 2TB).</p>
                                        <p class="text-center margin-none">Modern design with LED lights that change for motion detection alerts.</p>
                                        <p class="text-center margin-none">Stereo Speakers built in to support music streaming along with a voice assistant to help users hands free.</p>
                                        <p class="text-center">App designed to give the user control over the camera's different features and options along with a way to view a livestream from the device.</p>
                                    </div>
                                </div>
                                <div class="row margin-t-b-10">
                                    <div class="col-12">
                                        <p class="margin-none margin-t-10 sub-title">Injection Molded Process</p>
                                        <img class="w-100 max-width-700px margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover" src="<?php echo ArmadaHomeIotConstants::$img11?>">
                                        <p class="text-center margin-none">The model will be injection molded into 3 different pieces: bottom, top front, and back front1. Both of the top pieces will need many injection pins to have all of the holes necessary for the camera to protrude as well as the speakers to emit sound properly. On the bottom plate, the rubber feet can be over-molded onto the cavity to secure non-slipping.</p>
                                    </div>
                                </div>
                                <div class="row margin-t-b-10">
                                    <div class="col-12">
                                        <p class="margin-none margin-t-10 sub-title">Feet Over-Molding Process</p>
                                        <img class="w-100 max-width-700px margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover" src="<?php echo ArmadaHomeIotConstants::$img12?>">
                                        <p class="text-center margin-none">On the bottom plate, the rubber feet would be over-molded onto the cavity to secure non-slipping.</p>
                                    </div>
                                </div>
                                <div class="row margin-t-b-10">
                                    <div class="col-12">
                                        <p class="margin-none margin-t-10 sub-title">Materials</p>
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <div class="h-100 border-blue">
                                                    <div>
                                                        <p class="text-center font-weight-300">Acrylonitrile butadiene styrene (ABS)</p>
                                                        <img class="w-100 max-width-500px margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover border-r-5" src="<?php echo ArmadaHomeIotConstants::$img9?>">
                                                        <p class="text-center margin-none">Known as the workhouse of the industry. Reliable, resistant and versatile; ABS presents as the most suitable material to house the internal components.</p>
                                                    </div>
                                                </div>            
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="h-100 border-blue">
                                                    <div>
                                                        <p class="text-center font-weight-300">Thermoplastic Polyurethane (TPU)</p>
                                                        <img class="w-100 max-width-500px margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover border-r-5" src="<?php echo ArmadaHomeIotConstants::$img10?>">
                                                        <p class="text-center margin-none">Used for the feet of the housing. TPU is resistant to grease for abrasion making it the perfect material to keep the device in place while being on the versatile surfaces. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Process Sketches">
                    <p class="title margin-none">Process Sketches:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <img class="w-100 max-width-900px margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover border-r-5" src="<?php echo ArmadaHomeIotConstants::$img13?>">
                            </div>
                            <div class="col-12">
                                <img class="w-100 max-width-900px margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover border-r-5" src="<?php echo ArmadaHomeIotConstants::$img14?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Final Product">
                    <p class="title margin-none">Final Product:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12 col-xl-6 vertical-align-middle margin-t-b-10">
                                <img class="w-100 max-width-900px margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover border-r-5" src="<?php echo ArmadaHomeIotConstants::$img15?>">
                            </div>
                            <div class="col-12 col-xl-6 vertical-align-middle margin-t-b-10">
                                <img class="w-100 max-width-900px margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover border-r-5" src="<?php echo ArmadaHomeIotConstants::$img16?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-xl-6 vertical-align-middle margin-t-b-10">
                                <img class="w-100 max-width-900px margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover border-r-5" src="<?php echo ArmadaHomeIotConstants::$img17?>">
                            </div>
                            <div class="col-12 col-xl-6 vertical-align-middle margin-t-b-10">
                                <img class="w-100 max-width-900px margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover border-r-5" src="<?php echo ArmadaHomeIotConstants::$img18?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-xl-6 vertical-align-middle margin-t-b-10">
                                <img class="w-100 max-width-900px margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover border-r-5" src="<?php echo ArmadaHomeIotConstants::$img19?>">
                            </div>
                            <div class="col-12 col-xl-6 vertical-align-middle margin-t-b-10">
                                <img class="w-100 max-width-900px margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover border-r-5" src="<?php echo ArmadaHomeIotConstants::$img20?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 margin-t-b-10">
                                <img class="w-100 max-width-500px margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover border-r-5" src="<?php echo ArmadaHomeIotConstants::$img21?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 margin-t-b-10">
                                <img class="w-100 max-width-900px margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover border-r-5" src="<?php echo ArmadaHomeIotConstants::$img22?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-xl-6 vertical-align-middle margin-t-b-10">
                                <img class="w-100 max-width-900px margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover border-r-5" src="<?php echo ArmadaHomeIotConstants::$img23?>">
                            </div>
                            <div class="col-12 col-xl-6 vertical-align-middle margin-t-b-10">
                                <img class="w-100 max-width-900px margin-l-r-auto margin-t-b-10 d-block img-fill-container-cover border-r-5" src="<?php echo ArmadaHomeIotConstants::$img24?>">
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