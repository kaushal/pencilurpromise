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
				var div = document.createElement("div");
				var face = document.createElement("input");
				var p = document.createElement("p");
				face.type = "checkbox";
				p.inner_HTML = friend['name'];
				div.appendChild(face);
				div.appendChild(p);
				document.getElementById("fb").appendChild(div);
			});
		} else {
			alert("You ain't got friends!");
		}
	});
}
</script>
