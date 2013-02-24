<?php 
	$con = mysql_connect("localhost", "root", "root") or die(mysql_error());
	mysql_select_db("POPPER", $con) or die(mysql_error());
    
    if(isset($_POST['fb_name']) && isset($_POST['fb_id'])){
        $fb_name = $_POST['fb_name'];
        $fb_id = $_POST['fb_id'];
        mysql_query("INSERT INTO Trans (Pname, FBID)
        VALUES('$fb_name', '$fb_id')");
    }
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
            
            <div class="twelve columns"><div id="blackboard" class="six columns end">
                <img src="includes/img/blackboard.jpg"/>
            </div></div>
            
            <div class="twelve columns shift-down">
                <div id="chalks" class="three columns offset-by-four"><img src="includes/img/chalk.jpg"/></div>
                <div id="b_eraser"class="three columns end"><img src="includes/img/b_eraser.jpg"/></div>
            </div>
            
            <div class="twelve columns shift-down"><div id="table" class="eight columns offset-by-four">
                <img src="includes/img/table.jpg"/>
            </div></div>
            
            <div class="twelve columns shift-down">
                <div id="eraser" class="four columns offset-by-one"><img src="includes/img/eraser.jpg"/></div>
                <div id="pencil" class="three columns"><img src="includes/img/pencil.jpg"/></div>
                <div id="paper" class="three columns offset-by-one"><img src="includes/img/paper.jpg"/></div>
            </div>
            
            <div class="twelve columns shift-down">
                <div id="chair" class="five columns offset-by-two"><img src="includes/img/chair.jpg"/></div>
                <div id="desk" class="five columns"><img src="includes/img/desk.jpg"/></div>
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
