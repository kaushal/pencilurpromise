<?php
	//$data = mysql_query("SELECT ProjID, Country FROM ProjTbl") or die(mysql_error());
?>
<div class="three pull-nine mobile-four columns">
<div class="shift-tab">
	<ul class="nav-bar vertical">
		<li>
			<a href="donate.php"> Make a Promise</a>
		</li>
		<li>
			<a href="group.php">View/Create Groups</a>
		</li>
	</ul>
    <hr>
    <form method="post" action="index.php">
        <select id="customDropdown1" name="gender">
            <option value="">Choose a Country to View</option>
            <?php
                while($info = mysql_fetch_array($data)){
                    echo "<option value='".$info['ProjID']."'>".$info['Country']."</li>";
                }
            ?>
        </select>
        <hr>
        <input type="submit" class="button-resize small round button" value="submit"/>
        <br>
	</form>
	<!-- Sidebar Tabs -->
    <dl class="tabs">
        <dd class="active"><a href="#facebook">Facebook</a></dd>
        <dd><a href="#school">School</a></dd>
    </dl>
    <!-- Sidebar Tabs Content Area -->
    <ul class="tabs-content">
        <!-- Facebook Intergration -->
        <li class="active" id="facebookTab">
    	Fb list:
			<?php include 'side_fb.php' ?>
        </li>
        <!-- School Building Blocks -->
        <li id="schoolTab">
        <div class="twelve columns">
        	<a href="javascript:increment('blackboard');" class="button">Blackboard</a><br/>
        	<a href="javascript:increment('chalks');" class="button">Chalks</a><br/>
        	<a href="javascript:increment('b_eraser');" class="button">Blackboard Eraser</a><br/>
        	<a href="javascript:increment('table');" class="button">Table</a><br/>
        	<a href="javascript:increment('eraser');" class="button">Eraser</a><br/>
        	<a href="javascript:increment('pencil');" class="button">Pencil</a><br/>
        	<a href="javascript:increment('paper');" class="button">Paper</a><br/>
        	<a href="javascript:increment('chair');" class="button">Chair</a><br/>
        	<a href="javascript:increment('desk');" class="button">Desk</a>
        </div>
        </li>
    </ul>
    
</div>
</div>