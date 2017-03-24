/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


function register()
{}

function login()
{}

function reset()
{
    prompt("Your form has been reset");
}

window.onmousedown=function()
                           {
                               if(event.button==2)
                                   alert("Sorry ... Right click is not permitted");
                           }


function register_validation()

{
	var state = true;

	name = document.getElementById("name").value;

	username = document.getElementById("username").value;

	password = document.getElementById("password").value;

	cpassword  = document.getElementById("cpassword").value;

	mail   = document.getElementById("mail").value;

	cmail    = document.getElementById("cmail").value;

	address	 = document.getElementById("address").value;

	q10 = document.getElementById("q10").value;

	q12 = document.getElementById("q12").value;

	q14 = document.getElementById("q14").value;

	q16 = document.getElementById("q16").value;

	date = document.getElementById("date").value;

	month = document.getElementById("month").value;

	year = document.getElementById("year").value;

	mobile = document.getElementById("mobile").value;

	//q = document.getElementById("").value;

		if(name == "input your name" || name == null || name == " " || name == "")
			{alert("Name cant be empty"); state = false; return state;}

		else if(username == "choose user name" || username == null || username == " " || username == "")
			{alert("Username cant be empty"); state = false; return state;}

		else if(password == null || password == " " || password == "")
			{alert("Password cant be empty"); state = false;}
		else if(password.length < 8)
			{alert("Password toooo Short . must be greater than 8 characters"); state = false;}

		//else if(cpassword == null || cpassword == " " || cpassword == "")
			//alert("Confirm Password cant be empty");
		else if(cpassword != password)
				{alert("passwords dont match"); state = false;}

		else if(mail == null || mail == " " || mail == "")
			{alert("E mail cant be empty"); state = false;}
		else if((mail.indexOf('@') < 1) || (mail.lastIndexOf('.') < mail.indexOf('@')))
			{alert("Not a valid email address"); state = false;}

		else if(cmail != mail)
			{alert("E mail addresses dont match"); state = false;}

		else if(address == "your address" || address == null || address == " " || address == "")
			{alert("Address cant be empty"); state = false;}

	/*	if(q10)
			alert(q10);
			{alert("Qualifications cant be empty" ); state = false;}
	*/
		else if(month == "" || month == " " )
			{alert("month cant be empty"); return(false);}
		else if(date == "" || date == " " )
			{		alert("date cant be empty"); return(false);}
		else if(month == 2  && date > 29 )
			{		alert("february cant have more than 29 days"); return(false);}
		else if( (month == 4 || month == 6 || month == 9 || month == 11) && date > 30 )
			{		alert("invalid date (31 days)"); return(false);}


		else if(year == "" || year == " " )
			{alert("year cant be empty"); return(false);}
		else if(address == "your address" || address == null || address == " " || address == "")
			{alert("Address cant be empty"); state = false;}


	//hobbies[]	  = document.getElementById("hobbies").value;

	//alert(name + username + password + cpassword + mail + cmail + address);


	return(state);
}

function login_validation(obj)
{
	var state = true;

	uname = document.getElementById("uname").value;

	pass = document.getElementById("pass").value;

		if(uname == null || uname == " " || uname == "")
			{alert("Username cant be empty"); return(false);}

		else if(pass == null || pass == " " || pass == "")
			{alert("Password cant be empty"); return(false);}
		else if(pass.length < 8)
			{alert("Password toooo Short . must be greater than 8 characters"); return(false);}

		else
			return(true);

	//return(state);
}

function clear(obj)
{
    obj.value = "";
}

function blr(o)
{

        if(o.value == "input your name" || o.value == null || o.value == " " || o.value == "")
			{alert("Name cant be empty"); return(false);}

}