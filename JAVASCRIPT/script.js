function validateForm() 
		{
			var x = document.forms["myForm"]["firstname"].value;
			if (x == "") 
			{
				alert("Name must be filled out");
				return false;
			}
			
			var x = document.forms["myForm"]["lastname"].value;
			if (x == "") 
			{
				alert("Name must be filled out");
				return false;
			}

			var email = document.forms["myForm"]["mail"].value;
			if(email.indexOf("@",0)<0 && email.indexOf(".",0)<0)
			{
				alert("Please enter a valid e-mail address.");
				return false;
			}
			var mobile = document.forms["myForm"]["phone"].value;
			if(isNaN(null) || mobile.length < 10 || mobile.length > 10)
			{
				alert("Mobile no. is no valid");
				return false;
			}
			
			var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
			if(inputtxt.value.match(paswd)) 
				{ 
				alert('Correct, try another...')
				return true;
				}
		
		}