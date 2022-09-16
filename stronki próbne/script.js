const username = document.getElementById("username");
const email = document.getElementById("email");
const password = document.getElementById("password");
const repeatedPassword = document.getElementById("repeatedPassword");


document.getElementById("buttonSubmit").addEventListener("click", function(event){
	acceptInputs()
	
	event.preventDefault()
});


function acceptInputs(){
	const usernameValue =  username.value;
	const emailValue = email.value;
	const passwordValue = password.value;
	const repeatedPasswordValue = password.value;
	
	if(usernameValue !== '' && emailValue !== '' && passwordValue !== '' && repeatedPasswordValue !== ''){
		alert ("Sukces");
	}else{
		alert ("Wypelnij wszystkie pola");
	}
	
}
