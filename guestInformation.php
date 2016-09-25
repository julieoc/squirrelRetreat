<?php
session_start();
?>
<!DOCTYPE html>
<!--

Name: Julie Cao
Student ID: 216188104
Subject: SIT7714
Assignment: Assignment 1
Comment: This is a page which allows guests to enter their information and book a room at The Squirrel Retreat

-->
<html lang="en" xml:lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="description" content="Booking form for The Squirrel Retreat"/>
	<meta name="keywords" content="booking, guest information, squirrel,retreat,accomodation,hotel, holiday"/>
	<meta name="author" content="Julie Oanh Cao"/>
	<link rel="stylesheet" type="text/css" href="css/bodyAndHeadings.css">
	<link rel="stylesheet" type="text/css" href="css/navigationMenu.css">
	<link rel="stylesheet" type="text/css" href="css/retreatHeading.css">
	<link rel="stylesheet" type="text/css" href="css/formDefaults.css"/>
	<link rel="stylesheet" type="text/css" href="css/disclaimer.css">
	<link rel="stylesheet" type="text/css" href="css/guestInfo.css">

<title>Guest Information</title>
<script src="js/stringChecks.js" ></script>
<script src="js/guestInfo.js" ></script>

</head>
<body>

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

<div id="bodyDivGuestInfoPage">

<div id="twoTablesAndButton">
<div id="guestInfo">
<h2> GUEST INFORMATION </h2>
<form id="guestBooking" method="post" action="finaliseBooking.php">
<table>

<tr>
<td class="fieldNames">Title </td>
<td class="fieldInput" ><select name="titleSelection">
	<option value="Sir">Sir</option>
	<option value="Madam">Madam</option>
	<option value="Dame">Dame</option>
	<option value="Professor">Professor</option>
	<option value="Reverend">Reverend</option>
	<option value="Doctor">Doctor</option>
	<option value="Lumberjack">Lumberjack</option>
	<option value="Mr">Mr</option>
	<option value="Mrs">Mrs</option>
	<option value="Miss">Miss</option>
	<option value="Ms">Ms</option>
	<option value="Other">Other</option>
	</select>
</td>
</tr>
<tr>
<td class="fieldNames">First Name*: </td>
<td class="fieldInput"><input type="text" name="firstName" id="firstName" onblur="this.value=this.value.trim()"/></td>
</tr>
<tr class="errorMessageClass"><td colspan=2 id="firstNameError"></td>
</tr>
<tr>
<td class="fieldNames">Middle Name: </td>
<td class="fieldInput"><input type="text" name="middleName" id="middleName" onblur="this.value=this.value.trim()"/></td>
</tr>
<tr class="errorMessageClass"><td colspan=2 id="middleNameError"></td>
</tr>
<tr>
<td class="fieldNames"> Last Name*: </td>
<td class="fieldInput"><input type="text" name="lastName" id="lastName" onblur="this.value=this.value.trim()"/></td>
</tr>
<tr class="errorMessageClass"><td colspan=2 id="lastNameError"></td>
</tr>
<tr>
<td class="fieldNames">Email Address:</td>
<td class="fieldInput"><input type="text" name="emailAddress" id="emailAddress" onblur="this.value=this.value.trim()"/></td>
</tr>
<tr class="errorMessageClass"><td colspan=2 id="emailAddressError"></td>
</tr>
<tr>
<td class="fieldNames">Home phone no:</td>
<td class="fieldInput"><input type= "number" name="homePhoneNumber" id="homePhoneNumber" onblur="this.value=this.value.trim()"/></td>
</tr>
<tr class="errorMessageClass"><td colspan=2 id="homePhoneNumberError"></td>
</tr>
<tr>
<td class="fieldNames">Mobile phone no:</td>
<td class="fieldInput"><input type= "number" name="mobilePhoneNumber" id="mobilePhoneNumber" onblur="this.value=this.value.trim()"/></td>
</tr>
<tr class="errorMessageClass"><td colspan=2 id="mobilePhoneNumberError"></td>
</tr>
<tr>
<td class="fieldNames" >Address: </td>
<td class="fieldInput"><textarea name="address" id="address" onblur="this.value=this.value.trim()"> </textarea></td>
</tr>
<tr class="errorMessageClass"><td colspan=2 id="addressError"></td>
</tr>
<tr>
<td class="fieldNames">City:</td>
<td class="fieldInput"><input type= "text" name="city" id="city" onblur="this.value=this.value.trim()"/></td>
</tr>
<tr class="errorMessageClass"><td colspan=2 id="cityError"></td>
</tr>
<tr>
<td class="fieldNames">Postal code:</td>
<td class="fieldInput"> <input type= "number" name="postalCode" id="postalCode" onblur="this.value=this.value.trim()"/></td>
</tr>
<tr class="errorMessageClass"><td colspan=2 id="postalCodeError"></td>
</tr>
<tr>
<td class="fieldNames">State:</td>
<td class="fieldInput"><input type= "text" name="state" id="state"/></td><span class="errorMessageClass" id="stateError" onblur="this.value=this.value.trim()"></span>
</tr>
<tr>
<td class="fieldNames">Country:</td>
<td class="fieldInput"><input type= "text" name="country" id="country"  onblur="this.value=this.value.trim()"/></td>
</tr>
<tr class="errorMessageClass"><td colspan=2 id="countryError" onblur="this.value=this.value.trim()"></td>
</tr>
</table>
</div>

<div id="paymentSection">
<h2> PAYMENT METHOD </h2>


<table>
<tr>
<td colspan="2" class="fieldInput">
<div class="creditCardDiv leftCard"><input type="radio" name="paymentOption" class="radioLabel" id="visa" value ="visa" checked/><!-- digital image of visa logo, megavar, accessed 13 July 2016, <www.megavar.com.au>.-->
	<label for="visa"><img class="cardImages" alt="visaCard" src="images/visa.jpeg"></label>
	<!-- digital image of visa logo, megavar, accessed 13 July 2016, <www.megavar.com.au>.-->
</div><div class="creditCardDiv middleCard"><input type="radio" name="paymentOption" class="radioLabel" id="mastercard" value="mastercard"/>
	<label for="mastercard"><img  class="cardImages" alt="masterCard" src="images/masterCard.jpg"></label>
	
	 <!--digital image of mastercard logo, aroundaboutcars, accessed 13 July 2016, <www.de.aroundaboutcars.com/>-->
</div><div class="creditCardDiv rightCard"><input type="radio" name="paymentOption" class="radioLabel" id="amex" value="amex"/>
	<label for="amex"><img class="cardImages" alt="amexCard" src="images/americanExpress.jpg"></label>
	<!--digital image of american express logo, Instapose Imagery, accessed 13 July 2016, <http://www.instapose.com.au/photobooth/>-->
	</div></td>
</tr>
<tr>
<td class="fieldNames"> Name on card:</td>
<td class="fieldInput"><input type="text" name="cardHolderName" id="cardHolderName" onblur="this.value=this.value.trim()"/></td>
</tr>
<tr class="errorMessageClass"><td colspan=2 id="cardHolderNameError"></td>
</tr>
<tr>
<td class="fieldNames"> Card number:</td>
<td class="fieldInput"><input type="number" name="cardNumber" id="cardNumber" onblur="this.value=this.value.trim()"/></td>
</tr>
<tr class="errorMessageClass"><td colspan=2 id="cardNumberError"></td>
</tr>
<tr>
<td class="fieldNames">Expiration date: </td>
<td class="fieldInput" ><select name="expiryMonth">
	<option value="January">January</option>
	<option value="February">February</option>
	<option value="March"> March</option>
	<option value="April">April</option>
	<option value="May">May</option>
	<option value="June">June</option>
	<option value="July">July</option>
	<option value="August"> August</option>
	<option value="September"> September</option>
	<option value="October"> October</option>
	<option value="November"> November</option>
	<option value="December"> December</option>
	</select>
</td>
</tr>
<tr>
<td class="fieldNames">Expiration year:</td>
<td class="fieldInput"><input type="text" name="yearOfExpiry" id="yearOfExpiry" onblur="this.value=this.value.trim()"/></td>
</tr>
<tr class="errorMessageClass"><td colspan=2 id="yearOfExpiryError"></td>
</tr>
<tr>
<td class="fieldNames">Verification code:</td>
<td class="fieldInput"><input type="number" name="verificationNo" id="verificationNo" onblur="this.value=this.value.trim()"/></td>
</tr>
<tr class="errorMessageClass"><td colspan=2 id="verificationNoError"></td>
</tr>
<tr>
<td class="fieldNames">Billing Address:</td>
<td class="fieldInput"><textarea name="billingAddress" id="billingAddress" onblur="this.value=this.value.trim()"></textarea></td>
</tr>
<tr class="errorMessageClass"><td colspan=2 id="billingAddressError"></td>
</tr>
<tr>
<td class="fieldNames">City:</td>
<td class="fieldInput"><input type="text" name="billingCity" id="billingCity" onblur="this.value=this.value.trim()"></td>
</tr>
<tr class="errorMessageClass"><td colspan=2 id="billingCityError"></td>
</tr>
<tr>
<td class="fieldNames">State:</td>
<td class="fieldInput"><input type="text" name="billingState" id="billingState" onblur="this.value=this.value.trim()"/></td>
</tr>
<tr class="errorMessageClass"><td colspan=2 id="billingStateError"></td>
</tr>
<tr>
<td class="fieldNames">Postcode:</td>
<td class="fieldInput"><input type="number" name="billingPostCode" id="billingPostCode" onblur="this.value=this.value.trim()"/></td>
</tr>
<tr class="errorMessageClass"><td colspan=2 id="billingPostCodeError"></td>
</tr>
<tr>
<td class="fieldNames">Country:</td>
<td class="fieldInput"><input type="text" name="billingCountry" id="billingCountry" onblur="this.value=this.value.trim()"/></td>
</tr>
<tr class="errorMessageClass"><td colspan=2 id="billingCountryError"></td>
</tr>
</table>
<div id=submitButtonDiv><input type="submit" value="BOOK NOW" id="guestInfoSubmitButton"/></div>
</form>
</div>
</div>
<div id="cashPicture">
<!--digital image of squirrel holding cash, gettyimages, accessed 20 July 2016, 
<http://media.gettyimages.com/photos/squirrel-holding-money-picture-id83455549?s=170x170>-->
<img src="images/cash.jpg" alt="squirrelHoldingCash" id="cash"/>
</div>
</div>

<?php require_once 'footer.php'; ?>

