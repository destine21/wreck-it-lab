function authentication(){
	var username=document.login.username.value;
    var password=document.login.password.value;
	if (username=="felix" && password=="XWj66uPR2gyYpwmS") {
	    alert("Congratulation, your flag is '" + atob("ZmxhZ3tKYXZhc2NyMXB0X2lzX3MwX3MzY3VyZX0=") + "' you can use this flag to archive score!");
	} else { 
	    alert("Username or password are incorrect!"); 
	}
}