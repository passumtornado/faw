/*const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const signup = document.getElementById('signup');
const container = document.getElementById('signinp');

signUpButton.addEventListener('click',()=>signup.classList.add('active'));
signInButton.addEventListener('click',()=>signup.classList.remove('active'));*/

$(document).ready(function(){
    $('#signUp').click(function(){
       
        $('#signup').show();
        $('#signin').hide();
       
    });
    $('#signIn').click(function(){
       
        $('#signup').hide();
        $('#signin').show();
       
    });
    
    
});