<?php
include('mail.php');
?>
<!DOCTYPE html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="css/app.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="shortcut icon" type="image/x-icon" href="images/2556imgpsh_fullsize_anim.ico">

	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/custom.css" media="screen" />

<style>
section[role="inner-head"]::after {
	position: absolute;
	left: 0;
	right: 0;
	height: 100%;
	width: 100%;
	background: transparent;
	content: "";
	top: 0;
	z-index: -1;
}
.readMoreBtn {
    background-color: transparent;
    border: 1px solid #d8575a;
    border-radius: 30px;
    color: #d8575a;
    padding: 11px 33px;
    font-size: 16px;
    font-weight: 400;
    margin-right: 0;
    /* width: 357px; */
    display: block;
    text-align: center;
    text-transform: uppercase;
    margin-top: 35px;
    margin-bottom: 35px;
}

.mailMgs{
      text-align: center;
         color: green;
}


.formMain {

    /*padding: 0 60px;

    box-sizing: border-box;

    width: 80%;

    margin: 0 auto;*/

}

.showMessage {

    position: relative;

    float: left;

}

.input33 {

    width: 31%;

    float: left;

    margin-right: 13px;

}

.e_mail {

    border: 2px solid #d1d1d1;

    border-radius: 0px;

    color: #636f78;

    font-size: 18px;

    padding: 11px 0 12px 15px;

    margin-bottom: 35px;

    background: #f9f9f9;

    width: 100%;

	font-family: 'Raleway', sans-serif;

}

.contact-block {

	margin-top: 64px;

}

.address_block ul {

	margin: 0px;

	padding: 0px;

	text-align: right;

}

.address_block ul li {

	float: left;

	list-style: none;

}

.address_block ul li p {

	font-size: 13px;

	border-right: 1px solid #c5c7cb;

	padding: 0 16px 0 0;

}

.address_block ul li span {

	float: left;

	width: 100%;

	font-size: 14px;

	padding-bottom: 4px;

	font-weight: 600;

}

.address_block ul li img {

	padding-left: 13px;

	padding-top: 11px;

}



.address_block_new ul {

	margin: 0px;

	padding: 0px;

	text-align: right;

}

.address_block_new ul li {

	float: left;

	list-style: none;

}

.address_block_new ul li p {

    font-size: 13px;

    border-right: 1px solid #c5c7cb;

    padding: 0 16px 0 0;

}

.address_block_new ul li span {

    float: left;

    width: 100%;

    font-size: 14px;

    padding-bottom: 4px;

	font-weight: 600;

}

.address_block_new ul li img {

	padding-left: 13px;

	padding-top: 11px;

}

.address_block {

	float: right;

	margin-bottom: 50px;

	margin-top: 26px;

}

.address_block_new {

	float: right;

	margin-bottom: 45px;

}



@media (max-width: 1366px){

.input33 {

    width: 32.5%;

}

}

@media (max-width: 1600px){

.input33 {

    width: 32%;

}

}

@media (max-width: 1600px){

.e_mail {

    font-size: 15px;

}

}

@media (max-width: 1366px){

.outerr.input33:nth-child(3) {

    margin-right: 0;

}

}

@media (max-width: 1366px){

.input33 {

    width: 32.5%;

}

}

@media (max-width: 1600px){

.input33 {

    width: 32%;

}

}

.outerr {

    position: relative;

}

.read .readMore a {

	background-color: transparent;

	border: 1px solid #d8575a;

	border-radius: 30px;

	color: #d8575a;

	padding: 11px 33px;

	font-size: 16px;

	font-weight: 400;

	margin-right: 0;

	/* width: 357px; */

	display: block;

	text-align: center;

	text-transform: uppercase;

	margin-top: -8px;

margin-bottom: 0;

}

.read-block{float:right;}





.teatarea33 {

	float: left;

	margin-right: 13px;

	background-color: transparent;

	border-bottom: 1px solid #6d7374;

	border-radius: 0px;

	height: 49px !important;

	color: #fff;

	font-size: 15px;

	border-right: 0px;

	border-left: 0px;

	border-top: 0px;

	width: 100%;

	padding-left: 14px;

	margin-top: 13px;

}



option:not(:first-of-type) {

  color: black;

}

#sel1 {

	padding-top: 9px;

}

ul.terms-block {

	float: left;

	/* margin-left: 104px; */

	margin: 0px;

	padding: 0px;

}

ul.terms-block li a {

    color: #42a999;

}

ul.terms-block li {

	padding-top: 3px;

	padding-bottom: 3px;

	padding-right: 0;

	/* border-right: 1px solid #4F4F49; */

	padding-left: 0;

}

.read-block a {

	text-decoration: none;

}

ul.terms-block li a {

	color: #42a999;

	border-right: 1px solid #4F4F49;

	padding: 0 15px;

}

ul.terms-block li:last-child a {

    border-right: 0px;

    margin-right: 13px;

}

.form-control::placeholder {

	color: #AEAEAE;

	opacity: 1;

}

.form-control{color: #636f78 !important;}

.watchto p {

	margin-bottom: 0;

}



.e_mail {

	border: 1px solid rgba(151,150,156,0.75);

	border-radius: 0px;

	color: #79787d;

	font-size: 16px;

	padding: 12px 0 12px 15px;

	margin-bottom: 15px;

	background: transparent;

	width: 100%;

	border-right: 0px;

	border-left: 0px;

	border-top: 0px;

	margin-top: 52px;

}

  .red-tooltip + .tooltip > .tooltip-inner {background-color: #f00;}

  

  .e_mail_red {

	border: 1px solid #B22222;

	border-radius: 0px;

	color: #fff;

	font-size: 18px;

	padding: 12px 0 12px 15px;

	margin-bottom: 35px;

	background: transparent;

	width: 100%;

  }

  .modal_block{

	font-size: 25px !important;

	text-transform: uppercase !important;

	color: #5badab;

	font-weight: 600;

	padding: 0px 3px !important;

	text-align: left !important;

}

.modal-body.scroll-block {

	padding-top: 0px;

	height: 400px;

	overflow-y: scroll;

}

.form-block {

	padding-left: 107px;

	padding-right: 110px;

}

.selecttwo{

	  background: url(../images/arrow-top.png) no-repeat right;

    -webkit-appearance: none;

    background-position-x: 266px;

	 color:#8f8b8b;

	

}

 select:invalid { color:#bcbdc1; }

 ::-webkit-select-placeholder { /* Chrome/Opera/Safari */

  color: #dedada;

}

::-webkit-input-placeholder { /* Chrome/Opera/Safari */

  color: #dedada;

}

::-moz-placeholder { /* Firefox 19+ */

  color: #dedada;

}

:-ms-input-placeholder { /* IE 10+ */

  color: #dedada;

}

:-moz-placeholder { /* Firefox 18- */

  color: #aeaeae;

}

.grecaptcha-badge {

	bottom: 64px !important;

}

.contact-block {

	/* margin-top: 64px; */

	width: 1260px;

	margin: 15px auto;

	/* padding-top: 15px; */

	/* border: 1px solid #fff; */

	clear: both;

}

.mtcontact {

	padding-bottom: 59px;

}

@media only screen and (min-width:320px) and (max-width:767px){

.form-block {

	padding-left: 0 !important;

	padding-right: 0 !important;

	width: 100% !important;

}

}

</style>
  </head>
  <body>
     <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e550d55a89cda5a1887d585/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
 <header style="background: rgba(0, 0, 0, 1.0);">
      <div class="container">

        <div class="row">

          <div class="col-md-12 col-lg-3">

            <a href="index.php" class="acuratech-global-logo">

              <img src="images/acuratech-global.png" alt="" />

            </a>

            <button class="navbar-toggler toggle-nav-btn navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

              <span class="navbar-toggler-icon"></span>

            </button>

          </div>

          <div class="col-md-12 col-lg-9 text-right">

            <div class="acuratech-nav">

              <nav class="navbar navbar-toggleable-md navbar-light">

                <div class="collapse navbar-collapse" id="navbarNav">

                  <ul class="navbar-nav">

                    <li class="nav-item"><a class="nav-link" href="index">Home</a></li>

                    <li class="nav-item"><a class="nav-link" href="services">Services</a></li>

                    <li class="nav-item"><a class="nav-link" href="process">Process</a></li>

                    <li class="nav-item active"><a class="nav-link" href="portfolio">Portfolio</a></li>

                    <li class="nav-item"><a class="nav-link" href="about">About</a></li>

					<li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>

                    <li class="nav-item contact-number"><a class="nav-link" href="contact">Contact</a></li>

                  </ul>

                </div>

              </nav>

            </div>

          </div>



        </div>

      </div>

    </header>

<section role="inner-head" style="background:#fff; padding:20px 0 80px 0;">


	</section>

      <a href="https://www.acuratechglobal.com">
         <p style= "text-align:center"><img alt="Qries" src="images/404_1.gif"></p>
           		
      <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="main-footer clearfix">
              <ul class="footer-section">
                
				          <li>
				<h1>Our Services</h1>
                 <ul class="links">
                    <li><a href="services">Web Development</a></li>
                    <li><a href="services">App Development</a></li>
                    <li><a href="services">ERP Solutions </a></li>
                    <li><a href="services">Cross Platform App Development</a></li>
					<li><a href="services">Mobile Application Development</a></li>
                  </ul>
                </li>
				          <li>
				<h1>Emerging Technologies</h1>
                 <ul class="links">
				  <li><a href="services">Blockchain Development</a></li>
 <li><a href="services">IoT App Development</a></li>
 <li><a href="services">AI / ML</a></li>
 <li><a href="services">Data Warehousing Solutions</a></li>
 <li><a href="services">Big Data Services</a></li>
 <li><a href="services">Cloud Computing Services</a></li>
                   
                  </ul>
                </li>
				<li>
				<h1>Corporate</h1>
                 <ul class="links">
                    <li><a href="about">Our Team</a></li>
                    <li><a href="careers">Career</a></li>
                    <li><a href="blog">Blog </a></li>
                    <li><a href="services">Services</a></li>
                  </ul>
                </li>
                <li>
                  <address>
                    <h6>Registered Office:</h6>
                    <p><i class="fa fa-home foot-icon"></i> Plot No. 334, Phase II Ind. Area, Chandigarh (India)</p>
                  </address>
				<address>
                    <h6>Development Center:</h6>
                    <p><i class="fa fa-home foot-icon"></i> STPI Incubation Building C-184, Phase 8A, Ind. Area, Mohali (India)</p>
                  </address>
				  </li>
	 			  <li>
                 <address class="bottom-address">
                    <p><i class="fa fa-phone foot-icon"></i> +91 842 777 7775</p>
                    <p><a href="mailto:info@acuratechglobal.com?Subject=Hello%20again" target="_top"><i class="fa fa-envelope foot-icon foot-email"></i> info@acuratechglobal.com</a></p>
                  </address>
					<div class="social-media">
                   <ul>
                      <li><a href="https://www.facebook.com/acuratechglobal/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="https://www.instagram.com/acuratechglobal/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                      <li><a href="https://www.linkedin.com/company/acuratech-global/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
		     <div class="copyright text-center">
		<div class="container">
        <div class="col-md-12 col-lg-12 text-center" style="    font-size: 12px;
    font-family: raleway;">Copyright © 2019 Acuratech Global</div>

      </div>
	  </div>
        </div>
      </div>
   
    </footer> 

    <a href="#" class="scrollToTop"><img src="images/scroll-top.png" alt="" /></a>    



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <script type="text/javascript">

      $(document).ready(function(){

      

      //Check to see if the window is top if not then display button

      $(window).scroll(function(){

        if ($(this).scrollTop() > 100) {

          $('.scrollToTop').fadeIn();

        } else {

          $('.scrollToTop').fadeOut();

        }

      });

      

      //Click event to scroll to top

      $('.scrollToTop').click(function(){

        $('html, body').animate({scrollTop : 0},800);

        return false;

      });



    });

    </script>

    <script type="text/javascript">

      $(window).scroll(function(){

        var sticky = $('header'),

            scroll = $(window).scrollTop();



        if (scroll >= 250) sticky.addClass('fixed');

        else sticky.removeClass('fixed');

      });



    </script>

	<script>

$('img').bind('contextmenu', function(e){

    return false;

}); 

	</script>

  </body>

</html>

