//Password Validate
//The following lines of code checks whether
//or not user entered the same password in both
//paasword and confirm password textbox
var password = document.getElementById("txtPassword");
var confirmPassword = document.getElementById("txtConfirmPassword");

function validatePassword(){
  if(password.value != confirmPassword.value) {
    confirmPassword.setCustomValidity("Passwords Don't Match");
  } else {
    confirmPassword.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirmPassword.onkeyup = validatePassword;


//Event handler for registration form submit
$('#formUserRegistration').submit(function(event){
	formData = $('#formUserRegistration').serialize();
    // cancels the form submission
    event.preventDefault();

	$.ajax({
		type: "POST",
		url: "RegistrationDAO.php",
		data: formData+"&phpfunction=createUser",
	    success: function(echoedMsg){
			if(echoedMsg=='true')    {
				window.location="../LoginPage/Login.html";
			} else {
				$("#divMessage").html(echoedMsg);
			}
	    },
		error: function(msg){
			console.log(msg);
	    }
	});
});

//first Name bind copy and off special char
$("#txtFirstName").keypress(function(event) {
    var character = String.fromCharCode(event.keyCode);
    return isValid(character);
});

function isValid(str) {
    return !/[~`!#$%\^&*()+=\-\[\]\\';,/{}|\\":<>\?]/g.test(str);
}

$('#txtFirstName').bind("cut copy paste",function(e) {
     e.preventDefault();
 });

//==============================================
////Last Name bind copy and off special char

$("#txtLastName").keypress(function(event) {
    var character = String.fromCharCode(event.keyCode);
    return isValid(character);
});

function isValid(str) {
    return !/[~`!#$%\^&*()+=\-\[\]\\';,/{}|\\":<>\?]/g.test(str);
}

$('#txtLastName').bind("cut copy paste",function(e) {
     e.preventDefault();
 });

//=================================================
//email bind copy and off special char

$("#txtEmail").keypress(function(event) {
    var character = String.fromCharCode(event.keyCode);
    return isValid(character);
});

function isValid(str) {
    return !/[~`!#$%\^&*()+=\-\[\]\\';,/{}|\\":<>\?]/g.test(str);
}

$('#txtEmail').bind("cut copy paste",function(e) {
     e.preventDefault();
 });

//============================================
//password bind copy and off special char

$("#txtPassword").keypress(function(event) {
    var character = String.fromCharCode(event.keyCode);
    return isValid(character);
});

function isValid(str) {
    return !/[~`!#$%\^&*()+=\-\[\]\\';,/{}|\\":<>\?]/g.test(str);
}

$('#txtPassword').bind("cut copy paste",function(e) {
     e.preventDefault();
 });

//================================================================
//confirmpassword bind copy and off special char

$("#txtConfirmPassword").keypress(function(event) {
    var character = String.fromCharCode(event.keyCode);
    return isValid(character);
});

function isValid(str) {
    return !/[~`!#$%\^&*()+=\-\[\]\\';,/{}|\\":<>\?]/g.test(str);
}

$('#txtConfirmPassword').bind("cut copy paste",function(e) {
     e.preventDefault();
 });
