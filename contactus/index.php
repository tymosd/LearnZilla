<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'LearnZilla Contact Form'; 
		$to = 'tymosd@gmail.com'; 
		$subject = 'Message from LearnZilla ';
		
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";

        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }

        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }

        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }

         // If there are no errors, send the email
        if (!$errName && !$errEmail && !$errMessage) {
            if (mail ($to, $subject, $body, $from)) {
                $result='<div class="alert alert-success">Thank You! We will be in touch</div>';
            } else {
                $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
            }
        }
    }
    ?>


<!DOCTYPE html>
<!-------------------------Welcome To LearnZilla!-------------------------------------->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LearnZilla - Contact Us</title>
    <meta name="description" content="Learn how to use Google AdWords and Google Analytics Online using our free content, quizzes, and tips. Get free google adwords courses and google analytics online courses.">
    <meta name="keywords" content="how to use google adwords, learn adwords, adwords tutorial, learn adwords online, learn google adwords">
     
      
      
      
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">


    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css"  href="../css/stylesLZ.css">
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <meta name=viewport content="width=device-width, initial-scale=0.8">

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-85433013-1', 'auto');
      ga('send', 'pageview');

    </script>
  </head>

    <!-- Navigation
    ==========================================-->
    <nav id="learn-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.html"><span>Learn</span>Zilla</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../index.html" class="page-scroll" style="background:none;">Home</a></li>
            <li><a href="../learn/index.html" class="page-scroll">Learn</a></li>
            <li><a href="../services/index.html" class="page-scroll">Services/Training</a></li>
            <li><a href="index.php" class="page-scroll">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
      
      
      
      <!-- CONTACT US HEADER ================================================== -->

<body>
    <h1 class="contact-h1 text-center">How Can We Help?</h1>
    
    <div id="contact-head" class="text-center">     
    <form  action="index.php" role="form" method="post">
    <div class="row">
        <div class="col-sm-12">
            <input type="text" name="name" id="name" placeholder=" Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
			<?php echo "<p class='text-danger'>$errName</p>";?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <input type="email" name="email" id="email"  placeholder=" Email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
			<?php echo "<p class='text-danger'>$errEmail</p>";?>
        </div>
    </div>
        
    <div class="row">
        <div class="col-sm-12">
            <textarea type="text" name="message" rows="3" placeholder=" Ask us anything!" class="textarea"><?php echo htmlspecialchars($_POST['message']);?></textarea>
			<?php echo "<p class='text-danger'>$errMessage</p>";?>
        </div>
    </div>
        
        <input class="btn btn-lg" type="submit" name="submit" value="Send" id="form-submit" id="submit"/>	
    
    <div class="row">
        <div class="col-m-12">
            <?php echo $result; ?>	
        </div>
    </div>
        
    </form>
    
    
  <div class="col-md-12 text-center" id="contactus-btm">
        <h1>About <a><span>Learn</span>Zilla</a></h1>
        <p>  LearnZilla is about setting goals, LearnZilla is about learning more, learning better, and retaining the valuable knowledge. LearnZilla is about giving careers, knowledge, and wisdom to all. We are a startup dedicated to providing free education. </p>
   </div>
</div>
    
    
</body>

    <!-- FOOTER   ==========================================-->
<footer class="footer-blog" style="padding-top:0px;">
<nav id="footer-lrn">
        <div class="container">
            <div class="fnav">
                <div class="col-md-12">
                    <ul class="col-md-4 col-sm-4">
                    <p class="foot-p">Company</p>
                    <li><a href="../../index.html">Home</a>
                    </li>
                    <li><a href="../../contactus/index.php">Contact</a>
                    </li>
                    <li><a href="../../blog/index.html">Blog</a>
                    </li>             
                    </ul>
                    <ul class="col-md-4 col-sm-4">
                    <p class="foot-p">Links</p>
                    <li><a href="../index.html">Learn</a>
                    </li>
                    <li><a href="../../services/index.html">Agency Services</a>
                    </li>
                    <li><a href="../../contactus/index.php">About Us</a>
                    </li> 
                    </ul>


                    <div class="col-md-4 col-sm-4">
                        <a class="navbar-brand" href="../index.html"><span>Learn</span>Zilla</a>
                    
                        <p class="disc"> ALL RIGHTS RESERVED. COPYRIGHT LearnZilla ©  2016. Designed and Coded by <a href="https://plus.google.com/101363710804618522134/posts/p/pub">Dmitri Tymos</a></p>        
                    </div>
                </div>

                <ul class="footer-blog-social col-md-12 col-lg-12 col-sm-12">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>

    </div>
</nav>
</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/SmoothScroll.js"></script>
    <script type="text/javascript" src="public/js/contact-form.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="../js/main.js"></script>

</html>