<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pay2UseRecharge.in - Agent Login</title>

	<meta name="description" content="">

    <meta name="author" content="vladproduction.ru">

    <link rel="shortcut icon" href="dis-images/favicon.ico" />   

    <link rel="stylesheet" href="dis-css/validationEngine.jquery.css" type="text/css" media="screen"  />

	<link rel="stylesheet" href="dis-css/login.css" type="text/css" media="screen"  />

    <link rel="stylesheet" href="dis-lib/css0c38html.html?family=Cuprum" />    

    <script src="dis-lib/jquery.min.js"></script>

    <script src="dis-lib/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

    <script src="dis-lib/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>

    <script>

            jQuery(document).ready(function(){

                // binds form submission and fields to the validation engine

                jQuery("#form-login").validationEngine();

            });

    </script>

    <style type="text/css">

	/* Mask for background, by default is not display */

#mask {

	display: none;

	background: #000; 

	position: fixed; left: 0; top: 0; 

	z-index: 10;

	width: 100%; height: 100%;

	opacity: 0.8;

	z-index: 999;
}
/* You can customize to your needs  */
.login-popup{

	display:none;

	background: #333;

	padding: 10px; 	

	border: 2px solid #ddd;

	float: left;

	font-size: 1.2em;

	position: fixed;

	top: 50%; left: 50%;

	z-index: 99999;

	box-shadow: 0px 0px 20px #999; /* CSS3 */

        -moz-box-shadow: 0px 0px 20px #999; /* Firefox */

        -webkit-box-shadow: 0px 0px 20px #999; /* Safari, Chrome */

	border-radius:3px 3px 3px 3px;

        -moz-border-radius: 3px; /* Firefox */

        -webkit-border-radius: 3px; /* Safari, Chrome */

}

img.btn_close { Position the close button
	float: right; 
	margin: -28px -28px 0 0;
}

fieldset { 
	border:none; 
}
form.signin .textbox label { 
	display:block; 
	padding-bottom:7px; 
}
form.signin .textbox span { 
	display:block;
}
form.signin p, form.signin span { 
	color:#999; 

	font-size:11px; 

	line-height:18px;
} 
form.signin .textbox input { 
	background:#666666; 

	border-bottom:1px solid #333;

	border-left:1px solid #000;

	border-right:1px solid #333;

	border-top:1px solid #000;

	color:#fff; 

        border-radius: 3px 3px 3px 3px;

	-moz-border-radius: 3px;

        -webkit-border-radius: 3px;

	font:13px Arial, Helvetica, sans-serif;

	padding:6px 6px 4px;

	width:200px;

}
form.signin input:-moz-placeholder { color:#bbb; text-shadow:0 0 2px #000; }

form.signin input::-webkit-input-placeholder { color:#bbb; text-shadow:0 0 2px #000;  }
.button { 
	background: -moz-linear-gradient(center top, #f3f3f3, #dddddd);

	background: -webkit-gradient(linear, left top, left bottom, from(#f3f3f3), to(#dddddd));

	background:  -o-linear-gradient(top, #f3f3f3, #dddddd);

        filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#f3f3f3', EndColorStr='#dddddd');

	border-color:#000; 

	border-width:1px;

        border-radius:4px 4px 4px 4px;

	-moz-border-radius: 4px;

        -webkit-border-radius: 4px;

	color:#333;

	cursor:pointer;

	display:inline-block;

	padding:6px 6px 4px;

	margin-top:10px;

	font:12px; 

	width:214px;

}
.button:hover { background:#ddd; }
	</style>

   <script type="text/javascript">

   $(document).ready(function() {

	$('a.login-window').click(function() {

		

                //Getting the variable's value from a link 

		var loginBox = $(this).attr('href');



		//Fade in the Popup

		$(loginBox).fadeIn(300);

		

		//Set the center alignment padding + border see css style

		var popMargTop = ($(loginBox).height() + 24) / 2; 

		var popMargLeft = ($(loginBox).width() + 24) / 2; 

		

		$(loginBox).css({ 

			'margin-top' : -popMargTop,

			'margin-left' : -popMargLeft

		});

		

		// Add the mask to body

		$('body').append('<div id="mask"></div>');

		$('#mask').fadeIn(300);

		

		return false;

	});

	

	// When clicking on the button close or the mask layer the popup closed

	$('a.close, #mask').live('click', function() { 

	  $('#mask , .login-popup').fadeOut(300 , function() {

		$('#mask').remove();  

	}); 

	return false;

	});

});

</script> 
</head>
<div id="login-box" class="login-popup"> 

          <form method="post" class="signin" action="">

                <fieldset class="textbox">

                <label class="username">

                <span>Please Enter Your User Name</span>

                <input id="userid" name="userid" value="" type="text" autocomplete="on" placeholder="User ID">

                </label>

            	<label class="username">

                <span>Please Enter Your Reg Email ID</span>

                <input id="email" name="email" value="" type="text" autocomplete="on" placeholder="Email ID">

                </label>

                

                <button class="submit button" type="submit" name="repwd">Submit</button>

                <a href="#" class="close"><img src="" class="btn_close" title="Close Window" alt="Close" /></a>

                <p>

                <a class="forgot">Please Check Your Email For Password</a>

                </p> 

                                       

                </fieldset>

          </form>

</div>



<body>



    <section id="form">

    <form id="form-login" action="ag-loginaction.php" class="formular" method="post">

     <div id="content-header">
				  <p id="logo">Agent Panel Login</p>
                </div>
     		<div id="content">            

                 <input type="text" name="user" id="req" class="validate[required] text-input" placeholder="Username"><br><br>

                 <input type="password" name="pass" id="pass" class="validate[required] text-input" placeholder="Password"><br><br>

                 <p id="remember"><input type="checkbox" name="checkbox1" id="checkbox1" /> <label for="checkbox1"> Remember me</label></p>

                 <p id="forgot"><a href="#login-box" class="login-window">Forgate Password</a></p>                 

                 <input type="submit" name="go" value="Login">
            </div>

		</form>

     <div align="center">
	 <br>
	 <!-- ad -->
	 </div>

    </section>

 

	

</body>

</html>