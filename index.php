<?php 
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Deyan Gigov CV</title>
		<meta name="description" content="my cv">
		<meta name="keywords" content="работа, CV, автобиография">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.13.3/dist/bootstrap-table.min.css">		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>  
	</head>
	<body bgcolor="#FFFFFF" leftmargin=0 topmargin=0 marginwidth=0 marginheight=0 id="page-top">
	<?php 
    
			$connect = new mysqli ("localhost", "root","","cv_data");
			if(!$connect)
				{ 
					die(mysqli_error($connect)); 
					echo '<h2>Connection error</h2>';
				} 
	?> 
	
	<nav class="navbar navbar-inverse navbar-color navbar-fixed-top">
	  <div class="container-fluid">
		<div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarContent">
	   <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><h4>Deyan Gigov</h4></a>
    </div>
      <div class="collapse navbar-collapse subheading" id="navbarContent">
        <ul class="nav navbar-nav ">
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
	<div class="container-fluid p-0" style="margin-top:30px;">
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="info">
        <div><img class="img-profile" src="cv2.jpg" border="0">
		<?php
			
			$result = $connect->query("SELECT * FROM info"); 
			
			$row3=$result->fetch_array();
          echo "<h1 class='mb-0'>".$row3['FirstName']."
            <span class='text-primary'>".$row3['LastName']."</span>
          </h1>
          <div class='subheading mb-5'>".$row3['Country'].", ".$row3['City']." tel:  	".$row3['Tel']."
            <a href='mailto:denigigov@mail.bg'>".$row3['Email']."</a>
          </div>";
		  ?>
          <div class="social-icons">
            
            <a href="https://github.com/DGigov">
              <i class="fab fa-github"></i>
            </a>
            
            <a href="https://www.facebook.com/">
              <i class="fab fa-facebook-f"></i>
            </a>
          </div>
        </div>
      </section>

      <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="work">
        <div class="my-auto">
          <h2 class="mb-5 glyphicon glyphicon-briefcase"> Experience</h2>
		<?php
			
			$result1 = $connect->query("SELECT * FROM experience"); 
			
			while( ($row=$result1->fetch_array()) != null){
				echo "<div class='resume-item d-flex flex-column flex-md-row mb-5'>
				<div class='resume-content mr-auto'>
				<h3 class='mb-0'>".$row['Position']."</h3>
				<div class='subheading mb-3'>".$row['Company']."</div>
				<p>Type of business or sector: " .$row['Sector']."</p>
				<p>Location: ".$row['Location']."</p>
				</div>
				<div class='resume-date text-md-right'>
					<span class='text-primary'>".$row['DateFromTo']."</span>
				</div>
				</div>";
			}	
		?> 	
        </div>

      </section>

      <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
          <h2 class="mb-5 glyphicon glyphicon-education"> Education</h2>
			<?php
			
			$result2 = $connect->query("SELECT * FROM education"); 
			
			while( ($row2=$result2->fetch_array()) != null){
				echo "
          <div class='resume-item d-flex flex-column flex-md-row mb-5'>
            <div class='resume-content mr-auto'>
              <h3 class='mb-0'>".$row2['University']."</h3>
              <div class='subheading mb-3'>".$row2['Degree']."</div>
              <div>".$row2['Program']."</div>
              <p>Sofia</p>
            </div>
            <div class='resume-date text-md-right'>
              <span class='text-primary'>".$row2['DateFromTo']."</span>
            </div>
          </div>";
		  }	
		?> 	

        </div>
      </section>

      <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
          <h2 class="mb-5 glyphicon glyphicon-stats"> Skills</h2>

          <div class="subheading mb-3">Programming Languages &amp; Tools</div>
          
          <ul class="fa-ul mb-0">
		  <?php
			
			$result3 = $connect->query("SELECT * FROM skills"); 
			
			$row4=$result3->fetch_array();
				echo "
            <li>
              <i class='fa-li fa fa-check'></i>
              ".$row4['Backend']."</li>
            <li>
              <i class='fa-li fa fa-check'></i>
               ".$row4['Frontend']."</li>
            <li>
              <i class='fa-li fa fa-check'></i>
              ".$row4['Data_base']."</li>
            <li>
              <i class='fa-li fa fa-check'></i>
              ".$row4['IDE']."</li>";
			  ?>
          </ul>
        </div>
      </section>
      <hr class="m-0">
    </div>
	</div>
	</body>
</html>