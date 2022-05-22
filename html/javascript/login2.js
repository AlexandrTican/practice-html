const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});


//Authentification
const loginForm = document.getElementById('logInF');
const signupForm = document.getElementById('signUpF');

loginForm.addEventListener('submit', function(e){
	e.preventDefault();

	if(checkInputs("login")){
		$.ajax({
			type:"POST",
			url:"php/login.php",
			data: {
				"uEmail": loginForm.elements['uEmail'].value,
				"uPass": loginForm.elements['uPass'].value 
			},
			dataType: "html",
			success: function(retValue){
				if(retValue == false){
					document.getElementById('logInErr').innerHTML = "Wrong username or password";
				}else{
					alert('Logged in successfully, welcome back ' + retValue);
					document.location = '../index.php';
				}
			}
		});
	}

});

signupForm.addEventListener('submit', function(e){
	e.preventDefault();

	if(checkInputs("register")){
		$.ajax({
			type:"POST",
			url:"php/register.php",
			data: {
				"uName": signupForm.elements['uName'].value,
				"uEmail": signupForm.elements['uEmail'].value,
				"uPass": signupForm.elements['uPass1'].value 
			},
			dataType: "html",
			success: function(retValue){
				if(retValue){
					document.getElementById('signUpErr').innerHTML = retValue;
				}else{
					alert('Registered successfully, sign in now!');
					container.classList.remove("right-panel-active");
				}
			}
		});
	}

});

function checkInputs(type) {

	if(type == "register"){
		var errElem = document.getElementById('signUpErr');
		const passCheck = new RegExp("^(?=.*[a-z])^(?=.*[A-Z])^(?=.{8,})^(?=.*[0-9])");

		const usernameValue = signupForm.elements['uName'].value;
		const emailValue = signupForm.elements['uEmail'].value;
		const pass1Value = signupForm.elements['uPass1'].value;
		const pass2Value = signupForm.elements['uPass2'].value;

		if(usernameValue == '' || emailValue == '' || pass1Value == '' || pass2Value == ''){
			errElem.innerHTML = "Please fill in all the fields!"
			return 0;
		}
		if(usernameValue.length < 5 || usernameValue.length > 25){
			errElem.innerHTML = "Username must be between 5 and 25 chars long!"
			return 0;
		}
		if(pass1Value != pass2Value){
			errElem.innerHTML = "Passwords don't match!";
			return 0;
		}
		if(!passCheck.test(pass1Value)){
			errElem.innerHTML = "Password must be at least 8 chars long, must contain 1 lowerCase and 1upperCase character and numbers!";
			return 0;
		}

		return 1;
	}

	var errElem = document.getElementById('logInErr');

	const emailValue = loginForm.elements['uEmail'].value;
	const pass1Value = loginForm.elements['uPass'].value;

	if(emailValue == '' || pass1Value == ''){
		errElem.innerHTML = "Please fill in all the fields!"
		return 0;
	}
	return 1;
}