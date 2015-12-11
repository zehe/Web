<?php
/**
 * Created by PhpStorm.
 * User: hze
 * Date: 11/20/15
 * Time: 2:46 PM
 */
session_start();
$link = mysqli_connect("localhost","root","","Diary");

if($_POST['submit']=="signup"){

    //Validate email address.
    if(!$_POST['email']){
        $error .= "<br />Please enter your email.";
    }else if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        $error .= "<br />Please enter validate email.";
    }

    //Validate password, change password to md5 code.and save it in database.
    if(!$_POST['password']){
        $error .= "<br />Please enter your password";
    }else if(strlen($_POST['password'])<8 && !preg_match('`[A-Z]`',$_POST['password'])){
        $error .= "<br/>Your password is invalid.";
    }

    if($error){
        echo 'You have mistakes with your enter:'.$error;

    }else{
        $checkexistquery = "SELECT * FROM user WHERE email='".$_POST['email']."'";
        $checkesistresult = mysqli_query($link,$checkexistquery);
        $checkexistrows = mysqli_num_rows($checkesistresult);

        if($checkexistrows){
            echo "this email has registered, Do you want to Log in?";
        }else{
            //$addnewuserquery = "INSERT INTO 'user' ('email','password') VALUES ('".mysqli_real_escape_string($link,$_POST['email'])."','".md5(md5($_POST['email']).$_POST['password'])."')";
            //$addnewuserquery = "INSERT INTO 'user' ('email','password') VALUES ('".$_POST['email']."','".$_POST['password']."')";
            $addnewuserquery = "INSERT INTO `user`(`email`, `password`) VALUES ('".mysqli_real_escape_string($link,$_POST['email'])."','".md5(md5($_POST['email']).$_POST['password'])."')";
            mysqli_query($link,$addnewuserquery);

            $_SESSION['id']= mysqli_insert_id($link);

        }
    }
    

}



?>

<form method="post">
    <input type="text" name="email"/>
    <input type="password" name="password"/>
    <button type="submit" name="submit" value="signup">Sign up</button>
    <button type="submit" name="submit" value="signin">Sign in</button>
</form>
n</span>
  				
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
                            
                            echo '<div class="alert alert-danger marginTop">'.addslashes($error).'</div>';
                        }
                    
                        if($message){
                            
                            echo '<div class="alert alert-success marginTop">'.addslashes($message).'</div>';
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