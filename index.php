<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>	   
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />  
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/font-awesome.min.css" type="text/css" />     
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css" type="text/css" />        
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/slider.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Open+Sans+Condensed:300" rel="stylesheet">
    <script src="templates/edeka/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="templates/edeka/js/animations.js" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="utf-8"/>
</head>
<body>
	<div id="divAll-Wrapper">
		<div id="divTop-wrapper"> 
            <a href="index.php">
                <div id="divLogo">
                    <img id="logo" src="templates/edeka/images/logo.png" alt="logo"> 
                </div>
            </a>
            <div id="divNav">
                <nav>
                    <ul>
                        <li>
                            <a id="navAboutus" href="templates\edeka\sites\aboutus.html">            
                                <i class="fa fa-building fa-2x" aria-hidden="true"></i>
                                <span>ÜBER UNS</span>
                            </a>
                        </li>
                        <li>
                            <a id="navEvents" href="templates\edeka\sites\events.html">
                                <i class="fa fa-calendar-check-o fa-2x" aria-hidden="true"></i>
                                <span>EVENTS</span>
                            </a>
                        </li>
                        <li>
                            <a id="navCarrer" href="templates\edeka\sites\carrer.html">
                                <i class="fa fa-users fa-2x" aria-hidden="true"></i>
                                <span>KARRIERE</span>
                            </a>
                        </li>
                        <li>
                            <a id="navLocation" href="templates\edeka\sites\location.html"> 
                                <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                                <span>STANDORT</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php" id="navHome" class="selectedHome">
                                <i class="fa fa-home fa-2x" aria-hidden="true"></i>
                                <span>HOME</span>                   
                            </a>
                        </li>
                    </ul>            
                </nav>
            </div>
		</div> 
		<div id="divHeader-Wrapper">
			<div id="divHeader">
                 <ul>
                    <li class="liSlider">
                        <img src="templates/edeka/images/Bild1.png">                      
                        <figcaption><br>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidet ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</figcaption>
                    </li>
                    <li  class="liSlider">
                        <img src="templates/edeka/images/Bild2.png">
                        <figcaption><br>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo doLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidlores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</figcaption>
                    </li>
                    <li  class="liSlider">
                        <img src="templates/edeka/images/Bild3.png">
                        <figcaption><br>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolorLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invides et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</figcaption>
                    </li>
                    <li  class="liSlider">
                        <img src="templates/edeka/images/Bild4.png">
                        <figcaption><br><b>Lorem ipsum</b><br><br> dolor sit amet, consetetur sadipscing Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidelitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</figcaption>
                    </li>
	           </ul>                               
            </div>           
		</div>
		<div id="divContent-Wrapper">
			<div id="divContentLeft-Wrapper">
				<div id="divContentColumn1">                    
                    <div id="divContent1">
                        <div class="triggerC1">
                            <p> Paula Panzer</p>
                            <div class="circle">                           
                                <img src="templates/edeka/images/Person1.jpg" alt="Mitarbeiter 1">                          
                            </div>
                            <p><b>Geschäftsführerin</b></p>                       
                            <i id="seeMore"><i id="check" class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;&nbsp;...erfahre mehr</i> 
                        </div>
                    </div>                   
					<div id="divContent2" >
                        <div class="triggerC2">
                            <p> Paula Panzer</p>
                            <div class="circle">                           
                                <img src="templates/edeka/images/Person2.jpg" alt="Mitarbeiter 1">                          
                            </div>
                            <p><b>Geschäftsführerin</b></p>
                            <i id="seeMore"><i id="check" class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;&nbsp;...erfahre mehr</i> 
                        </div>
                    </div>
				</div>
				<div id="divContentColumn2">
					<div id="divContent3" >
                        <div class="triggerC3">
                            <p> Paula Panzer</p>
                            <div class="circle">                           
                                <img src="templates/edeka/images/Person2.jpg" alt="Mitarbeiter 1">                          
                            </div>
                            <p><b>Geschäftsführerin</b></p>
                            <i id="seeMore"><i id="check" class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;&nbsp;...erfahre mehr</i> 
                        </div>
                    </div>
					<div id="divContent4" >
                        <div class="triggerC4">
                            <p> Paula Panzer</p>
                            <div class="circle">                           
                                <img src="templates/edeka/images/Person1.jpg" alt="Mitarbeiter 1">                          
                            </div>
                            <p><b>Geschäftsführerin</b></p>
                            <i id="seeMore"><i id="check" class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;&nbsp;...erfahre mehr</i> 
                        </div>
                    </div>
				</div>
			</div>
			<div id="divContentRight-Wrapper">
				<div id="divMainContent">                    
                    <div id="MainContentBody">
                        <span id="mcText">
                            <jdoc:include type="component"/>                        
                        </span>
                    </div>                  
                </div>
			</div>
		</div>
		<div id="divFooter-Wrapper">
			<div id="divFooterColumn">
                <div id="divFootColmn1" class="footerColumn">
                    <p id="contactUs">KONTAKTIER UNS</p>
                    <div class="divHome">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <i id="street" class="footerColumnText">&nbsp;Rixdorfer Str. 67-69, 12109 Berlin</i> 
                    </div>
                     <div class="divHome">
                       <i class="fa fa-phone" aria-hidden="true"></i>
                       <i id="tele" class="footerColumnText">&nbsp;030 70171902</i>
                    </div>  
                     <div class="divHome">
                      <i class="fa fa-fax" aria-hidden="true"></i>
                      <i id="fax" class="footerColumnText">030 70171905</i>
                    </div>                    
                     <div class="divHome">
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                      <i id="mail" class="footerColumnText">e4089333@minden.edeka.de</i> 
                    </div>                                      
                </div>
                <div id="divFootColumn2" class="footerColumn">
                    <p id="contactUs">ÖFFNUNGSZEITEN</p>                    
                    <div class="divHome">
                        <i>►</i>
                        <i class="footerColumnText">Mo: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;09:30 - 20:00 Uhr</i>
                    </div>
                    <div class="divHome">
                        <i>►</i>
                        <i class="footerColumnText">Di: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;09:30 - 20:00 Uhr</i>
                    </div>
                    <div class="divHome">
                        <i>►</i>
                        <i class="footerColumnText">Mi: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;09:30 - 20:00 Uhr</i>
                    </div>
                    <div class="divHome">
                        <i>►</i>
                        <i class="footerColumnText">Do: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;09:30 - 20:00 Uhr</i>
                    </div>
                    <div class="divHome">
                        <i>►</i>
                        <i class="footerColumnText">Fr: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;09:30 - 20:00 Uhr</i>
                    </div>
                    <div class="divHome">
                        <i>►</i>
                        <i class="footerColumnText">Sa: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;09:30 - 20:00 Uhr</i>
                    </div>
                </div>
                <div id="divFootColumn3" class="footerColumn">
                     <p id="contactUs">ALLGEMEIN</p> 
                     <div class="divHome">
                        <i>►</i>
                        <i class="footerColumnText">Lorem ipsum dolor sit</i>
                     </div>
                     <div class="divHome">
                        <i>►</i>
                        <i class="footerColumnText">Lorem ipsum dolor sit</i>
                     </div>
                     <div class="divHome">
                        <i>►</i>
                        <i class="footerColumnText">Lorem ipsum dolor sit</i>
                     </div>
                     <div class="divHome">
                        <i>►</i>
                        <i class="footerColumnText">Lorem ipsum dolor sit</i>
                     </div>
                     <div class="divHome">
                        <i>►</i>
                        <i class="footerColumnText">Lorem ipsum dolor sit</i>
                     </div>
                     <div class="divHome">
                        <i>►</i>
                        <i class="footerColumnText">Lorem ipsum dolor sit</i>
                     </div>
                </div>
                <div id="divFootColumn4" class="footerColumn">
                    <p id="contactUs">NEWSLETTER</p>
                    <form>
                        <input class="txtNewsletter" type="text" placeholder="Name">
                        <input class="txtNewsletter" type="text" placeholder="E-Mail">
                        <a href="" class="btnSend mail">&nbsp;&nbsp;&nbsp;Anfordern</a> 
                    </form>
                </div>                
		    </div>
            <div id="divFooterRow">
                <div id="divSocialMedia">
                    <a href="https://www.facebook.com/edeka.lenkeit/" target="_blank"> 
                        <img id="socFace" src="templates/edeka/images/facebook.png">                   
                    </a>    
                </div>
                <div id="divLinks">
                    <a class="normalLink" href="templates\edeka\sites\aboutus.html">
                        <span>Impressum</span>
                    </a>
                </div>
            </div>
           
		</div>
	</div>
</body>     
</html>
