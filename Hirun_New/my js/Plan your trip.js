
/*for form validation in plan_your_trip*/
function myFunction()
{
	var userName = document.forms["myform"]["username"].value;
	var password = document.forms["myform"]["password"].value;	
		var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; //create a email standard pattern
		
		// compare user email and patten
		if(!userName.match(emailPattern))
		{
			/*if patten and user email does not match then popup a modal*/
			document.getElementById("container").style.display = "block";
			return false;
		}
		if(password == "")
		{
			/*if password is empty then give amessage */
			document.getElementById("msg").style.display = "block";
			return false;
		}
		
		return true;

}
/*close the popup modal*/
function closeFunction()
{
	document.getElementById("container").style.display = "none";
}
