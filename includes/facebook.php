<script language="javascript" type="text/javascript">
FB.init({
		appId: '386856931411961',
			status: true, 
			cookie: true, 
			xfbml: true
});

function search(data) {
	console.log(data.toString());
}

function getFriends() {
	FB.api('/me/friends', function(response) {
		if(response.data) {
			$.each(response.data,function(index,friend) {
				var face = document.createElement("input");
				face.type = "checkbox";
				face.innerHTML = friend['name'];
				document.getElementById("fb").appendChild(face);
			});
		} else {
			alert("You ain't got friends!");
		}
	});
}
</script>
