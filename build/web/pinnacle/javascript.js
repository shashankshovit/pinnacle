/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


function register()
{
    alert("working properly");
}

function login()
{}

window.onmousedown=function()
                           {
                               if(event.button==2)
                                   alert("Sorry ... Right click is not permitted");
                           }

function reset()
{
    alert("Your form has been reset");
}

function register_validation()
{
	var state = true;

	name = document.getElementById("name").value;

	username = document.getElementById("username").value;

	password = document.getElementById("password").value;

	cpassword  = document.getElementById("cpassword").value;

	mail   = document.getElementById("mail").value;

//	cmail    = document.getElementById("cmail").value;

	address	 = document.getElementById("address").value;

	day = document.getElementById("day").value;

	month = document.getElementById("month").value;

	year = document.getElementById("year").value;

	mobile = document.getElementById("mobile").value;

        yea = document.getElementById("yea").value;

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

/*		else if(cmail != mail)
			{alert("E mail addresses dont match"); state = false;}
*/
		else if(address == "your address" || address == null || address == " " || address == "")
			{alert("Address cant be empty"); state = false;}

	/*	if(q10)
			alert(q10);
			{alert("Qualifications cant be empty" ); state = false;}
	*/
		else if(month == "" || month == " " || month == "mm" )
			{ month = 00; alert("month cant be empty"); return(false);}
		else if(day == "" || day == " " || day == "dd" )
			{ day = 00; alert("date cant be empty"); return(false);}
		else if(month == 2  && day > 29 )
			{alert("february cant have more than 29 days"); return(false);}
		else if( (month == 4 || month == 6 || month == 9 || month == 11) && day > 30 )
			{alert("invalid date (31 days)"); return(false);}


		else if(year == "" || year == " " || year == "yy" )
			{ year = 0000; alert("year cant be empty"); return(false);}
		else if(yea == null || yea == "")
			{alert("Your current year cant be empty"); state = false;}
                else if(mobile == "your mob no here" || mobile == null || mobile == " " || mobile == "")
			{alert("Mobile number cant be empty"); state = false;}


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
function login_val(obj)
{
	var state = true;



	pass = document.getElementById("pass").value;

		if(pass == null || pass == " " || pass == "")
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
        else return true;

}

function expand()
{getElementById("").innerHtml="Working";}