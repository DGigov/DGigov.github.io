<!DOCTYPE html>

<html>
<head>
		<meta name="description" content="my cv">
		<meta name="keywords" content="работа, CV, автобиография">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.13.3/dist/bootstrap-table.min.css">		
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		  <script src="javascript.js"></script>
	
<style>
	div.cont
	{
	padding: 25px 25px 25px 25px;
	}
	div.form {
    background-color: FF9966;
    width: 450px;
	height: 470px;
    padding: 20px;
	left: 290px
	position: absolute;
	-webkit-box-shadow:0 5px 10px #666; 
    -moz-box-shadow:0 5px 10px #666;
    box-shadow:0 5px 10px #666;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    -o-border-radius:5px;
    border-radius:5px;    

}
</style>
<title>Контакти</title>
</head>
<body bgcolor="#FFFFFF" leftmargin=0 topmargin=0 marginwidth=0 marginheight=0 id="page-top" div class="cont">
<nav class="navbar navbar-inverse navbar-color navbar-fixed-top">
	  <div class="container-fluid">
		<div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarContent">
	   <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Deyan Gigov</a>
    </div>
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="nav navbar-nav">
          <li>
            <a href="#info">About</a>
          </li>
          <li>
            <a href="#work">Experience</a>
          </li>
          <li>
            <a href="#education">Education</a>
          </li>
          <li>
            <a href="#skills">Skills</a>
          </li>
		  <li>
            <a href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
	  </div>
    </nav>
<center>
<div class="form">
<center><h4>ФОРМА ЗА СВЪРЗВАНЕ С МЕН</h4></center>
<form method="post" action="sendemail.php">
<?php
$ipi = getenv("REMOTE_ADDR");
$httprefi = getenv ("HTTP_REFERER");
$httpagenti = getenv ("HTTP_USER_AGENT");
?>

<input type="hidden" name="ip" value="<?php echo $ipi ?>" />
<input type="hidden" name="httpref" value="<?php echo $httprefi ?>" />
<input type="hidden" name="httpagent" value="<?php echo $httpagenti ?>" />


<h5>Име:*</h5>
<input type="text" name="visitor" size="35" />
<br />
<h5>Email за контакт:*</h5>
<input type="text" name="visitormail" size="35" />
<br />
<h5>Вашето Съощение:*</h5>

<textarea name="notes" rows="8" cols="50"></textarea>
<br />
<input type="submit" class="formbutton" value="Изпрати" />
<input type="reset" class="formbutton" value="Изчисти" />

</form><br>

*-задължителни полета</div></div></center>
</body>
</html>
