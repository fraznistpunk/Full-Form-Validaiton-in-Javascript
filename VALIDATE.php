<form name="form1" action="profile.php" method="post">
	<h1 align="center" style="background-color:red;font-color:white"><em>Welcome To form</em></h1>
<table align="center" cellspacing="7px" cellpadding="8px">
<!--First name-->
<tr>
	<td> <label for="1name">First Name :<b style="color:red">*</b></label></td>
	<td> <input type="text" name="fname" placeholder="Enter first name"></td>
</tr>
<!--Second name-->
<tr>
	<td> <label for="2name">Second Name :<b style="color:red">*</b></label></td>
	<td> <input type="text" name="sname" placeholder="Enter second name"></td>
</tr>
<tr>
	<td> <label for="email">E-mail :<b style="color:red">*</b></label></td>
	<td> <input type="text" name="mail" id="email" placeholder="Enter email"></td>
</tr>
<!--Password-->
<tr>
	<td> <label for="password">Password :<b style="color:red">*</b></label></td>
	<td> <input type="password" name="pass" maxlength="15" minlength="7" placeholder="Enter password"></td>
</tr>
<!--Confirm Password-->
<tr>
	<td> <label for="confirmpass">Confirm password :<b style="color:red">*</b></label></td>
	<td> <input type="password" name="Cpass" id="email" maxlength="15" minlength="7"></td>
</tr>
<!--Mobile number-->
<tr>
	<td> <label for="pno.">Mobile no. :<b style="color:red">*</b></label></td>
	<td> <input type="text" name="phone" id="pno" placeholder="Enter mobile number"></td>
</tr>
<!--Address-->
<tr>
	<td> <label for="addr">Address :<b style="color:red">*</b></label></td>
	<td> <textarea name="addr"></textarea></td>
</tr>
<!--DOB-->
<tr>
	<td> <label for="dob">DOB :<b style="color:red">*</b></label></td>
	<td> <input type="text" name="dateob"></td>
</tr>
<!--Gender-->
<tr>
	<td> <label for="gender">Gender :<b style="color:red">*</b></label></td>
	<td> <input type="radio" name="gender"  value="Male">Male
		 <input type="radio" name="gender" value="Female">Female</td>
</tr>
<!--Country-->
<tr>
	<td> <label for="country">Country :<b style="color:red">*</b></label></td>
	<td> <select name="country" >
		 <option value="">Select country</option>
		 <option value="United States of America">United States of America</option>
		 <option value="Africa">Africa</option>
		 <option value="Pakistan">Pakistan</option>
		 <option value="China">China</option>
		 <option value="Russia">Russia</option>
		 <option value="Singapore">Singapore</option>
		 <option value="Bangladesh">Bangladesh</option>
		 <option value="Australia">Australia</option>
		 <option value="Italy">Italy</option>		
</tr>
<!--State-->
<tr>
	<td> <label for="state">State :<b style="color:red">*</b></label></td>
	<td> <select name="state" >
		 <option value="">Select State</option>
		 <option value="Delhi">Delhi</option>
		 <option value="Banglore">Banglore</option>
		 <option value="Punjab">Punjab</option>
		 <option value="Rajasthan">Rajasthan</option>
		 <option value="Jammu & Kashmir">Jammu & Kashmir</option>
		 <option value="Himachal">Himachal</option>
		 <option value="West bengal">West Bengal</option>		
</tr>
<!--Image-->
<tr>
	<td> <label for="image">Upload Image : <b style="color:red"> * </b> </label> </td>
	<td> <input type="file"name="img"> </td>
</tr>
<!--Status-->
<tr>
	<td> <label for="status">Status :<b style="color:red">*</b></label></td>
	<td> <input type="radio" name="status"><b> Active</b>
		 <input type="radio" name="status"> <b> Inactive</b> </td>
</tr>
<!--T&C-->
<tr>
	<td><input type="checkbox"name="chkbox">I agree to the Terms & Conditions.<b style="color:red">*</b></td>
</tr>
<!--Buttons-->
<tr>
<td colspan="2px" align="center">
	<input type="submit" name="submit" value="Register" onClick="valid1();">
	<input type="reset" name="Reset" value="Cancel">
</td>
</tr>
</form>
<script>

	function valid1()
	{

		//First name validation
		if(form1.fname.value=="")
		{
			alert("First name can'nt be empty");
			form1.fname.focus();
			return false;
		}
		//Second name validation

		if(form1.sname.value=="")
		{
			alert("Second name can'nt be empty");
			form1.sname.focus();
			return false;
		}

		//E-mail validation
	var Mail=document.getElementById("email");
	var checking=/^([a-z0-9._%+-])+@(([a-z0-9.-]+\.[a-z]{2,3}))+$/; // /^([A-Za-z0-9.\-\_])+\@(([A-Za-z0-9.\-\_]+\.)([A-Za-z]{3,3}))+$/;
	if(!checking.test(Mail.value)){
	  alert("Please enter the email in valid format.");
	  form1.mail.focus();
	  return false;
	}
	//Password-Confirm Password validation
		if(form1.pass.value=="")
		{
	  alert("Password can't be empty");
	  form1.pass.focus();
	  return false;	
	}
	if(form1.Cpass.value=="")
	{
	  alert("Confirm Password can't be empty");
	  form1.Cpass.focus();
	  return false;	
	}

	//Password matching.
	if(form1.pass.value!=form1.Cpass.value)
	{
	  alert("Password does not match confirm password.");
	  form1.Cpass.focus();
	  return false;
	}

	//Mobile number validation
	if(form1.phone.value==""){
	  alert("Mobile no. can't be empty");
	  form1.phone.focus();
	  return false;	
	}
	//Mobile validation
	 var phone=document.getElementById('pno');
		var Format=/^([0-9]{10,10})+$/;
			if(!Format.test(phone.value))
			{
				alert("Incorrect Phone number. Please input valid number");
				//form1.number.focus();
				return false;
			}
	

	//Address validation
	if(form1.addr.value==""){
	  alert("Address can't be empty");
	  form1.addr.focus();
	  return false;	
	}

	//DOB validation
	if(form1.dateob.value=="")
	{
	  alert("Please selct your DOB");
	  form1.dateob.focus();
	  return false;	
	}

	//Gender Validation
	if(form1.gender[0].checked==false&&form1.gender[1].checked==false)
	{
		alert("Please specify your gender");
		return false;
	}

	//Country validation
	if(form1.country.selectedIndex==0)
	{
		alert("Please choose your country");
		form1.country.focus();
		return false;
	}

	//State Validtion
	if(form1.state.selectedIndex==0)
	{
		alert("Please choose your state");
		form1.state.focus();
		return false;
	}
	//Gender Validation
	if(form1.status[0].checked==false&&form1.status[1].checked==false)
	{
		alert("Please specify your current status");
		return false;
	}

	//T  & C validation
	if(form1.chkbox.checked==false)
	{
		alert("Please tick on Terms & Conditions");
		return false;
	}

}
	
</script>