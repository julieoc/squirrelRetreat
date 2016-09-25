<?php
session_start();

// Set default values for the booking form, retrieve if previously set
$adults = isset($_SESSION['numAdults']) ? $_SESSION['numAdults'] : "";
$children = isset($_SESSION['numChild']) ? $_SESSION['numChild'] : "";
$inDate = isset($_SESSION['checkinDate']) ? $_SESSION['checkinDate'] : "";
$outDate = isset($_SESSION['checkoutDate']) ? $_SESSION['checkoutDate'] : "";
$roomType = isset($_SESSION['roomType']) ? $_SESSION['roomType'] : "Standard";
unset($_SESSION['numAdults'], $_SESSION['numChild'], $_SESSION['checkinDate'],
      $_SESSION['checkoutDate'], $_SESSION['roomType']);

// Let the user know if the room they chose is unavailable
if (isset($_SESSION['roomAvailable'])) {
  $unavailableOnLoad = 'onload="noRoomsAvailable()"';
  $unavailableOnLoadJS = '<script>
function noRoomsAvailable() {
  alert("There are no '. $roomType .' rooms available between '. $inDate .' and '. $outDate .'. Please try another combination.")
}
</script>';
  unset($_SESSION['roomAvailable']);
}
?>
 <!DOCTYPE html>
 <!--

Name: Julie Cao
Student ID: 216188104
Subject: SIT7714
Assignment: Assignment 2
Comment: This is the main page of The Squirrel Retreat website. It contains information about the
retreat, such as details of it's history, room descriptions, dining information, traveller reviews, and contact information.


-->
<html lang="en" xml:lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="The Squirrel Retreat has been providing luxury accomodation 			for squirrels since 1923">
<meta name="keywords" content="squirrel,retreat,accomodation,hotel, holiday, dining, heston blumenthal, acacia tree">
<meta name="author" content="Julie Oanh Cao">
<title>The Squirrel Retreat
</title>
 <!-- TO DO: 
 menu option at top and make it a different colour choose language, en, squirrel english. 
 -->
<link rel="stylesheet" type="text/css" href="css/bodyAndHeadings.css">
<link rel="stylesheet" type="text/css" href="css/navigationMenu.css">
<link rel="stylesheet" type="text/css" href="css/retreatHeading.css">	 
<link rel="stylesheet" type="text/css" href="css/formDefaults.css">
<link rel="stylesheet" type="text/css" href="css/disclaimer.css">
<link rel="stylesheet" type="text/css" href="css/index.css">

<script src="js/index.js" ></script>
<?php
if (isset($unavailableOnLoadJS)) echo $unavailableOnLoadJS;
?>
</head>

    <body <?php echo $unavailableOnLoad; ?> >
    <nav>
    <div id="navigationToolbar">
		<ul class="navigationBar">
			<li class="navigationBar"><a id="ABOUT" href="#aboutInfo" >ABOUT</a></li>
			<li class="navigationBar"><a id="ROOMS" href="#roomsInfo">ROOMS</a> </li>
			<li class="navigationBar"><a id="DINING" href="#diningInfo">DINING</a></li>
			<li class="navigationBar"><a id="REVIEWS" href="#retreatReviews">REVIEWS</a></li>
			<li class="navigationBar"><a id="CONTACT" href="#contactUs">CONTACT</a></li>
			<li class="navigationBar"><a id="BOOK" href="#titleAndCaption">BOOK</a></li>
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

    <div id="makeABookingDiv">
		<form id="makeABookingForm" action="findRoom.php" method="post"  onsubmit="return validateBookingForm()">
			<div class="divTable">
				<div class="divRow">
					<div class="divCol"> Check in:</div>
					<div class="divInputCol">
					<input type="date" name="inDate" id="checkinDate" value="<?php echo $inDate; ?>" required/>
					<div class="errorMessageClass" id="checkinDateError"></div>
					</div>
					<div class="divCol"> Check out:</div>
					<div class="divInputCol">
					<input type="date" name="outDate" id="checkoutDate" value="<?php echo $outDate; ?>" required/>
					<div class="errorMessageClass" id="checkoutDateError"></div>
					</div>
				</div>
				<div class="divRow">	
					<div class="divCol"> No. adults:</div>
					<div class="divInputCol numberInput">
					<input type="number" name="numAdults" id="numAdults" value="<?php echo $adults; ?>" required />
					<div class="errorMessageClass" id="adultError"></div>
					</div>
					<div class="divCol"> No children: </div>
					<div class="divInputCol numberInput">
					<input type="number" name="numChildren" id="numChildren" value="<?php echo $children; ?>"/>
					<div class="errorMessageClass" id="childrenError"></div>
					</div>
				</div>
				<div class="divRow">
					<div class="divCol">Room type:</div>
					<div class="divInputCol">
					<select name="roomType" required>
					  <option value="Standard" <?php if ($roomType == "Standard") echo "selected"; ?> >Standard</option>
					  <option value="Deluxe" <?php if ($roomType == "Deluxe") echo "selected"; ?> >Deluxe</option>
					  <option value="Penthouse"  <?php if ($roomType == "Penthouse") echo "selected"; ?> >Penthouse</option>
				  </select>
					</div>
					<div class="divCol"></div>
					<div class="divCol">
				    <input type="submit" value="BOOK" id="bookingSubmit" />
				  </div>
				</div>
			</div>
		</form>
	</div>

<!--digital image of taupo lodge, auto venture, accessed 15 July 2016, <http://www.autoventure.com/south-pacific/new-zealand-the-north-island/>-->	 
    <img src="images/luxury-lodge.jpg" alt="squirrel hotel and spa photo" id="hotelImage"/>
   
   <h2 id="aboutInfo">ABOUT THE SQUIRREL RETREAT</h2>
<!--digital image of squirrel wearing a suit,washington rebel, accessed 23 July 2016,<washington_rebel/2009/10/why.html>-->
<img src="images/rocky.jpeg" alt="Photo of Sir Acornelius Battentail" id="rockyImage"/>
<div class="aboutSection">

The historic Squirrel Retreat was the brainchild of Sir Acornelius Battentail who came up with the vision for this place during the Summer of 1922, when struggling to find suitable holiday accomodation options for him and his young family. Battentail observed that whilst squirrels were permitted to stay at these largely human-run establishments, none of these places had been designed with the squirrel clientelle in mind.
That year, he  wrote a letter to the editor of his local newspaper, where he delivered an impassioned plea to not just the hotel operators, but society as a whole, to end the discimination against his species, and to provide them with the same opportunity and creature comforts that they wererightly entitled to. His letter was widely praised by both squirrels and humans, and for the first time, it opened up the dialogue to dicuss these issues, which were seldom spoken about prrivately, let alone, publicly. Shortly after it was published, the high-profile tree lobbyist
became highly sought after by local and international journalists, who regarded him to be the first squirrel-rights activist.
Battentail enjoyed being in the spotlight, and used that time to spread the world about his
plans to build the first squirrel-friendly hotel.

<p>
When asked by a well-respectable media personality, to give an example of features that he had in mind for this place, that would make
them more squirrel-friendly, Battentail replied:
</p>
<p>
"We have designed a place where every single feature, from the restaurant menu options to more mundane things
 such as door handles are 100% squirrel accessible. We have engaged a well renowned squirrel locksmith who has come up
 with a world-first hotel door handle design that can be used by squirrels without them having to jump up to reach it. Many squirrels have chronic knee problems because of poorly designed door handles, so this will no doubt be well received by the community.
 I hope that this new door handle design takes off and becomes the standard, not just in hotels, but in any kind
 of building that that sees non-human traffic." 
</p>
<p>
 Battentail and his staff worked tirelessly over the next 10 months to bring these plans to fruition, and these efforts paid off, 
 because on the 12th of August, 1923, the project was complete, and The Squirrel Retreat was officially opened.
Shortly after it was launched squirrel guests from all over the world flocked in large numbers to book themselves in for their upcoming holidays.
The reviews were all positive, and it wasn't long until Battentails' hotel was accomodating for a string of a-list squirrel celebrities who had heard
about the hype, and wanted to see for themselves what the fuss was all about. 
    </p>
    <p>
    To this day, the successful entrepreneur is still active in the retreat's day-to day operations but has reduced his working hours significantly
    in order to spend more time with his family.</p>
</div>
<h2 id="roomsInfo"> ROOM INFORMATION </h2>
   	
<table>
<tr class="firstTwoRows" >
<th rowspan="2" class="firstTwoRows">ROOM TYPE</th>
<th colspan="2">ROOM RATE</th>
<th rowspan="2" colspan="2">ROOM FEATURES</th>
</tr>
<tr class="firstTwoRows">
<td>1 night</td>
<td>3+ nights</td>
</tr>
<tr>
<td>Standard</td>
<td>$95</td>
<td>$91</td>
<td class="roomFeatures">
<ul>
<li>Queen bed</li>
<li>Mini bar</li>
<li>Tea/coffee making facilities</li>
<li>Thermostat(adjustable)</li>
<li>Complimentary wifi</li>
<li>In-room movie channels</li>
<li>Fur-dryer</li>
<li>Work-desk</li>
<li>Safe</li>
</ul>
</td>
<td>
<!--digital image of a queen bed,voyagesdestination, accessed 23 July 2016,<http://www.voyagesdestination.com/images/hotels/honolulu/aquaqueenkapiolani/files/Aqua_Queen_Kapiolani_h.jpg>-->
<img src="images/queenBed.jpg" alt="queenBed" id="queenBed"/>
<!--digital image of a king bed, amazonaws, accessed 23 July  2016, 2016,<http://bnbwebsites.s3.amazonaws.com/3673/reservation_button.png>-->
<a href="#titleAndCaption">
<!--digital image of a reservation button, royalrosehotel, accessed 23 July  2016, <http://bnbwebsites.s3.amazonaws.com/3673/reservation_button.png>--> 
<img src ="images/reservation_button.png" alt="reservation button" class="reservation_button" />
</a>
</tr>
<tr>
<td>Deluxe</td>
<td>$120</td>
<td>$117</td>
<td class="roomFeatures">
<ul>
<li>King bed</li>
<li>Complimentary breakfast</li>
<li>Mini bar</li>
<li>Tea/coffee making facilities</li>
<li>Thermostat(adjustable)</li>
<li>Complimentary wifi</li>
<li>In-room movie channels</li>
<li>Fur-dryer</li>
<li>Work-desk</li>
<li>Safe</li>

</ul></td>
<td>
<!--digital image of a king bed, royalrosehotel, accessed 23 July  2016, <http://www.royalrosehotel.com/Admin/Content/Grand-Deluxe-Room-King-Bed-Big32201584154.jpg>-->
<img src="images/deluxeRoom.jpg" alt="kingBed" id="kingBed"/>
 <a href="#titleAndCaption">
<!--digital image of a reservation button, royalrosehotel, accessed 23 July  2016, <http://bnbwebsites.s3.amazonaws.com/3673/reservation_button.png>--> 
<img src ="images/reservation_button.png" alt="reservation button" class="reservation_button" />
</a>
</td>
</tr>
<tr>
<td>Penthouse</td>
<td>$145</td>
<td>$140</td>
<td class="roomFeatures">
<ul>
<li>Super King bed</li>
<li>Panoramic forrest views</li>
<li>Complimentary breakfast</li>
<li>Complimentary tail brushing</li>
<li>In-room butler</li>
<li>Mini bar</li>
<li>Tea/coffee making facilities</li>
<li>Thermostat(adjustable)</li>
<li>Complimentary wifi</li>
<li>In-room movie channels</li>
<li>Fur-dryer</li>
<li>Work-desk</li>
<li>Safe</li>

</ul>
</td>
<!--digital image of a penthouse,amazonaws, accessed 23 July 2016,<http://cdn.home-designing.com/wp-content/uploads/2014/06/Turkey-Luxury-Penthouse.jpg>-->
<td>
<img src="images/penthouse.jpg" alt="pentHouse" id="penthouse"/>
<!--digital image of a reservation button, royalrosehotel, accessed 23 July  2016, <http://bnbwebsites.s3.amazonaws.com/3673/reservation_button.png>--> 
 <a href="#titleAndCaption">
	<img src ="images/reservation_button.png" alt="reservation button" class="reservation_button" />
	</a>
</td>
</tr>


</table>
<h2 id="diningInfo"> DINING AT THE SQUIRREL RETREAT </h2>
 <div id="diningSection" class="diningSectionTwoTextOnly">The Squirrel Retreat is proud to be the home of the internationally acclaimed restaurant, 'The Acacia Tree'
Under the skilful guidance of head chefs Heston Blumental and his talented partner,Jane Dough, this Michelin star awarded establishment is known for dishing up the finest modern fusion cuisine, 
Using only the finest locally sourced ingredients from unendangered forrests, the chef duo use artisinal methods to produce an exciting array of instagram-worthy culinary masterpieces. 
The ever-changing menu keeps the dining experience interesting for restaurants new and regular clients, and can be easily tailored for those with special dietary requirements. View the menu <a href="#menuTitle">here</a>.

 <!--digital image of Heston Blumenthal, foodservicegateway, accessed on 23 July 2016<http://foodservicegateway.com.au/wp-content/uploads/Heston-Blumenthal.png>-->
<img src="images/heston_transparent.png" alt="hestonBlumenthal" id="heston"/>
<!-- digital image of squirrel chef, bigcommerce, accessed on 23 July 2016, <http://cdn3.bigcommerce.com/s-8ie3pgbc/product_images/uploaded_images/squirrel-chef.jpg?t=1449275782>-->
 <img src="images/chef_transparent.png" alt="squirrelChef" id="chef"/>
<div class="diningSectionTwoTextOnly">
	<h3 id="aboutTheChefs"> ABOUT THE CHEFS</h3>
	Heston Blumenthal is a British celebrity and regular contributor to various books, newspapers and TV show, where he communicates about the science of cooking,
	 multisensory cooking, food pairing, and flavour encapsulation. He is the proud owner of several other Michelin-star retaurants in The UK and Australia. These include the 
	 The Fat Duck in Bray, Dinner in London, The Crown at Bray, and The Hinds Head.  The Acacia Tree has been his most successful venture to date, and remains
	 the only Michelin-star eatery in the world that specialises in squirrel cuisine. 

	<p>Jane Dough is new to the restaurant scene, having only just completed her professional cooking qualifications in 2013, where she graduated at the 
	top of her class. Despite being an all-rounder in the kitchen, Dough's passion lies in breads and pastries.
	Recognising that these items weren't usually part of the squirrel diet, Dough pioneered a special method of making pastry that involves layering sheets of dough that is made from frangipani flower flour. The light and delicate pastry is widely popular
	amongst not just squirrels, but all furry foodies.</p>
</div>

</div>
 

  <div class="food">
  <!--digital image of acorns, dreamtime, accessed 25 July 2016,<https://thumbs.dreamstime.com/z/acorns-plate-fork-table-71305464.jpg>-->
  <img src="images/acorns.jpg" alt="acorns" id="acorns" class="foodImage"/>
	 <!--digital image of conifer cones, colourbox, accessed 25 July 2016,<https://www.colourbox.com/preview/19314343-dried-pine-cones-on-a-white-plate.jpg>-->
	<img src="images/coniferCones.jpg" alt="coniferCones" id="coniferCones" class="foodImage"/>
    <!--digital image of fried insects, accessed 25 July 2016,<https:http://us.123rf.com/450wm/catherinelprod/catherinelprod1601/catherinelprod160100013/50094547-fried-insect-molitors-food-of-the-future.jpg?ver=6>-->
	<img src="images/friedInsects.jpeg" alt="friedInsects1" id="friedInsects1" class="foodImage"/>
 <!--digital image of fried insects, 123rf, accessed 25 July 2016,
<https:http://us.123rf.com/450wm/jumnong/jumnong1504/jumnong150400005/39078407-fried-insects-on-white-dish.jpg?ver=6>-->
	<img src="images/friedInsects2.jpg" alt="friedInsects2" id="friedInsects2" class="foodImage"/>	
 <!--digital image of pistachio nuts, 123rf, accessed 25 July 2016,<https:http://previews.123rf.com/images/valeniker/valeniker1501/valeniker150100025/35570400-roasted-pistachio-nuts-on-a-white-plate-Nut-rich-in-vitamin-A-and-E-Stock-Photo.jpg>-->
	<img src="images/nuts1.jpg" alt="nuts1" id="nuts1" class="foodImage"/>
	 <!--digital image of mixed fruit and nuts, 123rf, accessed 25 July 2016,<https:http://us.123rf.com/450wm/zaclurs/zaclurs1402/zaclurs140200040/26165925-mixed-nuts-and-dry-fruits-in-plate-isolated-on-white-background.jpg?ver=6>-->
	<img src="images/mixedFruitAndNuts.jpg" alt="mixedFruitAndNuts" id="mixedFruitAndNuts" class="foodImage"/>
 <!--digital image of raw chicken, dreamtime, accessed 25 July 2016,<https:https://thumbs.dreamstime.com/z/raw-chicken-feet-plate-spices-white-background-48139728.jpg>-->
 	<img src="images/rawChicken.jpg" alt="rawChicken" id="rawChicken" class="foodImage"/>
  </div>

  <div id="menuSection">
  <h2 id="menuTitle"> MENU </h2>
  <div id="entreeDiv">
  <h3 id="entrees">ENTREES</h3>
	  <p>crumbed conifer cones</p>
	  <p>braised beetle burrito</p>
	  <p>chicken and acorn soup</p>
	  <p>mixed vegetation with vinegarette dressing<p>
	  </div>
	  <div id="mainsDiv">
  <h3 id="mains">MAINS</h3>
	  <p>earwig enchiladas </p>
	  <p>whole baby bird in butterfly broth</p>
	  <p>foie grasshopper</p>
	  <p>roasted red radishes with rodent reduction</p>
	  </div>
	  <div id="dessertsDiv">
  <h3 id="desserts">DESSERTS</h3>
	  <p>mixed berry platter </p>
	  <p>strawberry strudel with cochroach crumble</p>
	  <p>chocolate mouse cake</p>
	  <p>blackberry and brazil nut brittle</p>
	  </div>
  </div>

<h2 id="retreatReviews"> REVIEWS </h2>

 <div class="logos">
	
	<a href="https://www.tripadvisor.com.au/" target="_blank">
	<!--digital image of trip advisor logo, tripadvisor, accessed 15 July 2016, <https://www.tripadvisor.dk/TravelersChoice>-->
	<img src="images/tripAdvisorAward.png" alt="tripAdvisorImage" width="100" height="100" id="trip_advisor"/>
	</a>
	</div>

<p>Your stay at The Squirrel Retreat comes with a guarantee that we will do whatever it takes to make you feel welcome, relaxed and comfortable. The raving reviews from our guests, and our  Tripadvisor award, are a testament to these claims. Below is a selection of comments from our previous patrons:</p>
<p class="reviews">"We really enjoyed our stay at The Squirrel Retreat. My wife and I stayed here on our honeymoon and I had organized the Penthouse suite for the occasion. We loved having access to the executive lounge and the complimentary tail brushing service was top notch" Reuben H</p>
<p class="reviews">"I stayed in the deluxe suite and it was exceptional. Highly recommend trying out the restaurant here, the chefs whip up some top quality food, with wonderful, fresh, flavours." Gerty G</p>
<p class="reviews">"Paws down the best hotel my family and I have ever stayed in!"Bear S
<p class="reviews">"Amazing room and service, breathtaking panoramic views. Must try the foie grasshopper at the Acacia tree restaurant. It is the best I have ever had!" Jeremiah W</p>
<p class="reviews">"Totally recommend the penthouse suite. Niles, our live-in butler was absolutely hilarious." Humphrey B
<p id="completeSurvey">For a limited time, when you submit a review of The Squirrel Retreat, you will be instantly placed in the running to win a brand new Honda Accornd! To ensure that you don't miss out, fill out our satisfaction survey by clicking on the link below.</p>

<a href="poll.html"><p id="win"> COMPLETE THE SURVEY FOR A CHANCE TO WIN!</p></a>
 

<h2 id= "contactUs" > CONTACT US </h2>
   <p>
  If you would like to learn more about the accommodation at The Squirrel Retreat, please contact us at your convenience and we will be happy to assist 
   </p>
   <h3>Address</h3>
   555 Elm Drive<br/>
	Oaktree Valley,<br/>
	Victoria 3333,<br/>
	AUSTRALIA<br/>
	<h3>Reservations and Enquiries</h3>
Tel: +61 3 9555 5555<br/>
Fax: +61 3 9555 5555<br/>
Email: enquries@squirrelretreat.com<br/>
<div id=contactFormDiv>
<h3 id= "contactUsForm" > Contact Form </h3>
<form id="enquiryForm" action="contactUs.php" method="post" onsubmit="return validateEnquiryForm()">
 First name:<br/>
  <input type="text" name="firstname" class="contactFormInputField contactFormInputText">
  <br/><br/>
  Last name:<br/>
  <input type="text" name="lastname" class="contactFormInputField contactFormInputText">
  <br/><br/>
  Message:<br/>
  <textarea rows="16" cols="20" name="enquiry" class="contactFormInputField">
  </textarea>
  <br/><br/>
  <input type="submit" value="Submit">
</form>
</div>

<?php require_once 'footer.php'; ?>
