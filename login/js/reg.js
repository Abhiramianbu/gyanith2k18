var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches
var form = $("#msform");
var regd = document.getElementById("reg-d");
var logd = document.getElementById("log-d");
var sig = document.getElementById("signup-btn");
var log = document.getElementById("loglog");

sig.addEventListener("click", function(){
    //alert("signup clicked");
   /* $("#log-d").fadeOut(500);
    $("#reg-d").fadeIn(500);
    */
    regd.style.display = "block";
    logd.style.display = "none";
    $("title").html("SignUp | Gyanith '18");
    //$('#reg-d')[0].reset();
    //document.getElementById("reg-d").reset();
    document.getElementById("error").innerHTML = "";
    $("#error").html('');
});

log.addEventListener("click", function(){
   /* $("#reg-d").fadeOut(500);
    $("#log-d").fadeIn(500);
    $("p").fadeIn(); 
    */
    regd.style.display = "none";
    logd.style.display = "block";
    $("title").html("Login | Gyanith '18");
    //$('#log-d')[0].reset();
    //document.getElementById("log-d").reset();
    document.getElementById("error").innerHTML = "";
    $("#error").html('');
});
function submitForm()
{
    //alert("signup submit");			
	var data = $("#msform").serialize();
			$.ajax({
				type : 'POST',
				url  : 'valid_reg.php',
				data : data,
				beforeSend: function()
				{	
					
                    $("#error").html('');
                    $("#error").html('<div class="alert alert-info"> <span class="glyphicon glyphicon-thumbs-up"></span> &nbsp;Please wait.Registering you in...</div>');
					//$("#error").fadeOut();
				//	$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
					$("#sign-btn").val('sending...');
				},
				success :  function(data)
                {		
                            if(data=="registered")
							{
						            $("#sign-btn").val('Signing Up...');
                                    $("#error").fadeIn(1000, function(){
                                        $("#error").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-thumbs-up"></span> &nbsp;Success! Activation link has been sent to your mail. Click on it to activate your account.</div>');
                                    });
                                    $('#msform')[0].reset();
                                    $("#collegetxt").hide();
							}
							else{
									/*$(function () {
										$('body,html').animate({scrollTop: 0}, 800);
									});*/
									$("#error").fadeIn(1000, function(){
								    	$("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-thumbs-down"></span> &nbsp;'+data+' !</div>');	
									
									});
											
                            }
                            $("#sign-btn").val('Sign Up');
			   }
			});
				return true;
		}
$('document').ready(function()
{ 
    $("#collegetxt").hide();
    $("#college").change(function() {
        if ($(this).val() == "0") {
           $("#collegetxt").show();
        }
        else{
            $("#collegetxt").hide();
        }
    });
    
    form.validate({
		rules: {
			fname: {
                required: true,
                maxlength:40,
             },
             lname: {
                 required: true,
                 maxlength:40,
                 
             },
             email1: {
                required: true,
                email: true
            },
            pwd1: {
				required: true,
				minlength: 8,
				maxlength: 15
			},
			cpwd: {
				required: true,
				equalTo:'#pwd1',
			},
		    mobile:{
				required: true,
                minlength:10,
                maxlength:13
            },
            college:{
                required:true
            },
            collegetxt:{
                required:true
            },
            
        },
		messages: {
			fname:{
                required:"Please enter first name",
                maxlength:"First name cannot exceed 40 characters",
              
            },
            lname:{
                required:"Please enter second name",
                maxlength:"Second name cannot exceed 40 characters",
            },
            email1: 
			{
                required:"Please enter your email address",
                email:"Please enter a valid email address"
			},
            pwd1:{
                required: "Please provide a password",
				minlength: "Password should at least have 8 characters",
				maxlength:"Password shouldn't exceed 15 characters"
            },
			
			cpwd:{
				minlength: "Please retype your password",
				equalTo: "Password doesn't match !"
			},
            mobile:
            {   required:'Please enter phone number',
                minlength: "Please enter a valid phone number",
                maxlength:"Please enter a valid phone number"
            },
            college:{
                required:"Please select your college"
            },
            collegetxt:{
                required:"Please enter your college name"
            },
            
		}
	});
});



$('#next1').click(function(){
	//if (form.valid() == true){
    if($('#fname').valid()==true && $('#lname').valid()==true){
		if(animating) return false;
	    animating = true;
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        //show the next fieldset
        next_fs.show(); 
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = (now * 50)+"%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
            'transform': 'scale('+scale+')',
            'position': 'absolute'
        });
        next_fs.css({'left': left, 'opacity': opacity});
        }, 
        duration: 800, 
        complete: function(){
            current_fs.hide();
            animating = false;
        }, 
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
	}
});


$('#next2').click(function(){
	if ($("#email1").valid() == true && $("#pwd1").valid() == true && $("#cpwd").valid() == true && $("#mobile").valid() == true){
        if(animating) return false;
	    animating = true;
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        //show the next fieldset
        next_fs.show(); 
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = (now * 50)+"%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
            'transform': 'scale('+scale+')',
            'position': 'absolute'
        });
        next_fs.css({'left': left, 'opacity': opacity});
        }, 
        duration: 800, 
        complete: function(){
            current_fs.hide();
            animating = false;
        }, 
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
	}
});

$('#sign-btn').click(function(){
    /*if($( "#college" ).val()==""){
        $("collerr")
    }*/
    
    if($("#college").valid()==true && $('#fname').valid()==true && $('#lname').valid()==true && $("#email1").valid() == true && $("#pwd1").valid() == true && $("#cpwd").valid() == true && $("#mobile").valid() == true){
        if($('#collegetxt').is(":visible")){
            //alert("visible text");
            var clg = $.trim($('#collegetxt').val());
            if (clg  === '') {
                //alert('Please enter your college name');
                $("#error").fadeIn(500, function(){
                    $("#error").html('<div class="alert alert-danger">Please enter your college name !</div>');	
                });
            }
            else{
                submitForm();	
            }
        }
        else{
            submitForm();	
        }
        
    }

});
$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});