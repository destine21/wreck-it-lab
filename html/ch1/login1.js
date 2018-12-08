function authentication(){
	var username=document.login.username.value;
    var password=document.login.password.value;
	if (username=="felix" && password=="XWj66uPR2gyYpwmS") {
	    alert("Congratulation, your flag is '" + atob("ZmxhZ3tKYXZhc2NyMXB0X2lzX3MwX3MzY3VyZX0=") + "' you can use this flag to archive score!");
	} else { 
	    alert("Username or password are incorrect!"); 
	}
}

$(document).ready(function(){
  
	$('.Page1').click(function(){
	  $('.Page1').animate({'top' : '-200vh'}, 500);
	});
	
	
  });

  