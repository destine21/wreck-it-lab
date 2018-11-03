function authentication(){
	var username=document.login.username.value;
    var password=document.login.password.value;
	if (username=="felix" && password=="flag{Java$cr1pt_is_s0_s3cure}") {
	    alert("Congratulation, you can use this password as a flag to archive score!");
	} else { 
	    alert("Username or password are incorrect!"); 
	}
}