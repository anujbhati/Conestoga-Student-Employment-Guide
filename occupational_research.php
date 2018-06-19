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

		<h2>Occupational Research</h2>
		<h5>What is Research?</h5>
		<p>Humans are always asking questions and testing theories about themselves, others, and the world around them. Whether conducted formally for academic or research purposes or informally for our own benefit, we all rely on research of one form or another to inform our thinking and make critical decisions.</p>
		<h5>Challenges of Conducting Research</h5>
		<p>Once you understand your skills, interests, values, personal attributes, and other influencing factors, the next step in making an effective career choice is to gather quality information regarding potential occupations.</p>
		<h5>Benefits of Occupational Research</h5>
		<p>Most people embark on their career journey with very limited information about roles, organizations, and industries of interest. But information is power and conducting research to find out key information will help you to realize your career goals.</p>
		<h5>National Occupational Classification (NOC)</h5>
		<p>A useful resource published by the Government of Canada is the National Occupational Classification (NOC). The NOC is updated in partnership with Statistics Canada according to five-year census data, and is considered the most definitive source of Canadian occupational information available. It currently lists over 30,000 occupational titles and provides a standardized way of describing and understanding the nature of work. The NOC organizes all job titles into 10 skill types and 520 occupational groups. Occupations are grouped in clusters and organized by a 4-digit numerical code.</p>
		<br><h5>Conducting Occupational Research</h5><br><br>
		<h5>Occupational Scavenger Hunt</h5><br><br>
		<h5>Research is a Four-Step Process</h5><br>
		<div class="grow">
		<h2>Step 1</h2>
		<p>Collect It</p>
		</div>
		<div class="grow">
		<h2>Step 2</h2>
		<p>Organize It</p>
		</div>
		<div class="grow">
		<h2>Step 3</h2> 
		<p>Analize It</p>
		</div>
		<div class="grow">
		<h2>Step 4</h6></h2>
		<p>Use It</p>
		</div
	  </div>
    </section>
	<a href="article.php"><h2>BACK</h2></a>
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
