
//http://stackoverflow.com/questions/27317437/how-to-check-if-one-date-is-before-another-date-using-javascript-jquery
function compareTime(time1, time2) {
    return new Date(time1) > new Date(time2); // true if time1 is later
}

function resetErrors(errorElement)
{
	errorElement.innerHTML ="";
	errorElement.style.height = "0px";
}

function validateBookingForm() 
{
    var checkAvailabilityForm = document.getElementById("makeABookingForm"); // retrieves  the values from makeABookingForm and assigns them to the checkAvailabilityForm
    var checkin = checkAvailabilityForm["checkinDate"];
    var checkout = checkAvailabilityForm["checkoutDate"];
    var adults = checkAvailabilityForm["numAdults"];
    var children= checkAvailabilityForm["numChildren"];
    var currentTimeStamp = new Date();
    
	var errorsExist = false;
    if(isEmptyString(checkin))
    {
    		document.getElementById('checkinDateError').innerHTML ="Please enter a valid check-in date";
    		document.getElementById("checkinDateError").style.height = "auto";
    		document.getElementById('checkinDateError').style.color = "red";
    		document.getElementById('checkinDateError').style.borderColor="red";
    		document.getElementById('checkinDate').style.fontSize= "11px";
    		errorsExist = true;
    }
    else if(compareTime(currentTimeStamp, checkin.value))
    {
    		document.getElementById('checkinDateError').innerHTML="Check-in date cannot be earlier than current date. Please enter a valid date";
    		document.getElementById("checkinDateError").style.height = "auto";
    		document.getElementById('checkinDateError').style.color = "red";
    		document.getElementById('checkinDateError').style.borderColor="red";
    		document.getElementById('checkinDate').style.fontSize= "11px";
    		errorsExist = true;
    }
    
    else
    {
    	resetErrors(checkinDateError);
    
    }
    if(isEmptyString(checkout))
    {
    		document.getElementById('checkoutDateError').innerHTML ="Please enter a valid check-out date";
    		document.getElementById("checkoutDateError").style.height = "auto";
    		document.getElementById('checkoutDateError').style.color = "red";
    		document.getElementById('checkoutDateError').style.borderColor="red";
    		document.getElementById('checkoutDate').style.fontSize= "11px";

    		errorsExist = true;
    } 
    else if(compareTime(checkin.value, checkout.value))
    {
    		document.getElementById('checkoutDateError').innerHTML="Checkout date must be after checkin date. Please enter a valid date";
    		document.getElementById("checkoutDateError").style.height = "auto";
    		document.getElementById('checkoutDateError').style.color = "red";
    		document.getElementById('checkoutDateError').style.borderColor="red";
    		document.getElementById('checkoutDate').style.fontSize= "11px";
    
    		errorsExist = true;
    }
	else
    {
    	resetErrors(checkoutDateError);
    
    }
    if(isEmptyString(adults)) 
    {
        	document.getElementById('adultError').innerHTML="At least on adult is required per reservation";
        	document.getElementById("adultError").style.height = "auto";
        	document.getElementById('adultError').style.color = "red";
    		document.getElementById('adultError').style.borderColor="red";
    		document.getElementById('numAdults').style.fontSize= "11px";
        	errorsExist = true;
    }
    else if(adults.value > 20 || adults.value <= 0) 
    {
        	document.getElementById('adultError').innerHTML="The number of adults for this booking must be between 1 and 20";
        	document.getElementById("adultError").style.height = "auto";
        	document.getElementById('adultError').style.color = "red";
    		document.getElementById('adultError').style.borderColor="red";
    		document.getElementById('numAdults').style.fontSize= "11px";
        	errorsExist = true;
    }
    else
    {
    	resetErrors(adultError);
    
    }
    if(!isEmptyString(children) && (children.value > 20 || children.value < 0))
    {
		document.getElementById('childrenError').innerHTML = "The number of children for this booking must be between 0 and 20";
		document.getElementById("childrenError").style.height = "auto";
		document.getElementById('childrenError').style.color = "red";
    	document.getElementById('childrenError').style.borderColor="red";
    	document.getElementById('numChildren').style.fontSize= "11px";
		errorsExist= true;
    }
    else
    {
    	resetErrors(childrenError);
    }
    return !errorsExist;
} 

function validateEnquiryForm() 
{
    var validateEnquiryForm = document.getElementById("enquiryForm"); // retrieves  the values from makeABookingForm and assigns them to the checkAvailabilityForm
    var firstName = validateEnquiryForm["firstname"];
    var lastName = validateEnquiryForm["lastname"];
    var enquiry= validateEnquiryForm["enquiry"];    

	var errorsExist = false;
    if(isEmptyString(firstName))
    {
    		document.getElementById('firstNameError').innerHTML ="Please enter your first name";
    		document.getElementById("firstNameError").style.height = "auto";
    		document.getElementById('firstNameError').style.color = "red";
    		document.getElementById('firstNameError').style.borderColor="red";
    		document.getElementById('firstname').style.fontSize= "11px";
    		
    		
    		errorsExist = true;
    } 
    else
    {
    	resetErrors(firstName);
    }
	if(isEmptyString(lastName.value))
    {
    		document.getElementById('lastNameError').innerHTML ="Please enter your last name";
    		document.getElementById("lastNameError").style.height = "auto";
    		document.getElementById('lastNameError').style.color = "red";
    		document.getElementById('lastNameError').style.borderColor="red";
    		document.getElementById('lastname').style.fontSize= "11px";
    	
    		
    		
    		errorsExist = true;
    } 
    else
    {
    	resetErrors(lastName);
    }
    if(isEmptyString(enquiry))
    {
    		document.getElementById('enquiryError').innerHTML ="Please enter your enquiry";
    		document.getElementById("enquiryError").style.height = "auto";
    		document.getElementById('enquiryError').style.color = "red";
    		document.getElementById('enquiryError').style.borderColor="red";
    		document.getElementById('enquiry').style.fontSize= "11px";
    		
    		errorsExist = true;
    } 
    else
    {
    	resetErrors(enquiryError);
    }
    return !errorsExist;
}
    










