<?php  
session_start();
echo '<!DOCTYPE html>
<html>
<head>
<title>';
echo $_SESSION["name_store"]."'s page";
echo '</title>
<link rel="stylesheet" href="bsjs/bootstrap.min.css">
<script src="bsjs/jquery.min.js"></script>
<script src="bsjs/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/search.css" type="text/css"><script src="js/nsc.js"></script>
<link rel="stylesheet" type="text/css" href="css/wall.css">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span> 
</button>
<a class="navbar-brand" >';
echo $_SESSION["name_store"];
echo '</a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav navbar-right">
<li id="Not" ><a href="#S">Notifications</a><div class="ntdv""></div></li>
<li><a href="wall.php#S" id="s">Search</a></li>
<li><a href="friends.php" id="f">Friends</a></li>
<li><a href="groups.php" id="g">Groups</a></li>
<li><a href="php/logout.php">Logout</a></li>
<li><div id="google_translate_element"></div>
</ul>
</div>
</div>
</nav>
<div id="unclick" style="background-color: #BDC581;">
<div class="container-fluid Groups" id="G">
<h2 id="hdrs">Groups</h2>
<button style=" border-radius:5px; background-color: #6D214F;
border:2px #2C3A47 solid;"><a href="creategroup.php" style="color:white; text-decoration:none;">Create Group</a></button>';
/*<button style=" border-radius:5px;background-color: #009688;
border:2px #009688 solid;"><a href="php/editgroup.php" style="color:white; text-decoration:none;">Delete Group</a></button>*/
require 'php/groups2.php';
echo '</div>
<div class="footer" style="text-align:center; color:white;background-color: #4a4452">Made with ❤️ for IWP Project By Shah Shivam Neer(16BCE0172)<a href="about.html" id="g">About</a></div>
</body>
</html>'

?>
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="js/notification.js"></script>