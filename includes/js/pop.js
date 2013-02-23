function scene_trigger() {
	
	var trigger = document.getElementById('scene_trigger');
	var scene = document.getElementById('scene_wrapper');
	
	if (trigger.innerHTML == 'to School View') {
		trigger.innerHTML = 'to Scenary View';
		scene.className = 'row school_view';
	} else {
		trigger.innerHTML = 'to School View';
		scene.className = 'row scene_view';
	}
}
	
$(window).ready(function(e) {
	
	

});
