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

		<h2>Labour Market Trends</h2>
		<h5>Importance of Analyzing Trends</h5>
		<p>Analyzing trends, particularly by using specific tools, is helpful to understand the relationship between different points of data. By analyzing the relationships over time, we can begin to understand what is happening around us and what we need to do to position ourselves best for the changes to come. In terms of employability, if we understand how jobs are changing, what work is in demand, and where that work will be, we can begin to think strategically about how to position ourselves to obtain an in-demand job and grow in that position.</p>
		<h5>Finding Patterns in the Past</h5>
		<p>History is the study of people, places, and events in the past, and these people, places, and events seem to happen over and over again in slightly different forms. History can tell us why we are experiencing current conditions.</p>
		<h5>Economic History of Canada</h5>
		<p>In this course, we will focus on Canadian labour markets. Learning about Canada’s economic and labour history will help you to better appreciate how Canada’s unique labour conditions came into being and can provide you with clues about future trends.</p>
		<h5>Industrialization in Canada</h5>
		<p>By the beginning of the 20th century industrialization was well under way. This produced major shifts in the economy and society: moving labour from an agricultural to a manufacturing focus, and shifting the population from rural areas to urban centres. While industrial development in Canada began well before Confederation in 1867, it accelerated dramatically from 1900 to the 1920s.</p>
		<h5>Labour Market Information</h5>
		<p>When you make career decisions, you need to position yourself in relation to the realities of the labour market. Labour Market Information (LMI) provides you with the information you need to make informed career decisions. It breaks down labour market information by industry, region, and sector, and tracks it over time.</p>
		<h5>Five Types of Trends</h5>
		<div class="grow">
		<h2>Trend 1</h2>
		<p>Technological</p>
		</div>
		<div class="grow">
		<h2>Trend 2</h2>
		<p>Economic</p>
		</div>
		<div class="grow">
		<h2>Trend 3</h2> 
		<p>Social</p>
		</div>
		<div class="grow">
		<h2>Trend 4</h6></h2>
		<p>Political</p>
		</div>
		<div class="grow">
		<h2>Trend 5</h2>
		<p>Environmental</p>
		</div
	  </div>
	  <a href="article.php"><h2>BACK</h2></a>
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
