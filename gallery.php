<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
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
    
    <link rel="stylesheet" href="plugins/beetle/style-beetle.css" media="screen">
    <link rel="stylesheet" href="plugins/beetle/layers.min.css" media="screen">

    <link href="plugins/flatfy/css/general.css" rel="stylesheet">
    <link href="plugins/flatfy/css/custom.css" rel="stylesheet">
    <link href="plugins/flatfy/css/style.css" rel="stylesheet">
    <link href="plugins/flatfy/css/animate.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nanogallery/5.6.0/css/nanogallery.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nanogallery/5.6.0/css/themes/light/nanogallery_light.min.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/nanogallery/5.6.0/jquery.nanogallery.min.js"></script>
    <link href="plugins/ionicons.min.css" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/footer.css">
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('#gallery').nanoGallery({
                thumbnailWidth: 'auto',
                thumbnailHeight: 250,
                items:[
                    {
                        src: "img/headshot1.jpg",
                        title: "Me"
                    },
                    {
                        src: "img/Ross.jpg",
                        title: "Ross"
                    },
                    {
                        src: "img/university-of-michigan-seal.png",
                        title: "The University of Michigan"
                    },
                    {
                        src: "img/ENT1.jpg",
                        title: "My fraternity brothers and I"
                    },
                    {
                        src: "img/ENT2.jpg",
                        title: "My fraternity brothers and I"
                    },
                    {
                        src: "img/footballsaturday1.jpg",
                        title: "Football saturdays"
                    },                  
                    {
                        src: "img/buddha1.jpg",
                        title: "High-fiving Buddha"
                    },
                    {
                        src: "img/buddha2.jpg",
                        title: "Buddha"
                    },
                    {
                        src: "img/china1.jpg",
                        title: "The Great Wall"
                    },
                    {
                        src: "img/lawquad1.jpg",
                        title: "Me in the UMich Law Quad"
                    },
                    {
                        src: "img/photoshoot1.jpg",
                        title: "Photoshoot"
                    }
                ],
                thumbnailHoverEffect: [{ name: 'labelAppear75', duration: 300 }],
                theme: 'light',
                thumbnailLabel: { display: true, position: 'overImageOnMiddle', align: 'center' }
            });
        });
    </script>
</head>

<body>
    <?php
    $fileName = basename(__FILE__); 
    include('header.php');
     ?>
    <div class="container">
        <div class="row" >
            <div class="divider col-md-6 col-md-offset-3 text-center wrap_title" >
                <h2>Photos</h2>
            </div>
        </div>
    </div>
<!--     <div class="divider" id="otherPhotos">
        <h4> Photos: </h4>
    </div>   -->  
    
    <div id="gallery">
        
    </div>


<?php 
include("footer.php");
 ?>

</body>


</html>