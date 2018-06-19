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
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <!--&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp-->
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
       <h2>"The Expert in EVERYTHING <span>was once a beginner!</span>"</h2>
        <ul class="list">
          <li><span><img src="images/icon1.png"></span>
            <h4>What we provide</h4>
            <p><b>Conestoga Student Employment Guide</b> aims at delivering all necessary information, ideas, tips & tricks that will help you secure a good job.</p>
          <li><span><img src="images/icon2.png"></span>
            <h4>What we seek</h4>
            <p>Help tends to work best both ways. We help you with the your research on jobs market, in return you help us by providing more & more information.</p>
          </li>
          <li class="last"><span><img src="images/icon3.png"></span>
            <h4>What we promise</h4>
            <p>We pledge to deliver information and articles that will help you make it easy on deciding what job you want. And this will be free of any cost!</p>
          </li>
        </ul>
        <h2>know the <span>team</span></h2>
        <p><span class="txt1">GCM2000</span>(Career Management in Canada) is our main source & inspiration for this website. </p>
        <div class="img-box"><img src="images/1page-img.jpg">Our team of developers consists of 4 members - <a href="https://www.linkedin.com/in/preethi-arattu-51078963/" target="_blank">Preethi Regi</a>(User Interface Designer), <a href="https://www.linkedin.com/in/bhatianuj/" target="_blank">Anuj Singh Bhati</a>(Researcher), <a href="https://www.linkedin.com/in/shubham-kumar-8a974baa/" target="_blank">Shubham Kumar</a>(Front-End Developer), <a href="https://www.linkedin.com/in/ismail-shaikh-742512138/" target="_blank">Ismail Shaikh</a>(Back-End Developer). All the members are currently pursuing <a href="https://www.conestogac.on.ca/fulltime/mobile-solutions-development-optional-co-op" target="_blank">Mobile Solutions Development</a> from Conestoga College.</div>
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
