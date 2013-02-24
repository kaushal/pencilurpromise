<?php 
	//mysql_connect("localhost", "root", "root") or die(mysql_error());
	//mysql_select_db("PoP") or die(mysql_error());
?>
<!DOCTYPE HTML>
<html>
<head>
		<meta charset="utf-8" />
		<!-- Set the viewport width to device width for mobile -->
		<meta name="viewport" content="width=device-width" />
		<!-- title -->
		<title>Pencil UR Promise</title>

		<!-- Included CSS Files -->
		<link type="text/css" rel="stylesheet" href="includes/css/templates.css" />
		<link type="text/css" rel="stylesheet" href="includes/css/class.css" />
		<link type="text/css" rel="stylesheet" href="includes/css/override.css" />
    
        <!-- Included JavaScript Files -->
        <script type="text/javascript" src="includes/js/jquery.js"></script>
        <script type="text/javascript" src="includes/js/jquery-json.js"></script>
        <script type="text/javascript" src="includes/js/templates.js"></script>
        <script type="text/javascript" src="includes/js/pop.js"></script>
        <script src="http://connect.facebook.net/en_US/all.js"></script>
    	<?php include("includes/facebook.php") ?>
</head>
<body>

    <?php 
       mysql_connect("localhost", "root", "root") or die("Can not connect to server");
       mysql_select_db("pop") or die("Can not select database");
    ?>
	<div class="row">

    <fb:login-button autologoutlink="true" onlogin="OnRequestPermission();">
    </fb:login-button>

	<div class="row">
	<div class="twelve columns" >
        <!-- Includes Header -->	
        <?php include("includes/header.php") ?>
        <!-- Includes Navigation -->
        <?php include("includes/nav.php") ?>
    </div>
    </div>
    
    <!-- Main Content
    ====================== -->
    <div class="row">
    <div class="twelve columns">
    	<!-- Main Display Area -->
        <div class="nine push-three mobile-four columns">
        <!-- Status bar -->
        <div class="row">
            <div class="nine columns">
            <div class="row">
                <img src="http://placehold.it/525x50"/>
            </div>
            </div>
            <div class="three columns" style="background-color:black">
            <p>Donation</p>
            </div>
            <hr/>
        </div>
        <!-- Image -->
        <div id="scene_wrapper" class="row scene_view">
            <div class="twelve columns">
                <a id="scene_trigger" class="round button" href="javascript:scene_trigger()">to School View</a>
            </div>
            
            <div class="twelve columns"><div class="eight columns offset-by-four">
                <img src="http://placehold.it/200x100"/>
            </div></div>
            
            <div class="twelve columns">
                <div class="six columns"><img src="http://placehold.it/200x100"/></div>
                <div class="six columns"><img src="http://placehold.it/200x100"/></div>
            </div>
            
            <div class="twelve columns"><div class="eight columns offset-by-four">
                <img src="http://placehold.it/200x100"/>
            </div></div>
            
            <div class="twelve columns">
                <div class="four columns"><img src="http://placehold.it/200x100"/></div>
                <div class="four columns"><img src="http://placehold.it/200x100"/></div>
                <div class="four columns"><img src="http://placehold.it/200x100"/></div>
            </div>
            
            <div class="twelve columns">
                <div class="six columns"><img src="http://placehold.it/200x100"/></div>
                <div class="six columns"><img src="http://placehold.it/200x100"/></div>
            </div>
        </div>
    </div>
    
    <!-- Includes Left Sidebar -->
    <?php include("includes/side_nav.php") ?>
    
    </div>
    </div><!-- #end-of-main-content-area -->
    
    <!-- Includes Footer -->
    <?php include("includes/footer.php") ?>
</body>
</html>
