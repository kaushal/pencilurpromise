<script language="javascript" type="text/javascript">
FB.init({
		appId: '386856931411961',
			status: true, 
			cookie: true, 
			xfbml: true
});

function search(data) {
	
}

function getFriends() {
	FB.api('/me/friends', function(response) {
		if(response.data) {
			$.each(response.data,function(index,friend) {
				$.ajax( {
					url: "includes/test.php",
					type: "GET",
					data: "index_id=index, friend_id=friend",
					cache: true,
					success: search
				});
			});
		} else {
			alert("You ain't got friends!");
		}
	});
}
</script>
