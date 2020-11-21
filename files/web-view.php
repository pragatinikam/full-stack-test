<?php
  require_once'scripts/crud.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title> Wpoets Web  </title>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type="text/javascript">
      $(document).ready( function() {
        $('#myCarousel').carousel({
        interval: false
      });
      
      var clickEvent = false;
      $('#myCarousel').on('click', '.nav a', function() {
          clickEvent = true;
          $('.nav li').removeClass('active');
          $(this).parent().addClass('active');    
      }).on('slid.bs.carousel', function(e) {
        if(!clickEvent) {
          var count = $('.nav').children().length -1;
          var current = $('.nav li.active');
          current.removeClass('active').next().addClass('active');
          var id = parseInt(current.data('slide-to'));
          if(count == id) {
            $('.nav li').first().addClass('active');  
          }
        }
        clickEvent = false;
      });
    });
    </script>

<style type="text/css">
 
#myCarousel .nav a small {
    display:block;
}
#myCarousel .nav {
  background:red;
}
#myCarousel .nav a {
    border-radius:0px;
}
li{
  text-align:bottom;
}
.card-header{
        background:#ffffff;
    }
    body{
      background:#11324d;
      color: #ffffff;  
    }
    h3{
        color:#ffffff;
        opacity:0.8;
    }
   
    p{
        color:#ffffff;
        opacity:0.8;
    }
    i{
        color:black;
        float:right;
    }
    h6{
        color:#000000;
        font-size:18px;
    }
    li{
      list-style-type:none;
      padding-top:7px;
    }
</style>
</head>
<body>
    
<div class="container-fluid" style="margin-bottom:100px;">
    <div class="row">
        <div class="col-sm-12 text-center">
            <br>
            <h2 style="font-size: 40px; font-family: 'Titillium Web', sans-serif ;padding: 5 5 5 5; color: #ffffff; "> DelphianLogic in Action </h2>
            <p style="font-size: 16px; font-family: 'Open Sans', sans-serif;"> Lorem ipsum dolor sit amet, cosctetuer asipiscing elit. Aenean commodo</p>
            <br>
    
            <div style="padding-left: 65px; padding-top: 10px;"> 
                <div class="col-sm-3 center" style="background:#f6f6f6; padding-top:50px; padding-bottom:50px;">
                
                    <li data-target="#myCarousel" data-slide-to="0" class="active" style="background:#f6f6f6;padding-bottom: 25px; ">
                        <a href="#" style="text-decoration:none;" id="onepic">
                            <div class="card-header shadow-sm p-3 mb-4 bg-white rounded" id="headingOne" style="padding:10px; border-radius: 3px;">
                                <h6 class="mb-0 text-justify">
                                    <img src="./images/DL-learning.svg" style="height:40px;width:40px;">
                                    Learning
                                </h6>
                            </div>
                        </a>
                    </li>
                
                    <li data-target="#myCarousel" data-slide-to="1" style="background:#f6f6f6;padding-bottom: 25px;">
                        <a href="#" style="text-decoration:none;" id="twopic">  
                            <div class="card-header shadow-sm p-3 mb-4 bg-white rounded" id="headingTwo" style="padding:10px;border-radius: 3px;">
                                <h6 class="mb-0 text-justify">
                                    <img src="./images/DL-technology.svg" style="height:40px;width:40px;">
                                    Technology
                                </h6>
                            </div>
                        </a>
                    </li>  
            
                    <li data-target="#myCarousel" data-slide-to="2" style="background:#f6f6f6;">
                        <a href="#" style="text-decoration:none;" id="threepic">
                            <div class="card-header shadow-sm p-3 mb-5 bg-white rounded" id="headingThree" style="padding:10px;border-radius: 3px;">
                                <h6 class="mb-0 text-justify">
                                    <img src="./images/DL-communication.svg" style="height:40px;width:40px;">
                                    Communication
                                </h6>
                            </div>
                        </a>
                    </li>  
                </div>    
            </div>

            <div class="col-sm-4 text-center" style="background-color:#64b4c8;padding-top:86px;padding-bottom:86px;">
            
                <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="card-body">
                                <small style="background-color:#0099fa;color:white;padding:5px;"> DIGITAL LEARNING INFRASTRUCTURE </small>
                                <br><br>
                                    <div>
                                    <h4 style="font-size: 30px; padding: 30px; color: #ffffff;">
                                        <?php print $nana[0]['description']; ?>
                                    </h4>
                                    <a href="#" style="color:#ffffff;text-decoration:none;">
                                        Learn More <img src="./images/arrow-right.svg">
                                    
                                    </a>
                                    </div>
                                
                            </div>
                        </div>
            
                        <div class="item">
                            <div class="card-body">
                                <small style="background-color:grey;color:white;padding:5px;"> DIGITAL LEARNING INFRASTRUCTURE </small>
                                <br><br>
                                <div>
                                    <h4 style="font-size: 30px; padding: 30px; color: #ffffff;">
                                        <?php print $nana[1]['description']; ?>
                                    </h4>
                                    <a href="#" style="color:#ffffff;text-decoration:none;">
                                        Learn More <img src="./images/arrow-right.svg">
                                    
                                    </a>
                                    </div>
                                
                            </div>
                        </div>
                    
                        <div class="item">
                            <div class="card-body">
                                <small style="background-color:grey;color:white;padding:5px;"> DIGITAL LEARNING INFRASTRUCTURE </small>
                                <br><br>
                                <div>
                                    <h4 style="font-size: 30px; padding: 30px; color: #ffffff;">
                                        <?php print $nana[2]['description']; ?>
                                    
                                    </h4>
                                    
                                    <a href="#" style="color:#ffffff;text-decoration:none;">
                                        Learn More <img src="./images/arrow-right.svg">
                                    
                                    </a>
                                    </div>
                                    
                            </div>
                        </div> 

                    </div>

                </div>
            </div>
    
    
            <div class="col-sm-4 text-center" style="padding:0;">
                <img src="" style="width:502px;height:411px;" id="pic">
            </div>
        
        </div>
    </div>
</div>

</body>
    
<script type="text/javascript">

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
    </html>