function increment(id) {
	var value = document.getElementById(id);
	var parser = (value.innerHTML).split('/');
	var current = parser[0];
	var limit = parser[1];
	console.log(current + "vs" + limit);
	if (current != limit) {
		current++;
		document.getElementById(id).innerHTML = current + "/" + limit;
	} else {
		alert("");
	}
}

function scene_trigger() {
	var trigger = document.getElementById('scene_trigger');
	var scene = document.getElementById('scene_wrapper');
	
	var scene_block = document.getElementById('scenary');
	var school_block = document.getElementById('school');
	
	if (scene_block.className == 'show') {
		trigger.innerHTML = 'to Scenery View';
		scene.className = 'row school_view';
		scene_block.className = 'hide';
		school_block.className = 'show';
	} else if (school_block.className == 'show') {
		trigger.innerHTML = 'to School View';
		scene.className = 'row scene_view';
		scene_block.className = 'show';
		school_block.className = 'hide';
	}
}
	
$(window).ready(function(e) {
	
	

});
