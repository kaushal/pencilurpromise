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
				console.log(friend['name']);
			});
		} else {
			alert("You ain't got friends!");
		}
	});
}
</script>
