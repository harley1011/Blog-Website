function validateRegisterForm()
{
	var inputFields = document.forms['registerForm'];
	$errorMessages = "";
	if (inputFields['firstName'].value == null || inputFields['firstName'].value== "")
	{
		$errorMessages += "First Name is required. ";
	}
	if (inputFields['lastName'].value == null || inputFields['lastName'].value== "")
	{
		$errorMessages += "Last name is required. ";
	}
	if (inputFields['email'].value == null || inputFields['email'].value== "")
	{
		$errorMessages += "An email is required. ";
	}
	if (inputFields['password'].value == null || inputFields['password'].value== "")
	{
		$errorMessages += "Password is required. ";
	}
	else if ( inputFields['password'].value != inputFields['confirmPassword'].value)
	{
		$errorMessages += "Passwords do not match. "
	}

	
	if ($errorMessages == "")
		return true;
	else
	{
		alert($errorMessages);
		return false;

	}
}