<!DOCTYPE html>
<html>
<head>
<title>Clusters</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bsjs/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="design.css">
<script src="bsjs/jquery.min.js"></script>
<script src="bsjs/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/index.css"> 
<script>
$(document).ready(function(){
$(".reg").click(function() {
$('html, body').animate({
scrollTop: $(".container-fluid").offset().top
}, 2000);
});
})
$(window).scroll(function() {
$(".slideanim").each(function(){
var pos = $(this).offset().top;
var winTop = $(window).scrollTop();
if (pos < winTop + 600) {
$(this).addClass("slide");
}
});
});
</script>
</head> 
<body style="background-color: black;">

<canvas id="nokey" width="100%" height="600"> 
</canvas>
    
<div class="jumbotron text-center" style="margin-top:-700px">    
<h1>CLUSTERS</h1> 
<p><br></p> 
</div>
<div class="container-fluid">
<div class="col-sm-8">    
<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<div class="formcenter"  style="margin-top:-750px;margin-right:10px">
<div>   
<form method="post" action="login.php">
<div class="form-group">
<input type="email" class="form-control customa" id="email" placeholder="Email Address" name="EmAiL">
</div>
<div class="form-group">
<div ><input type="password" class="form-control customa" id="pwd" placeholder="Password" name="PaSs"></div>
</div>
<button type="submit" class="btn custom" style="background-color: #6D214F; color: white; border:2px #2C3A47 solid; margin:auto;">Login</button>
</form>
</div>
</div>
<div style="margin-top:500px">
<h1 style="color: white">SignUp</h1>
 form action="php/register.php" method="post">
<div class="form-group">
<input type="name" class="form-control customa" id="name" placeholder="Your Name" name="reg_name">
</div><div class="form-group">
<input type="email" class="form-control customa" id="email" placeholder="Email Address" name="reg_email">
</div>
<div class="form-group">
<div ><input type="password" class="form-control customa" id="pwd" placeholder="Password" name="reg_pass"></div>
</div>
<button type="submit" class="btn custom" style="background-color: #6D214F; color: white; border:2px #2C3A47 solid;">JOIN</button>  
<div class="col-sm-4"> <span class="glyphicon glyphicon-envelope enveIcon slideanim"></span></div>
</form>
</div>
<button style="text-decoration:none; background-color: #6D214F; color: white"  class="reg"><strong>SIGNUP</strong></button>
</div>
</div>
<script src="design.js"></script> 
</body>
</html>