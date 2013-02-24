<?php 
	$con = mysql_connect("localhost", "root") or die(mysql_error());
	mysql_select_db("POPDB", $con) or die(mysql_error());
    
    /*if(isset($_POST['fb_name']) && isset($_POST['fb_id'])){
        $fb_name = $_POST['fb_name'];
        $fb_id = $_POST['fb_id'];
        mysql_query("INSERT INTO Trans (Pname, FBID)
        VALUES('$fb_name', '$fb_id')");
    }*/
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
	<div class="row">
	<div class="twelve columns" >
        <!-- Includes Navigation -->
        <?php include("includes/nav.php") ?>
    </div>
    </div>
    
    <!-- Main Content
    ====================== -->
    <div class="twelve columns shift-up">
    <div class="row">
    	<!-- Main Display Area -->
        <div class="nine push-three mobile-four columns">
        <!-- Status bar -->
        <div class="row">
            <div class="eight columns">
            <div class="row">
            	<div class="ten columns"><div class="row">
                <img src="includes/img/heart-meter.jpg"/>
                </div></div>
                <div class="two columns"><div class="row">
                <img src="includes/img/pencil-mini.jpg"/>
                </div></div>
            </div>
            </div>
            <div class="four columns text-center"><div class="row">
            	<h4>Donation: $1</h4>
            </div></div>
            <hr/>
        </div>
        <!-- Image -->
        <div id="scene_wrapper" class="row scene_view">
            <div class="twelve columns">
                <a id="scene_trigger" class="round button" href="javascript:scene_trigger()">to School View</a>
            </div>
            
            <!-- Scenary View Block-->
            <div id="scenary" class="show">
            <br/><br/><br/><br/><br/><br/>
            <div class="twelve columns shift-down">
            	<div id="our-story" class="four columns">
                <a href="http://www.pencilsofpromise.org/who-we-are/our-story">
                	<img src="includes/img/our-story.jpg">
                </a></div>
                <div id="our-people" class="four columns">
                <a href="http://www.pencilsofpromise.org/who-we-are/our-people">
                	<img src="includes/img/our-people.jpg">
                </a></div>
                <div id="our-blog" class="four columns">
                <a href="http://www.pencilsofpromise.org/our-blog">
                	<img src="includes/img/our-blog.jpg">
                </a></div>
            </div>
            <div class="twelve columns shift-down">
                <div id="our-approach" class="four columns">
                <a href="http://www.pencilsofpromise.org/our-approach">
                	<img src="includes/img/our-approach.jpg">
                </a></div>
            	<div id="our-partners" class="four columns">
                <a href="http://www.pencilsofpromise.org/who-we-are/our-partners">
                	<img src="includes/img/our-partners.jpg">
                </a></div>
                <div id="our-financials" class="four columns">
                <a href="http://www.pencilsofpromise.org/who-we-are/our-financials">
                	<img src="includes/img/our-financials.jpg">
                </a>
                </div>
            </div>
            </div>
            
            <!-- School View Block -->
            <div id="school" class="hide">
            <div class="twelve columns"><div id="blackboard" class="six columns end">
                <a href="#"><img src="includes/img/blackboard.jpg"/></a>
            </div></div>
            <div class="twelve columns shift-down">
                <div id="chalks" class="three columns offset-by-four"><a href="#"><img src="includes/img/chalk.jpg"/></a></div>
                <div id="b_eraser"class="three columns end"><a href="#"><img src="includes/img/b_eraser.jpg"/></a></div>
            </div>
            <div class="twelve columns shift-down"><div id="table" class="eight columns offset-by-four">
                <a href="#"><img src="includes/img/table.jpg"/></a>
            </div></div>
            <div class="twelve columns shift-down">
                <div id="eraser" class="four columns offset-by-one"><a href="#"><img src="includes/img/eraser.jpg"/></a></div>
                <div id="pencil" class="three columns"><a href="#"><img src="includes/img/pencil.jpg"/></a></div>
                <div id="paper" class="three columns offset-by-one"><a href="#"><img src="includes/img/paper.jpg"/></a></div>
            </div>
            <div class="twelve columns shift-down">
                <div id="chair" class="five columns offset-by-two"><a href="#"><img src="includes/img/chair.jpg"/></a></div>
                <div id="desk" class="five columns"><a href="#"><img src="includes/img/desk.jpg"/></a></div>
            </div>
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
