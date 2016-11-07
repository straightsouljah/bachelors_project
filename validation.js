// JavaScript Document
function formValidator(){
	valid = true;

    if ( document.indexform.reg.value == "" )
    {
        alert ( "Please fill in Your Reg.Number" );
		reg.focus();
        valid = false;
    }
	 return valid;
    }
	//validate login page
function formValidator2(){
	valid = true;

    if ( document.loginform.user.value == "" )
    {
        alert ( "Please fill in Your Username" );
		user.focus();
        valid = false;
    }
	
	if ( document.loginform.psswd.value == "" )
    {
        alert ( "Please fill in Your Password" );
		psswd.focus();
        valid = false;
    }
	 return valid;
    }
	

	
	