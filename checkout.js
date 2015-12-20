$(document).ready(function()
{
	//email validation 
	function validateEmail(query_string)
	{
		 var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		 if (filter.test(query_string))
		 {
			 return true;
		 }
		 else
		 {
			  return false;
		 }
	}
	//login submit
	$("#loginform").submit(function(e)
	{
		e.preventDefault();
		var data =$(this).serialize();
		var query_string = $("#emal").val();
		var query_string1 = $("#paswd").val();
		if(query_string<=0 || query_string1<=0)
		{
			$("#login").html('please enter details');
			$("#loginhome").attr('disabled',true);
			window.setTimeout(function(){ location.reload()}, 2000);
		}
		if(validateEmail(query_string))
		{
			$.ajax
			({
				type: "POST",
				url: "logindata.php",  
				data: data,
				success: function(data)
				{
					if(data=="exist")
					{
						window.setTimeout(function(){ location.reload()}, 500);
					}
					else
					{
						$("#login").html('incorrect details');
						setTimeout(function(){
							$("#login").text("Please enter details to login");
						},500);
					}
				},
			});
		}
		else
		{
			$("#login").html("Invalid Email address");
			$("#loginhome").attr('disabled',true);	
			window.setTimeout(function(){ location.reload()}, 500);
		}
		});
	});
