var background = document.querySelector('#index');
var signUpBox = document.querySelector('#signUpBox');
var signUpBtn = document.querySelector('#signUp');
var exitBtn = document.querySelector('#exitSignUp');

signUpBtn.addEventListener('click', openBox);
function openBox(){
    background.classList.add('index');
    signUpBox.classList.replace('signUpOff' , 'signUpBox');
}

exitBtn.addEventListener('click', exitSignUp);
function exitSignUp(){
    background.classList.remove('index');
    signUpBox.classList.replace('signUpBox' , 'signUpOff');
}