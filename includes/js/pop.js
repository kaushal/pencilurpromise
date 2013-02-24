function increment(id, price) {
	if (document.getElementById('school').className == 'show') {
		var value = document.getElementById(id);
		var parser = (value.innerHTML).split('/');
		var current = parser[0];
		var limit = parser[1];
		if (current != limit) {
			current++;
			document.getElementById(id).innerHTML = current + "/" + limit;
			hearty(price);
		}
	}
}

function hearty(price) {
	var heart = document.getElementById("heart");
	var heart_img = document.getElementById("heart_img");
	var heart_meter = document.getElementById("heart_meter");
	var heart_amount = document.getElementById("donated_amount");
	heart_meter.value = parseInt(heart_meter.value) + parseInt(price);
	
	if (heart_meter.value >= 1000) {
		heart.className = "ten columns";
		heart_img.src = "includes/img/heart-meter.jpg";
	} else if (heart_meter.value >= 900) {
		heart.className = "nine columns";
		heart_img.src = "includes/img/heart-meter_9.jpg";
	} else if (heart_meter.value >= 800) {
		heart.className = "eight columns";
		heart_img.src = "includes/img/heart-meter_8.jpg";
	} else if (heart_meter.value >= 700) {
		heart.className = "seven columns";
		heart_img.src = "includes/img/heart-meter_7.jpg";
	} else if (heart_meter.value >= 600) {
		heart.className = "six columns";
		heart_img.src = "includes/img/heart-meter_6.jpg";
	} else if (heart_meter.value >= 500) {
		heart.className = "five columns";
		heart_img.src = "includes/img/heart-meter_5.jpg";
	} else if (heart_meter.value >= 400) {
		heart.className = "four columns";
		heart_img.src = "includes/img/heart-meter_4.jpg";
	} else if (heart_meter.value >= 300) {
		heart.className = "three columns";
		heart_img.src = "includes/img/heart-meter_3.jpg";
	} else if (heart_meter.value >= 200) {
		heart.className = "two columns";
		heart_img.src = "includes/img/heart-meter_2.jpg";
	} else if (heart_meter.value >= 100) {
		heart.className = "one columns";
		heart_img.src = "includes/img/heart-meter_1.jpg";
	} else {
		heart.className = "hide";
	}
	
	heart_amount.innerHTML = "Donated: $" + heart_meter.value;
	if (heart_meter.value >= 1000)
		heart_amount.style.color = "red";
	else
		heart_amount.style.color = "black";
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
	document.getElementById("desk").innerHTML = "0/20";
	document.getElementById("heart_meter").value = 0;
	hearty(0);
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
