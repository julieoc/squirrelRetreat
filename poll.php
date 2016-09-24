<?php
session_start();
?>
<!DOCTYPE html>
<!--

Name: Julie Cao
Student ID: 216188104
Subject: SIT7714
Assignment: Assignment 1
Comment: This page contains a guest feedback form. Users who fill out this form will enter
the draw to win a Honda Accornd.

-->
<html lang="en" xml:lang="en">
<head>
 <meta charset="UTF-8">
	<meta name="description" content="Guest feedback form for the Squirrel Retreat">
	<meta name="keywords" content=" feedback, reviews, win, honda accornd,booking, guest information, squirrel,retreat,accomodation,hotel, holiday">
	<meta name="author" content="Julie Oanh Cao">
	<link rel="stylesheet" type="text/css" href="css/bodyAndHeadings.css">	
	<link rel="stylesheet" type="text/css" href="css/navigationMenu.css">
	<link rel="stylesheet" type="text/css" href="css/retreatHeading.css">
	<link rel="stylesheet" type="text/css" href="css/disclaimer.css">
	<link rel="stylesheet" type="text/css" href="css/disclaimer.css">
	<link rel="stylesheet" type="text/css" href="css/poll.css">

<title>Take our survey for your chance to win a brand new Honda Accornd
</title>
</head>
<body>
 <nav>
    <div id="navigationToolbar">

		<ul class="navigationBar">
		<li class="navigationBar"><a id="BACK" href="index.html">BACK</a></li>
		<li class="navigationBar"><a  id="CONTACT" href="index.html#contactUs">CONTACT</a></li>
		</ul>
    </div>
 </nav>

	<!-- Company logo section -->
	<div id="titleAndCaption">
	<div id="retreatLogoDiv">  
	<!-- The retreat logo was created by modifying the following digital image of a tree silhouette,freestockphotos, accessed 23 July  2016, <http://www.freestockphotos.biz/stockphoto/15119>-->	
	<img src="images/retreatLogo.png" alt="retreat logo" id="retreatLogo"/>
	</div>
    <h1>THE SQUIRREL RETREAT</h1>
    
    <!-- not sure about this being a <p>, perhaps <caption>? -->
    <p id="titleCaption">PROVIDING LUXURY ACCOMODATION FOR SQUIRRELS SINCE 1923</p>
    </div>
    <!-- END Company logo section -->

<div id="headingSquirrelPicsAndPoll">
<div id=headingDiv>
<h2>RATE YOUR STAY AT THE SQUIRREL RETREAT FOR YOUR CHANCE TO WIN A BRAND NEW HONDA ACCORND!</h2>
</div>
<div>
<!--digital image of squirrel driving family, imgur, accessed 23 July 2016, <http://i.imgur.com/CKn4sr8.gif and split using ezygif.com>-->
<img src="images/squirrelDrivingFamily.gif" alt="squirrel driving family" class="squirrelDrivingFamily"/>
<!--digital image of squirrel with honda, superunleaded, accessed 23 July 2016, <98ron.superunleaded.com/wp-content/uploads/2015/03/squirrelhonda.jpg/>-->
<img src="images/squirrelhonda.jpg" alt="honda" class="squirrelDrivingFamily"/>
<!--digital image of squirrel driving family, imgur, accessed 23 July 2016, <http://i.imgur.com/CKn4sr8.gif and split using ezygif.com>-->	
<img src="images/squirrelDrivingFamily1.gif" alt="squirrel driving family" class="squirrelDrivingFamily"/>
</div>
<div id="thankYouDiv">
<p id="thankYou"> We hope your time with us was an enjoyable experience.In order to ensure that we can continue to provide you and future guests with our award winning service, we kindly ask you
to provide us with your feedback on our hotel and it's facilities. Please do so by filling in the survey below. Score each of the items
with a value between 1-5, with 1 being the lowest rating rating, and 5 being the highest. As bonus for filling out this information you will 
be automatically entered into a draw to win a brand new Honda Accornd! In addition to completing this form, we strongly encourage you
to review us on TripAdvisor. Thank you again for choosing to stay at The Squirrel Retreat.
</p></div> 
<div id="pollDiv">
<form action="pollUpdate.php" method="POST" enctype="multipart/form-data">
<table id="poll">
<tr>
<td>Guest room comfort</td><td>5<input type="radio" name="comfortScore" value="5"/></td><td></td>
<td>4<input type="radio" name="comfortScore" value="4"/></td><td></td><td>3<input type="radio" name="comfortScore" value="3"/></td>
<td></td><td>2<input type="radio" name="comfortScore" value="2"/></td><td></td><td>1<input type="radio" name="comfortScore" value="1"/></td>
</tr>
  <tr>
  <td>Quality of bed<td>5<input type="radio" name="bedScore" value="5"/></td><td></td><td>4<input type="radio" name="bedScore" value="4"/></td>
  <td></td><td>3<input type="radio" name="bedScore" value="3"/></td><td></td><td>2<input type="radio" name="bedScore" value="2"/></td>
  <td></td><td>1<input type="radio" name="bedScore" value="1"/></td>
  </tr>
  <tr>
  <td>Quality of shower facilities</td>
  <td>5<input type="radio" name="showerScore" value="5"/></td><td></td><td>4<input type="radio" name="showerScore" value="5"/></td><td></td><td>3
  <input type="radio" name="showerScore" value="3"/></td><td></td><td>2<input type="radio" name="showerScore" value="2"/></td>
  <td></td><td>1<input type="radio" name="showerScore" value="1"/></td> 
  </tr>
  <tr>
  <td>Quality of In-room amenities</td><td>5<input type="radio" name="amenitiesScore" value="5"></td><td></td>
  <td>4<input type="radio" name="amenitiesScore" value="4"/></td><td></td>
  <td>3<input type="radio" name="amenitiesScore" value="3"/></td><td></td><td>2<input type="radio" name="amenitiesScore" value="2"/></td>
  <td></td><td>1<input type="radio" name="amenitiesScore" value="1"/></td>
  </tr>
  <tr><td>Cleanliness</td><td>5<input type="radio" name="cleanScore" value="5"/></td><td></td>
  <td>4<input type="radio" name="cleanScore" value="4"/></td><td></td><td>3<input type="radio" name="cleanScore" value="3"/></td>
  <td></td><td>2<input type="radio" name="cleanScore" value="2"/></td><td></td><td>1<input type="radio" name="cleanScore" value="1"/></td>
  
  <tr><td>Quietness</td><td>5<input type="radio" name="quietScore" value="5"/></td><td></td>
  <td>4<input type="radio" name="quietScore" value="4"/></td><td></td><td>3<input type="radio" name="quietScore" value="3"/></td><td></td>
  <td>2<input type="radio" name="quietScore" value="2"/></td><td></td><td>1<input type="radio" name="quietScore" value="1"/></td>
  </tr>
  <!-- <tr><td colspan="12"><input type="submit" value="Submit" id="surveySubmitButton"></td></tr>-->
 
</table>
  <input type="submit" value="SUBMIT" id="surveySubmitButton"/>
 </form> 
 </div>
</div>

<!-- Disclaimer section -->
<div id="disclaimer">
<p>Disclaimer:The Squirrel Retreat is a fictional retreat that was created for a university assignment.
Any resemblance to real squirrels, living or dead is purely coincidental.

Deakin University. This web page has been developed as a student assignment for the unit SIT774:Web 
and Internet Programming. Therefore it is not part of the University's authorised web site.

DO NOT USE THE INFORMATION CONTAINED ON THIS WEB PAGE IN ANY WAY.
</p>
<a href="http://www.deakin.edu.au/" target="_blank">
<!--digital image of deakin logo,wikimedia, accessed 15 July 2016,
<https://commons.wikimedia.org/wiki/File:Deakin_Worldly_Logo.jpg>-->
	<img src="images/Deakin_Logo.png" alt="deakin logo" width="90" height="90" id="deakin_logo"/>
</a>
</div>
</body>
</html>
