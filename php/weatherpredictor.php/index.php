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
        html, body{
            width:100%;
            height:100%;
        }
        #topContainer{
            background-image: url("images/background.jpg");
            background-size: cover;
            width:100%;
            height:100%;
        }

        .center {
            text-align: center;
        }

        #topRow{
            margin-top: 150px;
        }

        .white{
            color: white;
        }

        #inputLoc {
            margin-top: 30px;
            margin-bottom: 30px;
        }
        #submitbtn{
            margin-bottom: 40px;
        }

        #noinput, #success, #wrongcity {
            display: none;
        }

    </style>

</head>
<body>

<div class="container contentContainer" id="topContainer">

    <div class="row">

        <div class="col-md-6 col-md-offset-3 center" id="topRow">
            <h1 class="white">Weather Forcast</h1>
            <p class="lead white">Enter the city, I will let you know the weather.</p>

            <form>
                <div class="form-group">
                    <input type="text" class="form-control" name="city" id="city" placeholder="Eg. Paris, London, New York..."/>
                </div>

                <button type="submit" class="btn btn-lg btn-success" id="submitbtn">Find the Weather</button>
            </form>

            <div class="alert alert-danger" id="noinput">Please input the city.</div>
            <div class="alert alert-success" id="success">Success!</div>
            <div class="alert alert-danger" id="wrongcity">Can't find weather of this city. Please try another one.</div>
        </div>
    </div>

</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<script>
    /*
    $("#submitbtn").click(function(event){
        event.preventDefault();

        $.get("getinfo.php?city=London", function(data){
            alert(data);
        });

    });
    */
   $("#submitbtn").click(function(event){
        event.preventDefault();

        $(".alert").hide();
        if($("#city").val() != ""){
            $.get("getinfo.php?city="+$("#city").val(), function(data){
                if(data == ""){
                    $("#wrongcity").fadeIn();
                }else{
                    $("#success").html(data).fadeIn();
                }
            });



        }else{
            $("#noinput").fadeIn();
        }
    });

</script>
</body>
</html>