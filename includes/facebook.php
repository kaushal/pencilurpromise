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
				post_to_url(friend.name, friend.id);
			});
		} else {
			alert("You ain't got friends!");
		}
	});
}

function post_to_url(name, id){
	var form = document.createElement('form');
	form.method='post';
	form.action='index.php';
	
	input_a=document.createElement('input');
	input_a.type='text';
	input_a.name='fb_name';
	input_a.value='name';
	form.appendChild(input_a);
	
	input_b=document.createElement('input');
	input_b.type='text';
	input_b.name='fb_id';
	input_b.value='id';
	form.appendChild(input_b);
	document.body.appendChild(form);
	form.submit();
}
</script>
