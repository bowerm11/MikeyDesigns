<?php 
    $pageTitle = "Cocoon Hub";

    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/allowDirectCall.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/globalErrorHandler.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Projects/CocoonhubConstants.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/Shared/SqlVisitors.php");
    include_once(GlobalConstants::$rootPath . "/Controller/Shared/Logger.php");
    include_once(GlobalConstants::$rootPath . "/Controller/Shared/_defaultHeaders.php");

    Logger::Log("IP Remote/Forwarded (" . GlobalConstants::$ipRemote . "/" . GlobalConstants::$ipForwarded . ") entered the Cocoonhub Project screen.", "Project_Cocoonhub");
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
                <img class="img-fill-container-cover" src="<?php echo CocoonhubConstants::$img21?>">
            </div>
            <div class="project-main">
                <div class="section">
                    <p class="title margin-none">Table of Contents:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <ol class="margin-none">
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Mission Statement">Mission Statement</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Need vs Want">Need vs. Want</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Client: Donald Lombardi">Client: Donald Lombardi</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Profile: Peter Provonost">Profile: Peter Provonost</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Initial Research">Initial Research</span>
                                        <ul>
                                            <li><span class="toc-list">What's on Market</span></li>
                                            <li><span class="toc-list">HACs vs HAIs</span></li>
                                            <li><span class="toc-list">Meyer Children’s Hospital CLABSI Study</span></li>
                                            <li><span class="toc-list">CVC Classifications</span></li>
                                            <li><span class="toc-list">Types of CVCs</span></li>
                                            <li><span class="toc-list">Applications</span></li>
                                            <li><span class="toc-list">CVC Parts</span></li>
                                            <li><span class="toc-list">CVC Kits</span></li>
                                            <li><span class="toc-list">Luer Fittings</span></li>
                                            <li><span class="toc-list">Stem Types</span></li>
                                            <li><span class="toc-list">Cap Based Concepts</span></li>
                                        </ul>
                                    </li>
                                </ol>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <ol start="6">
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Product Overview">Product Overview</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Justification">Justification</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Concept Sketches">Concept Sketches</span></li>
                                    <li><span class="toc-list js-toc-goto" data-goto-content-item="Recap">Recap</span></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Mission Statement">
                    <p class="title margin-none">Mission Statement:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <p>CLABSIs are the most common healthcare-associated infection passed to pediatric patients. Medical device manufacturers can not justify the cost of developing purpose-build devices for children because the window for using the product is to small to be profitable.</p>
                                <p class="margin-none">Any device designed to prevent CLABSI needs to be simple, sanitary, universal, and mass producible with potential applications that go beyond the initial intended function.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Need vs Want">
                    <p class="title margin-none">Need vs Want:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <table class="blue-table">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Need</th>
                                            <th>Want</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>A device that provides an anti-microbial barrier for a hub connector on a central line while allowing a line to be connected to feed the hub.</td>
                                            <td>A device that provides a streamlined work flow for nurses and patients in order to make care as easy as possible.</td>
                                        </tr>
                                        <tr>
                                            <td>This device must close completely.</td>
                                            <td>Low manufacturing costs (<$4.00).</td>
                                        </tr>
                                        <tr>
                                            <td>The device must protect the patient from infections no matter where the enclosure ends up.</td>
                                            <td>Universal fit for all CVCs.</td>
                                        </tr>
                                        <tr>
                                            <td>Must not be a choking hazard.</td>
                                            <td>Soft, durable material for comfort.</td>
                                        </tr>
                                        <tr>
                                            <td>Disposable.</td>
                                            <td>Additional features and applications: a tubing pincher, temporary valve.</td>
                                        </tr>
                                        <tr>
                                            <td>Materials must be GRAS for medical devices.</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section d-flex js-toc-content-item" data-toc-title="Client: Donald Lombardi">
                    <div class="container margin-t-b-10">
                        <div class="row h-100">
                            <div class="col-sm-12 col-md-6">
                                <p class="title margin-none">Client: Donald Lombardi</p>
                                <div class="seperator-line"></div>
                                <p class="margin-t-10 sub-title">Founder and President</p>
                                <p class="sub-title margin-none">Vision:</p>
                                <p>To create a world where infants and children have the highest quality medicines and medical devices designed specifically for their needs to improve their length and quality of life.</p>
                                <p class="sub-title margin-none">Education:</p>
                                <p>Amherst College, BA, Bioplastic / MIT, MS, Life Sciences Activities and Societies.</p>
                                <p class="sub-title margin-none">Professional Career:</p>
                                <p>Founder of Chintin Company Inc. Chief Intellectual Property Officer, Children Hospital Boston. Institute for Pediatric Innovation, Founder and President. Assistant Professor of Pediatrics, Tufts University School of Medicine.</p>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <img class="img-fill-container-cover h-100 w-100 border-r-5" src="<?php echo CocoonhubConstants::$img7?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section d-flex js-toc-content-item" data-toc-title="Profile: Peter Provonost">
                    <div class="container margin-t-b-10">
                        <div class="row h-100">
                            <div class="col-sm-12 col-md-6 order-1 order-md-0">
                                <img class="img-fill-container-cover h-100 w-100 border-r-5" src="<?php echo CocoonhubConstants::$img28?>">
                            </div>
                            <div class="col-sm-12 col-md-6 order-0 order-md-1">
                                <p class="title margin-none">Profile: Peter Pronovost</p>
                                <div class="seperator-line"></div>
                                <p class="margin-t-10 sub-title">Champion of Checklists in Critical Care</p>
                                <p class="sub-title margin-none">Vision:</p>
                                <p class="margin-none">Have a world that follows a simple checklist protocols for infection prevention when inserting a central venous catheter to reduce infection. That checklist being:</p>
                                <ol>
                                    <li>Wash their hands with soap.</li>
                                    <li>Clean the patient's skin with chlorhexidine antiseptic.</li>
                                    <li>Put sterile drapes over the entire patient.</li>
                                    <li>Wear a sterile mask, hat, gown, and gloves.</li>
                                    <li>Put a sterile dressing over the catheter site.</li>
                                </ol>
                                <p class="sub-title margin-none">Education:</p>
                                <p>Intensive Care Specialist, John Hopkins Hospital, Baltimore, Maryland.</p>
                                <p class="sub-title margin-none">Professional Career:</p>
                                <p>Anesthesiology and Critical Care Medicine Professor, Medical Director for the Center of Innovation in Quality Patient Care.</p>
                            </div>        
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Initial Research">
                    <p class="title margin-none">Initial Research:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <p class="margin-t-10 sub-title">What's on the Market</p>
                                <img class="img-fill-container-cover border-r-5" src="<?php echo CocoonhubConstants::$img11?>">
                                <p>Patent 0333680 presents a catheter protection device having a first housing portion and a second housing portion and a second housing portion define a hollow interior between them; A single use, germicide filled enclosure that can be clamped over the central line hub and any line that feeds into the hub.</p>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <img class="w-100 border-r-5 d-block margin-l-r-auto max-width-300px" src="<?php echo CocoonhubConstants::$img29?>">
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <img class="w-100 border-r-5" src="<?php echo CocoonhubConstants::$img12?>">
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <img class="w-100 border-r-5" src="<?php echo CocoonhubConstants::$img8?>">
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="margin-t-10 sub-title">HACs vs HAIs</p>
                                <table class="blue-table">
                                    <thead>
                                        <tr class="text-center">
                                            <th>HACs</th>
                                            <th>HAIs</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>An undesired Situation or condition affecting patient that arises during a stay in a hospital or medical facility.</td>
                                            <td>An infection that develops as a result of medical care. The most infections associated with healthcare can be divided into four categories; catheter-associated urinary tract infections, bloodstream infections, surgical site infections and pneumonia.</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="blue-table">
                                    <thead>
                                        <tr class="text-center">
                                            <th>CLABSIs</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>A serious infection that occurs when germs (bacteria, viruses, fungi) enter the bloodstream through central line. Symptoms include a fever, red skin and soreness around the central line.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="margin-t-10 sub-title">Meyer Children's Hospital CLABSI Study</p>
                                <ol>
                                    <li>CLABSIs are the most common healthcare-associated infection in childhood.</li>
                                    <li>CLABSI Rate 3.73 / 1,000.</li>
                                    <li>Average Age: 21 Months.</li>
                                    <li>Average CVC days: 4</li>
                                    <li>Participants:
                                        <ul>
                                            <li>388 Children</li>
                                            <li>7783 Catheter Observation Days</li>
                                        </ul>
                                    </li>
                                    <li>CLABSI Cases:
                                        <ul>
                                            <li>29 Cases in 26 Children</li>
                                        </ul>
                                    </li>
                                    <li>Average Cost to the Hospital:
                                        <ul>
                                            <li>$45,000</li>
                                        </ul>
                                    </li> 
                                    <li>Most common Bacterial and viral causes of CLABSI:
                                        <ul>
                                            <li>Enterobacteriacae 20%</li>
                                            <li>Candida spp 24.1%</li>
                                            <li>Staphylococcus 13.8%</li>
                                        </ul>
                                    </li> 
                                    <li>CLABSI rates are highest among females and patients with underlying medical conditions.</li>
                                    <li>Underlying Condition Rate 5.42/1,000</li>
                                    <li>Intensive Care Unit Rate 5.42/1,000</li>
                                    <li>Medical Wards Rate 5.69/1,000</li>
                                    <li>Most common underlying conditions:
                                        <ul>
                                            <li>Medical 34.8%</li>
                                            <li>Oncological 30.4%</li>
                                            <li>Surgical 29.9%</li>
                                            <li>Prematurity 4.9%</li>
                                        </ul>
                                    </li> 
                                </ol>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 h-100">
                                <p class="margin-t-10 sub-title">CVC Classifications</p>
                                <img class="w-100 border-r-5 margin-l-r-auto 100-Vw-Vh max-height-900px img-cover" src="<?php echo CocoonhubConstants::$img1?>">
                                <p class="font-weight-300 margin-none">Open Ended Catheters</p>
                                <p class="margin-none indent">The catheter is open at the distal tip.</p>
                                <p class="margin-none indent">The catheter requires clamping before entry into the system.</p>
                                <p class="margin-none indent">Clamps are usually built into the catheter.</p>
                                <p class="margin-none indent">Requires periodic flushing.</p>
                                <p class="indent">Any type of CVC can be open ended.</p>
                                <p class="font-weight-300 margin-none">Closed Ended Catheters</p>
                                <p class="margin-none indent">Valves may be placed distally or proximally.</p>
                                <p class="margin-none indent">Clamps are not required for built into the catheter since the valve is closed except during infusion or aspiration.</p>
                                <p class="margin-none indent">Short term CVCs cannot be closed ended.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="margin-t-10 sub-title">Types of CVCs</p>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 margin-t-b-10 h-inherit">
                                        <div class="border-blue padding-5 h-100">
                                            <p class="font-weight-300 margin-none">Short-term</p>
                                            <p class="margin-none indent">A short-term CVC is inserted into a large central vein through the skin. Can be sutured in place.</p>
                                            <ul class="indent">
                                                <li>Issues:
                                                    <ul>
                                                        <li>Highest risk for infection.</li>
                                                        <li>Can not be used at home.</li>
                                                        <li>High risk of insertion complications.</li>
                                                        <li>Can not be used for more than 14 days.</li>
                                                        <li>Easily dislodged.</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>                    
                                    </div>
                                    <div class="col-sm-12 col-md-6 margin-t-b-10 h-inherit">
                                        <div class="border-blue padding-5 h-100">
                                            <p class="font-weight-300 margin-none">PICC</p>
                                            <p class="margin-none indent">A CVC which is inserted into an extremity, typically in the cephalic, basilica or brachial veins of the upper arm.</p>
                                            <ul class="indent">
                                                <li>Issues:
                                                    <ul>
                                                        <li>Requires a dressing and frequent assessments.</li>
                                                        <li>External device.</li>
                                                        <li>Not compatible with all medications.</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>                      
                                    </div>
                                    <div class="col-sm-12 col-md-6 margin-t-b-10 h-inherit">
                                        <div class="border-blue padding-5 h-100">
                                            <p class="font-weight-300 margin-none">Tunneled Catheter</p>
                                            <p class="indent">A long-term CVC whose proximal end is tunneled subcutaneously from the insertion site and brought out through the skin at an exit site. It is an external device inserted in the OR or under fluoroscopy, and must be removed by a physician.</p>   
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 margin-t-b-10 h-inherit">
                                        <div class="border-blue padding-5 h-100">
                                            <p class="font-weight-300 margin-none">Implanted Venous Access</p>
                                            <p class="indent">A long-term single or dual chamber “port” surgically implanted in the subcutaneous tissue usually in the upper chest. Needle access is required, and a surgical procedure is required to insert and remove.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-12">
                                <p class="margin-t-10 sub-title">Applications</p>
                                <div class="w-100 h-100">
                                    <img class="w-100 border-r-5 d-block margin-l-r-auto max-width-500px" src="<?php echo CocoonhubConstants::$img2?>">
                                    <div class="margin-l-r-auto max-width-700px">
                                        <div class="border-blue background-blue blur">
                                            <ul>
                                                <li>Administer intravenous fluid and blood products.</li>
                                                <li>Administer Medication.</li>
                                                <li>Administer hypertonic solution (Total Parental Nutrition [TPN]), vesicants (chemotherapy), and solutions with extreme pH values (vancomycin).</li>
                                                <li>Venous blood samples.</li>
                                                <li>Provide long-term intravenous therapy.</li>
                                                <li>Provide hemodialysis.</li>
                                                <li>Administer large volumes of intravenous fluid quickly.</li>
                                                <li>Administer vasopressor or vasodilator therapy (dopamine).</li>
                                                <li>Monitor central venous pressure (CVP).</li>
                                                <li>Provides access for a trans venous pacemaker or pulmonary artery catheters.</li>
                                                <li>Access venous circulation when a patient has difficult or impossible peripheral access.</li>
                                            </ul>
                                        </div>               
                                    </div>
                                </div>    
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-12">
                                <p class="margin-none margin-t-10 sub-title">CVC Parts</p>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 margin-t-10 h-inherit">
                                            <div class="border-blue padding-5 h-100 text-center">
                                                <p class="font-weight-300 margin-none">Open/Luer Lock Valve</p>
                                                <img class="w-100 max-width-500px" src="<?php echo CocoonhubConstants::$img4?>">
                                            </div>                    
                                        </div>
                                        <div class="col-sm-12 col-md-6 margin-t-10 h-inherit">
                                            <div class="border-blue padding-5 h-100 text-center">
                                                <p class="font-weight-300 margin-none">Three Way Stopcocke</p>
                                                <img class="w-100 max-width-500px" src="<?php echo CocoonhubConstants::$img3?>">
                                            </div>                    
                                        </div>
                                    </div>
                                </div>  
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 margin-t-10">
                                            <div class="container-fluid row margin-l-r-auto border-blue row">
                                                <div class="col-sm-12 col-md-6">
                                                    <img class="img-fill-container-cover h-100 w-100 border-r-5" src="<?php echo CocoonhubConstants::$img22?>">
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <p class="font-weight-300 margin-none text-center margin-t-b-10">(These are in order to line up with the diagram)</p>
                                                    <p>Durable, low-profile Luer lock adapter facilities cleaning and increases patient comfort.</p>
                                                    <p>Permanent external clamping segment eliminates cost and inconvenience of extension sets; promotes aseptic care.</p>
                                                    <p>Easy to use reattached clamp that helps prevent catheter damage.</p>
                                                    <p>Soft silicone suture wing helps provide reliable securement and minimizes trauma at the catheter insertion site.</p>
                                                    <p>Soft tip reduces potential of venous wall erosion and perforation.</p>
                                                    <p>Exclusive VitaCuff Antimicrobial Cuff helps provide protection against catheter related infections.</p>
                                                    <p>Medical grade radiopaque silicone construction for bio-compatibility.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 margin-t-10">
                                            <div class="container-fluid row margin-l-r-auto border-blue row">
                                                <div class="col-sm-12 col-md-6 col-lg-3 order-1 order-md-1 order-lg-0 margin-t-10">
                                                    <p class="margin-none margin-t-10 sub-title">Left side</p>
                                                    <p class="margin-none sub-title">(top to bottom)</p>
                                                    <ul>
                                                        <li>Injection Cap</li>
                                                        <li>Providone-lodine</li>
                                                        <li>Swabsticks Dilator</li>
                                                        <li>Providone-lodine Ointment</li>
                                                        <li>Gauze Pads</li>
                                                        <li>VitaCuff Cutter</li>
                                                        <li>Fenestrated Drape</li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-12 col-md-12 col-lg-6 order-0 order-md-0 order-lg-1 margin-t-10 vertical-align-middle">
                                                    <img class="w-100 border-r-5" src="<?php echo CocoonhubConstants::$img6?>">    
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-3 order-2 order-md-2 order-lg-2 margin-t-10">
                                                    <p class="margin-none margin-t-10 sub-title">Right side</p>
                                                    <p class="margin-none sub-title">(Top to bottom)</p>
                                                    <ul>
                                                        <li>Guidewire</li>
                                                        <li>Needles and Syringes</li>
                                                        <li>Lidocaine HCI</li>
                                                        <li>Catheter</li>
                                                        <li>Scalpel</li>
                                                        <li>VitaCuff Cutter</li>
                                                        <li>Non-absorbable Suture</li>
                                                    </ul>        
                                                </div>
                                            </div>
                                        </div>         
                                    </div>
                                </div>   
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-12">
                                <p class="margin-none margin-t-10 sub-title">Luer Fittings</p>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 margin-t-10">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="margin-t-10 sub-title">Luer Lock Fittings:</p>
                                                    <p class="margin-10">The hub is attached to the syringe by twisting it into the threads of the syringe tip to “lock” it into place. The Luer lock is designed to be leak proof and prevent the syringe from slipping off.</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="margin-t-10 sub-title">Luer Slip Fittings:</p>
                                                    <p class="margin-10">You “slip” the needle onto the syringe tip and rely on friction to keep it in place.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <img class="w-100 max-width-700px margin-l-r-auto d-block border-r-5" src="<?php echo CocoonhubConstants::$img5?>">    
                                        </div>         
                                    </div>
                                </div> 
                            </div>              
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="margin-none margin-t-10 sub-title">Stem Types</p>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="margin-none margin-t-10 sub-title">Deformable Stem</p>
                                            <img class="w-100 max-width-300px margin-l-r-auto d-block border-r-5" src="<?php echo CocoonhubConstants::$img24?>">    
                                        </div>
                                        <div class="col-6">
                                            <p class="margin-none margin-t-10 sub-title">Rigid Stem</p>
                                            <img class="w-100 max-width-500px margin-l-r-auto d-block border-r-5" src="<?php echo CocoonhubConstants::$titlePicImg?>">    
                                        </div>                                          
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <img class="w-100 margin-l-r-auto d-block border-r-5" src="<?php echo CocoonhubConstants::$img9?>">    
                                        </div>  
                                        <div class="col-12">
                                            <p class="margin-none margin-t-10 sub-title">From Left to Right</p>
                                            <ol class="w-100 max-width-300px margin-l-r-auto">
                                                <li>Align Luer of syringe with Luer on access site.</li>
                                                <li>Engage syringe to seal against silicone.</li>
                                                <li>Push plunger on syringe to inject fluid.</li>
                                                <li>Unscrew syringe and silicone valve closes.</li>
                                                <li>Medication is injected; fluid pathway reseals.</li>
                                            </ol> 
                                        </div>
                                    </div>
                                </div> 
                            </div>              
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="margin-none margin-t-10 sub-title">Cap Based Concepts</p>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <img class="w-100 h-100 max-width-300px margin-l-r-auto d-block img-cover border-r-5" src="<?php echo CocoonhubConstants::$img15?>">    
                                        </div>
                                        <div class="col-6">
                                            <img class="w-100 h-100 max-width-300px margin-l-r-auto d-block img-cover border-r-5" src="<?php echo CocoonhubConstants::$img10?>">    
                                        </div>                                           
                                    </div>
                                </div> 
                            </div>              
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Product Overview">
                    <p class="title margin-none">Product Overview:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <p class="margin-none">The Cocoon Hub is a simple yet affordable solution that minimizes any risk for infection providing the nurse has sterilized the injection site. Securing the existing catheter/ lumens by an antibacterial housing and 3M dressing.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Justification">
                    <p class="title margin-none">Justification:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <p class="margin-none">The intent of securing the once dangling lumens by an antibacterial housing.</p>
                                <p class="margin-none">Keeping the appearance simple and completely contained around the area of the catheter injection site, minimizing the risk of any infection.</p>
                                <p class="margin-none">The use of existing locking mechanisms on the catheter/ lumens, 3M dressing, self sealing silicone.</p>
                                <p class="margin-none">Suggesting the use of the Foster Antimicrobial Technologies.</p>
                                <p>Plastic housing that protects the lumens from dangling and exposure.</p>
                            </div>
                            <div class="col-12 text-center">
                                <img class="w-100 h-100 max-width-500px margin-l-r-auto d-block img-cover border-r-5" src="<?php echo CocoonhubConstants::$img16?>">    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Concept Sketches">
                    <p class="title margin-none">Concept Sketches:</p>
                    <div class="seperator-line"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-lg-3 margin-t-b-10">  
                                <img class="w-100 h-100 max-width-500px margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo CocoonhubConstants::$img14?>">          
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 margin-t-b-10">  
                                <img class="w-100 h-100 max-width-500px margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo CocoonhubConstants::$img25?>">          
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 margin-t-b-10">  
                                <img class="w-100 h-100 max-width-500px margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo CocoonhubConstants::$img17?>">          
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 margin-t-b-10">  
                                <img class="w-100 h-100 max-width-500px margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo CocoonhubConstants::$img19?>">          
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6 margin-t-b-10">  
                                <img class="w-100 h-100 max-width-700px margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo CocoonhubConstants::$img18?>">          
                            </div>
                            <div class="col-12 col-lg-6 margin-t-b-10">  
                                <img class="w-100 h-100 max-width-700px margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo CocoonhubConstants::$img21?>">          
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-lg-3 margin-t-b-10">  
                                <img class="w-100 h-100 max-width-500px margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo CocoonhubConstants::$img20?>">          
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 margin-t-b-10">  
                                <img class="w-100 h-100 max-width-500px margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo CocoonhubConstants::$img26?>">          
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 margin-t-b-10">  
                                <img class="w-100 h-100 max-width-500px margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo CocoonhubConstants::$img27?>">          
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 margin-t-b-10">  
                                <img class="w-100 h-100 max-width-500px margin-l-r-auto d-block img-cover border-r-5 border-blue" src="<?php echo CocoonhubConstants::$img23?>">          
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section js-toc-content-item" data-toc-title="Recap">
                    <p class="title margin-none">Recap:</p>
                    <div class="seperator-line"></div>
                    <div class="container margin-t-b-10">
                        <div class="row">
                            <div class="col-12">
                                <p class="margin-t-10 sub-title">Mission</p>
                                <p>Design a simple, affordable, sanitary, universal, and mass producible device for preventing infections with potential applications that go beyond the initial intended function.</p>
                            </div>
                            <div class="col-12">
                                <p class="margin-t-10 sub-title">Statistics</p>
                                <p class="margin-none">CLABSIs are the most common HAI in childhood. According to an extensive study by Meyer Children's Hospital.</p>
                                <ul class="margin-none">
                                    <li>3.73/1,000 Average/ Central Line Days </li>
                                    <li>5.69/1,000 Peak with ULC/ Central Line Days</li>
                                </ul>
                            </div>
                            <div class="col-12">
                                <p class="margin-t-10 sub-title">Research</p>
                                <p class="margin-none">Types of Central Venous Catheters</p>
                                <ul class="margin-none">
                                    <li>Short-Term: Highest risk of infection. Can be easily dislodged.</li>
                                    <li>PICC: Requires frequent dressing changes.</li>
                                    <li>Tunneled: Installation requires an operating theater.</li>
                                    <li>Implanted: The skin must be punctured each time the port is accessed. </li>
                                </ul>
                            </div>
                            <div class="col-12">
                                <img class="w-100 h-100 margin-l-r-auto d-block img-cover border-r-5" src="<?php echo CocoonhubConstants::$img30?>">          
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