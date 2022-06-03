<!--
Into this file, we create a layout for login page.
-->

<?php
include_once('header.php');
include_once('link.php');

?>

<style type="text/css">

body 
{
  background-image: url('img/bg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}


h1
{
  color: #FFFFFF;
}

h2
{
  color: #FFFFFF;
  padding: 0 5px 0 10px;
  text-decoration: underline;
}

p
{
  color: #0d0d0d;
  padding: 0 5px 0 10px;
  font-size: 20px;
}

#container {
    margin: 20px;
    border: 2px solid #D0D0D0;
    box-shadow: 0 0 8px #D0D1D1;
  }

label{
  font-size: 16px;
}

button
{
  width: 58%;
}

</style>

<div id="container">
<div id="frmRegistration">
<form class="form-horizontal" method="POST" action="login_code.php">
	<h1>User Login</h1>
	
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-6"> 
      <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="login" class="btn btn-primary">Login</button>
    </div>
  </div>
</form>
</div>
</div>
<div>
  <h2>Vision</h2>
<p>eLearning inspires community engagement and inclusive learning environments through the use of emerging technologies.</p>

<h2>Mission</h2>
<p>Our dynamic team serves the college community by providing training, research, and flexible support services. Through creative problem solving, collaboration, and reflection we provide an environment for growth in teaching and learning in an effort to best support our students, faculty and staff.</p>  

<p>North’s eLearning Support Center provides support and information to distance learners as well as on-campus students in hybrid and web-enhanced classes. Academic divisions offer many credit courses and curricula through several non-traditional delivery modes, including fully online and hybrid learning.</p> 

<p>These delivery modes bring new learning options and opportunities to students who have diverse learning styles, those who require flexibility in their schedules, and those who do not live within commuting distance. Students can earn an A.A. degree and/or receive specific certificates through fully online courses.</p>

<p>eLearning classes utilize technology and cover the same material as on-campus classes. Most of North Seattle eLearning courses start at the beginning of the quarter and end at the same time as on-campus courses. Credits earned through online courses are transferable and appear on transcripts just like any other class.</p>
</div>