<?php include_once('header.php');?>
<?php include_once('navigation.php');?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="mycss.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<br/>


    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
<section id="contact">
			<div class="section-content">
				<h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us</span></h1>
				<h3>Float like a butterfly Sting like a Bee</h3>
			</div>
			<div class="contact-section">
			<div class="container">
				<form action="contact.php" method="post">
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  				<label for="exampleInputUsername">Your name</label>
					    	<input type="text" name="name" class="form-control" id="" placeholder=" Enter Name">
				  		</div>
				  		<div class="form-group">
					    	<label for="exampleInputEmail">Email Address</label>
					    	<input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id">
					  	</div>	
					  	<div class="form-group">
					    	<label for="telephone">Mobile No.</label>
					    	<input type="tel" name="pcontact" class="form-control" id="telephone" placeholder=" Enter 10-digit mobile no.">
			  			</div>
			  		</div>
			  		<div class="col-md-6">
			  			<div class="form-group">
			  				<label for ="description"> Message</label>
			  			 	<textarea  class="form-control" name="msg" id="description" placeholder="Enter Your Message"></textarea>
			  			</div>
			  			<div>

			  				<button type="submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
			  			</div>
			  			
					</div>
				</form>
			</div>
		</section>
	<footer>
    <div class="footerHeader" ></div>
    <div class="container">
		<div class="col-md-4" >
		    <h3>About us</h3>
		    <p>
		        It’s all about happening events in Pakistan. Eventia is the website that provide the people of Pakistan to promote and get recent updates regarding latest events in Pakistan.  There are ART & THEATRE, ENTERTAINMENT, FESTIVALS, SPORTS & OUTDOOR, MUSIC & CONCERTS, FOOD & SHOPPING, WORKSHOPS & SEMINARS and more types of other events in all cities, majority are from Karachi, Lahore and Islamabad. Eventia is the only place where you can find any type of events across the country.
		    </p>
		</div>
		
		<div class="col-md-4">
		    <h3>Our Location </h3>
		  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d425030.40811403707!2d72.7047891556747!3d33.66881845097958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbfd07891722f%3A0x6059515c3bdb02b6!2sIslamabad%2C+Pakistan!5e0!3m2!1sen!2s!4v1500844826146" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col-md-4" >
		    <h3>Contact Us</h3>
		    <ul>
		        <li>Phone : 0092-305-85115-14</li>
		        <li>E-mail : stinglik3abee@gmail.com</li>
		        <li>Fax : 005 - 468 - 356</li>
		    </ul>
		    <p>
		        You can also contact and follow us through
		    </p>
		    <ul class="sm">
		        <li><a href="#" ><img src="https://www.facebook.com/images/fb_icon_325x325.png" class="img-responsive"></a></li>
		        <li><a href="#" ><img src="https://lh3.googleusercontent.com/00APBMVQh3yraN704gKCeM63KzeQ-zHUi5wK6E9TjRQ26McyqYBt-zy__4i8GXDAfeys=w300" class="img-responsive" ></a></li>
		        <li><a href="#" ><img src="http://playbookathlete.com/wp-content/uploads/2016/10/twitter-logo-4.png" class="img-responsive"  ></a></li>
		    </ul>
		</div>
    </div>
</footer>

<?php 
require 'dbConn.php';
$conn = Connect();
if(isset($_POST['name']) &&isset($_POST['pcontact'])&& isset($_POST['email'])&& isset($_POST['msg'])){
	$name = $_POST["name"];
	$contact = $_POST["pcontact"];
	$email = $_POST["email"];
	$eventname = $_POST["msg"];
	$query   = "INSERT into contact (cName,cPhone,cEmail,cMsg) VALUES('" . $name . "','" . $contact . "','" . $email . "','" . $eventname . "')";
	$success = $conn->query($query);
	if(!$success){
		die("Couldn't enter data " .$conn->error);
	}
	else{
		echo "<script> alert('Thank you for your concern...');  </script>";
		}
	$conn->close();
	}
else{
   //echo "<script> alert('Problem with code');  </script>";
}
?>