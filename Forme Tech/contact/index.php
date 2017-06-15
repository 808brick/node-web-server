<?php

    $error = ""; $successMessage = "";

    if ($_POST) {
        
        if (!$_POST["email"]) {
            
            $error .= "An email address is required.<br>";
            
        }
        
        if (!$_POST["content"]) {
            
            $error .= "The content field is required.<br>";
            
        }
        
        if (!$_POST["subject"]) {
            
            $error .= "The subject is required.<br>";
            
        }
        
        if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            
            $error .= "The email address is invalid.<br>";
            
        }
        
        if ($error != "") {
            
            $error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:</p>' . $error . '</div>';
            
        } else {
            
            $emailTo = "hardwireinnovation@gmail.com";
            
            $subject = $_POST['subject'];
            
            $content = $_POST['content'];
            
            $headers = "From: ".$_POST['email'];
            
            if (mail($emailTo, $subject, $content, $headers)) {
                
                $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, we\'ll get back to you as soon as we can.</div>';
				header('Location: index.php');
				exit();
                
                
            } else {
                
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</div>';
                
                
            }
            
        }
        
        
        
    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  
  <script>
  $( function() {
    $( document ).tooltip();
  } );
  </script>


	 <link rel = "stylesheet" type = "text/css" href = "../styles.css" />
	 
  <style type="text/css">
  
		label {
		display: inline;
		width: 5em;
		}
		
		#contact {
			color: orange;
		}
		
		body {
			
			font-family: 'Roboto Condensed', sans-serif;
		}
		
		body label{
			
			font-size: 20px;
			
		}
		
		button.accordion {
			background-color: #eee;
			color: #444;
			cursor: pointer;
			padding: 18px;
			width: 100%;
			border: none;
			text-align: left;
			outline: none;
			font-size: 15px;
			transition: 0.4s;
		}

		button.accordion.active, button.accordion:hover {
			background-color: #ddd;
		}

		button.accordion:after {
			content: '\002B';
			color: #777;
			font-weight: bold;
			float: right;
			margin-left: 5px;
		}

		button.accordion.active:after {
			content: "\2212";
		}

		div.panel {
			padding: 0 18px;
			background-color: white;
			max-height: 0;
			overflow: hidden;
			transition: max-height 0.2s ease-out;
		}
		


		
	</style>
  
  </head>
  
  <body>
	
	

	<div class="container-fluid">
	<div class="row abovenav">
		
		<div class="col-md-1"></div>
		
		<div class="col-md-3" id="logopic"><a href="#"><img src="../Images/logo2.png" class="height1 img-responsive"></img></a></div>
		
		<div class="col-md-3"></div>
		
		<div id ="searchbar" class="col-md-3">
			<div class="input-group">
			<input type="text" class="form-control" placeholder="Search for..." title="We apologize, but the search bar is currently disabled until more content is fully developed">
			<span class="input-group-btn" title="We apologize, but the search bar is currently disabled until more content is fully developed">
				<button class="btn btn-default" type="button"><span id="searchglyph" class="glyphicon glyphicon-search orange"></span></button>
			</span>
			</div><!-- /input-group -->
		</div>
		
		<div class="col-md-2"></div>
		
	</div>
	</div>
	
	<nav class="navbar navbar-inverse navbar-static-top example6">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar6">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        
      </div>
      <div id="navbar6" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
          <li><a href="../index.html" id="home">Home</a></li>
          <li class="disabled" title="Coming Soon!"><a href="#" id="store">Store</a></li>
	          <!-- <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="services">Services <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="3Dprinting.html">3D Printing</a></li>
              <li><a href="#">Laser Cutting</a></li>
              <li><a href="#">Water Jet Cutting</a></li>
              <li><a href="#">CNC Milling</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
              <li class="dropdown-header">Not Sure?</li>
              <li><a href="#">Service Walkthrough</a></li>
              
            </ul>
          </li> -->
		  <li class="disabled" title="Coming Soon! For a list of prospective services click the Prospective Services button below"><a href="#" id="services">Services</a></li>
		  <li class="active"><a href="contact.html" id="contact">Contact Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
      			<!--<li><a href="#">Cart</a></li>
      			<li><a href="#">Login</a></li>-->
    			</ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
  
  
	<div class="container-fluid">
	<div class="row">
		
		<div class="col-md-1"></div>
		<div class="content row col-md-5">
		<br><br>
		
      
			<h2>Got A Question?</h2>
			  <br>
			  <div id="error"><? echo $error.$successMessage; ?></div>
			  
		<form name="contact" method="post">
			  <fieldset class="form-group">
				<label for="email">Email address</label>*
				<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" style="width:325px;">
				<small class="text-muted">We'll never share your email with anyone else.</small>
			  </fieldset>
			  <fieldset class="form-group">
				<label for="subject">Subject</label>*
				<input type="text" class="form-control" id="subject" name="subject" style="width:325px;">
			  </fieldset>
			  <fieldset class="form-group">
				<label for="exampleTextarea">What would you like to ask us?</label>*
				<textarea class="form-control" id="content" name="content" rows="3" style="width:325px;"></textarea>
			  </fieldset>
			  <p>* - required</p>
			  
			  <button type="submit" name="contact-submit" id="contact-submit" class="btn btn-primary">Submit</button>
		</form>
			
			<br><br><p>Or if you want to subscribe to updates about Forme Tech services availability, <a href="../updates/">Click Here</a></p>
				
				
		
		
		<br><br><br>
		</div>
		
		
		
		<div class="content row col-md-6">
		<br><br>
		
		<h2>Frequently Asked Questions:</h2><br>
      
			<h3>Services</h3>
		<button class="accordion">How accurate are you able to make my part?</button>
			<div class="panel">
			  <br /><p>The accuracy of the part depends on the machine/process you are using, as well as the material being used. The range of accuracy for every service we provide can be viewed by clicking the "Accuracy Terms Agreement" found at the bottom of that particular service page. </p>
			</div>

			<button class="accordion">Section 2</button>
			<div class="panel">
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>

			<button class="accordion">Section 3</button>
			<div class="panel">
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div><br />
			
		<h3>Payment Handeling</h3>
		<button class="accordion">Section 1</button>
			<div class="panel">
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>

			<button class="accordion">Section 2</button>
			<div class="panel">
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>

			<button class="accordion">Section 3</button>
			<div class="panel">
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div> <br />
			
		<h3>Other Questions</h3>
		<button class="accordion">Section 1</button>
			<div class="panel">
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>

			<button class="accordion">Section 2</button>
			<div class="panel">
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>

			<button class="accordion">Section 3</button>
			<div class="panel">
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div><br />

		
		
		<br><br><br><br><br><br>
		</div>
		
	</div>
    </div>
	
	<div id="footer" class="">
		
		<p class="footerText">&copy; Forme Tech 2017</p>
		
		
	</div> 

	
	<script type="text/javascript">
	
	
	
          
          $("form").submit(function(e) {
              
              var error = "";
              
              if ($("#email").val() == "") {
                  
                  error += "The email field is required.<br>"
                  
              }
              
              if ($("#subject").val() == "") {
                  
                  error += "The subject field is required.<br>"
                  
              }
              
              if ($("#content").val() == "") {
                  
                  error += "The content field is required.<br>"
                  
              }
              
              if (error != "") {
                  
                 $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
                  
                  return false;
                  
              } else {
                  
                  return true;
                  
              }
          }) 
          
    </script>
  
  </body>
</html>