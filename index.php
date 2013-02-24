<?php 
	//$con = mysql_connect("localhost", "root") or die(mysql_error());
	//mysql_select_db("POPDB", $con) or die(mysql_error());
    
    if(isset($_POST['fb_name']) && isset($_POST['fb_id'])){
        window.alert("IN HERE FUCK YOU");
        $fb_name = $_POST['fb_name'];
        $fb_id = $_POST['fb_id'];
        mysql_query("INSERT INTO TransTable (Pname, FBID)
        VALUES('$fb_name', '$fb_id')");
    }
	
	$data = $_REQUEST['data'];
	if (isset($data)) {
		echo $data;
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
    <link type="text/css" rel="stylesheet" href="includes/css/lightbox.css" />

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
            	<div id="heart" class="hide"><div class="row">
                <img id="heart_img" src="includes/img/heart-meter.jpg"/>
                <input id="heart_meter" type="hidden" value="0" />
                </div></div>
                <div class="two columns end"><div class="row">
                <img src="includes/img/pencil-mini.jpg"/>
                </div></div>
            </div>
            </div>
            <div class="four columns text-center"><div class="row">
            	<h4 id="donated_amount">Donation: $0</h4>
            </div></div>
            <hr/>
        </div>
        <!-- Image -->
        <div id="scene_wrapper" class="row scene_view">
            <div class="twelve columns">
            	<div class="ten columns">
                <a id="scene_trigger" class="round button" href="javascript:scene_trigger()">to School View</a>
                </div>
                <div id="reset" class="two columns hide">
                <a id="reset_button" class="round button" href="javascript:reset_all()">Reset</a>
                </div>
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
            <div class="twelve columns shift-up"><div class="seven columns end shift-ex">
                <a href="javascript:increment('blackboard', 90)"><img src="includes/img/blackboard.png"/></a>
                <div id="blackboard" class="current">0/1</div>
            </div></div>
            <div class="twelve columns shift-down">
                <div class="three columns offset-by-four"><a href="javascript:increment('chalks', 7)"><img src="includes/img/chalk.png"/></a>
                <div id="chalks" class="current">0/10</div></div>
                <div class="three columns end"><a href="javascript:increment('b_eraser', 5)"><img src="includes/img/b_eraser.png"/></a>
                <div id="b_eraser" class="current">0/5</div></div>
            </div>
            <div class="twelve columns shift-down"><div class="eight columns offset-by-four">
                <a href="javascript:increment('table', 100)"><img src="includes/img/table.png"/></a>
                <div id="table" class="current">0/1</div>
            </div></div>
            <div class="twelve columns shift-down">
                <div class="four columns offset-by-one"><a href="javascript:increment('eraser', 3)"><img src="includes/img/eraser.png"/></a>
                <div id="eraser" class="current">0/30</div></div>
                <div class="three columns"><a href="javascript:increment('pencil', 5)"><img src="includes/img/pencil.jpg"/></a>
                <div id="pencil" class="current">0/50</div></div>
                <div class="three columns offset-by-one"><a href="javascript:increment('paper', 10)"><img src="includes/img/paper.png"/></a>
                <div id="paper" class="current">0/30</div></div>
            </div>
            <div class="twelve columns shift-down">
                <div class="five columns offset-by-two"><a href="javascript:increment('chair', 30)"><img src="includes/img/chair.png"/></a>
                <div id="chair" class="current">0/20</div></div>
                <div class="five columns"><a href="javascript:increment('desk', 80)"><img src="includes/img/desk.png"/></a>
                <div id="desk" class="current">0/20</div></div>
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
