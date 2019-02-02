<!DOCTYPE html>


<html>
<head>
<title>Send Mail</title>
<meta charset = "UTF-8" />
</head>
<body bgcolor="#FFFFFF" leftmargin=0 topmargin=0 marginwidth=0 marginheight=0 id="page-top">
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


<?php

$ip = $_POST['ip'];
$httpref = $_POST['httpref'];
$httpagent = $_POST['httpagent'];
$visitor = $_POST['visitor'];
$visitormail = $_POST['visitormail'];
$notes = $_POST['notes'];


if (eregi('http:', $notes)) {
die ("Do NOT try that! ! ");
}
if(!$visitormail == "" && (!strstr($visitormail,"@") || !strstr($visitormail,".")))
{
echo "<h5>Моля върнете се и въведете валиден E-mail адрес</h5>\n";
$badinput = "<h5>Писмото не е изпратено</h5>\n";
echo $badinput;
die ("");
}

if(empty($visitor) || empty($visitormail) || empty($notes )) {
echo "<h5>Моля върнете се и въведете всички полета</h5>\n";
die ("");
}

$todayis = date("l, F j, Y, g:i a") ;


//$notes = stripcslashes($notes);

$message = " $todayis [EST] \n
Message: $notes \n
From: $visitor ($visitormail)\n
Additional Info : IP = $ip \n
Browser Info: $httpagent \n
Referral : $httpref \n
";

$from = "From: $visitormail\r\n";
//$header_ = 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/plain; charset=UTF-8' . "\r\n";

mail("denigigov@mail.bg", $subject, $message, $from);

?>

<p align="center">
Date: <?php echo $todayis ?>
<br />
Благодарим ви! Писмото беше изпратено успешно. : <?php echo $visitor ?> ( <?php echo $visitormail ?> )
<br />
<br />
Message:<br />
<?php $notesout = str_replace("\r", "<br/>", $notes);
echo $notesout; ?>
<br />
<?php echo $ip ?>

<br /><br />
<a href="contact.php"> Назад </a>
</p>

</body>
</html>