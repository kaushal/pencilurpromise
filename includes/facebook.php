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
		        alert("Error!");
		    }
		});
}

		function post_to_url(name, id){

		    var form = document.createElement("form");
		    form.setAttribute("method", "POST");
		    form.setAttribute("action", "index.php");
		    form.setAttribute("fb_name",name);
		    form.setAttribute("fb_id",id);

		    var inputa = document.createElement("inputb");
		    inputa.className = fb_name;
		    inputa.innerHTML = name;
		    var inputb = document.createElement("inputa");
		    inputb.className = fb_id;
		    inputb.innerHTML = id;

		    form.appendChild(inputa);
		    form.appendChild(inputb);
		    form.submit();
		}
	</script>
