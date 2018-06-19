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

		<h2>Job Search Tools</h2>
		<h5>Who is Hiring?</h5>
		<p>Before you look for a job, it is important to understand why a company is hiring. Ultimately, the goal of the company is to hire people who will help the company fill its business needs. </p>
		<h5>Show your Fit to the Job</h5>
		<p>Starting with the posting is a smart way of developing a customized application. The previous topic deconstructed the job posting and explained what you should look for. Now is the time to show how your experience and education contributes to the skills required of the job.</p>
		<h5>What is a Résumé?</h5>
		<p>A résumé presents an applicant’s background and skills for a job opportunity. The primary purpose of the résumé is to get an interview. An employer spends an average of 10-30 seconds looking at a candidate’s résumé and deciding whether to interview the candidate or not.</p>
		<h5>Accomplishment Statements</h5>
		<p>The best way to tailor your resume is to write specific accomplishment statements that clearly demonstrate what you did as opposed to simply listing duties or responsibilities. Employers want to know how you can add value to their team or organization. To do this, you want to write accomplishment statements that highlight your qualifications, support your objective, and demonstrate your skills.</p>
		<h5>Functional Résumé</h5>
		<p>A functional résumé focuses on skills and experience rather than a chronological work history. This format is ideal for candidates who are changing careers or who have significant gaps in their employment history.</p>
		<h5>What is a Cover Letter?</h5>
		<p>A solid cover letter can be the difference between "you’re hired" and "no, thanks". Job hunters should know how to craft the perfect introduction that showcases their specific skills, experiences, and attitude. The best cover letters are brief, targeted to one job and company, and carefully proofread.</p>
		<h5>Components of a Cover Letter</h5>
		<p>The cover letter introduces you to a potential employer. Take this opportunity to express your interest and to convey how your experience and skills will be of value to the company. This letter can determine whether or not you will be called in for an interview.</p>
		<h5>Thank You Notes</h5>
		<p>A thank you note is sent to your interviewer(s) after the interview to show your appreciation and courtesy. It will further reinforce the memory of your meeting and may prompt them to take immediate action and decide in your favour. This letter will also give you one more opportunity to restate your interest in the position and the company. If you do not want the job, write a thank you letter respectfully withdrawing your application. You should plan to send a thank you note within twenty-four hours of your job interview.</p>
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
