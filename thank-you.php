<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Thank You, Your Holiday Request has been submitted successfully</title>
<meta name="Description" content="Holidays in Himachal Pradesh - Find complete list of Himachal Pradesh tour and travel packages with available deals. Book Himachal Pradesh holiday packages with Nain Holidays and explore all tourist places at lowest price." />
<meta name="Keywords" content="Himachal Pradesh tour packages, Himachal Pradesh holiday packages, holidays in Himachal Pradesh, Himachal Pradesh vacation package, Himachal packages, himachal tours, himachal holidays, himachal holiday packages, trip to himachal, Shimla Manali Tours, Volvo Tour Packages, Nain Holidays" />
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link href="css/slick.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/slick-theme.css" rel="stylesheet" type="text/css" media="screen">
<link rel="stylesheet" href="css/slicknav.css">
<meta http-equiv="refresh" content="10;url=http://northeastindiatourpackages.nainholidays.in/" />
<script type="text/javascript">
window.onload = function(){

(function(){
  var counter = 10;

  setInterval(function() {
    counter--;
    if (counter >= 0) {
      span = document.getElementById("count");
      span.innerHTML = counter;
    }
    // Display 'counter' wherever you want to display it.
    if (counter === 0) {
        alert('Go to North East Packages Page');
        clearInterval(counter);
    }

  }, 1000);

})();

}
</script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

<!-- Global site tag (gtag.js) - Google Ads: 755558931 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-755558931"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-755558931');
</script>
<!-- Event snippet for Himachal-Conversion-Code conversion page --> <script> gtag('event', 'conversion', {'send_to': 'AW-755558931/DuIWCOXb0JoBEJPUo-gC'}); </script>
</head>
<body>
<section class="top-bar">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="" class="img-fluid"></a> </div>
        <div class="logo-m"> <a href="index.html"><img src="images/logo-mobile.png" alt="" class="img-fluid"></a> </div>
      </div>
      <div class="col-md-7">
        <div class="head-cnt">
          <ul>
            <li><i><img src="images/call-info.png" alt=""> </i><a href="tel:+91-98122-23651">+91-98122-23651</a></li>
            <li><i><img src="images/msg-info.png" alt=""></i> <a href="mailto:info@nainholidays.in">info@nainholidays.in</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <div id="thank-you" class="inner-right__body text-center">
        <h1 class="content-body--title">Thank You</h1>
        <hr>
        <h4>We have received your request successfully.</h4>
        <p>Our support team will get back to you within the next 24 hours.</p>
        <p>For immediate assistance, please call us at <a href="tel:+91-98122-23651">+91-98122-23651</a> or email us at <a href="mailto:info@nainholidays.in">info@nainholidays.in</a></p>
        <br />
        <p>You'll be Automatically Redirected in <span id="count">10</span> Seconds...</p>
      </div>
    </div>
  </div>
</div>

<?php
	if(isset($_POST['submit']))
	{
	$name    = $_POST["name"];
	$email    = $_POST["email"];
	$phone    = $_POST["phone"];
	$dateoftravel      =$_POST["dateoftravel"];
	$requirement    = $_POST["requirement"];
	$to       = "sushil.nainholidays@gmail.com";
    $subject  = "Enquiry for North East India";
    $message .= "Name : ".$name."\r\n";
    $message .= "E-Mail  : ".$email."\r\n";
	$message .= "Phone : ".$phone."\r\n";
	$message .= "Date : ".$dateoftravel."\r\n";
	$message .= "Requirement : ".$requirement."\r\n";
	$header   = "From:info@nainholidays.in\r\n";
    $retval   = mail($to,$subject,$message,$header);
   if($retval == true )  
   { 
     
	   }
	}
?>

<section id="book-online">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="h1-global">Why Book Online with us</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="why-book"> <i><img src="images/check.jpg" alt="" class="img-fluid"> </i>
          <h4>SAVE TIME</h4>
          <p>No need to surf Multiple Sites for packages, quotes, travel plans</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="why-book"> <i><img src="images/check.jpg" alt="" class="img-fluid"> </i>
          <h4>MULTIPLE OPTIONS</h4>
          <p>Get Multiple Itineraries & Personalised Suggestions from our Travel agents</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="why-book"> <i><img src="images/check.jpg" alt="" class="img-fluid"> </i>
          <h4>SAVE MONEY</h4>
          <p>Compare, Negotiate & Choose the best from multiple options</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="why-book bdr-none"> <i><img src="images/check.jpg" alt="" class="img-fluid"> </i>
          <h4>TRUSTED NETWORK</h4>
          <p>of 2000+ Hotels Reliable & Authentic Travel Guides in Himalaya</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="ftr-link">
          <li>SHIMLA</li>
          <li>MANALI </li>
          <li>Kullu</li>
          <li>Khajjiar</li>
          <li>DharamSHala </li>
          <li>AGRA </li>
          <li>Dalhousie</li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 hidden-md">
        <h4 class="ftr-h4">Guarantee</h4>
        <figure> <img src="images/trust.png" alt="" class="img-fluid"> </figure>
      </div>
      <div class="col-md-3">
        <h4 class="ftr-h4">Approved By</h4>
        <div class="approved"> <img src="images/logos.png" alt="" class="img-fluid"> </div>
      </div>
      <div class="col-md-5">
        <h4 class="ftr-h4">We Accept All Major Credit And Debit Cards</h4>
        <div class="approved"> <img src="images/payment.png" alt="" class="img-fluid">
          <h5 class="ftr-h5">Customer Support : </h5>
          <ul class="ftr-cnt">
            <li><i><img src="images/call-ico.png" alt="" class="img-fluid"> </i> +91-98122-23651</li>
            <li><i><img src="images/msg-ico.png" alt="" class="img-fluid"> </i> <a href="mailto:info@nainholidays.in">info@nainholidays.in</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="copywrite">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <p>&copy; Copyright 2019, Nain Holidays. All Rights Reserved.</p>
      </div>
    </div>
  </div>
</section>
<!-------------------------Modal----------------------->
<script type="text/javascript" src="js/jquery-2.0.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js" ></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#menu').slicknav();
	});
  </script>
<script>
jQuery('.testimonials').slick({
slidesToShow: 1,
slidesToScroll: 1,
autoplay: true,
autoplaySpeed: 3000000,
dots: true,
arrows: false,
 responsive: [
		  {
			breakpoint: 767,
			settings: {
			  slidesToShow: 1,
			  slidesToScroll: 1,
			  dots: true,
			  arrows: false,
			}
		  },
		  {
			breakpoint: 480,
			settings: {
			  slidesToShow: 1,
			  slidesToScroll: 1,
			  dots: true,
			  arrows: false,
			}
		  }
		  ]
});
</script>
</body>
</html>
