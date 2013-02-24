function increment(id) {
	if (document.getElementById('school').className == 'show') {
		var value = document.getElementById(id);
		var parser = (value.innerHTML).split('/');
		var current = parser[0];
		var limit = parser[1];
		console.log(current + "vs" + limit);
		if (current != limit) {
			current++;
			document.getElementById(id).innerHTML = current + "/" + limit;
		}
	}
}

function reset_all() {
	document.getElementById("blackboard").innerHTML = "0/1";
	document.getElementById("chalks").innerHTML = "0/10";
	document.getElementById("b_eraser").innerHTML = "0/5";
	document.getElementById("table").innerHTML = "0/1";
	document.getElementById("eraser").innerHTML = "0/20";
	document.getElementById("pencil").innerHTML = "0/20";
	document.getElementById("paper").innerHTML = "0/1000";
	document.getElementById("chair").innerHTML = "0/20";
	document.getElementById("table").innerHTML = "0/20";
}

function scene_trigger() {
	var trigger = document.getElementById('scene_trigger');
	var scene = document.getElementById('scene_wrapper');
	
	var scene_block = document.getElementById('scenary');
	var school_block = document.getElementById('school');
	var reset_button = document.getElementById('reset');
	
	if (scene_block.className == 'show') {
		trigger.innerHTML = 'to Scenery View';
		scene.className = 'row school_view';
		scene_block.className = 'hide';
		school_block.className = 'show';
		reset_button.className = 'show';
		
	} else if (school_block.className == 'show') {
		trigger.innerHTML = 'to School View';
		scene.className = 'row scene_view';
		scene_block.className = 'show';
		school_block.className = 'hide';
		reset_button.className = 'hide';
	}
}
	
$(window).ready(function(e) {
	
	

});
