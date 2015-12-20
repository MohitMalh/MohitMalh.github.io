function validateEmail(query_string)
{//Email Validation code
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
//email address check if it exist
	$(document).ready(function()
  	{
  		$("#emal").blur(function(e)
  		{
			e.preventDefault();
  			var query_string = $(this).val();
  			if(query_string<=0)
  			{
  				$("#check").html('please enter an email address');
  				$("#continue").attr('disabled',true);
				window.setTimeout(function(){ location.reload()}, 500);
  			}
			if(validateEmail(query_string))
			{
	  			$.ajax
	  			({
	  				type: "POST",
	  				url: "signupdata.php",  
	      			data: {eml: query_string},  
	      			success: function(data)
	  				{
	  					if(data =='exist')
	  					{
	  						$('#check').html('Email id exist please click login');
							window.setTimeout(function(){ location.reload()}, 500);
							$("#continue").attr('disabled',true);
	  					}
	  					else
	  					{
							$('#check').html('Success');
							$("#continue").removeAttr('disabled');
							setTimeout(function(){
							$("#check").text(" ");
							},500);
	  					}
									
	  				},
	  			});
			}
  			else
  			{
				$("#check").html("Invalid Email address");
				$("#continue").attr('disabled',true);	
				window.setTimeout(function(){ location.reload()}, 500);
  			}
  		});
		//password  validation and senditng it to sessions
  		$("#continue").click(function(e)
  		{
			e.preventDefault();
  			var query_string2 = $("#pswd").val();
			
  			if(query_string2<=0)
			{
				$("#check1").html('please enter a password');
				$("#continue").attr('disabled',true);
				window.setTimeout(function(){ location.reload()}, 1000);
			}
  			else if(query_string2.length<5)
			{
				$("#check1").html("minimum length should be five");
				$("#continue").attr('disabled',true);
				window.setTimeout(function(){ location.reload()}, 1000);
			}
  			else
  			{
  				$.ajax
  				({
  					type: "POST",
  					url: "signuppass.php",  
      				data: {pasd: query_string2},
					success:function()
					{
						$("#continue").removeAttr('disabled');
						$(".address").show();
						$(".signup").hide();
						$("#submit").hide();
					}

  				});
				//continue").removeAttr('disabled');
			//window.location.href="signup1.php";
				
  			}
  		});
  	});
	
	//insert into database
	$(document).ready(function()
	{
		$("#signupform").submit(function(e)
		{
			e.preventDefault();
			var data =$(this).serialize();
			$.ajax
			({
				type: "POST",
				url: "insert.php",  
				data: data,
				success: function(data)
				{
					location.href="homepage.php";
				}
				});
			//window.location.href="homepage.php";
			});
		});
	
  