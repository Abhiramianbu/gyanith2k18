$('document').ready(function()
{ 
	 $("#login").validate({
      rules:
	  {
			
		email: {
			required: true
		},
		pwd: {
            required: true
		},
	   },
       messages:
	   {
            email: "Please provide an Email address",
			pwd: "please enter your password",
		},
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* form submit */
	   function submitForm()
	   {		
				var data = $("#login").serialize();
				
				$.ajax({
					type : 'POST',
					url  : 'valid_login.php',
					data : data,
					beforeSend: function()
					{	$("#error").html('');
						$("#error").html('<div class="alert alert-info"> <span class="glyphicon glyphicon-thumbs-up"></span> &nbsp;Please wait.Signing you in...</div>');
						//$("#error1").fadeOut();
						$("#login-btn").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp;sending ...');
					},
					success :  function(data)
					{						
									if(data=="logged")
									{
										$('#login-btn').html('Sending ...');
										setTimeout('$(".login-wrap").fadeOut(500, function(){ window.location.replace("/index.php"); }); ',5000);
										
									}
									else{
											
										$("#error").fadeIn(1000, function(){
											$("#login-btn").val('Login');
											$("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp;'+data+' </div>');
										});
										$("#login-btn").html('Login');		
									}
									
					}
				});
				return false;
		}
	   /* form submit */

});