<script>
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
console.log("function called");
    var checkAvailabilityForm = document.getElementById("makeABookingForm"); // retrieves  the values from makeABookingForm and assigns them to the checkAvailabilityForm
    var checkin = checkAvailabilityForm["checkinDate"];
    var checkout = checkAvailabilityForm["checkoutDate"];
    var adults = checkAvailabilityForm["numAdults"];
    var children= checkAvailabilityForm["numChildren"];
    var currentTimeStamp = new Date();
    
console.log(checkin.value);
	var errorsExist = false;
    if(checkin.value == "" || checkin.value == null)
    {
    		document.getElementById('checkinDateError').innerHTML ="Please enter a valid check-in date";
    		document.getElementById("checkinDateError").style.height = "auto"
    		
    		errorsExist = true;
    } 

   else if(compareTime(currentTimeStamp, checkin.value))
    {
    		document.getElementById('checkinDateError').innerHTML="Check-in date cannot be earlier than current date. Please enter a valid date";
    		document.getElementById("checkinDateError").style.height = "auto";
    		errorsExist = true;
    }
    
    else
    {
    	resetErrors(checkinDateError);
    
    }
    if(checkout.value == "" || checkout.value == null)
    {
    		document.getElementById('checkoutDateError').innerHTML ="Please enter a valid check-out date";
    		document.getElementById("checkoutDateError").style.height = "auto"

    		errorsExist = true;
    } 
  else if(compareTime(checkin.value, checkout.value))
    {
    	document.getElementById('checkoutDateError').innerHTML="Checkout date must be after checkin date. Please enter a valid date";
    	document.getElementById("checkoutDateError").style.height = "auto"
    		errorsExist = true;
    }
	else
    {
    	resetErrors(checkoutDateError);
    
    }
    if(adults.value == null || adults.value == "") 
    {
        	document.getElementById('adultError').innerHTML="At least on adult is required per reservation";
        	document.getElementById("adultError").style.height = "auto"
        	errorsExist = true;
    }
    
    if(adults.value > 20 || adults.value <=0) 
    {
        	document.getElementById('adultError').innerHTML="The number of adults for this booking must be between 1 and 20";
        	document.getElementById("adultError").style.height = "auto"
        	errorsExist = true;
    }
    else
    {
    	resetErrors(adultError);
    
    }
    if(children.value >20 || children.value<0)
    {
    document.getElementById('childrenError').innerHTML = "The number of children for this booking must be between 0 and 20";
    document.getElementById("childrenError").style.height = "auto"
    errorsExist= true;
    
    }
    else
    {
    	resetErrors(childrenError);
      
    }
    return !errorsExist;
} 