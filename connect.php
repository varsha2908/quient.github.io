<!DOCTYPE html>
<head>
	<title> QUIENT TRAININGS </title>
	<link rel="stylesheet" type="text/css" href="mywork.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="x-icon" href="Bionic Engineers Logo.jpg"> 
    <script src="https://kit.fontawesome.com/64ab75d3c9.js" crossorigin="anonymous"></script>
</head>
<header>
	<nav>
        <div class="logo"><img src="Bionic Engineers Logo.jpg" width="30" height="30"> QUIENT GROUP</div>
            <ul>
                <li><a href="#"><i class="fas fa-home"></i> HOME</a></li>
                <li><a href="#"><i class="fas fa-book-reader"></i> ABOUT US</a></li>
                <li><a href="testimonal.html"><i class="fas fa-user-check"></i> TESTIMONIALS</a></li>
                <li><a href="#"><i class="far fa-images"></i> GALLERY</a></li>
                <li><a href="#"><i class="fas fa-phone-square-alt"></i> CONTACT US</a></li>
            </ul>
        </div>
    </nav>
</header>
<body><br><br><br><br><br><br>
	<center><h1>
	<?php
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$age = $_POST['age'];
	$phonenum = $_POST['phonenum'];
	$email = $_POST['email'];
	$coursename = $_POST['coursename'];
	$gender = $_POST['gender'];
	$comment = $_POST['comment'];

	if(!empty($phonenum))
	{
		$conn=new mysqli("localhost","root","","registration");
		if(mysqli_connect_error())
		{
			die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
		}
		else
		{
			$sql="INSERT INTO register(fname,lname,age,phonenum,email, coursename,gender,comment) VALUES ('$fname','$lname','$age','$phonenum','$email','$coursename','$gender','$comment')";
			if($conn->query($sql))
			{
				echo "Registration successful!";
			}
			else
			{
				echo "Error: " .$sql."<br>".$conn->error;
			}
			$conn->close();
		}
	}
	else
	{
		echo "Phone number should not be empty!";
		die();
	}
	?>
	</h1><h2><b>THANK YOU FOR REGISTERING!</b></h2>
	</center><br><br><br><br><br><br><br><br><br><br><br>
</body>
<footer class="footer">
    <div class="contain">
        <div class="ro">
            <div class="footer-col">
                <h4>contact info</h4>
                <ul>
                	<li><a href="#"><i class="fas fa-phone-alt"></i> 080-12345678</a></li>
                	<li><a href="#"><i class="fab fa-whatsapp"></i> 91-1234589967</a></li>     
                </ul>
            </div>
        	<div class="footer-col">
                <h4><i class="fas fa-map-marker-alt"></i> location</h4>
                <ul>
                    <li><a href="#">Bangalore</a></li>
                    <li><a href="#">Hyderabad</a></li>
                    <li><a href="#">Chennai</a></li>
                    <li><a href="#">Delhi</a></li>
                </ul>
            </div>     
            <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                <a href="https://in.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</footer>
</html>