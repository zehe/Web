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
  				<a href="" class="navbar-brand">My Website</a> 
  				
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
  					<li><a href="#download">Download</a></li>
  				</ul>
  				
  				<form class="navbar-form navbar-right">
  					<div class="form-group">
  						<input type="email" class="form-control" placeholder="Email"/>
  					</div>
  					
  					<div class="form-group">
  						<input type="password" class="form-control" placeholder="***"/>
  					</div>
  					
  					<button type="submit" class="btn btn-success">Log in </button>
  				</form>
  			</div>
  		</div>
  	
  	</div>
  	
  	
  	
  	<div class="container contentContainer" id="topContainer">
  	
  		<div class="row">
  		
  			<div class="col-md-6 col-md-offset-3" id="topRow">
  				<h1 class="marginTop">My Awesome App</h1>
  				<p class="lead">This is why you should download this fantastic app.</p>
  				<p>Some more information about the app. You can go into a little more detail here if you want to.</p>
  				<p class="bold marginTop">Interested? Join our mailing list.</p>
  				
  				<form class="marginTop">
  					<div class="input-group">
  						<span class="input-group-addon">@</span>
  						<input type="email" class="form-control" placeholder="Your email" />
  						
  					</div>
  					
  					<input type="submit" class="btn btn-success btn-lg marginTop" />
  				</form>
  			</div>
  		</div>
  		
  	</div>
  	
  	<div class="container contentContainer">
  		<div class="row">
  			<h1 class="center title">More information about the app.</h1>
  			<p class="lead center">Summary of the app's awesomeness</p>
  		</div>
  		
  		<div class="row marginBottom">
  			<div class="col-md-4">
  				<h2><span class="glyphicon glyphicon-music"></span> Header</h2>
  				<p>A brief description of one of the best feature of the app. Maybe a little more text.A brief description of one of the best feature of the app. Maybe a little more text.</p>
  				<button class="btn btn-success marginTop">Sign up!</button>
  			</div>
  			<div class="col-md-4">
  				<h2><span class="glyphicon glyphicon-off"></span> Header</h2>
  				<p>A brief description of one of the best feature of the app. Maybe a little more text.A brief description of one of the best feature of the app. Maybe a little more text.</p>
  				<button class="btn btn-success marginTop">Sign up!</button>
  			</div>
  			<div class="col-md-4">
  				<h2><span class="glyphicon glyphicon-pencil"></span> Header</h2>
  				<p>A brief description of one of the best feature of the app. Maybe a little more text.A brief description of one of the best feature of the app. Maybe a little more text.</p>
  				<button class="btn btn-success marginTop">Sign up!</button>
  			</div>
  		</div>
  	
  	</div>
  	
  	<div class="container contentContainer" id="thirdDiv">
  		<div class="row">
  			<h1 class="center title">Download the App!!</h1>
  			<p class="lead center">Really! Why should I download the app?</p>
  			<p class="center"><img src="images/app-store.png" class="appstoreImg"/></p>
  		</div>
  	</div>

	<div class="container contentContainer" id="footer">
		<form method="post" action="sendemail.php">
			<div class="form-group">
				<label for="email">Email address</label>
				<input type="email" class="form-control" id="email" placeholder="Email">
			</div>
			<div class="form-group">
				<label for="subject">Password</label>
				<input type="text" class="form-control" id="subject" placeholder="Password">
			</div>
			<div class="form-group">
				<label for="content">Password</label>
				<textarea class="form-control" rows="5" id="content"></textarea>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
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