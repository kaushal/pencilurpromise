<script language="javascript" type="text/javascript">
FB.init({
		appId: '337919796309503',
			status: true, 
			cookie: true, 
			xfbml: true
});

function getFriends() {
	FB.api('/me/friends', function(response) {
		if(response.data) {
			$.each(response.data,function(index,friend) {
				var div1 = document.createElement("div");
				var div2 = document.createElement("div");
				var check = document.createElement("input");
				var face = document.createElement("p");
				face.innerHTML = friend['name'];
				check.type = "checkbox";
				check.name = friend['name'];
				div1.className = "eleven columns";
				div1.appendChild(face);
				div2.className = "one column";
				div2.appendChild(check);
				document.getElementById("fb").appendChild(div1);
				document.getElementById("fb").appendChild(div2);
			});
		} else {
			alert("You ain't got friends!");
		}
	});
}
</script>
