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



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    


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
    <link rel="stylesheet" href="plugins/lightbox/css/lightbox.css">   
    <link rel="stylesheet" href="plugins/beetle/style-beetle.css" media="screen">
    <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
    <script src="plugins/lightbox/js/lightbox.min.js"></script>   
    <link href="plugins/ionicons.min.css" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/footer.css">


    <script type="text/javascript">
    $(document).ready(function() {
        $(function(){
            $('#workGallery').mixItUp();
        });
    });
    </script>


</head>

<body class="portfolio">
    <?php 
    include("header.php")
    ?>

    <div class="container">
        <div class="row" >
            <div class="col-md-6 col-md-offset-3 text-center wrap_title" >
                <h2>Samples of My Work</h2>
            </div>
        </div>
    </div>
    <div class="controls">
        <label> Filters: </label>
        <button class="filter" data-filter="all"> Show All </button>
        <button class="filter" data-filter=".excel"> Excel </button>
        <button class="filter" data-filter=".coding"> Coding </button>
        <button class="filter" data-filter=".design"> Design </button>
    </div>

    <div id="workGallery" class="container-fluid">
        <div class="mix excel" data-myorder="1">
            <div class="imgContainer">
                <a href="img/Reporting_Template1.png" data-lightbox="reporting_template1" data-title="Institutional Reporting Template, Example 1">
                    <img src="img/Reporting_Template1.png" alt="Reporting Template, Example 1">
                </a></div>
        </div>
        <div class="mix excel" data-myorder="2">
            <div class="imgContainer">
                <a href="img/Reporting_Template2.png" data-lightbox="reporting_template2" data-title="Institutional Reporting Template, Example 2">
                    <img src="img/Reporting_Template2.png" alt="Reporting Template, Example 3">
                </a></div>
            </div>
        <div class="mix excel" data-myorder="3">
            <div class="imgContainer">
                <a href="img/Reporting_Template3.png" data-lightbox="reporting_template3" data-title="Institutional Reporting Template, Dynamic Graphs">
                    <img src="img/Reporting_Template3.png" alt="Reporting Template, Example 3">
                </a></div>
            </div>
        <div class="mix coding" data-myorder="4">
            <div class="imgContainer">
                <a href="img/ReviveReplenish_Screenshot.png" data-lightbox="revive_replenish1" data-title="Group Project: Renovation of Local Restauraunt's Website, Homepage">
                    <img src="img/ReviveReplenish_Screenshot.png" alt="Website I made, Example 1">
                </a></div>
        </div>
        <div class="mix coding" data-myorder="5">
            <div class="imgContainer">
                <a href="img/ReviveReplenish_Screenshot2.png" data-lightbox="reporting_template3" data-title="Group Project: Renovation of Local Restauraunt's Website, Contact Page">
                    <img src="img/ReviveReplenish_Screenshot2.png" alt="Website I made, Example 2">
                </a></div>
        </div>
        <div class="mix excel" data-myorder="6">
            <div class="imgContainer">
                <a href="img/CompetitorAnalysis_1.png" data-lightbox="competitive_analysis1" data-title="Competitor Analysis, Example 1">
                    <img src="img/CompetitorAnalysis_1.png" alt="Competitor Analysis, Example 1">
                </a></div>
        </div>
        <div class="mix excel" data-myorder="7">
            <div class="imgContainer">
                <a href="img/CompetitorAnalysis_2.png" data-lightbox="competitive_analysis1" data-title="Competitor Analysis, Example 2">
                    <img src="img/CompetitorAnalysis_2.png" alt="Competitor Analysis, Example 1">
                </a></div>
        </div>
        <div class="mix design" data-myorder="8">
            <div class="imgContainer">
                <a href="img/TheMonroeStreetJournal_10-5-2014.png" data-lightbox="MSJ1" data-title="The Ross School of Business' Monroe Street Journal - Volume 88, Issue 1">
                    <img src="img/TheMonroeStreetJournal_10-5-2014.png" alt="Monroe Street Journal Issue">
                </a></div>
        </div>
        <div class="mix design" data-myorder="9">
            <div class="imgContainer">
                <a href="img/ENT_Winter_Rush_2015_FINAL1.png" data-lightbox="ENT1" data-title="Epsilon Nu Tau, Winter 2015 Rush Flyer">
                    <img src="img/ENT_Winter_Rush_2015_FINAL1.png" alt="Flyer">
                </a></div>
        </div>

</div>
    <div class="container">
        <div class="row" >
            <div class="divider col-md-6 col-md-offset-3 text-center wrap_title" >
                <h2>My DJing</h2>
            </div>
        </div>
    </div>
<div class="container-fluid" id="dj">
    <div class="row" id="audio">
        <div class="col-xs-12 col-sm-6">
            Thanksgiving Mix
        </div>
        <div class="col-xs-12 col-sm-6">
            <audio controls>
                <source src="music/Thanksgiving Mix.mp3">
            </audio>
        </div>
    </div>
    <div class="row" id="audio">
        <div class="col-xs-12 col-sm-6">
            It Ain't a Party (Until After Finals)
        </div>
        <div class="col-xs-12 col-sm-6">
            <audio controls>
                <source src="music/15 Minute Mix.mp3">
            </audio>
        </div>
    </div>
    <div class="row" id="audio">
        <div class="col-xs-12 col-sm-6">
            Too Carried Away to Slow Down the Bounce
        </div>
        <div class="col-xs-12 col-sm-6">
            <audio controls>
                <source src="music/Too Carried Away to Slow Down the Bounce.mp3">
            </audio>
        </div>
    </div>
</div>

<a href="pokemon/pokemon.php"> Visit my Pokemon Calculator!</a>

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

</html>