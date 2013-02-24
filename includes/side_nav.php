<?php
	//$data = mysql_query("SELECT ProjID, Country FROM ProjTbl") or die(mysql_error());
?>
<div class="three pull-nine mobile-four columns">
<div class="shift-tab">
	<ul class="nav-bar vertical">
		<li>
			<a href="includes/donate.php"> Make a Promise</a>
		</li>
		<li>
			<a href="includes/group.php">View/Create Groups</a>
		</li>
	</ul>
    <hr>
    <div class="text-center">
    <form method="post" action="index.php">
        <select id="customDropdown1" name="gender" style="width:75%">
            <option value="">Choose a Country to View</option>
            <?php
                while($info = mysql_fetch_array($data)){
                    echo "<option value='".$info['ProjID']."'>".$info['Country']."</option>";
                }
            ?>
        </select>
        <hr>
        <input type="submit" class="button-resize small round button" value="Submit"/>
	</form>
    </div>
	<!-- Sidebar Tabs -->
    <dl class="tabs">
        <dd class="active"><a href="#facebook">Facebook</a></dd>
        <dd><a href="#school">School</a></dd>
    </dl>
    <!-- Sidebar Tabs Content Area -->
    <ul class="tabs-content">
        <!-- Facebook Intergration -->
        <li class="active" id="facebookTab">
        	<div class="twelve columns text-center">
    		<a class="round button" href="javascript:getFriends()">Fb list</a><br/>
            </div>
            <div id="fb" class="twelve columns container shift-down">
            </div>
            
			<?php include 'side_fb.php' ?>
        </li>
        <!-- School Building Blocks -->
        <li id="schoolTab">
        <div class="twelve columns">
        	<a href="javascript:increment('blackboard', 90);" class="button">Blackboard</a><br/>
        	<a href="javascript:increment('chalks', 7);" class="button">Chalks</a><br/>
        	<a href="javascript:increment('b_eraser', 5);" class="button">Blackboard Eraser</a><br/>
        	<a href="javascript:increment('table', 100);" class="button">Table</a><br/>
        	<a href="javascript:increment('eraser', 3);" class="button">Eraser</a><br/>
        	<a href="javascript:increment('pencil', 5);" class="button">Pencil</a><br/>
        	<a href="javascript:increment('paper', 10);" class="button">Books</a><br/>
        	<a href="javascript:increment('chair', 30);" class="button">Chair</a><br/>
        	<a href="javascript:increment('desk', 80);" class="button">Desk</a>
        </div>
        </li>
    </ul>
    
</div>
</div>
