<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400' rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<title>Tic Tak Tech</title>
</head>
<body>
	<nav class="navbar navbar-collapse navbar-expand-md bg-light navbar-light sticky-top">
	  <!-- Brand/logo -->
	  	<a class="navbar-brand" href="index.php">
	    	<img src="assets/logo_final.png" alt="logo" style="width: 80px;">
	  	</a>	
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    		<span class="navbar-toggler-icon"></span>
  		</button>
	  <!-- Links -->
	  	<div class="collapse navbar-collapse" id="collapsibleNavbar">
	  		<ul class="navbar-nav mr-auto">
			   <!--  <li class="nav-item">
			      <a class="nav-link" href="#">About</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" href="#">Services</a>
			    </li> -->
			    <li class="nav-item">
			    	<a class="nav-link" href="contactus.php">CONNECT</a>
			    </li>
	  		</ul>
	  		<a href="http://www.facebook.com/tictaktech"><img style="width: 60px;" src="assets/icons/fb_icon.png"></a>
	  		<a href="https://www.instagram.com/tictaktech/"><img style="margin-left:10px; width: 48px;" src="assets/icons/instagram_icon.png"></a>
	  	</div>
	  	
	</nav>
	<div class="container-fluid sub-heading-contact-us">
		<div class="row slogan justify-content-around">
			<div class="col-md-7">
				<p class="sub-heading-text">Have an enquiry?</p>
				<div class="row">
					<div class="col"></div>
				</div>
				<p class="fill-form-text">Please fill in this short form and we will get back to you as soon as possible.</p>
				<form>
						<div class="form-group row">
							<label class="col-md-2 col-form-label" for="nameInput">Full Name:</label>
							<div class="col-md-10">
								<input type="text" class="form-control" id="nameInput" placeholder="eg. John Smith">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2 col-form-label" for="phoneInput">Mobile Number:</label>
							<div class="col-md-10">
								<input type="number" class="form-control" id="phoneInput" placeholder="eg. 0412345678">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2 col-form-label" for="emailInput">Email Address:</label>
							<div class="col-md-10">
								<input type="email" class="form-control" id="emailInput" placeholder="eg. john@mail.com">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2 col-form-label" for="enquiryTextarea">Enquiry:</label>
							<div class="col-md-10">
								<textarea class="form-control" id="enquiryTextarea" rows="3"></textarea>
							</div>
						</div>
						<fieldset class="form-group">
						    <div class="row">
						      	<legend class="col-form-label col-md-2 pt-0">Preferred Contact Method:</legend>
						      	<div class="col-md-10">
							        <div class="form-check">
								        <input class="form-check-input" type="radio" name="gridRadios" id="emailRadio" value="option1" checked="true">
								        <label class="form-check-label" for="emailRadio">Email</label>
							        </div>
							        <div class="form-check">
							          	<input class="form-check-input" type="radio" name="gridRadios" id="phoneRadio" value="option2">
							          	<label class="form-check-label" for="phoneRadio">Phone</label>				        
							        </div>
						      	</div>
						    </div>
						</fieldset>
						<div class="form-group row">
    						<div class="col-md-10">
      							<button type="submit" class="btn contact-button">Submit</button>
    						</div>
  						</div>
				</form>
			</div>
			<div class="col-md-3">
				<div class="">
					<p class="sub-heading-text">Areas of Service</p>
					<img src="assets/map.png" class="rounded main-map border">
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>