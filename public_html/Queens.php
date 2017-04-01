<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset = "UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Makes sure that it fits the page regardless of screen size-->
<meta name="viewport" content = "width=device-width, initial-scale = 1">
<title>Developers' Foundation - Queen's Chapter</title>

<link rel = "stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="Queens.css" />
<link rel="stylesheet" type="text/css" href="CaptionHoverEffects/component.css" />
<link rel="stylesheet" type="text/css" href="HeaderEffect/component.css" />
<link rel="stylesheet" href="animator/animate.css">
<link rel="stylesheet" href="animator/component.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:200" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Amatica+SC|Poiret+One" rel="stylesheet">

<link rel="icon" type="image/ico" href="DFFavicon.ico">
<!--
<style>
.loader{
	background:url(light_wool.png);
}

.loadermessage{
	position:absolute;
	margin:0;
	padding:0;
	color:#646968;
	text-align:center;
	top:50%;
	left:50%;
	-webkit-transform:translate3d(-50%,-50%,0);
	transform:translate3d(-50%,-50%,0);
	font-family:"JosefinSans Regular";
	font-size:250%;
	font-weight:bold;
}
</style>
-->
</head>

<body style="overflow-x:hidden;">
<!--
<div class="loader" style="width:100%; height: 100vh;">
	<div class="loadermessage">
		Hey there! Welcome to Developers' Foundation Queen's Chapter!
        <br />
        <div>
        <img src="loader.svg" />
        </div>
	</div>    
</div>
-->
<div class="container-fluid fullpage">
<!--min-height: calc(100vh - 70px);-->

    <div class="row header"> <!--Navbar and titleImage row-->
    	<div class="navbar navbar-fixed-top second" style="padding-top:10px;padding-bottom:10px;display:none;">
            <div class="container">
                <div class="navbar-header">
                    <div class="navbar-brand"><strong>
                        Developers' Foundation</strong>
                    </div>

                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse" style="background-color:#30E3CA;">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                    
                <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right" style="font-family: 'Signika', sans-serif;font-size:20px;">
                   	    <li><a href="#" class="navbutton" id="button1" >About</a></li>
                        <li><a href="#" class="navbutton" id="button2">What We Do</a></li>
                        <li><a href="#" class="navbutton" id="button3">Portfolio</a></li>
                        <li><a href="#" class="navbutton" id="button4">Apply</a></li>
                    </ul> 
                </div>
            </div>
	    </div>
    
    	<div id="headertext">
            Developers' Foundation<br>
            Queen's Chapter
        </div>

	</div>
    <div class="row About" style="padding-top:75px;padding-bottom:75px;background-color:#11999E;color:white;"> <!--About section-->  
		<div class="col-lg-8 col-lg-offset-2" id="abouttext">
                <div style="font-size:30px;">Our goal:</div>
                <div class="text-center">
                <h1 style="font-size:50px;font-family: 'Merriweather', sans-serif !important;">Build Something <b>Meaningful</b></h1><br>
                </div>
                We're a team of students and aspiring web designers which serve as a subteam for Developers' Foundation.<br><br>
                In charge of operations at Queen's University and the city of Kingston, we primarily seek out NPOs in the city and assist them in establishing an online presence.
        </div>
        
	</div>


    <div class="row WhatWeDo"> 
        <div class="text-center">
        <div class="container">
            <div class="section-title center" style="padding-bottom:50px;">
                <h2 style="font-size:50px;color:white;font-family: 'Raleway', sans-serif; color:#40514E;"><b>What We Do</b></h2>
                <hr class="hr">
               
            </div>
            
            <div class="row" style="color:white;">
                <div class="col-md-4" style="padding-bottom:30px;">
                    <div class="pricing-table pricing pricing--sonam">
                        <div class="panel pricing__item" style="border:none;">
                            <div class="controle-header panel-heading panel-heading-landing">
                                <h2 class="services-title panel-title panel-title-landing" style="font-family: 'Raleway', sans-serif;padding-bottom: 30px">
                                    <b>Connect</b></h2>
                                <span style="font-size:5em; color:#E4F9F5;" class="glyphicon glyphicon-link"></span>
                            </div>

                            <div class="panel-body panel-body-landing">
                                <p class="intro" style="font-family: 'Open Sans', sans-serif;">Establish a connection with us and our community, our team, and our developers.</p>
                            </div>
                            <div class="panel-footer panel-footer-landing"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="padding-bottom:30px;">
                    <div class="pricing-table pricing pricing--sonam">
                        <div class="panel pricing__item" style="border: none;">
                            <div class="controle-header panel-heading panel-heading-landing">
                                <h2 class="services-title panel-title panel-title-landing" style="font-family: 'Raleway', sans-serif;padding-bottom: 30px">
                                    <b>Web Design</b></h2>
                                <span style="font-size:5em; color:#E4F9F5;" class="glyphicon glyphicon-file"></span>
                            </div>

                            <div class="panel-body panel-body-landing">
                                <p class="intro" style="font-family: 'Open Sans', sans-serif;">Our hardworking developer team will design a dynamic website best suited for your needs.</p>
                            </div>
                            <div class="panel-footer panel-footer-landing"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="padding-bottom:30px;">
                    <div class="pricing-table pricing pricing--sonam">
                        <div class="panel pricing__item" style="border: none;">
                            <div class="controle-header panel-heading panel-heading-landing">
                                <h2 class="services-title panel-title panel-title-landing" style="font-family: 'Raleway', sans-serif;padding-bottom: 30px">
                                    <b>Marketing</b></h2>
                                <span style="font-size:5em; color:#E4F9F5;" class="glyphicon glyphicon-globe"></span>
                            </div>

                            <div class="panel-body panel-body-landing">
                                <p class="intro" style="font-family: 'Open Sans', sans-serif;">Your website will be displayed on our sites for visitors and our clients to see.</p>
                            </div>
                            <div class="panel-footer panel-footer-landing"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Close here-->
        </div>
    </div>
   	</div><!--Close row-->
    
    
    <div class="row Portfolio"><!--Portfolio section-->       
        <div class="row"> <!--Portfolio title-->
            <div style="text-align:center; margin-top:60px;">
            	<h1 style="font-size:50px; font-family: 'Raleway', sans-serif;color:#40514E;">Portfolio</h1>
            </div>
            <hr class="hr"> 
		</div><!--Close Portfolio title-->
            	
                <ul class="grid cs-style-3">
					<li>
						<figure>
							<img src="assets/img/qhtc.jpg">
							<figcaption>
								<h3>QHTC</h3>
								<span>Website for Queen's Hospitality and Tourism Club.</span>
								<a href="#"><b>Visit</b></a>
							</figcaption>
						</figure>
					</li>
					
                    <li>
						<figure>
							<img src="assets/img/Sports.png">
							<figcaption>
								<h3>Badminton Club</h3>
								<span>Website for Queen's Badminton Club.</span>
								<a href="#"><b>Visit</b></a>
							</figcaption>
						</figure>
					</li>
                    
                    <li>
						<figure>
							<img src="assets/img/jrq.jpg">
							<figcaption>
								<h3>JRQ</h3>
								<span>Website for Japanese Relations at Queen's.</span>
								<a href="#"><b>Visit</b></a>
							</figcaption>
						</figure>
					</li>
                    
                    <li>
						<figure>
							<img src="assets/img/placeholder.jpg">
							<figcaption>
								<h3>ATS</h3>
                                <span>Currently being developed!</span>
								<a href="#">Visit</a>
							</figcaption>
						</figure>
					</li>
                    
                    <li>
						<figure>
							<img src="assets/img/placeholder.jpg" alt="img05">
							<figcaption>
								<h3>JDA</h3>
								<span>Jardin du amour. Currently being developed!</span>
								<a href="#">Visit</a>
							</figcaption>
						</figure>
					</li>
                    
                    <li>
						<figure>
							<img src="assets/img/placeholder.jpg" alt="img06">
							<figcaption>
								<h3>Coming Soon!</h3>
								<span></span>
								<a href="#">Visit</a>
							</figcaption>
						</figure>
					</li>

				</ul>
      
        
    </div> <!--Close portfolio section-->
    
    <div class="row Contact"> <!--ContactUS Section-->
    
		<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
        
        	<div class="row">
            	<div class="col-lg-12 text-center">
        			<h1 style="font-size:50px; font-family: 'Raleway', sans-serif; padding-bottom:20px; color:white;">Apply</h1>
            	</div>
                <div class="col-lg-8 col-lg-offset-2 text-center" style="font-family: 'Open Sans', sans-serif;color:white;font-size:20px;">
                    Have an idea for your NPO's website or Queen's Club? <br><br>We're always ready to accept more clients.
                </div>
            </div>
            <div class="text-center" style="margin-top:20px;">
                <a href="contactform.php" target="_blank"><button class="applybutton">Contact Us</button></a>
            </div>
        </div>
        
	</div> <!--Close ContactUS Section-->
    <!--
    <div class="row" style="font-family:'JosefinSans Regular';background-color:#0d1017;padding-top:10px;padding-bottom:10px;"> 
		<div class="col-lg-12">
        	<div class="col-md-10 col-md-offset-1 text-center" style="font-size:150%;color:white;">
        		<a href="#Terms&Privacy" style="text-decoration:none;"><div class="link" style="font-family: 'Poiret One', cursive;">Terms & Privacy</div></a>

				<div id="Terms&Privacy" class="modalDialog" style="font-family: 'Poiret One', cursive;">
                	<div>
						<a href="#close" title="Close" class="close">x</a>
						<h2>Terms & Privacy</h2>
						<p>Terms of Service</p>
                            <h1>Terms of Service ("Terms")</h1>
                            <p>Last updated: August 28, 2016</p>
                            <p>Please read these Terms of Service ("Terms", "Terms of Service") carefully before using the https://queens.developersfoundation.ca/ website (the "Service") operated by Queen's Chapter - Developer's Foundation ("us", "we", or "our").</p>
                            <p>Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service.</p>
                            <p>By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service.</p>
                            <p>This <a href="https://termsfeed.com/terms-service/generator/">Terms of Service</a> was created with the help of TermsFeed.</p>
                            <p><strong>Links To Other Web Sites</strong></p>
                            <p>Our Service may contain links to third-party web sites or services that are not owned or controlled by Queen's Chapter - Developer's Foundation.</p>
                            <p>Queen's Chapter - Developer's Foundation has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that Queen's Chapter - Developer's Foundation shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.</p>
                            <p>We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit.</p>
                            <p><strong>Termination</strong></p>
                            <p>We may terminate or suspend access to our Service immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>
                            <p>All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>
                            <p><strong>Governing Law</strong></p>
                            <p>These Terms shall be governed and construed in accordance with the laws of Ontario, Canada, without regard to its conflict of law provisions.</p>
                            <p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have between us regarding the Service.</p>
                            <p><strong>Changes</strong></p>
                            <p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>
                            <p>By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.</p>
                            <p><strong>Contact Us</strong></p>
                            <p>If you have any questions about these Terms, please contact us.</p>
						<p>Privacy Policy</p>
					</div>	
				</div>
        	</div>
        </div>
        
	</div>
    -->
    <div class="row" style="font-family:'Open Sans', sans-serif;background-color:black;"> <!--Footer-->
		<div class="col-lg-12">
        	<div class="col-md-10 col-md-offset-1 text-center" style="font-size:16px; padding-top:20px;padding-bottom:20px;color:white;">
        		Copyright © 2016. Developers' Foundation. All rights reserved.
        	</div>
        </div>
	</div><!--Close Footer-->
           
</div> <!-- Close main container-->

<script src="jquery-3.0.0.min.js"></script>
<script src="bootstrap.js"></script>
<script src="MailerFiles/main.js"></script>
<script src="CaptionHoverEffects/toucheffects.js"></script>
<script src="CaptionHoverEffects/modernizr.custom.js"></script>

<script src="HeaderEffect/TweenLite.min.js"></script>
<script src="HeaderEffect/EasePack.min.js"></script>
<script src="HeaderEffect/rAF.js"></script>
<script src="HeaderEffect/demo-3.js"></script>
<script src="HeaderEffect/demo-2.js"></script>

</body>
</html>

<script>

	
	$(document).ready(function(){

		var scroll_start = 0;
   		var startchange = $('.header');
   		var offset = startchange.offset();

        scroll_start = $(this).scrollTop();
        if(scroll_start > offset.top) {
            $('.navbar-fixed-top').addClass('solid');
            $('.navbutton').css("color","white");
            $('.navbar-brand').css("color","white");
        } else {
            $('.navbar-fixed-top').removeClass('solid');
            $('.navbutton').css("color","#40514E");
            $('.navbar-brand').css("color","#40514E");
        }
	
   		$(document).scroll(function() { 
      	scroll_start = $(this).scrollTop();
      	if(scroll_start > offset.top) {
			$('.navbar-fixed-top').addClass('solid');
            $('.navbutton').css("color","white");
            $('.navbar-brand').css("color","white");
       	} else {
          	$('.navbar-fixed-top').removeClass('solid');
            $('.navbutton').css("color","#40514E");
            $('.navbar-brand').css("color","#40514E");
       	}
   		});
		
		$("modalDialog").bind('clickoutside',function(){
    		$("modalDialog").dialog('close');
		});
		
        <!-- Navbar Fade In -->
        setTimeout(function () {
            $('.second').show().addClass('animated fadeIn');}, 1000
            );

		<!-- SCROLL TO -->
		
		$("#button1").click(function() {
			$('html, body').animate({
				scrollTop: $(".About").offset().top -70
			}, 1500);
		});
		
		$("#button2").click(function() {
			$('html, body').animate({
				scrollTop: $(".WhatWeDo").offset().top -70
			}, 1500);
		});
		
		
		$("#button3").click(function() {
			$('html, body').animate({
				scrollTop: $(".Portfolio").offset().top -70
			}, 1500);
		});
		
		$("#button4").click(function() {
			$('html, body').animate({
				scrollTop: $(".Contact").offset().top -70
			}, 1500);
		});
		
		<!--Form hide/show-->
		
		$('.npoForm').hide();
		$('.stuForm').hide();
		$('.formOuter').hide();
	
		$( "#npobutton" ).click(function() {
			$('.formOuter').fadeIn(500);
			$('.stuForm').hide();
			$('.npoForm').fadeIn(1000);

			$('html, body').animate({
				scrollTop: $(".npoForm").offset().top -70
			}, 1000);
		});
	
		$( "#studentbutton" ).click(function() {
			$('.formOuter').fadeIn(500);
			$('.npoForm').hide();
			$('.stuForm').fadeIn(1000);

			$('html, body').animate({
				scrollTop: $(".stuForm").offset().top -70
			}, 1000);
		});
		
	});
	

</script>
