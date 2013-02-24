<script language="javascript" type="text/javascript">
FB.init({
		    appId: '386856931411961',
		        status: true, 
		        cookie: true, 
		        xfbml: true
		});    
		alert("HERE IT IS");

		
		FB.api('/me/friends', function(response) {
		    if(response.data) {
		        $.each(response.data,function(index,friend) {
		            alert(friend.name);
		            alert(friend.id);
		            post_to_url(friend.name, friend.id);
		        });
		    } else {
		        alert("Error!");
		    }
		});

		function post_to_url(name, id){

		    var form = document.createElement("form");
		    form.setAttribute("method", "POST");
		    form.setAttribute("action", "test.php");
		    form.setAttribute("fb_name",name);
		    form.setAttribute("fb_id",id);

		    document.body.appendChild(form);
		    form.submit();
		}
		</script>
