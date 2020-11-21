<?php
  require_once'crud.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Final</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
<!-- for icons plus minus font awesome-->
    	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500|Open+Sans" rel="stylesheet">


</head>
<style>
body{
	margin:0;
    font-family: sans-serif;
    background-color:#11324d;
}
.heading{
    font-size:28px;
    font-family: 'Titillium Web', sans-serif ; 
	color: #ffffff;

}

}
p{
	font-size: 14px; 
	font-family: 'Open Sans', sans-serif;
	color: #ffffff;
	opacity: 0.8;
	padding: 5px;
}
*{
	box-sizing: border-box;
}

.accordian{
	max-width:600px;
	display: block;
	margin:100px auto;
}

.accordian .card{
	/* box-shadow: 0px 0px 20px #d4d4d4; */
	/*margin-bottom:20px;*/
	float: left;
	width: 100%;
}
.accordian .card .card-header h4{
	cursor: pointer;
	color:#000000;
	position: relative;
	background-color: #ffffff;
	margin:0;
	padding:15px 0px;
	border-radius: 5px;
	
}
.accordian .card .card-header {
	position: relative;
}
.accordian .card .card-header span{
	position: absolute;
	right:20px;
	top:20px;
	height:25px;
	width:25px;
	color:#c4351e;
	background-color: #ffffff;
	border-radius:50%;
	border-color:#c4351e;
	border-style:solid;
	text-align: center;
	line-height:22px;
    /*font-size:13px;*/
  /* background-image: url("./minus-01.svg");*/
    
}

.accordian .card .card-body{
	padding:20px;
background-color: #64b4c8;
    /*margin-top: 20px;*/
}
.accordian .card .card-body{
	display: none;

}
/*open one card by default*/
.accordian .card:nth-child(1) .card-body{
 display: block;
background-color: #64b4c8;

}
.accordian .card .card-body p{
	font-size: 15px;
	line-height: 24px;
	color:#444444;
	margin:0px;
}

</style>

<body>

<div style="text-align: center;padding: 30px;">

	<h2 class="heading"> DelphianLogic in Action </h2>
	<p style="font-size: 14px; font-family: 'Open Sans', sans-serif;color: #ffffff;opacity: 0.8;padding: 5px;"> Lorem ipsum dolor sit amet, cosctetuer asipiscing elit. Aenean commodo</p>
          
        <div class="accordian">
            <div class="card">
  	  	        <div class="card-header">
			        <h3 class="mb-0 text-justify" style="background-color: #ffffff; padding: 15px; border-radius: 5px; font-size: 20px;"> 
                        <img src="./images/DL-learning.svg" style="height:40px;width:40px; margin-right: 20px;margin-left: 20px;">Learning 
                    </h3>
  	  	  	        <span class="fa fa-minus" >  </span>
  	  	        </div>
                   
                <div class="card-body">
                    <small style="background-color:#0099fa;color:#ffffff;padding:3px;"> DIGITAL LEARNING INFRASTRUCTURE </small>
                    <br><br>
                        <h4 style="color:#ffffff">
                            <?php print $nana[0]['description']; ?>.
                        </h4>
                        <a href="#" style="color:#ffffff;text-decoration:none;">
                            Learn More <img src="./images/arrow-right.svg">
                        </a>  	  	
                </div>
  	        </div>

  	        <div class="card">
  	  	        <div class="card-header">
			        <h3 class="mb-0 text-justify" style="background-color: #ffffff; padding: 15px; border-radius: 5px; font-size: 20px;">
				        <img src="./images/DL-technology.svg" style="height:40px;width:40px; margin-right: 20px;margin-left: 20px;">Technology 
		            </h3>
  	  	  	        <span class="fa fa-plus"></span>
  	  	        </div>
  	  	        <div class="card-body">
                    <small style="background-color:#0099fa;color:white;padding:3px;"> DIGITAL TECHNOLOGY INFRASTRUCTURE </small>
                    <br><br>
                        <h4 style="color:#ffffff">
                            <?php print $nana[1]['description']; ?>. 
                        </h4>
                    <a href="#" style="color:#ffffff;text-decoration:none;">
                        Learn More <img src="./images/arrow-right.svg">
                    </a>  	  	  	 
                </div>
            </div>
          
  	        <div class="card">
  	  	        <div class="card-header">
			        <h3 class="mb-0 text-justify" style="background-color: #ffffff; padding: 15px; border-radius: 5px; font-size: 20px;"> 
                        <img src="./images/DL-communication.svg" style="height:40px;width:40px; margin-right: 20px;margin-left: 20px;">Communication 
                    </h3>
  	  	  	        <span class="fa fa-plus"></span>
  	  	        </div>
  	  	        <div class="card-body">
	                <small style="background-color:#0099fa;color:white;padding:3px;"> DIGITAL COMMUNICATION INFRASTRUCTURE </small>
                    <br><br>
                        <h4 style="color:#ffffff">
                            <?php print $nana[2]['description']; ?>. 
                        </h4>
                    <a href="#" style="color:#ffffff;text-decoration:none;">
                        Learn More <img src="./images/arrow-right.svg">
                    </a>  	  	  	  
                </div>
  	        </div>

        </div>

</div>
    
<!-- jqurey code -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){
	  $(".card-header").click(function(){
       // self clicking close
       if($(this).next(".card-body").hasClass("active")){
       	
       }

	   $(".card .card-body").slideUp()
	   $(".card .card-header span").removeClass("fa-minus").addClass("fa-plus");
       $(this).next(".card-body").addClass("active").slideDown()
        $(this).children("span").removeClass("fa-plus").addClass("fa-minus")

	  })
	})


    $(document).ready(function(){
    
    $('#pic').attr('src', 'images/<?php print $nana[0]['picture']; ?>');

    $('#onepic').click(function(){
    $('#pic').attr('src', 'images/<?php print $nana[0]['picture']; ?>');
    });

    $('#twopic').click(function(){
    $('#pic').attr('src', 'images/<?php print $nana[1]['picture']; ?>');
    });

    $('#threepic').click(function(){
    $('#pic').attr('src', 'images/<?php print $nana[2]['picture']; ?>');
    });
})
</script>


</body>
</html>