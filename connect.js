$(document).ready(function()
{
	$.getJSON('satisfy.php', function(data)
	{
		$.each(data, function(i, val)
		{
			$("#satisfy").append('<option value="'Booking', 'Tours Timing', 'Feedback','Museum Enquiry'</option>');
		});
	});
	

	$("#continue").click(function(e)
	{
		e.preventDefault();
  		var query_string = $("#emal").val();
  		var selected = $('#satisfy option:selected').val();
  		if(query_string<=0)
  			{
  				$("#check").html('please enter an email address');
  				$("#continue").attr('disabled',true);
  				window.setTimeout(function(){ location.reload()}, 500);
  			}
  		else if(selected<=0)
  		{
  				$("#check").html('please select');
  				$("#continue").attr('disabled',true);
  				window.setTimeout(function(){ location.reload()}, 500);
  		}
  		else if(selected=='select')
			{
				$("#continue").attr('disabled',true);
				$('check1').html("please select a value");
				window.setTimeout(function(){ location.reload()}, 500);
			}
		else
		{
			$("#check2").hide();
			$("#review").show();
			$('#continue').removeAttr("disabled")

		}
  			
  		});

		$("#back").click(function(e)
		{
			$("#check2").show();
			$("#review").hide();
		});
  		
	});
	$(document).ready(function()
	{

		$("#subfed").click(function(e)
		{
			$("#feedbackform1").submit(function(e)
			{
			e.preventDefault();
			var data =$(this).serialize();
			$.ajax
			({
				type: "POST",
				url: "insertfeedback.php",  
				data: data,
				success: function(data)
				{
					$("#showcomment").show();
					$("#review").hide();
					
				},
			});
		});
		});
	});
	