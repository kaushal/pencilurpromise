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

		    var inputa = document.createElement("input");
		    inputa.setAttribute("type", "text");
		    inputa.setAttribute("name", "fb_name");
		    intputa.innerHTML = "name";
		    var inputb = document.createElement("input");
		    inputb.setAttribute("type", "text");
		    inputb.setAttribute("name", "fb_id");
		    inputb.innerHTML = "id";

		    form.appendChild(inputa);
		    form.appendChild(inputb);
		    form.submit();
		}
	</script>
