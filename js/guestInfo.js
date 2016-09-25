
function resetErrors(errorElement)
{

	errorElement.innerHTML ="";
	errorElement.style.height = "0px";

}

function validateGuestBooking() 
{
    var guestBookingForm = document.getElementById("guestBooking"); 
    var guestFirstName = guestBookingForm["firstName"];
    var guestMiddleName = guestBookingForm["middleName"];
    var guestLastName = guestBookingForm["lastName"];
    var guestEmailAddress = guestBookingForm["emailAddress"];
    var guestHomeNo = guestBookingForm["homePhoneNumber"];
    var guestMobileNo = guestBookingForm["mobilePhoneNumber"];
    var guestAddress = guestBookingForm["address"];
    var guestCity = guestBookingForm["city"];
    var guestPostalCode = guestBookingForm["postalCode"];
    var guestState = guestBookingForm["state"];
    var guestCountry = guestBookingForm["country"];
    var guestCardName = guestBookingForm["cardHolderName"];
    var guestCardNo = guestBookingForm["cardNumber"];
    var guestCardExpYear = guestBookingForm["yearOfExpiry"];
    var guestCardVerCode = guestBookingForm["verificationNo"];
    var guestCardBillingAddress = guestBookingForm["billingAddress"];
    var guestCardCity = guestBookingForm["billingCity"];
    var guestCardState = guestBookingForm["billingState"];
    var guestCardPostcode = guestBookingForm["billingPostCode"];
    var guestCardCountry = guestBookingForm["billingCountry"];
    
	var errorsExist = false;
    if(isEmptyString(guestFirstName))
    {
    	document.getElementById('firstNameError').innerHTML ="This field cannot be blank. Please enter your first name";
    	document.getElementById("firstNameError").style.height = "20px"
    	document.getElementById('firstNameError').style.color = "red";
    	document.getElementById('firstName').style.borderColor="red";
    	document.getElementById('firstNameError').style.fontSize= "11px";
    	errorsExist = true;
    }
   	else if(!checkForAlphaString(guestFirstName.value))
   	{
   		document.getElementById('firstNameError').innerHTML ="First name can only contain alpha characters";
    	document.getElementById("firstNameError").style.height = "20px"
    	document.getElementById('firstNameError').style.color = "red";
    	document.getElementById('firstNameError').style.fontSize= "11px";
    	document.getElementById('firstName').style.borderColor="red";
    	errorsExist = true;
   	}
	else
    {
    	resetErrors(firstNameError);
    }
    
    if (!isEmptyString(guestMiddleName) && !checkForAlphaString(guestMiddleName.value))
   	{
   		document.getElementById('middleNameError').innerHTML ="Middle name can only contain alpha characters";
    	document.getElementById("middleNameError").style.height = "20px"
    	document.getElementById("middleNameError").style.color = "red";
    	document.getElementById("middleNameError").style.fontSize= "11px";
    	document.getElementById('middleName').style.borderColor="red";
    	errorsExist = true;
   	}
	else
    {
    	resetErrors(middleNameError);
    }
    
    if(isEmptyString(guestLastName))
    {
    	document.getElementById('lastNameError').innerHTML ="This field cannot be blank. Please enter your last name";
    	document.getElementById("lastNameError").style.height = "20px"
    	document.getElementById('lastNameError').style.color = "red";
    	document.getElementById('lastNameError').style.fontSize= "11px";
    	document.getElementById('lastName').style.borderColor="red";
		errorsExist = true;
    } 
    else if(!checkForAlphaString(guestLastName.value))
   	{
   		document.getElementById('lastNameError').innerHTML ="Last name can only contain alphanumeric characters";
    	document.getElementById('lastNameNameError').style.height = "20px";
    	document.getElementById('lastNameError').style.color = "red";
    	document.getElementById('lastNameError').style.fontSize= "11px";
    	document.getElementById('lastName').style.borderColor="red";
    	
		errorsExist = true;
   	}
    else
    {
    	resetErrors(lastNameError)
    }
    
    if(isEmptyString(guestEmailAddress))
    {
    	document.getElementById('emailAddressError').innerHTML ="This field cannot be blank. Please enter your email address";
    	document.getElementById('emailAddressError').style.height = "20px";
    	document.getElementById('emailAddressError').style.color = "red";
    	document.getElementById('emailAddressError').style.fontSize= "11px";
    	document.getElementById('emailAddress').style.borderColor="red";
		errorsExist = true;
    } 
    else if(!checkForValidEmailAddress(guestEmailAddress.value))
    {
    	document.getElementById('emailAddressError').innerHTML ="Please enter a valid email address";
    	document.getElementById('emailAddressError').style.height = "20px";
    	document.getElementById('emailAddressError').style.color = "red";
    	document.getElementById('emailAddressError').style.fontSize= "11px";
    	document.getElementById('emailAddress').style.borderColor="red";
    	
		errorsExist = true;   
	}
	else
    {
    	resetErrors(emailAddressNameError);
    }
    
	if(isEmptyString(guestHomeNo))
	{
		document.getElementById('homePhoneNumberError').innerHTML ="Please enter your home phone number";
    	document.getElementById('homePhoneNumberError').style.height = "20px";
    	document.getElementById('homePhoneNumberError').style.color = "red";
    	document.getElementById('homePhoneNumberError').style.fontSize= "11px";
    	document.getElementById('homePhoneNumber').style.borderColor="red";
		errorsExist = true;
	}
	else if(!checkForNumberStrng(guestHomeNo.value))
	{
		document.getElementById('homePhoneNumberError').innerHTML ="Please enter a valid home phone number";
    	document.getElementById('homePhoneNumberError').style.height = "20px";
    	document.getElementById('homePhoneNumberError').style.color = "red";
    	document.getElementById('homePhoneNumberError').style.fontSize= "11px";
    	document.getElementById('homePhoneNumber').style.borderColor="red";
		errorsExist = true;
	}
	else
    {
    	resetErrors(homePhoneNumberError);
    }
    
	if(isEmptyString(guestMobileNo))
	{
		document.getElementById('mobilePhoneNumberError').innerHTML ="Please enter your mobile phone number";
    	document.getElementById('mobilePhoneNumberError').style.height = "20px";
    	document.getElementById('mobilePhoneNumberError').style.color = "red";
    	document.getElementById('mobilePhoneNumberError').style.fontSize= "11px";
    	document.getElementById('mobilePhoneNumber').style.borderColor="red";
		errorsExist = true;
	}
	else if(!checkForNumberStrng(guestMobileNo.value))
	{
		document.getElementById('mobilePhoneNumberError').innerHTML ="Please enter a valid mobile phone number";
    	document.getElementById('mobilePhoneNumberError').style.height = "20px";
    	document.getElementById('mobilePhoneNumberError').style.color = "red";
    	document.getElementById('mobilePhoneNumberError').style.fontSize= "11px";
    	document.getElementById('mobilePhoneNumber').style.borderColor="red";
		errorsExist = true;
	}
	else
    {
    	resetErrors(mobilePhoneNumberError);
    }
    
	if(isEmptyString(guestAddress))
	{
		document.getElementById("addressError").innerHTML ="Please enter your address";
    	document.getElementById("addressError").style.height = "20px";
    	document.getElementById("addressError").style.color = "red";
    	document.getElementById("addressError").style.fontSize= "11px";
    	document.getElementById('address').style.borderColor="red";
		errorsExist = true;
	}
	else if (!checkForNumbersAndAlphaOnly(guestAddress.value))
	{
		document.getElementById("addressError").innerHTML ="Please enter your address";
    	document.getElementById("addressError").style.height = "20px";
    	document.getElementById("addressError").style.color = "red";
    	document.getElementById("addressError").style.fontSize= "11px";
    	document.getElementById('address').style.borderColor="red";
		errorsExist = true;
	}
	else
    {
    	resetErrors(addressError);
    }
    
	if(isEmptyString(guestCity))
	{
		document.getElementById("cityError").innerHTML ="Please enter your city";
    	document.getElementById("cityError").style.height = "20px";
    	document.getElementById("cityError").style.color = "red";
    	document.getElementById("cityError").style.fontSize= "11px";
    	document.getElementById('city').style.borderColor="red";
		errorsExist = true;
	}
	else if(!checkForAlphaString(guestCity.value))
   	{
   		document.getElementById("cityError").innerHTML ="City name can only contain alphabetical characters";
    	document.getElementById("cityError").style.height = "20px";
    	document.getElementById("cityError").style.color = "red";
    	document.getElementById("cityError").style.fontSize= "11px";
    	document.getElementById('city').style.borderColor="red";
    	
		errorsExist = true;
   	}
   	else
    {
    	resetErrors(cityError);
    }
    
	if(isEmptyString(guestPostalCode))
	{
		document.getElementById("postalCodeError").innerHTML ="Please enter your postal code";
    	document.getElementById("postalCodeError").style.height = "20px";
    	document.getElementById("postalCodeError").style.color = "red";
    	document.getElementById("postalCodeError").style.fontSize= "11px";
    	document.getElementById('postalCode').style.borderColor="red";
		errorsExist = true;
	}
	else if(!checkForNumberStrng(guestPostalCode.value))
	{
		document.getElementById("postalCodeError").innerHTML ="Please enter a valid postal code";
    	document.getElementById("postalCodeError").style.height = "20px";
    	document.getElementById("postalCodeError").style.color = "red";
    	document.getElementById("postalCodeError").style.fontSize= "11px";
    	document.getElementById('postalCode').style.borderColor="red";
		errorsExist = true;
	}
	else
    {
    	resetErrors(postalCodeError);
    }
    if(isEmptyString(guestState))
	{
		document.getElementById("stateError").innerHTML ="Please enter your state";
    	document.getElementById("stateError").style.height = "20px";
    	document.getElementById("stateError").style.color = "red";
    	document.getElementById("stateError").style.fontSize= "11px";
    	document.getElementById('state').style.borderColor="red";
		errorsExist = true;
	}
   	else if(!checkForAlphaString(guestState.value))
   	{
   		document.getElementById("stateError").innerHTML ="City name can only contain alphabetical characters";
    	document.getElementById("stateError").style.height = "20px";
    	document.getElementById("stateError").style.color = "red";
    	document.getElementById("stateError").style.fontSize= "11px";
    	document.getElementById('state').style.borderColor="red";
		errorsExist = true;
   	} 
	else
    {
    	resetErrors(stateError);
    }
    if(isEmptyString(guestCountry))
    {
		document.getElementById("countryError").innerHTML ="Please enter your country";
    	document.getElementById("countryError").style.height = "20px";
    	document.getElementById("countryError").style.color = "red";
    	document.getElementById("countryError").style.fontSize= "11px";
    	document.getElementById('country').style.borderColor="red";
		errorsExist = true;
	}
    else if(!checkForAlphaString(guestCountry.value))
   	{
   		document.getElementById("countryError").innerHTML ="Country name can only contain alphabetical characters";
    	document.getElementById("countryError").style.height = "20px";
    	document.getElementById("countryError").style.color = "red";
    	document.getElementById("countryError").style.fontSize= "11px";
    	document.getElementById('country').style.borderColor="red";
		errorsExist = true;
   	} 
   	else
    {
    	resetErrors(countryError);
    }
    if(isEmptyString(guestCardName))
    {
		document.getElementById("cardHolderNameError").innerHTML ="Please enter the cardholder name";
    	document.getElementById("cardHolderNameError").style.height = "20px";
    	document.getElementById("cardHolderNameError").style.color = "red";
    	document.getElementById("cardHolderNameError").style.fontSize= "11px";
    	document.getElementById('cardHolderName').style.borderColor="red";
		errorsExist = true;
	}
	else if(!checkForAlphaString(guestCardName.value))
   	{
   		document.getElementById("cardHolderNameError").innerHTML ="Cardholder name can only contain alphabetical characters";
    	document.getElementById("cardHolderNameError").style.height = "20px";
    	document.getElementById("cardHolderNameError").style.color = "red";
    	document.getElementById("cardHolderNameError").style.fontSize= "11px";
    	document.getElementById('cardHolderName').style.borderColor="red";
		errorsExist = true;
   	} 
   	else
    {
    	resetErrors(cardHolderNameError);
    }
    if(isEmptyString(guestCardNo))
    {
		document.getElementById("cardNumberError").innerHTML ="Please enter the card number";
    	document.getElementById("cardNumberError").style.height = "20px";
    	document.getElementById("cardNumberError").style.color = "red";
    	document.getElementById("cardNumberError").style.fontSize= "11px";
    	document.getElementById('cardNumber').style.borderColor="red";
    	
		errorsExist = true;
	}
	else if(!checkForNumberStrng(guestCardNo.value))
	{
		document.getElementById("cardNumberError").innerHTML ="Please enter a valid credit card number";
    	document.getElementById("cardNumberError").style.height = "20px";
    	document.getElementById("cardNumberError").style.color = "red";
    	document.getElementById("cardNumberError").style.fontSize= "11px";
    	document.getElementById('cardNumber').style.borderColor="red";
		errorsExist = true;
	}
	else
    {
    	resetErrors(cardNumberError);
    }
    if(isEmptyString(guestCardExpYear))
    {
		document.getElementById("yearOfExpiryError").innerHTML ="Please enter the year of expiry";
    	document.getElementById("yearOfExpiryError").style.height = "20px";
    	document.getElementById("yearOfExpiryError").style.color = "red";
    	document.getElementById("yearOfExpiryError").style.fontSize= "11px";
    	document.getElementById('yearOfExpiry').style.borderColor="red";
		errorsExist = true;
	}
	else if(!checkForNumberStrng(guestCardExpYear.value))
	{
		document.getElementById("yearOfExpiryError").innerHTML ="Please enter a valid year of expiry";
    	document.getElementById("yearOfExpiryError").style.height = "20px";
    	document.getElementById("yearOfExpiryError").style.color = "red";
    	document.getElementById("yearOfExpiryError").style.fontSize= "11px";
    	document.getElementById('yearOfExpiry').style.borderColor="red";
		errorsExist = true;
	}
	else
    {
    	resetErrors(yearOfExpiryError);
    }
    if(isEmptyString(guestCardVerCode))
    {
		document.getElementById("verificationNoError").innerHTML ="Please enter the card's verification number";
    	document.getElementById("verificationNoError").style.height = "20px";
    	document.getElementById("verificationNoError").style.color = "red";
    	document.getElementById("verificationNoError").style.fontSize= "11px";
    	document.getElementById('verificationNo').style.borderColor="red";
		errorsExist = true;
	}
	else if(!checkForNumberStrng(guestCardVerCode.value))
	{
		document.getElementById("verificationNoError").innerHTML ="Please enter a valid verification number";
    	document.getElementById("verificationNoError").style.height = "20px";
    	document.getElementById("verificationNoError").style.color = "red";
    	document.getElementById("verificationNoError").style.fontSize= "11px";
    	document.getElementById('verificationNo').style.borderColor="red";
		errorsExist = true;
	}
	else
    {
    	resetErrors(verificationNoError);
    }
    if(isEmptyString(guestCardBillingAddress))
    {
		document.getElementById("billingAddressError").innerHTML ="Please enter the card's billing address";
    	document.getElementById("billingAddressError").style.height = "20px";
    	document.getElementById("billingAddressError").style.color = "red";
    	document.getElementById("billingAddressError").style.fontSize= "11px";
    	document.getElementById('billingAddress').style.borderColor="red";
		errorsExist = true;
	}
	else
	{
    	resetErrors(billingAddressError);
    }
    
    if(isEmptyString(guestCardCity))
    {
		document.getElementById("billingCityError").innerHTML ="Please enter the card's billing city";
    	document.getElementById("billingCityError").style.height = "20px";
    	document.getElementById("billingCityError").style.color = "red";
    	document.getElementById("billingCityError").style.fontSize= "11px";
    	document.getElementById("billingCity").style.borderColor="red";
    	errorsExist = true;
	}
	else if(!checkForNumberStrng(guestCardCity.value))
	{
		document.getElementById("billingCityError").innerHTML ="Please enter a valid billing city";
    	document.getElementById("billingCityError").style.height = "20px";
    	document.getElementById("billingCityError").style.color = "red";
    	document.getElementById("billingCityError").style.fontSize= "11px";
    	document.getElementById("billingCity").style.borderColor="red";
    	errorsExist = true;
	}
	else
	{
    	resetErrors(billingCityError);
    }
    if(isEmptyString(guestCardState))
    {
		document.getElementById("billingStateError").innerHTML ="Please enter the card's billing state";
    	document.getElementById("billingStateError").style.height = "20px";
    	document.getElementById("billingStateError").style.color = "red";
    	document.getElementById("billingStateError").style.fontSize= "11px";
    	document.getElementById("billingState").style.borderColor="red";
		errorsExist = true;
	}
	else if(!checkForAlphaString(guestCardState.value))
   	{
   		document.getElementById("billingStateError").innerHTML ="Billing state can only contain alphabetical characters";
    	document.getElementById("billingStateError").style.height = "20px";
    	document.getElementById("billingStateError").style.color = "red";
    	document.getElementById("billingStateError").style.fontSize= "11px";
    	document.getElementById("billingState").style.borderColor="red";
		errorsExist = true;
   	} 
   	else
    {
    	resetErrors(billingStateError);
    }
    
    if(isEmptyString(guestCardPostcode))
    {
		document.getElementById("billingPostCodeError").innerHTML ="Please enter the card's billing postcode";
    	document.getElementById("billingPostCodeError").style.height = "20px";
    	document.getElementById("billingPostCodeError").style.color = "red";
    	document.getElementById("billingPostCodeError").style.fontSize= "11px";
    	document.getElementById("billingPostCode").style.borderColor="red";
		errorsExist = true;
	}
	else if(!checkForNumberStrng(guestCardPostcode.value))
	{
		document.getElementById("billingPostCodeError").innerHTML ="Please enter a valid billing postcode";
    	document.getElementById("billingPostCodeError").style.height = "20px";
    	document.getElementById("billingPostCodeError").style.color = "red";
    	document.getElementById("billingPostCodeError").style.fontSize= "11px";
    	document.getElementById("billingPostCode").style.borderColor="red";
		errorsExist = true;
	}
	else
	{
    	resetErrors(billingPostCodeError);
    }
	if(isEmptyString(guestCardCountry))
    {
		document.getElementById("billingCountryError").innerHTML ="Please enter the card's billing country";
    	document.getElementById("billingCountryError").style.height = "20px";
    	document.getElementById("billingCountryError").style.color = "red";
    	document.getElementById("billingCountryError").style.fontSize= "11px";
    	document.getElementById("billingCountry").style.borderColor="red";
		errorsExist = true;
	}
	else if(!checkForAlphaString(guestCardCountry.value))
   	{
   		document.getElementById("billingCountryError").innerHTML ="Billing country can only contain alphabetical characters";
    	document.getElementById("billingCountryError").style.height = "20px";
    	document.getElementById("billingCountryError").style.color = "red";
    	document.getElementById("billingCountryError").style.fontSize= "11px";
    	document.getElementById("billingCountry").style.borderColor="red";
    	
		errorsExist = true;
   	} 
   	else
    {
    	resetErrors(billingCountryError);
    }
	return !errorsExist;
}
