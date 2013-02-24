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
		console.log("School: " + school_block.className);
		console.log("Scene: " + scene_block.className);
	} else if (school_block.className == 'show') {
		trigger.innerHTML = 'to School View';
		scene.className = 'row scene_view';
		scene_block.className = 'show';
		school_block.className = 'hide';
		console.log("School: " + school_block.className);
		console.log("Scene: " + scene_block.className);
	}
}
	
$(window).ready(function(e) {
	
	

});
