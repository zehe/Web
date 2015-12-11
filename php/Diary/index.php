<?php
    include("login.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    	.navbar-brand{
    		font-size:1.8em;
    	}
    	
    	#topContainer {
    		background-image:url("images/background.jpg");
    		height:700px;
    		width:100%;
    		background-size:cover;
    	}
    	
    	#topRow {
    		margin-top:100px;
    		text-align:center;
    	}
    	
    	#topRow h1{
    		font-size:300%;
    	}
    	
    	.bold {
    		font-weight:bold;
    	}
    	
    	.marginTop {
    		margin-top:30px;
    	}
    	
    	.center {
    	
    		text-align:center;
    	}
    	
    	.title {
    		margin-top:100px;
    		font-size:300%;
    	}
    	
    	.marginBottom {
    		margin-bottom:30px;
    	}
    	
    	#thirdDiv {
    		background-color:#B0D1FB;
			width:100%;
    	}
    	
    	.appstoreImg {
    		width:250px;
    	}

		#footer {
			padding-top:70px;
			width:100%;
		}
    
    </style>
    
  </head>
  <body>
  
  	<div class="navbar navbar-default navbar-fixed-top">
  		<div class="container">
  			<div class="navbar-header">
  				<a href="" class="navbar-brand">Secret Diary</a> 
  				
  				<button type="button" class="navbar-toggle" data-toggle="collapse"
  				data-target=".navbar-collapse">
  				
  				<span class="sr-only">Toggle navigation</span>
  				
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  				
  				</button>
  				
  			</div>
  			
  			<div class="collapse navbar-collapse">
  				<ul class="nav navbar-nav">
  					<li class="active"><a href="">Home</a></li>
  					<li><a href="#about">About</a></li>
  					<li><a href="#download">Me</a></li>
  				</ul>
  				
  				<form class="navbar-form navbar-right" method="post">
  					<div class="form-group">
  						<input type="email" class="form-control" placeholder="Email" name="loginemail" value="<? echo addslashes($_POST['loginemail']); ?>"/>
  					</div>
  					
  					<div class="form-group">
  						<input type="password" class="form-control" placeholder="***" name="loginpassword" value="<? echo addslashes($_POST['loginpassword']); ?>"/>
  					</div>
  					
  					<input type="submit" class="btn btn-success" name="submit" value="Log in"/>
  				</form>
  			</div>
  		</div>
  	
  	</div>
  	
  	
  	<div class="container contentContainer" id="topContainer">
  	
  		<div class="row">
  		
  			<div class="col-md-6 col-md-offset-3" id="topRow">
  				<h1 class="marginTop">Secret Diary</h1>
  				<p class="lead">Wanna use this secret diary I designed for you?</p>
  				<p>Designed by Eric. He</p>
  				<p class="bold marginTop">Interested? Join our mailing list.</p>
  				
  				<form class="marginTop" method="post">
  					<div class="form-group">
                        <label for="email">Email Address</label>
  						<input type="email" class="form-control" placeholder="Email" name="email" value="<? echo addslashes($_POST['email']); ?>"/>
                        
  					</div>
  					
  					<div class="form-group">
                        <label for="password">Password</label>
  						<input type="password" class="form-control" placeholder="***" name="password" value="<? echo addslashes($_POST['password']); ?>"/>
  					</div>
  					
  					<input type="submit" class="btn btn-success" name="submit" value="Sign up"/>
                    
                    <?php
                        if($error){
                            
                            echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
                        }
                    ?>
  				</form>
                
  			</div>
  		</div>
  		
  	</div>
  	

    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <script>
    	$(".contentContainer").css("min-height",$(window).height());
    </script>
  </body>
</html>