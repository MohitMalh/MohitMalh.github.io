$(document).ready(function()
	{

		$("#submit").click(function(e)
		{
			$("#checkoutform").submit(function(e)
			{
			e.preventDefault();
			var data =$(this).serialize();
			$.ajax
			({
				type: "POST",
				url: "checkoutdata.php",  
				data: data,
				success: function(data)
				{
					
	 				sessionStorage.clear();
	 				location.href="homepage.php";
					
				},
			});
		});
		});
	});
	