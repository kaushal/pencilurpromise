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
</head>
<body>
    <?php 
        mysql_connect("localhost", "root", "root") or die(mysql_error());
        mysql_select_db("PoP") or die(mysql_error());
    ?>
	<div class="row">
	<div class="twelve columns" >
        <!-- Includes Header -->	
        <?php include("includes/header.php") ?>
        <!-- Includes Navigation -->
        <?php include("includes/nav.php") ?>
    </div>
    </div>
    
    <div class="row">
    <div class="twelve columns">
        
        <!-- Main Content
        ====================== -->
        <div class="nine push-three mobile-four columns">
        <div class="row">
        
        <p>Body Area</p>
        
        </div>
        </div><!-- #end-of-main-content-area -->
        
        <!-- Includes Left Sidebar -->
        <?php include("includes/side_nav.php") ?>
    
    </div>
    </div><!-- #end-of-all-content -->
    
    <!-- Includes Footer -->
    <?php include("includes/footer.php") ?>
    
</body>
</html>
