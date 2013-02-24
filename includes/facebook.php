<script language="javascript" type="text/javascript">
FB.init({
		appId: '386856931411961',
			status: true, 
			cookie: true, 
			xfbml: true
});

function getFriends() {
	FB.api('/me/friends', function(response) {
		if(response.data) {
			$.each(response.data,function(index,friend) {
				var div = document.createElement("div");
				var check = document.createElement("input");
				var face = document.createElement("p");
				face.innerHTML = friend['name'];
				face.className = "left";
				check.type = "checkbox";
				check.name = friend['name'];
				check.className = "right";
				div.className = "row";
				div.appendChild(face);
				div.appendChild(check);
				document.getElementById("fb").appendChild(div);
			});
		} else {
			alert("You ain't got friends!");
		}
	});
}
</script>
