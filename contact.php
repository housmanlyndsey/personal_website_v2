<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Lyndsey Housman's Personal Website ">
    <meta name="author" content="Lyndsey Housman">

    <title> Lyndsey Housman </title>

    <!-- Bootstrap core CSS -->
    <link href="plugins/flatfy/css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom Google Web Font -->
    <link href="plugins/flatfy/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
    
    <!-- Custom CSS-->
    <link href="plugins/flatfy/css/general.css" rel="stylesheet">
    
     <!-- Owl-Carousel -->
    <link href="plugins/flatfy/css/custom.css" rel="stylesheet">
    <link href="plugins/flatfy/css/owl.carousel.css" rel="stylesheet">
    <link href="plugins/flatfy/css/owl.theme.css" rel="stylesheet">
    <link href="plugins/flatfy/css/style.css" rel="stylesheet">
    <link href="plugins/flatfy/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nanogallery/5.6.0/css/nanogallery.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nanogallery/5.6.0/css/themes/light/nanogallery_light.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">    

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="plugins/flatfy/css/magnific-popup.css"> 
    
    <script src="plugins/flatfy/js/modernizr-2.6.2.min.js"></script>  <!-- Modernizr /-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <link href="plugins/ionicons.min.css" rel="stylesheet"/>

    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/footer.css">

	<script type="text/javascript">
		$(document).ready(function() {
			$(function(){
				$('#mobile_menu').slicknav({
				prependTo: '#navigation'
				});
			});
			$(".fancy_brand").lettering();
		});

		function check(){
			if(document.getElementById('message').value=="null" || document.getElementById('message').value==""){
					alert('Please enter a message.');
					return false;
			}
		}
	</script>

</head>

<body>
<?php 
$fileName = basename(__FILE__); 
include("header.php")
?>

<div class="contact"> Contact Me </div>

<div class="container-fluid" id="contact-container">
<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-6">
		<iframe src="https://www.google.com/calendar/embed?showTabs=0&amp;mode=WEEK&amp;height=300&amp;wkst=1&amp;bgcolor=%23cccccc&amp;src=lyndseyh%40umich.edu&amp;color=%232952A3&amp;ctz=America%2FNew_York" style=" border-width:0 " width="400" height="300" frameborder="0" scrolling="no"></iframe>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-6" id="contactForm">
		<form method = "POST" onSubmit = "return check()" id="form" class="topBefore">

		<?php 
			if(isset($_POST['contact'])){
				$file = "contactors.csv";
				$isExist = file_exists($file);
				$handle = fopen($file, 'a');
				$stringToAdd="";

				if($isExist){
					foreach($_POST as $value){
						$stringToAdd.="$value";
					}
					$stringToAdd.="\n";
					fwrite($handle, $stringToAdd);
				}

				$email_to = "housmanlyndsey@gmail.com";
				$emailsubject = "Site Contact Form";
				$mailheader = "From: " . $_POST['email']."\r\n";
				$mailheader .= "Reply-To: " . $_POST['email']."\r\n";
				$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
				$message_body = "Name: " .$_POST['contact']."<br>"; 
	    		$message_body .="Email: " .$_POST['email']."<br>"; 
	    		$message_body .="Message: " .$_POST['message']."<br>";
				mail($email_to, $emailsubject, $message_body, $mailheader) or die ("Failure");

				fclose($handle);

				echo "<div> Your message was sent to Lyndsey </div>";

			}

		 ?>

		<input type="text" id="name" name="contact" required placeholder="NAME">
		<input type="email" id="email" name="email" required placeholder="E-MAIL">
		<textarea name="message" placeholder="MESSAGE"></textarea>
		<input type="submit" id="submit" value="SEND">

	<!-- Form CSS and layout based off of: http://codepen.io/matmarsiglio/pen/HLIor -->

		</form>
	</div>
</div>
<div class="row contactInfo"> 
	<div class="col-xs-12">
		<h4> Contact Information. </h4>
		<ul>
			<li> 
			  Cell: 1-954-249-3771 </li>
			<li> Personal E-mail: housmanlyndsey@gmail.com </li> 
			<li> School E-mail: lyndseyh@umich.edu </li> 
		</ul>
		<h4> I'm social! </h4>
		<ul>
			<li> LinkedIn: 
				<a href="https://www.linkedin.com/pub/lyndsey-housman/90/748/21b"> Lyndsey's LinkedIn</a></li>
			<li>Facebook: <a href="https://www.facebook.com/lyndsey.housman"> Lyndsey's Facebook </a> </li>
			<li> Github: 
				<a href="https://github.com/housmanlyndsey"> Lyndsey's GitHub </a> </li>
		</ul>
	</div>
</div>
</div>


<?php 
include("footer.php");

 ?>

<!-- JavaScript -->
    <script src="plugins/flatfy/js/jquery-1.10.2.js"></script>
    <script src="plugins/flatfy/js/bootstrap.js"></script>
    <script src="plugins/flatfy/js/owl.carousel.js"></script>
    <script src="plugins/flatfy/js/script.js"></script>
    <!-- StikyMenu -->
    <script src="plugins/flatfy/js/stickUp.min.js"></script>
<script>
  jQuery(function($) {
    $(document).ready( function() {
      $('.navbar-default').stickUp();
      
    });
</script>

</body>
