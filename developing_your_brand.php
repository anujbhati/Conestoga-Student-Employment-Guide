<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Conestoga Employment Guide</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</head>
<body id="page1">
<div class="wrap">
  <header>
    <div class="container">
   <h1><a href="http://www.conestogac.on.ca" target="_blank"></a></h1> 
      <nav><ul>
          <li class="current"><a href="index.php" class="m1">Home </a></li>
         <li><a href="about-us.php" class="m2">About GCM2000</a></li>
		  <?php if (isset($_SESSION['usr_id'])) { ?>
				<li><a href="#" class="m5">Signed in as <?php echo $_SESSION['usr_name']; ?></a></li>
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
				<li><a href="signregister.php" class="m5">Sign In/Register</a></li>
				<?php } ?>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		   <a href="http://www.conestogac.on.ca" class="m3"><img src="images/321.png"></a>
        </ul></nav></div>
  </header>
  <div class="container">
    <aside>
      <h3>Categories</h3>
      <ul class="categories">
       <li><span><a href="article.php">Articles</a></span></li>
	   <li class="last"><span><a href="discussion.php">Discussion Forums</a></span></li>
	   </ul>
	   <h3>Library Resource Centre</h3>
	    <ul class="categories">
        <li><span><a href="http://www.conestogac.on.ca/lrc/" target="_blank">LRC Link</a></span></li>
        <li><span><a href="http://lib.conestogac.on.ca/research-help" target="_blank">LRC Help</a></span></li>
		<li class="last"><span><a href="http://lib.conestogac.on.ca/az.php" target="_blank">LRC Database</a></span></li>
      </ul>
	  <h3>Other Resources</h3>
	  <ul class="categories">
        <li><span><a href="http://noc.esdc.gc.ca/English/home.aspx" target="_blank">NOC LIST</a></span></li>
		<li><span><a href="https://www.meetup.com/find/tech/" target="_blank">Meetup</a></span></li>
	  </ul>
      <form action="email.php" id="newsletter-form" method="post">
        <fieldset>
          <div class="rowElem">
            <h2>Stay in Touch!</h2>
            <input type="email" placeholder="Enter Your Email Here" name="email">
            <div class="clear"><button class="fright" type="submit" name="submit">Submit</a></div>
          </div>
        </fieldset>
      </form>
      <h2>Fresh <span>News</span></h2>
   <h2>Twitter <span> Live</span></h2><br>
      <ul class="news">
        <a class="twitter-timeline" data-width="300" data-height="400" href="https://twitter.com/CCGCM2000">Tweets by CCGCM2000</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
      </ul>
    </aside>
    <section id="content">
      <div id="banner">
 <a href="index.php"><h2><span>Conestoga</span><span>Student</span><span>Employment</span><span>Guide</span></h2></a>
      </div>
      <div class="inside">

		<h2>Developing Your Brand</h2>
		<h5>The Power of Branding</h5>
		<p>The phrase "personal branding" was coined in 1997 by Tom Peters in his article "The Brand Called You". Peters believes that "you’re every bit as much a brand as Nike, Coke, Pepsi, or the Body Shop". To start thinking like your own favourite brand manager, ask yourself the same question the brand managers at Nike, Coke, Pepsi, or Microsoft ask themselves: What is it that my product or service does that makes it different? We are CEOs of our own company: "Me Inc.".</p>
		<h5>Goals of Personal Branding</h5>
		<p>Personal branding and self-marketing creates positive perceptions of you that increase your chances of successfully winning employment. It requires changing your mindset: no longer seeing yourself as an employee looking for an employer to hire you, but as special brand for an employer to buy. </p>
		<h5>Personal Branding in Action</h5>
		<p>Personal branding focuses on marketing your most important product: you. Developing a personal brand involves taking stock of who you are (your skills, values, passions, and personality), where you want to work (your target employers), and what makes you different from the competition (your unique value proposition).</p>
		<h5>The Process to Discovering You</h5>
		<p>The personal branding process allows you to discover who you are, create a consistent image that speaks to your target audience (potential employers), and makes you consistently visible. It allows you to put together a coherent package that positions you as a great product with hiring managers.</p>
		<h5>Create an Elevator Pitch</h5>
		<p>Now that you have your personal brand statement, choose a method to communicate your brand, but take care to be consistent. You need to make sure that your in-person persona matches the brand you are communicating.</p>
		<h5>What Platforms are You Using?</h5>
		<p>If you’re not the most tech-savvy person, you might feel overwhelmed with the vast number of social media platforms out there these days.</p>
		<div class="img-box"><img src="images/facebook.png" class="png">
		<img src="images/linkedin.png" class="png">
		<img src="images/twitter.png" class="png">
		<img src="images/google-plus.png" class="png"></div>
		<a href="article.php"><h2>BACK</h2></a><br>
	  </div>
    </section>
  </div>
</div>
<footer>
  <div class="footerlink">
    <p class="rf">Copyright &copy; 2017 <a href="index.php">Conestoga Student Employment Guide (GCM2000)</a> - All Rights Reserved</p>
    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
