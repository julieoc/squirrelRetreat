function isEmptyString(inputText)
{
	var string = inputText.value.trim();
	if (string == null || string == "")
	{
		return true;
	}
	return false;
}

function checkForNumberStrng(inputText)
{
	var numberExp = /^[0-9]+$/;
	if(inputText.value.match(numberExp))
	{
		return true;
	}
	return false;
}

function checkForAlphaString(inputText)
{
	var alphaExp = /^[a-zA-Z][a-zA-Z\-]+$/;
	if(inputText.value.match(alphaExp))
	{
		return true;
	}
	return false;
}

function checkForNumbersAndAlphaOnly(inputText)
{
	var alphaAndNumericString = /^[a-zA-Z0-9]+$/
	if(inputText.value.match(alphaAndNumericString))
	{
		return true;
	}
	return false;
}

function checkForValidEmailAddress(inputText)
{
	var emailString = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ 
	/*referenced from http://www.w3resource.com/javascript/form/email-validation.php*/
	if(inputText.value.match(emailString))
	{
		return true;
	}
	return false;
}