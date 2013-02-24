function set_image(option) {
	blackboard.style.visibility = option;
	chalks.style.visibility = option;
	b_eraser.style.visibility = option;
	table.style.visibility = option;
	eraser.style.visibility = option;
	pencil.style.visibility = option;
	paper.style.visibility = option;
	chair.style.visibility = option;
	desk.style.visibility = option;
}

function scene_trigger() {
	
	var trigger = document.getElementById('scene_trigger');
	var scene = document.getElementById('scene_wrapper');
	var blackboard = document.getElementById('blackboard');
	var chalks = document.getElementById('chalks');
	var b_eraser = document.getElementById('b_eraser');
	var table = document.getElementById('table');
	var eraser = document.getElementById('eraser');
	var pencil = document.getElementById('pencil');
	var paper = document.getElementById('paper');
	var chair = document.getElementById('chair');
	var desk = document.getElementById('desk');
	
	if (trigger.innerHTML == 'to School View') {
		trigger.innerHTML = 'to Scenery View';
		scene.className = 'row school_view';
		set_image('hidden');
	} else {
		trigger.innerHTML = 'to School View';
		scene.className = 'row scene_view';
		set_image('visible');
	}
}
	
$(window).ready(function(e) {
	
	

});
