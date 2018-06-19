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

		<h2>Job Search Strategy</h2>
		<h5>Where to Find Job Postings</h5>
		<p>Another step in the job search process that we will learn this week, is how to find online and "hidden" job postings. How a company chooses to advertise a job is often a reflection of how it expects to reach qualified candidates.</p>
		<h5>Social Media and Job Postings</h5>
		<p>You can also use social media to identify postings. The "Big Four " all feature job postings and are relatively easy to search. LinkedIn is the best place to start , as you can redirect to the company’s page, find the recruiter’s name, and see how many people have applied to the job.</p>
		<h5>What is a Job Search Strategy?</h5>
		<p>In other words, a job search strategy is putting together the tips and techniques into a comprehensive system. Having an effective job search strategy requires using multiple techniques to uncover opportunities and connect with employers. The most effective job seekers explore a wide variety of avenues to find work; and they also combine many different activities to maximize their chances.</p>
		<h5>The Right Attitude</h5>
		<p>Having the right attitude for a job search means being positive. The Oxford English dictionary  formally defines positive thinking as "The practice or result of concentrating one's mind affirmatively on the good and constructive aspects of a matter so as to eliminate negative or destructive attitudes and emotions". In other words, having a positive attitude means having a favorable outlook, being optimistic, and having good feelings or goodwill in your thoughts and feelings.Having a positive attitude does not mean that you need to be unnecessarily optimistic or expect that you are about to get a perfect job without any effort. Being realistic about your job search is important . Being realistic means being aware of the actual conditions as they are, not necessarily as you perceive them to be. Being realistic about a job search can mean being aware of industry demands, labour market outlook, your own skills and abilities, probabilities, and timelines.</p>
		<br><h5>Five Typical Obstacles</h5><br>
		<p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;Never had a job, no work record</p>
		<p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;Lacking sufficient or related work experience</p>
		<p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;Overqualified for a job</p>
		<p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;Lack of reading, writing and grammar skills</p>
		<p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;Financial limitations</p>
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
